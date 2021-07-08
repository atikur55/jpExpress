<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OnlineBook;
use App\User;
use Carbon\Carbon;
use PDF;

class ReportDownloadController extends Controller
{
    public function download_report(Request $request)
    {
        // dd($request->all());die();
    	$from_date = $request->from_date;
    	$to_date = $request->to_date;


    	$get_data = OnlineBook::whereBetween('created_at',[$from_date,$to_date])->get();
        // dd($get_data);die();
    	// $payrol_all = Payroll::all();
        // $get_logo = AppInfo::where('status',1)->first();
        $report_pdf = PDF::loadView('admin.download.report_pdf', $get_data,compact('get_data'));
        $dynamic_name = "Order-List-".'_'.Carbon::now()->format('d-m-Y').".pdf";
        return $report_pdf->download($dynamic_name);

    	// return view('client.filter',compact('get_data'));
    }
    public function user_order_report($id)
    {
        $order = OnlineBook::where('id',$id)->first();
        $user = User::where('id',$order->user_id)->first();
        $report_pdf = PDF::loadView('download.user_order', $order,compact('order','user'));
        $dynamic_name = $order->track_id.'_'.Carbon::now()->format('d-m-Y').".pdf";
        return $report_pdf->download($dynamic_name);        
    }
}
