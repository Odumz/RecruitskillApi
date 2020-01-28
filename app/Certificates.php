<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'certificates';

    protected $fillable = [
        'courses_id', 'certificates'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function courses()
    {
        return $this->belongsTo(Courses::class, 'courses_id');
    }

    public function userprofile()
    {
        return $this->hasOne(UsersProfile::class, 'usersprofile_id');
    }
}
