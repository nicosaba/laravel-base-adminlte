<?php

namespace App\Http\Controllers;

use Sentinel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        if(Sentinel::check())
            return view('home');
        else
            return redirect('login');
    }
}
