<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        return view('pembayarans.pembayaran');        
    }
    public function add()
    {
        $pembayaran = Pembayaran::all();
        // return view('pembayarans.pembayaran', compact('proyek','worker'));
        // return view('proyeks.addproyek', compact('worker'));
        // $data_proyek = \App\Models\Proyek::all();
        return view('pembayarans.pembayaran',['pembayaran'=>$pembayaran]);

        
    }
}
