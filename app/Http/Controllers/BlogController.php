<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(15);
        return view('Backend.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('Backend.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'feature' => 'required|string|max:255',
            'rice_straws' => 'nullable|string',
            'paper_straws' => 'nullable|string',
        ]);

        Blog::create([
            'Feature' => $validated['feature'],
            'Rice Straws' => $validated['rice_straws'] ?? null,
            'Paper Straws' => $validated['paper_straws'] ?? null,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog comparison created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('Backend.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'feature' => 'required|string|max:255',
            'rice_straws' => 'nullable|string',
            'paper_straws' => 'nullable|string',
        ]);

        $blog->update([
            'Feature' => $validated['feature'],
            'Rice Straws' => $validated['rice_straws'] ?? null,
            'Paper Straws' => $validated['paper_straws'] ?? null,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog comparison updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog comparison deleted successfully.');
    }
}
