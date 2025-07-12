@extends('layouts.main')

@section('title', 'About Us')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>

<div class="bg-dark text-white py-5" style="min-height: 100vh;">
    <div class="container">

        <div class="text-center mb-5" data-aos="fade-down">
            <img src="{{ asset('/images/logo.png') }}" alt="SupSoft Tech Logo" style="height: 100px;">
            <h2 class="fw-bold mt-3" style="color: #FFD700;">SupSoft Tech</h2>
            <p class="fs-5 fst-italic text-white-50">“Empowering your digital world with innovative solutions.”</p>
        </div>

        <!-- Who Are We -->
        <div class="mb-5" data-aos="fade-up">
            <h4 class="fw-bold mb-2" style="color: #FFD700;">Who are we?</h4>
            <p class="lh-lg" style="text-indent: 2em;">
                Your hero in implementing technology solutions. We aim for the highest quality of products and services
                in every phase of our relationships with clients—from initial contact to follow-up support. Our
                technical expertise and experience are unparalleled in the industry. We value long-term client
                relationships and tailor our approach to meet each client’s needs. Our goal: to be the leading global
                software solutions provider in the information technology industry.
            </p>
        </div>

        <!-- Mission & Vision -->
        <div class="row g-4 mb-5">
            <div class="col-md-6" data-aos="fade-right">
                <div class="card bg-dark border border-warning rounded-4 text-white shadow-lg h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-bullseye fa-lg text-warning me-2"></i>
                            <h5 class="fw-bold mb-0" style="font-size: 1.2rem;">Mission</h5>
                        </div>
                        <p class="lh-lg" style="text-indent: 2em; font-size: 0.95rem;">
                            Our mission at SupSoft Tech is to provide innovative and customized mobile and web
                            development solutions that help our clients achieve their business goals. We are committed
                            to delivering high-quality, cost-effective, and timely results that exceed expectations.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-left">
                <div class="card bg-dark border border-warning rounded-4 text-white shadow-lg h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-eye fa-lg text-warning me-2"></i>
                            <h5 class="fw-bold mb-0" style="font-size: 1.2rem;">Vision</h5>
                        </div>
                        <p class="lh-lg" style="text-indent: 2em; font-size: 0.95rem;">
                            Our vision at SupSoft Tech is to become the leading provider of mobile and web development
                            services globally. We aim to achieve this by investing in the latest technologies, nurturing
                            top talent, and prioritizing customer satisfaction to guide digital transformation.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Values -->
        <div class="mb-5" data-aos="fade-up">
            <h4 class="fw-bold text-center mb-4" style="color: #FFD700;">Our Core Values</h4>
            <div class="row g-4">
                @php
                    $values = [
                        ['title' => 'Integrity', 'desc' => 'We are honest, transparent, and committed to doing what’s best for our clients and company.', 'icon' => 'fa-handshake'],
                        ['title' => 'Innovation', 'desc' => 'We push boundaries and embrace creativity to provide cutting-edge solutions.', 'icon' => 'fa-lightbulb'],
                        ['title' => 'Excellence', 'desc' => 'We strive to deliver the highest quality in everything we do.', 'icon' => 'fa-star'],
                        ['title' => 'Collaboration', 'desc' => 'We believe in teamwork, open communication, and mutual respect.', 'icon' => 'fa-people-group'],
                        ['title' => 'Customer Commitment', 'desc' => 'We develop relationships that make a positive difference in our customers’ lives.', 'icon' => 'fa-user-check'],
                        ['title' => 'Accountability', 'desc' => 'We take responsibility for our actions and deliver on our promises.', 'icon' => 'fa-scale-balanced'],
                    ];
                @endphp

                @foreach($values as $value)
                    <div class="col-md-4 col-sm-6" data-aos="zoom-in">
                        <div class="card service-card bg-dark text-white border border-secondary rounded-4 shadow-lg h-100 text-center p-4 position-relative">
                            <i class="fas {{ $value['icon'] }} fa-2x text-warning mb-3"></i>
                            <h5 class="fw-bold mb-2" style="color: #FFD700;">{{ $value['title'] }}</h5>
                            <p class="service-desc text-white-50 lh-lg" style="text-indent: 2em;">{{ $value['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Founder -->
        <div class="mt-5 text-center" data-aos="fade-up">
            <h5 class="fw-bold mb-3" style="color: #FFD700;">Our Founder</h5>
            <div class="d-inline-block bg-dark border border-secondary rounded-4 p-4 shadow text-white" style="max-width: 500px;">
                <img src="{{ asset('/images/mr.tom-oliver-chua.jpg') }}" alt="Mr. Tom Oliver Chua" class="rounded-circle mb-3 shadow" style="width: 120px; height: 120px; object-fit: cover;">
                <h6 class="mb-2" style="color: #FFD700;">Mr. Tom Oliver Chua</h6>
                <p class="text-white-50 fst-italic mb-3">Founder of SupSoft Tech</p>
                <a href="https://www.linkedin.com/in/tom-oliver-chua-clswb-pmp-414bba144" target="_blank" class="btn btn-outline-warning rounded-pill px-4">
                    <i class="fab fa-linkedin me-2"></i> Connect on LinkedIn
                </a>
            </div>
        </div>

        <!-- Social Links -->
        <div class="mt-5 text-center" data-aos="fade-up">
            <h5 class="fw-bold mb-2" style="color: #FFD700;">Connect with us</h5>
            <p>
                Facebook: <a href="https://www.facebook.com/SupSoftTech" target="_blank" class="text-warning">SupSoftTech</a><br>
                LinkedIn: <a href="https://linkedin.com/company/supsoft-tech" target="_blank" class="text-warning">linkedin.com/company/supsoft-tech</a>
            </p>
        </div>

    </div>
</div>

<style>
    .service-card {
        transition: all 0.3s ease-in-out;
        cursor: pointer;
    }

    .service-card .service-desc {
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        transition: all 0.4s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
        border-color: #FFD700;
    }

    .service-card:hover .service-desc {
        max-height: 200px;
        opacity: 1;
        margin-top: 10px;
    }

    @media (max-width: 768px) {
        .service-card .service-desc {
            max-height: 200px !important;
            opacity: 1 !important;
            margin-top: 10px;
        }
    }
</style>
@endsection