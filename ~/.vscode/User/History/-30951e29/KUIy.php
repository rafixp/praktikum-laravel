<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir - Laundry</title>
    <link rel="stylesheet" href="{{ asset('assets/custom/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
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
                    <a class="nav-link text-white fs-15" aria-current="page" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fs-15" href="#">Order Baru</a>
                  </li>
              </div>
            </div>
          </nav>
    </div>
    <div class="container bg-white shadow-sm p-4 mt-3">
        <h5>Selamat datang di halaman dashboard !</h5>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>