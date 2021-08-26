<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'sub_title', 'url_slug', "info", "info_quill", "picture", "author", "show_main_picture"
    ];
}
