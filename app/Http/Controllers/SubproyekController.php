<?php

namespace App\Http\Controllers;
use App\Models\Worker;
use App\Models\Subproyek;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SubproyekController extends Controller
{
    
    public function add (){      
            
        // $subproyek = Subproyek::all();
        // $proyek = \App\Models\proyek::find($id);
        return view ('subproyeks.addsubproyek');  
        //  return view('proyeks.addproyek', compact('proyek','worker')); 
    }

}
