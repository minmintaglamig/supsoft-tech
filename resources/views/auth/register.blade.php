@extends('layouts.guest')

@section('title', 'Register')

@section('content')
<h2 class="text-center mb-4">Register</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops! Please check the fields below.</strong>
    </div>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-floating mb-3">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
               name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name">
        <label for="name">Full Name</label>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-floating mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required placeholder="Email">
        <label for="email">Email address</label>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-floating mb-3 position-relative">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required placeholder="Password">
        <label for="password">Password</label>
        <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword('password', 'toggleRegisterPass')" style="cursor:pointer;">
            <i id="toggleRegisterPass" class="bi bi-eye-slash"></i>
        </span>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-floating mb-3 position-relative">
        <input id="password_confirmation" type="password" class="form-control"
               name="password_confirmation" required placeholder="Confirm Password">
        <label for="password_confirmation">Confirm Password</label>
        <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword('password_confirmation', 'toggleRegisterConfirm')" style="cursor:pointer;">
            <i id="toggleRegisterConfirm" class="bi bi-eye-slash"></i>
        </span>
    </div>

    <div class="d-grid mb-3">
        <button type="submit" class="btn btn-success">Register</button>
    </div>

    <div class="text-center">
        <a href="{{ route('login') }}">Already have an account?</a>
    </div>
</form>

<script>
    function togglePassword(id, iconId) {
        const input = document.getElementById(id);
        const icon = document.getElementById(iconId);
        input.type = input.type === "password" ? "text" : "password";
        icon.classList.toggle("bi-eye");
        icon.classList.toggle("bi-eye-slash");
    }
</script>
@endsection