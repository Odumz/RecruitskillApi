<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'job_title';

    protected $fillable = [
        'job_title'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    // public function industry()
    // {
    //     return $this->belongsTo(Industry::class);
    // }

    public function skills()
    {
        return $this->hasMany(Skills::class);
    }
}
