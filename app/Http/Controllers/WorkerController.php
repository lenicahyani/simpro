<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class WorkerController extends Controller
{    
    public function _validation(Request $request){
    $validation = $request->validate([
        'nama_worker' => 'required',
        'role' => 'required',
        'alamat' => 'required',
        'status' => 'required',
        'email' => 'required',
        'telepon' => 'required|max:13',        
    ],
    [
        'nama_worker.required' => 'Harus diisi',
        'role.required' => 'Harus diisi',
        'alamat.required' => 'Harus diisi',
        'status.required' => 'Harus diisi',
        'email.required' => 'Harus diisi',
        'telepon.required' => 'Harus diisi', 
        'telepon.max' => 'Maximal 13 Digit',                  
    ]);
    return $request;
}

    //tampilkan data worker
    public function index(){
        
        $data_worker = \App\Models\Worker::all();
        return view('workers.worker',['data_worker'=>$data_worker]);
    
    }
    //memampilkan form addworker
    public function add(){      
        
        $data_worker = \App\Models\Worker::all();
        return view('workers.addworker',['data_worker'=>$data_worker]);
     
    }

    //menyimpan form addworker
    public function simpan(Request $request){      
        $this->_validation($request);
         \App\Models\Worker::create($request->all());
         return redirect ('/worker')->with('sukses','Data Berhasil Diinput');
        // return $request->all();
    }

    //menyimpan form editworker 
    public function edit ($id){      
     
        $worker = \App\Models\Worker::find($id);
         return view ('workers.editworker',['worker' => $worker ]);   
   }

   //update worker
   public function update (Request $request, $id){     
    $this->_validation($request);
    $worker = \App\Models\Worker::find($id);
    $worker->update($request->all());
    return redirect('/worker')->with('sukses','Data Berhasil Diupdate');
    }

    //mellihat Hapus worker 
    public function delete ($id){      
     
        $worker = \App\Models\Worker::find($id);
        $worker -> delete($worker);
        return redirect('/worker')->with('sukses','Data Berhasil Dihapus');
    }
    //mellihat detail worker 
    public function detail ($id){      
     
        $worker = \App\Models\Worker::find($id);
         return view ('workers.detailworker',['worker' => $worker ]);   
   }
   

}
