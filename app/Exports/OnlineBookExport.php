<?php

namespace App\Exports;

use App\OnlineBook;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OnlineBookExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return OnlineBook::all();
    // }
    public function collection()
    {
        return OnlineBook::orderBy('id','asc')->select('id','track_id', 'from','to','price','created_at')->get();
    }

    public function headings() :array
    {
        return ["SL No","TrackID", "From","To","Price","Date"];
    }
}
