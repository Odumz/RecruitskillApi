<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'countries';

    protected $fillable = [
        'countries',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
