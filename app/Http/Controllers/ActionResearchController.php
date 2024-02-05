<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionResearchController extends Controller
{
    // action research
    public function actionResearch()
    {
        return view('pages.action_research');
    }
}
