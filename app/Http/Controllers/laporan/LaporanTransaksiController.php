<?php

namespace App\Http\Controllers\laporan;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransaksiRequest;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanTransaksiController extends Controller
{
    public $transaksi;
    public function __construct()
    {
        $this->transaksi = new Transaksi();
    }

    public function index(){
        return view('laporan.laporan-transaksi');
    }

    public function getData(TransaksiRequest $request){
        $validated = $request->validated();
        dd($validated,$request->all(),count($validated['transaksi_status']));
        switch ($request->laporan) {
            case 'web':
                dd($this->byWeb($validated));
                break;
            case 'excel':
                break;
            default:
                abort(404);
        }
    }

    public function byWeb($data){
        return $this->transaksi->laporanDompet($data);
    }

    public function byExcel(){
        
    }
}
