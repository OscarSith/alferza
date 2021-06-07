<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // private $projects = [];

    public function __construct()
    {
    }

    public function index() {
        $projects = Project::all([
            'id',
            'name',
            'url_slug',
            'mini_picture',
            'mini_logo_picture',
            'build_status',
            'build_area',
            'build_price',
            'location',
            'quantity',
            'build_type'
        ]);

        return view('welcome', [
            'projects' => $projects
        ]);
    }

    public function aboutUs()
    {
        return view('about_us');
    }

    public function projects()
    {
        $projects = Project::all([
            'id',
            'name',
            'url_slug',
            'mini_picture',
            'mini_logo_picture',
            'build_status',
            'build_area',
            'build_price',
            'location',
            'quantity',
            'build_type'
        ]);

        return view('projects', [
            'projects' => $projects
        ]);
    }

    public function detailProject(Project $project) {
        return view('detail-project', [
            'project' => $project,
            'projects' => $this->projects
        ]);
    }

    public function workUs()
    {
        return view('work_with_us');
    }

    public function consultants()
    {
        return view('consultants');
    }
}
