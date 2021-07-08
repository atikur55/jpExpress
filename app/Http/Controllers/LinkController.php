<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
  public function index()
  {
    $links = Link::get();
  return view('admin.links.create',compact('links'));
  }
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required',
     'url' => 'required',



 ]);
 $link = new Link();
  $link->name = $request->name;
 $link->url = $request->url;


 $link->save();
 return redirect()->back()->with('status','Link Upload successfully');


  }

  public function updateStatus($id, $status)
{

    $link = Link::find($id);
    $link->status = $status;
    if ($link->save()){
        echo "1";
    }else{
        echo "0";
    }

}

  public function update(Request $request,$id)
  {
 $link = Link::find($id);
  $link->name = $request->name;
 $link->url = $request->url;


 $link->save();
 return back()->with('status','Link update successfully');
  }

  public function delete($id)
  {

    $link = Link::find($id);

          $link->delete();
          session()->flash('success', 'Link has delete successfully');
          return back();
  }

}
