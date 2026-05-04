@extends('Frontend.layouts.Main')

@section('content')

<div class="h-[93vh] bg-cover bg-center text-white relative"
    style="background-image: url('https://wp-themes.com/wp-content/themes/production-factory/assets/images/banner-image.png');">

    <div class="absolute bottom-0 right-0 w-8/10 overflow-hidden">
        <div class="absolute inset-0 bg-[#ED1C24] [clip-path:polygon(10%_0,100%_0,100%_100%,0_100%)]"></div>

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

    <div class="container mx-auto px-3 flex items-center h-full">
        <div class="w-1/2 flex flex-col gap-5">
            <h2 class="text-[44px]">Sustainable Rice-Flour Straws from Cambodia to the World</h2>
            <p class="text-[22px]">Eco-friendly, biodegradable, and durable alternatives to plastic straws.</p>
            <div class="flex items-center gap-5">
                <a href="#contact-form"
                    class="w-full text-[16px] font-semibold py-3 border border-[#ED1C24] flex items-center justify-center bg-white text-[#ED1C24]">
                    Get a Quote
                </a>
                <a href="{{ route('products') }}"
                    class="w-full text-[16px] font-semibold py-3 border border-[#ED1C24] flex items-center justify-center bg-white text-[#ED1C24]">
                    View Products
                </a>
            </div>
        </div>
    </div>
</div>

<section id="contact" class="bg-gradient-to-b from-gray-50 to-gray-100 py-20 px-5">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold text-[#0B0B54]">Get in Touch</h2>
            <p class="text-gray-600 mt-3">Request a quotation or ask about our products</p>
            <div class="mt-4 w-24 h-1 bg-[#ED1C24] mx-auto rounded"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-10">
            <div class="space-y-6">
                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2">
                        <span class="text-[#ED1C24]">Contact Information</span>
                    </h3>
                    <ul class="space-y-2 text-gray-700">
                        <li><strong>Email:</strong> <a href="mailto:tkd.manufacturing89@gmail.com" class="text-[#ED1C24] hover:underline">tkd.manufacturing89@gmail.com</a></li>
                        <li><strong>Phone:</strong> <a href="tel:+85512590666" class="text-[#ED1C24] hover:underline">+855 12 590 666</a></li>
                        <li><strong>Location:</strong> Pursat Province, Cambodia</li>
                    </ul>
                </div>

                <div class="bg-white p-4 rounded-xl shadow">
                    <h4 class="font-semibold mb-3 text-gray-800">Manufacturing Location</h4>
                    <iframe
                        src="https://maps.google.com/maps?q=Pursat%20Cambodia&t=k&z=13&output=embed"
                        class="w-full h-60 rounded-lg border-0">
                    </iframe>
                </div>

                <div class="bg-white p-4 rounded-xl shadow">
                    <h4 class="font-semibold mb-3 text-gray-800">Office Location</h4>
                    <iframe
                        src="https://maps.google.com/maps?q=Pursat%20Cambodia&t=k&z=13&output=embed"
                        class="w-full h-60 rounded-lg border-0">
                    </iframe>
                </div>
            </div>

            <div id="contact-form" class="bg-white p-8 rounded-xl shadow">
                <h3 class="text-lg font-semibold mb-6 text-gray-800">Request Quotation</h3>

                @if (session('success'))
                    <div class="mb-4 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Full Name" required
                        class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-[#ED1C24] outline-none">

                    <input type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Company Name"
                        class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-[#ED1C24] outline-none">

                    <select name="country" required class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-[#ED1C24]">
                        <option value="">Select Country</option>
                        <option value="Cambodia" {{ old('country') === 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
                        <option value="Thailand" {{ old('country') === 'Thailand' ? 'selected' : '' }}>Thailand</option>
                        <option value="Vietnam" {{ old('country') === 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                        <option value="China" {{ old('country') === 'China' ? 'selected' : '' }}>China</option>
                        <option value="USA" {{ old('country') === 'USA' ? 'selected' : '' }}>USA</option>
                    </select>

                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required
                        class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-[#ED1C24] outline-none">

                    <input type="text" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="WhatsApp"
                        class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-[#ED1C24] outline-none">

                    <select name="product_id" required class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-[#ED1C24]">
                        <option value="">Select Product</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}" {{ (string) old('product_id') === (string) $product->id ? 'selected' : '' }}>
                                {{ $product->name }}
                            </option>
                        @endforeach
                    </select>

                    <input type="number" name="quantity" value="{{ old('quantity') }}" placeholder="Quantity" min="1"
                        class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-[#ED1C24] outline-none">

                    <textarea name="message" rows="4" placeholder="Message"
                        class="w-full border px-4 py-2 rounded-lg focus:ring-2 focus:ring-[#ED1C24] outline-none">{{ old('message') }}</textarea>

                    <button type="submit"
                        class="w-full bg-[#ED1C24] text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition transform hover:scale-105">
                        Submit Quotation Request
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
