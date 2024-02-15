<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurCampusController extends Controller
{
    // Our Campus
    public function ourCampus()
    {
        return view('pages.campus.our_campus');
    }
    //clubs
    public function clubs(){

        return view('pages.campus.clubs');
    }
}
