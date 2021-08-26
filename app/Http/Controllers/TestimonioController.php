<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonioRequest;
use App\Repositories\TestimonyRepo;
use App\Testimonio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonioController extends Controller
{
    private $testimonioRepo;

    public function __construct(TestimonyRepo $testimonyRepo)
    {
        $this->testimonioRepo = $testimonyRepo;
    }

    public function index()
    {
        return view('admin.testimonios', [
            'testimonies' => $this->testimonioRepo->listAll(['*'], 20)
        ]);
    }

    public function view()
    {
        return view('admin.testimonio_form_create');
    }

    public function store(TestimonioRequest $req)
    {
        $pictureName = $req->file('avatar')->getClientOriginalName();
        $req->file('avatar')->move('images/testimonios', $pictureName);
        $data['avatar'] = $pictureName;

        $testimony = new Testimonio();
        $testimony->fill(array_merge($req->all(), $data));
        $testimony->save();

        return redirect()->route('testimonioIndex');
    }

    public function edit(int $id)
    {
        $testimony = Testimonio::find($id);
        return view('admin.testimonio_form', ['testimony' => $testimony]);
    }

    public function update(TestimonioRequest $req, int $id)
    {
        $testimony = Testimonio::find($id);
        $data = [];

        if ($req->hasFile('avatar')) {
            File::delete(public_path('images/blog/') . $testimony->avatar);
            $pictureName = $req->file('avatar')->getClientOriginalName();
            $req->file('avatar')->move('images/testimonios', $pictureName);
            $data['avatar'] = $pictureName;
        }

        $data = array_merge($req->all(), $data);
        $testimony->fill($data);
        $testimony->save();

        return redirect()->route('testimonioIndex');
    }
}
