@extends('backend.layout.app')

@section('title', 'Edit Certificate')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white rounded-3xl shadow-sm p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Edit Certificate</h1>
        <p class="text-gray-600 mb-8">Update the certificate name or replace its file</p>

        <form action="{{ route('admin.certificates.update', $certificate) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Certificate Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $certificate->name) }}"
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4" required>
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Replace File</label>
                    <input type="file" name="file"
                           class="w-full border border-gray-300 rounded-2xl p-3">
                    <p class="text-xs text-gray-500 mt-2">Accepted: PDF, JPG, JPEG, PNG. Max 10MB.</p>
                    @error('file')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror

                    @if($certificate->file)
                        <div class="mt-4">
                            <a href="{{ Storage::url($certificate->file) }}" target="_blank"
                               class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 text-sm font-medium">
                                <i class="fas fa-file"></i>
                                <span>View Current File</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <div class="flex gap-4 mt-10">
                <a href="{{ route('admin.certificates.index') }}"
                   class="px-8 py-3.5 border border-gray-300 rounded-2xl font-medium hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit"
                        class="bg-[#003366] text-white px-8 py-3.5 rounded-2xl font-medium hover:bg-[#002244]">
                    Update Certificate
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
