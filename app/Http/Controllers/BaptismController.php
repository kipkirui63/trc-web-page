<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BaptismApplicationMail;

class BaptismController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string',
            'last_name'  => 'required|string',
            'email'      => 'required|email',
            'phone'      => 'required|string',
            'age'        => 'required|integer|min:12',
            'gender'     => 'required|string',
            'terms'      => 'accepted',
        ]);

        Mail::to('discipleship@thikaroadconnectagc.org')
            ->send(new BaptismApplicationMail($validated));

        return back()->with('success', 'Your baptism application has been submitted successfully.');
    }
}

