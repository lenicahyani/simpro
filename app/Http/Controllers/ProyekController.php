<?php

namespace App\Http\Controllers;
use App\Models\Worker;
use App\Models\Subproyek;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function _validation(Request $request){
        return $request->all();
       $validation = $request->validate([
            'customer' => 'required',
            'nama_proyek' => 'required',
            'nilai_proyek' => 'required',
            'termin' => 'required',
            'pimpinan_proyek' => 'required',
            'status' => 'required',
            'tanggal_estimasi' => 'required',
            'tim' => 'required',
            'nama_tugas' => 'required',
            'nilai' => 'required',
        ],
        [
            'customer.required' => 'Harus diisi',
            'nama_proyek.required' => 'Harus diisi',
            'nilai_proyek.required' => 'Harus diisi',
            'termin.required' => 'Harus diisi',
            'pimpinan_proyek.required' => 'Harus diisi',
            'status.required' => 'Harus diisi',
            'tanggal_estimasi.required' => 'Harus diisi',   
            'tim.required' => 'Harus diisi',  
            'nama_tugas.required' => 'Harus diisi',    
            'nilai.required' => 'Harus diisi',           
        ]);
       
        return $request;
    }
    public function _validationsub(Request $request){
        return $request->all();
       $validation = $request->validate([
            
            'nama_proyek' => 'required',
            'tim' => 'required',
            'nama_tugas' => 'required',
            'nilai' => 'required',
        ],
        [           
            'nilai_proyek.required' => 'Harus diisi',             
            'tim.required' => 'Harus diisi',  
            'nama_tugas.required' => 'Harus diisi',    
            'nilai.required' => 'Harus diisi',           
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
        $proyek = \App\Models\Proyek::all();
        return view('proyeks.addproyek', compact('proyek','worker'));
        // return view('proyeks.addproyek', compact('worker'));
        // $data_proyek = \App\Models\Proyek::all();
        // return view('proyeks.addproyek',['data_proyek'=>$data_proyek]);
     
    }

    //menyimpan form addproyek
    public function simpan(Request $request){      
         $this->_validation($request);
         
         \App\Models\Proyek::create($request->all());
         return redirect ('/proyek')->with('sukses','Data Berhasil Diinput');
        // return $request->all();
    }

    //menyimpan form editproyek 
    public function edit ($id){     
         
        $worker = Worker::all();       
        $proyek = \App\Models\Proyek::find($id);
        return view('proyeks.editproyek', compact('proyek','worker'));
        // return view ('proyeks.editproyek',['proyek' => $proyek ]);   
   }

   //update proyek
   public function update (Request $request, $id){     
     
    $this->_validation($request);

    $proyek = \App\Models\Proyek::find($id);
    $proyek->update($request->all());
    return redirect()->route('detailproyek', $id)->with('sukses','Data Berhasil Diupdate');
    // return redirect()->back()->with('sukses','Data Berhasil Diupdate');
    // return redirect('/proyek')->with('sukses','Data Berhasil Diupdate');
    }

    //mellihat Hapus proyek 
    public function delete ($id){      
     
        $proyek = \App\Models\Proyek::find($id);
        $proyek -> delete($proyek);
        return redirect('/proyek')->with('sukses','Data Berhasil Dihapus');
    }
    //mellihat detail proyek dan sub proyek
    public function detail ($id){             
        
        $data_worker = \App\Models\Worker::all();
        $proyek = \App\Models\Proyek::find($id);
        $dropproyek = \App\Models\Proyek::all();
        // dd($worker);
        return view('proyeks.detailproyek', compact('proyek','data_worker','dropproyek')); 
        // return view ('proyeks.detailproyek',['proyek'=>$proyek,'worker'=>worker]);  
        
   }
    //menampilkan form add subproyek    
    public function addsubproyek (Request $request,$idproyek){  
    //    dd($request->all());
        $proyek = \App\Models\Proyek::find($idproyek);     
        $proyek->worker()->attach($request->worker,[
        'nama_subproyek'=>$request->nama_subproyek,
        'nilai_subproyek'=>$request->nilai_subproyek,
        'deskripsi'=>$request->deskripsi,
        'progres'=>$request->progres]);
        return redirect('proyek/',$idproyek.'/detailproyek')-> with('sukses','Data Berhasil Diinput'); 
    }

    // public function simpansubproyek (Request $request){  
    //     $this->_validation($request); 
    //     \App\Models\proyek::create($request->all())   
    //     $subproyek = Subproyek::all();
    //     return redirect ('/proyek')->with('sukses','Data Berhasil Diinput'); 
    // }
    
  

}
