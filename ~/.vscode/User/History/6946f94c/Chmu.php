<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

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
        $order = Layanan::latest()->get();
        return view('order', compact('order'));
    }

    public function tambahOrder(){
        date_default_timezone_set('Asia/Jakarta');
        $kode = rand('1000000','9999999');
        $date = date('Y-m-d');
        return view('tambahorder',["tgl" => $date, "kode" => $kode]);
    }

    public function editOrderView($id){
        $order = Layanan::findOrFail($id);
        return view('editorder', compact('order'));
    }
    
    public function simpanOrder(Request $req){
        $data = [
            "kode_pemesanan" => $req->input('kode_pesanan'),
            "nama_pengguna" => $req->input('nama'),
            "jk" => $req->input('jk'),
            "tgl_pemesanan" => $req->input('tgl_pesan'),
            "jenis_cucian" => $req->input('jc'),
            "qty" => $req->input('qty')
        ];

        $simpan = Layanan::create($data);
        if($simpan){
            Session::flash('success','Data order berhasil ditambahkan !');
            return redirect('/kasir/order/');
        }
    }

    public function hapusOrder($id){
        $order = Layanan::findOrFail($id);
        if($order->delete()){
            Session::flash('success','Data order berhasil dihapus !');
            return redirect('/kasir/order/');
        }
    }
}
