<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfferPage;
use Auth;
use Carbon\Carbon;

class OfferPageController extends Controller
{
    public function create_offer_page()
    {
        return view('admin.frontend.offer.create');
    }
    public function offer_store(Request $request)
    {
        OfferPage::insert([
            'user_id' => Auth::id(),
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success','Offer Page Created Successfully');
    }
}
