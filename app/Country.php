<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'country';

    protected $fillable = [
        'country',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    
    public function states()
    {
        return $this->hasMany(State::class);
    }

}
