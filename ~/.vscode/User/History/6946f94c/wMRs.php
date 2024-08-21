<?php

namespace App\Http\Controllers;

use App\Models;
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
        $date = date('Y-m-d');
        return view('tambahorder',["tgl" => $date]);
    }

    public function simpanOrder(Request $req){
        $data = [
            "kode_pememsanan" => $req->input('kode_pesanan'),
            "nama_pengguna" => $req->input('nama'),
            "jk" => $req->input('jk'),
            "tgl_pemesanan" => $req->input('tgl_pesan'),
            "qty" => $req->input('qty'),
        ];

        $simpan = 
    }
}
