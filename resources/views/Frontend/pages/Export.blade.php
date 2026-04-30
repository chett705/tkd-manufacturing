@extends('Frontend.layouts.Main')

@section('content')
    {{-- hero section --}}
    <div class="h-[93vh] bg-cover bg-center  relative text-white"
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
                <h2 class="text-[44px]">Reliable Eco-Friendly Straw Supplier from Cambodia</h2>
                <p class="text-[22px]"> Bulk supply of high-quality rice-flour straws for global distributors, wholesalers,
                    and brands.</p>
                <div class="flex items-center gap-5">
                    <a href=""
                        class="w-full text-[16px] font-semibold py-3 border border-[#ED1C24] flex items-center justify-center bg-white text-[#ED1C24]">Get
                        a Quote</a>
                    <a href=""
                        class="w-full text-[16px] font-semibold py-3 border border-[#ED1C24] flex items-center justify-center bg-white text-[#ED1C24]">Download
                        Product Catalog</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Who We Serve --}}
    <div class="mt-20 bg-[#0B0B54] py-16">

        <!-- TITLE -->
        <div class="text-center mb-12">
            <p class="uppercase text-2xl font-bold ">Who we serve</p>
            <div class="w-[60px] h-[3px] bg-[#ED1C24] mx-auto mt-2"></div>
        </div>

        <!-- CARDS -->
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 px-6">

            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="font-semibold text-[#0B0B54] uppercase text-sm mb-2">
                    Importers & Distributors
                </p>
                <p class=" text-sm">
                    Optimized supply chain partnerships for large-scale international distribution.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="font-semibold text-[#0B0B54] uppercase text-sm mb-2">
                    Supermarkets & Retail Chains
                </p>
                <p class=" text-sm">
                    Shelf-ready packaging solutions for major supermarket and retail environments.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="font-semibold text-[#0B0B54] uppercase text-sm mb-2">
                    F&B Brands (Coffee, Bubble Tea, Restaurants)
                </p>
                <p class=" text-sm">
                    Specialized solutions for coffee chains, bubble tea brands, and restaurant groups.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <p class="font-semibold text-[#0B0B54] uppercase text-sm mb-2">
                    Eco-friendly Product Wholesalers
                </p>
                <p class=" text-sm">
                    Sustainable-first sourcing for companies focused on green business supplies.
                </p>
            </div>

        </div>
    </div>

    {{-- main product --}}
    <div class="min-h-[60vh] px-6 py-40  ">

        <div class="container mx-auto px-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            <div class="grid grid-cols-2 gap-4">

                <!-- LEFT: 2 IMAGES -->
                <div class="grid grid-rows-2 gap-4">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-eXlyj9I5e2YDCeNauWU1_F-wkcC4bu7QGEaa5W74glPFho-Rk78WDf90It9LTt26ANHZ_DemR0zRCL4QW1uOhrwXYk0WmJcmFGalV_l6wnw_Ii5KXj22cBPDMqFcC86-SXIADjqGeF5SJUHogvgN3VrDXOgCwMeChKaSUJf3i_huaPDYg0E_ESoI2xLvB51C54sC9QJutHGaLQOqar5IeSZv6sUuMZh_hWfFnzDAxTnbAmR97Oc92p3NTOjyb6MZcc2V_N_aXmrD"
                        class="w-full h-full object-cover rounded-lg shadow-lg" />

                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-eXlyj9I5e2YDCeNauWU1_F-wkcC4bu7QGEaa5W74glPFho-Rk78WDf90It9LTt26ANHZ_DemR0zRCL4QW1uOhrwXYk0WmJcmFGalV_l6wnw_Ii5KXj22cBPDMqFcC86-SXIADjqGeF5SJUHogvgN3VrDXOgCwMeChKaSUJf3i_huaPDYg0E_ESoI2xLvB51C54sC9QJutHGaLQOqar5IeSZv6sUuMZh_hWfFnzDAxTnbAmR97Oc92p3NTOjyb6MZcc2V_N_aXmrD"
                        class="w-full h-full object-cover rounded-lg shadow-lg" />
                </div>

                <!-- RIGHT: 1 BIG IMAGE -->
                <div>
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-eXlyj9I5e2YDCeNauWU1_F-wkcC4bu7QGEaa5W74glPFho-Rk78WDf90It9LTt26ANHZ_DemR0zRCL4QW1uOhrwXYk0WmJcmFGalV_l6wnw_Ii5KXj22cBPDMqFcC86-SXIADjqGeF5SJUHogvgN3VrDXOgCwMeChKaSUJf3i_huaPDYg0E_ESoI2xLvB51C54sC9QJutHGaLQOqar5IeSZv6sUuMZh_hWfFnzDAxTnbAmR97Oc92p3NTOjyb6MZcc2V_N_aXmrD"
                        class="w-full h-full object-cover rounded-lg shadow-lg" />
                </div>

            </div>
            <!-- RIGHT CONTENT -->
            <div class="flex flex-col gap-8">

                <!-- TITLE -->
                <h2 class="text-3xl md:text-4xl font-bold ">
                    Engineering Excellence: Rice-Flour Straws
                </h2>

                <!-- FEATURES GRID -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    <div>
                        <h4 class="font-bold text-sm  uppercase">Biodegradability</h4>
                        <p class="">100% compostable in 90 days</p>
                    </div>

                    <div>
                        <h4 class="font-bold text-sm  uppercase">Safety Standard</h4>
                        <p class="">Food-grade, non-toxic polymer alternative</p>
                    </div>

                    <div>
                        <h4 class="font-bold text-sm  uppercase">Performance</h4>
                        <p class="">High structural integrity in hot/cold drinks</p>
                    </div>

                    <div>
                        <h4 class="font-bold text-sm  uppercase">Sensory Profile</h4>
                        <p class="">Neutral taste, no paper-like residue</p>
                    </div>

                </div>

                <!-- TECHNICAL BOX -->
                <div class="border border-gray-200 bg-white p-6 rounded-lg shadow-sm">

                    <h3 class="font-bold text-[#0B0B54] mb-4 flex items-center gap-2">
                        ⚙️ Technical Specifications
                    </h3>

                    <div class="space-y-3 text-sm">

                        <div class="flex justify-between">
                            <span class="">Available Sizes</span>
                            <span class="font-semibold">6mm / 8mm / 12mm (Jumbo)</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="">Natural Tones</span>
                            <span class="font-semibold">White, Charcoal, Green, Brown</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="">Standard Length</span>
                            <span class="font-semibold">200mm (Customizable)</span>
                        </div>

                        <div class="flex justify-between">
                            <span class="">Packaging</span>
                            <span class="font-semibold">Individual Wrap, Bulk, OEM</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- why choose us --}}
    <div class="mt-20 bg-[#0B0B54] py-20 text-white">
        <div class="max-w-7xl mx-auto px-6">

            <!-- HEADER -->
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-bold">
                    Strategic Manufacturing Advantages
                </h2>
                <p class="mt-4 text-white/70 max-w-2xl mx-auto">
                    Leveraging Cambodia's agricultural abundance and modern industrial precision to deliver world-class
                    sustainable solutions.
                </p>
            </div>

            <!-- GRID -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                <!-- ITEM -->
                <div class="border-l border-white/10 pl-6">
                    <h3 class="text-sm font-semibold text-[#ED1C24] uppercase">Direct Manufacturer</h3>
                    <p class="mt-3 text-white/80 text-sm leading-relaxed">
                        Cut out the middleman. We control the entire production line from raw material processing to final
                        export packing.
                    </p>
                </div>

                <div class="border-l border-white/10 pl-6">
                    <h3 class="text-sm font-semibold text-[#ED1C24] uppercase">Reliable Capacity</h3>
                    <p class="mt-3 text-white/80 text-sm leading-relaxed">
                        Modernized facility capable of high-volume output to meet demanding global distributor schedules.
                    </p>
                </div>

                <div class="border-l border-white/10 pl-6">
                    <h3 class="text-sm font-semibold text-[#ED1C24] uppercase">OEM & Private Label</h3>
                    <p class="mt-3 text-white/80 text-sm leading-relaxed">
                        Full customization available with brand-specific dimensions, colors, and packaging.
                    </p>
                </div>

                <div class="border-l border-white/10 pl-6">
                    <h3 class="text-sm font-semibold text-[#ED1C24] uppercase">Export Experience</h3>
                    <p class="mt-3 text-white/80 text-sm leading-relaxed">
                        Dedicated logistics team managing FOB/CIF terms and international documentation.
                    </p>
                </div>

                <div class="border-l border-white/10 pl-6">
                    <h3 class="text-sm font-semibold text-[#ED1C24] uppercase">ISO & HACCP Standards</h3>
                    <p class="mt-3 text-white/80 text-sm leading-relaxed">
                        Compliance with international food safety and manufacturing protocols.
                    </p>
                </div>

                <div class="border-l border-white/10 pl-6">
                    <h3 class="text-sm font-semibold text-[#ED1C24] uppercase">Factory Pricing</h3>
                    <p class="mt-3 text-white/80 text-sm leading-relaxed">
                        Competitive wholesale structure designed to maximize margin for partners.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <h2 class="text-3xl font-bold  mb-8">
                Production & Quality Assurance
            </h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Left: Text content -->
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-[#ED1C24]">Modern Food-Grade Factory</h3>
                        <p class="">
                            High-precision machinery in a temperature and humidity-controlled environment.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#ED1C24]">Strict Hygiene Control</h3>
                        <p class="">
                            Technicians follow rigorous sanitary protocols including PPE and air-shower entry.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#ED1C24]">International Compliance</h3>
                        <p class="">
                            Manufactured according to FDA, EU, and global safety standards for food contact.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold text-[#ED1C24]">Quality Inspection</h3>
                        <p class="">
                            Three-stage testing for diameter accuracy, tensile strength, and shelf-life before shipment.
                        </p>
                    </div>
                </div>

                <!-- Right: Images -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <img src="core-facility.jpg" alt="Core Facility" class="w-full h-48 object-cover">
                        <div class="p-4 text-center text-sm font-medium text-gray-700">CORE FACILITY</div>
                    </div>

                    <div class="bg-white shadow rounded-lg overflow-hidden">
                        <img src="qa-lab.jpg" alt="QA Lab" class="w-full h-48 object-cover">
                        <div class="p-4 text-center text-sm font-medium text-gray-700">QA LAB</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#0B0B54] text-white py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Title -->
            <h2 class="text-3xl font-bold  mb-6">
                Global Export Capability
            </h2>
            <p class=" mb-10">
                We offer streamlined logistics solutions to over 40 countries, ensuring your inventory arrives on time and
                in perfect condition.
            </p>

            <!-- Grid layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left column -->
                <div class="space-y-6">
                    <ul class="list-disc list-inside  space-y-2">
                        <li><span class="font-semibold">FOB</span> Sihanoukville Port</li>
                        <li><span class="font-semibold">CIF</span> Major Global Ports</li>
                        <li><span class="font-semibold">DDP</span> Shipping Support</li>
                    </ul>

                    <div>
                        <h3 class="text-xl font-semibold ">Container Loading</h3>
                        <p class="">
                            Specialized palletization for 20ft/40ft/40ft HQ containers to maximize space efficiency and
                            minimize movement during transit.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold ">Documentation Support</h3>
                        <p class="">
                            Full handling of Certificates of Origin, Bill of Lading, Packing Lists, and specialized customs
                            documentation for different trade zones.
                        </p>
                    </div>
                </div>

                <!-- Right column -->
                <div class="space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold ">International Markets</h3>
                        <p class="">
                            Vast experience serving North America, Europe, Australia, and ASEAN markets with compliant
                            export labeling.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold ">Shipment Protection</h3>
                        <p class="">
                            Moisture-resistant specialized export packaging (double-walled cartons) ensuring product
                            integrity across ocean transit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-10">
                Wholesale MOQ & Customization
            </h2>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Standard MOQ -->
                <div class="bg-white shadow rounded-lg p-6 space-y-4">
                    <h3 class="text-xl font-semibold text-blue-700">Standard MOQ</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Standard Sizes: 100,000 units</li>
                        <li>Custom Lengths: 250,000 units</li>
                        <li>Private Label: 500,000 units</li>
                    </ul>
                </div>

                <!-- Packaging Options -->
                <div class="bg-white shadow rounded-lg p-6 space-y-4">
                    <h3 class="text-xl font-semibold text-blue-700">Packaging Options</h3>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Individual Paper/PLA Wrap</li>
                        <li>Bulk Carton (Loose Pack)</li>
                        <li>Retail-Ready Display Boxes</li>
                        <li>Custom Branded Outer Cartons</li>
                    </ul>
                </div>

                <!-- OEM & Customization -->
                <div class="bg-white shadow rounded-lg p-6 space-y-4">
                    <h3 class="text-xl font-semibold text-blue-700">OEM & Customization</h3>
                    <p class="text-gray-600">
                        Complete brand integration for large distributors:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Logo Printing on Wrappers</li>
                        <li>Custom Straw Diameters (6–14mm)</li>
                        <li>Natural Dye Color Matching</li>
                        <li>Point-of-Sale Packaging Design</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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

    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-gray-800 mb-10">
                Operational Infrastructure
            </h2>
            <p class="text-gray-600 mb-12">
                End-to-End Precision Manufacturing
            </p>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Factory -->
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <div class="text-blue-600 text-4xl mb-4">🏭</div>
                    <h3 class="text-xl font-semibold text-blue-700">Factory</h3>
                    <p class="text-gray-600">
                        ISO 9001:2015 Certified Production Center
                    </p>
                </div>

                <!-- Production -->
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <div class="text-blue-600 text-4xl mb-4">👔</div>
                    <h3 class="text-xl font-semibold text-blue-700">Production</h3>
                    <p class="text-gray-600">
                        Output capacity: 5M units/day
                    </p>
                </div>

                <!-- Packing -->
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <div class="text-blue-600 text-4xl mb-4">📦</div>
                    <h3 class="text-xl font-semibold text-blue-700">Packing</h3>
                    <p class="text-gray-600">
                        Customized B2B Packaging Solutions
                    </p>
                </div>

                <!-- Container Loading -->
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <div class="text-blue-600 text-4xl mb-4">🚚</div>
                    <h3 class="text-xl font-semibold text-blue-700">Container Loading</h3>
                    <p class="text-gray-600">
                        Weekly Export Cycles to EU/USA
                    </p>
                </div>

                <!-- Delivered Orders -->
                <div class="bg-white shadow rounded-lg p-6 text-center">
                    <div class="text-blue-600 text-4xl mb-4">📦</div>
                    <h3 class="text-xl font-semibold text-blue-700">Delivered Orders</h3>
                    <p class="text-gray-600">
                        Trusted Global Fulfillment Logistics
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
