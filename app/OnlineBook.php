<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineBook extends Model
{
    protected $guarded = [];

    public function connect_user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
