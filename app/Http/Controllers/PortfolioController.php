<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Certification;
use App\Models\Organization;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
   public function index()
    {
        $projects = Project::latest()->get();
        $certifications = Certification::oldest()->get();
        $organizations = Organization::latest()->get();
        $skillsByCategory = Skill::all()->groupBy('category');

        return view('welcome', compact('projects', 'certifications', 'organizations', 'skillsByCategory'));
    }
}