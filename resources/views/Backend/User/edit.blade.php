@extends('backend.layout.app')

@section('title', 'Edit User - TK&D')

@section('content')
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="admin-card rounded-3xl p-8">
        <h1 class="mb-2 text-3xl font-bold text-[#0B0B54]">Edit User</h1>
        <p class="text-gray-600 mb-8">Update account details and access level</p>

        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Full Name <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}"
                           class="admin-input w-full rounded-2xl px-4 py-3" required>
                    @error('name')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Username <span class="text-red-500">*</span></label>
                    <input type="text" name="username" value="{{ old('username', $user->username) }}"
                           class="admin-input w-full rounded-2xl px-4 py-3" required>
                    @error('username')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address <span class="text-red-500">*</span></label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}"
                           class="admin-input w-full rounded-2xl px-4 py-3" required>
                    @error('email')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">New Password</label>
                    <input type="password" name="password"
                           class="admin-input w-full rounded-2xl px-4 py-3">
                    <p class="text-xs text-gray-500 mt-2">Leave blank to keep the current password.</p>
                    @error('password')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Confirm New Password</label>
                    <input type="password" name="password_confirmation"
                           class="admin-input w-full rounded-2xl px-4 py-3">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Role <span class="text-red-500">*</span></label>
                    <select name="role" class="admin-select w-full rounded-2xl px-4 py-3" required>
                        
                        <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @error('role')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status <span class="text-red-500">*</span></label>
                    <select name="is_active" class="admin-select w-full rounded-2xl px-4 py-3" required>
                        <option value="1" {{ old('is_active', (string) (int) $user->is_active) === '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('is_active', (string) (int) $user->is_active) === '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('is_active')
                        <p class="text-red-600 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex gap-4 mt-10">
                <a href="{{ route('admin.users.index') }}"
                   class="admin-secondary-btn rounded-2xl px-8 py-3.5 font-medium">
                    Cancel
                </a>
                <button type="submit"
                        class="admin-primary-btn rounded-2xl px-8 py-3.5 font-medium">
                    Update User
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
