<div id="smooth-wrapper">
    <div id="smooth-content">

        <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-wrapper bg-cover" style="background-image: url('<?php echo base_url()?>assets/img/breadcrumb.jpg');">
            <div class="container">
                <div class="page-heading">
                    <div class="breadcrumb-sub-title">
                        <h1 class="text-white wow fadeInUp" data-wow-delay=".3s">Our Gallery</h1>
                    </div>
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
                        <li>
                            <a href="<?php echo base_url(); ?>">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li>
                            /
                        </li>
                        <li>
                            Our Gallery
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        <?php $this->load->view('component/gallery'); ?>

        

        <!-- Custom JavaScript for Gallery Filter & Lightbox -->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ===== Gallery Filter Functionality =====
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    // Filter items with animation
                    galleryItems.forEach(item => {
                        const category = item.getAttribute('data-category');

                        if (filterValue === 'all' || category === filterValue) {
                            item.classList.remove('hide');
                            item.classList.add('show');
                            item.style.display = 'block';
                        } else {
                            item.classList.remove('show');
                            item.classList.add('hide');
                            setTimeout(() => {
                                if (item.classList.contains('hide')) {
                                    item.style.display = 'none';
                                }
                            }, 500);
                        }
                    });
                });
            });

            // ===== Initialize Magnific Popup for Lightbox =====
            if (typeof jQuery !== 'undefined') {
                jQuery('.popup-image').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1]
                    },
                    image: {
                        titleSrc: function(item) {
                            return item.el.attr('title') || '';
                        }
                    },
                    removalDelay: 300,
                    mainClass: 'mfp-fade',
                    callbacks: {
                        open: function() {
                            jQuery('body').css('overflow', 'hidden');
                        },
                        close: function() {
                            jQuery('body').css('overflow', '');
                        }
                    }
                });
            }

            // ===== GSAP Animation for Gallery Section =====
            if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger);

                // Animate gallery items on scroll
                const galleryItemsAnim = document.querySelectorAll('.gallery-item');
                galleryItemsAnim.forEach((item, index) => {
                    gsap.from(item, {
                        opacity: 0,
                        y: 50,
                        duration: 0.6,
                        delay: index * 0.1,
                        ease: 'power3.out',
                        scrollTrigger: {
                            trigger: '.gallery-section-new',
                            start: 'top 70%'
                        }
                    });
                });

                // Animate filter buttons
                gsap.from('.filter-btn', {
                    opacity: 0,
                    y: 20,
                    duration: 0.5,
                    stagger: 0.1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: '.gallery-filter',
                        start: 'top 80%'
                    }
                });
            }

            // ===== Lazy Loading =====
            if ('IntersectionObserver' in window) {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            if (img.dataset.src) {
                                img.src = img.dataset.src;
                            }
                            img.classList.add('loaded');
                            imageObserver.unobserve(img);
                        }
                    });
                });

                lazyImages.forEach(img => imageObserver.observe(img));
            }

            // ===== Load More Functionality =====
            const loadMoreBtn = document.querySelector('.load-more-btn');
            if (loadMoreBtn) {
                let visibleItems = 8;
                const allItems = document.querySelectorAll('.gallery-item');
                
                // Initially show only 8 items
                allItems.forEach((item, index) => {
                    if (index >= visibleItems) {
                        item.style.display = 'none';
                    }
                });

                loadMoreBtn.addEventListener('click', function() {
                    visibleItems += 4;
                    allItems.forEach((item, index) => {
                        const category = item.getAttribute('data-category');
                        const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');
                        
                        if (index < visibleItems && (activeFilter === 'all' || category === activeFilter)) {
                            item.style.display = 'block';
                            item.classList.add('show');
                        }
                    });

                    // Hide button if all items are shown
                    if (visibleItems >= allItems.length) {
                        loadMoreBtn.style.display = 'none';
                    }
                });
            }
        });
        </script>

        <style>
        /* Additional Gallery Page Styles */
        .gallery-section-new {
            background: #fff;
            max-width: 100%;
            overflow: hidden;
        }
        
        .gallery-item {
            display: block;
            max-width: 100%;
            overflow: hidden;
        }
        
        .gallery-item.hide {
            display: none;
        }

        /* Smooth scroll fix for filter animation */
        .gallery-grid {
            transition: all 0.5s ease;
            max-width: 100%;
            overflow: hidden;
        }
        </style>


