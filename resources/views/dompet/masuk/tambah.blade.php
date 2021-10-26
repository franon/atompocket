@extends('layouts.master')

@section('title', 'Dompet Fran - Tambah')

@section('content')
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Dompet Masuk </h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Transaksi</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dompet Masuk</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tambah</a></li>
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
                            <h2 class="card-header-title">Dompet Masuk</h2> 
                            <div class="toolbar ml-auto">
                                <div class="btn-group">
                                    <a href="{{ route('transaksi.dompetmasuk.dompetmasuk') }}" class="btn btn-primary">Kelola Dompet Masuk</a>
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
                            <form method="POST" action="{{ route('transaksi.dompetmasuk.tambah-proses') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="kode" class="col-form-label">Kode</label>
                                        <input id="kode" type="text" class="form-control col-sm" name="kode" readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="tanggal" class="col-form-label">Tanggal</label>
                                        <input id="tanggal" type="date" class="form-control col-sm" name="tanggal" readonly>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="kategori" class="col-form-label">Kategori</label>
                                        <input id="kategori" type="text" class="form-control col-sm" name="kategori">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="dompet" class="col-form-label">Dompet:*</label>
                                        <input id="dompet" type="text" class="form-control col-sm" name="dompet">
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