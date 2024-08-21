<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class layananController extends Controller
{
    public function homeView(){
        if(Auth::check()){
            return view('home');
        }else{
            return redirect('/kasir/login');
        }
    }

    public function orderView(){
        return view('order');
    }

    public function tambahOrder(){
        date_default_timezone_set('Asia/Jakarta');
        $date = date('')
        return view('tambahorder');
    }
}
