<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubproyekController extends Controller
{
     //tampilkan data subproyek
     public function index(){
        
        $data_subproyek = \App\Models\SubProyek::all();
        return view('subproyeks.subproyek',['data_subproyek'=>$data_subproyek]);
    
    }
    
}
