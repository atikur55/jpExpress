<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use File;

class ServicesController extends Controller
{
    public function index()
    {
      $services = Services::get();
    return view('admin.services.create',compact('services'));
    }
    public function store(Request $request)
    {
      $validatedData = $request->validate([
       'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       'name' => 'required',
       'description' => 'required',


   ]);
   $service = new Services();
   $service->name = $request->name;
   $service->description = $request->description;
   $uploadIage = time().'.'.$request->image->extension();
   $request->image->move(public_path('images'), $uploadIage);
   $service->image = $uploadIage;
   $service->save();
   return redirect()->back()->with('status','Services Upload successfully');


    }

    public function updateStatus($id, $status)
  {

      $service = Services::find($id);
      $service->status = $status;
      if ($service->save()){
          echo "1";
      }else{
          echo "0";
      }

  }

    public function update(Request $request,$id)
    {
   $service = Services::find($id);
   // dump( $service);die();
   $service->name = $request->name;
   $service->description = $request->description;
   if ($request->image) {
    if (File::exists('images/'.$service->image)) {
      File::delete('images/'.$service->image);
    }

  $uploadIage = time().'.'.$request->image->extension();
  $request->image->move(public_path('images'), $uploadIage);
  $service->image = $uploadIage;
}

   $service->save();
   return back()->with('status','Services update successfully');
    }

    public function delete($id)
    {

      $service = Services::find($id);

              if (!is_null($service)) {

                  if (File::exists(public_path('images/') . $service->image)) {
                      File::delete(public_path('images/') . $service->image);
                  }

                }
            $service->delete();
            session()->flash('success', 'Services has delete successfully');
            return back();
    }

}
