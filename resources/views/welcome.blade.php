@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card p-4 shadow-lg" style="max-width: 400px; width: 100%;">
        <h2 class="text-center mb-4">SupSoft Tech</h2>
        <div class="d-grid gap-3">
            <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
        </div>
    </div>
</div>
@endsection