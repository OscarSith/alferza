<?php
namespace App\Repositories;

use App\Consultant;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class ConsultantRepo extends Consultant
{
    private $consultant;

    public function __construct(Consultant $consultant) {
        $this->consultant = $consultant;
    }

    function listAll(array $fields = ['*']) {
        return $this->consultant->latest()->get($fields);
    }

    public function store(array $data, UploadedFile $file)
    {
        $pictureName = $file->getClientOriginalName();
        $file->move('images/asesores/', $pictureName);

        $data['picture'] = $pictureName;

        $this->consultant->fill($data);
        return $this->consultant->save();
    }

    public function edit($consultant, array $data, $file)
    {
        if ($file != null) {
            File::delete(public_path('images/asesores/') . $consultant->picture);
            $pictureName = $file->getClientOriginalName();
            $file->move('images/asesores/', $pictureName);
            $data['picture'] = $pictureName;
        }
        $consultant->fill($data);
        return $consultant->save();
    }
}
