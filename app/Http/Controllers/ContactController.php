<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Store a new contact submission.
     */
    public function store(ContactRequest $request)
    {
        $submission = ContactSubmission::create([
            ...$request->validated(),
            'ip_address' => $request->ip(),
        ]);

        // Send email notification
        try {
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($submission));
        } catch (\Exception $e) {
            // Log the error but don't fail the submission
            \Log::error('Failed to send contact form email: ' . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
