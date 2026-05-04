@extends('backend.layout.app')

@section('title', 'Products - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Products Management</h1>
            <p class="text-gray-600 mt-1">Manage all your rice straws and packaging products</p>
        </div>

        <a href="{{ route('admin.products.create') }}"
            class="bg-[#003366] text-white px-6 py-3.5 rounded-2xl flex items-center gap-2 hover:bg-[#002244] transition shadow-sm w-full sm:w-auto justify-center">
            <i class="fas fa-plus"></i>
            <span>Add New Product</span>
        </a>
    </div>

    <!-- Products Table -->
    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">

        <!-- Desktop & Tablet Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full min-w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Product</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Sizes</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Colors</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Packaging</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500">Status</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-28">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($products as $product)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-5">
                            <div class="flex items-center gap-4">
                                @if($product->image)
                                <img src="{{ Storage::url($product->image) }}"
                                    class="w-12 h-12 object-cover rounded-lg"
                                    alt="{{ $product->name }}">
                                @else
                                <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center text-gray-400">
                                    <i class="fas fa-image"></i>
                                </div>
                                @endif
                                <div>
                                    <div class="font-semibold text-gray-800">{{ $product->name }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-5 text-sm text-gray-600">
                            {{ is_array($product->sizes) ? implode(', ', $product->sizes) : ($product->sizes ?? '—') }}
                        </td>
                        <td class="px-6 py-5 text-sm text-gray-600">
                            {{ is_array($product->colors) ? implode(', ', $product->colors) : ($product->colors ?? '—') }}
                        </td>
                        <td class="px-6 py-5 text-sm text-gray-600">{{ $product->packaging ?? '—' }}</td>
                        <td class="px-6 py-5">
                            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-green-100 text-green-700">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-600 hover:text-blue-700 text-xl">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this product?')"
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
            @foreach($products as $product)
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex gap-4">
                    @if($product->image)
                    <img src="{{ Storage::url($product->image) }}"
                        class="w-16 h-16 object-cover rounded-xl"
                        alt="{{ $product->name }}">
                    @else
                    <div class="w-16 h-16 bg-gray-200 rounded-xl flex items-center justify-center text-gray-400 flex-shrink-0">
                        <i class="fas fa-image text-2xl"></i>
                    </div>
                    @endif
                    <div class="flex-1">
                        <h3 class="font-semibold text-lg">{{ $product->name }}</h3>
                        <div class="mt-2 text-sm space-y-1 text-gray-600">
                            <div><span class="text-gray-500">Sizes:</span> {{ is_array($product->sizes) ? implode(', ', $product->sizes) : ($product->sizes ?? '—') }}</div>
                            <div><span class="text-gray-500">Colors:</span> {{ is_array($product->colors) ? implode(', ', $product->colors) : ($product->colors ?? '—') }}</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="bg-green-100 text-green-700 px-4 py-1 rounded-full text-sm">Active</span>
                            <div class="flex gap-4">
                                <a href="{{ route('admin.products.edit', $product) }}" class="text-blue-600">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this product?')" class="text-red-600">
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