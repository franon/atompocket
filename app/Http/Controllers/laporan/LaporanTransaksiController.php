<?php

namespace App\Http\Controllers\laporan;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransaksiRequest;
use App\Models\Dompet;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class LaporanTransaksiController extends Controller
{
    public $transaksi, $dompet, $kategori;
    public function __construct()
    {
        $this->transaksi = new Transaksi();
        $this->dompet = new Dompet();
        $this->kategori = new Kategori();
    }

    public function index(){
        return view('laporan.laporan-transaksi',
        ['dompets'=>$this->dompet->getDataDompetActive(),
        'kategoris'=>$this->kategori->getDataKategoriActive()]);
    }

    public function getData(TransaksiRequest $request){
        $validated = $request->validated();
        // dd($validated,$request->all(),count($validated['transaksi_status']));
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
        dd($this->transaksi->laporanDompet($data));
        return $this->transaksi->laporanDompet($data);
    }

    public function byExcel(){
        
    }
}
