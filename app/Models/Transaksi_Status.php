<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi_Status extends Model
{
    use HasFactory;

    protected $table = "transaksi_status";
    protected $primaryKey = "id";
    public $incrementing = false;
    // protected $keyType = 'char';
    // protected $guarded = [];

    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }
}
