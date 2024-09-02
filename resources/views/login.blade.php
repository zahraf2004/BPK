<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link href="/css/login.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="img">
                <img src="{{ asset('img/Logo-BPK.png') }}" alt="" class="logo" />
            </div>
            <h1>Sign In</h1>

            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required />
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required />
                <i class="bx bxs-lock-alt"></i>
            </div>

            <div class="remember">
                <input type="checkbox" name="remember" />
                <span>Remember me</span>
            </div>

            <!-- Menggunakan tombol submit untuk login -->
            <button type="submit">
                <b>Login</b>
            </button>
        </form>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</body>

</html>