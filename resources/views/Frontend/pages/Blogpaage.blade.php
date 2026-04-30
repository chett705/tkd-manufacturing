@extends('Frontend.layouts.Main')

@section('content')
<section class="bg-gray-50 py-12">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <!-- Title -->
    <h2 class="text-3xl font-bold text-gray-800 mb-6">
      Rice Straws vs Paper Straws: Which Is Better for Your Business?
    </h2>

    <!-- Intro -->
    <p class="text-gray-600 mb-10">
      The Sustainable Shift: Moving away from single-use plastics, rice-based alternatives offer superior durability and customer experience compared to paper straws.
    </p>

    <!-- Comparison Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Rice Straws -->
      <div class="bg-white shadow rounded-lg p-6 space-y-4">
        <h3 class="text-xl font-semibold text-green-700">Rice Straws</h3>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
          <li>Material: Rice flour & tapioca starch</li>
          <li>Durability: 2–4 hours in liquid</li>
          <li>Taste Impact: Neutral</li>
          <li>Hot Drinks: Excellent resistance</li>
          <li>Cold Drinks: Superior longevity</li>
          <li>Eco-Friendly: 100% edible & compostable</li>
          <li>Brand Image: Innovative premium</li>
        </ul>
      </div>

      <!-- Paper Straws -->
      <div class="bg-white shadow rounded-lg p-6 space-y-4">
        <h3 class="text-xl font-semibold text-blue-700">Paper Straws</h3>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
          <li>Material: Kraft paper & adhesive binders</li>
          <li>Durability: 20–40 minutes in liquid</li>
          <li>Taste Impact: Possible paper-like flavor</li>
          <li>Hot Drinks: Rapid breakdown</li>
          <li>Cold Drinks: Standard performance</li>
          <li>Eco-Friendly: Recyclable if clean</li>
          <li>Brand Image: Standard eco-conscious</li>
        </ul>
      </div>

      <!-- Sidebar CTA -->
      <div class="bg-white shadow rounded-lg p-6 flex flex-col justify-between">
        <div>
          <h3 class="text-xl font-semibold text-gray-800 mb-4">Looking for Bulk Supply?</h3>
          <p class="text-gray-600 mb-6">
            TK&D Manufacturing offers sustainable solutions with ISO 9001:2015 certification, 100% biodegradable products, and a 24-month shelf life.
          </p>
        </div>
        <div class="space-y-3">
          <a href="#" class="block text-center bg-green-600 text-white font-semibold py-2 px-4 rounded hover:bg-green-700">
            Request a Quotation
          </a>
          <a href="#" class="block text-center bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700">
            Contact Us Today
          </a>
        </div>
      </div>
    </div>

    <!-- Conclusion -->
    <div class="mt-12">
      <h3 class="text-xl font-semibold text-gray-800">Conclusion: The Engineering Verdict</h3>
      <p class="text-gray-600 mt-2">
        Rice straws represent a significant leap in material science, offering better longevity and customer retention for high-volume businesses.
      </p>
    </div>
  </div>
</section>

@endsection
