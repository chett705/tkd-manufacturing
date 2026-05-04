@extends('backend.layout.app')

@section('title', 'Activities - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Activity Management</h1>
            <p class="text-gray-600 mt-1">Manage all your company activities and events</p>
        </div>

        <a href="{{ route('admin.activities.create') }}"
           class="bg-[#003366] text-white px-6 py-3.5 rounded-2xl flex items-center gap-2 hover:bg-[#002244] transition shadow-sm w-full sm:w-auto justify-center">
            <i class="fas fa-plus"></i>
            <span>Add New Activity</span>
        </a>
    </div>

    <div class="bg-white rounded-3xl shadow-sm overflow-hidden">
        <div class="hidden md:block overflow-x-auto">
            <table class="w-full min-w-full">
                <thead class="bg-gray-50 border-b">
                    <tr>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Title</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Description</th>
                        <th class="px-6 py-5 text-left text-sm font-medium text-gray-500">Status</th>
                        <th class="px-6 py-5 text-center text-sm font-medium text-gray-500 w-28">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($activities as $activity)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="px-6 py-5 font-semibold text-gray-800">{{ $activity->title }}</td>
                        <td class="px-6 py-5 text-sm text-gray-600">{{ $activity->description ?: 'No description' }}</td>
                        <td class="px-6 py-5">
                            <span class="inline-flex items-center px-4 py-1.5 rounded-full text-sm font-medium bg-green-100 text-green-700">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-5 text-center">
                            <div class="flex justify-center gap-4">
                                <a href="{{ route('admin.activities.edit', $activity) }}" class="text-blue-600 hover:text-blue-700 text-xl">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.activities.destroy', $activity) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" data-delete-message="This activity will be deleted permanently." class="text-red-600 hover:text-red-700 text-xl">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-6 py-10 text-center text-gray-500">No activities found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="md:hidden space-y-4 p-4">
            @forelse($activities as $activity)
            <div class="bg-white border border-gray-100 rounded-3xl p-5 shadow-sm">
                <div class="flex-1">
                    <h3 class="font-semibold text-lg">{{ $activity->title }}</h3>
                    <p class="text-gray-600 text-sm mt-2 line-clamp-3">{{ $activity->description ?: 'No description' }}</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="bg-green-100 text-green-700 px-4 py-1 rounded-full text-sm">Active</span>
                        <div class="flex gap-4">
                            <a href="{{ route('admin.activities.edit', $activity) }}" class="text-blue-600">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.activities.destroy', $activity) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" data-delete-message="This activity will be deleted permanently." class="text-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="rounded-3xl border border-dashed border-gray-300 p-6 text-center text-gray-500">
                No activities found.
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
