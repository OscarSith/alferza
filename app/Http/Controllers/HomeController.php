<?php

namespace App\Http\Controllers;

use App\Page;
use App\Repositories\PageRepo;
use Illuminate\Http\Request;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $pageRepo = new PageRepo(new Page());
        $pages = $pageRepo->getAll(['id', 'page']);
        $pageSelected = $request->input('page', 'NOSOTROS');
        $page = $pageRepo->getByPage($pageSelected);

        return view('admin.home', ['pages' => $pages, 'page' => $page, 'pageSelected' => $pageSelected]);
    }
}
