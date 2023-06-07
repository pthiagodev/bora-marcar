<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $events = Event::query()
            ->with(['location', 'organizer'])
            ->orderBy('date', 'desc')
            ->get();

        return view('dashboard')->with('events', $events);
    }
}
