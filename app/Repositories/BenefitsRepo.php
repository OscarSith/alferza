<?php
namespace App\Repositories;

use App\Benefit;

class BenefitsRepo extends Benefit
{
    private $benefit;

    public function __construct(Benefit $benefit) {
        $this->benefit = $benefit;
    }

    public function listByProjectId(int $id, $fields)
    {
        return $this->benefit->where('project_id', $id)->get($fields);
    }

    public function store($data, $picture)
    {
        if ($picture) {
            $pictureName = $picture->getClientOriginalName();
            $picture->move('images/proyectos/', $pictureName);

            $data['picture'] = $pictureName;
        }

        $benefit = new Benefit($data);

        return $benefit->save();
    }

    public function deleteFile($benefit)
    {
        return $benefit->delete();
    }
}
