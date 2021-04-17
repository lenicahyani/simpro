<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LapprogresController extends Controller
{
    private function _validation(Request $request){
        $validation = $request->validate([
            'nama_proyek' => 'required|max:100',
            'nama_tugas' => 'required|max:100',
            'deskripsi' => 'required|max:100',
            'tim' => 'required|max:100',
            'status'=> 'required|max:100',
            'progres'=> 'required|max:100',
        ],
        [
            'nama_proyek.required' => 'Harus diisi',
            'nama_proyek.min' => 'Maxsimal 100 digit',
            'nama_tugas.required' => 'Harus diisi',
            'nama_tugas.min' => 'Maxsimal 100 digit',
            'deskripsi.required' => 'Harus diisi',
            'deskripsi.min' => 'Maxsimal 100 digit',
            'tim.required' => 'Harus diisi',          
            'tim.min' => 'Maxsimal 100 digit',
            'status.required' => 'Harus diisi',          
            'status.min' => 'Maxsimal 100 digit',
            'progres.required' => 'Harus diisi',          
            'progres.min' => 'Maxsimal 100 digit',
        ]);
    }

    //tampilkan data
    public function index(){
        $lapprogres = DB::table('lapprogres')->paginate(5);
        return view('lapprogres',['lapprogres'=>$lapprogres]);
    }
    //methode untuk menampilkan form tambah data
    public function add(){
        return view ('addlapprogres');
    }

    // methode untuk simpan data
    public function simpan(Request $request){
        // cek mengirim file ke database// request adalah ata yg di peroleh dari post
        // dd($request->all());

        $this->_validation($request) ;     

        DB::table('lapprogres')->insert([
            ['nama_proyek'=> $request->nama_proyek,
             'nama_tugas'=> $request->nama_tugas,  
             'deskripsi'=> $request->deskripsi, 
             'tim'=> $request->tim,
             'status' => $request->status,         
             'progres' => $request->progres]         
             
        ]);
        // setlah menyimpan ke database kembali ke halaman lapprogres dan memunculkan pesan flash
        return redirect()->route('lapprogres')->with('message', 'Data berhasil disimpan');
    }
    // methode untuk edit data
    public function edit($id){
        $lapprogres = DB::table('lapprogres')->where('id',$id)->first();
        return view('editlapprogres',['lapprogres'=>$lapprogres]);
    }

    // methode untuk update data

    public function update(Request $request, $id){
        $this->_validation($request);
        DB::table('lapprogres')->where('id',$id)->update([
            'nama_proyek'=> $request->nama_proyek,
            'nama_tugas'=> $request->nama_tugas,  
            'deskripsi'=> $request->deskripsi, 
            'tim'=> $request->tim,
            'status' => $request->status,         
            'progres' => $request->progres
        ]);
        return redirect()->route('lapprogres')->with('message','Data berhasil diupdate');
    }


    // methode untuk hapus data
    public function delete($id){
        DB::table('lapprogres')->where('id',$id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
    
}
