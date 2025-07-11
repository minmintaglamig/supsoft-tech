@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
<!-- AOS Library -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div class="py-5 text-white bg-dark" style="min-height: 100vh;">
    <div class="container">
        <!-- Header -->
        <div class="mb-5 text-center" data-aos="fade-down">
            <img src="{{ asset('/images/logo.png') }}" alt="Logo" style="height: 100px;">
            <h2 class="mt-3 fw-bold" style="color: #FFD700;">ABOUT US</h2>
        </div>

        <!-- Who are we -->
        <div class="mb-5" data-aos="fade-up">

            <h4 class="card-title fw-bold" style="color: #FFD700;">Who are we?</h4>
            <p class="text-white-100">
                Your hero in implementing technology solutions. We aim for the highest quality of products and service
                in every phase of our relationships with our clients, from initial contact to follow-up support. Our
                technical expertise and experience are unparalleled in the industry. Recognizing a client’s custom is
                what sets us apart from the rest. We pay attention to our client requirements so we can build a good
                long-term relationship. We aim to be the leading global software solutions provider in the information
                technology industry.
            </p>
        </div>

        <!-- Mission & Vision Cards -->
        <div class="row g-4">
            <div class="col-md-6" data-aos="fade-right">
                <div class="text-white shadow-lg card bg-secondary h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #FFD700;">Mission</h5>
                        <p class="card-text text-white-100">
                            Our mission at SupSoft Tech is to provide innovative and customized mobile and web
                            development solutions to help our clients achieve their business goals. We are committed to
                            delivering high-quality, cost-effective, and timely solutions that exceed our clients’
                            expectations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <div class="text-white shadow-lg card bg-secondary h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #FFD700;">Vision</h5>
                        <p class="card-text text-white-100">
                            Our vision at SupSoft Tech is to become the leading provider of mobile and web development
                            services globally. We aim to achieve this by continually investing in the latest
                            technologies, building a team of skilled and experienced professionals, and focusing on
                            customer satisfaction. Our ultimate goal is to help our clients achieve their digital
                            transformation objectives and succeed in the rapidly evolving digital landscape.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Meet Our Team -->
<div class="mt-5" data-aos="fade-up">
    <h2 class="mb-4 text-center fw-bold" style="color: #FFD700;">Meet Our Team</h2>
    <div class="row g-4 justify-content-center">
        <!-- Team Member 1 -->
        <div class="col-md-4 col-sm-6" data-aos="zoom-in">
            <div class="text-center text-white shadow-lg card bg-secondary h-100">
                <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Team Member 1">
                <div class="card-body">
                    <h5 class="card-title fw-bold" style="color: #FFD700;">Kayl Venus</h5>
                    <p class="card-text text-white-50">Chief Executive Officer</p>
                </div>
            </div>
        </div>

        <!-- Team Member 2 -->
        <div class="col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="text-center text-white shadow-lg card bg-secondary h-100">
                <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Team Member 2">
                <div class="card-body">
                    <h5 class="card-title fw-bold" style="color: #FFD700;">Alex Rivera</h5>
                    <p class="card-text text-white-50">Lead Developer</p>
                </div>
            </div>
        </div>

        <!-- Team Member 3 -->
        <div class="col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="text-center text-white shadow-lg card bg-secondary h-100">
                <img src="https://via.placeholder.com/300x300" class="card-img-top" alt="Team Member 3">
                <div class="card-body">
                    <h5 class="card-title fw-bold" style="color: #FFD700;">Jamie Cruz</h5>
                    <p class="card-text text-white-50">UI/UX Designer</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="text-center">
        <h3 class="fw-bold" style="color: #FFD700;">Join Us</h3>
        <p class="text-white-50">Be part of our journey in transforming technology solutions.</p>
        <a href="{{ route('register') }}" class="btn btn-success">Register Now</a>
    </div>
    @endsection