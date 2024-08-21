<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir - Laundry</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/custom/custom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.css')); ?>">
</head>
<body class="bg-light">
    <div>
        <nav class="navbar navbar-expand-lg bg-primary  ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="<?php echo e(asset('img/icon.jpeg')); ?>" class="profpic"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link text-white fs-15" aria-current="page" href="<?php echo e(route('kasirHome')); ?>">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white fs-15" href="<?php echo e(route('kasirOrder')); ?>">Order Baru</a>
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
    <div class="container bg-white shadow-sm p-4 mt-3">
        <h5>Selamat datang Kasir !</h5>
        <span class="fs-15">Jangan lupa untuk membaca basmalah sebelum bekerja.</span>
    </div>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
</body>
</html><?php /**PATH /home/rafiahfa/Desktop/praktikum-laravel/resources/views/home.blade.php ENDPATH**/ ?>