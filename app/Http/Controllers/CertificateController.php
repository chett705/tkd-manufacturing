<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::latest()->get();
        return view('Backend.certificates.index', compact('certificates'));
    }

    public function create()
    {
        return view('Backend.certificates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240', // 10MB
        ]);

        $data = ['name' => $request->name];

        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('certificates', 'public');
        }

        Certificate::create($data);

        return redirect()->route('admin.certificates.index')
                         ->with('success', 'Certificate added successfully!');
    }

    public function edit(Certificate $certificate)
    {
        return view('Backend.certificates.edit', compact('certificate'));
    }

    public function update(Request $request, Certificate $certificate)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240',
        ]);

        $data = ['name' => $request->name];

        if ($request->hasFile('file')) {
            // Delete old file
            if ($certificate->file) {
                Storage::disk('public')->delete($certificate->file);
            }
            $data['file'] = $request->file('file')->store('certificates', 'public');
        }

        $certificate->update($data);

        return redirect()->route('admin.certificates.index')
                         ->with('success', 'Certificate updated successfully!');
    }

    public function destroy(Certificate $certificate)
    {
        if ($certificate->file) {
            Storage::disk('public')->delete($certificate->file);
        }

        $certificate->delete();

        return redirect()->route('admin.certificates.index')
                         ->with('success', 'Certificate deleted successfully!');
    }
}
