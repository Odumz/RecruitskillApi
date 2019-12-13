<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'state';

    protected $fillable = [
        'country_id', 'state'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
