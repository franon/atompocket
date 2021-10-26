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
}
