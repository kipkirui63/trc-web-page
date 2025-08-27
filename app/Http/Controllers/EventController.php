<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        // Next Sunday
        $nextSunday = $today->copy()->next(Carbon::SUNDAY);

        // Next Wednesday
        $nextWednesday = $today->copy()->next(Carbon::WEDNESDAY);

        // Example: custom events (later we can make these DB-driven)
        $customEvents = [
            [
                'title' => 'Community Outreach',
                'date' => Carbon::parse('first saturday of next month 9am'),
                'time' => '9:00 AM',
                'color' => 'blue',
                'description' => 'Serving the community through volunteer activities.',
            ]
        ];

        return view('events', compact('nextSunday', 'nextWednesday', 'customEvents'));
    }
}
