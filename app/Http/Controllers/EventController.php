<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // event
    public function event()
    {
        return view('pages.events.index');
    }

    // event detail
    public function eventDetail($event_title)
    {
        return view('pages.events.event_detail', compact('event_title'));
    }
}
