<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dompet_Status;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "kategori";
    protected $primaryKey = "id";
    protected $guarded = ['id'];

    public function kategori_dompet_status(){
        return $this->hasOne(Dompet_Status::class,'id','status_id');
    }

    public function kategoriRaw(){
        $data = Kategori::with('kategori_dompet_status');
        return $data;
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function getDataKategori(){
        return $this->kategoriRaw()->orderBy('nama')->get();
    }

    public function getDataKategoriActive(){
        return $this->kategoriRaw()->orderBy('nama')->where('status_id','1')->get();
    }
    public function paginate(){
        return $this->kategoriRaw()->paginate(10);
    }

    public function getDataKategoriSpesific($id){
        return $this->where('kategori.id','=',$id)->first();
    }

    public function updateData($id,$data){
        $affected = Kategori::where('id',$id)->update($data);
        return $affected;
    }

    public function storeData($data){
        $inserted = Kategori::create($data);
        return $inserted;
    }
}
