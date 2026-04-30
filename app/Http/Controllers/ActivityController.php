<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //frontend
    public function show()
    {
        return view('Frontend.pages.AtivitiesPage');
    }
    //backend
    public function index()
    {
        return view('Backend.activities.index');
    }

}
