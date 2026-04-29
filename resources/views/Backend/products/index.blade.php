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

    <!-- Search & Filter -->
    <div class="bg-white p-5 rounded-3xl shadow-sm mb-8 flex flex-col md:flex-row gap-4">
        <div class="flex-1">
            <input type="text" id="search" 
                   class="w-full px-5 py-4 border border-gray-200 rounded-2xl focus:outline-none focus:border-[#003366]"
                   placeholder="Search products...">
        </div>
        <button onclick="filterProducts()" 
                class="bg-gray-900 text-white px-10 py-4 rounded-2xl hover:bg-black transition font-medium">
            Search
        </button>
    </div>

    <!-- Products Table -->
    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        
        <!-- Desktop & Tablet Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full min-w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Product Name</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Sizes</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Colors</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Status</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-28">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100" id="products-table">
                    
                    <!-- Dummy Product 1 -->
                    <tr class="hover:bg-gray-50 transition">
                        
                        <td class="px-6 py-5 font-semibold text-gray-800">Rice Straw Drinking Straw</td>
                        <td class="px-6 py-5 text-sm text-gray-600">15cm, 20cm, 25cm</td>
                        <td class="px-6 py-5 text-sm text-gray-600">Natural, White</td>
                        <td class="px-6 py-5">
                            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-green-100 text-green-700">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-xl"><i class="fas fa-edit"></i></a>
                                <button onclick="alert('Deleted! (Testing)')" class="text-red-600 hover:text-red-700 text-xl">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Dummy Product 2 -->
                    <tr class="hover:bg-gray-50 transition">
                        
                        <td class="px-6 py-5 font-semibold text-gray-800">Biodegradable Packaging Bag</td>
                        <td class="px-6 py-5 text-sm text-gray-600">Small, Medium, Large</td>
                        <td class="px-6 py-5 text-sm text-gray-600">Brown, Transparent</td>
                        <td class="px-6 py-5">
                            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-green-100 text-green-700">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-xl"><i class="fas fa-edit"></i></a>
                                <button onclick="alert('Deleted! (Testing)')" class="text-red-600 hover:text-red-700 text-xl">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Mobile Card View (Dummy) -->
        <div class="md:hidden space-y-4 p-4">
            <!-- Product 1 -->
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex gap-4">
                   
                    <div class="flex-1">
                        <h3 class="font-semibold text-lg">Rice Straw Drinking Straw</h3>
                        <div class="mt-2 text-sm space-y-1">
                            <div><span class="text-gray-500">Sizes:</span> 15cm, 20cm, 25cm</div>
                            <div><span class="text-gray-500">Colors:</span> Natural, White</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="bg-green-100 text-green-700 px-4 py-1 rounded-full text-sm">Active</span>
                            <div class="flex gap-4">
                                <a href="#" class="text-blue-600"><i class="fas fa-edit"></i></a>
                                <button onclick="alert('Deleted!')" class="text-red-600"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex gap-4">
                   
                    <div class="flex-1">
                        <h3 class="font-semibold text-lg">Biodegradable Packaging Bag</h3>
                        <div class="mt-2 text-sm space-y-1">
                            <div><span class="text-gray-500">Sizes:</span> Small, Medium, Large</div>
                            <div><span class="text-gray-500">Colors:</span> Brown, Transparent</div>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="bg-green-100 text-green-700 px-4 py-1 rounded-full text-sm">Active</span>
                            <div class="flex gap-4">
                                <a href="#" class="text-blue-600"><i class="fas fa-edit"></i></a>
                                <button onclick="alert('Deleted!')" class="text-red-600"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection