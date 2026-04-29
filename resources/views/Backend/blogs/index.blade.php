@extends('backend.layout.app')

@section('title', 'Comparison - TK&D Admin')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-10">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Rice Straws vs Paper Straws</h1>
            <p class="text-gray-600 mt-2">Key Comparison</p>
        </div>
    </div>

    <!-- Desktop Table -->
    <div class="bg-white rounded-3xl shadow-sm overflow-hidden hidden md:block">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-8 py-6 text-left w-56">Feature</th>
                    <th class="px-8 py-6 text-center text-emerald-700 font-bold">🌾 Rice Straws</th>
                    <th class="px-8 py-6 text-center text-amber-700 font-bold">📄 Paper Straws</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <!-- 1 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-8 py-6 font-medium">Durability</td>
                    <td class="px-8 py-6 text-center text-emerald-700 font-medium">40 - 120 minutes</td>
                    <td class="px-8 py-6 text-center text-amber-700">10 - 30 minutes</td>
                </tr>
                <!-- 2 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-8 py-6 font-medium">Eco-Friendly</td>
                    <td class="px-8 py-6 text-center text-emerald-700 font-medium">100% Biodegradable & Compostable</td>
                    <td class="px-8 py-6 text-center text-amber-700">Biodegradable but slow</td>
                </tr>
                <!-- 3 -->
                <tr class="hover:bg-gray-50">
                    <td class="px-8 py-6 font-medium">Drinking Experience</td>
                    <td class="px-8 py-6 text-center text-emerald-700 font-medium">Smooth & No Taste Change</td>
                    <td class="px-8 py-6 text-center text-amber-700">Can become soft & affect taste</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Mobile Card View (2-3 Comparisons) -->
    <div class="md:hidden space-y-6">
        <div class="bg-white rounded-3xl p-6 shadow-sm">
            <h3 class="font-semibold text-lg mb-4">1. Durability</h3>
            <div class="flex justify-between items-center">
                <div class="text-center flex-1">
                    <div class="text-3xl mb-2">🌾</div>
                    <p class="font-medium text-emerald-700">40-120 min</p>
                </div>
                <div class="text-2xl text-gray-300">VS</div>
                <div class="text-center flex-1">
                    <div class="text-3xl mb-2">📄</div>
                    <p class="font-medium text-amber-700">10-30 min</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-sm">
            <h3 class="font-semibold text-lg mb-4">2. Eco-Friendly</h3>
            <div class="flex justify-between items-center">
                <div class="text-center flex-1">
                    <div class="text-3xl mb-2">🌾</div>
                    <p class="font-medium text-emerald-700">100% Compostable</p>
                </div>
                <div class="text-2xl text-gray-300">VS</div>
                <div class="text-center flex-1">
                    <div class="text-3xl mb-2">📄</div>
                    <p class="font-medium text-amber-700">Slow Biodegradable</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl p-6 shadow-sm">
            <h3 class="font-semibold text-lg mb-4">3. Drinking Experience</h3>
            <div class="flex justify-between items-center">
                <div class="text-center flex-1">
                    <div class="text-3xl mb-2">🌾</div>
                    <p class="font-medium text-emerald-700">Smooth & Pleasant</p>
                </div>
                <div class="text-2xl text-gray-300">VS</div>
                <div class="text-center flex-1">
                    <div class="text-3xl mb-2">📄</div>
                    <p class="font-medium text-amber-700">Can feel soft</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10 text-center text-sm text-gray-500">
        Last updated: April 29, 2026
    </div>
</div>
@endsection