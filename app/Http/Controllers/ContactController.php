<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate form data including reCAPTCHA token
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'recaptcha_token' => 'required|string',
        ]);

        // Verify reCAPTCHA with Google
        $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->recaptcha_token,
            'remoteip' => $request->ip()
        ]);

        $recaptchaData = $recaptchaResponse->json();

        // Check if reCAPTCHA validation passed
        // For reCAPTCHA v3, check the score (0.0 to 1.0, where 1.0 is very likely a human)
        if (!$recaptchaData['success'] || (isset($recaptchaData['score']) && $recaptchaData['score'] < 0.5)) {
            return back()->withErrors(['recaptcha' => 'reCAPTCHA verification failed. Please try again.'])->withInput();
        }

        // Send email if reCAPTCHA passes
        try {
            Mail::to('info@thikaroadconnectagc.org')->send(new ContactMail($validated));
            
            return back()->with('success', 'Thank you for reaching out! We\'ll respond soon.');
        } catch (\Exception $e) {
            \Log::error('Contact form email failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to send message. Please try again later.'])->withInput();
        }
    }
}