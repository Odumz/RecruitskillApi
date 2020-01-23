<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'skills';

    protected $fillable = [
        'skills', 'job_title_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function jobTitle()
    {
        return $this->belongsToMany(JobTitle::class, 'job_title_id');
    }
}
