<link rel="stylesheet" href="<?php echo base_url()?>assets/css/career.css">
<div id="smooth-wrapper">
	<div id="smooth-content">
		<!-- Hero Section Start -->
		<div class="breadcrumb-wrapper bg-cover"
			style="background-image: url('<?php echo base_url()?>assets/img/breadcrumb.jpg');">
			<div class="hero-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<div class="career-hero-content pt-200">
							<h1 class="text-anim">Join Our <span>Team</span></h1>
							<p class="wow fadeInUp" data-wow-delay=".3s">
								Be part of a dynamic team that's revolutionizing urban parking solutions.
								At Galaxy Parking, we value innovation, teamwork, and professional growth.
								Join us in creating smarter, more efficient parking systems for the future.
							</p>
							<a href="#openings" class="theme-btn wow fadeInUp" data-wow-delay=".5s">
								View Current Openings <i class="fa-solid fa-arrow-down"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Why Work With Us Section Start -->
		<section class="why-work-section">
			<div class="container">
				<div class="career-section-title">
					<span class="sub-title wow fadeInUp">Why Choose Us</span>
					<h2 class="text-anim">Build Your Career With Us</h2>
					<p class="wow fadeInUp" data-wow-delay=".2s">
						We offer more than just a job – we provide a platform for your professional growth and personal
						development.
					</p>
				</div>
				<div class="row g-4">
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".1s">
						<div class="why-work-card">
							<div class="icon-box">
								<i class="fa-solid fa-rocket"></i>
							</div>
							<h3>Career Growth</h3>
							<p>Clear progression paths and regular performance reviews to help you advance in your
								career
								journey with us.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
						<div class="why-work-card">
							<div class="icon-box">
								<i class="fa-solid fa-lightbulb"></i>
							</div>
							<h3>Innovative Environment</h3>
							<p>Work on cutting-edge parking solutions with the latest technology in a creative and
								innovative
								workspace.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
						<div class="why-work-card">
							<div class="icon-box">
								<i class="fa-solid fa-users"></i>
							</div>
							<h3>Skilled Team</h3>
							<p>Collaborate with experienced professionals and industry experts who share your passion
								for
								excellence.</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
						<div class="why-work-card">
							<div class="icon-box">
								<i class="fa-solid fa-graduation-cap"></i>
							</div>
							<h3>Learning Opportunities</h3>
							<p>Access continuous training programs, workshops, and certifications to enhance your skills
								and
								knowledge.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Current Openings Section Start -->
		<section id="openings" class="current-openings-section">
			<div class="container">
				<div class="openings-header">
					<h2>Current Openings</h2>
					<div class="job-filter">
						<select id="departmentFilter" class="filter-select">
							<option value="">All Departments</option>
							<option value="engineering">Engineering</option>
							<option value="design">Design</option>
							<option value="sales">Sales & Marketing</option>
							<option value="operations">Operations</option>
							<option value="administration">Administration</option>
						</select>
						<select id="jobTypeFilter" class="filter-select">
							<option value="">All Job Types</option>
							<option value="full-time">Full Time</option>
							<option value="part-time">Part Time</option>
							<option value="contract">Contract</option>
						</select>
					</div>
				</div>

				<div class="job-listings">
					<!-- Job Card 1 -->
					<div class="job-card" data-department="engineering" data-type="full-time">
						<div class="job-info">
							<h3 class="job-title">Senior Mechanical Engineer</h3>
							<div class="job-meta">
								<span><i class="fa-solid fa-building"></i> Engineering</span>
								<span><i class="fa-solid fa-location-dot"></i> Navi Mumbai, Maharashtra</span>
								<span><i class="fa-solid fa-briefcase"></i> 5-7 Years</span>
							</div>
							<p class="job-summary">Lead mechanical design projects for automated parking systems.
								Collaborate
								with cross-functional teams to deliver innovative solutions.</p>
						</div>
						<div class="job-action">
							<a href="<?php echo base_url()?>jobs/senior-mechanical-engineer"
								class="view-details-btn">View
								Details</a>
							<a href="<?php echo base_url()?>apply/senior-mechanical-engineer" class="theme-btn">Apply
								Now</a>
						</div>
					</div>

					<!-- Job Card 2 -->
					<div class="job-card" data-department="engineering" data-type="full-time">
						<div class="job-info">
							<h3 class="job-title">Electrical Engineer</h3>
							<div class="job-meta">
								<span><i class="fa-solid fa-building"></i> Engineering</span>
								<span><i class="fa-solid fa-location-dot"></i> Navi Mumbai, Maharashtra</span>
								<span><i class="fa-solid fa-briefcase"></i> 3-5 Years</span>
							</div>
							<p class="job-summary">Design and implement electrical control systems for parking
								equipment. Ensure
								compliance with safety standards and regulations.</p>
						</div>
						<div class="job-action">
							<a href="<?php echo base_url()?>jobs/electrical-engineer" class="view-details-btn">View
								Details</a>
							<a href="<?php echo base_url()?>apply/electrical-engineer" class="theme-btn">Apply Now</a>
						</div>
					</div>

					<!-- Job Card 3 -->
					<div class="job-card" data-department="design" data-type="full-time">
						<div class="job-info">
							<h3 class="job-title">CAD Designer</h3>
							<div class="job-meta">
								<span><i class="fa-solid fa-building"></i> Design</span>
								<span><i class="fa-solid fa-location-dot"></i> Navi Mumbai, Maharashtra</span>
								<span><i class="fa-solid fa-briefcase"></i> 2-4 Years</span>
							</div>
							<p class="job-summary">Create detailed 2D and 3D drawings for parking system components.
								Work
								closely with engineering team on product development.</p>
						</div>
						<div class="job-action">
							<a href="<?php echo base_url()?>jobs/cad-designer" class="view-details-btn">View Details</a>
							<a href="<?php echo base_url()?>apply/cad-designer" class="theme-btn">Apply Now</a>
						</div>
					</div>

					<!-- Job Card 4 -->
					<div class="job-card" data-department="sales" data-type="full-time">
						<div class="job-info">
							<h3 class="job-title">Sales Manager</h3>
							<div class="job-meta">
								<span><i class="fa-solid fa-building"></i> Sales & Marketing</span>
								<span><i class="fa-solid fa-location-dot"></i> Navi Mumbai, Maharashtra</span>
								<span><i class="fa-solid fa-briefcase"></i> 4-6 Years</span>
							</div>
							<p class="job-summary">Drive business growth through strategic sales initiatives. Build and
								maintain
								relationships with key clients and partners.</p>
						</div>
						<div class="job-action">
							<a href="<?php echo base_url()?>jobs/sales-manager" class="view-details-btn">View
								Details</a>
							<a href="<?php echo base_url()?>apply/sales-manager" class="theme-btn">Apply Now</a>
						</div>
					</div>

					<!-- Job Card 5 -->
					<div class="job-card" data-department="operations" data-type="full-time">
						<div class="job-info">
							<h3 class="job-title">Project Manager</h3>
							<div class="job-meta">
								<span><i class="fa-solid fa-building"></i> Operations</span>
								<span><i class="fa-solid fa-location-dot"></i> Navi Mumbai, Maharashtra</span>
								<span><i class="fa-solid fa-briefcase"></i> 5-8 Years</span>
							</div>
							<p class="job-summary">Oversee installation projects from planning to completion. Coordinate
								with
								clients, contractors, and internal teams.</p>
						</div>
						<div class="job-action">
							<a href="<?php echo base_url()?>jobs/project-manager" class="view-details-btn">View
								Details</a>
							<a href="<?php echo base_url()?>apply/project-manager" class="theme-btn">Apply Now</a>
						</div>
					</div>

					<!-- Job Card 6 -->
					<div class="job-card" data-department="engineering" data-type="full-time">
						<div class="job-info">
							<h3 class="job-title">Service Engineer</h3>
							<div class="job-meta">
								<span><i class="fa-solid fa-building"></i> Engineering</span>
								<span><i class="fa-solid fa-location-dot"></i> Navi Mumbai, Maharashtra</span>
								<span><i class="fa-solid fa-briefcase"></i> 2-4 Years</span>
							</div>
							<p class="job-summary">Provide technical support and maintenance services for installed
								parking
								systems. Ensure customer satisfaction through timely service.</p>
						</div>
						<div class="job-action">
							<a href="<?php echo base_url()?>jobs/service-engineer" class="view-details-btn">View
								Details</a>
							<a href="<?php echo base_url()?>apply/service-engineer" class="theme-btn">Apply Now</a>
						</div>
					</div>

					<!-- Job Card 7 -->
					<div class="job-card" data-department="sales" data-type="full-time">
						<div class="job-info">
							<h3 class="job-title">Business Development Executive</h3>
							<div class="job-meta">
								<span><i class="fa-solid fa-building"></i> Sales & Marketing</span>
								<span><i class="fa-solid fa-location-dot"></i> Navi Mumbai, Maharashtra</span>
								<span><i class="fa-solid fa-briefcase"></i> 2-4 Years</span>
							</div>
							<p class="job-summary">Identify new business opportunities and generate leads. Develop
								strategic
								partnerships to expand market reach.</p>
						</div>
						<div class="job-action">
							<a href="<?php echo base_url()?>jobs/business-development-executive"
								class="view-details-btn">View
								Details</a>
							<a href="<?php echo base_url()?>apply/business-development-executive"
								class="theme-btn">Apply
								Now</a>
						</div>
					</div>

					<!-- Job Card 8 -->
					<div class="job-card" data-department="administration" data-type="full-time">
						<div class="job-info">
							<h3 class="job-title">HR Coordinator</h3>
							<div class="job-meta">
								<span><i class="fa-solid fa-building"></i> Administration</span>
								<span><i class="fa-solid fa-location-dot"></i> Navi Mumbai, Maharashtra</span>
								<span><i class="fa-solid fa-briefcase"></i> 1-3 Years</span>
							</div>
							<p class="job-summary">Support HR operations including recruitment, onboarding, and employee
								relations. Maintain HR records and policies.</p>
						</div>
						<div class="job-action">
							<a href="<?php echo base_url()?>jobs/hr-coordinator" class="view-details-btn">View
								Details</a>
							<a href="<?php echo base_url()?>apply/hr-coordinator" class="theme-btn">Apply Now</a>
						</div>
					</div>
				</div>

				<!-- No Results Message -->
				<div id="noResults" class="text-center" style="display: none; padding: 40px;">
					<i class="fa-solid fa-search" style="font-size: 3rem; color: #ebc86d; margin-bottom: 20px;"></i>
					<h3>No Jobs Found</h3>
					<p>Try adjusting your filters to find more opportunities.</p>
				</div>
			</div>
		</section>

		<script>
			document.addEventListener('DOMContentLoaded', function () {
				const departmentFilter = document.getElementById('departmentFilter');
				const jobTypeFilter = document.getElementById('jobTypeFilter');
				const jobCards = document.querySelectorAll('.job-card');
				const noResults = document.getElementById('noResults');

				function filterJobs() {
					const deptValue = departmentFilter.value;
					const typeValue = jobTypeFilter.value;
					let visibleCount = 0;

					jobCards.forEach(card => {
						const cardDept = card.getAttribute('data-department');
						const cardType = card.getAttribute('data-type');

						const deptMatch = !deptValue || cardDept === deptValue;
						const typeMatch = !typeValue || cardType === typeValue;

						if (deptMatch && typeMatch) {
							card.style.display = 'flex';
							visibleCount++;
						} else {
							card.style.display = 'none';
						}
					});

					noResults.style.display = visibleCount === 0 ? 'block' : 'none';
				}

				departmentFilter.addEventListener('change', filterJobs);
				jobTypeFilter.addEventListener('change', filterJobs);
			});

		</script>
