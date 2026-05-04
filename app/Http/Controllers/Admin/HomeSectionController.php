<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = HomeSection::orderBy('order')->get();
        return view('backend.home_sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home_sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'section_name'     => 'required|string|max:255',
            'title'            => 'required|string|max:255',
            'title_kh'         => 'nullable|string|max:255',
            'content'          => 'nullable',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order'            => 'nullable|integer',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        // Handle image upload
        if ($request->hasFile('background_image')) {
            $data['background_image'] = $request->file('background_image')->store('images/sections', 'public');
        }

        HomeSection::create($data);

        return redirect()->route('admin.home-sections.index')
                         ->with('success', 'Section បានបន្ថែមដោយជោគជ័យ!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeSection $homeSection)
    {
        return view('backend.home_sections.edit', compact('homeSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeSection $homeSection)
    {
        $request->validate([
            'section_name' => 'required|string|max:255',
            'title'        => 'required|string|max:255',
            'title_kh'     => 'nullable|string|max:255',
            'content'      => 'nullable',
            'background_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order'        => 'nullable|integer',
        ]);

        $data = $request->all();
        $data['is_active'] = $request->has('is_active');

        // Handle image upload (update)
        if ($request->hasFile('background_image')) {
            $data['background_image'] = $request->file('background_image')->store('images/sections', 'public');
        }

        $homeSection->update($data);

        return redirect()->route('admin.home-sections.index')
                         ->with('success', 'Section ត្រូវបានធ្វើបច្ចុប្បន្នភាព!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeSection $homeSection)
    {
        $homeSection->delete();

        return redirect()->route('admin.home-sections.index')
                         ->with('success', 'Section ត្រូវបានលុប!');
    }
}