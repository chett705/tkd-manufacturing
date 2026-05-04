<?php

namespace App\Http\Controllers;

use App\Mail\QuotationMail;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactPage()
    {
        $products = Product::orderBy('name')->get(['id', 'name']);

        return view('Frontend.pages.ContactUsPage', compact('products'));
    }

    public function index()
    {
        $contacts = Contact::with('product')->latest()->paginate(15);

        return view('Backend.contacts.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'country' => 'required|string',
            'email' => 'required|email',
            'whatsapp' => 'nullable|string',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'nullable|integer|min:1',
            'message' => 'nullable|string',
        ]);

        $quotation = Contact::create($validated);

        Mail::to('client@gmail.com')
            ->send(new QuotationMail($quotation));

        return redirect()->back()
            ->with('success', 'Quotation request submitted successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact deleted successfully.');
    }
}
