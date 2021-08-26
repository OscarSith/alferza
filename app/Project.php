<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
        'name',
        'url_slug',
        'main_picture',
        'logo_picture',
        'mini_picture',
        'description',
        'address',
        'build_status',
        'start_price',
        'quantity',
        'build_type',
        'typologies',
        'rooms',
        'baths',
        'brochure',
        'apartments_detail',
        'location',
        'google_map',
        'sperant_project_id',
        'vendidas',
        'status',
    ];

    /**
     * Get all of the flats for the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function flats(): HasMany
    {
        return $this->hasMany(Flats::class);
    }

    /**
     * Get all of the pictures for the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pictures(): HasMany
    {
        return $this->hasMany(Pictures::class);
    }

    /**
     * Get all of the benefits for the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function benefits(): HasMany
    {
        return $this->hasMany(Benefit::class);
    }
}
