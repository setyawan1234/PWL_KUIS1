<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/customer', [App\Http\Controllers\PelangganController::class, 'pelanggan'])->name('pelanggan');

Route::get('/employee', [App\Http\Controllers\PegawaiController::class, 'pegawai'])->name('pegawai');

Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'supplier'])->name('supplier');
