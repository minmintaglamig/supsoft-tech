@extends('layouts.main')

@section('title', 'About Us')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div class="py-5 text-white bg-dark" style="min-height: 100vh;">
    <div class="container">

        <div class="mb-5 text-center" data-aos="fade-down">
            <img src="{{ asset('/images/logo.png') }}" alt="SupSoft Tech Logo" style="height: 100px;">
            <h2 class="mt-3 fw-bold" style="color: #FFD700;">SupSoft Tech</h2>
            <p class="fs-5 fst-italic text-white-50">“Empowering your digital world with innovative solutions.”</p>
        </div>

        <!-- Who Are We -->
        <div class="mb-5" data-aos="fade-up">
            <h4 class="mb-2 fw-bold" style="color: #FFD700;">Who are we?</h4>
            <p class="lh-lg" style="text-indent: 2em;">
                Your hero in implementing technology solutions. We aim for the highest quality of products and services
                in every phase of our relationships with clients—from initial contact to follow-up support. Our
                technical expertise and experience are unparalleled in the industry. We value long-term client
                relationships and tailor our approach to meet each client’s needs. Our goal: to be the leading global
                software solutions provider in the information technology industry.
            </p>
        </div>

        <!-- Mission & Vision -->
        <div class="mb-5 row g-4">
            <div class="col-md-6" data-aos="fade-right">
                <div class="text-white border shadow-lg card bg-dark border-warning rounded-4 h-100">
                    <div class="p-4 card-body">
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-bullseye fa-lg text-warning me-2"></i>
                            <h5 class="mb-0 fw-bold" style="font-size: 1.2rem;">Mission</h5>
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
                <div class="text-white border shadow-lg card bg-dark border-warning rounded-4 h-100">
                    <div class="p-4 card-body">
                        <div class="mb-3 d-flex align-items-center">
                            <i class="fas fa-eye fa-lg text-warning me-2"></i>
                            <h5 class="mb-0 fw-bold" style="font-size: 1.2rem;">Vision</h5>
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

        <!-- Services -->
        <div class="mb-5" data-aos="fade-up">
            <h4 class="mb-4 text-center fw-bold" style="color: #FFD700;">Our Services</h4>
            <div class="row g-4">
                @php
                $services = [
                ['title' => 'Mobile App Development', 'desc' => 'Our service covers the entire development, from UI/UX
                design to App Store and Play Store submission.', 'icon' => 'fa-mobile-alt'],
                ['title' => 'Web Development', 'desc' => 'We are a team that is easy to work with—from interface design
                to interactive websites. We got your back.', 'icon' => 'fa-globe'],
                ['title' => 'System Development', 'desc' => 'We make life easier with well-engineered products that will
                cater to client needs.', 'icon' => 'fa-desktop'],
                ['title' => 'Multimedia Production', 'desc' => 'Team up with our creative and passionate artists. We can
                provide production equipment and editing services.', 'icon' => 'fa-photo-film'],
                ['title' => 'Game Development', 'desc' => 'Let’s bring your imagination to life through 2D and 3D games
                built in Unity.', 'icon' => 'fa-gamepad'],
                ['title' => 'Branding and Design', 'desc' => 'We offer high-quality websites that suit your brand and
                style.', 'icon' => 'fa-pen-nib'],
                ['title' => 'Digital Marketing', 'desc' => 'Keep your audience engaged! We offer stunning graphics and
                copywriting services.', 'icon' => 'fa-bullhorn'],
                ];
                @endphp

                @foreach($services as $service)
                <div class="col-md-4 col-sm-6" data-aos="zoom-in">
                    <div
                        class="p-4 text-center text-white border shadow-lg card service-card bg-dark border-secondary rounded-4 h-100 position-relative">
                        <i class="fas {{ $service['icon'] }} fa-2x text-warning mb-3"></i>
                        <h5 class="mb-2 fw-bold" style="color: #FFD700;">{{ $service['title'] }}</h5>
                        <p class="service-desc text-white-50 lh-lg" style="text-indent: 2em;">{{ $service['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- "Connect With Us" -->
        <div class="mt-4 text-center" data-aos="fade-up">
            <h5 class="mb-2 fw-bold" style="color: #FFD700;">Connect with us</h5>
            <p>
                Facebook: <a href="https://www.facebook.com/SupSoftTech" target="_blank"
                    class="text-warning">SupSoftTech</a><br>
                LinkedIn: <a href="https://linkedin.com/company/supsoft-tech" target="_blank"
                    class="text-warning">linkedin.com/company/supsoft-tech</a>
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