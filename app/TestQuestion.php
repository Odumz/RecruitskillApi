<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestQuestions extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'test_questions';

    protected $fillable = [
        'questions', 'skills_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
