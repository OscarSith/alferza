<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $fillable = [
        'name',
        'icon',
        'icon2',
        'icon_rotate',
        'project_id',
    ];
}
