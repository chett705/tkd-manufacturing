@extends('backend.layout.app')

@section('title', 'Manage Home Sections')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Home Page Sections</h1>
            <p class="text-gray-600 mt-1">Manage all sections displayed on the website homepage</p>
        </div>

        <a href="{{ route('admin.home-sections.create') }}"
            class="bg-[#003366] text-white px-6 py-3.5 rounded-2xl flex items-center gap-2 hover:bg-[#002244] transition shadow-sm w-full sm:w-auto justify-center">
            <i class="fas fa-plus"></i>
            <span>Add New Section</span>
        </a>
    </div>

    <!-- Sections Table / Card -->
    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">

        <!-- Desktop & Tablet Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Order</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Section Name</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Title (English)</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Title (Khmer)</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500">Status</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-32">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($sections as $section)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-5 font-medium">{{ $section->order }}</td>
                        <td class="px-6 py-5">
                            <span class="font-semibold text-gray-800">{{ $section->section_name }}</span>
                        </td>
                        <td class="px-6 py-5">{{ $section->title ?? '—' }}</td>
                        <td class="px-6 py-5 text-gray-600">{{ $section->title_kh ?? '—' }}</td>
                        <td class="px-6 py-5 text-center">
                            @if($section->is_active)
                                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-green-100 text-green-700">
                                    Active
                                </span>
                            @else
                                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-gray-100 text-gray-600">
                                    Inactive
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <a href="{{ route('admin.home-sections.edit', $section) }}" 
                                   class="text-blue-600 hover:text-blue-700 text-xl">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.home-sections.destroy', $section) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this section?')" 
                                            class="text-red-600 hover:text-red-700 text-xl">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="md:hidden space-y-4 p-4">
            @foreach($sections as $section)
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex justify-between items-start">
                    <div>
                        <span class="text-xs font-medium text-gray-500">{{ $section->section_name }}</span>
                        <h3 class="font-semibold text-lg mt-1">{{ $section->title ?? 'No Title' }}</h3>
                        @if($section->title_kh)
                            <p class="text-gray-600 text-sm mt-1">{{ $section->title_kh }}</p>
                        @endif
                    </div>
                    <div class="text-right">
                        @if($section->is_active)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs bg-green-100 text-green-700">Active</span>
                        @else
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs bg-gray-100 text-gray-600">Inactive</span>
                        @endif
                    </div>
                </div>

                <div class="flex justify-end gap-4 mt-6">
                    <a href="{{ route('admin.home-sections.edit', $section) }}" class="text-blue-600">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('admin.home-sections.destroy', $section) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this section?')" class="text-red-600">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection