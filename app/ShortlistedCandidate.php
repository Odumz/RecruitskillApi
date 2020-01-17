<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortlistedCandidate extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'shortlisted_candidate';

    protected $fillable = [
        'recruitment_id', 'user_id', 'skill_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
