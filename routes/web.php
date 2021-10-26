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
    Route::prefix('dompet')->name('dompet.')->group(function () {
        Route::get('/', [DompetController::class,'index'])->name('dompet');
        Route::get('tambah', [DompetController::class,'formStore'])->name('tambah');
        Route::post('tambah/proses', [DompetController::class,'store'])->name('tambah-proses');
        Route::post('ubah/proses', [DompetController::class, 'update'])->name('ubah-proses');
        Route::get('ubah/{id}', [DompetController::class,'formUpdate'])->name('ubah');
    });
    

    Route::prefix('kategori')->name('kategori.')->group(function () {
        Route::get('/', [KategoriController::class,'index'])->name('kategori');
        Route::get('tambah', [KategoriController::class,'formStore'])->name('tambah');
        Route::post('tambah/proses', [KategoriController::class,'store'])->name('tambah-proses');
        Route::post('ubah/proses', [KategoriController::class, 'update'])->name('ubah-proses');
        Route::get('ubah/{id}', [KategoriController::class,'formUpdate'])->name('ubah');     
    });

    Route::get('kategori',[KategoriController::class,'index'])->name('kategori');
});
