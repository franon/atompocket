<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\laporan\LaporanTransaksiController;
use App\Http\Controllers\master\DompetController;
use App\Http\Controllers\master\KategoriController;
use App\Http\Controllers\transaksi\DompetKeluarController;
use App\Http\Controllers\transaksi\DompetMasukController;
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
   
// });

Route::get('/',[Dashboard::class,'index'])->name('dashboard');

Route::prefix('master')->name('master.')->group(function () {
    Route::prefix('dompet')->name('dompet.')->group(function () {
        Route::get('/dashboard', [DompetController::class,'index'])->name('dompet');
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

    // Route::get('kategori',[KategoriController::class,'index'])->name('kategori');
});

Route::prefix('transaksi')->name('transaksi.')->group(function () {
    Route::prefix('dompet/masuk')->name('dompetmasuk.')->group(function () {
        Route::get('/', [DompetMasukController::class,'index'])->name('dompetmasuk');
        Route::get('tambah', [DompetMasukController::class,'formStore'])->name('tambah');
        Route::post('tambah/proses', [DompetMasukController::class,'store'])->name('tambah-proses');
    });

    Route::prefix('dompet/keluar')->name('dompetkeluar.')->group(function () {
        Route::get('/', [DompetKeluarController::class,'index'])->name('dompetkeluar');
        Route::get('tambah', [DompetKeluarController::class,'formStore'])->name('tambah');
        Route::post('tambah/proses', [DompetKeluarController::class,'store'])->name('tambah-proses');
    });
});

Route::prefix('transaksi')->name('transaksi.')->group(function () {
    Route::get('laporan', [LaporanTransaksiController::class,'index'])->name('laporan');
    Route::post('laporan/proses', [LaporanTransaksiController::class,'getData'])->name('laporan-proses');
});
