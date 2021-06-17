<?php

namespace App\Http\Controllers;

use App\Blog;
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

    public function projects($status = '')
    {
        $project = null;

        if ($status == 'entregado') {
            $project = Project::where('build_status', \Str::upper($status));
        } else {
            $project = Project::where('build_status', '<>', 'ENTREGADO');
        }
        $projects = $project->get([
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
            'project' => $project
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

    public function calculator(Request $req)
    {
        $deuda = 0;
        $anos = 0;
        $tcea = 0;
        $m = 0;

        $valor = 0;
        $cuotaInicial = 0;
        $interes = 0;

        if ($req->has('valor')) {
            $cuotaInicial = $req->input('cuota_inicial');
            $valor = $req->input('valor');

            $deuda = $valor - $cuotaInicial;
            $anos = $req->input('plazo');
            $tcea = $req->input('tcea');

            // Calculos
            $interes = ($tcea / 100) / 12;
            $m = ($deuda * $interes * pow(1 + $interes, $anos * 12)) / (pow(1 + $interes, $anos * 12) - 1);
        }

        return view('calculator', compact('valor', 'cuotaInicial', 'deuda', 'anos', 'interes', 'tcea', 'm'));
    }

    public function invierte()
    {
        return view('invierte');
    }

    public function blog()
    {
        $blogs = Blog::all(['id', 'title', 'picture', 'url_slug']);

        return view('blog', ['blogs' => $blogs]);
    }

    public function blogDetail(Blog $blog)
    {
        return view('blog_detail', ['blog' => $blog]);
    }
}
