<?php
namespace App\Repositories;

use App\Testimonio;

class TestimonyRepo extends Testimonio
{
    private $testimonio;

    public function __construct(Testimonio $testimonio) {
        $this->testimonio = $testimonio;
    }

    function listAll($fields = ['*'], int $paginate = 10) {
        return $this->testimonio->latest()->paginate($paginate, $fields);
    }
}
