<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ChildDedicationMail;

class ChildDedicationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'child_name'       => 'required|string|max:255',
            'child_birthdate'  => 'required|date',
            'child_gender'     => 'nullable|string',
            'father_name'      => 'required|string|max:255',
            'mother_name'      => 'required|string|max:255',
            'parent_phone'     => 'required|string|max:30',
            'parent_email'     => 'required|email|max:255',
            'commitment1'      => 'accepted',
            'commitment2'      => 'accepted',
        ]);

        // Send email to children ministry
        Mail::to('children@thikaroadconnectagc.org')
            ->send(new ChildDedicationMail($validated));

        return back()->with('success', 'Child dedication registration submitted successfully.');
    }
}
