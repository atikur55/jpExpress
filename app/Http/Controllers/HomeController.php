<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\OnlineBook;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Image;
use App\Mail\PasswordChangeConfirmation;
use Mail;
use DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $total_vendors = User::where('user_type','vendor')->count();
        $vendors = User::where('user_type','vendor')->latest()->take(5)->get();
        $total_users = User::where('user_type','user')->count();
        $total_travellers = User::where('user_type','traveller')->count();
        $total_staffs = User::where('user_type','staff')->count();
        $total_order = OnlineBook::count();
        $total_pending = OnlineBook::where('status',0)->count();
        $total_confirm = OnlineBook::where('status',3)->count();
        $total_cancel = OnlineBook::where('status',4)->count();
        $online_orders = OnlineBook::orderBy('id','desc')->latest()->take(7)->get();
        $total_collection = OnlineBook::sum('price');
        $pending_collection = OnlineBook::where('status',0)->sum('price');
        $confirm_collection = OnlineBook::where('status',3)->sum('price');
        $cancel_collection = OnlineBook::where('status',4)->sum('price');
        $online_books = OnlineBook::where('status',3)->orderBy('id','desc')->get();

        $todays_order = OnlineBook::whereDate('created_at', Carbon::today())->get();
        // High Charts
        $users = User::select(\DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(\DB::raw("Month(created_at)"))
                    ->pluck('count');
        
        $fruit = OnlineBook::where('status',3)->count();
        $veg = OnlineBook::where('status',4)->count();
        $grains = OnlineBook::where('status',0)->count();

        $population  = OnlineBook::select(
                          DB::raw("year(created_at) as year"),
                          DB::raw("SUM(price) as prices"))
                      ->orderBy(DB::raw("YEAR(created_at)"))
                      ->groupBy(DB::raw("YEAR(created_at)"))
                      ->get();

                $res[] = ['Year', 'Prices'];
                foreach ($population  as $key => $val) {
                  $res[++$key] = [$val->year, (int)$val->prices];
                }
        $data = DB::table('online_books')
                  ->select(
                    DB::raw('status as course'),
                    DB::raw('count(*) as number'))
                  ->groupBy('status')
                  ->get();
             $array[] = ['Status', 'Number'];
             foreach($data as $key => $value)
             {
               $array[++$key] = [$value->course, $value->number];
             }
        // User Information
        $user_pending_order = OnlineBook::where('user_id',Auth::id())->where('status',0)->count();
        $user_confirm_order = OnlineBook::where('user_id',Auth::id())->where('status',3)->count();
        $user_cancel_order = OnlineBook::where('user_id',Auth::id())->where('status',4)->count();
        $user_total_order = OnlineBook::where('user_id',Auth::id())->count();
        $user_order = OnlineBook::where('user_id',Auth::id())->get();
        // Vendor Information
        $vendor_pending_order = OnlineBook::where('user_id',Auth::id())->where('status',0)->count();
        $vendor_confirm_order = OnlineBook::where('user_id',Auth::id())->where('status',3)->count();
        $vendor_cancel_order = OnlineBook::where('user_id',Auth::id())->where('status',4)->count();
        $vendor_total_order = OnlineBook::where('user_id',Auth::id())->count();
        $vendor_order = OnlineBook::where('user_id',Auth::id())->get();
        $vendor_customer = User::where('vendor_id',Auth::id())->count();
        // echo $vendor_total_order;die();

        // return view('dashboard',compact('total_vendors','total_users','total_travellers','total_staffs','total_order','total_pending','total_confirm','total_cancel','online_orders','vendors','total_collection','pending_collection','confirm_collection','cancel_collection','online_books','todays_order','users','fruit','veg','grains'))->with('population', json_encode($res))->with('course', json_encode($array));
        return view('dashboard',compact(
          'total_vendors',
          'total_users',
          'total_travellers',
          'total_staffs',
          'total_order',
          'total_pending',
          'total_confirm',
          'total_cancel',
          'online_orders',
          'vendors',
          'total_collection',
          'pending_collection',
          'confirm_collection',
          'cancel_collection',
          'online_books',
          'todays_order',
          'users',
          'fruit',
          'veg',
          'grains',
          'user_pending_order',
          'user_confirm_order',
          'user_cancel_order',
          'user_total_order',
          'user_order',
          'vendor_pending_order',
          'vendor_confirm_order',
          'vendor_cancel_order',
          'vendor_total_order',
          'vendor_order',
          'vendor_customer'))->with('population', json_encode($res))->with('course', json_encode($array));
    }
    public function profileoverview()
    {
        $users = User::all();
        return view('profileoverview')->with('users',$users);
    }

    // public function editinfo(Request $request,$id)
    // {
    //     $this->validate($request,[
    //         'name' => 'required',
    //         'email' => 'required',
    //         'phone' => 'required',
    //         'address' => 'required',
    //         'company' => 'required',
    //     ]);


    //     $userinfo = User::find($id);
    //     $userinfo->name = $request->input('name');
    //     $userinfo->phone = $request->input('phone');
    //     $userinfo->email = $request->input('email');
    //     $userinfo->company = $request->input('company');
    //     $userinfo->address = $request->input('address');
    //     $userinfo->save();
    //     return back()->with('status','Information Updated..');
    // }

    public function changepassword()
    {
        $users = User::all();
        return view('changepassword')->with('users',$users);
    }



    public function updatepassword(Request $request)
    {
        $this->validate($request, [

            'oldpassword' => 'required',
            'newpassword' => 'required',
        ]);
        $id = Auth::user()->id;
        $db_pass = Auth::user()->password;
        $old_pass = $request->oldpassword;
        $new_pass = $request->newpassword;
        $confirm_pass = $request->password_confirmation;

        if(Hash::check($old_pass,$db_pass)){

            if ($new_pass === $confirm_pass)
            {
                User::find($id)->update([
                   'password'=> Hash::make($request->newpassword)
                ]);
                Auth::logout();
                return redirect('login')->with('status','password updated successfully');

            }
            else{
                return redirect()->back()->with('danger','new password and confirm password not matched ');
            }

        }
        else{
            return redirect()->back()->with('error','old password doesnt matched ');
        }
    }

    public function update_profile(Request $request)
    {
        $get_image = User::find($request->id);
        $request->all();
        if ($request->hasFile('image')) {
          if ($get_image->image != 'photo.jpg') {
            $delete_location = base_path('public/uploads/user/'.$get_image->image);
            unlink($delete_location);
          }
        $uploaded_product_photo = $request->file('image');
        $new_product_photo_name = $get_image->id.'.'.$uploaded_product_photo->extension();
        $new_product_photo_location = base_path('public/uploads/user/'.$new_product_photo_name);
        Image::make($uploaded_product_photo)->resize(120,120)->save($new_product_photo_location);
        $get_image->image = $new_product_photo_name;
        }
        $get_image->name = $request->name;
        $get_image->phone = $request->phone;
        $get_image->email = $request->email;
        $get_image->company = $request->company;
        $get_image->address = $request->address;
        $get_image->save();
        return back()->with('status','Profile Update Successfully');
    }

    public function edit_profile()
    {
      return view('admin.profile.edit_profile');
    }
    public function edit_profile_post(Request $request)
    {
      $request->validate([
        'old_password' => 'required',
        'password' => 'required|confirmed|min:6',
        'password_confirmation' => 'required',
      ],[
        'old_password.required' => 'Please Field Your Old Password',
        'password.required' => 'Enter Your New Password',
        'password_confirmation.required' => 'Enter Your Confirm Password',
      ]);

      $old_password = $request->old_password;
      $db_password = Auth::user()->password;
      if (Hash::check($old_password,$db_password)) {
        User::find(Auth::id())->update([
          'password' => Hash::make($request->password),
        ]);
        Mail::to(Auth::user()->email)->send(new PasswordChangeConfirmation);
        return back()->with('pass_success','Password Change Successfully');
      } 
      else {
        return back()->with('pass_error','Old Password Doesn not Match');
      }
      
    }



}
