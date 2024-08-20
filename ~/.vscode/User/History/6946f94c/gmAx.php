<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layananController extends Controller
{
    public function home(){
        if(Auth::check()){
            return view('home');
        }else{
            return redirect('/kasir/login');
        }
    }
}
