@extends('layouts.master')

@section('title','Dompet Fran - Kategori')

@section('content')
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Kategori </h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Master</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kategori</a></li>
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
                            <h2 class="card-header-title">Kategori</h2>
                            <div class="toolbar ml-auto">
                                <div class="btn-group">
                                    <a href="{{ route('master.kategori.tambah') }}" class="btn btn-primary btn-sm">Buat Baru</a>
                                    <div class="dropdown">
                                        <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                          Total { {{$kategoris->total()}} }
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">Semua</a>
                                          <a class="dropdown-item" href="#">Aktif</a>
                                          <a class="dropdown-item" href="#">Tidak Aktif</a>
                                        </div>
                                      </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Kategori</h5>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">DESKRIPSI</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategoris as $id => $kategori)
                                    <tr>
                                        <th scope="row">{{$kategoris->firstItem()+$id}}</th>
                                        <td>{{ $kategori->nama }}</td>
                                        <td>{{ $kategori->deskripsi }}</td>
                                        <td>{{ $kategori->kategori_dompet_status->nama }}</td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="btn btn-secondary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                </a>
                                              
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                  <a class="dropdown-item" href="#">Detail</a>
                                                  <a class="dropdown-item" href="{{ route('master.kategori.ubah', ['id'=>$kategori->id]) }}">Ubah</a>
                                                  @if($kategori->kategori_dompet_status->id == 1) 
                                                  <a class="dropdown-item" href="#">Tidak Aktif</a>
                                                  @else
                                                  <a class="dropdown-item" href="#">Aktif</a>
                                                  @endif
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    {{$kategoris->links()}}
                </div>
            </div>
@endsection