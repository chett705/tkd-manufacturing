@extends('Frontend.layouts.Main')

@section('content')
    <!-- HERO (keep but remove big blog title inside content area) -->
    <div class="relative h-[70vh] w-full flex items-center justify-center bg-cover bg-center"
        style="background-image: url('https://wp-themes.com/wp-content/themes/production-factory/assets/images/banner-image.png');">

        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Optional: small subtitle only (no big title like before) -->
        <div class="relative z-10 text-center px-6">
            <p class="text-white text-lg md:text-2xl font-semibold">
                Sustainable Alternatives for Modern Businesses
            </p>
        </div>
    </div>

    <!-- COMPARISON SECTION -->
    <section class=" py-14">
        <div class="container mx-auto px-6 lg:px-8">

            <!-- Table Card -->
            <div class=" ">

                <!-- Header -->
                <div class=" px-6 py-4 text-center my-10">
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800">
                        Rice Straws vs Paper Straws Comparison
                    </h2>
                    <p class="text-gray-600 text-sm mt-1">
                        A clear breakdown to help your business choose the right eco solution
                    </p>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-sm md:text-base">
                        <thead class=" text-gray-700">
                            <tr class="border-b">
                                <th class="text-left px-6 py-4"></th>
                                <th class="text-left px-6 py-4 text-green-700">Rice Straws</th>
                                <th class="text-left px-6 py-4 text-blue-700">Paper Straws</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y">

                            <tr>
                                <td class="px-6 py-4 font-medium">Material</td>
                                <td class="px-6 py-4">Rice flour & tapioca starch</td>
                                <td class="px-6 py-4">Paper pulp</td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 font-medium">Durability</td>
                                <td class="px-6 py-4">40–120 minutes stable use</td>
                                <td class="px-6 py-4">10–30 minutes before soggy</td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 font-medium">Taste Impact</td>
                                <td class="px-6 py-4">No effect on flavor</td>
                                <td class="px-6 py-4">May affect taste</td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 font-medium">Hot Drinks</td>
                                <td class="px-6 py-4">Strong performance</td>
                                <td class="px-6 py-4">Breaks down quickly</td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 font-medium">Cold Drinks</td>
                                <td class="px-6 py-4">Long-lasting</td>
                                <td class="px-6 py-4">Weakens over time</td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 font-medium">Eco-Friendly</td>
                                <td class="px-6 py-4">100% biodegradable & compostable</td>
                                <td class="px-6 py-4">Biodegradable but processed</td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4 font-medium">Customer Experience</td>
                                <td class="px-6 py-4">Smooth & premium feel</td>
                                <td class="px-6 py-4">Soft after soaking</td>
                            </tr>

                            <tr class="border-b">
                                <td class="px-6 py-4 font-medium">Brand Image</td>
                                <td class="px-6 py-4">Innovative premium solution</td>
                                <td class="px-6 py-4">Standard eco option</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- CONCLUSION SECTION -->
            <section class="py-10">
                <div class="container mx-auto px-6 lg:px-8">

                    <div class="bg-white border border-gray-200 rounded-lg p-6 md:p-10 shadow-sm">

                        <h3 class="text-lg md:text-xl font-bold text-gray-800 text-center">
                            🎯 Conclusion
                        </h3>

                        <p class="text-gray-600 text-sm md:text-base mt-4 leading-relaxed text-center max-w-4xl mx-auto">
                            While both options aim to reduce plastic waste, rice straws offer superior durability, a better
                            user
                            experience, and stronger eco value. This makes them a more reliable long-term choice for
                            businesses in
                            the F&B industry that care about both sustainability and customer satisfaction.
                        </p>

                    </div>

                </div>
            </section>



        </div>
    </section>

    <!-- CTA Section -->
    <section class="mt-10 text-center bg-[#0B0B54]">
        <div class=" container mx-auto py-10">
            <h3 class="text-lg md:text-xl font-semibold text-white ">
                Need Bulk Supply for Your Business?
            </h3>
            <p class="text-white mt-2">
                Get sustainable rice straw solutions tailored for restaurants, cafés, and distributors.
            </p>

            <div class="mt-5 flex flex-col sm:flex-row justify-center gap-3">
                <a href="#" class="px-6 py-3 bg-green-600 text-white rounded-md hover:bg-green-700">
                    Request Quotation
                </a>
                <a href="#" class="px-6 py-3 bg-gray-800 text-white rounded-md hover:bg-black">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection
