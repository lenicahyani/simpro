<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //tampilkan data customer
    public function index(){
        
        $data_customer = \App\Models\Customer::all();
        return view('customers.customer',['data_customer'=>$data_customer]);
    
    }
    //memampilkan form addcustomer
    public function add(){      
        
        $data_customer = \App\Models\Customer::all();
        return view('customers.addcustomer',['data_customer'=>$data_customer]);
     
    }

    //menyimpan form addcustomer
    public function simpan(Request $request){      
     
         \App\Models\Customer::create($request->all());
         return redirect ('/customer')->with('sukses','Data Berhasil Diinput');
        // return $request->all();
    }

    //menyimpan form editcustomer 
    public function edit ($id){      
     
        $customer = \App\Models\Customer::find($id);
         return view ('customers.editcustomer',['customer' => $customer ]);   
   }

   //update customer
   public function update (Request $request, $id){     
     
    $customer = \App\Models\Customer::find($id);
    $customer->update($request->all());
    return redirect('/customer')->with('sukses','Data Berhasil Diupdate');
    }

    //mellihat Hapus customer 
    public function delete ($id){      
     
        $customer = \App\Models\Customer::find($id);
        $customer -> delete($customer);
        return redirect('/customer')->with('sukses','Data Berhasil Dihapus');
    }
    //mellihat detail customer 
    public function detail ($id){      
     
        $customer = \App\Models\Customer::find($id);
         return view ('customers.detailcustomer',['customer' => $customer ]);   
   }
   
}
