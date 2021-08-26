<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Project;
use App\Repositories\ProjectRepo;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $projectRepo;

    public function __construct(ProjectRepo $repo)
    {
        $this->projectRepo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projects', [
            'proyects' => $this->projectRepo->listAll([
                'id',
                'name',
                'address',
                'quantity',
                'build_type',
                'location',
                'logo_picture',
                'created_at',
                'build_status',
                'vendidas',
                'status',
            ])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $this->projectRepo->store(
            $request->all(),
            $request->file('main_picture'),
            $request->file('logo_picture'),
            $request->file('mini_picture'),
            $request->file('brochure')
        );

        return redirect()->route('projectsIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project-edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        if ($this->projectRepo->edit(
                $project,
                $request->all(),
                $request->file('main_picture'),
                $request->file('logo_picture'),
                $request->file('mini_picture'),
                $request->file('brochure')
            )) {
            return redirect()->back()->with('info', 'Proyecto actualizado');
        }

        return redirect()->back()->withInput($request->all())->with('error', 'Ocurrió un error inesperado, intentelo de nuevo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    public function setToVendidos(int $id)
    {
        $project = $this->projectRepo->updateData($id, ['vendidas' => 1]);
        if ($project) {
            return redirect()->back()->with('info', 'Proyecto "' . $project->name . '" establecido en VENDIDOS');
        }

        return redirect()->back()->with('error', 'Ocurrió un error, intentelo de nuevo');
    }

    public function changeStatus(Request $req)
    {
        $project = $this->projectRepo->updateData($req->input('id'), ['status' => $req->input('status')]);
        if ($project) {
            $message = $req->input('status') == '1' ? 'ACTIVADO' : 'DESACTIVADO';
            return redirect()->back()->with('info', 'Proyecto "' . $project->name . '" ' . $message);
        }

        return redirect()->back()->with('error', 'Ocurrió un error, intentelo de nuevo');
    }
}
