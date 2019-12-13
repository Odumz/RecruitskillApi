<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invites extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'invites';

    protected $fillable = [
        'users_id', 'recruitments_id', 'invites_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
