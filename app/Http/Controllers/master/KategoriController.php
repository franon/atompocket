<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public $kategori;
    public function __construct()
    {
        $this->kategori = new Kategori();
    }
    public function index(){
        return view('kategori.kategori',['kategoris'=>$this->kategori->getDataKategori()]);
    }

    public function formUpdate($id){
        return view('kategori.kategori.ubah',['dompetspesifik'=>$this->kategori->getDataDompetSpesific($id)]);
    }

    public function update(KategoriRequest $request){
        $validated = $request->validated();
        $id = $request->id;
        $this->dompet->updateData($id,$validated);
        return redirect()->route('master.dompet');
    }

    public function formStore(){
        return view('dompet.dompet-tambah');
    }

    public function store(KategoriRequest $request){
        $validated = $request->validated();
        $this->dompet->storeData($validated);
        return redirect()->route('master.dompet');
    }
}
