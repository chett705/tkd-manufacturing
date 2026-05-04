@extends('backend.layout.app')

@section('title', 'FAQs - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @if(session('success'))
        <div class="mb-6 rounded-2xl bg-green-100 px-4 py-3 text-green-700">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">FAQ Management</h1>
            <p class="text-gray-600 mt-1">Manage all your frequently asked questions</p>
        </div>

        <a href="{{ route('admin.faqs.create') }}"
           class="bg-[#003366] text-white px-6 py-3.5 rounded-2xl flex items-center gap-2 hover:bg-[#002244] transition shadow-sm w-full sm:w-auto justify-center">
            <i class="fas fa-plus"></i>
            <span>Add New FAQ</span>
        </a>
    </div>

    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full min-w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500 w-12">No</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Question</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Answer</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-28">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($faqs as $faq)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-5 text-gray-400">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</td>
                        <td class="px-6 py-5 font-semibold text-gray-800">{{ $faq->question }}</td>
                        <td class="px-6 py-5 text-sm text-gray-600 line-clamp-2">{{ $faq->answer ?: 'No answer yet.' }}</td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <a href="{{ route('admin.faqs.edit', $faq) }}" class="text-blue-600 hover:text-blue-700 text-xl">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this FAQ?')" class="text-red-600 hover:text-red-700 text-xl">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-10 text-center text-gray-500">No FAQs found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="md:hidden space-y-4 p-4">
            @forelse($faqs as $faq)
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <h3 class="font-semibold text-lg">{{ $faq->question }}</h3>
                <p class="text-gray-600 text-sm mt-3 line-clamp-3">{{ $faq->answer ?: 'No answer yet.' }}</p>
                <div class="mt-5 flex justify-between items-center">
                    <div class="flex gap-4">
                        <a href="{{ route('admin.faqs.edit', $faq) }}" class="text-blue-600">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this FAQ?')" class="text-red-600">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="rounded-3xl border border-dashed border-gray-300 p-6 text-center text-gray-500">
                No FAQs found.
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
