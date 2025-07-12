document.addEventListener('DOMContentLoaded', function () {
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
                                            <div class="entry-meta">${img.category}</div>
                                            <h3 class="entry-title">${img.title}</h3>
                                            <div class="entry-links">
                                                <a href="${img.url}" class="glightbox"
                                                    data-gallery="portfolio-gallery-${img.category.toLowerCase()}"
                                                    data-glightbox="title: ${img.title}">
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
        button.addEventListener('click', function () {
            document.querySelectorAll('.portfolio-filters li').forEach(btn => btn.classList
                .remove('filter-active'));
            this.classList.add('filter-active');

            const category = this.getAttribute('data-category');
            loadPortfolio(category);
        });
    });
});
