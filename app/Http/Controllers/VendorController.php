<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Image;
use Carbon\Carbon;

class VendorController extends Controller
{
    public function vendor()
    {
        $vendors = User::where('user_type','vendor')->get();
        return view('admin.vendor.create',compact('vendors'));
    }

    public function add_vendor(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);
        if($request->password == $request->password_confirmation)
        {
            $add_vendor = User::insertGetId([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'user_type' => 'vendor',
                'created_at' => Carbon::now(),
            ]);
            if ($request->hasFile('image')) {

                $upload_vendor_photo = $request->file('image');
                $new_upload_vendor_photo_name = $add_vendor.'.'.$upload_vendor_photo->extension();
                $new_vendor_photo_location = base_path('public/uploads/user/').$new_upload_vendor_photo_name;
                Image::make($upload_vendor_photo)->save($new_vendor_photo_location);
                User::find($add_vendor)->update([
                    'image' => $new_upload_vendor_photo_name,
                ]);
            }
            // $upload_vendor_photo = $request->file('image');
            // $new_upload_vendor_photo_name = $add_vendor.'.'.$upload_vendor_photo->extension();
            // $new_vendor_photo_location = base_path('public/uploads/user/').$new_upload_vendor_photo_name;
            // Image::make($upload_vendor_photo)->save($new_vendor_photo_location);
            // User::find($add_vendor)->update([
            //     'image' => $new_upload_vendor_photo_name,
            // ]);
            return back()->with('vendor','Vendor Create Successfully');
        }
        else
        {
            return back()->with('pass_error','Confirm Password Doesn"`t" match');
        }
    }
}
