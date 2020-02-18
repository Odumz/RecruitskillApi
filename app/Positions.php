<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'positions';

    protected $fillable = [
        'industry_id', 'positions'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
}
