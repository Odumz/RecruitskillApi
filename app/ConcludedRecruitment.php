<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConcludedRecruitment extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'concluded_recruitment';

    protected $fillable = [
        'recruitments_id', 'alias'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function recruitment()
    {
        return $this->belongsTo(Recruitments::class, 'recruitments_id');
    }
}
