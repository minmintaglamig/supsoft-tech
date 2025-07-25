<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'SupSoft Tech')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('grayscale/css/styles.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/YOUR_CODE.js" crossorigin="anonymous"></script>

    <style>
        body {
            background-color: #0c0c1e;
            color: #ffffff;
        }

        h2 {
            color: #000000;
        }

        .card {
            background-color: #ffffff;
            color: #000000;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.2);
        }

        .auth-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 80px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body id="page-top">
    @include('layouts.public-navbar')

    <main>
        <div class="auth-wrapper container">
            <div class="card shadow p-4" style="max-width: 500px; width: 100%;">
                @yield('content')
            </div>
        </div>
    </main>

    <footer class="py-4 text-center bg-black footer text-white-50">
        <div class="container">
            <small>&copy; {{ date('Y') }} SupSoft Tech. All rights reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('grayscale/js/scripts.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, easing: 'ease-in-out', once: true });
    </script>
    <script src="{{ asset('js/js.js') }}"></script>
</body>
</html>