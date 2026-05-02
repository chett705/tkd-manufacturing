@extends('Frontend.layouts.Main')

@section('content')
<div x-data="overviewTabs()" class="relative">

    {{-- HERO SECTION --}}
    <div class="relative h-[93vh] bg-cover bg-center text-white"
        style="background-image: url('https://wp-themes.com/wp-content/themes/production-factory/assets/images/banner-image.png');">

        <div class="absolute inset-0 bg-black/40"></div>

        {{-- HERO CONTENT --}}
        <div class="container mx-auto px-5 flex items-center h-full relative z-10">
            <div class="w-full lg:w-1/2 flex flex-col gap-5 text-center md:text-left">

                <h2 class="text-xl sm:text-2xl md:text-4xl lg:text-[44px] font-bold leading-snug">
                    Sustainable Rice-Flour Straws from Cambodia to the World
                </h2>

                <p class="text-sm sm:text-base md:text-lg lg:text-[22px]">
                    Eco-friendly, biodegradable, and durable alternatives to plastic straws.
                </p>

                <div class="flex flex-col sm:flex-row gap-3">
                    <a href="#" class="px-6 py-3 bg-white text-[#ED1C24] font-semibold">Get a Quote</a>
                    <a href="#" class="px-6 py-3 bg-white text-[#ED1C24] font-semibold">View Products</a>
                </div>

            </div>
        </div>

        {{-- TABS (CENTER BOTTOM OF HERO) --}}
        <div class="absolute bottom-[-50px] left-1/2 -translate-x-1/2 w-full max-w-5xl bg-white shadow-lg text-black  z-20">

            <div class="grid grid-cols-4 ">

                <template x-for="(tab, index) in tabs" :key="index">
                    <button
                        @click="active = index"
                        class="flex flex-col items-center gap-2 py-4 transition"
                        :class="active === index ? ' text-[#ED1C24]' : ''">

                        <img :src="tab.icon" class="w-6 h-6">
                        <p class="text-sm font-medium" x-text="tab.title"></p>

                    </button>
                </template>

            </div>

        </div>
    </div>

    {{-- TAB CONTENT (BELOW HERO) --}}
    <div class="container mx-auto flex items-center justify-center text-center px-5 py-20">

        <template x-for="(tab, index) in tabs" :key="index">
            <div x-show="active === index" x-transition class="text-center">

                <h3 class="text-2xl font-bold mb-3" x-text="tab.title"></h3>

                <p class="text-gray-600 text-lg" x-text="tab.content"></p>

            </div>
        </template>

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
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-10 my-10 px-5">
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
                    <div class="bg-white rounded-lg  shadow-lg">
                        <img src="{{ asset('images/MOC.jpg') }}"
                            class="w-full h-auto  group-hover:scale-105 transition duration-300">
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
{{-- ALPINE --}}
<script>
function overviewTabs() {
    return {
        active: 0,
        tabs: [
            {
                title: 'Company Overview',
                icon: '{{ asset("icons/company.png") }}',
                content: 'We are a Cambodian company focused on sustainable and eco-friendly straw production.'
            },
            {
                title: 'Vision',
                icon: '{{ asset("icons/vision.png") }}',
                content: 'To become a leading eco-friendly straw manufacturer in Southeast Asia.'
            },
            {
                title: 'Mission',
                icon: '{{ asset("icons/mission.png") }}',
                content: 'Reduce plastic waste by offering biodegradable alternatives worldwide.'
            },
            {
                title: 'Values',
                icon: '{{ asset("icons/value.png") }}',
                content: 'Sustainability, innovation, and responsibility toward the environment.'
            }
        ]
    }
}
</script>
