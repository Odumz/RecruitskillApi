<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillsTestType extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'skills_test_type';

    protected $fillable = [
        'skills_test_type'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
