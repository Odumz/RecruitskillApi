<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillsTest extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'skills_test';

    protected $fillable = [
        'user_id', 'skills_id', 'skills_test_type_id', 'skills_test_questions',
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

    public function skilltesttype()
    {
        $this->belongsTo(SkillsTestType::class, 'skill_test_type_id');
    }
}
