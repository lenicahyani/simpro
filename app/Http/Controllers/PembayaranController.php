<?php

namespace App\Http\Controllers;
use App\Models\Pembayaran;
use App\Models\Worker;
use App\Models\Subproyek;
use App\Models\Customer;
use App\Models\Proyek;
use DB;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function _validation(Request $request){
        $validation = $request->validate([
            'customer' => 'required',
            'nama_proyek' => 'required',
            'tanggal_bayar' => 'required',
            'total_bayar' => 'required',                  
        ],
        [
            'customer.required' => 'Harus diisi',
            'nama_proyek.required' => 'Harus diisi',
            'tanggal_bayar.required' => 'Harus diisi',
            'total_bayar.required' => 'Harus diisi', 
            'total_bayar.required' => 'Harus diisi Angka ',  
        ]);
        return $request;
    }

    //tampilkan data pembayaran
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayarans.pembayaran',['pembayaran'=>$pembayaran]);        
    }

    //menyimpan form addpembayaran
    public function simpan(Request $request){ 

        Pembayaran::create($request->all());
        return redirect ('/pembayaran')->with('sukses','Data Berhasil Diinput');
        // return $request->all();
    }

    public function indexgaji()
    {
        $proyek = Proyek::all();
        return view('gaji.indexgaji',['proyek'=>$proyek]);        
    }
    //tampilkan data gaji
    public function gaji($id)
    {
        
        // $gaji = DB::table('proyek_worker')
        // ->join('worker','proyek_worker.worker_id', '=', 'worker.id')
        // ->select('worker.nama_worker','proyek_worker.*')
        // ->get();
        $detailgaji = DB::table('proyek')
        ->join('proyek_worker','proyek.id', '=', 'proyek_worker.proyek_id')
        ->join('worker','proyek_worker.worker_id', '=', 'worker.id')
        // ->join('proyek_worker','worker.id', '=', 'proyek_worker.worker_id')
        ->where('proyek.id', '=', $id)
        ->select('proyek_worker.id AS id_sub','worker.nama_worker','proyek.id','proyek.nama_proyek',
        'proyek_worker.nama_subproyek','proyek_worker.nilai_subproyek',
        'proyek_worker.deskripsi','proyek_worker.gaji', 'proyek_worker.progres')
        // ->select('*')
        ->get();
       
        // $gaj = Subproyek::paginate(5);
        // $sub1 = Subproyek::all($id);
        // dd($detailgaji);
        return view('gaji.detailgaji', compact('detailgaji'));           
    }
     
    //memampilkan form addpembayran
    public function add(){      
        
        $pembayaran = Pembayaran::all();
        $customer = Customer::all();
        $proyek = Proyek::all();
        return view('pembayarans.addpembayaran', compact('proyek','customer','pembayaran'));       
    }

    
   //menyimpan form editpembayaran
   public function edit ($id){   
    // kurang lengkap edit pembayaran
    $customer = Customer::all();
    $proyek = Proyek::all();
    $pembayaran = Pembayaran::find($id);
    // dd($id);
     return view ('pembayarans.editpembayaran', compact('proyek','customer','pembayaran'));  
    }
    
     //menyimpan form editpembayaran
   public function editgaji ($id,$id_sub){   
   
    $gaji = Subproyek::find($id_sub);
    $nproyek = Proyek::all();
    // dd($id_sub);
    return view('gaji.editgaji', compact('gaji','nproyek','id')); 
}
    //update Gaji
    public function updategaji (Request $request, $id_sub){     
        // $this->_validation($request);
       
        $gaji = Subproyek::find($id_sub);
        $id_kgji = $request->id_kgji;
        // dd($id_kgji);
        // echo $id_kgji;
        $gaji->update($request->all());
        // dd($gaji);
        // return redirect()->back()->with('suksess','Data Berhasil Diupdate');
        return redirect()->to('/indexgaji/'.$id_kgji.'/detailgaji')->with('sukses','Data Berhasil Diupdate');
        // return view ('gaji.detailgaji',['proyek' => $proyek ]);       
    }

    //update Pembayaran
    public function update (Request $request, $id){     
    // $this->_validation($request);
    $pembayaran = Pembayaran::find($id);
    $pembayaran->update($request->all());
    return redirect('/pembayaran')->with('sukses','Data Berhasil Diupdate');
    }

    // Hapus Pembayaran 
    public function delete ($id){      
            
        $pembayaran = Pembayaran::find($id);
        $pembayaran -> delete($pembayaran);
        return redirect('/pembayaran')->with('delete','Data Berhasil Dihapus');
    }
    // Hapus Pembayaran 
    public function deletegaji ($id){      
            
        $gaji = Subproyek::find($id);
        $gaji -> delete($gaji);
        return redirect('/indexgaji')->with('delete','Data Berhasil Dihapus');
    }
    

}
