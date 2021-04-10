<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\CustomerController;
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
    return view('dashboard');
});
// Route Worker
Route::get('/worker', [WorkerController::class, 'index'])->name('worker');
Route::get('/worker/add', [WorkerController::class, 'add'])->name('addworker');
Route::post('/worker/simpan', [WorkerController::class, 'simpan'])->name('simpanworker');
Route::delete('/worker/delete/{id}', [WorkerController::class, 'delete'])->name('deleteworker');
Route::get('/worker/{id}/edit', [WorkerController::class, 'edit'])->name('editworker');
Route::patch('/worker/{id}', [WorkerController::class, 'update'])->name('updateworker');
// Route Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/customer/add', [CustomerController::class, 'add'])->name('addcustomer');
Route::post('/customer/simpan', [CustomerController::class, 'simpan'])->name('simpancustomer');
Route::delete('/customer/delete/{id}', [CustomerController::class, 'delete'])->name('deletecustomer');
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('editcustomer');
Route::patch('/customer/{id}', [CustomerController::class, 'update'])->name('updatecustomer');
