<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use File;

class SliderController extends Controller
{

    public function index()
    {
      $sliders = Slider::get();
    return view('admin.sliders.create',compact('sliders'));
    }
    public function store(Request $request)
    {
      $validatedData = $request->validate([
       'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       'title' => 'required',
       'sub_title' => 'required',
       'description' => 'required',


   ]);
   $slider = new Slider();
   $slider->title = $request->title;
   $slider->sub_title = $request->sub_title;
   $slider->description = $request->description;
   $uploadIage = time().'.'.$request->image->extension();
   $request->image->move(public_path('sliders'), $uploadIage);
   $slider->image = $uploadIage;
   $slider->save();
   return redirect()->back()->with('status','Slider Upload successfully');


    }

    public function updateStatus($id, $status)
  {

      $slider = Slider::find($id);
      $slider->status = $status;
      if ($slider->save()){
          echo "1";
      }else{
          echo "0";
      }

  }

    public function update(Request $request,$id)
    {
      

   $slider = Slider::find($id);
   // dump( $slider);die();
   $slider->title = $request->title;
   $slider->sub_title = $request->sub_title;
   $slider->description = $request->description;
   if ($request->image) {
    if (File::exists('sliders/'.$slider->image)) {
      File::delete('sliders/'.$slider->image);
    }

  $uploadIage = time().'.'.$request->image->extension();
  $request->image->move(public_path('sliders'), $uploadIage);
  $slider->image = $uploadIage;
}

   $slider->save();
   return back()->with('status','Slider update successfully');
    }

    public function delete($id)
    {

      $slider = Slider::find($id);

              if (!is_null($slider)) {

                  if (File::exists(public_path('sliders/') . $slider->image)) {
                      File::delete(public_path('sliders/') . $slider->image);
                  }

                }
            $slider->delete();
           return redirect()->back()->with('status','Slider Upload successfully');
    }

}
