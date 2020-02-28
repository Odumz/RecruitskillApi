<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitments extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'recruitments';

    protected $fillable = [
        'users_id', 'job_title', 'job_description', 'duration', 'country', 'required_skills', 'required_experience', 'city', 'state', 'gender', 'responsibilities', 'position', 'renumeration', 'data_type', 'alias', 'status', 'isPublished', 'job_type',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    // public function ongoingrecruitment()
    // {
    //     return $this->hasOne(OngoingRecruitment::class, 'recruitment_id');
    // }

    // public function concludedrecruitment()
    // {
    //     return $this->hasOne(ConcludedRecruitment::class, 'recruitment_id');
    // }

    // public function publishedrecruitment()
    // {
    //     return $this->hasOne(PublishedRecruitment::class, 'recruitment_id');
    // }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
