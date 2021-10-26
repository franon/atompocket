<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "transaksi";
    protected $primaryKey = "id";
    protected $guarded = ['id'];

    public function transaksi_dompet(){
        return $this->hasOne(Dompet::class,'id','dompet_id');
    }

    public function transaksi_kategori(){
        return $this->hasOne(Kategori::class,'id','kategori_id');
    }

    public function transaksi_status(){
        return $this->hasOne(transaksi_status::class,'id','status_id');
    }

    public function dompetMasuk(){
        $data = Transaksi::with(['transaksi_dompet','transaksi_kategori','transaksi_status'])->where('status_id','=','1')->paginate(10);
        return $data;
    }

    public function dompetKeluar(){
        $data = Transaksi::with(['transaksi_dompet','transaksi_kategori','transaksi_status'])->where('status_id','=','2')->paginate(10);
        return $data;
    }

    public function laporanDompet($data){
        $query = Transaksi::with(['transaksi_dompet','transaksi_kategori','transaksi_status'])->whereBetween('transaksi.tanggal',[$data['tanggalawal'],$data['tanggalakhir']]);
        if (count($data['transaksi_status']) > 1) {
            $result = $this->filterKategoriAndDompet($query,$data);
            return $result;
        }else{
            $result = $this->filterKategoriAndDompet($query,$data);
            
            $result = $query->where([
                                ['status_id','=',$data['transaksi_status']],
                                ['kategori_id','=',$data['kategori']],
                                ['dompet_id','=',$data['dompet']],
                            ])->get();
            return $result;
        }
    }

    private function filterKategoriAndDompet($data){
        if ($data['kategori']==0) {
            return $this->filterKategori($data['kategori']);
        }
        if ($data['dompet']==0) {
            return $this->filterDompet($data['dompet']);
        }
        if ($data['dompet'] != 0 && $data['kategori'] !=0){
            $result = $query->where([
                        ['kategori_id','=',$data['kategori']],
                        ['dompet_id','=',$data['dompet']],
                    ])->get();
        return $result;
        }
    }

    private function filterKategori($query,$data){
        $result = $query->where('dompet_id','=',$data['dompet'])
        ->orWhere(function($kueri){
            $kueri->where('kategori_id','1')
                  ->where('kategori_id','2')
        });

        return $result;
    }

    private function filterDompet($query,$dompet){
        $result = $query->where('kategori','=',$data['kategori'])
                                ->orWhere(function($kueri){
                                    $kueri->where('dompet_id','1')
                                          ->where('dompet_id','2')
                                });
        return $result;
    }


}
