<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'courses';

    protected $fillable = [
        'skills_id', 'courses', 'job_title_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function certificates()
    {
        return $this->hasMany(Certificates::class, 'certificates_id');
    }

    public function skills()
    {
        return $this->belongsTo(Skills::class, 'skills_id');
    }

    public function jobtitle()
    {
        return $this->belongsTo(Jobtitle::class, 'jobtitle_id');
    }
}
