<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    //tampilkan data proyek
    public function index(){
        
        $data_proyek = \App\Models\Proyek::all();
        return view('proyeks.proyek',['data_proyek'=>$data_proyek]);
    
    }
    //memampilkan form addproyek
    public function add(){      
        
        $data_proyek = \App\Models\Proyek::all();
        return view('proyeks.addproyek',['data_proyek'=>$data_proyek]);
     
    }

    //menyimpan form addproyek
    public function simpan(Request $request){      
     
         \App\Models\proyek::create($request->all());
         return redirect ('/proyek')->with('sukses','Data Berhasil Diinput');
        // return $request->all();
    }

    //menyimpan form editproyek 
    public function edit ($id){      
     
        $proyek = \App\Models\proyek::find($id);
         return view ('proyeks.editproyek',['proyek' => $proyek ]);   
   }

   //update proyek
   public function update (Request $request, $id){     
     
    $proyek = \App\Models\proyek::find($id);
    $proyek->update($request->all());
    return redirect('/proyek')->with('sukses','Data Berhasil Diupdate');
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
