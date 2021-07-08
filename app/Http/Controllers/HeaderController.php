<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;

class HeaderController extends Controller
{
  public function index()
  {
    $headers = Header::get();
  return view('admin.headers.create',compact('headers'));
  }
  public function store(Request $request)
  {
    $validatedData = $request->validate([
     'mobile1' => 'required',
     'mobile2' => 'required',
     'email' => 'required',


 ]);
 $header = new Header();
 $header->mobile1 = $request->mobile1;
 $header->mobile2 = $request->mobile2;
$header->email = $request->email;

 $header->save();
 return redirect()->back()->with('status','Header Upload successfully');


  }

  public function updateStatus($id, $status)
{

    $header = Header::find($id);
    $header->status = $status;
    if ($header->save()){
        echo "1";
    }else{
        echo "0";
    }

}

  public function update(Request $request,$id)
  {
 $header = Header::find($id);
 $header->mobile1 = $request->mobile1;
 $header->mobile2 = $request->mobile2;
$header->email = $request->email;

 $header->save();
 return back()->with('status','Header update successfully');
  }

  public function delete($id)
  {

    $header = Header::find($id);

          $header->delete();
          session()->flash('success', 'Header has delete successfully');
          return back();
  }

}
