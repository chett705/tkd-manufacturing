@extends('backend.layout.app')

@section('title', 'User Management - TK&D')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">User Management</h1>
            <p class="text-gray-600 mt-1">Manage all your users</p>
        </div>

        <!-- Add New User Button -->
        <a href="{{ route('admin.users.create') }}" 
           class="bg-[#003366] text-white px-6 py-3.5 rounded-2xl flex items-center gap-2 hover:bg-[#002244] transition shadow-sm w-full sm:w-auto justify-center">
            <i class="fas fa-plus"></i>
            <span>Add New User</span>
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-6 py-4 rounded-2xl">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-6 py-4 rounded-2xl">
            {{ session('error') }}
        </div>
    @endif

    <!-- Table -->
    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">

        <!-- Desktop Table -->
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">User Name</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Username</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Email</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Role</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Status</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-32">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($users as $user)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-5">
                            <div class="font-semibold text-gray-800">{{ $user->name }}</div>
                        </td>
                        <td class="px-6 py-5 text-sm text-gray-600">{{ $user->username }}</td>
                        <td class="px-6 py-5 text-sm text-gray-600">{{ $user->email }}</td>
                        <td class="px-6 py-5 text-sm">
                            <span class="capitalize px-3 py-1 bg-gray-100 rounded-xl text-xs font-medium">
                                {{ $user->role ?? 'user' }}
                            </span>
                        </td>
                        <td class="px-6 py-5">
                            @if($user->is_active)
                                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-green-100 text-green-700">
                                    Active
                                </span>
                            @else
                                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-red-100 text-red-700">
                                    Inactive
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <!-- Edit -->
                                <a href="{{ route('admin.users.edit', $user) }}" 
                                   class="text-blue-600 hover:text-blue-700 text-xl transition">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <!-- Delete with Protection -->
                                @if($user->role === 'admin' || $user->id === auth()->id())
                                    <span class="text-gray-400 text-xl cursor-not-allowed" 
                                          title="Cannot delete admin or yourself">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                @else
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this user? This action cannot be undone.')"
                                            class="text-red-600 hover:text-red-700 text-xl transition">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-20 text-center text-gray-400">
                            <i class="fas fa-users text-5xl mb-3"></i>
                            <p>No users found</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Mobile Card View -->
        <div class="md:hidden p-4 space-y-4">
            @forelse($users as $user)
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex justify-between">
                    <div>
                        <h3 class="font-semibold text-lg">{{ $user->name }}</h3>
                        <p class="text-sm text-gray-500">{{ '@' . $user->username }}</p>
                        <p class="text-sm text-gray-600">{{ $user->email }}</p>
                    </div>
                    <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium 
                        {{ $user->is_active ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                        {{ $user->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>

                <div class="mt-4 flex justify-between items-center">
                    <span class="text-sm text-gray-500 capitalize">Role: {{ $user->role ?? 'user' }}</span>
                    
                    <div class="flex gap-4">
                        <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-600">
                            <i class="fas fa-edit"></i>
                        </a>

                        @if($user->role === 'admin' || $user->id === auth()->id())
                            <span class="text-gray-400 cursor-not-allowed" title="Cannot delete admin or yourself">
                                <i class="fas fa-trash"></i>
                            </span>
                        @else
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Delete this user?')" class="text-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center py-10 text-gray-400">No users found</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
