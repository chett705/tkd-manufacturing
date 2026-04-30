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
    <div class="relative h-[80vh] bg-cover bg-top"
        style="background-image: url('https://wp-themes.com/wp-content/themes/production-factory/assets/images/section-img.png');">

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-[#0B0B54]/75"></div>

        <!-- CONTENT (optional) -->
        <div class="relative z-10 h-full text-white py-20">
            <div class="flex items-center justify-center gap-10">
                {{-- images --}}
                <div class="flex items-center justify-center gap-3">
                    <div class="flex flex-col items-center gap-3">
                        <img src="https://wp-themes.com/wp-content/themes/production-factory/assets/images/about01.png"
                            alt="" class="rounded-md">
                        <img src="https://wp-themes.com/wp-content/themes/production-factory/assets/images/about02.png"
                            alt="" class="rounded-md">
                    </div>
                    <img src="https://wp-themes.com/wp-content/themes/production-factory/assets/images/about03.png"
                        alt="" class="rounded-md">
                </div>
                {{-- text --}}
                <div class="flex flex-col gap-5">
                    <div>
                        <p class="text-[#ED1C24] font-bold text-[19px]">Why Choose Us</p>
                        <p class="text-[28px] font-bold">We want to give you the best service</p>
                    </div>
                    <p class="line-clamp-3 w-[770px]">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s</p>
                    {{-- icon & text --}}
                    <div class="grid grid-cols-2 gap-5">
                        <!-- item -->
                        <div class="flex flex-col gap-3 items-start">
                            <img src="{{ asset('icons/biodegradable.png') }}"
                                class="w-10 h-10 object-contain filter brightness-0 invert">

                            <div class="flex flex-col">
                                <p class="text-[19px] font-bold">100% biodegradable products</p>
                                <p class="text-sm line-clamp-2 w-[300px]">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                        </div>

                        <!-- duplicate item -->
                        <div class="flex flex-col gap-3 items-start">
                            <img src="{{ asset('icons/security (1).png') }}"
                                class="w-10 h-10 object-contain filter brightness-0 invert">

                            <div class="flex flex-col">
                                <p class="text-[19px] font-bold">Strong & durable</p>
                                <p class="text-sm line-clamp-2 w-[300px]">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                        </div>

                        <!-- duplicate item -->
                        <div class="flex flex-col gap-3 items-start">
                            <img src="{{ asset('icons/dollar.png') }}"
                                class="w-10 h-10 object-contain filter brightness-0 invert">

                            <div class="flex flex-col">
                                <p class="text-[19px] font-bold">Competitive pricing</p>
                                <p class="text-sm line-clamp-2 w-[300px]">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                        </div>

                        <!-- duplicate item -->
                        <div class="flex flex-col gap-3 items-start">
                            <img src="{{ asset('icons/global-shipping.png') }}"
                                class="w-10 h-10 object-contain filter brightness-0 invert">

                            <div class="flex flex-col">
                                <p class="text-[19px] font-bold">Export-ready production</p>
                                <p class="text-sm line-clamp-2 w-[300px]">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                        </div>

                        <!-- duplicate item -->
                        <div class="flex flex-col gap-3 items-start">
                            <img src="{{ asset('icons/development.png') }}"
                                class="w-10 h-10 object-contain filter brightness-0 invert">

                            <div class="flex flex-col">
                                <p class="text-[19px] font-bold">OEM/ODM</p>
                                <p class="text-sm line-clamp-2 w-[300px]">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Production & Quality --}}
    <div class="my-20 px-20">
        <p class="text-[26px] font-bold text-center mb-10">Production & Quality</p>

        <!-- OUTER WRAPPER (important) -->
        <div class="relative container mx-auto">

            <!-- LEFT BUTTON (outside feel) -->
            <button onclick="prevSlide()"
                class="absolute -left-12 top-1/2 -translate-y-1/2 z-10
                   bg-black text-white rounded-full px-4 py-2 shadow cursor-pointer">
                ‹
            </button>

            <!-- RIGHT BUTTON -->
            <button onclick="nextSlide()"
                class="absolute -right-12 top-1/2 -translate-y-1/2 z-10
                   bg-black text-white rounded-full px-4 py-2 shadow cursor-pointer">
                ›
            </button>

            <!-- CAROUSEL -->
            <div class="overflow-hidden">
                <div id="carousel" class="flex transition-transform duration-500 ease-in-out">

                    <div class="w-1/3 flex-shrink-0 px-2">
                        <div class="border rounded-md p-3">
                            <p class="text-center font-bold pb-3">ISO & HACCP aligned</p>
                            <p class="text-center line-clamp-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam nemo culpa, modi totam exercitationem incidunt reiciendis inventore iusto maiores
                                consectetur doloribus rem rerum. Magni exercitationem accusantium doloribus vero molestias
                                quae.</p>
                        </div>
                    </div>

                    <div class="w-1/3 flex-shrink-0 px-2">
                        <div class="border rounded-md p-3">
                            <p class="text-center font-bold pb-3">Food Safety</p>
                            <p class="text-center line-clamp-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam nemo culpa, modi totam exercitationem incidunt reiciendis inventore iusto maiores
                                consectetur doloribus rem rerum. Magni exercitationem accusantium doloribus vero molestias
                                quae.</p>
                        </div>
                    </div>

                    <div class="w-1/3 flex-shrink-0 px-2">
                        <div class="border rounded-md p-3">
                            <p class="text-center font-bold pb-3">Quality Control</p>
                            <p class="text-center line-clamp-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam nemo culpa, modi totam exercitationem incidunt reiciendis inventore iusto maiores
                                consectetur doloribus rem rerum. Magni exercitationem accusantium doloribus vero molestias
                                quae.</p>
                        </div>
                    </div>

                    <div class="w-1/3 flex-shrink-0 px-2">
                        <div class="border rounded-md p-3">
                            <p class="text-center font-bold pb-3">Export Standard</p>
                            <p class="text-center line-clamp-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Laboriosam nemo culpa, modi totam exercitationem incidunt reiciendis inventore iusto maiores
                                consectetur doloribus rem rerum. Magni exercitationem accusantium doloribus vero molestias
                                quae.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    {{-- Markets We Serve --}}
    <div class="mt-20 bg-[#F0ECF3] h-[60vh]">
        <div class="flex justify-between px-30 py-20">
            <div class="flex flex-col gap-10">
                <div>
                    <p class="uppercase text-lg text-[#ED1C24] font-bold">our reach</p>
                    <p>Serving local markets and global economy</p>
                </div>
                <div>
                    <div class="text-[#ED1C24] flex items-center gap-5">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Cambodia</p>
                    </div>
                    <ul class="grid grid-cols-2 gap-10 capitalize mt-5">
                        <li class="flex items-center">
                            <span class="mr-2">■</span>
                            <span>cafes</span>
                        </li>
                        <li class="flex items-center">
                            <span class="mr-2">■</span>
                            <span>hotels</span>
                        </li>
                        <li class="flex items-center">
                            <span class="mr-2">■</span>
                            <span>supermarkets</span>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="text-[#ED1C24] flex items-center gap-5">
                        <i class="fa-solid fa-earth-europe"></i>
                        <p>International</p>
                    </div>
                    <p>Strategic partnerships across key regions with full export documentation<br /> support.</p>
                    <div class="flex items-center gap-5">
                        <p class="px-4 py-1 border border-gray-400 bg-white">Australia</p>
                        <p class="px-4 py-1 border border-gray-400 bg-white">Asia</p>
                        <p class="px-4 py-1 border border-gray-400 bg-white">Europe</p>
                        <p class="px-4 py-1 border border-gray-400 bg-white">Global</p>
                    </div>

                </div>
            </div>
            <div>

            </div>
        </div>
    </div>

    {{-- faq --}}
    <div id="faqSection" class="relative bg-cover bg-top text-white transition-all duration-500"
        style="background-image: url('https://wp-themes.com/wp-content/themes/production-factory/assets/images/section-img.png');">

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-[#0B0B54]/75"></div>

        <div class="relative z-10 container mx-auto grid grid-cols-2 gap-10 pt-20 pb-20">
            <div>
                <p class="text-[17px] text-[#ED1C24] mb-3">
                    Frequently Asked Questions
                </p>
                <p class="text-[26px] font-bold capitalize mb-3">have any question for us?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est doloremque sapiente temporibus? Aliquam
                    possimus quod nihil voluptatibus aliquid officiis molestias incidunt inventore iusto, omnis molestiae
                    dolore adipisci doloremque nobis non.</p>
                <img src="https://wp-themes.com/wp-content/themes/production-factory/assets/images/FAQ.png" alt="faq"
                    class="mt-5 rounded-md">
            </div>

            <div>
                <!-- FAQ LIST -->
                <div class="space-y-3 ">

                    <!-- ITEM -->
                    <div class="border rounded-md p-4">
                        <button class="w-full text-left font-semibold flex justify-between items-center faq-btn">
                            What are your straws made from?
                            <span>+</span>
                        </button>
                        <div class="faq-content hidden mt-3 text-white">
                            Our straws are made from natural rice flour and tapioca starch, making them 100% biodegradable,
                            food-safe, and eco-friendly.
                        </div>
                    </div>

                    <div class="border rounded-md p-4">
                        <button class="w-full text-left font-semibold flex justify-between items-center faq-btn">
                            Are rice straws safe for hot and cold drinks?
                            <span>+</span>
                        </button>
                        <div class="faq-content hidden mt-3 text-white">
                            Yes, our straws work in both hot and cold beverages without becoming soggy.
                        </div>
                    </div>

                    <div class="border rounded-md p-4">
                        <button class="w-full text-left font-semibold flex justify-between items-center faq-btn">
                            Do you offer bulk orders for export?
                            <span>+</span>
                        </button>
                        <div class="faq-content hidden mt-3 text-white">
                            Yes, we provide bulk supply and export-ready packaging.
                        </div>
                    </div>

                    <div class="border rounded-md p-4">
                        <button class="w-full text-left font-semibold flex justify-between items-center faq-btn">
                            Can you customize branding or packaging?
                            <span>+</span>
                        </button>
                        <div class="faq-content hidden mt-3 text-white">
                            Yes, we offer OEM/ODM services for custom branding and packaging.
                        </div>
                    </div>

                    <div class="border rounded-md p-4">
                        <button class="w-full text-left font-semibold flex justify-between items-center faq-btn">
                            What sizes and colors are available?
                            <span>+</span>
                        </button>
                        <div class="faq-content hidden mt-3 text-white">
                            Available in 6mm, 8mm, 12mm with natural colors.
                        </div>
                    </div>

                    <div class="border rounded-md p-4">
                        <button class="w-full text-left font-semibold flex justify-between items-center faq-btn">
                            What is your minimum order quantity (MOQ)?
                            <span>+</span>
                        </button>
                        <div class="faq-content hidden mt-3 text-white">
                            MOQ depends on product type and customization.
                        </div>
                    </div>

                    <!-- EXTRA HIDDEN ITEMS -->
                    <div class="extra-faq hidden space-y-3">

                        <div class="border rounded-md p-4">
                            <button class="w-full text-left font-semibold flex justify-between items-center faq-btn">
                                Do you provide international shipping?
                                <span>+</span>
                            </button>
                            <div class="faq-content hidden mt-3 text-white">
                                Yes, we handle global export logistics.
                            </div>
                        </div>

                        <div class="border rounded-md p-4">
                            <button class="w-full text-left font-semibold flex justify-between items-center faq-btn">
                                Are your products certified?
                                <span>+</span>
                            </button>
                            <div class="faq-content hidden mt-3 text-white">
                                We follow ISO and HACCP standards.
                            </div>
                        </div>

                        <div class="border rounded-md p-4">
                            <button class="w-full text-left font-semibold flex justify-between items-center faq-btn">
                                How long do rice straws last?
                                <span>+</span>
                            </button>
                            <div class="faq-content hidden mt-3 text-white">
                                40–120 minutes depending on temperature.
                            </div>
                        </div>

                        <div class="border rounded-md p-4">
                            <button class="w-full text-left font-semibold flex justify-between items-center faq-btn">
                                How can I request a quotation?
                                <span>+</span>
                            </button>
                            <div class="faq-content hidden mt-3 text-white">
                                Contact us via website form or WhatsApp.
                            </div>
                        </div>

                    </div>

                </div>

                <!-- VIEW MORE -->
                <div class="text-center mt-6">
                    <button id="faqToggleBtn" onclick="toggleFAQ()" class="px-6 py-2 bg-[#ED1C24] text-white rounded-md">
                        View More
                    </button>
                </div>
            </div>
        </div>

    </div>

    <!-- CTA SECTION -->
    <div class="my-20 bg-[#0B0B54] text-white py-20 text-center relative overflow-hidden">

        <!-- OPENING QUOTE (TOP LEFT) -->
        <div class="text-[120px] leading-none font-bold absolute top-5 left-1/6 text-white">
            “
        </div>

        <!-- CLOSING QUOTE (BOTTOM RIGHT) -->
        <div class="text-[120px] leading-none font-bold  absolute bottom-20 right-1/6 text-white">
            ”
        </div>

        <!-- TEXT -->
        <h2 class="text-[26px] md:text-[32px] font-bold mb-8 relative z-10">
            Looking for a reliable eco-friendly supplier?
        </h2>

        <!-- BUTTON -->
        <a href="#contact"
            class="inline-block mt-10 bg-[#ED1C24] px-10 py-3 font-semibold rounded-md relative z-10 hover:bg-red-700 transition">
            👉 Contact Us Today
        </a>

    </div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {

        let index = 0;
        const carousel = document.getElementById("carousel");
        const totalSlides = carousel.children.length;
        const visible = 3;

        function updateCarousel() {
            const slideWidth = 100 / visible;
            carousel.style.transform = `translateX(-${index * slideWidth}%)`;
        }

        window.nextSlide = function() {
            // STOP at last possible position
            if (index < totalSlides - visible) {
                index++;
                updateCarousel();
            }
        }

        window.prevSlide = function() {
            // STOP at beginning
            if (index > 0) {
                index--;
                updateCarousel();
            }
        }

    });

    document.addEventListener("DOMContentLoaded", function() {

        // Accordion toggle
        document.querySelectorAll(".faq-btn").forEach(btn => {
            btn.addEventListener("click", function() {
                const content = this.nextElementSibling;

                content.classList.toggle("hidden");

                // toggle + / -
                this.querySelector("span").textContent =
                    content.classList.contains("hidden") ? "+" : "-";
            });
        });

        // View more toggle
        window.toggleFAQ = function() {
            const extra = document.querySelector(".extra-faq");
            const btn = document.getElementById("faqToggleBtn");
            const section = document.getElementById("faqSection");

            extra.classList.toggle("hidden");

            const isOpen = !extra.classList.contains("hidden");

            btn.textContent = isOpen ? "View Less" : "View More";

            // optional: smooth scroll adjustment (nice UX)
            setTimeout(() => {
                section.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }, 200);
        }

    });
</script>
