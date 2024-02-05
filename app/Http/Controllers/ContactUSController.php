<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUSController extends Controller
{
    // Contact US
    public function contactUs()
    {
        return view('pages.contact_us');
    }
}
