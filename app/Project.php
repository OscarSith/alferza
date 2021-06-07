<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    //

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
