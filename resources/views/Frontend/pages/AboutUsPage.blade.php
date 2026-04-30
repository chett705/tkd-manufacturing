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

    <!-- CTA SECTION -->
    <div class="mt-60 bg-[#0B0B54] text-white py-20 text-center relative overflow-hidden">

        <!-- OPENING QUOTE (TOP LEFT) -->
        <div class="text-[120px] leading-none font-bold absolute top-5 left-1/7 text-white">
            “
        </div>

        <!-- CLOSING QUOTE (BOTTOM RIGHT) -->
        <div class="text-[120px] leading-none font-bold  absolute bottom-0 right-1/7 text-white">
            ”
        </div>

        <!-- TEXT -->
        <h2 class="text-[26px] md:text-[32px] font-bold mb-8 relative z-10">
            From local agricultural resources to global markets, TK&D transforms rice <br /> into sustainable solutions that
            reduce plastic waste.
        </h2>

    </div>

    {{-- our leader ship --}}
    <div class="my-20">
        <h2 class="text-2xl text-center font-bold text-[#ED1C24]">Our Leadership Team</h2>
        <div class="container mx-auto grid grid-cols-3 gap-15 my-10">
            {{-- card --}}
            <div class="p-3 flex flex-col gap-2 border border-gray-400 shadow-lg">
                <img src="https://imgcdn.stablediffusionweb.com/2024/4/17/6d71579f-ecef-42de-b83e-c0cb8179130c.jpg"
                    alt="">
                <div>
                    <p>Mr. Theoun Lin </p>
                    <p class="text-[#ED1C24] uppercase">founder</p>
                </div>
            </div>
            {{-- card --}}
            <div class="p-3 flex flex-col gap-2 border border-gray-400 shadow-lg">
                <img src="https://imgcdn.stablediffusionweb.com/2024/4/17/6d71579f-ecef-42de-b83e-c0cb8179130c.jpg"
                    alt="">
                <div>
                    <p>Mrs. Tit Sokhom</p>
                    <p class="text-[#ED1C24] uppercase">founder</p>
                </div>
            </div>
            {{-- card --}}
            <div class="p-3 flex flex-col gap-2 border border-gray-400 shadow-lg">
                <img src="https://imgcdn.stablediffusionweb.com/2024/4/17/6d71579f-ecef-42de-b83e-c0cb8179130c.jpg"
                    alt="">
                <div>
                    <p>Ms. Chem Lisa </p>
                    <p class=" uppercase">Accounting & Admin</p>
                </div>
            </div>

            {{-- card --}}
            <div class="p-3 flex flex-col gap-2 border border-gray-400 shadow-lg">
                <img src="https://imgcdn.stablediffusionweb.com/2024/4/17/6d71579f-ecef-42de-b83e-c0cb8179130c.jpg"
                    alt="">
                <div>
                    <p>Mr. Mon Sina </p>
                    <p class="uppercase">Sales & Marketing Executive</p>
                </div>
            </div>
            {{-- card --}}
            <div class="p-3 flex flex-col gap-2 border border-gray-400 shadow-lg">
                <img src="https://imgcdn.stablediffusionweb.com/2024/4/17/6d71579f-ecef-42de-b83e-c0cb8179130c.jpg"
                    alt="">
                <div>
                    <p>Ms. Leang Rotha</p>
                    <p class="uppercase">Manager </p>
                </div>
            </div>
            {{-- card --}}
            <div class="p-3 flex flex-col gap-2 border border-gray-400 shadow-lg">
                <img src="https://imgcdn.stablediffusionweb.com/2024/4/17/6d71579f-ecef-42de-b83e-c0cb8179130c.jpg"
                    alt="">
                <div>
                    <p>Mr. Khorn Sao </p>
                    <p class=" uppercase">Supervisor Technical </p>
                </div>
            </div>

            {{-- card --}}
            <div class="p-3 flex flex-col gap-2 border border-gray-400 shadow-lg">
                <img src="https://imgcdn.stablediffusionweb.com/2024/4/17/6d71579f-ecef-42de-b83e-c0cb8179130c.jpg"
                    alt="">
                <div>
                    <p>Mrs. Yon Reang</p>
                    <p class="uppercase">Supervisor Production</p>
                </div>
            </div>
            {{-- card --}}
            <div class="p-3 flex flex-col gap-2 border border-gray-400 shadow-lg">
                <img src="https://imgcdn.stablediffusionweb.com/2024/4/17/6d71579f-ecef-42de-b83e-c0cb8179130c.jpg"
                    alt="">
                <div>
                    <p>Ms. You Sa </p>
                    <p class="uppercase">Food Chemical </p>
                </div>
            </div>
            {{-- card --}}
            <div class="p-3 flex flex-col gap-2 border border-gray-400 shadow-lg">
                <img src="https://imgcdn.stablediffusionweb.com/2024/4/17/6d71579f-ecef-42de-b83e-c0cb8179130c.jpg"
                    alt="">
                <div>
                    <p>Mr. Moung Seangmeng </p>
                    <p class=" uppercase">Warehouse </p>
                </div>
            </div>
        </div>
    </div>


    {{-- certification --}}
    <div class="py-20 bg-[#0B0B54]">
        <div class="container mx-auto px-4 text-center">

            <!-- TITLE -->
            <h2 class="text-3xl font-bold mb-4 text-white">Our Certifications</h2>
            <p class="mb-12 text-white">
                We meet international standards to ensure quality and sustainability.
            </p>

            <!-- GRID -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- ITEM -->
                <div class="group">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/ISO.jpg') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <p class="mt-3 font-semibold text-white">ISO Certified</p>
                </div>

                <!-- ITEM -->
                <div class="group">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/HACCP.jpg') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <p class="mt-3 font-semibold text-white">HACCP</p>
                </div>

                <!-- ITEM -->
                <div class="group">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/MOC.jpg') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <p class="mt-3 font-semibold text-white">Business Licenses</p>
                </div>

                <!-- ITEM -->
                <div class="group">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/Tax.jpg') }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    </div>
                    <p class="mt-3 font-semibold text-white">Tax Compliance</p>
                </div>

            </div>

        </div>
    </div>
    </div>
@endsection
