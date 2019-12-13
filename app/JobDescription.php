<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobDescription extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'job_description';

    protected $fillable = [
        'job_title_id', 'job_description'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
