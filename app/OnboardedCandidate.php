<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnboardedCandidate extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'onboarded_candidate';

    protected $fillable = [
        'recruitment_id', 'user_id', 'skills'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
