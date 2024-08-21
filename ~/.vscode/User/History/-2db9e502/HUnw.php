<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir - Laundry</title>
    <link rel="stylesheet" href="{{ asset('assets/custom/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">
</head>
<body class="bg-light">
    <div>
        <nav class="navbar navbar-expand-lg bg-primary  ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="{{ asset('img/icon.jpeg') }}" class="profpic"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link text-white fs-15" aria-current="page" href="{{ route('kasirHome') }}">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fs-15" href="{{ route('kasirOrder') }}">Order Baru</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fs-15" href="#">Pesanan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fs-15" href="#">Kasir</a>
                  </li>
              </div>
            </div>
          </nav>
    </div>
    @if (session('success'))
      <div class="container alert alert-success mt-4">
        <span class="fs-15">{{ session('success') }}</span>
      </div>
    @endif
    <div class="container bg-white shadow p-4 mt-3">
        <h5>Orderan Masuk</h5>
        <span class="fs-15">Order layanan pencucian</span><br>
        <a href="{{ route('tambahOrder') }}" class="btn btn-sm btn-success float-end mb-3"><i class="bi-plus"></i> Tambah order</a>
        <table class="table table-sm table-bordered fs-15 mt-3">
            <tr>
                <th>No.</th>
                <th>Kode Pemesanan</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Pemesanan</th>
                <th>Jenis Cucian</th>
                <th>Jumlah</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            @foreach ($order as $a)
              <tr>
                  <td>1</td>
                  <td>{{ $a->nama_pengguna }}</td>
                  <td>
                      <button class="btn btn-sm btn-danger fs-15"><i class="bi-trash"></i></button>
                      <button class="btn btn-sm btn-primary fs-15"><i class="bi-pencil"></i></button>
                      <button class="btn btn-sm btn-success fs-15"><i class="bi-check"></i></button>
                  </td>
              </tr>
            @endforeach
        </table>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>