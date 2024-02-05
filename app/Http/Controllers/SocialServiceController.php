<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialServiceController extends Controller
{
    // social service
    public function socialService()
    {
        return view('pages.social_service');
    }
}
