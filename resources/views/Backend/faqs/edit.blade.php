@extends('backend.layout.app')

@section('title', 'Edit FAQ')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white rounded-3xl shadow-sm p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Edit FAQ</h1>
        <p class="text-gray-600 mb-8">Update your FAQ content</p>

        <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Question <span class="text-red-500">*</span></label>
                    <textarea name="question" rows="3" class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4" required>{{ old('question', $faq->question) }}</textarea>
                    @error('question')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Answer</label>
                    <textarea name="answer" rows="5" class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">{{ old('answer', $faq->answer) }}</textarea>
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
                    Update FAQ
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
