<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OngoingRecruitment extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'ongoing_recruitment';

    protected $fillable = [
        'recruitment_id', 'alias'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
