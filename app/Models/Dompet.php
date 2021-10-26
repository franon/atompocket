<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dompet_Status;

class Dompet extends Model
{
    use HasFactory;

    protected $table = "dompet";
    protected $primaryKey = "id";
    protected $guarded = ['id'];
    // protected $fillable = ['id','nama','referensi','deskripsi','status_id'];

    public function dompet_status(){
        return $this->hasOne(Dompet_Status::class,'id','status_id');
    }

    public function getDataDompet(){

        $data = Dompet::with('dompet_status')->orderBy('nama')->paginate(10);
        return $data;
    }

    public function getDataDompetSpesific($id){
        $data = Dompet::with('dompet_status')->where('id','=',$id)->first();
        return $data;
    }

    public function updateData($id,$data){
        $affected = Dompet::where('id',$id)->update($data);
        return $affected;
    }

    public function storeData($data){
        $inserted = Dompet::create($data);
        return $inserted;
    }
}
