@extends('backend.layout.app')

@section('title', 'Edit Blog Comparison')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white rounded-3xl shadow-sm p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Edit Comparison</h1>
        <p class="text-gray-600 mb-8">Update your comparison row</p>

        <form action="{{ route('admin.blogs.update', $blog) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Feature <span class="text-red-500">*</span></label>
                    <input type="text" name="feature" value="{{ old('feature', $blog->Feature) }}"
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4" required>
                    @error('feature')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Rice Straws</label>
                    <textarea name="rice_straws" rows="4" class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">{{ old('rice_straws', $blog->{'Rice Straws'}) }}</textarea>
                    @error('rice_straws')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Paper Straws</label>
                    <textarea name="paper_straws" rows="4" class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">{{ old('paper_straws', $blog->{'Paper Straws'}) }}</textarea>
                    @error('paper_straws')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex gap-4 mt-10">
                <a href="{{ route('admin.blogs.index') }}"
                   class="px-8 py-3.5 border border-gray-300 rounded-2xl font-medium hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit"
                        class="bg-[#003366] text-white px-8 py-3.5 rounded-2xl font-medium hover:bg-[#002244]">
                    Update Comparison
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
