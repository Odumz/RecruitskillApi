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
        'recruitments_id', 'users_id', 'skills_id'
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

    public function skills()
    {
        return $this->belongsTo(Skills::class, 'skills_id');
    }

    public function recruitment()
    {
        return $this->belongsTo(Recruitments::class, 'recruitments_id');
    }
}
