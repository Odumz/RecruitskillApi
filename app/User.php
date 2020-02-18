<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;
use Laravel\Passport\HasApiTokens;

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use HasApiTokens, Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'role',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'api_token'
    ];

    public function userprofile()
    {
        return $this->hasOne(UsersProfile::class, 'users_id');
    }

    public function invite()
    {
        return $this->hasMany(Invites::class);
    }

    public function recruitments()
    {
        return $this->hasMany(Recruitments::class);
    }

    public function notification()
    {
        return $this->hasMany(Notifications::class, 'creators_id');
    }

    public function onboardedCandidate()
    {
        return $this->hasOne(OnboardedCandidate::class);
    }

    public function shortlistedCandidate()
    {
        return $this->hasOne(ShortlistedCandidate::class);
    }

    public function notificationRecipient()
    {
        return $this->hasOne(NotificationsRecipient::class, 'recipient_id');
    }

    public function skilltest()
    {
        return $this->hasOne(SkillsTest::class);
    }

    public function skilltestscore()
    {
        return $this->hasOne(SkillTestScore::class);
    }
}
