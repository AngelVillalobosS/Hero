<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function brandsView(){
        return view('pages.brands');
    }
}