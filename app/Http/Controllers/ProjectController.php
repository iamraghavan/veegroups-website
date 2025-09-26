<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProjectController extends Controller
{
    // Ensure user is authenticated
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // Show all projects

    public function getDashbaord()
    {
        $projects = Project::all();

        return view('dashboard.dashboard', compact('projects'));
    }
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.projects.index', compact('projects'));
    }

    // Show form to create a new project
    public function create()
    {
        return view('dashboard.projects.create');
    }

    // Store the project in the database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:60',
            'description' => 'required|max:160',
            'company' => 'required|in:Jay Vee Engineering,Jay Vee Structural Engineering Pvt Ltd,Jakuva Build Tech',
            'location' => 'required',
            'images.*' => 'image|mimes:webp,jpg,jpeg,png,gif,svg', // For image upload validation
        ]);

        $projectData = $request->only('title', 'description', 'company', 'location');

        // Handle multiple image upload
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('projects', 'public'); // Store in public directory
            }
            $projectData['images'] = $images;
        }

        Project::create($projectData);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    // Show form to edit a project
    public function edit(Project $project)
    {
        return view('dashboard.projects.edit', compact('project'));
    }

    // Update the project
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|max:60',
            'description' => 'required|max:160',
            'company' => 'required|in:Jay Vee Engineering,Jay Vee Structural Engineering Pvt Ltd,Jakuva Build Tech',
            'location' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048', // For image upload validation
        ]);

        $projectData = $request->only('title', 'description', 'company', 'location');

        // Handle multiple image upload
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('projects', 'public'); // Store in public directory
            }
            $projectData['images'] = $images;
        }

        $project->update($projectData);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function allProjects()
    {
        // Fetch all projects
        $projects = Project::all();

        // Group by company and count
        $projectCounts = $projects->groupBy('company')->map(function ($group) {
            return $group->count();
        });

        return view('pages.projects.all-projects', compact('projects', 'projectCounts'));
    }

    public function structuralProjects()
    {
        $projects = Project::where('company', 'Structural')->get();
        $projectCounts = $projects->groupBy('company')->map(function ($group) {
            return $group->count();
        });

        return view('pages.projects.structural-projects', compact('projects', 'projectCounts'));
    }

    public function manufacturing()
    {
        $projects = Project::where('company', 'Manufacturing')->get();
        $projectCounts = $projects->groupBy('company')->map(function ($group) {
            return $group->count();
        });

        return view('pages.projects.manufacturing', compact('projects', 'projectCounts'));
    }

    public function construction()
    {
        $projects = Project::where('company', 'Construction')->get();
        $projectCounts = $projects->groupBy('company')->map(function ($group) {
            return $group->count();
        });

        return view('pages.projects.construction', compact('projects', 'projectCounts'));
    }

    public function projectDetails($id)
    {
        $project = Project::findOrFail($id);
        return view('pages.projects.project-details', compact('project'));
    }
}