<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    private $projects = [];

    public function __construct()
    {
        $this->projects = Project::all(['id', 'name', 'url_slug', 'mini_picture', 'mini_logo_picture', 'build_status']);
    }

    public function index() {
        return view('welcome', [
            'projects' => $this->projects
        ]);
    }

    public function detailProject(Project $project) {
        return view('detail-project', [
            'project' => $project,
            'projects' => $this->projects
        ]);
    }
}
