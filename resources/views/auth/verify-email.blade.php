@extends('layouts.guest')

@section('title', 'Verify Email')

@section('content')
<h2 class="text-center mb-4">Verify Your Email</h2>

<div class="mb-3 text-muted text-center">
    Thanks for signing up! Please verify your email address by clicking the link we just sent to you. <br>
    If you didn’t receive it, we’ll gladly send another.
</div>

@if (session('status') == 'verification-link-sent')
    <div class="alert alert-success text-center">
        A new verification link has been sent to your email address.
    </div>
@endif

<div class="d-flex justify-content-center gap-3 mt-4">
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button type="submit" class="btn btn-primary">Resend Verification Email</button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-outline-secondary">Log Out</button>
    </form>
</div>
@endsection