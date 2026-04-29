<header class="sticky top-0 z-50">
    <nav class="bg-[#4b6788] text-white">
        <div class="max-w-[1920px] mx-auto">

            <!-- ==================== DESKTOP ==================== -->
            <div class="hidden md:flex jus  items-center h-[40px]  relative">
                

                <!-- Yellow Slanted Logo - កែឱ្យមកក្រោមបន្ថែម -->
                <a href="{{ route('home') }}"
                    class="flex h-[60px] w-[300px]  absolute h-5   items-center justify-center bg-[#f6b21a] font-semibold text-white text-end text-[16px] leading-none transition hover:brightness-110  "
                    style="clip-path: polygon(0 0, 100% 0, calc(100% - 35px) 100%, 0 100%);">
                    Production Factory
                </a>
                

                <!-- Menu Links -->
                <div class="flex-1 flex justify-center gap-8 lg:gap-12 text-[14px] font-medium me-4 ml-[300px]"> 
                    <a href="{{ route('home') }}" class="hover:text-[#f6b21a] hover:border-b-2 hover:border-[#f6b21a] ">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-[#f6b21a] hover:border-b-2 hover:border-[#f6b21a] transition">About Us</a>
                    <a href="{{ route('services') }}" class="hover:text-[#f6b21a] hover:border-b-2 hover:border-[#f6b21a] transition">Services</a>
                    <a href="{{ route('project') }}" class="hover:text-[#f6b21a] hover:border-b-2 hover:border-[#f6b21a] transition">Project</a>
                    <a href="{{ route('contact') }}" class="hover:text-[#f6b21a] hover:border-b-2 hover:border-[#f6b21a] transition">Contact</a>
                    <a href="{{ route('getpro') }}" class="hover:text-[#f6b21a] hover:border-b-2 hover:border-[#f6b21a] transition">Get Pro</a>
                </div>
            </div>

            <!-- ==================== MOBILE ==================== -->
            <div class="md:hidden">
                <div class="bg-[#f6b21a] py-5 text-center mx-4">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-white">
                        Production Factory
                    </a>
                </div>

                <div class="bg-[#4b6788] px-4 py-4 flex justify-center">
                    <button id="mobile-menu-btn" class="h-12 w-12 flex items-center justify-center bg-[#233147] rounded-full text-white">
                        <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <div id="mobile-menu" class="hidden bg-[#425d7c] px-6 py-8">
                    <div class="flex flex-col space-y-6 text-center text-lg font-medium">
                        <a href="{{ route('home') }}" class="hover:text-[#f6b21a]">Home</a>
                        <a href="{{ route('about') }}" class="hover:text-[#f6b21a]">About Us</a>
                        <a href="{{ route('services') }}" class="hover:text-[#f6b21a]">Services</a>
                        <a href="{{ route('project') }}" class="hover:text-[#f6b21a]">Project</a>
                        <a href="{{ route('contact') }}" class="hover:text-[#f6b21a]">Contact</a>
                        <a href="{{ route('getpro') }}" class="hover:text-[#f6b21a]">Get Pro</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('menu-icon');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');

        if (menu.classList.contains('hidden')) {
            icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />`;
        } else {
            icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6 18 18" />`;
        }
    });
</script>