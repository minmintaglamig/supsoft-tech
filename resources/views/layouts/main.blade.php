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

    <!-- Custom Theme CSS -->
    <link href="{{ asset('grayscale/css/styles.css') }}" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/YOUR_CODE.js" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: #0c0c1e;
            color: #ffffff;
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

        .modal.fade .modal-dialog {
            transform: translateY(50px);
            transition: transform 0.3s ease-out;
        }

        .modal.fade.show .modal-dialog {
            transform: translateY(0);
        }
    </style>
</head>

<body id="page-top">
    @include('layouts.public-navbar')

    <main class="pt-5 mt-5">
        @yield('content')
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
        AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
      });
    </script>
</body>

</html>