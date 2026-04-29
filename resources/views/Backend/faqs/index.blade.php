@extends('backend.layout.app')

@section('title', 'FAQs - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">FAQ Management</h1>
            <p class="text-gray-600 mt-1">Manage all your frequently asked questions</p>
        </div>

        <a href="{{ route('admin.faqs.create') }}"
           class="bg-[#003366] text-white px-6 py-3.5 rounded-2xl flex items-center gap-2 hover:bg-[#002244] transition shadow-sm w-full sm:w-auto justify-center">
            <i class="fas fa-plus"></i>
            <span>Add New FAQ</span>
        </a>
    </div>

    

    <!-- FAQs Table -->
    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        
        <!-- Desktop & Tablet Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full min-w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500 w-12">No</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Question</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Answer</th>
                       
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-28">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    
                    <!-- Dummy FAQ 1 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-5 text-gray-400">01</td>
                        <td class="px-6 py-5 font-semibold text-gray-800">Are rice straws safe for hot drinks?</td>
                        <td class="px-6 py-5 text-sm text-gray-600 line-clamp-2">
                            Yes, our rice straws are heat-resistant and maintain their structure in hot beverages up to 120 minutes.
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

                    <!-- Dummy FAQ 2 -->
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-5 text-gray-400">02</td>
                        <td class="px-6 py-5 font-semibold text-gray-800">How long do rice straws last?</td>
                        <td class="px-6 py-5 text-sm text-gray-600 line-clamp-2">
                            Our rice straws can last 40 to 120 minutes depending on the drink temperature and usage.
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

        <!-- Mobile Card View -->
        <div class="md:hidden space-y-4 p-4">
            
            <!-- FAQ 1 -->
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <h3 class="font-semibold text-lg">Are rice straws safe for hot drinks?</h3>
                <p class="text-gray-600 text-sm mt-3 line-clamp-3">
                    Yes, our rice straws are heat-resistant and maintain their structure in hot beverages up to 120 minutes.
                </p>
                <div class="mt-5 flex justify-between items-center">
                    
                    <div class="flex gap-4">
                        <a href="#" class="text-blue-600"><i class="fas fa-edit"></i></a>
                        <button onclick="alert('Deleted!')" class="text-red-600"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <h3 class="font-semibold text-lg">How long do rice straws last?</h3>
                <p class="text-gray-600 text-sm mt-3 line-clamp-3">
                    Our rice straws can last 40 to 120 minutes depending on the drink temperature and usage.
                </p>
                <div class="mt-5 flex justify-between items-center">
                 
                    <div class="flex gap-4">
                        <a href="#" class="text-blue-600"><i class="fas fa-edit"></i></a>
                        <button onclick="alert('Deleted!')" class="text-red-600"><i class="fas fa-trash"></i></button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection