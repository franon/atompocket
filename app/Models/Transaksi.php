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
        // return $this->hasOne(Dompet::class,'id','dompet_id');
        return $this->hasOne(Dompet::class);
    }

    public function transaksi_kategori(){
        // return $this->hasOne(Kategori::class,'id','kategori_id');
        return $this->hasOne(Kategori::class);
    }

    public function transaksi_status(){
        // return $this->hasOne(Transaksi_Status::class,'id','status_id');
        return $this->hasOne(Transaksi_Status::class);
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
            $query->whereIn('transaksi_status.id',$data['transaksi_status']);
            if ($data['dompet']!='semua' && $data['kategori']!='semua'){
                $result = $query->where([
                            ['kategori_id','=',$data['kategori']],
                            ['dompet_id','=',$data['dompet']],
                        ])->get();
                return $result;
            }

            $result = $this->filterKategoriAndDompet($query,$data);
            return $result->get();
        }else{
            $query->where('transaksi_status.id',$data['transaksi_status']);
            if ($data['dompet']!='semua' && $data['kategori']!='semua'){
                $result = $query->where([
                            ['kategori_id','=',$data['kategori']],
                            ['dompet_id','=',$data['dompet']],
                        ])->get();
                return $result;
            }

            $result = $this->filterKategoriAndDompet($query,$data);
            return $result->get();
        }
    }

    private function filterKategoriAndDompet($query,$data){
        if ($data['kategori']=='semua'){
            if ($data['dompet']=='semua') {
                return $query;
            }else{
                return $query->where('dompet_id','=',$data['dompet']);
            }
        }else{
            if ($data['dompet']=='semua') {
                return $query->where('kategori_id','=',$data['kategori']);
            }else{
                return false;
            }
        }
    }
}
