@extends('layouts.master')

@section('title', 'Dompet Fran - Dompet Tambah')

@section('content')
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Dompet </h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Master</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dompet</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tambah Data</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h2 class="card-header-title">Dompet</h2> 
                            <div class="toolbar ml-auto">
                                <div class="btn-group">
                                    <a href="{{ route('master.dompet') }}" class="btn btn-primary">Kelola Dompet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Tambah Data</h5>
                        <div class="card-body">
                            <form method="POST" action="{{ route('master.dompet-tambah-proses') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama" class="col-form-label">Nama</label>
                                        <input id="nama" type="text" class="form-control col-sm" name="nama">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="referensi" class="col-form-label">Referensi</label>
                                        <input id="referensi" type="text" class="form-control col-sm" name="referensi">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status_id" id="status" class="form-control col-md-6">
                                        <option value="1">Aktif</option>
                                        <option value="2">Tidak Aktif</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection