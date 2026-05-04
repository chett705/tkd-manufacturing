@extends('backend.layout.app')

@section('title', 'Add New FAQ')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white rounded-3xl shadow-sm p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Add New FAQ</h1>
        <p class="text-gray-600 mb-8">Create a new frequently asked question</p>

        <form action="{{ route('admin.faqs.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Question <span class="text-red-500">*</span></label>
                    <textarea name="question" rows="3" class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4" required>{{ old('question') }}</textarea>
                    @error('question')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Answer</label>
                    <textarea name="answer" rows="5" class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">{{ old('answer') }}</textarea>
                    @error('answer')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex gap-4 mt-10">
                <a href="{{ route('admin.faqs.index') }}"
                   class="px-8 py-3.5 border border-gray-300 rounded-2xl font-medium hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit"
                        class="bg-[#003366] text-white px-8 py-3.5 rounded-2xl font-medium hover:bg-[#002244]">
                    Create FAQ
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
