<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'courses';

    protected $fillable = [
        'users_id', 'courses'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
