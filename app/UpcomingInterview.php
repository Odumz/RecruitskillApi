<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpcomingInterview extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'upcoming_interview';

    protected $fillable = [
        'recruitment_id', 'time', 'date', 'location'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
