<?php

namespace App\Http\Controllers;

use App\Consultant;
use App\Http\Requests\ConsultantRequest;
use App\Repositories\ConsultantRepo;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    private $consultantRepo;

    public function __construct(ConsultantRepo $repo) {
        $this->consultantRepo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.consultants', [
            'consultants' => $this->consultantRepo->listAll()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.consultant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConsultantRequest $request)
    {
        if ($request->hasFile('picture')) {
            if ($this->consultantRepo->store($request->all(), $request->file('picture'))) {
                return redirect()->route('consultantIndex');
            }

            return redirect()->back()->with('error', 'Ocurrió un error al crear el asesor, intentelo de nuevo');
        }
        else
        {
            return redirect()->back()->withInput($request->all())->with('error', 'La imagen del asesor es requerido');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function show(Consultant $consultant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultant $consultant)
    {
        return view('admin.consultant_edit', ['consultant' => $consultant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function update(ConsultantRequest $request, Consultant $consultant)
    {
        if ($this->consultantRepo->edit($consultant, $request->all(), $request->file('picture'))) {
            return redirect()->back()->with('info', 'Asesor actualizado');
        }

        return redirect()->back()->withInput($request->all())->with('error', 'Hubo un error al actualizar los datos del asesor, intentelo de nuevo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultant  $consultant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultant $consultant)
    {
        //
    }
}
