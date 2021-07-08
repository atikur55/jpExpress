<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignCountry extends Model
{
    protected $guarded = [];

    public function connect_country()
    {
        return $this->belongsTo('App\CountryCreate','country_id');
    }
}
