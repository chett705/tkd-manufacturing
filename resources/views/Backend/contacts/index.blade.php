@extends('backend.layout.app')

@section('title', 'Contacts - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Contacts Management</h1>
            <p class="text-gray-600 mt-1">Manage all customer inquiries and messages</p>
        </div>
    </div>

    <!-- Search & Filter -->
    <div class="bg-white p-5 rounded-3xl shadow-sm mb-8 flex flex-col md:flex-row gap-4">
        <div class="flex-1">
            <input type="text" id="search" 
                   class="w-full px-5 py-4 border border-gray-200 rounded-2xl focus:outline-none focus:border-[#003366]"
                   placeholder="Search by name or email...">
        </div>
        <select id="country-filter" 
                class="px-5 py-4 border border-gray-200 rounded-2xl focus:outline-none focus:border-[#003366]">
            <option value="">All Countries</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Thailand">Thailand</option>
            <option value="Vietnam">Vietnam</option>
            <option value="China">China</option>
            <option value="USA">USA</option>
            <option value="Others">Others</option>
        </select>
        <button onclick="filterContacts()" 
                class="bg-gray-900 text-white px-10 py-4 rounded-2xl hover:bg-black transition font-medium">
            Filter
        </button>
    </div>

    <!-- Contacts Table -->
    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        
        <!-- Desktop & Tablet Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full min-w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Full Name</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Country</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Email</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">WhatsApp</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Product</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Quantity</th>                      
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-32">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    
                    <!-- Dummy Contact 1 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-5 font-semibold">Sokha Chhay</td>
                        <td class="px-6 py-5">
                            <span class="inline-flex items-center gap-2">
                                🇰🇭 <span>Cambodia</span>
                            </span>
                        </td>
                        <td class="px-6 py-5 text-sm text-gray-600">sokha.chhay@gmail.com</td>
                        <td class="px-6 py-5 text-sm text-gray-600">+855 12 345 678</td>
                        <td class="px-6 py-5 text-sm">Rice Straw 20cm</td>
                        <td class="px-6 py-5 text-sm font-medium">5000</td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <a href="{{ route('admin.contacts.edit', 1) }}" 
                                   class="text-blue-600 hover:text-blue-700 text-xl">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="alert('Deleted! (Testing)')" 
                                        class="text-red-600 hover:text-red-700 text-xl">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Dummy Contact 2 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-5 font-semibold">John Smith</td>
                        <td class="px-6 py-5">
                            <span class="inline-flex items-center gap-2">
                                🇺🇸 <span>USA</span>
                            </span>
                        </td>
                        <td class="px-6 py-5 text-sm text-gray-600">john.smith@email.com</td>
                        <td class="px-6 py-5 text-sm text-gray-600">+1 234 567 890</td>
                        <td class="px-6 py-5 text-sm">Biodegradable Bag</td>
                        <td class="px-6 py-5 text-sm font-medium">2000</td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <a href="{{ route('admin.contacts.edit', 2) }}" 
                                   class="text-blue-600 hover:text-blue-700 text-xl">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="alert('Deleted! (Testing)')" 
                                        class="text-red-600 hover:text-red-700 text-xl">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="md:hidden space-y-4 p-4">
            
            <!-- Contact 1 -->
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex justify-between items-start">
                    <h3 class="font-semibold text-lg">Sokha Chhay</h3>
                </div>
                <p class="text-sm text-gray-500">🇰🇭 Cambodia • +855 12 345 678</p>
                <p class="text-sm text-gray-600 mt-1">sokha.chhay@gmail.com</p>
                <div class="mt-4 text-sm">
                    <strong>Product:</strong> Rice Straw 20cm × 5000
                </div>
                <div class="mt-5 flex gap-3">
                    <a href="{{ route('admin.contacts.edit', 1) }}" 
                       class="flex-1 text-center py-3 bg-blue-50 text-blue-600 rounded-2xl text-sm font-medium">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <button onclick="alert('Deleted!')" 
                            class="flex-1 text-center py-3 bg-red-50 text-red-600 rounded-2xl text-sm font-medium">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </div>
            </div>

            <!-- Contact 2 -->
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex justify-between items-start">
                    <h3 class="font-semibold text-lg">John Smith</h3>
                </div>
                <p class="text-sm text-gray-500">🇺🇸 USA • +1 234 567 890</p>
                <p class="text-sm text-gray-600 mt-1">john.smith@email.com</p>
                <div class="mt-4 text-sm">
                    <strong>Product:</strong> Biodegradable Bag × 2000
                </div>
                <div class="mt-5 flex gap-3">
                    <a href="{{ route('admin.contacts.edit', 2) }}" 
                       class="flex-1 text-center py-3 bg-blue-50 text-blue-600 rounded-2xl text-sm font-medium">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <button onclick="alert('Deleted!')" 
                            class="flex-1 text-center py-3 bg-red-50 text-red-600 rounded-2xl text-sm font-medium">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection