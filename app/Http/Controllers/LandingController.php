<?php

namespace App\Http\Controllers;

use App\Models\Event;

class LandingController extends Controller
{
    public function index()
    {
        // Ambil 6 event terbaru untuk landing
        $events = Event::orderByDesc('event_date')->limit(6)->get();
        return view('landing', compact('events'));
    }
}
