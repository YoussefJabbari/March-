<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->session()->has('marche'))
        {
            //dd($request->session()->all());
        }
        else
        {
            $request->session()->put('marche', 0);
            $request->session()->save();
            //dd($request->session()->all());
        }
        return view('index');
    }
}
