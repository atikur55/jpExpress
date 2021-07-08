<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OnlineBookingConfirm;
use App\Mail\ConfirmOrder;
use App\Mail\CancelOrder;
use App\Country;
use App\OnlineBook;
use App\Price;
use App\User;
use Carbon\Carbon;
use Auth;
use Mail;
use Redirect;

class OnlineBookingController extends Controller
{
    public function online_booking()
    {
        $all_country = Country::where('status',1)->orderBy('country_name')->get();
        return view('user.online_booking.create',compact('all_country'));
    }
    public function online_booking_post(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'location' => 'required',
            'service_type' => 'required',
            'object_type' => 'required',
            'width' => 'required',
            'height' => 'required',
            'length' => 'required',
            'weight_kg' => 'required',
            'ship_details' => 'required',
            // 'price' => 'required',
            'shipper_name' => 'required',
            'ship_com_name' => 'required',
            'ship_mobile' => 'required',
            'ship_email' => 'required|email',
            'ship_zip' => 'required',
            'ship_city' => 'required',
            'ship_state' => 'required',
            'ship_address' => 'required',
            'ship_country' => 'required',
            'receive_name' => 'required',
            'receive_com_name' => 'required',
            'receive_mobile' => 'required',
            'receive_email' => 'required|email',
            'receive_zip' => 'required',
            'receive_city' => 'required',
            'receive_state' => 'required',
            'receive_address' => 'required',
            'receive_country' => 'required',
        ]);
        $track_number = 'JP#'.rand(100,9999).rand(1000,99999);
        $price = Price::where('from',$request->from)->where('to',$request->to)->where('service_type',$request->service_type)->where('object_type',$request->object_type)->where('weight_kg',$request->weight_kg)->first();
        $value = $price->price;
        OnlineBook::insert($request->except('_token','price','track_id','user_id') + [
            'user_id' => Auth::id(),
            'price' => $value,
            'track_id' => $track_number,
            'created_at' => Carbon::now(),
        ]);
        Mail::to($request->ship_email)->send(new OnlineBookingConfirm);
        // return back()->with('success','Your Booking Create Successfully');
        // return Redirect::to('/example2')->with('msg','Your data all ready Save.');
        return view('exampleHosted',compact('track_number'));
        
    }
    public function searchResponse(Request $request)
    {
        $query = $request->get('term','');
        $countries=\DB::table('prices');
        if($request->type=='from'){
            $countries->where('from','LIKE','%'.$query.'%');
        }
        if($request->type=='to'){
            $countries->where('to','LIKE','%'.$query.'%');
        }
        if($request->type=='service_type'){
            $countries->where('service_type','LIKE','%'.$query.'%');
        }
        if($request->type=='weight_kg'){
            $countries->where('weight_kg','LIKE','%'.$query.'%');
        }
        if($request->type=='price'){
            $countries->where('price','LIKE','%'.$query.'%');
        }
        
        $countries=$countries->get();
                  
        $data=array();
        foreach ($countries as $country) {
                $data[]=array('from'=>$country->from,'to'=>$country->to,'service_type'=>$country->service_type,'weight_kg'=>$country->weight_kg,'price'=>$country->price);
        }
        if(count($data))
            return $data;
        else
            return ['product_name'=>'No Result Found','short_description'=>''];
    }
    public function view_booking_order()
    {
        $orders = OnlineBook::orderBy('id','desc')->get();
        return view('admin.order_booking.view',compact('orders'));
    }
    public function view_order($id)
    {
        $order_info = OnlineBook::find($id);
        OnlineBook::find($id)->update([
            'notification' => 1,
        ]);
        return view('admin.order_booking.order_view',compact('order_info'));
    }
    public function update_order(Request $request)
    {
        $request->validate([
            'status' => 'required',
        ]);
        OnlineBook::where('id',$request->id)->update([
            'status' => $request->status,
        ]);
        if($request->status == 3)
        {
            $order_id = OnlineBook::where('id',$request->id)->first();
            $user = User::where('id',$order_id->user_id)->first();
            Mail::to($user->email)->send(new ConfirmOrder);   
        }
        elseif($request->status == 4)
        {
            $order_id = OnlineBook::where('id',$request->id)->first();
            $user = User::where('id',$order_id->user_id)->first();
            Mail::to($user->email)->send(new CancelOrder); 
        }      
        return back()->with('update','Delivery Status Update Successfully');
    }
}
