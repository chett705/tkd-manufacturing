@extends('backend.layout.app')

@section('title', 'Edit Section')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <div class="bg-white rounded-3xl shadow-sm p-8">
        
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Edit Home Section</h1>
                <p class="text-gray-600 mt-1">Update the information for this section</p>
            </div>
            <a href="{{ route('admin.home-sections.index') }}" 
               class="text-gray-500 hover:text-gray-700 flex items-center gap-2">
                <i class="fas fa-arrow-left"></i> Back to List
            </a>
        </div>

        <form action="{{ route('admin.home-sections.update', $homeSection) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Section Name -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Section Name <span class="text-red-500">*</span></label>
                    <select name="section_name" class="w-full rounded-2xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 py-3" required>
                        <option value="hero" {{ $homeSection->section_name == 'hero' ? 'selected' : '' }}>Hero Banner</option>
                        <option value="key_products" {{ $homeSection->section_name == 'key_products' ? 'selected' : '' }}>Key Products</option>
                        <option value="why_choose_us" {{ $homeSection->section_name == 'why_choose_us' ? 'selected' : '' }}>Why Choose Us</option>
                        <option value="production_quality" {{ $homeSection->section_name == 'production_quality' ? 'selected' : '' }}>Production & Quality</option>
                        <option value="markets" {{ $homeSection->section_name == 'markets' ? 'selected' : '' }}>Markets We Serve</option>
                        <option value="faq" {{ $homeSection->section_name == 'faq' ? 'selected' : '' }}>FAQ Section</option>
                        <option value="cta" {{ $homeSection->section_name == 'cta' ? 'selected' : '' }}>Call to Action (CTA)</option>
                    </select>
                </div>

                <!-- Title English -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title (English)</label>
                    <input type="text" name="title" value="{{ old('title', $homeSection->title) }}" 
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4" required>
                </div>

                <!-- Title Khmer -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title (Khmer)</label>
                    <input type="text" name="title_kh" value="{{ old('title_kh', $homeSection->title_kh) }}" 
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">
                </div>

                <!-- Content -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Content / Description</label>
                    <textarea name="content" rows="8" 
                              class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">{{ old('content', $homeSection->content) }}</textarea>
                </div>

                <!-- Background Image -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Background Image</label>
                    <input type="file" name="background_image" 
                           class="w-full border border-gray-300 rounded-2xl p-3">
                    @if($homeSection->background_image)
                        <p class="text-xs text-gray-500 mt-2">Current: {{ $homeSection->background_image }}</p>
                    @endif
                </div>

                <!-- Order -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Display Order</label>
                    <input type="number" name="order" value="{{ old('order', $homeSection->order) }}" 
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">
                </div>

                <!-- Active -->
                <div class="flex items-center gap-3">
                    <input type="checkbox" name="is_active" id="is_active" 
                           {{ $homeSection->is_active ? 'checked' : '' }} class="w-5 h-5 text-blue-600 rounded">
                    <label for="is_active" class="text-gray-700 font-medium">Active (Show on website)</label>
                </div>

            </div>

            <!-- Action Buttons -->
            <div class="flex gap-4 mt-10">
                <a href="{{ route('admin.home-sections.index') }}" 
                   class="px-8 py-3.5 border border-gray-300 rounded-2xl font-medium hover:bg-gray-50 transition">
                    Cancel
                </a>
                <button type="submit" 
                        class="bg-[#003366] text-white px-8 py-3.5 rounded-2xl font-medium hover:bg-[#002244] transition flex-1 sm:flex-none">
                    💾 Update Section
                </button>
            </div>
        </form>
    </div>
</div>
@endsection