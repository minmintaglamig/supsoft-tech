@extends('layouts.guest')

@section('title', 'Forgot Password')

@section('content')
<h2 class="text-center mb-4">Forgot Password</h2>

<div class="mb-3 text-muted text-center">
    No problem. Enter your email and we’ll send you a password reset link.
</div>

<x-auth-session-status class="mb-3" :status="session('status')" />

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="form-floating mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
        <label for="email">Email address</label>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Email Password Reset Link</button>
    </div>
</form>
@endsection