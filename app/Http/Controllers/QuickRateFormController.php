<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class QuickRateFormController extends Controller
{
    public function quickrates()
    {
        $countrys = Country::orderBy('country_name')->get();
        return view('admin.quickrate.quickrates')->with('countrys',$countrys);
    }
}
