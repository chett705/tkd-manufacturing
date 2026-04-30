<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ProdMan - Backend')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body class="bg-gray-50">

<div class="flex h-screen overflow-hidden">
    
    <!-- Sidebar -->
    @include('backend.layout.sidebar')

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col overflow-hidden">
        
        <!-- Top Navbar -->
        <header class="bg-white border-b px-6 py-4 flex items-center justify-between shadow-sm">
            <div class="flex items-center gap-4">
                <button id="toggleSidebar" class="lg:hidden text-gray-600 hover:text-black">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <h1 class="text-2xl font-bold text-gray-800">@yield('title', 'Dashboard')</h1>
            </div>

            <div class="flex items-center gap-6">
                <!-- <div class="relative">
                    <input type="text" placeholder="Search..." 
                           class="w-80 bg-gray-100 border border-gray-300 rounded-full py-2.5 pl-11 focus:outline-none focus:border-blue-500">
                    <i class="fas fa-search absolute left-4 top-3 text-gray-400"></i>
                </div> -->

                <button class="relative text-gray-600 hover:text-black">
                    <i class="fas fa-bell text-xl"></i>
                    <span class="absolute -top-1 -right-1 bg-red-500 text-[10px] text-white w-4 h-4 rounded-full flex items-center justify-center">3</span>
                </button>

                <div class="flex items-center gap-3">
                    <img src="https://i.pravatar.cc/36" alt="Profile" class="w-9 h-9 rounded-full ring-2 ring-gray-200">
                    <div class="hidden sm:block">
                        <p class="text-sm font-semibold">Admin</p>
                        <p class="text-xs text-gray-500 -mt-0.5">Online</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-auto p-6">
            @yield('content')
        </main>
    </div>
</div>

<script>
    document.getElementById('toggleSidebar').addEventListener('click', () => {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
    });
</script>

