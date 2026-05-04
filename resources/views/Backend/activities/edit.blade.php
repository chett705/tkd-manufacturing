@extends('backend.layout.app')

@section('title', 'Edit Activity')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white rounded-3xl shadow-sm p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Edit Activity</h1>
        <p class="text-gray-600 mb-8">Update your activity information</p>

        <form action="{{ route('admin.activities.update', $activity) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Activity Title <span class="text-red-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title', $activity->title) }}"
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4" required>
                    @error('title')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea name="description" rows="5" class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">{{ old('description', $activity->description) }}</textarea>
                    @error('description')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Activity Image</label>
                    <input type="file" name="image" class="w-full border border-gray-300 rounded-2xl p-3">
                    @error('image')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror

                    @if($activity->image)
                        <img src="{{ Storage::url($activity->image) }}" class="mt-3 w-32 rounded-lg" alt="{{ $activity->title }}">
                    @endif
                </div>
            </div>

            <div class="flex gap-4 mt-10">
                <a href="{{ route('admin.activities.index') }}"
                   class="px-8 py-3.5 border border-gray-300 rounded-2xl font-medium hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit"
                        class="bg-[#003366] text-white px-8 py-3.5 rounded-2xl font-medium hover:bg-[#002244]">
                    Update Activity
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
