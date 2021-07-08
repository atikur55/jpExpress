<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use File;

class LogoController extends Controller
{
    public function index()
    {
      $logoes = Logo::get();
      return view('admin.logoes.create',compact('logoes'));
    }
    public function store(Request $request)
    {
      $validatedData = $request->validate([
       'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   ]);
   $logo = new Logo();
   $uploadIage = time().'.'.$request->image->extension();
   $request->image->move(public_path('logoes'), $uploadIage);
   $logo->image = $uploadIage;
   $logo->save();
   return redirect()->back()->with('status','Logo Upload successfully');


    }

    public function updateStatus($id, $status)
  {

      $logo = Logo::find($id);
      $logo->status = $status;
      if ($logo->save()){
          echo "1";
      }else{
          echo "0";
      }

  }

    public function update(Request $request,$id)
    {
   $logo = Logo::find($id);
   // dump( $logo);die();


   if ($request->image) {
    if (File::exists('logoes/'.$logo->image)) {
      File::delete('logoes/'.$logo->image);
    }

  $uploadIage = time().'.'.$request->image->extension();
  $request->image->move(public_path('logoes'), $uploadIage);
  $logo->image = $uploadIage;
}

   $logo->save();
   return back()->with('status','Logo update successfully');
    }

    public function delete($id)
    {

      $logo = Logo::find($id);

              if (!is_null($logo)) {

                  if (File::exists(public_path('logoes/') . $logo->image)) {
                      File::delete(public_path('logoes/') . $logo->image);
                  }

                }
            $logo->delete();
            return redirect()->back()->with('status','Logo Delete successfully');
    }

}
