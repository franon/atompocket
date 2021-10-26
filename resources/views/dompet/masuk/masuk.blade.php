@extends('layouts.master')

@section('title','Dompet Fran - Dompet Masuk')

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
                            <h2 class="card-header-title">Dompet masuk</h2>
                            <div class="toolbar ml-auto">
                                <div class="btn-group">
                                    <a href="{{ route('transaksi.dompetmasuk.tambah') }}" class="btn btn-primary btn-sm">Buat Baru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Dompet Masuk</h5>
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
                                    @foreach ($dompetmasuks as $id => $dompetmasuk)
                                    <tr>
                                        <th scope="row">{{$dompetmasuks->firstItem()+$id}}</th>
                                        <td>{{ $dompetmasuk->tanggal }}</td>
                                        <td>{{ $dompetmasuk->kode }}</td>
                                        <td>{{ $dompetmasuk->deskripsi }}</td>
                                        <td>{{ $dompetmasuk->transaksi_kategori->nama }}</td>
                                        <td>{{ $dompetmasuk->nilai }}</td>
                                        <td>{{ $dompetmasuk->transaksi_dompet->nama }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    {{$dompetmasuks->links()}}
                </div>
            </div>
@endsection