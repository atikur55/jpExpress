<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\OnlineBook;
use Carbon\Carbon;
use Auth;

class UserController extends Controller
{
    public function delete_user($id)
    {
        User::find($id)->delete();
        return back()->with('success','User Delete Successfully');
    }
    public function update_user(Request $request)
    {
        
        User::where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_type' => $request->user_type,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('update','User Update Successfully');
    }
    public function user_booking_list()
    {
        $orders = OnlineBook::where('user_id',Auth::id())->orderBy('id','desc')->get();
        return view('user.booking.view',compact('orders'));
    }
}
