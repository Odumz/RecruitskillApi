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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function skills()
    {
        return $this->belongsTo(Skills::class, 'skill_id');
    }

    public function recruitment()
    {
        return $this->belongsTo(Recruitments::class, 'recruitment_id');
    }
}
