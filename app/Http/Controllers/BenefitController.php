<?php

namespace App\Http\Controllers;

use App\Benefit;
use App\Http\Requests\BenefitRequest;
use App\Project;
use App\Repositories\BenefitsRepo;
use App\Repositories\ProjectRepo;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    private $benefitsRepo;

    public function __construct(BenefitsRepo $repo)
    {
        $this->benefitsRepo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $projectID)
    {
        $benefits = $this->benefitsRepo->listByProjectId($projectID, [
            'id',
            'name',
            'icon',
            'icon2',
            'icon_rotate',
            'picture',
        ]);
        $projects = (new ProjectRepo(new Project()))->listAll(['id', 'name']);

        return view('admin.benefits', [
            'benefits' => $benefits,
            'projects' => $projects,
            'current_project_id' => $projectID
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
    public function store(BenefitRequest $request)
    {
        $this->benefitsRepo->store($request->all(), $request->file('picture'));

        return redirect()->back()->with('info', 'Beneficio agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function show(Benefit $benefit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefit $benefit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Benefit $benefit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Benefit  $benefit
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $projectID, Benefit $benefit)
    {
        $beneficioName = $benefit->name;

        $this->benefitsRepo->deleteFile($benefit);

        return redirect()->back()->with('info', 'Beneficio ' . $beneficioName . ' eliminado');
    }
}
