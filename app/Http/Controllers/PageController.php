<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function aboutUsCompanyHistory()
    {
        return view('pages.about-us.company-history');
    }

    public function aboutUsMissionAndVision()
    {
        return view('pages.about-us.mission-and-vision');
    }

    public function aboutUsLeadership()
    {
        return view('pages.about-us.leadership');
    }


    public function jayVeeEngineering()
    {
        return view('pages.companies.jay-vee-engineering');
    }

    public function jayVeeStructuralEngineering()
    {
        return view('pages.companies.jay-vee-structural-engineering');
    }
}
