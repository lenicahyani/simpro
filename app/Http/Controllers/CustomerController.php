<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private function _validation(Request $request){
        $validation = $request->validate([
            'nama' => 'required|max:100',
            'email' => 'required|max:100',
            'alamat' => 'required|max:100',
            'telepon' => 'required|max:13'
        ],
        [
            'nama.required' => 'Harus diisi',
            'nama.min' => 'Maxsimal 100 digit',
            'email.required' => 'Harus diisi',
            'email.min' => 'Maxsimal 100 digit',
            'alamat.required' => 'Harus diisi',
            'alamat.min' => 'Maxsimal 100 digit',
            'telepon.required' => 'Harus diisi',          
            'telepon.min' => 'Maxsimal 13 digit',
        ]);
    }

    //tampilkan data
    public function index(){
        $customer = DB::table('customer')->paginate(5);
        return view('customer',['customer'=>$customer]);
    }
    //methode untuk menampilkan form tambah data
    public function add(){
        return view ('addcustomer');
    }

    // methode untuk simpan data
    public function simpan(Request $request){
        // cek mengirim file ke database// request adalah ata yg di peroleh dari post
        // dd($request->all());

        $this->_validation($request) ;     

        DB::table('customer')->insert([
            ['nama'=> $request->kode_anggota,
             'email'=> $request->email,  
             'alamat'=> $request->alamat, 
             'telepon'=> $request->telepon]
        ]);
        // setlah menyimpan ke database kembali ke halaman customer dan memunculkan pesan flash
        return redirect()->route('customer')->with('message', 'Data berhasil disimpan');
    }
    // methode untuk edit data
    public function edit($id){
        $customer = DB::table('customer')->where('id',$id)->first();
        return view('editcustomer',['customer'=>$customer]);
    }

    // methode untuk update data

    public function update(Request $request, $id){
        $this->_validation($request);
        DB::table('customer')->where('id',$id)->update([
            'nama'=> $request->kode_anggota,
            'email'=> $request->email,  
            'alamat'=> $request->alamat, 
            'telepon'=> $request->telepon
        ]);
        return redirect()->route('customer')->with('message','Data berhasil diupdate');
    }


    // methode untuk hapus data
    public function delete($id){
        DB::table('customer')->where('id',$id)->delete();

        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
    
}
