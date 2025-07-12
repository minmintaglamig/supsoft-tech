@extends('layouts.guest')

@section('title', 'Confirm Password')

@section('content')
<h2 class="text-center mb-4">Confirm Password</h2>

<p class="text-muted text-center mb-3">
    This is a secure area. Please confirm your password to continue.
</p>

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <div class="form-floating mb-3 position-relative">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
               name="password" required placeholder="Password">
        <label for="password">Password</label>
        <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword('password', 'toggleConfirmPass')" style="cursor: pointer;">
            <i id="toggleConfirmPass" class="bi bi-eye-slash"></i>
        </span>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Confirm</button>
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