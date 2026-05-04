@extends('backend.layout.app')

@section('title', 'Comparison - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Rice Straws vs Paper Straws</h1>
            <p class="text-gray-600 mt-2">Key Comparison</p>
        </div>
        <a href="{{ route('admin.blogs.create') }}"
           class="bg-[#003366] text-white px-6 py-3.5 rounded-2xl flex items-center gap-2 hover:bg-[#002244] transition shadow-sm w-full sm:w-auto justify-center">
            <i class="fas fa-plus"></i>
            <span>Add New Comparison</span>
        </a>
    </div>

    <div class="bg-white rounded-3xl shadow-sm overflow-hidden hidden md:block">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-8 py-6 text-left w-56">Feature</th>
                    <th class="px-8 py-6 text-center text-emerald-700 font-bold">Rice Straws</th>
                    <th class="px-8 py-6 text-center text-amber-700 font-bold">Paper Straws</th>
                    <th class="px-8 py-6 text-center text-sm font-medium text-gray-500 w-28">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @forelse($blogs as $blog)
                <tr class="hover:bg-gray-50">
                    <td class="px-8 py-6 font-medium">{{ $blog->Feature }}</td>
                    <td class="px-8 py-6 text-center text-emerald-700 font-medium">{{ $blog->{'Rice Straws'} ?: 'N/A' }}</td>
                    <td class="px-8 py-6 text-center text-amber-700">{{ $blog->{'Paper Straws'} ?: 'N/A' }}</td>
                    <td class="px-8 py-6 text-center">
                        <div class="flex justify-center gap-4">
                            <a href="{{ route('admin.blogs.edit', $blog) }}" class="text-blue-600 hover:text-blue-700 text-xl">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" data-delete-message="This comparison will be deleted permanently." class="text-red-600 hover:text-red-700 text-xl">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-8 py-10 text-center text-gray-500">No comparisons found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="md:hidden space-y-6">
        @forelse($blogs as $blog)
        <div class="bg-white rounded-3xl p-6 shadow-sm">
            <h3 class="font-semibold text-lg mb-4">{{ $blog->Feature }}</h3>
            <div class="flex justify-between items-center">
                <div class="text-center flex-1">
                    <p class="text-sm text-gray-500 mb-2">Rice Straws</p>
                    <p class="font-medium text-emerald-700">{{ $blog->{'Rice Straws'} ?: 'N/A' }}</p>
                </div>
                <div class="text-2xl text-gray-300">VS</div>
                <div class="text-center flex-1">
                    <p class="text-sm text-gray-500 mb-2">Paper Straws</p>
                    <p class="font-medium text-amber-700">{{ $blog->{'Paper Straws'} ?: 'N/A' }}</p>
                </div>
            </div>
            <div class="mt-5 flex justify-end gap-4">
                <a href="{{ route('admin.blogs.edit', $blog) }}" class="text-blue-600">
                    <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" data-delete-message="This comparison will be deleted permanently." class="text-red-600">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
        @empty
        <div class="rounded-3xl border border-dashed border-gray-300 p-6 text-center text-gray-500">
            No comparisons found.
        </div>
        @endforelse
    </div>
</div>
@endsection
