<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationsRecipient extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'notifications_recipient';

    protected $fillable = [
        'recipient_id', 'notifications_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
