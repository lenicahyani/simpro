<?php

namespace App\Http\Controllers;
use App\Models\Pembayaran;
use App\Models\Worker;
use App\Models\Subproyek;
use App\Models\Customer;
use App\Models\Proyek;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function _validation(Request $request){
        $validation = $request->validate([
            'customer' => 'required',
            'nama_proyek' => 'required',
            'termin' => 'required',
            'tanggal_bayar' => 'required',
            'total_bayar' => 'required',                  
        ],
        [
            'customer.required' => 'Harus diisi',
            'nama_proyek.required' => 'Harus diisi',
            'termin.required' => 'Harus diisi',
            'tanggal_bayar.required' => 'Harus diisi',
            'total_bayar.required' => 'Harus diisi', 
            'total_bayar.required' => 'Harus diisi Angka ',  
        ]);
        return $request;
    }

    //tampilkan data pembayaran
    public function index()
    {
        $pembayaran = \App\Models\Pembayaran::all();
        return view('pembayarans.pembayaran',['pembayaran'=>$pembayaran]);        
    }

    //menyimpan form addpembayaran
    public function simpan(Request $request){ 

        Pembayaran::create($request->all());
        return redirect ('/pembayaran')->with('sukses','Data Berhasil Diinput');
        // return $request->all();
    }

    //tampilkan data gaji
    public function gaji()
    {
        $gaji = Subproyek::all();
        $nproyek = Proyek::all();
        return view('gaji.gaji', compact('gaji','nproyek'));           
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

    $customer = Customer::all();
    $proyek = Proyek::all();
    $pembayaran = Pembayaran::find($id);
     return view ('pembayarans.editpembayaran', compact('proyek','customer','pembayaran'));  
    }
    
     //menyimpan form editpembayaran
   public function editgaji ($id){   

    $gaji = Subproyek::find($id);
    $nproyek = Proyek::all();
    return view('gaji.editgaji', compact('gaji','nproyek')); 
}
    //update Gaji
    public function updategaji (Request $request, $id){     
        // $this->_validation($request);
        $gaji = Subproyek::find($id);
        $gaji->update($request->all());
        return redirect('/gaji')->with('sukses','Data Berhasil Diupdate');
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
    // Hapus Pembayaran 
    public function deletegaji ($id){      
            
        $gaji = Subproyek::find($id);
        $gaji -> delete($gaji);
        return redirect('/gaji')->with('sukses','Data Berhasil Dihapus');
    }
    

}
