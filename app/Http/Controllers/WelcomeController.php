<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\FormContactPost;
use App\Http\Requests\FormInviertePost;
use App\Http\Requests\FormLandingPage;
use App\Http\Requests\FormLibroReclamacionesPost;
use App\Http\Requests\WorkWithUsPost;
use App\Mail\SendCV;
use App\Mail\SendLibroReclamacion;
use App\Pictures;
use App\Project;
use App\SimuladorHipotecario;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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
            'vendidas',
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

        if ($status == 'vendidas') {
            $project = Project::where('vendidas', 1);
        } else {
            $project = Project::where('vendidas', 0);
        }
        $projects = $project->get([
            'id',
            'name',
            'url_slug',
            'mini_picture',
            'mini_logo_picture',
            'build_status',
            'vendidas',
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
        Mail::to('recursoshumanos@alferza.pe')->send(new SendCV($req->all()));
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
        $data = [
            "fname" => $req->input('nombre'),
            "email" => $req->input('correo'),
            "phone" => $req->input('celular'),
            "utm_source" => 'Invierte',
            "observation" => $req->input('mensaje'),
        ];
        $redirect = redirect()->back()->withFragment('form-invierte');

        $response = $this->createEsperantClientAPI($data);

        if ($response->status() === 200) {
            return $redirect->with('send', true);
        }

        return $redirect->withInput();
        // Mail::to('contacto@alferza.pe')->send(new SendInvierte($req->all()));
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(10, ['id', 'title', 'picture', 'url_slug']);

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
        $projects = Project::where('vendidas', '0')->get(['id', 'name']);
        return view('contacto', ['projects' => $projects]);
    }

    public function sendContact(FormContactPost $req)
    {
        $proyecto = Project::find($req->input('proyecto'));
        $data = [
            "fname" => $req->input('nombre_completo'),
            "email" => $req->input('correo'),
            "phone" => $req->input('celular'),
            "utm_source" => 'Contacto',
            "observation" => $req->input('mensaje'),
            "project_id" => $proyecto->sperant_project_id
        ];
        $redirect = redirect()->back()->withFragment('contact');

        $response = $this->createEsperantClientAPI($data);

        if ($response->status() === 200) {
            return $redirect->with('send', true);
        }

        return $redirect->withInput();

        // Mail::to('contacto@alferza.pe')->send(new SendContact($req->all()));
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
        $emails = ['legal@alferza.pe'];

        Mail::to($emails)->send(new SendLibroReclamacion($req->all()));

        return redirect()->back()->with('send', true);
    }

    public function landing()
    {
        $images = Pictures::all(['id', 'picture'])->random(12);
        $projects = Project::where('vendidas', '0')->get(['id', 'name']);
        return view('landing', [
            'images' => $images,
            'projects' => $projects
        ]);
    }

    public function sendLandingForm(FormLandingPage $req)
    {
        $proyecto = Project::find($req->input('proyecto'));
        $redirect = redirect()->back();

        if ($proyecto != null) {
            $data = [
                "fname" => $req->input('nombre_completo'),
                "email" => $req->input('correo'),
                "phone" => $req->input('celular'),
                "utm_source" => 'Landing Page',
                "observation" => $req->input('mensaje'),
                "project_id" => $proyecto->sperant_project_id
            ];

            $response = $this->createEsperantClientAPI($data);
            if ($response->status() === 200) {
                return $redirect->with('send', true);
            }
        }

        return $redirect->withInput();
    }

    private function createEsperantClientAPI($data)
    {
        $response = Http::withHeaders([
            'Authorization' => env('ESPERANT_TOKEN')
        ])->post(env('ESPERANT_URL_API') . '/v3/clients', array_merge($data, [
            "input_channel_id" => env('ESPERANT_INPUT_CHANNEL'),
            "source_id" => env('ESPERANT_SOURCE_ID'),
            "interest_type_id" => env('ESPERANT_INTEREST_TYPE'),
        ]));

        if ($response->status() === 200) {
            $sperantData = $response->json();
            $userData = [
                'name' => $sperantData['data']['attributes']['fname'],
                'email' => $sperantData['data']['attributes']['email'],
                'sperant_data' => json_encode($response->json()),
                'sperant_project_id' => isset($data['project_id']) ? $data['project_id'] : null
            ];
            User::create($userData);
        } else {
            Log::error($response->json());
        }

        return $response;
    }
}
