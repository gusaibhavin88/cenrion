<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the Contact page.
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Handle the contact form submission.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'email'],
            'company'  => ['required', 'string', 'max:255'],
            'phone'    => ['nullable', 'string', 'max:30'],
            'category' => ['required', 'array'],
            'scope'    => ['required', 'string', 'max:2000'],
        ]);

        // TODO: dispatch a ContactFormSubmitted event / queue a notification
        // For now we log the enquiry and redirect with a success flash.
        \Illuminate\Support\Facades\Log::info('Contact enquiry received', [
            'name'    => $validated['name'],
            'email'   => $validated['email'],
            'company' => $validated['company'],
        ]);

        return redirect()
            ->back()
            ->with('success', 'Thank you! We will be in touch within 1 business day.');
    }
}
