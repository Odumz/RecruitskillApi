<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'city';

    protected $fillable = [
        'state_id', 'country_id', 'city'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
