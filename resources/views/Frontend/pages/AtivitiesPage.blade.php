@extends('Frontend.layouts.Main')

@section('title', '5. Business Activities - TKD Manufacturing')

@section('content')
<div class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Page Title -->
        <h2 class="text-4xl md:text-5xl font-bold text-[#003087] mb-2">
            Media & News similar 
        </h2>
        <div class="h-1 w-24 bg-[#E30613] mb-12"></div>

        <!-- Overview Table (Similar to Media & News style) -->
        <div class="mb-16">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Business Activities Overview</h2>
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">
                <table class="w-full">
                    <thead class="bg-[#003087] text-white">
                        <tr>
                            <th class="px-8 py-5 text-left font-medium">Activity</th>
                            <th class="px-8 py-5 text-left font-medium">Description</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y text-gray-700">
                        <tr>
                            <td class="px-8 py-5 font-medium">Manufacturing Process</td>
                            <td class="px-8 py-5">Raw material sourcing (local rice) → Production with food-grade machinery → Quality control → Packaging & export</td>
                        </tr>
                        <tr>
                            <td class="px-8 py-5 font-medium">Production Capacity</td>
                            <td class="px-8 py-5">60+ Tons/Day • Export-ready logistics • International compliance</td>
                        </tr>
                        <tr>
                            <td class="px-8 py-5 font-medium">Export & Distribution</td>
                            <td class="px-8 py-5">Local delivery • Container export (Australia) • Global network</td>
                        </tr>
                        <tr>
                            <td class="px-8 py-5 font-medium">CSR (Social Responsibility)</td>
                            <td class="px-8 py-5">Support farmers • Job creation • Environmental protection • Sustainable manufacturing</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Manufacturing Process -->
        <div class="mb-20">
            <div class="flex items-center gap-4 mb-8">
                <span class="text-4xl">🔹</span>
                <h2 class="text-3xl font-bold text-[#003087]">Manufacturing Process</h2>
            </div>
            <div class="grid md:grid-cols-12 gap-10 items-center">
                <div class="md:col-span-5">
                    <div class="border border-gray-200 rounded-2xl p-8 bg-white">
                        <ul class="space-y-5 text-lg">
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Raw material sourcing (local rice)</li>
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Production with food-grade machinery</li>
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Quality control</li>
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Packaging & export</li>
                        </ul>
                    </div>
                </div>
                <div class="md:col-span-7">
                    <img src="https://picsum.photos/id/1015/900/580" alt="Manufacturing" class="w-full rounded-3xl shadow-xl">
                </div>
            </div>
        </div>

        <!-- Production Capacity -->
        <div class="mb-20">
            <div class="flex items-center gap-4 mb-8">
                <span class="text-4xl">🔹</span>
                <h2 class="text-3xl font-bold text-[#003087]">Production Capacity</h2>
            </div>
            <div class="grid md:grid-cols-12 gap-10 items-center">
                <div class="md:col-span-7">
                    <img src="https://picsum.photos/id/1077/900/580" alt="Production Capacity" class="w-full rounded-3xl shadow-xl">
                </div>
                <div class="md:col-span-5">
                    <div class="border border-gray-200 rounded-2xl p-8 bg-white">
                        <ul class="space-y-5 text-lg">
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Daily production: <strong>60+ Tons/Day</strong></li>
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Export-ready logistics</li>
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> International compliance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Export & Distribution -->
        <div class="mb-20">
            <div class="flex items-center gap-4 mb-8">
                <span class="text-4xl">🔹</span>
                <h2 class="text-3xl font-bold text-[#003087]">Export & Distribution</h2>
            </div>
            <div class="grid md:grid-cols-12 gap-10 items-center">
                <div class="md:col-span-5">
                    <div class="border border-gray-200 rounded-2xl p-8 bg-white">
                        <ul class="space-y-5 text-lg">
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Local delivery across Cambodia</li>
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Container export (Australia example)</li>
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Global distribution network</li>
                        </ul>
                    </div>
                </div>
                <div class="md:col-span-7">
                    <img src="https://picsum.photos/id/107/900/580" alt="Export" class="w-full rounded-3xl shadow-xl">
                </div>
            </div>
        </div>

        <!-- CSR -->
        <div class="mb-20">
            <div class="flex items-center gap-4 mb-8">
                <span class="text-4xl">🔹</span>
                <h2 class="text-3xl font-bold text-[#003087]">CSR (Social Responsibility)</h2>
            </div>
            <div class="grid md:grid-cols-12 gap-10 items-center">
                <div class="md:col-span-7">
                    <img src="https://picsum.photos/id/1018/900/580" alt="CSR" class="w-full rounded-3xl shadow-xl">
                </div>
                <div class="md:col-span-5">
                    <div class="border border-gray-200 rounded-2xl p-8 bg-white">
                        <ul class="space-y-5 text-lg">
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Support farmers</li>
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Job creation</li>
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Environmental protection</li>
                            <li class="flex gap-3"><span class="text-[#E30613] font-bold">•</span> Sustainable manufacturing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection