@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
<section class="text-center py-5" style="background: linear-gradient(to right, #0c0c1e, #1c1c3c); color: #fff;">
    <div class="container" data-aos="fade-up">
        <h1 class="display-4 fw-bold mb-3">Welcome to SupSoft Tech</h1>
        <p class="lead mb-4">
            We build secure, smart, and scalable solutions for the modern world.
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('portfolio') }}" class="btn btn-outline-light px-4">Explore Our Work</a>
            <a href="{{ route('contact') }}" class="btn btn-primary px-4">Contact Us</a>
        </div>
    </div>
</section>

<section id="services" class="py-5 bg-light text-dark">
    <div class="container" data-aos="fade-up">
        <div class="row text-center mb-4">
            <h2 class="fw-bold">What We Offer</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow text-center p-3">
                    <i class="bi bi-shield-lock fs-1 text-primary mb-3"></i>
                    <h5 class="card-title">Built-in Security</h5>
                    <p class="card-text">
                        We use Laravel’s built-in security features like CSRF protection, hashed passwords, and secure authentication to keep your data safe.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow text-center p-3">
                    <i class="bi bi-braces fs-1 text-success mb-3"></i>
                    <h5 class="card-title">Modern Technologies</h5>
                    <p class="card-text">From Laravel to Vue and Bootstrap, we use current tools to deliver powerful web solutions.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow text-center p-3">
                    <i class="bi bi-heart-pulse fs-1 text-danger mb-3"></i>
                    <h5 class="card-title">Core Values</h5>
                    <p class="card-text">Integrity, collaboration, and innovation drive every project we create and every problem we solve.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 text-white" style="background: linear-gradient(to right, #1b1b3a, #29294d);">
    <div class="container" data-aos="fade-up">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Ready to Join SupSoft Tech?</h2>
            <p class="lead">Create an account to explore more, or sign in if you're already part of the team.</p>
        </div>
        <div class="d-flex justify-content-center gap-4">
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-5">
                <i class="bi bi-box-arrow-in-right me-2"></i>Login
            </a>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-5">
                <i class="bi bi-person-plus me-2"></i>Register
            </a>
        </div>
    </div>
</section>
@endsection