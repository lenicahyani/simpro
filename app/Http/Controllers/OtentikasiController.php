<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class OtentikasiController extends Controller
{
    public function index(){
        return view('otentikasi.login');
    }

    public function login(Request $request){
        
        if (Auth::attempt($request->only('email','password'))){
            return redirect('dashboard');
        }
            
        return redirect('otentikasi.login');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }

    public function registrasi(){
        return view('otentikasi.registrasi');
    }

    public function simpanregistrasi(Request $request){
       
            //dd($request);
            User::create([
                'name'      => $request -> name,
                'email'     => $request -> email,
                'password' => bcrypt($request -> password)
            ]);
            return redirect('/');

      
       
    }
}
