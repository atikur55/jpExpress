<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Country;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::where('user_type','!=','admin')->get();
        return view('admin.users')->with('users',$users);
    }


    public function userChangeStatus(Request $request)
    {
        $users = User::find($request->user_id);

        $users->isban = $request->isban;
        $users->update();
        return redirect()->back()->with('status','The status of '. $users->name . ' is successfully updated');
    }

    public function countrys()
    {
        return view('admin.countryscreate');
    }

    public function countrystore(Request $request)
    {
        $this->validate($request,[
            'country_name' => 'required'
        ]);

        $countrys = new Country();
        $countrys->country_name = $request->input('country_name');
        $countrys->save();

        return back()->with('status','Country Created Successfully...');
    }

    public function viewcountries()
    {

        $country = Country::all();
        return view('admin.viewcountries')->with('country',$country);
    }
    public function approve_user($id)
    {
        $user = User::find($id);

        if ($user->isban == 0) {
           User::where('id',$user->id)->update([
                'isban' => 1,
           ]);
           return back()->with('success','User Approve Successfully');
        }
        else
        {
            User::where('id',$user->id)->update([
                'isban' => 0,
           ]); 
           return back()->with('success','User Banner Successfully'); 
        }


    }
    public function approve_country($id)
    {
        $country = Country::find($id);

        if ($country->status == 1) {
           Country::where('id',$country->id)->update([
                'status' => 0,
           ]);
           return back()->with('success','Country Inactive Successfully');
        }
        else
        {
            Country::where('id',$country->id)->update([
                'status' => 1,
           ]); 
           return back()->with('success','Country Active Successfully'); 
        }


    }
    public function delete_country($id)
    {
        Country::find($id)->delete();
        return back()->with('success','Country Delete Successfully');
    }
    public function update_country(Request $request)
    {
        Country::find($request->id)->update([
            'country_name' => $request->country_name,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('update','Country Update Successfully');
    }
}
