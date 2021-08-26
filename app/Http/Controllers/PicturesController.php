<?php

namespace App\Http\Controllers;

use App\Pictures;
use App\Project;
use App\Repositories\PicturesRepo;
use App\Repositories\ProjectRepo;
use Illuminate\Http\Request;

class PicturesController extends Controller
{
    private $picturesRepo;

    public function __construct(PicturesRepo $repo)
    {
        $this->picturesRepo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pictures = $this->picturesRepo->listByProjectId($id, ['id', 'picture']);
        $projects = (new ProjectRepo(new Project()))->listAll(['id', 'name']);

        return view('admin.pictures', [
            'pictures' => $pictures,
            'projects' => $projects,
            'current_project_id' => $id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->picturesRepo->store($request->input('project_id'), $request->file('picture'));
        return redirect()->back()->with('info', 'Imagen agregada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function show(Pictures $pictures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function edit(Pictures $pictures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pictures $pictures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pictures  $pictures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pictures $pictures)
    {
        $this->picturesRepo->deleteFile($pictures);
        return redirect()->back()->with('info', 'Imagen eliminada');
    }
}
