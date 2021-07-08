<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OnlineBook;
use App\Track;
use Auth;

class VendorOrderController extends Controller
{
    public function vendor_all_order()
    {
    	$all_orders = OnlineBook::where('user_id',Auth::id())->orderBy('id','desc')->get();
        return view('vendor.order.all_order',compact('all_orders'));
    }
    public function vendor_pending_order()
    {
    	$pending_orders = OnlineBook::where('user_id',Auth::id())->where('status',0)->orderBy('id','desc')->get();
        return view('vendor.order.pending_order',compact('pending_orders'));
    }
    public function vendor_processing_order()
    {
    	$processing_orders = OnlineBook::where('user_id',Auth::id())->where('status',1)->orderBy('id','desc')->get();
        return view('vendor.order.processing_order',compact('processing_orders'));
    }
    public function vendor_ongoing_order()
    {
    	$ongoing_orders = OnlineBook::where('user_id',Auth::id())->where('status',2)->orderBy('id','desc')->get();
        return view('vendor.order.ongoing',compact('ongoing_orders'));
    }
    public function vendor_confirm_order()
    {
    	$confirm_orders = OnlineBook::where('user_id',Auth::id())->where('status',3)->orderBy('id','desc')->get();
    	// return response()->json($confirm_orders);die();
        return view('vendor.order.confirm',compact('confirm_orders'));
    }
    public function vendor_cancel_order()
    {
    	$cancel_orders = OnlineBook::where('user_id',Auth::id())->where('status',4)->orderBy('id','desc')->get();
        return view('vendor.order.cancel',compact('cancel_orders'));
    }
    public function vendor_view_order($id)
    {
    	$order_info = OnlineBook::find($id);
        OnlineBook::find($id)->update([
            'notification' => 1,
        ]);
        return view('vendor.order.order_view',compact('order_info'));
    }
    public function vendor_track_list()
    {
    	$tracks = Track::where('user_id',Auth::id())->orderBy('id','desc')->get();
        return view('vendor.track.view',compact('tracks'));
    }
}
