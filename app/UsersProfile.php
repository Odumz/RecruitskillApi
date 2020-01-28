<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersProfile extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users_profile';

    protected $fillable = [
        'users_id', 'certificate_id',  'recruitment_id', 'invites_id' ,'skills_id' ,'applications_id', 'skill_test_score_id' ,'users_category', 'phone', 'gender', 'career_title', 'availability_status', 'country', 'state', 'city', 'address', 'bio',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function skilltestscore()
    {
        return $this->belongsTo(SkillTestScore::class, 'skill_test_score_id');
    }

    public function recruitment()
    {
        return $this->belongsTo(Recruitments::class, 'recruitments_id');
    }

    public function skill()
    {
        return $this->belongsTo(Skills::class, 'skills_id');
    }

    public function invites()
    {
        return $this->belongsTo(Invites::class, 'invites_id');
    }

    public function applications()
    {
        return $this->belongsTo(Applications::class, 'applications_id');
    }

    public function certificates()
    {
        return $this->belongsTo(Certificates::class, 'certificates_id');
    }
}
