<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUSController extends Controller
{
    // About US
    public function aboutUS()
    {
        return view('pages.about_us.about');
    }

    // Message from Director
    public function messageDirector()
    {
        return view('pages.about_us.message_director');
    }

    // Vision, Mission and Core Values
    public function missionVision()
    {
        return view('pages.about_us.vision_mission');
    }

    // Organizational Chart
    public function organizationalChart()
    {
        return view('pages.about_us.organizational_chart');
    }
      // Logo meaning
    public function logoMeaning()
    {
        return view('pages.about_us.logo_meaning');
    }
}
