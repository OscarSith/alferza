<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flats extends Model
{
    protected $fillable = [
        'project_id',
        'name',
        'picture',
        'price',
        'size_meters',
        'room',
        'bath',
        'typology',
    ];
}
