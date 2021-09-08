<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'page',
        'title',
        'title_2',
        'main_text',
        'alter_text',
        'banner',
        'picture',
        'vision',
        'mision',
        'other_text',
        'small_text',
        'profile_picture_1',
        'profile_picture_2',
        'profile_name_1',
        'profile_lastname_1',
        'profile_name_2',
        'profile_lastname_2',
        'profile_text_1',
        'profile_text_2',
        'profile_extra_1',
        'profile_extra_2',
        'profile_extra_3',
    ];
}
