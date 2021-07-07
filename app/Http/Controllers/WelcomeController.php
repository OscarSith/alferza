<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\FormContactPost;
use App\Http\Requests\FormInviertePost;
use App\Http\Requests\FormLibroReclamacionesPost;
use App\Http\Requests\WorkWithUsPost;
use App\Mail\SendContact;
use App\Mail\SendCV;
use App\Mail\SendInvierte;
use App\Mail\SendLibroReclamacion;
use App\Pictures;
use App\Project;
use App\SimuladorHipotecario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

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
            'projects' => $projects,
            'status' => $status
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

    public function sendCV(WorkWithUsPost $req)
    {
        Mail::to('contacto@alferza.pe')->send(new SendCV($req->all()));
        return redirect()->back()->with('send', true);
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

    public function sendInvierte(FormInviertePost $req)
    {
        Mail::to('contacto@alferza.pe')->send(new SendInvierte($req->all()));
        return redirect()->back()->with('send', true);
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

    public function politicas()
    {
        return view('politicas_privacidad');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function sendContact(FormContactPost $req)
    {
        Mail::to('contacto@alferza.pe')->send(new SendContact($req->all()));
        return redirect()->back()->with('send', true);
    }

    public function exportarExcel(Request $req)
    {
        return Excel::download(new SimuladorHipotecario(
            $req->input('valor'),
            $req->input('cuota_inicial'),
            $req->input('tcea'),
            $req->input('plazo')),
        'simulador.xlsx');
    }

    public function libroReclamaciones()
    {
        $projects = Project::all('id', 'name', 'address');
        return view('libro-reclamaciones', ['projects' => $projects]);
    }

    public function sendLibroReclamaciones(FormLibroReclamacionesPost $req)
    {
        $emails = ['contacto@alferza.pe'];
        if ($req->input('notificacion') != '0') {
            array_push($emails, $req->input('correo'));
        }

        Mail::to($emails)->send(new SendLibroReclamacion($req->all()));

        return redirect()->back()->with('send', true);
    }

    public function landing()
    {
        $images = Pictures::all(['id', 'picture'])->random(12);
        $projects = Project::all('id', 'name');
        return view('landing', [
            'images' => $images,
            'projects' => $projects
        ]);
    }
}
