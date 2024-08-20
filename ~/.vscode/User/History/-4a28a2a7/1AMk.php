<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Laundry</title>
    <link rel="stylesheet" href="{{ asset('assets/custom/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</head>
<body class="bg-light">
    <div class="container mx-auto w-25 bg-white shadow-sm rounded mt-5 p-4">
        <h5>Sign In</h5>
        @if (session('error'))
            <div class="alert alert-danger">Oops!, {{ session('error') }}</div>
        @endif
        <form action="{{ route('doLogin') }}" method="post">
            @csrf
            <div class="form-group mt-1">
                <label class="fs-15">Email</label>
                <input type="email" name="email" placeholder="" class="form-control form-sm">
            </div>
            <div class="form-group mt-1">
                <label class="fs-15">Password</label>
                <input type="password" name="password" placeholder="" class="form-control form-sm">
            </div>
            <div class="form-group mt-1">
                <button type="submit" class="btn btn-sm btn-primary mt-2">Sign In</button>
            </div>
        </form>
    </div>
</body>
</html>