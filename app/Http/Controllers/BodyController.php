<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Body;
use File;

class BodyController extends Controller
{
  public function index()
  {
    $bodies = Body::get();
  return view('admin.bodies.create',compact('bodies'));
  }
  public function store(Request $request)
  {
    $validatedData = $request->validate([
     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     'title' => 'required',
     'sub_title' => 'required',



 ]);
 $body = new Body();
 $body->title = $request->title;
 $body->sub_title = $request->sub_title;

 $uploadIage = time().'.'.$request->image->extension();
 $request->image->move(public_path('bodies'), $uploadIage);
 $body->image = $uploadIage;
 $body->save();
 return redirect()->back()->with('status','Body Upload successfully');


  }

  public function updateStatus($id, $status)
{

    $body = Body::find($id);
    $body->status = $status;
    if ($body->save()){
        echo "1";
    }else{
        echo "0";
    }

}

  public function update(Request $request,$id)
  {

 $body = Body::find($id);
 // dump( $body);die();
 $body->title = $request->title;
 $body->sub_title = $request->sub_title;

 if ($request->image) {
  if (File::exists('bodies/'.$body->image)) {
    File::delete('bodies/'.$body->image);
  }

$uploadIage = time().'.'.$request->image->extension();
$request->image->move(public_path('bodies'), $uploadIage);
$body->image = $uploadIage;
}

 $body->save();
 return back()->with('status','Body update successfully');
  }

  public function delete($id)
  {

    $body = Body::find($id);

            if (!is_null($body)) {

                if (File::exists(public_path('bodies/') . $body->image)) {
                    File::delete(public_path('bodies/') . $body->image);
                }

              }
          $body->delete();
         return redirect()->back()->with('status','Body Upload successfully');
  }

}
