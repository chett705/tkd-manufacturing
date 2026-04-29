@extends('backend.layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Welcome Header -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Good morning, Admin </h1>
            <p class="text-gray-600 mt-1">Here's what's happening with your platform today.</p>
        </div>
        <div class="mt-4 sm:mt-0">
            <button onclick="window.location.reload()" 
                    class="flex items-center gap-2 bg-white border border-gray-300 hover:border-gray-400 px-5 py-2.5 rounded-2xl text-sm font-medium transition">
                <i class="fas fa-sync-alt"></i>
                <span>Refresh</span>
            </button>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow transition-all border border-transparent hover:border-blue-100">
            <div class="flex justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Products</p>
                    <p class="text-4xl font-bold text-gray-900 mt-3">248</p>
                    <p class="text-emerald-600 text-sm mt-2 flex items-center gap-1">
                        <i class="fas fa-arrow-trend-up"></i> +12 this week
                    </p>
                </div>
                
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow transition-all border border-transparent hover:border-emerald-100">
            <div class="flex justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Members</p>
                    <p class="text-4xl font-bold text-gray-900 mt-3">1,392</p>
                    <p class="text-emerald-600 text-sm mt-2 flex items-center gap-1">
                        <i class="fas fa-arrow-trend-up"></i> +87 today
                    </p>
                </div>
                
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow transition-all border border-transparent hover:border-amber-100">
            <div class="flex justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Certificates</p>
                    <p class="text-4xl font-bold text-gray-900 mt-3">87</p>
                    <p class="text-amber-600 text-sm mt-2 flex items-center gap-1">
                        <i class="fas fa-arrow-trend-up"></i> 4 pending
                    </p>
                </div>
                
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-sm hover:shadow transition-all border border-transparent hover:border-purple-100">
            <div class="flex justify-between">
                <div>
                    <p class="text-sm font-medium text-gray-500">Business Units</p>
                    <p class="text-4xl font-bold text-gray-900 mt-3">14</p>
                    <p class="text-purple-600 text-sm mt-2 flex items-center gap-1">
                        <i class="fas fa-arrow-trend-up"></i> All active
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

        <!-- Recent Products -->
        <div class="lg:col-span-7 bg-white rounded-3xl p-8 shadow-sm">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-semibold text-gray-900">Recent Products</h2>
                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium flex items-center gap-1">
                    View All <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @for ($i = 1; $i <= 4; $i++)
                <div class="flex gap-4 bg-gray-50 rounded-2xl p-4 hover:bg-gray-100 transition">
                    <img src="https://picsum.photos/id/{{ 200 + $i }}/120/120" 
                         class="w-24 h-24 object-cover rounded-xl" alt="Product">
                    <div class="flex-1">
                        <h4 class="font-semibold text-gray-900">Premium Product {{ $i }}</h4>
                        <p class="text-sm text-gray-500 line-clamp-2 mt-1">High quality product with excellent features and certifications.</p>
                        <div class="mt-3 flex justify-between items-end">
                            <span class="text-xs bg-white px-3 py-1 rounded-xl text-gray-600">$89.00</span>
                            <span class="text-emerald-600 text-xs font-medium">Active</span>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <!-- Quick Stats / Chart Area -->
        <div class="lg:col-span-5 bg-white rounded-3xl p-8 shadow-sm">
            <h2 class="text-xl font-semibold text-gray-900 mb-6">Overview</h2>
            
            <!-- You can add Chart.js here -->
            <div class="h-64 bg-gray-50 rounded-2xl flex items-center justify-center border border-dashed border-gray-300">
                <div class="text-center">
                    <i class="fas fa-chart-line text-5xl text-gray-300 mb-3"></i>
                    <p class="text-gray-400">Sales / Production Chart</p>
                    <p class="text-xs text-gray-500 mt-1">(Add Chart.js later)</p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mt-8">
                <div class="bg-gray-50 rounded-2xl p-5">
                    <p class="text-sm text-gray-500">Production</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">92%</p>
                </div>
                <div class="bg-gray-50 rounded-2xl p-5">
                    <p class="text-sm text-gray-500">Comparison</p>
                    <p class="text-3xl font-bold text-gray-900 mt-2">18</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Recent Activity Table -->
    <div class="bg-white rounded-3xl p-8 shadow-sm">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-900">Recent Activity</h2>
            <a href="#" class="text-sm text-blue-600 hover:underline">View Full Log →</a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200">
                        <th class="text-left py-4 px-6 font-medium text-gray-500">Date</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-500">Action</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-500">Module</th>
                        <th class="text-left py-4 px-6 font-medium text-gray-500">User</th>
                        <th class="text-right py-4 px-6 font-medium text-gray-500">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @for ($i = 1; $i <=3; $i++)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-4 px-6 text-sm text-gray-500">Apr 28, 2026</td>
                        <td class="py-4 px-6 font-medium">New Product Added</td>
                        <td class="py-4 px-6">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs bg-blue-100 text-blue-700">Product</span>
                        </td>
                        <td class="py-4 px-6 text-sm">Admin</td>
                        <td class="py-4 px-6 text-right">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs bg-emerald-100 text-emerald-700">Completed</span>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection