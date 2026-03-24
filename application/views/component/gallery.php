<?php
// Gallery Component - Reusable gallery with category filters
// Categories: All, Tower Parking System, Stack Parking System, Hydraulic Puzzle Parking, Mechanical Puzzle Parking, Installation Projects, Manufacturing
?>

<!-- Gallery Section Start -->
<section class="gallery-section gallery-section-new section-padding">
    <div class="container">
        <!-- Section Header -->
        <div class="section-title text-center mb-5">
            <span class="sub-title wow fadeInUp">
                <img src="<?php echo base_url(); ?>assets/img/home-1/hero/setting.png" alt="img">
                Our Gallery
            </span>
            <h2 class="text-anim">
                Showcase Of Our Work
            </h2>
        </div>

        <!-- Filter Buttons -->
        <div class="gallery-filter text-center mb-5">
            <button class="filter-btn active" data-filter="all">
                All
            </button>
            <button class="filter-btn" data-filter="tower-parking">
                Tower Parking System
            </button>
            <button class="filter-btn" data-filter="stack-parking">
                Stack Parking System
            </button>
            <button class="filter-btn" data-filter="hydraulic-puzzle">
                Hydraulic Puzzle Parking
            </button>
            <button class="filter-btn" data-filter="mechanical-puzzle">
                Mechanical Puzzle Parking
            </button>
            <button class="filter-btn" data-filter="installation">
                Installation Projects
            </button>
            <button class="filter-btn" data-filter="manufacturing">
                Manufacturing
            </button>
        </div>

        <!-- Image Grid -->
        <div class="gallery-grid pt-5">
            <!-- Gallery Item 1 - Tower Parking -->
            <div class="gallery-item" data-category="tower-parking">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/tower.png" 
                             alt="Tower Parking System" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Tower Parking System</h4>
                                <p>Automated Vertical Parking Solution</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/tower.png" 
                                   class="popup-image" 
                                   title="Tower Parking System">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 - Stack Parking -->
            <div class="gallery-item" data-category="stack-parking">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/stack.png" 
                             alt="Stack Parking System" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Stack Parking System</h4>
                                <p>Two-Level Stacking Solution</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/stack.png" 
                                   class="popup-image" 
                                   title="Stack Parking System">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 - Hydraulic Puzzle -->
            <div class="gallery-item" data-category="hydraulic-puzzle">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/hydraulic.png" 
                             alt="Hydraulic Puzzle Parking" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Hydraulic Puzzle Parking</h4>
                                <p>Multi-Level Hydraulic System</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/hydraulic.png" 
                                   class="popup-image" 
                                   title="Hydraulic Puzzle Parking">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 - Mechanical Puzzle -->
            <div class="gallery-item" data-category="mechanical-puzzle">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/machnnical.png" 
                             alt="Mechanical Puzzle Parking" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Mechanical Puzzle Parking</h4>
                                <p>Smart Mechanical System</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/machnnical.png" 
                                   class="popup-image" 
                                   title="Mechanical Puzzle Parking">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 - Installation Project -->
            <div class="gallery-item" data-category="installation">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/01.jpg" 
                             alt="Installation Project" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Installation Project</h4>
                                <p>Professional Installation</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/01.jpg" 
                                   class="popup-image" 
                                   title="Installation Project">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 - Tower Parking -->
            <div class="gallery-item" data-category="tower-parking">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/02.jpg" 
                             alt="Tower Parking Installation" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Tower Parking System</h4>
                                <p>Commercial Installation</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/02.jpg" 
                                   class="popup-image" 
                                   title="Tower Parking">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 - Manufacturing -->
            <div class="gallery-item" data-category="manufacturing">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/03.jpg" 
                             alt="Manufacturing Facility" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Manufacturing</h4>
                                <p>State-of-the-Art Facility</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/03.jpg" 
                                   class="popup-image" 
                                   title="Manufacturing">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 - Stack Parking -->
            <div class="gallery-item" data-category="stack-parking">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/04.jpg" 
                             alt="Stack Parking Project" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Stack Parking System</h4>
                                <p>Residential Complex</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/04.jpg" 
                                   class="popup-image" 
                                   title="Stack Parking">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 9 - Installation -->
            <div class="gallery-item" data-category="installation">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/05.jpg" 
                             alt="Project Installation" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Installation Projects</h4>
                                <p>On-Site Assembly</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/05.jpg" 
                                   class="popup-image" 
                                   title="Installation">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 10 - Manufacturing -->
            <div class="gallery-item" data-category="manufacturing">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/06.jpg" 
                             alt="Manufacturing Process" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Manufacturing</h4>
                                <p>Quality Production</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/06.jpg" 
                                   class="popup-image" 
                                   title="Manufacturing">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 11 - Hydraulic Puzzle -->
            <div class="gallery-item" data-category="hydraulic-puzzle">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/07.jpg" 
                             alt="Hydraulic System" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Hydraulic Puzzle Parking</h4>
                                <p>Advanced Technology</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/07.jpg" 
                                   class="popup-image" 
                                   title="Hydraulic Puzzle">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 12 - Mechanical Puzzle -->
            <div class="gallery-item" data-category="mechanical-puzzle">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/08.jpg" 
                             alt="Mechanical System" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Mechanical Puzzle Parking</h4>
                                <p>Automated Solution</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/08.jpg" 
                                   class="popup-image" 
                                   title="Mechanical Puzzle">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 13 - Installation -->
            <div class="gallery-item" data-category="installation">
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo base_url(); ?>assets/img/home-1/project/09.jpg" 
                             alt="Completed Installation" 
                             class="img-fluid"
                             loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <h4>Installation Projects</h4>
                                <p>Successful Completion</p>
                                <a href="<?php echo base_url(); ?>assets/img/home-1/project/09.jpg" 
                                   class="popup-image" 
                                   title="Installation Complete">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-5">
            <button class="theme-btn load-more-btn">
                Load More <i class="fa-solid fa-arrow-down"></i>
            </button>
        </div>
    </div>
</section>

<!-- Custom Styles for Gallery -->
<style>
    /* ===== Gallery Section Container - Prevent Overflow ===== */
    .gallery-section.gallery-section-new {
        max-width: 100%;
        overflow: hidden;
    }

    .gallery-section.gallery-section-new .container {
        max-width: 90%;
        overflow: hidden;
    }

    /* ===== Gallery Filter Buttons ===== */
    .gallery-filter {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
        margin-bottom: 40px;
        max-width: 100%;
    }

    .gallery-filter .filter-btn {
        padding: 12px 25px;
        background: transparent;
        border: 2px solid #e5e5e5;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        color: #534F5A;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: capitalize;
        white-space: nowrap;
    }

    .gallery-filter .filter-btn:hover {
        border-color: #f94d00;
        color: #f94d00;
    }

    .gallery-filter .filter-btn.active {
        background: #f94d00;
        border-color: #f94d00;
        color: white;
    }

    /* ===== Gallery Grid ===== */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: clamp(15px, 2vw, 25px);
        max-width: 100%;
        overflow: hidden;
    }

    /* Masonry-style different heights for visual interest */
    .gallery-item:nth-child(1) .gallery-card,
    .gallery-item:nth-child(5) .gallery-card,
    .gallery-item:nth-child(9) .gallery-card {
        aspect-ratio: 4/3;
    }

    .gallery-item:nth-child(2) .gallery-card,
    .gallery-item:nth-child(6) .gallery-card,
    .gallery-item:nth-child(10) .gallery-card {
        aspect-ratio: 3/4;
    }

    .gallery-item:nth-child(3) .gallery-card,
    .gallery-item:nth-child(7) .gallery-card,
    .gallery-item:nth-child(11) .gallery-card {
        aspect-ratio: 1/1;
    }

    .gallery-item:nth-child(4) .gallery-card,
    .gallery-item:nth-child(8) .gallery-card,
    .gallery-item:nth-child(12) .gallery-card,
    .gallery-item:nth-child(13) .gallery-card {
        aspect-ratio: 16/10;
    }

    /* ===== Gallery Card ===== */
    .gallery-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        height: 100%;
        background: #fff;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        max-width: 100%;
    }

    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    /* ===== Gallery Image ===== */
    .gallery-image {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .gallery-image img {
        width: 100%;
        height: 100%;
        max-width: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
        display: block;
    }

    .gallery-card:hover .gallery-image img {
        transform: scale(1.1);
    }

    /* ===== Gallery Overlay ===== */
    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.2) 50%, transparent 100%);
        opacity: 0;
        transition: all 0.4s ease;
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .gallery-card:hover .gallery-overlay {
        opacity: 1;
    }

    .overlay-content {
        padding: 25px;
        text-align: center;
        transform: translateY(20px);
        transition: all 0.4s ease;
    }

    .gallery-card:hover .overlay-content {
        transform: translateY(0);
    }

    .overlay-content h4 {
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .overlay-content p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 13px;
        margin-bottom: 15px;
    }

    .overlay-content .popup-image {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 45px;
        height: 45px;
        background: #f94d00;
        border-radius: 50%;
        color: #fff;
        font-size: 18px;
        transition: all 0.3s ease;
    }

    .overlay-content .popup-image:hover {
        background: #fff;
        color: #f94d00;
        transform: scale(1.1);
    }

    /* ===== Filter Animation ===== */
    .gallery-item {
        transition: all 0.5s ease;
        opacity: 1;
        transform: scale(1);
        max-width: 100%;
        overflow: hidden;
    }

    .gallery-item.hide {
        opacity: 0;
        transform: scale(0.8);
        display: none;
    }

    .gallery-item.show {
        animation: fadeInUp 0.5s ease forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== Load More Button ===== */
    .load-more-btn {
        padding: 16px 40px;
    }

    .load-more-btn:hover {
        transform: translateY(-3px);
    }

    /* ===== Responsive Styles ===== */
    @media (max-width: 1399px) {
        .gallery-grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: clamp(12px, 1.5vw, 20px);
        }
    }

    @media (max-width: 1199px) {
        .gallery-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: clamp(10px, 1.5vw, 18px);
        }
    }

    @media (max-width: 991px) {
        .gallery-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: clamp(8px, 2vw, 15px);
        }

        .gallery-filter {
            gap: 10px;
        }

        .gallery-filter .filter-btn {
            padding: 10px 18px;
            font-size: 13px;
        }

        .overlay-content {
            padding: 20px;
        }
    }

    @media (max-width: 767px) {
        .gallery-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }

        .gallery-item .gallery-card {
            aspect-ratio: 4/3 !important;
        }
    }

    @media (max-width: 575px) {
        .gallery-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .gallery-filter {
            gap: 8px;
            justify-content: flex-start;
            overflow-x: auto;
            flex-wrap: nowrap;
            padding-bottom: 10px;
            -webkit-overflow-scrolling: touch;
        }

        .gallery-filter .filter-btn {
            padding: 8px 15px;
            font-size: 12px;
            flex-shrink: 0;
        }

        .overlay-content h4 {
            font-size: 16px;
        }

        .overlay-content p {
            font-size: 12px;
        }

        .overlay-content {
            padding: 15px;
        }
    }
</style>

