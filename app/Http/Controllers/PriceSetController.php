<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Price;

class PriceSetController extends Controller
{
    public function show_price_value(Request $request)
    {
        // $price = Price::where('from',$request->form)->where('to',$request->to)->where('service_type',$request->service_type)->where('weight_kg',$request->weight)->first();
        $price = Price::where('from',$request->from)->where('to',$request->to)->where('service_type',$request->service_type)->where('object_type',$request->object_type)->where('weight_kg',$request->weight)->first();
        
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
    public function createprice()
    {
        $countrys = Country::all();
        return view('admin.price.createprice')->with('countrys',$countrys);
    }

    public function viewprice()
    {
        $countrys = Country::all();
        $price = Price::orderBy('id','desc')->get();
        return view('admin.price.viewprice')->with('price',$price)->with('countrys',$countrys);;
    }

    public function pricestore(Request $request){

        $this->validate($request,[
            'from' => 'required',
            'to' => 'required',
            'service_type' => 'required',
            'object_type' => 'required',
            'weight_kg' => 'required',
            'price' => 'required',
        ]);

        $price = new Price();
        $price->from = $request->input('from');
        $price->to = $request->input('to');
        $price->service_type = $request->input('service_type');
        $price->object_type = $request->input('object_type');
        $price->weight_kg = $request->input('weight_kg');
        $price->price = $request->input('price');
        $price->save();
        return back()->with('status','Price Created Successfully...');

    }


    public function priceupdate(Request $request)
    {

        $price = Price::findOrFail($request->price_id);
        $price->from = $request->input('from');
        $price->to = $request->input('to');
        $price->service_type = $request->input('service_type');
        $price->object_type = $request->input('object_type');
        $price->weight_kg = $request->input('weight_kg');
        $price->price = $request->input('price');
        $price->update();

        return back()->with('status','Price Updated Successfully...');
    }

    public function pricedelete(Request $request)
    {

        $price = Price::findOrFail($request->price_id);
        $price->delete();
        return back()->with('status','Price Deleted Successfully...');


    }
    

}
