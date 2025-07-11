@extends('layouts.main')

@section('title', 'Welcome')

@section('content')
<section id="services" class="py-5">
    <div class="container text-center">
        <div class="mb-5" data-aos="zoom-in">
            <h2 class="fw-bold text-warning">
                <i class="bi bi-code-slash me-2"></i>SERVICES
            </h2>
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