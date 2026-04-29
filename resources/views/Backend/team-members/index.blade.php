@extends('backend.layout.app')

@section('title', 'Team Members - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Team Members Management</h1>
            <p class="text-gray-600 mt-1">Manage all your company team members</p>
        </div>
        
        <a href="{{ route('admin.team-members.create') }}" 
           class="bg-[#003366] text-white px-6 py-3.5 rounded-2xl flex items-center gap-2 hover:bg-[#002244] transition shadow-sm w-full sm:w-auto justify-center">
            <i class="fas fa-plus"></i>
            <span>Add New Member</span>
        </a>
    </div>

    <!-- Search & Filter -->
   

    <!-- Team Members Table -->
    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        
        <!-- Desktop & Tablet Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full min-w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Member Name</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Position</th>
                        
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Status</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-28">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    
                    <!-- Dummy Member 1 -->
                    <tr class="hover:bg-gray-50 transition">
                        
                        
                        <td class="px-6 py-5 font-semibold text-gray-800">John Doe</td>
                        <td class="px-6 py-5 text-sm text-gray-600">Marketing Manager</td>
                        
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

                    <!-- Dummy Member 2 -->
                    <tr class="hover:bg-gray-50 transition">
                        
                        <td class="px-6 py-5 font-semibold text-gray-800">Jane Smith</td>
                        <td class="px-6 py-5 text-sm text-gray-600">Sales Manager</td>
                        
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

        <!-- Mobile Card View -->
        <div class="md:hidden space-y-4 p-4">
            
            <!-- Member 1 -->
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex gap-4">
                    
                    <div class="flex-1">
                        <h3 class="font-semibold text-lg">John Doe</h3>
                        <p class="text-gray-600">Founder</p>
                        <!-- <p class="text-sm text-gray-500 mt-1">john.doe@tkd.com</p> -->
                        
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

            <!-- Member 2 -->
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex gap-4">
                    
                    <div class="flex-1">
                        <h3 class="font-semibold text-lg">Jane Smith</h3>
                        <p class="text-gray-600">Sales Manager</p>
                        <!-- <p class="text-sm text-gray-500 mt-1">jane.smith@tkd.com</p> -->
                        
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