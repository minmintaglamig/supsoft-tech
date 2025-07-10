<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title', 'SupSoft Tech')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom Theme CSS -->
    <link href="{{ asset('grayscale/css/styles.css') }}" rel="stylesheet" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/YOUR_CODE.js" crossorigin="anonymous"></script>
</head>
<body id="page-top">
    @include('layouts.public-navbar')

    <main class="pt-5 mt-5">
        @yield('content')
    </main>

    <footer class="footer bg-black text-white-50 text-center py-4">
        <div class="container">
            <small>&copy; {{ date('Y') }} SupSoft Tech. All rights reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('grayscale/js/scripts.js') }}"></script>
</body>
</html>