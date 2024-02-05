<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    // all programs
    public function program()
    {
        return view('pages.program.index');
    }

    // faculty of pedagogy research
    public function pedagoyResearch()
    {
        return view('pages.program.pedagogy_research');
    }

    // faculty of science education
    public function scienceEdu()
    {
        return view('pages.program.science_education');
    }

    // faculty of social science education
    public function socialScienceEdu()
    {
        return view('pages.program.social_science_edu');
    }
}
