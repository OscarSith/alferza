<?php
namespace App\Repositories;

use App\Pictures;
use Illuminate\Support\Facades\File;

class PicturesRepo extends Pictures
{
    private $picture;
    private $url_relative_gallery = 'images/proyectos/galeria/';

    public function __construct(Pictures $picture) {
        $this->picture = $picture;
    }

    public function listByProjectId(int $id, $fields)
    {
        return $this->picture->where('project_id', $id)->latest()->get($fields);
    }

    public function store($projectId, $file)
    {
        $pictureName = \Str::slug($file->getClientOriginalName());
        $file->move($this->url_relative_gallery, $pictureName);

        $picture = new Pictures([
            'project_id' => $projectId,
            'picture' => $pictureName
        ]);

        return $picture->save();
    }

    public function deleteFile($picture)
    {
        File::delete($this->url_relative_gallery . $picture->picture);
        $picture->delete();
    }
}
