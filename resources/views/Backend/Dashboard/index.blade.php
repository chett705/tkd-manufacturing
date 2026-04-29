@extends('backend.layout.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto space-y-8">

    <!-- Welcome Header -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900">
                Welcome back, <span class="text-[#003366]">Admin</span>! 
            </h1>
            <p class="text-gray-600 mt-1 text-lg">Here's what's happening in your system today.</p>
        </div>
        
        <div class="text-sm text-gray-500">
            {{ now()->format('l, d F Y') }}
        </div>
    </div>

    

</div>
@endsection