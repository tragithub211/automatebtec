<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function courseDetail($course_title) {
        return view('pages.courses.course_detail');
    }
}
