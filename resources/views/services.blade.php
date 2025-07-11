@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
<section id="services" class="py-5">
    <div class="container text-center">
        <div class="mb-5" data-aos="zoom-in">
            <div class="mb-5 text-center" data-aos="fade-down">
                <img src="{{ asset('/images/logo.png') }}" alt="SupSoft Tech Logo" style="height: 100px;">
                <h2 class="mt-3 fw-bold" style="color: #FFD700;">SupSoft Tech</h2>
                <p class="fs-5 fst-italic text-white-50">“Empowering your digital world with innovative solutions.”</p>
            </div>
            <h4 class="mb-4 fw-bold" style="color: #FFD700;">Our Services</h4>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
            @php
            $services = [
            ['title' => 'Software Development', 'icon' => 'bi-laptop', 'desc' => 'We build scalable and efficient
            software tailored to your business needs.'],
            ['title' => 'Website Development', 'icon' => 'bi-globe', 'desc' => 'Creating fast, responsive, and modern
            websites that enhance your digital presence.'],
            ['title' => 'Mobile Applications', 'icon' => 'bi-phone', 'desc' => 'Custom mobile apps for Android and iOS
            with intuitive user experiences.'],
            ['title' => 'Custom Solutions', 'icon' => 'bi-tools', 'desc' => 'Tailor-made software solutions to solve
            unique business challenges.'],
            ['title' => 'IT Consulting', 'icon' => 'bi-people', 'desc' => 'Expert advice to align technology with your
            business goals.'],
            ['title' => 'Outsourcing Services', 'icon' => 'bi-box-arrow-up-right', 'desc' => 'Professional teams to
            support your development, design, and infrastructure.']
            ];
            @endphp

            @foreach($services as $index => $service)
            <div class="col" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="p-3 text-center border-0 shadow card h-100">
                    <i class="bi {{ $service['icon'] }} display-4 text-primary mb-3"></i>
                    <h5 class="card-title">{{ $service['title'] }}</h5>
                    <p>{{ $service['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection