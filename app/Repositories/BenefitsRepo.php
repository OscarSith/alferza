<?php
namespace App\Repositories;

use App\Benefit;
use Illuminate\Support\Facades\File;

class BenefitsRepo extends Benefit
{
    private $benefit;
    private $url_relative_gallery = 'images/proyectos/planos/';

    public function __construct(Benefit $benefit) {
        $this->benefit = $benefit;
    }

    public function listByProjectId(int $id, $fields)
    {
        return $this->benefit->where('project_id', $id)->get($fields);
    }

    public function store($data)
    {
        $benefit = new Benefit($data);

        return $benefit->save();
    }

    public function deleteFile($benefit)
    {
        return $benefit->delete();
    }
}
