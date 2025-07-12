@extends('layouts.guest')

@section('title', 'Reset Password')

@section('content')
<h2 class="text-center mb-4">Reset Password</h2>

<form method="POST" action="{{ route('password.store') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <div class="form-floating mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email', $request->email) }}" required autofocus placeholder="Email">
        <label for="email">Email address</label>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-floating mb-3 position-relative">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required placeholder="Password">
        <label for="password">New Password</label>
        <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword('password', 'toggleResetPass')" style="cursor: pointer;">
            <i id="toggleResetPass" class="bi bi-eye-slash"></i>
        </span>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-floating mb-3 position-relative">
        <input id="password_confirmation" type="password" class="form-control"
               name="password_confirmation" required placeholder="Confirm Password">
        <label for="password_confirmation">Confirm Password</label>
        <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword('password_confirmation', 'toggleResetConfirm')" style="cursor: pointer;">
            <i id="toggleResetConfirm" class="bi bi-eye-slash"></i>
        </span>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-success">Reset Password</button>
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