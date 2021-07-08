<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bdecommerce;
use App\CountryCreate;
use App\AssignCountry;

class EcommerceSolutionController extends Controller
{
    public function index()
    {
        $bd_company = Bdecommerce::where('status',1)->get();
        $countries = CountryCreate::where('status',1)->get();
        return view('frontend.e_commerce',compact('bd_company','countries'));
    }
    public function international_ecommerce($id)
    {
        $country_name = CountryCreate::find($id);
        $company = AssignCountry::where('country_id',$id)->get();
        return view('frontend.international_company',compact('company','country_name'));
    }
}
