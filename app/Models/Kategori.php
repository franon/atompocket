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

    public function getDataKategori(){

        $data = Kategori::with('kategori_dompet_status')->orderBy('nama')->paginate(10);
        return $data;
    }

    public function getDataKategoriSpesific($id){
        $data = Kategori::with('kategori_dompet_status')->where('kategori.id','=',$id)->first();
        return $data;
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
