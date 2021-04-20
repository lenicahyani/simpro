<?php

namespace App\Http\Controllers;
use App\Models\Worker;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function _validation(Request $request){
       $validation = $request->validate([
            'customer' => 'required',
            'nama_proyek' => 'required',
            'nilai_proyek' => 'required',
            'termin' => 'required',
            'pimpinan_proyek' => 'required',
            'status' => 'required',
            'tanggal_estimasi' => 'required',
        ],
        [
            'customer.required' => 'Harus diisi',
            'nama_proyek.required' => 'Harus diisi',
            'nilai_proyek.required' => 'Harus diisi',
            'termin.required' => 'Harus diisi',
            'pimpinan_proyek.required' => 'Harus diisi',
            'status.required' => 'Harus diisi',
            'tanggal_estimasi.required' => 'Harus diisi',            
        ]);
       
        return $request;
    }
    //tampilkan data proyek
    public function index(){
        
        $data_proyek = \App\Models\Proyek::all();
        return view('proyeks.proyek',['data_proyek'=>$data_proyek]);
    
    }
    //memampilkan form addproyek
    public function add(){      
        $worker = Worker::all();
        return view('proyeks.addproyek', compact('worker'));
        // $data_proyek = \App\Models\Proyek::all();
        // return view('proyeks.addproyek',['data_proyek'=>$data_proyek]);
     
    }

    //menyimpan form addproyek
    public function simpan(Request $request){      
         $this->_validation($request);
         \App\Models\proyek::create($request->all());
         return redirect ('/proyek')->with('sukses','Data Berhasil Diinput');
        // return $request->all();
    }

    //menyimpan form editproyek 
    public function edit ($id){      
        $worker = Worker::all();       
        $proyek = \App\Models\proyek::find($id);
        return view('proyeks.editproyek', compact('proyek','worker'));
        // return view ('proyeks.editproyek',['proyek' => $proyek ]);   
   }

   //update proyek
   public function update (Request $request, $id){     
     
    $this->_validation($request);
    $proyek = \App\Models\proyek::find($id);
    $proyek->update($request->all());
    return redirect()->route('detailproyek', $id)->with('sukses','Data Berhasil Diupdate');
    // return redirect()->back()->with('sukses','Data Berhasil Diupdate');
    // return redirect('/proyek')->with('sukses','Data Berhasil Diupdate');
    }

    //mellihat Hapus proyek 
    public function delete ($id){      
     
        $proyek = \App\Models\proyek::find($id);
        $proyek -> delete($proyek);
        return redirect('/proyek')->with('sukses','Data Berhasil Dihapus');
    }
    //mellihat detail proyek 
    public function detail ($id){      
     
        $proyek = \App\Models\proyek::find($id);
         return view ('proyeks.detailproyek',['proyek' => $proyek ]);   
   }
   

}
