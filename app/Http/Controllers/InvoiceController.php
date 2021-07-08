<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OnlineBook;

class InvoiceController extends Controller
{
    public function create($id)
    {
        $data = OnlineBook::find($id);
        return view('admin.invoice.create',compact('data'));
    }
    public function post(Request $request)
    {
        dd($request->all());
    }
}
