<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DompetKeluarController extends Controller
{
    public $transaksi;
    public function __construct()
    {
        $this->transaksi = new Transaksi();
    }

    public function index(){
        return view('dompet.keluar.keluar',['dompetkeluars'=>$this->transaksi->dompetKeluar()]);
    }

    public function formStore(){
        return view('dompet.keluar.tambah');
    }

    public function store(){
        echo "wow";
    }
}
