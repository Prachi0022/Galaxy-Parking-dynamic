     
      <div id="smooth-wrapper">
      	<div id="smooth-content">

      		<!-- Hero Section Start -->
      		<section class="hero-section hero-3 fix bg-cover" style="position:relative; overflow: hidden;">
      			<!-- Video Background -->
      			<video autoplay muted loop playsinline style="
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            z-index: 0;
                        ">
      				<source src="<?php echo base_url()?>assets/img/final.mp4" type="video/mp4">
      				Your browser does not support the video tag.
      			</video>
      			<!-- Semi-transparent black overlay to highlight content -->
      			<div style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: #000000b3;
                        z-index: 1;
                    "></div>
      			<div class="container" style="position:relative; z-index: 2;">
      				<div class="row g-4">
      					<div class="col-lg-12">
      						<div class="hero-content">
      							<h1 class="text-anims">
      								Smart Parking Solutions <br> Built for Growing <br> Cities.
      							</h1>
      							<p class="wow fadeInUp" data-wow-delay=".3s">
      								We design and manufacture advanced mechanical and automated parking systems that
      								maximize space, increase efficiency, and future-proof urban infrastructure. From
      								residential societies to commercial complexes, we make parking effortless.
      							</p>
      							<div class="hero-btn text-anims">
      								<a href="#!" class="theme-btn">
      									Get started now <i class="fa-solid fa-arrow-up-right"></i>
      								</a>
      								<a href="#!" class="theme-btn style-2">
      									Let’s talk <i class="fa-solid fa-arrow-up-right"></i>
      								</a>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</section>

      		<!-- Service Section Start -->
      		<section class="service-section-3 section-padding fix">
      			<div class="container">
      				<div class="section-title-area">
      					<div class="section-title">
      						<span class="sub-title wow fadeInUp">
      							<img src="<?php echo base_url()?>assets/img/home-1/hero/setting.png" alt="img">
      							Our Products
      						</span>
      						<h2 class="text-anim">
      							Transforming Ideas Into <br> Digital Solutions
      						</h2>
      					</div>
      					<p class="text-anims">
      						Businesses to thrive in changing digital <br> world. With over a decade.
      					</p>
      					<div class="array-button text-anims">
      						<button class="array-prev"><i class="fa-solid fa-chevron-left"></i></button>
      						<button class="array-next"><i class="fa-solid fa-chevron-right"></i></button>
      					</div>
      				</div>
      			</div>
      			<div class="swiper service-slider-3">
      				<div class="swiper-wrapper">
      					<div class="swiper-slide">
      						<div class="service-card-items-3">
      							<div class="service-image">
      								<img src="<?php echo base_url()?>assets/img/home-1/project/tower.png" alt="img">
      							</div>
      							<div class="service-content">
      								<h3>
      									<a href="#!">Tower Parking System</a>
      								</h3>
      								<p>
      									Fully automated vertical parking solution ideal for high-rise buildings and
      									commercial hubs requiring maximum vehicle capacity in minimum land area.
      								</p>
      								<a href="#!" class="theme-btn">
      									Learn more <i class="fa-solid fa-arrow-up-right"></i>
      								</a>
      							</div>
      						</div>
      					</div>
      					<div class="swiper-slide">
      						<div class="service-card-items-3">
      							<div class="service-image">
      								<img src="<?php echo base_url()?>assets/img/home-1/project/stack.png" alt="img">
      							</div>
      							<div class="service-content">
      								<h3>
      									<a href="#!">Stack Parking System</a>
      								</h3>
      								<p>
      									Cost-effective two-level parking system designed for compact installations and
      									quick deployment.
      								</p>
      								<a href="#!" class="theme-btn">
      									Learn more <i class="fa-solid fa-arrow-up-right"></i>
      								</a>
      							</div>
      						</div>
      					</div>
      					<div class="swiper-slide">
      						<div class="service-card-items-3">
      							<div class="service-image">
      								<img src="<?php echo base_url()?>assets/img/home-1/project/hydraulic.png"
      									alt="img">
      							</div>
      							<div class="service-content">
      								<h3>
      									<a href="#!">Hydraulic Puzzle Parking System</a>
      								</h3>
      								<p>
      									Efficient multi-level parking designed for residential and commercial spaces.
      									Optimized for limited ground footprint and high vehicle density.
      								</p>
      								<a href="#!" class="theme-btn">
      									Learn more <i class="fa-solid fa-arrow-up-right"></i>
      								</a>
      							</div>
      						</div>
      					</div>
      					<div class="swiper-slide">
      						<div class="service-card-items-3">
      							<div class="service-image">
      								<img src="<?php echo base_url()?>assets/img/home-1/project/machnnical.png"
      									alt="img">
      							</div>
      							<div class="service-content">
      								<h3>
      									<a href="#!">Mechanical Puzzle Parking System</a>
      								</h3>
      								<p>
      									Smart horizontal and vertical movement system ensuring smooth operation,
      									durability, and safety compliance.
      								</p>
      								<a href="#!" class="theme-btn">
      									Learn more <i class="fa-solid fa-arrow-up-right"></i>
      								</a>
      							</div>
      						</div>
      					</div>
      				</div>
      				<div class="swiper-dot">
      					<div class="dot"></div>
      				</div>
      			</div>
      		</section>

      		<!-- Brand Section Start -->
      		<?php $this->load->view('component/brand'); ?>

      	
      		<!-- Feature Section-3 Start -->
      		<?php $this->load->view('component/feature'); ?>

      		<!-- Project Section Start -->
      		<section class="project-section section-padding fix pt-0">
      			<div class="container">
      				<div class="section-title text-center">
      					<span class="sub-title wow fadeInUp">
      						<img src="<?php echo base_url(); ?>assets/img/home-1/hero/setting.png" alt="img">
      						Our Project
      					</span>
      					<h2 class="text-anim">
      						Showcase Of Our Recognized Work
      					</h2>
      				</div>
      				<div class="project-box-wrapper project-panel-area">
      					<div class="project-card-items project-panel">
      						<h4>01.</h4>
      						<div class="project-content">
      							<h3>
      								<a href="#!">Pillers Group</a>
      							</h3>
      							<h5 style="font-weight: 800;" class="mt-5 mb-5">Three Level Stack Parking System</h5>
      							<p>
      								The Three Level Stack Parking System is a space-optimizing mechanical solution
      								designed to park three vehicles vertically within the footprint of a single
      								parking space. Ideal for residential societies and commercial buildings, it
      								maximizes parking capacity while maintaining safety, structural stability, and
      								smooth hydraulic operation.
      							</p>
      							<a href="#!" class="theme-btn">
      								Know more us <i class="fa-solid fa-arrow-up-right"></i>
      							</a>

      						</div>
      						<div class="project-thumb scale">
      							<img src="<?php echo base_url(); ?>assets/img/home-1/project/machnnical.png" alt="img">
      						</div>
      					</div>
      					<div class="project-card-items project-panel">
      						<h4>02.</h4>
      						<div class="project-content">
      							<h3>
      								<a href="#!">Thakur Realtors Pvt. Ltd.</a>
      							</h3>
      							<h5 style="font-weight: 800;" class="mt-5 mb-5">Two Level Stack Parking System</h5>

      							<p>
      								The Two Level Stack Parking System is a cost-effective and efficient parking
      								solution that allows two vehicles to be parked vertically in the space of one.
      								Designed for compact areas, it offers easy operation, strong load-bearing
      								structure, and reliable safety mechanisms, making it perfect for apartments and
      								office complexes.
      							</p>
      							<a href="#!" class="theme-btn">
      								Know more us <i class="fa-solid fa-arrow-up-right"></i>
      							</a>
      						</div>
      						<div class="project-thumb scale">
      							<img src="<?php echo base_url(); ?>assets/img/home-1/project/stack.png" alt="img">
      						</div>
      					</div>
      					<div class="project-card-items mb-0 project-panel">
      						<h4>03.</h4>
      						<div class="project-content">
      							<h3>
      								<a href="#!">Trimurti Construction</a>
      							</h3>
      							<h5 style="font-weight: 800;" class="mt-5 mb-5">Two Level Stack Parking System</h5>

      							<p>
      								This system is engineered to increase parking capacity without expanding ground
      								space. With robust construction, user-friendly controls, and minimal maintenance
      								requirements, the Two Level Stack Parking System ensures safe and organized
      								parking for modern infrastructure projects.
      							</p>
      							<a href="#!" class="theme-btn">
      								Know more us <i class="fa-solid fa-arrow-up-right"></i>
      							</a>
      						</div>
      						<div class="project-thumb scale">
      							<img src="<?php echo base_url(); ?>assets/img/home-1/project/stack.png" alt="img">
      						</div>
      					</div>
      				</div>
      			</div>
      		</section>

      		<?php $this->load->view('component/journey'); ?>

      		<!-- Testimonial Section Start -->
      		<?php $this->load->view('component/testimonial'); ?>
      		

      		<!-- News Section Start -->
      		<?php $this->load->view('component/blog'); ?>
      		

