<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;

class PageController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Home - Jay Vee Group');
        SEOTools::setDescription('Welcome to Jay Vee Group. We provide a complete package, from designing to execution services in the construction industry, with a focus on quality and customer satisfaction.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'website');
        SEOTools::twitter()->setSite('@raghavanjeeva');
        SEOTools::jsonLd()->setType('WebPage');

        return view('pages.index');
    }

    public function aboutUsCompanyHistory()
    {
        SEOTools::setTitle('Company History - Jay Vee Group');
        SEOTools::setDescription('Learn about the history of Jay Vee Group, established in 1995 by Mr. Udayakumar. Discover our journey to becoming a trusted name in the construction industry.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('pages.about-us.company-history');
    }

    public function aboutUsMissionAndVision()
    {
        SEOTools::setTitle('Mission and Vision - Jay Vee Group');
        SEOTools::setDescription('Our mission is to deliver projects on time, ensuring customer satisfaction and efficient service. Our vision is to provide an excellent experience with superior quality at an affordable cost.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('pages.about-us.mission-and-vision');
    }

    public function aboutUsLeadership()
    {
        SEOTools::setTitle('Leadership - Jay Vee Group');
        SEOTools::setDescription('Meet the dynamic leadership and visionary endeavor of Mr. Udayakumar, a veteran in the field of fabrication and erection of structures.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('pages.about-us.leadership');
    }

    public function aboutUsAbout()
    {
        SEOTools::setTitle('About Us - Jay Vee Group');
        SEOTools::setDescription('Jay Vee Group was established in 1995 under the dynamic leadership and visionary endeavor of Mr. Udayakumar. We aim to provide a complete package, from designing to execution services in the construction industry.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('pages.about-us.about');
    }


    public function jayVeeEngineering()
    {
        SEOTools::setTitle('Jay Vee Group - Our Companies');
        SEOTools::setDescription('Jay Vee Group is one of our core companies, specializing in the fabrication and erection of structures with over three decades of experience.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('pages.companies.jay-vee-engineering');
    }

    public function jayVeeStructuralEngineering()
    {
        SEOTools::setTitle('Jay Vee Structural Engineering - Our Companies');
        SEOTools::setDescription('Jay Vee Structural Engineering focuses on providing specialized structural engineering solutions for a wide range of projects.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('pages.companies.jay-vee-structural-engineering');
    }

    public function jakuvaBuildTech()
    {
        SEOTools::setTitle('Jakuva Build Tech - Our Companies');
        SEOTools::setDescription('Jakuva Build Tech is our arm for providing innovative and modern building technology solutions.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('pages.companies.jakuva-build-tech');
    }

    public function Certifications()
    {
        SEOTools::setTitle('Certifications - Jay Vee Group');
        SEOTools::setDescription('View our certifications, which are a testament to our commitment to quality and excellence in the construction industry.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('pages.certifications.certifications');
    }

    // workSafetyMeasurements

    public function workSafetyMeasurements()
    {
        SEOTools::setTitle('Work Safety Measurements - Jay Vee Group');
        SEOTools::setDescription('We are committed to maintaining the highest standards of safety on all our project sites. Learn more about our work safety measurements.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('pages.companies.safety-measurements.work-safety-measurements');
    }

    public function allProjects()
    {
        SEOTools::setTitle('All Projects - Jay Vee Group');
        SEOTools::setDescription('Browse through our extensive portfolio of over 500 warehouses, 150 industry projects, and work for over 1000 clients.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

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
        SEOTools::setTitle('Structural Projects - Jay Vee Group');
        SEOTools::setDescription('View our structural projects, showcasing our expertise in the fabrication and erection of structures.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        // Fetch projects for the "Structural" company with pagination
        $projects = Project::where('company', 'Jay Vee Structural Engineering Pvt Ltd')->paginate(6); // Adjust pagination as needed



        return view('pages.projects.structural-projects', compact('projects'));
    }

    public function manufacturing()
    {
        SEOTools::setTitle('Manufacturing Projects - Jay Vee Group');
        SEOTools::setDescription('Explore our manufacturing projects, where we have delivered exceptional quality and timely completion.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        // Fetch projects for the "Manufacturing" company with pagination
        $projects = Project::where('company', 'Jay Vee Engineering')->paginate(6); // Adjust pagination as needed



        return view('pages.projects.manufacturing', compact('projects'));
    }

    public function construction()
    {
        SEOTools::setTitle('Construction Projects - Jay Vee Group');
        SEOTools::setDescription('Discover our construction projects, where we meet the diverse needs of our clients across various sectors.');
        SEOTools::openg.raph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        // Fetch projects for the "Construction" company with pagination
        $projects = Project::where('company', 'Jakuva Build Tech')->paginate(6); // Adjust pagination as needed


        return view('pages.projects.construction', compact('projects'));
    }


    public function projectDetails($id)
    {
        $project = Project::findOrFail($id);

        SEOTools::setTitle($project->name . ' - Jay Vee Group');
        SEOTools::setDescription($project->description); // Assuming your project model has a 'description' attribute
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());
        SEOTools::opengraph()->addProperty('type', 'article');
        SEOTools::jsonLd()->setType('Article');

        return view('pages.projects.project-details', compact('project'));
    }

    public function ourWorkforce()
    {
        SEOTools::setTitle('Our Workforce - Jay Vee Group');
        SEOTools::setDescription('Our dedicated and skilled workforce is the backbone of our success. Learn more about the people who make Jay Vee Group a leader in the industry.');
        SEOTools::opengraph()->setUrl(url()->current());
        SEOTools::setCanonical(url()->current());

        return view('pages.peoples.our-workforce');
    }
}
