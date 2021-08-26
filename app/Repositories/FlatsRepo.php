<?php
namespace App\Repositories;

use App\Flats;
use Illuminate\Support\Facades\File;

class FlatsRepo extends Flats
{
    private $flat;
    private $url_relative_gallery = 'images/proyectos/planos/';

    public function __construct(Flats $flat) {
        $this->flat = $flat;
    }

    public function listByProjectId(int $id, $fields)
    {
        return $this->flat->where('project_id', $id)->get($fields);
    }

    public function store($data, $file)
    {
        $pictureName = '_' . $file->getClientOriginalName();
        $file->move($this->url_relative_gallery, $pictureName);

        $data['picture'] = $pictureName;
        $flat = new Flats($data);

        return $flat->save();
    }

    public function edit($flat, $data, $file)
    {
        if ($file) {
            File::delete(public_path($this->url_relative_projects) . $flat->picture);
            $flatPictureName = '_' . $file->getClientOriginalName();
            $file->move($this->url_relative_gallery, $flatPictureName);
            $data['picture'] = $flatPictureName;
        }

        $flat->fill($data);
        $flat->save();

        return $flat;
    }

    public function deleteFile($flat)
    {
        File::delete($this->url_relative_gallery . $flat->picture);
        $flat->delete();
    }
}
