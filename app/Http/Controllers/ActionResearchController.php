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
    //book name
    public function bookResearchV3()
    {

        return view('pages.action-research-books.book_action_research' );
    }
    public function bookResearchV2()
    {

        return view('pages.action-research-books.book_action_research-v2');
    }
    public function bookResearchV1()
    {

        return view('pages.action-research-books.book_action_research-v1');
    }
    
}
