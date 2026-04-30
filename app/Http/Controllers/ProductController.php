<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //frontend
    public function show()
    {
        return view('Frontend.pages.ProductPage');
    }

    //backend
    public function index()
    {
        return view('Backend.products.index');
    }
}
