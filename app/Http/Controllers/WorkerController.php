<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    //tampilkan data
    public function index(){
        $worker = DB::table('worker')->paginate(5);
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
        $validation = $request->validate([
            'kode_anggota' => 'required|max:6',
            'nama_anggota' => 'required',
            'posisi' => 'required',
            'email' => 'required',
            'telepon' => 'required|max:13'
        ],
        [
            'kode_anggota.required' => 'Harus diisi',
            'nama_anggota.required' => 'Harus diisi',
            'posisi.required' => 'Harus diisi',
            'email.required' => 'Harus diisi',
            'telepon.required' => 'Harus diisi',            
            'telepon.min' => 'Maxsimal 13 digit',
        ]
    
    );

        DB::table('worker')->insert([
            ['kode_anggota'=> $request->kode_anggota, 
             'nama_anggota'=> $request->nama_anggota, 
             'posisi'=> $request->posisi, 
             'email'=> $request->email, 
             'telepon'=> $request->telepon],
        ]);
        // setlah menyimpan ke database kembali ke halaman worker dan memunculkan pesan flash
        return redirect()->route('worker')->with('message', 'Data berhasil disimpan');
    }
    // methode untuk edit data
    public function edit($id){
        $worker = DB::table('worker')->where('id',$id)->first();
        return view('editworker',['worker'=>$worker]);
    }

    // methode untuk hapus data
    public function delete($id){
        DB::table('worker')->where('id',$id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}
