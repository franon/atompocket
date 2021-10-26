<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\master\DompetController;
use App\Http\Controllers\master\KategoriController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[Dashboard::class,'index'])->name('dashboard');

Route::prefix('master')->name('master.')->group(function () {
    Route::get('dompet', [DompetController::class,'index'])->name('dompet');
    Route::get('dompet/tambah', [DompetController::class,'formStore'])->name('dompet-tambah');
    Route::post('dompet/tambah/proses', [DompetController::class,'store'])->name('dompet-tambah-proses');
    Route::post('dompet/ubah/proses', [DompetController::class, 'update'])->name('dompet-ubah-proses');
    Route::get('dompet/ubah/{id}', [DompetController::class,'formUpdate'])->name('dompet-ubah');

    Route::get('kategori',[KategoriController::class,'index'])->name('kategori');
});
