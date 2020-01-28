<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'applications';

    protected $fillable = [
        'users_id', 'recruitments_id', 'invites_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function invites()
    {
        return $this->belongsTo(Invites::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function recruitment()
    {
        return $this->belongsTo(Recruitments::class, 'recruitments_id');
    }

    public function userprofile()
    {
        return $this->hasOne(UsersProfile::class, 'usersprofile_id');
    }
}
