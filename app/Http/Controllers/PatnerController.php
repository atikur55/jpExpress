<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patner;
use File;

class PatnerController extends Controller
{
  public function index()
  {
    $patners = Patner::get();
  return view('admin.patners.create',compact('patners'));
  }
  public function store(Request $request)
  {
    $validatedData = $request->validate([
     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     'name' => 'required',



 ]);
 $patner = new Patner();
 $patner->name = $request->name;

 $uploadIage = time().'.'.$request->image->extension();
 $request->image->move(public_path('patners'), $uploadIage);
 $patner->image = $uploadIage;
 $patner->save();
 return redirect()->back()->with('status','Patner Upload successfully');


  }

  public function updateStatus($id, $status)
{

    $patner = Patner::find($id);
    $patner->status = $status;
    if ($patner->save()){
        echo "1";
    }else{
        echo "0";
    }

}

  public function update(Request $request,$id)
  {
 $patner = Patner::find($id);
 // dump( $patner);die();
 $patner->name = $request->name;

 if ($request->image) {
  if (File::exists('patners/'.$patner->image)) {
    File::delete('patners/'.$patner->image);
  }

$uploadIage = time().'.'.$request->image->extension();
$request->image->move(public_path('patners'), $uploadIage);
$patner->image = $uploadIage;
}

 $patner->save();
 return back()->with('status','Patner update successfully');
  }

  public function delete($id)
  {

    $patner = Patner::find($id);

            if (!is_null($patner)) {

                if (File::exists(public_path('patners/') . $patner->image)) {
                    File::delete(public_path('patners/') . $patner->image);
                }

              }
          $patner->delete();
          session()->flash('success', 'Patner has delete successfully');
          return back();
  }

}
