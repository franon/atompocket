<?php

namespace App\Http\Controllers\transaksi;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DompetMasukController extends Controller
{
    public $transaksi;
    public function __construct()
    {
        $this->transaksi = new Transaksi();
    }

    public function index(){
        return view('dompet.masuk.masuk',['dompetmasuks'=>$this->transaksi->dompetMasuk()]);
    }

    public function formStore(){
        return view('dompet.masuk.tambah');
    }

    public function store(){
        echo "wow";
    }


}
