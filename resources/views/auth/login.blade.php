@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <h2 class="text-center mb-4">Login</h2>

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops! Something went wrong.</strong>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-floating mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
            <label for="email">Email address</label>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 position-relative">
            <div class="form-floating">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required placeholder="Password">
                <label for="password">Password</label>
                <span class="position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer;" onclick="togglePassword()">
                    <i id="toggleIcon" class="bi bi-eye-slash"></i>
                </span>
            </div>
            @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" name="remember" id="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <div class="text-center mb-3">
            <a href="{{ route('auth.linkedin') }}" class="btn btn-outline-secondary w-100">
                <i class="fab fa-linkedin me-2"></i> Login with LinkedIn
            </a>
        </div>

        <div class="d-grid mb-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

        <div class="text-center mb-3">
            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
        </div>

        <hr>

        <div class="text-center text-black-50">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-info">Register</a>
        </div>
    </form>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const icon = document.getElementById("toggleIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            } else {
                passwordInput.type = "password";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            }
        }
    </script>
@endsection