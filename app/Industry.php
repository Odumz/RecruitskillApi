<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'industry';

    protected $fillable = [
        'industry'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
