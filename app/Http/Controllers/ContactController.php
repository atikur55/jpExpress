<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
    public function message_post(Request $request)
    {
        $request->validate([
            'message' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'created_at' => Carbon::now(),
        ]);

        $msg = Message::insert([
            'name' => $request->name,
            'message' => $request->message,
            'phone' => $request->phone,
        ]);

        return back()->with('success','Message Send Successfully');

        
    }
    public function message_view()
    {
        $messages = Message::orderBy('id','desc')->get();
        return view('admin.message.view',compact('messages'));
    }
    public function delete_message($id)
    {
        Message::where('id',$id)->delete();
        return back()->with('success','Message Delete Successfully');
    }
}
