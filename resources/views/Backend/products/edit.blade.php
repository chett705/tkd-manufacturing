@extends('backend.layout.app')

@section('title', 'Edit Product')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <div class="bg-white rounded-3xl shadow-sm p-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Edit Product</h1>

        <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Product Name</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}" 
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4" required>
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea name="description" rows="5" class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">{{ old('description', $product->description) }}</textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Sizes (JSON)</label>
                    <input type="text" name="sizes" value="{{ old('sizes', json_encode($product->sizes)) }}" 
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Colors (JSON)</label>
                    <input type="text" name="colors" value="{{ old('colors', json_encode($product->colors)) }}" 
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Packaging</label>
                    <input type="text" name="packaging" value="{{ old('packaging', $product->packaging) }}" 
                           class="w-full rounded-2xl border-gray-300 focus:border-blue-500 py-3 px-4">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Main Image</label>
                    <input type="file" name="image" class="w-full border border-gray-300 rounded-2xl p-3">
                    @if($product->image)
                        <img src="{{ Storage::url($product->image) }}" class="mt-3 w-32 rounded-lg" alt="{{ $product->name }}">
                    @endif
                </div>

            </div>

            <div class="flex gap-4 mt-10">
                <a href="{{ route('admin.products.index') }}" class="px-8 py-3.5 border border-gray-300 rounded-2xl font-medium hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit" class="bg-[#003366] text-white px-8 py-3.5 rounded-2xl font-medium hover:bg-[#002244]">
                    Update Product
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
