<?php

namespace App\Http\Controllers;

use App\CountryCreate;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CountryCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = CountryCreate::orderBy('id','desc')->get();
        return view('admin.ecommerce_section.country_create.index',compact('datas'));
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
            'name'=>'required|unique:country_creates,name',
            'status' =>'required',
        ]);

        $data = new CountryCreate();
        $data->name = $request->name;
        $data->status = $request->status;
        $data->created_at = Carbon::now();
        $data->save();

        return redirect()->back()->with('status', 'Data Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CountryCreate  $countryCreate
     * @return \Illuminate\Http\Response
     */
    public function show(CountryCreate $countryCreate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CountryCreate  $countryCreate
     * @return \Illuminate\Http\Response
     */
    public function edit(CountryCreate $countryCreate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CountryCreate  $countryCreate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CountryCreate $countryCreate)
    {
        $request->all();

        $request->validate([
            'name'=>'required',
            'status' =>'required',
        ]);

        $countryCreate->name = $request->name;
        $countryCreate->status = $request->status;
        $countryCreate->save();

        return redirect()->back()->with('status','Data Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CountryCreate  $countryCreate
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountryCreate $countryCreate)
    {
        //
    }

    public function delete($id){
        $data = CountryCreate::find($id);
        $data->delete();
     return redirect()->back()->with('status','Data Deleted successfully');
    }

    public function ChangeStatus($id)
    {
        $changestatus = CountryCreate::find($id);
        if($changestatus->status == 0)
        {
            CountryCreate::find($id)->update([
                'status' => 1,
            ]);

            return redirect()->back()->with('status','Status activated Successfully');
        }
        else
        {
            CountryCreate::find($id)->update([
                'status' => 0,
            ]);

            return redirect()->back()->with('status','Status inactivated Successfully');
        }

        CountryCreate::Where('id', '!=', $id)->update([
            'status' => 0,
        ]);

    }
}
