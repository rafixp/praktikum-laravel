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

    <div class="card bg-white shadow mt-4 w-50 mx-auto p-4 rounded">
        <h5>Tambah Order</h5>
        <span class="fs-15">Tambah order laundry</span>
        <br>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label class="fs-15">Nama Konsumen</label>
                <input type="text" name="nama" class="form-control form-sm">
            </div>
            <div class="form-group">
                <label class="fs-15">Jenis Kelamin</label>
                <select name="jk" class="form-select">
                    <option value="Laki-Laki">Laki Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label class="fs-15">Tanggal Pemesanan</label>
                <input type="date" name="tgl_pesan" class="form-control form-sm">
            </div>
            <div class="form-group">
                <label class="fs-15">Jenis Cucian</label>
                <select name="jc" class="form-select">
                    <option value="Reguler">Reguler</option>
                    <option value="Ekspress">Ekspress</option>
                </select>
            </div>
            <div class="form-group">
                <label class="fs-15">Nama Konsumen</label>
                <input type="number" name="" class="form-control form-sm">
            </div>
        </form>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>