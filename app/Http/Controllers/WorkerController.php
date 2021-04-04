<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    //tampilkan data
    public function index(){
        $worker = DB::table('worker')->get();
        return view('worker',['worker'=>$worker]);
    }
    //methode untuk menampilkan form tambah data
    public function add(){
        return view ('addworker');
    }

    // methode untuk simpan data
    public function simpan(Request $request){
        // cek mengirim file ke database// request adalah ata yg di peroleh dari post
        // dd($request->all());
        DB::table('worker')->insert([
            ['kode_anggota'=> $request->kode_anggota, 
             'nama_anggota'=> $request->nama_anggota, 
             'posisi'=> $request->posisi, 
             'email'=> $request->email, 
             'telepon'=> $request->telepon],
        ]);
        // setlah menyimpan ke database kembali ke halaman worker
        return redirect()->route('worker');
    }
    // methode untuk edit data
    // methode untuk hapus data
}
