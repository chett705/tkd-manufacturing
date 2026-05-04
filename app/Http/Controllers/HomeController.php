<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()   // ← វិធីសាស្ត្រនេះត្រូវបានហៅនៅពេលចូលទំព័រ Home
    {
        $homeSections = HomeSection::where('is_active', true)
                        ->orderBy('order')
                        ->get();

        return view('Frontend.pages.HomePage', compact('homeSections'));   // ប្តូរឈ្មោះ view បើចាំបាច់
    }
}
