<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'notifications';

    protected $fillable = [
        'recipient_id', 'notifications_title', 'notifications_content'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
