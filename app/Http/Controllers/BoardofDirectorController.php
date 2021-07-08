<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardofDirectorController extends Controller
{
    public function index()
    {
        return view('frontend.board_of_director');
    }
}
