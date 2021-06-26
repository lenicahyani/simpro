<?php

namespace App\Http\Controllers;
use App\Models\Pembayaran;
use App\Models\Worker;
use App\Models\Proyek;
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
        $pembayaran = Pembayaran::paginate(5);
        return view('pembayarans.pembayaran',['pembayaran'=>$pembayaran]);        
    }
     
    //memampilkan form addpembayran
    public function add(){      
        
        $pembayaran = Pembayaran::all();
        $customer = Customer::all();
        $proyek = Proyek::all();
        $worker = Worker::all();
        return view('pembayarans.addpembayaran', compact('proyek','customer','pembayaran','worker'));       
    }
   //menyimpan form editpembayaran
   public function edit ($id){   

    $customer = Customer::all();
    $proyek = Proyek::all();
    $pembayaran = Pembayaran::find($id);
     return view ('pembayarans.editpembayaran', compact('proyek','customer','pembayaran'));  
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
    return redirect('/pembayaran')->with('sukses','Data Berhasil Dihapus');
}

}
