<?php

namespace App\Http\Controllers;

use App\AssignCountry;
use App\CountryCreate;
use Illuminate\Http\Request;
use File;
class AssignCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get_country = CountryCreate::orderBy('id','desc')->get();
        $datas = AssignCountry::orderBy('id','desc')->get();
        return view('admin.ecommerce_section.international.index',compact('get_country','datas'));
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
            'country_id'      => 'required',
            'company_name'    => 'required|unique:assign_countries,company_name',
            'url'             =>'required',
            'status'          => 'required'
           ]);

           $data = new AssignCountry();

           $uploadImage = time().'.'.$request->image->extension();
           $request->image->move(public_path('ecommerce_section/international_ecommerce'), $uploadImage);
           $data->image = $uploadImage;


           $data->country_id = $request->country_id;
           $data->company_name = $request->company_name;
           $data->url = $request->url;
           $data->status = $request->status;
           $data->save();

           return redirect('assign_country')->with('status','Data added Susseccfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AssignCountry  $assignCountry
     * @return \Illuminate\Http\Response
     */
    public function show(AssignCountry $assignCountry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AssignCountry  $assignCountry
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignCountry $assignCountry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AssignCountry  $assignCountry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssignCountry $assignCountry)
    {
        $request->all();

        $request->validate([
            'country_id'    => 'required',
            'company_name'  => 'required',
            'url'           => 'required',
            'status'        => 'required'
           ]);

        if ($request->image) {
            if (File::exists('ecommerce_section/international_ecommerce/'.$assignCountry->image)) {
              File::delete('ecommerce_section/international_ecommerce/'.$assignCountry->image);
            }

          $uploadImage = time().'.'.$request->image->extension();
          $request->image->move(public_path('ecommerce_section/international_ecommerce'), $uploadImage);
          $assignCountry->image = $uploadImage;
        }


        $assignCountry->country_id          = $request->country_id;
        $assignCountry->company_name        = $request->company_name;
        $assignCountry->url                 = $request->url;
        $assignCountry->status              = $request->status;
        $assignCountry->save();

        return redirect()->back()->with('status','Data updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AssignCountry  $assignCountry
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignCountry $assignCountry)
    {
        //
    }

    public function delete($id)
    {
        $data = AssignCountry::find($id);

        if (!is_null($data)) {

            if (File::exists(public_path('ecommerce_section/international_ecommerce/') . $data->image)) {
                File::delete(public_path('ecommerce_section/international_ecommerce/') . $data->image);
            }

          }
          
      $data->delete();
     return redirect()->back()->with('status','Data Deleted successfully');
    }

    public function ChangeStatus($id)
    {
        $changestatus = AssignCountry::find($id);
        if($changestatus->status == 0)
        {
            AssignCountry::find($id)->update([
                'status' => 1,
            ]);

            return redirect()->back()->with('status','Status activated Successfully');
        }
        else
        {
            AssignCountry::find($id)->update([
                'status' => 0,
            ]);

            return redirect()->back()->with('status','Status inactivated Successfully');
        }

        AssignCountry::Where('id', '!=', $id)->update([
            'status' => 0,
        ]);

    }
}
