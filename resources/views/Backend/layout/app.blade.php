<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TK&D Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body class="bg-gray-50">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    @include('backend.layout.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">

        <!-- Top Header -->
        <header class="bg-transparent h-16 px-6 flex items-center justify-between lg:justify-end ">
            <button id="toggleSidebar" 
                    class="lg:hidden text-3xl text-gray-700 focus:outline-none active:scale-95 transition">
                <i class="fas fa-bars"></i>
            </button>

            
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-auto p-4 md:p-6 lg:p-8">
            @yield('content')
        </main>
    </div>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggleSidebar');

    // Toggle Sidebar
    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
    });

    // ចុចខាងក្រៅដើម្បីបិទ (លើ Mobile & Tablet)
    document.addEventListener('click', (e) => {
        if (window.innerWidth < 1024 && 
            !sidebar.contains(e.target) && 
            !toggleBtn.contains(e.target)) {
            sidebar.classList.add('-translate-x-full');
        }
    });

    // បិទ sidebar នៅពេល resize ទៅ Laptop
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            sidebar.classList.remove('-translate-x-full');
        }
    });
</script>

</body>
</html>