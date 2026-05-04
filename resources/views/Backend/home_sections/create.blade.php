@extends('backend.layout.app')

@section('title', 'Add New Section')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <div class="bg-white rounded-3xl shadow-sm p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Add New Home Section</h1>
        <p class="text-gray-600 mb-8">Create a new section for the website homepage</p>

        <form action="{{ route('admin.home-sections.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Section Name -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Section Name <span class="text-red-500">*</span></label>
                    <select name="section_name" class="w-full rounded-2xl border-gray-300 focus:border-blue-500 focus:ring-blue-500" required>
                        <option value="">-- Select Section Type --</option>
                        <option value="hero">Hero Banner</option>
                        <option value="key_products">Key Products</option>
                        <option value="why_choose_us">Why Choose Us</option>
                        <option value="production_quality">Production & Quality</option>
                        <option value="markets">Markets We Serve</option>
                        <option value="faq">FAQ Section</option>
                        <option value="cta">Call to Action (CTA)</option>
                    </select>
                </div>

                <!-- Title English -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title (English)</label>
                    <input type="text" name="title" class="w-full rounded-2xl border-gray-300 focus:border-blue-500" required>
                </div>

                <!-- Title Khmer -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Title (Khmer)</label>
                    <input type="text" name="title_kh" class="w-full rounded-2xl border-gray-300 focus:border-blue-500">
                </div>

                <!-- Content -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Content / Description</label>
                    <textarea name="content" rows="6" class="w-full rounded-2xl border-gray-300 focus:border-blue-500"></textarea>
                </div>

                <!-- Background Image -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Background Image</label>
                    <input type="file" name="background_image" class="w-full border border-gray-300 rounded-2xl p-2">
                </div>

                <!-- Order -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Display Order</label>
                    <input type="number" name="order" value="0" class="w-full rounded-2xl border-gray-300 focus:border-blue-500">
                </div>

            </div>

            <!-- Active Checkbox -->
            <div class="mt-6">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="is_active" checked class="w-5 h-5 text-blue-600 rounded">
                    <span class="ml-3 text-gray-700 font-medium">Active (Show on website)</span>
                </label>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4 mt-10">
                <a href="{{ route('admin.home-sections.index') }}" 
                   class="px-8 py-3.5 border border-gray-300 rounded-2xl font-medium hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit" 
                        class="bg-[#003366] text-white px-8 py-3.5 rounded-2xl font-medium hover:bg-[#002244] transition">
                    Save Section
                </button>
            </div>
        </form>
    </div>
</div>
@endsection