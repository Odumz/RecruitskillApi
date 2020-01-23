<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitments extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'recruitments';

    protected $fillable = [
        'users_id', 'job_title', 'job_description', 'duration', 'countries', 'required_skills', 'required_experience', 'job_category', 'cities', 'states', 'responsibilities', 'postion', 'renumeration'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    
}
