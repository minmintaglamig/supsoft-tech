<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SupSoft Tech') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
        <div class="mb-4">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="card shadow w-100" style="max-width: 450px;">
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>