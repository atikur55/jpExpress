<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;

class FooterController extends Controller
{
  public function index()
  {
    $footers = Footer::get();
  return view('admin.footers.create',compact('footers'));
  }
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'address' => 'required',
     'mobile1' => 'required',
     'mobile2' => 'required',
     'email' => 'required',


 ]);
 $footer = new Footer();
  $footer->address = $request->address;
 $footer->mobile1 = $request->mobile1;
 $footer->mobile2 = $request->mobile2;
$footer->email = $request->email;

 $footer->save();
 return redirect()->back()->with('status','Footer Upload successfully');


  }

  public function updateStatus($id, $status)
{

    $footer = Footer::find($id);
    $footer->status = $status;
    if ($footer->save()){
        echo "1";
    }else{
        echo "0";
    }

}

  public function update(Request $request,$id)
  {
 $footer = Footer::find($id);
  $footer->address = $request->address;
 $footer->mobile1 = $request->mobile1;
 $footer->mobile2 = $request->mobile2;
$footer->email = $request->email;

 $footer->save();
 return back()->with('status','Footer update successfully');
  }

  public function delete($id)
  {

    $footer = Footer::find($id);

          $footer->delete();
          session()->flash('success', 'Footer has delete successfully');
          return back();
  }

}
