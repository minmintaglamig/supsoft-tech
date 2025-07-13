@extends('layouts.main')

@section('title', 'Welcome')
@section('content')
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
@endsection
<script>
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
                                                    <a href="#"><i class="bi bi-arrow-right"></i></a>
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
