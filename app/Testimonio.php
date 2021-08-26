<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    protected $fillable = [
        'name',
        'avatar',
        'aparment_name',
        'stars',
        'gender',
        'testimony'
    ];
}
