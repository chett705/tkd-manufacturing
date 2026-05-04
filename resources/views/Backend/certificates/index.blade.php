@extends('backend.layout.app')

@section('title', 'Certificates - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Certificate Management</h1>
            <p class="text-gray-600 mt-1">Manage all your company certificates and awards</p>
        </div>

        <a href="{{ route('admin.certificates.create') }}"
           class="bg-[#003366] text-white px-6 py-3.5 rounded-2xl flex items-center gap-2 hover:bg-[#002244] transition shadow-sm w-full sm:w-auto justify-center">
            <i class="fas fa-plus"></i>
            <span>Add New Certificate</span>
        </a>
    </div>

    <!-- Certificates Table -->
    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">

        <!-- Desktop & Tablet Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full min-w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Certificate Name</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">File</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Status</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-28">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">

                    @foreach($certificates as $certificate)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-5 font-semibold text-gray-800">{{ $certificate->name }}</td>
                        
                        <!-- File Column -->
                        <td class="px-6 py-5">
                            @if($certificate->file)
                                <a href="{{ Storage::url($certificate->file) }}" target="_blank"
                                   class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 text-sm font-medium">
                                    <i class="fas fa-file-pdf"></i>
                                    <span>View File</span>
                                </a>
                            @else
                                <span class="text-gray-400 text-sm">— No file —</span>
                            @endif
                        </td>
                        
                        <td class="px-6 py-5">
                            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-green-100 text-green-700">
                                Active
                            </span>
                        </td>
                        
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <a href="{{ route('admin.certificates.edit', $certificate) }}" 
                                   class="text-blue-600 hover:text-blue-700 text-xl">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.certificates.destroy', $certificate) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this certificate?')" 
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
            @foreach($certificates as $certificate)
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex gap-4">
                    <div class="flex-1">
                        <h3 class="font-semibold text-lg">{{ $certificate->name }}</h3>
                        
                        @if($certificate->file)
                        <div class="mt-2">
                            <a href="{{ Storage::url($certificate->file) }}" target="_blank"
                               class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 text-sm">
                                <i class="fas fa-file-pdf"></i>
                                <span>View Certificate File</span>
                            </a>
                        </div>
                        @endif

                        <div class="mt-4 flex justify-between items-center">
                            <span class="bg-green-100 text-green-700 px-4 py-1 rounded-full text-sm">Active</span>
                            <div class="flex gap-4">
                                <a href="{{ route('admin.certificates.edit', $certificate) }}" class="text-blue-600">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.certificates.destroy', $certificate) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this certificate?')" class="text-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection