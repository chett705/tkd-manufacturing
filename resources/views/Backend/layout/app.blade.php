<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TK&D Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="admin-shell">

<div class="flex h-screen overflow-hidden">

    <!-- Sidebar -->
    @include('backend.layout.sidebar')

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">

        <!-- Top Header -->
        <header class="h-16 px-6 flex items-center justify-between border-b border-white/40 bg-white/55 backdrop-blur-sm lg:justify-end">
            <button id="toggleSidebar" 
                    class="lg:hidden text-3xl text-[#0B0B54] focus:outline-none active:scale-95 transition">
                <i class="fas fa-bars"></i>
            </button>

            
        </header>

        <!-- Page Content -->
        <main class="flex-1 overflow-auto p-4 md:p-6 lg:p-8">
            @if (session('success') || session('error'))
                @php
                    $flashType = session('success') ? 'success' : 'error';
                    $flashMessage = session($flashType);
                    $flashStyles = $flashType === 'success'
                        ? 'border-green-200 bg-green-50 text-green-700'
                        : 'border-red-200 bg-red-50 text-red-700';
                    $flashIcon = $flashType === 'success' ? 'fa-circle-check' : 'fa-circle-exclamation';
                @endphp

                <div id="backendFlashAlert"
                    class="pointer-events-none fixed right-4 top-4 z-50 w-[calc(100%-2rem)] max-w-md transition duration-300 ease-out sm:right-6 sm:top-6">
                    <div class="pointer-events-auto flex items-start gap-3 rounded-2xl border px-4 py-4 shadow-lg backdrop-blur-sm {{ $flashStyles }}">
                        <i class="fas {{ $flashIcon }} mt-0.5 text-lg"></i>
                        <div class="min-w-0 flex-1">
                            <p class="font-semibold">{{ ucfirst($flashType) }}</p>
                            <p class="mt-1 text-sm">{{ $flashMessage }}</p>
                        </div>
                        <button type="button" id="closeBackendFlashAlert" class="shrink-0 text-current/70 transition hover:text-current">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            @endif

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

    const backendFlashAlert = document.getElementById('backendFlashAlert');
    const closeBackendFlashAlert = document.getElementById('closeBackendFlashAlert');

    if (backendFlashAlert) {
        const hideBackendFlashAlert = () => {
            backendFlashAlert.classList.add('translate-y-2', 'opacity-0');

            window.setTimeout(() => {
                backendFlashAlert.remove();
            }, 300);
        };

        if (closeBackendFlashAlert) {
            closeBackendFlashAlert.addEventListener('click', hideBackendFlashAlert);
        }

        window.setTimeout(hideBackendFlashAlert, 3500);
    }

    document.addEventListener('submit', (event) => {
        const form = event.target;

        if (!(form instanceof HTMLFormElement) || form.dataset.deleteConfirmed === 'true') {
            return;
        }

        const methodInput = form.querySelector('input[name="_method"]');

        if (!methodInput || methodInput.value.toUpperCase() !== 'DELETE') {
            return;
        }

        event.preventDefault();

        const submitButton = event.submitter;
        const deleteMessage = submitButton?.dataset.deleteMessage || 'This item will be deleted permanently.';

        Swal.fire({
            title: 'Delete this item?',
            text: deleteMessage,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc2626',
            cancelButtonColor: '#6b7280',
            confirmButtonText: 'Yes, delete it',
            cancelButtonText: 'Cancel',
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                form.dataset.deleteConfirmed = 'true';
                form.submit();
            }
        });
    });
</script>

</body>
</html>
