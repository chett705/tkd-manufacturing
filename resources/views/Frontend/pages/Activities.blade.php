@extends('Frontend.layouts.Main')

@section('content')
    {{-- hero section --}}
    <div class="h-[93vh] bg-cover bg-center text-white relative"
        style="background-image: url('https://wp-themes.com/wp-content/themes/production-factory/assets/images/banner-image.png');">

        <div class="absolute inset-0 bg-black/40"></div>

        <!-- RED STRIP -->
        <div class="absolute bottom-0 right-0 w-full lg:w-8/10 overflow-hidden">

            <div class="absolute inset-0 bg-[#ED1C24]
        [clip-path:polygon(10%_0,100%_0,100%_100%,0_100%)]">
            </div>

            <div
                class="relative z-10 px-5 md:pl-15 lg:pl-20 2xl:px-40 py-4 md:py-6 flex flex-col md:flex-row items-center justify-between gap-3 text-sm md:text-base">

                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-phone text-black"></i>
                    <p class="break-all">+855 12 590 666</p>
                </div>

                <div class="flex items-center gap-2">
                    <i class="fa-solid fa-envelope text-black"></i>
                    <p class="break-all">tkd.manufacturing89@gmail.com</p>
                </div>

                <div class="flex items-center gap-2 text-center md:text-left">
                    <i class="fa-solid fa-bullhorn text-black"></i>
                    <p class="text-xs md:text-sm lg:text-base">
                        Delivering Industrial Excellence with Every Product.
                    </p>
                </div>

            </div>
        </div>

        <!-- HERO CONTENT -->
        <div class="container mx-auto px-5 flex items-center h-full relative z-10">
            <div class="w-full lg:w-1/2 flex flex-col gap-5 text-center md:text-left">

                <h2
                    class="text-xl sm:text-2xl md:text-4xl lg:text-[44px]
                       leading-snug md:leading-tight font-bold break-words">
                    Sustainable Rice-Flour Straws from Cambodia to the World
                </h2>

                <p class="text-sm sm:text-base md:text-lg lg:text-[22px] leading-relaxed">
                    Eco-friendly, biodegradable, and durable alternatives to plastic straws.
                </p>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 w-full">
                    <a href=""
                        class="w-full sm:w-auto px-6 py-3 border border-[#ED1C24]
                          bg-white text-[#ED1C24] font-semibold text-center">
                        Get a Quote
                    </a>

                    <a href=""
                        class="w-full sm:w-auto px-6 py-3 border border-[#ED1C24]
                          bg-white text-[#ED1C24] font-semibold text-center">
                        View Products
                    </a>
                </div>
            </div>
        </div>
    </div>


    {{-- Media & News similar  --}}
    <div class="my-16 sm:my-20">
        <h2 class="text-center text-xl sm:text-2xl md:text-3xl text-[#ED1C24] mb-8 sm:mb-10 font-semibold">
            Manufacturing Process
        </h2>

        <div class="container mx-auto px-4 sm:px-6 lg:px-10">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-10">

                {{-- Step 1 --}}
                <div class="p-5 border border-gray-200 hover:shadow-lg transition flex flex-col gap-3 bg-white">
                    <img src="https://www.alliancebanks.com/portals/alliancebank/images/icons/agricultural-bl.svg"
                        alt="icon" class="w-10 h-10">

                    <p class="font-semibold text-sm sm:text-base">
                        01. Raw material sourcing
                    </p>

                    <p class="text-sm text-gray-600 leading-relaxed">
                        Sourcing premium local rice from sustainable partner farms to ensure raw material integrity
                    </p>
                </div>

                {{-- Step 2 --}}
                <div class="p-5 border border-gray-200 hover:shadow-lg transition flex flex-col gap-3 bg-white">
                    <img src="https://www.alliancebanks.com/portals/alliancebank/images/icons/agricultural-bl.svg"
                        alt="icon" class="w-10 h-10">

                    <p class="font-semibold text-sm sm:text-base">
                        02. Production with food-grade machinery
                    </p>

                    <p class="text-sm text-gray-600 leading-relaxed">
                        Processing through state-of-the-art food-grade machinery with automated calibration.
                    </p>
                </div>

                {{-- Step 3 --}}
                <div class="p-5 border border-gray-200 hover:shadow-lg transition flex flex-col gap-3 bg-white">
                    <img src="https://www.alliancebanks.com/portals/alliancebank/images/icons/agricultural-bl.svg"
                        alt="icon" class="w-10 h-10">

                    <p class="font-semibold text-sm sm:text-base">
                        03. Quality control
                    </p>

                    <p class="text-sm text-gray-600 leading-relaxed">
                        Rigorous multi-stage verification protocols following international safety standards.
                    </p>
                </div>

                {{-- Step 4 --}}
                <div class="p-5 border border-gray-200 hover:shadow-lg transition flex flex-col gap-3 bg-white">
                    <img src="https://www.alliancebanks.com/portals/alliancebank/images/icons/agricultural-bl.svg"
                        alt="icon" class="w-10 h-10">

                    <p class="font-semibold text-sm sm:text-base">
                        04. Packaging & export
                    </p>

                    <p class="text-sm text-gray-600 leading-relaxed">
                        Eco-friendly packaging and immediate integration into our global export network.
                    </p>
                </div>

            </div>
        </div>
    </div>

    {{-- Production Capacity --}}
    <div class="relative h-[70vh] md:h-[70vh] lg:h-[50vh] bg-cover bg-top"
        style="background-image: url('https://wp-themes.com/wp-content/themes/production-factory/assets/images/section-img.png');">

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-[#0B0B54]/75"></div>

        <!-- CONTENT -->
        <div class="relative z-10 text-white py-16 px-5">
            <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center gap-12">

                <!-- LEFT SIDE (TEXT + STATS) -->
                <div class="w-full lg:w-1/2">

                    <!-- HEADER -->
                    <div class="mb-10 text-center lg:text-left">
                        <h2 class="text-3xl md:text-4xl font-bold">
                            Production Capacity & Logistics
                        </h2>
                        <p class="mt-4 text-white/70">
                            Our infrastructure is built for high-output reliability, combining advanced automation with a
                            robust
                            logistics framework designed for global demand.
                        </p>
                    </div>

                    <!-- STATS -->
                    <div class="grid grid-cols-2 gap-8">

                        <div class="border-l-2 border-red-500 pl-4">
                            <h3 class="text-2xl font-bold">2.5M+</h3>
                            <p class="text-white/70 text-sm">Units Daily Production</p>
                        </div>

                        <div class="border-l-2 border-red-500 pl-4">
                            <h3 class="text-2xl font-bold">24/7</h3>
                            <p class="text-white/70 text-sm">Operational Monitoring</p>
                        </div>

                        <div class="border-l-2 border-red-500 pl-4">
                            <h3 class="text-2xl font-bold">48hr</h3>
                            <p class="text-white/70 text-sm">Port-to-Ship Turnaround</p>
                        </div>

                        <div class="border-l-2 border-red-500 pl-4">
                            <h3 class="text-2xl font-bold">ISO</h3>
                            <p class="text-white/70 text-sm">Full Export Compliance</p>
                        </div>

                    </div>
                </div>

                <!-- RIGHT SIDE (IMAGES) -->
                <div class="hidden lg:flex w-full lg:w-1/2 justify-center gap-4">

                    <div class="flex flex-col gap-4">
                        <img src="https://wp-themes.com/wp-content/themes/production-factory/assets/images/about01.png"
                            class="rounded-md w-48">
                        <img src="https://wp-themes.com/wp-content/themes/production-factory/assets/images/about02.png"
                            class="rounded-md w-48">
                    </div>

                    <img src="https://wp-themes.com/wp-content/themes/production-factory/assets/images/about03.png"
                        class="rounded-md w-64">
                </div>

            </div>
        </div>
    </div>


    <div class=" py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-10">

        <!-- TOP HEADER -->
        <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6 mb-10">

            <!-- LEFT TEXT -->
            <div>
                <p class="text-red-600 uppercase tracking-widest text-sm font-semibold">
                    Sustainability & Growth
                </p>

                <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold text-blue-900 mt-2">
                    Impact Beyond Industry
                </h2>

                <p class="text-gray-700 mt-3 max-w-2xl leading-relaxed">
                    We believe that manufacturing excellence is inseparable from environmental stewardship
                    and community empowerment.
                </p>
            </div>

            <!-- BADGE -->
            <div class="flex lg:justify-end">
                <div class="flex items-center gap-2 bg-white border rounded-full px-4 py-2 shadow-sm">
                    <span class="w-2.5 h-2.5 bg-green-500 rounded-full"></span>
                    <span class="text-blue-900 font-semibold text-sm">2024 ESG Verified</span>
                </div>
            </div>

        </div>

        <!-- CARDS -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Card 1 -->
            <div class="bg-white border p-6 hover:shadow-lg transition">
                <div class="w-10 h-10 bg-gray-100 flex items-center justify-center mb-4">
                    <i class="fa-solid fa-seedling text-blue-900"></i>
                </div>
                <h3 class="font-semibold text-lg text-blue-900">Farmer Prosperity</h3>
                <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                    Direct partnership program ensuring fair wages and sustainable farming education.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white border p-6 hover:shadow-lg transition">
                <div class="w-10 h-10 bg-gray-100 flex items-center justify-center mb-4">
                    <i class="fa-solid fa-users text-blue-900"></i>
                </div>
                <h3 class="font-semibold text-lg text-blue-900">65% Women Workforce</h3>
                <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                    Committed to gender equity through professional training and leadership roles.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white border p-6 hover:shadow-lg transition">
                <div class="w-10 h-10 bg-gray-100 flex items-center justify-center mb-4">
                    <i class="fa-solid fa-leaf text-blue-900"></i>
                </div>
                <h3 class="font-semibold text-lg text-blue-900">Eco Protection</h3>
                <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                    Zero-waste production systems that utilize 100% of organic manufacturing byproducts.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white border p-6 hover:shadow-lg transition">
                <div class="w-10 h-10 bg-gray-100 flex items-center justify-center mb-4">
                    <i class="fa-solid fa-bolt text-blue-900"></i>
                </div>
                <h3 class="font-semibold text-lg text-blue-900">Sustainable Energy</h3>
                <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                    Transitioning to solar-assisted production facilities by the end of Q3 2025.
                </p>
            </div>

        </div>

    </div>
</div>
@endsection
