<?php

namespace App\Http\Controllers;

use App\Bdecommerce;
use Illuminate\Http\Request;
use File;
use Carbon\Carbon;

class BdecommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Bdecommerce::orderBy('id','desc')->get();
        return view('admin.ecommerce_section.bangladesh.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'name'      => 'required|unique:bdecommerces',
        'url'       => 'required',
        'status'    => 'required'
       ]);

       $data = new Bdecommerce();

       $uploadImage = time().'.'.$request->image->extension();
       $request->image->move(public_path('ecommerce_section/bd_ecommerce'), $uploadImage);
       $data->image = $uploadImage;


       $data->name = $request->name;
       $data->url = $request->url;
       $data->status = $request->status;

       $data->save();

       return redirect('bdecommerce')->with('status','Data Updated Susseccfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bdecommerce  $bdecommerce
     * @return \Illuminate\Http\Response
     */
    public function show(Bdecommerce $bdecommerce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bdecommerce  $bdecommerce
     * @return \Illuminate\Http\Response
     */
    public function edit(Bdecommerce $bdecommerce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bdecommerce  $bdecommerce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bdecommerce $bdecommerce)
    {
        $request->all();

        $request->validate([
            'name'      => 'required',
            'url'       => 'required',
            'status'    => 'required'
           ]);

        if ($request->image) {
            if (File::exists('ecommerce_section/bd_ecommerce/'.$bdecommerce->image)) {
              File::delete('ecommerce_section/bd_ecommerce/'.$bdecommerce->image);
            }

          $uploadImage = time().'.'.$request->image->extension();
          $request->image->move(public_path('ecommerce_section/bd_ecommerce'), $uploadImage);
          $bdecommerce->image = $uploadImage;
        }


        $bdecommerce->name      = $request->name;
        $bdecommerce->url       = $request->url;
        $bdecommerce->status    = $request->status;
        $bdecommerce->save();

        return redirect()->back()->with('status','Data updated successfully');

    }

    public function update_data(Request $request, $id){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bdecommerce  $bdecommerce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bdecommerce $bdecommerce)
    {
        //
    }

    public function delete($id){
        $data = Bdecommerce::find($id);

        if (!is_null($data)) {

            if (File::exists(public_path('ecommerce_section/bd_ecommerce/') . $data->image)) {
                File::delete(public_path('ecommerce_section/bd_ecommerce/') . $data->image);
            }

          }
      $data->delete();
     return redirect()->back()->with('status','Data Deleted successfully');
    }

    public function ChangeStatus($id)
    {
        $changestatus = Bdecommerce::find($id);
        if($changestatus->status == 0)
        {
            Bdecommerce::find($id)->update([
                'status' => 1,
            ]);

            return redirect()->back()->with('status','Status activated Successfully');
        }
        else
        {
            Bdecommerce::find($id)->update([
                'status' => 0,
            ]);

            return redirect()->back()->with('status','Status inactivated Successfully');
        }

        Bdecommerce::Where('id', '!=', $id)->update([
            'status' => 0,
        ]);

    }
}
