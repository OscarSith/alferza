<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'bio',
        'email',
        'cellphone',
        'picture',
    ];
}
