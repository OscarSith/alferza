<?php
namespace App\Repositories;

use App\Project;
use Illuminate\Support\Facades\File;

class ProjectRepo extends Project
{
    private $project;
    private $url_relative_projects = 'images/proyectos/';

    public function __construct(Project $project) {
        $this->project = $project;
    }

    function listAll(array $fields = ['*']) {
        return $this->project->latest()->get($fields);
    }

    public function store(array $data, $banner, $logo, $miniPicture, $brochure)
    {
        if ($banner != null) {
            $bannerName = '_' . $banner->getClientOriginalName();
            $banner->move($this->url_relative_projects, $bannerName);
            $data['main_picture'] = $bannerName;
        }

        if ($logo != null) {
            $logoName = '_' . $logo->getClientOriginalName();
            $logo->move($this->url_relative_projects, $logoName);
            $data['logo_picture'] = $logoName;
        }

        if ($miniPicture != null) {
            $mimipictureName = '_' . $miniPicture->getClientOriginalName();
            $miniPicture->move($this->url_relative_projects, $mimipictureName);
            $data['mini_picture'] = $mimipictureName;
        }

        if ($brochure != null) {
            $brochureName = '_' . $brochure->getClientOriginalName();
            $brochure->move('brochures/', $brochureName);
            $data['brochure'] = $brochureName;
        }

        $project = new Project();
        $data['url_slug'] = \Str::slug($data['name']);
        $data['vendidas'] = 0;
        $project->fill($data);
        return $project->save();
    }

    public function edit($project, array $data, $banner, $logo, $miniPicture, $brochure)
    {
        if ($banner != null) {
            File::delete(public_path($this->url_relative_projects) . $project->main_picture);
            $bannerName = $project->id . '_' . $banner->getClientOriginalName();
            $banner->move($this->url_relative_projects, $bannerName);
            $data['main_picture'] = $bannerName;
        }

        if ($logo != null) {
            File::delete(public_path($this->url_relative_projects) . $project->logo_picture);
            $logoName = $project->id . '_' . $logo->getClientOriginalName();
            $logo->move($this->url_relative_projects, $logoName);
            $data['logo_picture'] = $logoName;
        }

        if ($miniPicture != null) {
            File::delete(public_path($this->url_relative_projects) . $project->mini_picture);
            $mimipictureName = $project->id . '_' . $miniPicture->getClientOriginalName();
            $miniPicture->move($this->url_relative_projects, $mimipictureName);
            $data['mini_picture'] = $mimipictureName;
        }

        if ($brochure != null) {
            File::delete(public_path('brochures/') . $project->brochure);
            $brochureName = $project->id . '_' . $brochure->getClientOriginalName();
            $brochure->move('brochures/', $brochureName);
            $data['brochure'] = $brochureName;
        }

        $data['url_slug'] = \Str::slug($data['name']);
        $project->fill($data);
        return $project->save();
    }

    public function updateData(int $id, array $data)
    {
        $project = $this->project->find($id);
        $project->fill($data);

        $project->save();

        return $project;
    }
}
