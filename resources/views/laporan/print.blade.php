<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/concept/libs/css/style.css') }} ">
    <title>Print</title>
</head>
<body>
    <div class="table-responsive">
        <table class="table">
          <thead class="table-success">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Kode</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Dompet</th>
              <th scope="col">Kategori</th>
              <th scope="col">Nilai</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($laporan as $id => $lap)
              <tr>
                <th scope="row">{{$id+1}}</th>
                <td>{{$lap->tanggal}}</td>
                <td>{{$lap->kode}}</td>
                <td>{{$lap->deskripsi}}</td>
                <td>{{$lap->transaksi_dompet->nama}}</td>
                <td>{{$lap->transaksi_kategori->nama}}</td>
                <td>{{$lap->nilai}}</td>
              </tr>
              @endforeach
        </tbody>
        </table>
      </div>
      <button id="printPageButton" onclick="window.print()" class="btn btn-primary">Print</button>
      <script src="{{ asset('assets/vendor/jquery/jquery-3.6.0.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
</body>
</html>
