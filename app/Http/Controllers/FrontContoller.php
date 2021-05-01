<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class FrontContoller extends Controller
{
    public function index(){
        $portfolios = Portfolio::all();
        return view('home', compact('portfolios'));
    }


}
