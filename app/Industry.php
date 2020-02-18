<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'industry';

    protected $fillable = [
        'industry'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function jobTitle()
    {
        return $this->hasMany(JobTitle::class);
    }

    public function position()
    {
        return $this->hasMany(Positions::class);
    }
}
