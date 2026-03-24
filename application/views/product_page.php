<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$product = isset($product) ? $product : null;
?>
<div id="smooth-wrapper">
	<div id="smooth-content">

		<!-- Breadcrumb Section Start -->
		<div class="breadcrumb-wrapper bg-cover" style="background-image: url('<?php echo base_url()?>assets/img/breadcrumb.jpg');">
			<div class="video-overlay"></div>
			<div class="container">
				<div class="page-heading">
					<div class="breadcrumb-sub-title">
						<h1 class="text-white wow fadeInUp" data-wow-delay=".3s">
							<?php echo $product ? htmlspecialchars($product['name']) : 'Service details'; ?></h1>
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
							<?php echo $product ? htmlspecialchars($product['name']) : 'Service details'; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>


		<!-- Service Details Section Start -->
		<section class="service-details-section fix section-padding">
			<div class="container">
				<div class="service-details-wrapper">
					<div class="service-top-img fix">
						<img data-speed=".8" src="<?php echo base_url() . $product['image']; ?>"
							alt="<?php echo $product ? htmlspecialchars($product['name']) : 'img'; ?>">
					</div>
					<div class="row g-4">
						<div class="col-lg-8">
							<div class="service-details-content">
								<h2><?php echo $product ? htmlspecialchars($product['name']) : 'Building strong foundations for long-term financial growth.'; ?>
								</h2>
								<p class="mt-3">
									<?php echo $product ? htmlspecialchars($product['description']) : 'In today\'s fast-paced corporate landscape, businesses require more than just short-term strategies to survive; they need robust frameworks that ensure sustainable, long-term financial growth.'; ?>
								</p>
								<!-- <h3>How Our System Works</h3>
								<p class="mt-3">
									<?php echo $product ? htmlspecialchars($product['operations']) : 'Our holistic approach goes beyond numbers. We understand that building a strong financial foundation requires aligning your team, culture, and organizational goals with your growth strategy.'; ?>
								</p> -->

							</div>
						</div>
						<div class="col-lg-4">
							<div class="service-details-sidebar">
								<div class="sidebar-widget">
									<div class="sideber-title">
										<h4 class="wow fadeInUp" data-wow-delay=".2s">
											<i class="fa-solid fa-star"></i>
											More services</h4>
									</div>
									<ul class="service-list-item wow fadeInUp" data-wow-delay=".4s">
										<li>
											<a href="<?php echo base_url('product/view/tower-parking-system'); ?>">
												<span>Tower Parking System</span>
												<span><i class="fa-solid fa-chevron-right"></i></span>
											</a>
										</li>
										<li>
											<a href="<?php echo base_url('product/view/stack-parking-system'); ?>">
												<span>Stack Parking System</span>
												<span><i class="fa-solid fa-chevron-right"></i></span>
											</a>
										</li>
										<li>
											<a
												href="<?php echo base_url('product/view/hydraulic-puzzle-parking-system'); ?>">
												<span>Hydraulic Puzzle Parking</span>
												<span><i class="fa-solid fa-chevron-right"></i></span>
											</a>
										</li>
										<li>
											<a
												href="<?php echo base_url('product/view/mechanical-puzzle-parking-system'); ?>">
												<span>Mechanical Puzzle Parking</span>
												<span><i class="fa-solid fa-chevron-right"></i></span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="service-details-content mt-5">
								<div class="service-box-area pb-5">
									<div class="row g-4">
										<?php if(!empty($product['suitablefor'])): ?>
										<div class="col-xl-4 col-lg-4 col-md-6">
											<div class="service-box-items d-flex flex-column h-100">
												<span class="number">01.</span>
												<h5>Suitable For</h5>
												<div class="service-box-content">
													<div class="text-area">
														<p class="service-box-text"><?php echo htmlspecialchars($product['suitablefor']); ?></p>
													</div>
													<button class="read-toggle" onclick="toggleReadMore(this)">Read More</button>
												</div>
											</div>
										</div>
										<?php endif; ?>

										<?php if(!empty($product['function'])): ?>
										<div class="col-xl-4 col-lg-4 col-md-6">
											<div class="service-box-items d-flex flex-column h-100">
												<span class="number">02.</span>
												<h5>Function</h5>
												<div class="service-box-content">
													<div class="text-area">
														<p class="service-box-text"><?php echo htmlspecialchars($product['function']); ?></p>
													</div>
													<button class="read-toggle" onclick="toggleReadMore(this)">Read More</button>
												</div>
											</div>
										</div>
										<?php endif; ?>
										<?php if(!empty($product['structure'])): ?>
										<div class="col-xl-4 col-lg-4 col-md-6">
											<div class="service-box-items d-flex flex-column h-100">
												<span class="number">03.</span>
												<h5>Structure & Safety</h5>
												<div class="service-box-content">
													<div class="text-area">
														<p class="service-box-text"><?php echo htmlspecialchars($product['structure']); ?></p>
													</div>
													<button class="read-toggle" onclick="toggleReadMore(this)">Read More</button>
												</div>
											</div>
										</div>
										<?php endif; ?>
										<?php if(!empty($product['safety_modification'])): ?>
										<div class="col-xl-4 col-lg-4 col-md-6">
											<div class="service-box-items d-flex flex-column h-100">
												<span class="number">04.</span>
												<h5>Safety Modification</h5>
												<div class="service-box-content">
													<div class="text-area">
														<p class="service-box-text"><?php echo htmlspecialchars($product['safety_modification']); ?></p>
													</div>
													<button class="read-toggle" onclick="toggleReadMore(this)">Read More</button>
												</div>
											</div>
										</div>
										<?php endif; ?>
										<?php if(!empty($product['recommendedfor'])): ?>
										<div class="col-xl-4 col-lg-4 col-md-6">
											<div class="service-box-items d-flex flex-column h-100">
												<span class="number">05.</span>
												<h5>Recommended For</h5>
												<div class="service-box-content">
													<div class="text-area">
														<p class="service-box-text"><?php echo htmlspecialchars($product['recommendedfor']); ?></p>
													</div>
													<button class="read-toggle" onclick="toggleReadMore(this)">Read More</button>
												</div>
											</div>
										</div>
										<?php endif; ?>
										<?php if(!empty($product['operations'])): ?>
										<div class="col-xl-4 col-lg-4 col-md-6">
											<div class="service-box-items d-flex flex-column h-100">
												<span class="number">06.</span>
												<h5>Operations</h5>
												<div class="service-box-content">
													<div class="text-area">
														<p class="service-box-text"><?php echo htmlspecialchars($product['operations']); ?></p>
													</div>
													<button class="read-toggle" onclick="toggleReadMore(this)">Read More</button>
												</div>
											</div>
										</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="faq-items mt-5">
									<div class="accordion" id="accordionExample">
										<div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
											<h2 class="accordion-header" id="headingOne">
												<button class="accordion-button" type="button" data-bs-toggle="collapse"
													data-bs-target="#collapseOne" aria-expanded="true"
													aria-controls="collapseOne">
													1. What is an automated parking system?
												</button>
											</h2>
											<div id="collapseOne" class="accordion-collapse collapse show"
												aria-labelledby="headingOne" data-bs-parent="#accordionExample"
												role="region">
												<div class="accordion-body">
													<p>
														An automated parking system is a mechanical system that automatically parks and retrieves vehicles without human intervention. These systems maximize parking space efficiency by using vertical and horizontal movement to store multiple cars in a compact area, making them ideal for urban environments with limited space.
													</p>
												</div>
											</div>
										</div>
										<div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
											<h2 class="accordion-header" id="headingTwo">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapseTwo"
													aria-expanded="false" aria-controls="collapseTwo">
													2. How safe are automated parking systems?
												</button>
											</h2>
											<div id="collapseTwo" class="accordion-collapse collapse"
												aria-labelledby="headingTwo" data-bs-parent="#accordionExample"
												role="region">
												<div class="accordion-body">
													<p>
														Automated parking systems are extremely safe. They eliminate the need for drivers to walk through parking aisles, reducing the risk of accidents and theft. Our systems include multiple safety features such as motion sensors, emergency stops, and mechanical locks to ensure vehicle security.
													</p>
												</div>
											</div>
										</div>
										<div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
											<h2 class="accordion-header" id="headingthree">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsethree"
													aria-expanded="false" aria-controls="collapsethree">
													3. How much space can I save with an automated parking system?
												</button>
											</h2>
											<div id="collapsethree" class="accordion-collapse collapse"
												aria-labelledby="headingthree" data-bs-parent="#accordionExample"
												role="region">
												<div class="accordion-body">
													<p>
														Automated parking systems can save up to 50-70% of parking space compared to conventional parking. Tower parking systems are particularly efficient, accommodating 20+ cars in the space of just 2-3 conventional parking spots. This makes them perfect for residential societies, commercial buildings, and offices with limited parking area.
													</p>
												</div>
											</div>
										</div>
										<div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
											<h2 class="accordion-header" id="headingfour">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsefour"
													aria-expanded="false" aria-controls="collapsefour">
													4. What is the maintenance requirement for these systems?
												</button>
											</h2>
											<div id="collapsefour" class="accordion-collapse collapse"
												aria-labelledby="headingfour" data-bs-parent="#accordionExample"
												role="region">
												<div class="accordion-body">
													<p>
														Our automated parking systems require minimal maintenance. We recommend quarterly inspections and annual servicing to ensure optimal performance. Galaxy Parking provides comprehensive maintenance contracts with 24/7 technical support to address any issues promptly.
													</p>
												</div>
											</div>
										</div>
										<div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".3s">
											<h2 class="accordion-header" id="headingfive">
												<button class="accordion-button collapsed" type="button"
													data-bs-toggle="collapse" data-bs-target="#collapsefive"
													aria-expanded="false" aria-controls="collapsefive">
													5. How long does installation take?
												</button>
											</h2>
											<div id="collapsefive" class="accordion-collapse collapse"
												aria-labelledby="headingfive" data-bs-parent="#accordionExample"
												role="region">
												<div class="accordion-body">
													<p>
														Installation time varies depending on the type and capacity of the system. Stack parking systems can be installed within 2-4 weeks, while larger tower parking systems may take 3-6 months. Our team provides a detailed timeline during the consultation phase.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
