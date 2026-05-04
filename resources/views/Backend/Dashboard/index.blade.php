@extends('backend.layout.app')

@section('title', 'Dashboard - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div>
            <h1 class="text-4xl font-bold text-[#0B0B54]">Welcome back, Admin!</h1>
            <p class="text-gray-600 mt-2 text-lg">Here is what is happening with TK&D today.</p>
        </div>
        <div class="text-sm text-[#0B0B54]/70">
            {{ now()->format('l, d F Y') }}
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="admin-card rounded-3xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Products</p>
                    <p class="mt-3 text-4xl font-bold text-[#0B0B54]">{{ $stats['products']['total'] }}</p>
                </div>
            </div>
            <p class="mt-4 text-sm text-[#ED1C24]">{{ $stats['products']['new_this_month'] }} added this month</p>
        </div>

        <div class="admin-card rounded-3xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Team Members</p>
                    <p class="mt-3 text-4xl font-bold text-[#0B0B54]">{{ $stats['teamMembers']['total'] }}</p>
                </div>
            </div>
            <p class="mt-4 text-sm text-[#ED1C24]">{{ $stats['teamMembers']['new_this_month'] }} added this month</p>
        </div>

        <div class="admin-card rounded-3xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Certificates</p>
                    <p class="mt-3 text-4xl font-bold text-[#0B0B54]">{{ $stats['certificates']['total'] }}</p>
                </div>
            </div>
            <p class="mt-4 text-sm text-[#ED1C24]">{{ $stats['certificates']['new_this_month'] }} added this month</p>
        </div>

        <div class="admin-card rounded-3xl p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Contacts</p>
                    <p class="mt-3 text-4xl font-bold text-[#0B0B54]">{{ $stats['contacts']['total'] }}</p>
                </div>
            </div>
            <p class="mt-4 text-sm text-[#ED1C24]">{{ $stats['contacts']['new_this_month'] }} received this month</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="admin-card rounded-3xl p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold">Recent Activities</h2>
                <a href="{{ route('admin.activities.index') }}" class="admin-link text-sm hover:underline">View all -></a>
            </div>
            <div class="space-y-5">
                @forelse ($recentActivities as $activity)
                    <div class="flex gap-4">
                        <div class="flex-1">
                            <p class="font-medium">{{ $activity->title }}</p>
                            <p class="text-sm text-gray-500 mt-1">
                                {{ \Illuminate\Support\Str::limit($activity->description ?: 'No description provided.', 90) }}
                            </p>
                            <p class="text-xs text-gray-400 mt-2">{{ $activity->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                @empty
                    <div class="rounded-2xl border border-dashed border-[#cdd7ff] bg-white/60 p-6 text-sm text-gray-500">
                        No activities have been added yet.
                    </div>
                @endforelse
            </div>
        </div>

        <div class="admin-card rounded-3xl p-6">
            <h2 class="text-xl font-semibold mb-6">Quick Access</h2>
            <div class="grid grid-cols-2 gap-4">
                <a href="{{ route('admin.products.index') }}"
                   class="rounded-3xl border border-[#dbe3ff] bg-[#f7f9ff] p-6 text-center transition hover:border-[#ED1C24]/30 hover:bg-white">
                    <span class="font-medium">Products</span>
                </a>
                <a href="{{ route('admin.team-members.index') }}"
                   class="rounded-3xl border border-[#dbe3ff] bg-[#f7f9ff] p-6 text-center transition hover:border-[#ED1C24]/30 hover:bg-white">
                    <span class="font-medium">Team Members</span>
                </a>
                <a href="{{ route('admin.blogs.index') }}"
                   class="rounded-3xl border border-[#dbe3ff] bg-[#f7f9ff] p-6 text-center transition hover:border-[#ED1C24]/30 hover:bg-white">
                    <span class="font-medium">Blog Posts</span>
                </a>
                <a href="{{ route('admin.contacts.index') }}"
                   class="rounded-3xl border border-[#dbe3ff] bg-[#f7f9ff] p-6 text-center transition hover:border-[#ED1C24]/30 hover:bg-white">
                    <span class="font-medium">Contacts</span>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
