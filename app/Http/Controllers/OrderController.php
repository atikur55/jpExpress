<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OnlineBook;

class OrderController extends Controller
{
    public function pending_order()
    {
        $pending_order = OnlineBook::where('status',0)->orderBy('id','desc')->get();
        return view('admin.order.pending',compact('pending_order'));
    }
    public function procesing_order()
    {
        $procesing_order = OnlineBook::where('status',1)->orderBy('id','desc')->get();
        return view('admin.order.processing',compact('procesing_order'));
    }
    public function ongoing_order()
    {
        $ongoing_order = OnlineBook::where('status',2)->orderBy('id','desc')->get();
        return view('admin.order.ongoing',compact('ongoing_order'));
    }
    public function completed_order()
    {
        $completed_order = OnlineBook::where('status',3)->orderBy('id','desc')->get();
        return view('admin.order.completed',compact('completed_order'));
    }
    public function cancel_order()
    {
        $cancel_order = OnlineBook::where('status',4)->orderBy('id','desc')->get();
        return view('admin.order.cancel',compact('cancel_order'));
    }
}
