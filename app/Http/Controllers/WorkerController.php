<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
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
