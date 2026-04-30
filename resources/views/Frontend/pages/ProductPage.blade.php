@extends('Frontend.layouts.Main')

@section('content')
    {{-- hero section --}}
    <div class="h-[93vh] bg-cover bg-center text-white relative"
        style="background-image: url('https://wp-themes.com/wp-content/themes/production-factory/assets/images/banner-image.png');">

        <div class="absolute bottom-0 right-0 w-8/10 overflow-hidden">

            <!-- background -->
            <div class="absolute inset-0 bg-[#ED1C24]
        [clip-path:polygon(10%_0,100%_0,100%_100%,0_100%)]">
            </div>

            <!-- content -->
            <div class="relative z-10 px-40 py-6 flex items-center justify-between gap-5">
                <div class="flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-phone text-black"></i>
                    <p>+855 12 590 666</p>
                </div>
                <div class="flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-envelope text-black"></i>
                    <p>tkd.manufacturing89@gmail.com</p>
                </div>
                <div class="flex items-center gap-2 cursor-pointer">
                    <i class="fa-solid fa-bullhorn text-black"></i>
                    <p>Delivering Industrial Excellence with Every Product.</p>
                </div>
            </div>

        </div>

        <div class="container mx-auto px-3 flex items-center  h-full ">

            <div class="w-1/2 flex flex-col gap-5">
                <h2 class="text-[44px]">Sustainable Rice-Flour Straws from Cambodia to the World</h2>
                <p class="text-[22px]">Eco-friendly, biodegradable, and durable alternatives to plastic straws
                    .</p>
                <div class="flex items-center gap-5">
                    <a href=""
                        class="w-full text-[16px] font-semibold py-3 border border-[#ED1C24] flex items-center justify-center bg-white text-[#ED1C24]">Get
                        a Quote</a>
                    <a href=""
                        class="w-full text-[16px] font-semibold py-3 border border-[#ED1C24] flex items-center justify-center bg-white text-[#ED1C24]">View
                        Products</a>
                </div>
            </div>
        </div>
    </div>

    {{-- main product --}}
    <div class="min-h-[60vh] px-6 py-40 bg-[#0B0B54] ">

        <div class="container mx-auto px-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="grid grid-cols-2 gap-4">

                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-eXlyj9I5e2YDCeNauWU1_F-wkcC4bu7QGEaa5W74glPFho-Rk78WDf90It9LTt26ANHZ_DemR0zRCL4QW1uOhrwXYk0WmJcmFGalV_l6wnw_Ii5KXj22cBPDMqFcC86-SXIADjqGeF5SJUHogvgN3VrDXOgCwMeChKaSUJf3i_huaPDYg0E_ESoI2xLvB51C54sC9QJutHGaLQOqar5IeSZv6sUuMZh_hWfFnzDAxTnbAmR97Oc92p3NTOjyb6MZcc2V_N_aXmrD"
                    class="w-full  object-cover rounded-lg shadow-lg" />

                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-eXlyj9I5e2YDCeNauWU1_F-wkcC4bu7QGEaa5W74glPFho-Rk78WDf90It9LTt26ANHZ_DemR0zRCL4QW1uOhrwXYk0WmJcmFGalV_l6wnw_Ii5KXj22cBPDMqFcC86-SXIADjqGeF5SJUHogvgN3VrDXOgCwMeChKaSUJf3i_huaPDYg0E_ESoI2xLvB51C54sC9QJutHGaLQOqar5IeSZv6sUuMZh_hWfFnzDAxTnbAmR97Oc92p3NTOjyb6MZcc2V_N_aXmrD"
                    class="w-full object-cover rounded-lg shadow-lg" />

                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-eXlyj9I5e2YDCeNauWU1_F-wkcC4bu7QGEaa5W74glPFho-Rk78WDf90It9LTt26ANHZ_DemR0zRCL4QW1uOhrwXYk0WmJcmFGalV_l6wnw_Ii5KXj22cBPDMqFcC86-SXIADjqGeF5SJUHogvgN3VrDXOgCwMeChKaSUJf3i_huaPDYg0E_ESoI2xLvB51C54sC9QJutHGaLQOqar5IeSZv6sUuMZh_hWfFnzDAxTnbAmR97Oc92p3NTOjyb6MZcc2V_N_aXmrD"
                    class="w-full  object-cover rounded-lg shadow-lg" />

                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-eXlyj9I5e2YDCeNauWU1_F-wkcC4bu7QGEaa5W74glPFho-Rk78WDf90It9LTt26ANHZ_DemR0zRCL4QW1uOhrwXYk0WmJcmFGalV_l6wnw_Ii5KXj22cBPDMqFcC86-SXIADjqGeF5SJUHogvgN3VrDXOgCwMeChKaSUJf3i_huaPDYg0E_ESoI2xLvB51C54sC9QJutHGaLQOqar5IeSZv6sUuMZh_hWfFnzDAxTnbAmR97Oc92p3NTOjyb6MZcc2V_N_aXmrD"
                    class="w-full object-cover rounded-lg shadow-lg" />

            </div>
            <!-- RIGHT CONTENT -->
            <div class="flex flex-col gap-8">

                <!-- TITLE -->
                <h2 class="text-3xl md:text-4xl font-bold text-white">
                    Engineering Excellence: Rice-Flour Straws
                </h2>

                <!-- FEATURES GRID -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    <div>
                        <h4 class="font-bold text-sm text-white uppercase">Biodegradability</h4>
                        <p class="text-white">100% compostable in 90 days</p>
                    </div>

                    <div>
                        <h4 class="font-bold text-sm text-white uppercase">Safety Standard</h4>
                        <p class="text-white">Food-grade, non-toxic polymer alternative</p>
                    </div>

                    <div>
                        <h4 class="font-bold text-sm text-white uppercase">Performance</h4>
                        <p class="text-white">High structural integrity in hot/cold drinks</p>
                    </div>

                    <div>
                        <h4 class="font-bold text-sm text-white uppercase">Sensory Profile</h4>
                        <p class="text-white">Neutral taste, no paper-like residue</p>
                    </div>

                </div>

                <!-- TECHNICAL BOX -->
                <div class="border border-gray-200 bg-white p-6 rounded-lg shadow-sm">

                    <h3 class="font-bold text-[#0B0B54] mb-4 flex items-center gap-2">
                        ⚙️ Technical Specifications
                    </h3>

                    <div class="space-y-3 text-sm">

                        <div class="flex justify-between">
                            <span class="text-gray-600">Available Sizes</span>
                            <span class="font-semibold">6mm / 8mm / 12mm (Jumbo)</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-600">Natural Tones</span>
                            <span class="font-semibold">White, Charcoal, Green, Brown</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-600">Standard Length</span>
                            <span class="font-semibold">200mm (Customizable)</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-gray-600">Packaging</span>
                            <span class="font-semibold">Individual Wrap, Bulk, OEM</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- key products --}}
    <div class="py-20 relative">
        <div class="absolute top-20 left-0 w-1/3 overflow-hidden">
            <!-- background -->
            <div class="absolute inset-0 bg-[#ED1C24]
                [clip-path:polygon(0_0,100%_0,90%_100%,0_100%)]">
            </div>
            <!-- content aligned EXACTLY with navbar (right side of 1400px) -->
            <div class="relative z-10 px-6 py-3 flex justify-center">
                <h1 class="text-2xl font-bold text-white capitalize">our key products</h1>
            </div>
        </div>

        {{-- card --}}
        <div class="grid grid-cols-3 gap-10 py-30 container mx-auto ">

            <div class="group">

                <!-- IMAGE WRAPPER -->
                <div class="relative ">

                    <!-- IMAGE -->
                    <img src="https://images.pexels.com/photos/6801215/pexels-photo-6801215.jpeg"
                        class="w-full h-[300px] object-cover">

                    <!-- TOP SLANTED BAR -->
                    <div
                        class="absolute top-[-13px] right-0 w-[85%] h-[26px] bg-[#0B0B54] z-50 transition-all duration-500 group-hover:w-[90%] group-hover:bg-[#ED1C24] [clip-path:polygon(0_0,100%_0,100%_100%,10%_100%)]">
                    </div>

                    <!-- BOTTOM SLANTED BAR -->
                    <div
                        class="absolute bottom-[-13px] left-0 w-[85%] h-[26px]
            bg-[#0B0B54]
            z-50
            transition-all duration-500
            group-hover:w-[90%]
            group-hover:bg-[#ED1C24]
            [clip-path:polygon(0_0,90%_0,100%_100%,0_100%)]">
                    </div>

                </div>

                <!-- PRODUCT INFO -->
                <div class="flex flex-col justify-center items-center gap-3 py-7 px-5">
                    <p class="font-semibold text-[19px] line-clamp-1">Title</p>
                    <p class="line-clamp-3 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit...
                    </p>
                    <a href=""
                        class="flex items-center justify-center w-full py-2 border bg-[#0B0B54] hover:bg-[#ED1C24] transition-all duration-500 text-white">Explore
                        Product</a>
                </div>

            </div>

        </div>

    </div>
@endsection
