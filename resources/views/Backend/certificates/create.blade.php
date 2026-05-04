@extends('backend.layout.app')

@section('title', 'Add New Certificate')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white rounded-3xl shadow-sm p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Add New Certificate</h1>
        <p class="text-gray-600 mb-8">Upload a certificate file or image for your website</p>

        <form action="{{ route('admin.certificates.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Certificate Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name') }}"
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4" required>
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Certificate File</label>
                    <input type="file" name="file"
                           class="w-full border border-gray-300 rounded-2xl p-3">
                    <p class="text-xs text-gray-500 mt-2">Accepted: PDF, JPG, JPEG, PNG. Max 10MB.</p>
                    @error('file')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex gap-4 mt-10">
                <a href="{{ route('admin.certificates.index') }}"
                   class="px-8 py-3.5 border border-gray-300 rounded-2xl font-medium hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit"
                        class="bg-[#003366] text-white px-8 py-3.5 rounded-2xl font-medium hover:bg-[#002244]">
                    Create Certificate
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
