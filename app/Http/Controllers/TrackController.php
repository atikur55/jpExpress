<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Track;
use App\OnlineBook;
use Auth;

class TrackController extends Controller
{
    public function track_add(Request $request)
    {
        $request->validate([
            'track_id'          => 'required',
            'title'             => 'required',
            'description'       => 'required',
            'delivery_date'     => 'required',
        ]);

        Track::insert([
            'user_id'           => Auth::id(),
            'track_id'          => $request->track_id,
            'title'             => $request->title,
            'description'       => $request->description,
            'delivery_date'     => $request->delivery_date,
            'created_at'        => Carbon::now(),
        ]);

        return back()->with('success','Tracking Add Successfully');
    }
    public function view_track_list()
    {
        $tracks = Track::where('user_id',Auth::id())->orderBy('id','desc')->get();
        return view('admin.track.view',compact('tracks'));
    }
    public function delete_track($id)
    {
        Track::find($id)->delete();
        return back()->with('delete','Data Delete Successfully');
    }
    public function update_track(Request $request)
    {
        Track::where('id',$request->id)->update([
            'user_id'           => Auth::id(),
            'track_id'          => $request->track_id,
            'title'             => $request->title,
            'description'       => $request->description,
            'delivery_date'     => $request->delivery_date,
            'created_at'        => Carbon::now(),
        ]);
        
        return back()->with('update','Data Update Successfully');
    }
    public function parcel_search(Request $request)
    {
        
        $parcel_get = OnlineBook::where('track_id',$request->parcel_search)->first();
        
        if ($parcel_get) {
            $tracks = Track::where('track_id',$parcel_get->track_id)->orderBy('id','asc')->get();
            return view('frontend.parcelsearch',compact('tracks','parcel_get'));
        }
        else
        {
            return back()->with('message','Your Track Id Doesnt Match');
        }
        
    }
}
