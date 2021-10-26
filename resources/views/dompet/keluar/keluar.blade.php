@extends('layouts.master')

@section('title','Dompet Fran - Dompet Keluar')

@section('content')
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Dompet Keluar </h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Transaksi</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dompet Keluar</a></li>
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
                            <h2 class="card-header-title">Dompet Keluar</h2>
                            <div class="toolbar ml-auto">
                                <div class="btn-group">
                                    <a href="{{ route('transaksi.dompetkeluar.tambah') }}" class="btn btn-primary btn-sm">Buat Baru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Dompet Keluar</h5>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">TANGGAL</th>
                                        <th scope="col">KODE</th>
                                        <th scope="col">DESKRIPSI</th>
                                        <th scope="col">KATEGORI</th>
                                        <th scope="col">NILAI</th>
                                        <th scope="col">DOMPET</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dompetkeluars as $id => $dompetkeluar)
                                    <tr>
                                        <th scope="row">{{$dompetkeluars->firstItem()+$id}}</th>
                                        <td>{{ $dompetkeluar->tanggal }}</td>
                                        <td>{{ $dompetkeluar->kode }}</td>
                                        <td>{{ $dompetkeluar->deskripsi }}</td>
                                        <td>{{ $dompetkeluar->transaksi_kategori->nama }}</td>
                                        <td>{{ $dompetkeluar->nilai }}</td>
                                        <td>{{ $dompetkeluar->transaksi_dompet->nama }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    {{$dompetkeluars->links()}}
                </div>
            </div>
@endsection