<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillTestScore extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'skill_test_score';

    protected $fillable = [
        'users_id', 'skills_id', 'skill_level', 'test_score', 'skill_test_id', 'courses_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function user()
    {
        $this->belongsTo(User::class, 'users_id');
    }

    public function skills()
    {
        $this->belongsTo(Skills::class, 'skills_id');
    }

    public function skilltest()
    {
        $this->belongsTo(Skillstest::class, 'skill_test_id');
    }

    public function course()
    {
        $this->belongsTo(User::class, 'courses_id');
    }
}
