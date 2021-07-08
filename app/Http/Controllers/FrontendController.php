<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Country;
use App\Price;
use App\OfferPage;

class FrontendController extends Controller
{
    public function index()
    {
        
        $sliders = Slider::where('status','active')->get();
        $countries = Country::where('status',1)->orderBy('country_name')->get();
        return view('frontend.index',compact('sliders','countries'));
    }
    public function show_value(Request $request)
    {
        $price = Price::where('from',$request->from)->where('to',$request->to)->where('service_type',$request->service_type)->where('weight_kg',$request->weight_kg)->first();
        
        if($price)
        {
            $amount = $price->price;
            return back()->with('price',$amount);
        }
        else
        {
            return back()->with('noprice','Not Price Yet');
        }   
    }
    public function offer()
    {
        $offer = OfferPage::where('status',1)->first();
        return view('frontend.offer',compact('offer'));
    }
}
