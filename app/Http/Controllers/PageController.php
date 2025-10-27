<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function aboutUsAbout()
    {
        return view('pages.about-us.about');
    }


    public function jayVeeEngineering()
    {
        return view('pages.companies.jay-vee-engineering');
    }

    public function jayVeeStructuralEngineering()
    {
        return view('pages.companies.jay-vee-structural-engineering');
    }

    public function jakuvaBuildTech()
    {
        return view('pages.companies.jakuva-build-tech');
    }

    public function Certifications()
    {
        return view('pages.certifications.certifications');
    }

    // workSafetyMeasurements

    public function workSafetyMeasurements()
    {
        return view('pages.companies.safety-measurements.work-safety-measurements');
    }

    public function allProjects()
    {
        // Fetch all projects with pagination (6 per page)
        $projects = Project::paginate(6);  // 6 projects per page

        // Group by company and count the number of projects per company
        $projectCounts = Project::all()->groupBy('company')->map(function ($group) {
            return $group->count();
        });

        return view('pages.projects.all-projects', compact('projects', 'projectCounts'));
    }


    public function structuralProjects()
    {
        // Fetch projects for the "Structural" company with pagination
        $projects = Project::where('company', 'Jay Vee Structural Engineering Pvt Ltd')->paginate(6); // Adjust pagination as needed



        return view('pages.projects.structural-projects', compact('projects'));
    }

    public function manufacturing()
    {
        // Fetch projects for the "Manufacturing" company with pagination
        $projects = Project::where('company', 'Jay Vee Engineering')->paginate(6); // Adjust pagination as needed



        return view('pages.projects.manufacturing', compact('projects'));
    }

    public function construction()
    {
        // Fetch projects for the "Construction" company with pagination
        $projects = Project::where('company', 'Jakuva Build Tech')->paginate(6); // Adjust pagination as needed


        return view('pages.projects.construction', compact('projects'));
    }


    public function projectDetails($id)
    {
        $project = Project::findOrFail($id);
        return view('pages.projects.project-details', compact('project'));
    }

    public function ourWorkforce()
    {
        return view('pages.peoples.our-workforce');
    }
}