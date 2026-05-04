@extends('backend.layout.app')

@section('title', 'Contacts - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Contacts Management</h1>
            <p class="text-gray-600 mt-1">Manage all customer inquiries and messages</p>
        </div>
    </div>

    <div class="bg-white p-5 rounded-3xl shadow-sm mb-8 flex flex-col md:flex-row gap-4">
        <div class="flex-1">
            <input type="text" id="search"
                class="w-full px-5 py-4 border border-gray-200 rounded-2xl focus:outline-none focus:border-[#003366]"
                placeholder="Search by name or email...">
        </div>
        <select id="country-filter"
            class="px-5 py-4 border border-gray-200 rounded-2xl focus:outline-none focus:border-[#003366]">
            <option value="">All Countries</option>
            @foreach($contacts->pluck('country')->filter()->unique()->sort()->values() as $country)
                <option value="{{ $country }}">{{ $country }}</option>
            @endforeach
        </select>
        <button type="button" onclick="filterContacts()"
            class="bg-gray-900 text-white px-10 py-4 rounded-2xl hover:bg-black transition font-medium">
            Filter
        </button>
    </div>

    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full min-w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Full Name</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Country</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Email</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">WhatsApp</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Product</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Quantity</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Message</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-24">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($contacts as $contact)
                        <tr class="hover:bg-gray-50 transition contact-row"
                            data-search="{{ strtolower($contact->full_name . ' ' . $contact->email) }}"
                            data-country="{{ strtolower($contact->country) }}">
                            <td class="px-6 py-5 font-semibold text-gray-800">{{ $contact->full_name }}</td>
                            <td class="px-6 py-5 text-sm text-gray-600">{{ $contact->country }}</td>
                            <td class="px-6 py-5 text-sm text-gray-600">{{ $contact->email }}</td>
                            <td class="px-6 py-5 text-sm text-gray-600">{{ $contact->whatsapp ?: '-' }}</td>
                            <td class="px-6 py-5 text-sm text-gray-600">{{ $contact->product?->name ?: 'N/A' }}</td>
                            <td class="px-6 py-5 text-sm font-medium text-gray-700">{{ $contact->quantity ?: '-' }}</td>
                            <td class="px-6 py-5 text-sm text-gray-600">{{ \Illuminate\Support\Str::limit($contact->message ?: '-', 60) }}</td>
                            <td class="px-6 py-5 text-center">
                                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" data-delete-message="This contact inquiry will be deleted permanently." class="text-red-600 hover:text-red-700 text-xl">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-12 text-center text-gray-500">No contact requests found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="md:hidden space-y-4 p-4">
            @forelse($contacts as $contact)
                <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm contact-row"
                    data-search="{{ strtolower($contact->full_name . ' ' . $contact->email) }}"
                    data-country="{{ strtolower($contact->country) }}">
                    <div class="flex justify-between items-start gap-4">
                        <div>
                            <h3 class="font-semibold text-lg text-gray-800">{{ $contact->full_name }}</h3>
                            <p class="text-sm text-gray-500 mt-1">{{ $contact->country }}{{ $contact->whatsapp ? ' - ' . $contact->whatsapp : '' }}</p>
                            <p class="text-sm text-gray-600 mt-1 break-all">{{ $contact->email }}</p>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2 text-sm text-gray-600">
                        <p><strong>Product:</strong> {{ $contact->product?->name ?: 'N/A' }}</p>
                        <p><strong>Quantity:</strong> {{ $contact->quantity ?: '-' }}</p>
                        <p><strong>Message:</strong> {{ $contact->message ?: '-' }}</p>
                    </div>
                    <div class="mt-5 flex gap-3">
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="w-full">
                            @csrf
                            @method('DELETE')
                            <button type="submit" data-delete-message="This contact inquiry will be deleted permanently." class="w-full text-center py-3 bg-red-50 text-red-600 rounded-2xl text-sm font-medium">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm text-center text-gray-500">
                    No contact requests found.
                </div>
            @endforelse
        </div>
    </div>

    @if($contacts->hasPages())
        <div class="mt-6 rounded-3xl border border-gray-100 bg-white px-4 py-4 shadow-sm sm:px-6">
            {{ $contacts->links() }}
        </div>
    @endif
</div>

<script>
    function filterContacts() {
        const searchValue = document.getElementById('search').value.trim().toLowerCase();
        const countryValue = document.getElementById('country-filter').value.trim().toLowerCase();
        const rows = document.querySelectorAll('.contact-row');

        rows.forEach((row) => {
            const searchText = row.dataset.search || '';
            const countryText = row.dataset.country || '';
            const matchesSearch = !searchValue || searchText.includes(searchValue);
            const matchesCountry = !countryValue || countryText === countryValue;

            row.style.display = matchesSearch && matchesCountry ? '' : 'none';
        });
    }
</script>
@endsection
