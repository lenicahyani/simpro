<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LapprogresController;
use App\Http\Controllers\SubproyekController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\OtentikasiController;
use App\Http\Controllers\UploadController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//registrasi
Route::get('/registrasi', [OtentikasiController::class, 'registrasi'])->name('registrasi');
Route::post('/simpanregistrasi', [OtentikasiController::class, 'simpanregistrasi'])->name('simpanregistrasi');

//login 
Route::get('/login', [OtentikasiController::class, 'index'])->name('login');
Route::post('login', [OtentikasiController::class, 'login'])->name('login');

//logout
Route::get('logout', [OtentikasiController::class, 'logout'])->name('logout');

//membatasi hak akses
Route::group(['middleware' =>['auth']], function() {

    Route::get('/', function () {
        return view('home');
    });

// Route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route Proyek
Route::get('/proyek', [ProyekController::class, 'index'])->name('proyek');
Route::get('/proyek/add', [ProyekController::class, 'add'])->name('addproyek');
Route::post('/proyek/simpan', [ProyekController::class, 'simpan'])->name('simpanproyek');
Route::get('/proyek/{id}/delete', [ProyekController::class, 'delete'])->name('deleteproyek');
Route::get('/proyek/{id}/edit', [ProyekController::class, 'edit'])->name('editproyek');
Route::post('/proyek/{id}/update', [ProyekController::class, 'update'])->name('updateproyek');
Route::get('/proyek/{id}/detail', [ProyekController::class, 'detail'])->name('detailproyek');

// Route Subproyek
Route::post('/proyek/{id}/addsubproyek', [ProyekController::class, 'addsubproyek'])->name('addsubproyek');
Route::get('/proyek/{id}/{id_pro}/editsubproyek', [ProyekController::class, 'editsubproyek'])->name('editsubproyek');
Route::post('/proyek/{id}/updatesubproyek', [ProyekController::class, 'updatesubproyek'])->name('updatesubproyek');
Route::get('/proyek/{id}/{idworker}/deletesubproyek', [ProyekController::class, 'deletesubproyek'])->name('deletesubproyek');
// uploaddoc
Route::get('/proyek/{id}/{id_pro}/uploaddoc', [ProyekController::class, 'uploaddoc'])->name('uploaddoc');
Route::post('/proyek/{id}/updateupload', [ProyekController::class, 'updateupload'])->name('updateupload');


Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
Route::post('/upload/proses', [UploadController::class, 'proses_upload'])->name('proses');

//route upload subproyek
Route::get('/proyek/{id}/{id_pro}/addupload', [ProyekController::class, 'addupload'])->name('addupload');
Route::post('/proyek/{id}/updateupload', [ProyekController::class, 'updateupload'])->name('updateupload');
Route::post('/proyek/{id}/{id_pro}/download/{upload}', [ProyekController::class, 'download'])->name('download');

//Route worker
Route::get('/worker', [WorkerController::class, 'index'])->name('worker');
Route::get('/worker/add', [WorkerController::class, 'add'])->name('addworker');
Route::post('/worker/simpan', [WorkerController::class, 'simpan'])->name('simpanworker');
Route::get('/worker/{id}/delete', [WorkerController::class, 'delete'])->name('deleteworker');
Route::get('/worker/{id}/edit', [WorkerController::class, 'edit'])->name('editworker');
Route::post('/worker/{id}', [WorkerController::class, 'update'])->name('updateworker');


// Route Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/customer/add', [CustomerController::class, 'add'])->name('addcustomer');
Route::post('/customer/simpan', [CustomerController::class, 'simpan'])->name('simpancustomer');
Route::get('/customer/{id}/delete', [CustomerController::class, 'delete'])->name('deletecustomer');
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('editcustomer');
Route::post('/customer/{id}', [CustomerController::class, 'update'])->name('updatecustomer');

// Route Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
Route::get('/pembayaran/add', [PembayaranController::class, 'add'])->name('addpembayaran');
Route::post('/pembayaran/simpan', [PembayaranController::class, 'simpan'])->name('simpanpembayaran');
Route::get('/pembayaran/{id}/delete', [PembayaranController::class, 'delete'])->name('deletepembayaran');
Route::get('/pembayaran/{id}/edit', [PembayaranController::class, 'edit'])->name('editpembayaran');
Route::post('/pembayaran/{id}', [PembayaranController::class, 'update'])->name('updatepembayaran');

// Route Gaji
Route::get('/indexgaji', [PembayaranController::class, 'indexgaji'])->name('indexgaji');
Route::get('/indexgaji/{id}/detailgaji', [PembayaranController::class, 'gaji'])->name('detailgaji');
// Route::get('/gaji', [PembayaranController::class, 'gaji'])->name('gaji');
Route::get('/indexgaji/{id}/{id_sub}/editgaji', [PembayaranController::class, 'editgaji'])->name('editgaji');
Route::post('/indexgaji/{id}/simpangaji', [PembayaranController::class, 'simpangaji'])->name('simpangaji');
Route::get('/gaji/{id}/deletegaji', [PembayaranController::class, 'deletegaji'])->name('deletegaji');
Route::post('/indexgaji/{id}', [PembayaranController::class, 'updategaji'])->name('updategaji');

});