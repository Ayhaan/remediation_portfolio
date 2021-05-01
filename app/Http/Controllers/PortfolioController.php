<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //READ index
    public function index(){
        $portfolios = Portfolio::all();
        return view('admin.portfolio.main', compact('portfolios'));
    }

    //READ show


    //DESTROY
    public function destroy(Portfolio $id){
        // $portfolio = Portfolio::find($id);
        $id->delete();
        return redirect()->route('portfolio.index');
    }

    //UPDATE
    public function edit(Portfolio $id){
        $portfolio = $id;
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Portfolio $id, Request $request){
        $portfolio = $id;

        $portfolio->img = $request->img;
        $portfolio->filter = $request->filter;
        $portfolio->save();
        return redirect()->route('portfolio.index');
    }

    //CREATE - STORE
}
