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

    public function dompet(){
        return $this->belongsTo(Dompet::class);
    }

    public function dompetRaw(){
        $data = Dompet::with('dompet_status');
        return $data;
    }

    public function paginate(){
        return $this->dompetRaw()->paginate(10);
    }

    public function getDataDompet(){
        return $this->dompetRaw()->orderBy('nama')->get();
    }

    public function getDataDompetActive(){
        return $this->dompetRaw()->orderBy('nama')->where('status_id','1')->get();
    }

    public function getDataDompetSpesific($id){
        return $this->dompetRaw()->where('id','=',$id)->first();
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
