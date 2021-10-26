@extends('layouts.master')

@section('title', 'Dompet Fran - Laporan Transaksi')

@section('content')
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Laporan Transaksi </h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Laporan</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Laporan Transaksi</a></li>
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
                            <h2 class="card-header-title">Laporan Transaksi</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Transaksi</h5>
                        <div class="card-body">
                            <form method="POST" action="{{ route('transaksi.laporan-proses') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="tanggalawal" class="col-form-label">Tanggal Awal</label>
                                        <input id="tanggalawal" type="date" class="form-control col-sm" name="tanggalawal">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="tanggalakhir" class="col-form-label">Tanggal Akhir</label>
                                        <input id="tanggalakhir" type="date" class="form-control col-sm" name="tanggalakhir">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="transaksi_status" class="col-form-label">Transaksi Status</label>
                                        <br>
                                        <input type="checkbox" name="transaksi_status[]" value="masuk" id="transaksi_status">Masuk
                                        <br>
                                        <input type="checkbox" name="transaksi_status[]" value="keluar" id="transaksi_status">Keluar
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="kategori">Kategori</label>
                                        <select name="kategori" id="kategori" class="form-control col-md-6">
                                            <option value="0">Semua</option>
                                            <option value="1"selected >Aktif</option>
                                            <option value="2">Tidak Aktif</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="dompet"> Dompet</label>
                                        <select name="dompet" id="dompet" class="form-control col-md-6">
                                            <option value="0">Semua</option>
                                            <option value="1"selected >Aktif</option>
                                            <option value="2">Tidak Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" name="laporan" value="web" class="btn btn-primary">Buat Laporan</button>
                                <button type="submit" name="laporan" value="excel" class="btn btn-success">Buat ke Excel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection