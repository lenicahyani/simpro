<?php

namespace App\Http\Controllers;
use App\Models\Worker;
use App\Models\Proyek;
use App\Models\Customer;
use App\Models\Subproyek;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function _validation(Request $request){
        // return $request->all();
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
        
        $data_proyek = \App\Models\Proyek::paginate(5);
        return view('proyeks.proyek',['data_proyek'=>$data_proyek]);
    
    }
    //memampilkan form addproyek
    public function add(){      
        
        $worker = Worker::all();
        $custom = Customer::all();
        $proyek = \App\Models\Proyek::all();
        return view('proyeks.addproyek', compact('proyek','custom','worker'));
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

    //muncul form editproyek 
    public function edit ($id){     
         
        $custom = Customer::all();
        $worker = Worker::all();       
        $proyek = \App\Models\Proyek::find($id);
        return view('proyeks.editproyek', compact('proyek','worker','custom'));
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

    //mellihat detail proyek dan sub proyek
    public function detail ($id){   
        $data_worker = Worker::all();
        $sub = \App\Models\Subproyek::all();
        $dropproyek = \App\Models\Proyek::all();
        $proyek = \App\Models\Proyek::find($id);
        // dd($subproyek);
        return view('proyeks.detailproyek', compact('proyek','sub','data_worker','dropproyek')); 
        // return view ('proyeks.detailproyek',['proyek'=>$proyek,'worker'=>worker]);  
        
   }
    //menampilkan form add subproyek    
    public function addsubproyek (Request $request,$idproyek){  
    //    dd($request->all());
      //  $this->_validationsub($request);
        
        $proyek = \App\Models\Proyek::find($idproyek); 
        if($proyek->worker()->where('worker_id',$request->worker)->exists()){
            return redirect()->back()->with('error','Anggota Tim Sudah Ada');
        }    
        $proyek->worker()->attach($request->worker,[
        'nama_subproyek'=>$request->nama_subproyek,
        'nilai_subproyek'=>$request->nilai_subproyek,
        'deskripsi'=>$request->deskripsi,
        'progres'=>$request->progres]);        
        return redirect()->back()->with('suksess','Data Berhasil Diinput');
        // return redirect('proyek/'.$idproyek.'/detailproyek')-> with('sukses','Data Berhasil Diinput'); 
    }
    //muncul form editsubproyek 
    public function editsubproyek ($id){  
        // $dd($proyek);
        $worker = Worker::all();
        $proyek = Proyek::all();
        $subproyek = Subproyek::find($id);         
        return view('proyeks.detailproyek', compact('subproyek','worker','proyek'));
        // return redirect()->back()->with('suksess','Data Berhasil Diinput');
   }
    // Hapus proyek 
    public function delete ($id){      
        
        $proyek = \App\Models\Proyek::find($id);
        $proyek -> delete($proyek);
        return redirect('/proyek')->with('sukses','Data Berhasil Dihapus');
}
    // Hapus subproyek 
    public function deletesubproyek ($idproyek, $idworker){      
     
        $proyek = \App\Models\Proyek::find($idproyek);
        $proyek -> worker()->detach($idworker);
        return redirect()->back()->with('suksess','Data Berhasil Dihapus');
    }
  

}
