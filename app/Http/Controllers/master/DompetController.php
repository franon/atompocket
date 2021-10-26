<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use App\Http\Requests\DompetRequest;
use App\Models\Dompet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DompetController extends Controller
{
    public $dompet;
    public function __construct()
    {
        $this->dompet = new Dompet();
    }
    public function index(){
        return view('dompet.dompet',['dompets'=>$this->dompet->paginate()]);
    }

    public function formUpdate($id){
        return view('dompet.dompet-ubah',['dompetspesifik'=>$this->dompet->getDataDompetSpesific($id)]);
    }

    public function update(DompetRequest $request){
        $validated = $request->validated();
        $id = $request->id;
        $this->dompet->updateData($id,$validated);
        return redirect()->route('master.dompet');
    }

    public function formStore(){
        return view('dompet.dompet-tambah');
    }

    public function store(DompetRequest $request){
        $validated = $request->validated();
        $this->dompet->storeData($validated);
        return redirect()->route('master.dompet');
    }
}
