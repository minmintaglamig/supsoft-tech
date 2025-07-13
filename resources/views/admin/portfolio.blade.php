@extends('layouts.dashboard')

@section('content')
    <div class="alert alert-success text-center">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <a href="{{ route('portfolio.create') }}" class="btn btn-link">ADD NEW PORTFOLIO</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="profile-image-edit-form">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if ($errors->has('profile_image'))
                            <div class="alert alert-danger">{{ $errors->first('profile_image') }}</div>
                        @endif

                        <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="profile_image" class="form-label">Change Profile Image</label>
                                <input type="file" name="profile_image" id="profile_image" accept="image/*" required
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="portfolio_category" class="form-label">Portfolio Category</label>
                                <select name="portfolio_category" id="portfolio_category" class="form-select">
                                    <option value="UI_UX">UI/UX</option>
                                    <option value="WEB_DEVELOPMENT">WEB DEVELOPMENT</option>
                                    <option value="GRAPHIC_DESIGN">GRAPHIC DESIGN</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="image_name" class="form-label">Image Name</label>
                                <input type="text" name="image_name" id="image_name" required class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="portfolio" class="portfolio section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <div><span>Check Our</span> <span class="description-title">Portfolio</span></div>
        </div>

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-category="ALL" class="filter-active">All Projects</li>
                    <li data-category="UI_UX">UI/UX</li>
                    <li data-category="WEB_DEVELOPMENT">Web Development</li>
                    <li data-category="GRAPHIC_DESIGN">Graphic Design</li>
                </ul>

                <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300" id="portfolioItems">

                </div>
            </div>
        </div>
    </section>

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
        document.addEventListener('DOMContentLoaded', function() {
            let iso;

            function loadPortfolio(category = 'ALL') {
                fetch(`/api/portfolio-images/${category}`)
                    .then(res => res.json())
                    .then(images => {
                        const container = document.querySelector('.isotope-container');
                        container.innerHTML = '';

                        images.forEach(img => {
                            const filterClass =
                                `filter-${img.category.toUpperCase().replace(/\s+/g, '_')}`;
                            const html = `
                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item ${filterClass}">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="${img.url}" class="img-fluid" alt="${img.title}" loading="lazy">
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">${img.category.replace(/_/g, ' ')}</div>
                                            <h3 class="entry-title">${img.title}</h3>
                                            <div class="entry-links">
                                                <a href="${img.url}" class="glightbox"
                                                   data-gallery="portfolio-gallery-${img.category.toLowerCase()}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                                <a href="#" class="delete-image" data-image-url="${img.url}">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    `;
                            container.insertAdjacentHTML('beforeend', html);
                        });

                        setTimeout(() => {
                            if (window.Isotope) {
                                iso = new Isotope('.isotope-container', {
                                    itemSelector: '.isotope-item',
                                    layoutMode: 'masonry'
                                });
                            }

                            if (window.GLightbox) {
                                GLightbox({
                                    selector: '.glightbox'
                                });
                            }
                        }, 300);
                    });
            }

            document.addEventListener('click', function(e) {
                const deleteBtn = e.target.closest('.delete-image');
                if (deleteBtn) {
                    e.preventDefault();
                    const imageUrl = deleteBtn.getAttribute('data-image-url');
                    if (!confirm('Are you sure you want to delete this image?')) {
                        return;
                    }

                    fetch('/portfolio/delete-image', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                imageUrl: imageUrl
                            })
                        })
                        .then(res => res.json())
                        .then(data => {
                            if (data.success) {
                                const portfolioItem = deleteBtn.closest('.portfolio-item');
                                if (portfolioItem) {
                                    portfolioItem.remove();
                                }
                                alert('Image deleted successfully');
                            } else {
                                alert(data.message || 'Failed to delete image');
                            }
                        })
                        .catch(() => alert('Error deleting image'));
                }
            });

            loadPortfolio();

            document.querySelectorAll('.portfolio-filters li').forEach(button => {
                button.addEventListener('click', function() {
                    document.querySelectorAll('.portfolio-filters li').forEach(btn => btn.classList
                        .remove('filter-active'));
                    this.classList.add('filter-active');

                    const category = this.getAttribute('data-category');
                    loadPortfolio(category);
                });
            });
        });
    </script>
@endsection
