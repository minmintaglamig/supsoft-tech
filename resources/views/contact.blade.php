@extends('layouts.main')

@section('title', 'Contact Us')

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
            <h2 class="mt-3 fw-bold" style="color: #FFD700;">CONTACT US</h2>
            <p class="text-white-50">We'd love to hear from you! Fill out the form below or reach us through our contact info.</p>
        </div>

        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up">
                <div class="card bg-secondary text-white shadow-lg">
                    <div class="card-body">
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label fw-semibold" style="color: #FFD700;">Name</label>
                                <input type="text" name="name" class="form-control bg-dark text-white border-0" id="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold" style="color: #FFD700;">Email</label>
                                <input type="email" name="email" class="form-control bg-dark text-white border-0" id="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label fw-semibold" style="color: #FFD700;">Message</label>
                                <textarea name="message" class="form-control bg-dark text-white border-0" id="message" rows="5" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-success w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="text-center mt-5" data-aos="fade-up">
            <h4 class="fw-bold" style="color: #FFD700;">Contact Information</h4>
            <p class="text-white-50 mb-1">📧 Email: <a href="mailto:contact@supsofttech.com" class="text-decoration-none text-info">contact@supsofttech.com</a></p>
            <p class="text-white-50 mb-1">📞 Phone: +63 949 967 3244</p>
            <p class="text-white-50 mb-4">🌐 Website: <a href="https://supsofttech.com" target="_blank" class="text-info text-decoration-none">supsofttech.com</a></p>

            <div class="d-flex justify-content-center gap-4 mt-3">
                <a href="https://facebook.com/supsofttech" target="_blank" class="text-decoration-none text-white-50">
                    <i class="bi bi-facebook" style="font-size: 1.5rem;"></i> Facebook
                </a>
                <a href="https://linkedin.com/in/tom-oliver-chua-clssw-414bba144" target="_blank" class="text-decoration-none text-white-50">
                    <i class="bi bi-linkedin" style="font-size: 1.5rem;"></i> LinkedIn
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
