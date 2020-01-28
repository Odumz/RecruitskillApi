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

    public function application()
    {
        return $this->hasMany(Applications::class);
    }

    public function userprofile()
    {
        return $this->hasOne(UsersProfile::class, 'usersprofile_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
