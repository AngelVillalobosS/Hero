<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioController extends Controller
{
    public function portfolioView(){
        return view('pages.portfolio');
    }
}
