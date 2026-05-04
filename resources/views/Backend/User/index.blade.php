@extends('backend.layout.app')

@section('title', 'User Management - TK&D')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-[#0B0B54]">User Management</h1>
            <p class="text-gray-600 mt-1">Manage all your users</p>
        </div>

        <!-- Add New User Button -->
        <a href="{{ route('admin.users.create') }}" 
           class="admin-primary-btn flex w-full items-center justify-center gap-2 rounded-2xl px-6 py-3.5 transition sm:w-auto">
            <i class="fas fa-plus"></i>
            <span>Add New User</span>
        </a>
    </div>

    <!-- Table -->
    <div class="admin-card overflow-hidden rounded-3xl">

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
                            <span class="rounded-xl bg-[#eef1ff] px-3 py-1 text-xs font-medium capitalize text-[#0B0B54]">
                                {{ $user->role ?? 'user' }}
                            </span>
                        </td>
                        <td class="px-6 py-5">
                            @if($user->is_active)
                                <span class="admin-status-active inline-flex items-center rounded-full px-4 py-1.5 text-sm font-medium">
                                    Active
                                </span>
                            @else
                                <span class="admin-status-inactive inline-flex items-center rounded-full px-4 py-1.5 text-sm font-medium">
                                    Inactive
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <!-- Edit -->
                                <a href="{{ route('admin.users.edit', $user) }}" 
                                   class="admin-link text-xl transition">
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
                                            data-delete-message="This user will be deleted permanently. This action cannot be undone."
                                            class="admin-danger-link text-xl transition">
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
            <div class="admin-card rounded-3xl p-5">
                <div class="flex justify-between">
                    <div>
                        <h3 class="font-semibold text-lg">{{ $user->name }}</h3>
                        <p class="text-sm text-gray-500">{{ '@' . $user->username }}</p>
                        <p class="text-sm text-gray-600">{{ $user->email }}</p>
                    </div>
                    <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium 
                        {{ $user->is_active ? 'admin-status-active' : 'admin-status-inactive' }}">
                        {{ $user->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </div>

                <div class="mt-4 flex justify-between items-center">
                    <span class="text-sm text-gray-500 capitalize">Role: {{ $user->role ?? 'user' }}</span>
                    
                    <div class="flex gap-4">
                        <a href="{{ route('admin.users.edit', $user) }}" class="admin-link">
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
                                <button type="submit" data-delete-message="This user will be deleted permanently. This action cannot be undone." class="admin-danger-link">
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
