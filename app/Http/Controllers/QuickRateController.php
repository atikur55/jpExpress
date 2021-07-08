<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuickRateImage;
use File;

class QuickRateController extends Controller
{
  public function index()
  {
    $quickRateImages = QuickRateImage::get();
  return view('admin.quick_rates.create',compact('quickRateImages'));
  }
  public function store(Request $request)
  {
    $validatedData = $request->validate([
     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',



 ]);
 $quick_rate = new QuickRateImage();
 $uploadIage = time().'.'.$request->image->extension();
 $request->image->move(public_path('quickRateImages'), $uploadIage);
 $quick_rate->image = $uploadIage;
 $quick_rate->save();
 return redirect()->back()->with('status','QuickRateImage Upload successfully');


  }

  public function updateStatus($id, $status)
{

    $quick_rate = QuickRateImage::find($id);
    $quick_rate->status = $status;
    if ($quick_rate->save()){
        echo "1";
    }else{
        echo "0";
    }

}

  public function update(Request $request,$id)
  {
 $quick_rate = QuickRateImage::find($id);
 // dump( $quick_rate);die();


 if ($request->image) {
  if (File::exists('quickRateImages/'.$quick_rate->image)) {
    File::delete('quickRateImages/'.$quick_rate->image);
  }

$uploadIage = time().'.'.$request->image->extension();
$request->image->move(public_path('quickRateImages'), $uploadIage);
$quick_rate->image = $uploadIage;
}

 $quick_rate->save();
 return back()->with('status','QuickRateImage update successfully');
  }

  public function delete($id)
  {

    $quick_rate = QuickRateImage::find($id);

            if (!is_null($quick_rate)) {

                if (File::exists(public_path('quickRateImages/') . $quick_rate->image)) {
                    File::delete(public_path('quickRateImages/') . $quick_rate->image);
                }

              }
          $quick_rate->delete();
          return redirect()->back()->with('status','QuickRateImage Delete successfully');
  }

}
