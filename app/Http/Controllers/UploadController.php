<?php

namespace App\Http\Controllers;

use App\Models\Uploadfile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
		$upload = Uploadfile::get();
		return view('uploads.upload',['upload' => $upload]);
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = $file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads';
		$file->move($tujuan_upload,$nama_file);
 
		Uploadfile::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
	}
}