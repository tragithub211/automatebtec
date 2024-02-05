<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurCampusController extends Controller
{
    // Our Campus
    public function ourCampus()
    {
        return view('pages.our_campus');
    }
}
