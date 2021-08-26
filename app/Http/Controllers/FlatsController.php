<?php

namespace App\Http\Controllers;

use App\Flats;
use App\Project;
use App\Repositories\FlatsRepo;
use App\Repositories\ProjectRepo;
use Illuminate\Http\Request;

class FlatsController extends Controller
{
    private $flatsRepo;

    public function __construct(FlatsRepo $repo)
    {
        $this->flatsRepo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $id)
    {
        $flats = $this->flatsRepo->listByProjectId($id, [
            'id',
            'name',
            'picture',
            'price',
            'size_meters',
            'room',
            'bath',
            'typology',
        ]);
        $projects = (new ProjectRepo(new Project()))->listAll(['id', 'name']);

        return view('admin.flats', [
            'projects' => $projects,
            'flats' => $flats,
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
        $this->flatsRepo->store($request->all(), $request->file('picture'));

        return redirect()->back()->with('info', 'Nuevo plano agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flats  $flats
     * @return \Illuminate\Http\Response
     */
    public function show(Flats $flats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flats  $flats
     * @return \Illuminate\Http\Response
     */
    public function edit(int $projectID, Flats $flats)
    {
        return view('admin.flat_edit', [
            'flat' => $flats,
            'project_id' => $projectID,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flats  $flats
     * @return \Illuminate\Http\Response
     */
    public function update(int $project_id, Flats $flats, Request $request)
    {
        $this->flatsRepo->edit($flats, $request->all(), $request->file('picture'));

        return redirect()->route('flatsIndex', $project_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flats  $flats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flats $flats)
    {
        $this->flatsRepo->deleteFile($flats);
        return redirect()->back()->with('Plano eliminado');
    }
}
