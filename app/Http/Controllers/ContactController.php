<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'phone'   => 'nullable|string|max:20',
        ]);

        Mail::to('info@thikaroadconnectagc.org')->send(new ContactMail($validated));

        return back()->with('success', 'Thank you for reaching out! We’ll respond soon.');
    }
}
