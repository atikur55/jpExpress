<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VendorCustomer;
use App\User;
use Auth;
use Hash;
use Carbon\Carbon;
use Image;

class VendorCreateCustomerController extends Controller
{
    public function create_customer()
    {
        return view('vendor.user.create');
    }

    public function vendor_post_customer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'user_type' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        if($request->password == $request->password_confirmation)
        {
            $add_customer = User::insertGetId([
                'vendor_id' => Auth::id(),
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'company' => $request->company,
                'address' => $request->address,
                'user_type' => $request->user_type,
                'password' => Hash::make($request->password),
                'created_at' => Carbon::now(),
            ]);
            if ($request->hasFile('image')) {

                $upload_customer_photo = $request->file('image');
                $new_upload_customer_photo_name = $add_customer.'.'.$upload_customer_photo->extension();
                $new_customer_photo_location = base_path('public/uploads/vendor/customer/').$new_upload_customer_photo_name;
                Image::make($upload_customer_photo)->save($new_customer_photo_location);
                User::find($add_customer)->update([
                    'image' => $new_upload_customer_photo_name,
                ]);
            }
            
            return back()->with('customer','customer Create Successfully');
        }
        else
        {
            return back()->with('pass_error','Confirm Password Doesn"`t" match');
        }

    }

    public function vendor_customer_list()
    {
        $customers = User::where('vendor_id',Auth::id())->where('user_type','user')->get();
        return view('vendor.user.view',compact('customers'));
    }
}
