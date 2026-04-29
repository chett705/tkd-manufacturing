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

    {{-- why choose us --}}
    <div class="relative h-[60vh] bg-cover bg-top"
        style="background-image: url('https://wp-themes.com/wp-content/themes/production-factory/assets/images/section-img.png');">

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-[#0B0B54]/60"></div>

        <!-- CONTENT (optional) -->
        <div class="relative z-10 h-full text-white py-20">
            <h1 class="text-center text-3xl font-bold capitalize">why choose us</h1>

            <div class="grid grid-cols-3 gap-5">
                
            </div>
        </div>

    </div>
@endsection
