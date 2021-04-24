<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LapprogresController;
use App\Http\Controllers\SubproyekController;
use App\Http\Controllers\LappembayaranproyekController;


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
Route::post('/proyek/{id}', [ProyekController::class, 'update'])->name('updateproyek');
Route::get('/proyek/{id}/detail', [ProyekController::class, 'detail'])->name('detailproyek');

// Route Subproyek
Route::post('/proyek/{id}/addsubproyek', [ProyekController::class, 'addsubproyek'])->name('addsubproyek');

// Route::get('/proyek/{id}/addsubproyek', [ProyekController::class, 'addsubproyek'])->name('addsubproyek');


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

// // Route SubProyek
// Route::get('/subproyek/add', [SubproyekController::class, 'add'])->name('addsubproyek');
// Route::post('/subproyek/simpan', [SubproyekController::class, 'simpan'])->name('simpansubproyek');
// Route::get('/customer/{id}/delete', [SubproyekController::class, 'delete'])->name('deletesubproyek');
// Route::get('/subproyek/{id}/edit', [SubproyekController::class, 'edit'])->name('editsubproyek');
// Route::post('/subproyek/{id}', [SubproyekController::class, 'update'])->name('updatesubproyek');

// Route Laporan
// Route::get('/lapgaji',[App\Http\Controllers\LaporanController::class, 'lapgaji'])->name('lapgaji');
// Route::get('/lapprogres',[App\Http\Controllers\LapprogresController::class, 'lapprogres'])->name('lapprogres');
// Route::get('/lapproyek',[App\Http\Controllers\LapproyekController::class, 'lapproyek'])->name('lapproyek');
// Route::get('/lappembayaranproyek',[App\Http\Controllers\lappembayaranproyekController::class, 'lappembayaranproyek'])->name('lappembayaranproyek');
// Route::get('/editlapprogres', [LapprogresController::class,'edit'])->name('editlapprogres');

// // Route Lapprogres
// Route::get('/lapprogres', [LapprogresController::class, 'index'])->name('lapprogres');
// Route::get('/lapprogres/add', [LapprogresController::class, 'add'])->name('addlapprogres');
// Route::post('/lapprogres/simpan', [LapprogresController::class, 'simpan'])->name('simpanlapprogres');
// Route::delete('/lapprogres/delete/{id}', [LapprogresController::class, 'delete'])->name('deletelapprogres');
// Route::get('/lapprogres/{id}/edit', [LapprogresController::class, 'edit'])->name('editlapprogres');
// Route::patch('/lapprogres/{id}', [LapprogresController::class, 'update'])->name('updatelapprogres');
