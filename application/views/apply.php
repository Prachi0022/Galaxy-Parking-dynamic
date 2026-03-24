<link rel="stylesheet" href="<?php echo base_url()?>assets/css/career.css">

<?php
// Get job slug from URL
$job_slug = $this->uri->segment(2);

// Job data - in a real application, this would come from database
$jobs = array(
    'senior-mechanical-engineer' => array(
        'title' => 'Senior Mechanical Engineer',
        'department' => 'Engineering',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '5-7 Years',
        'type' => 'Full Time'
    ),
    'electrical-engineer' => array(
        'title' => 'Electrical Engineer',
        'department' => 'Engineering',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '3-5 Years',
        'type' => 'Full Time'
    ),
    'cad-designer' => array(
        'title' => 'CAD Designer',
        'department' => 'Design',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '2-4 Years',
        'type' => 'Full Time'
    ),
    'sales-manager' => array(
        'title' => 'Sales Manager',
        'department' => 'Sales & Marketing',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '4-6 Years',
        'type' => 'Full Time'
    ),
    'project-manager' => array(
        'title' => 'Project Manager',
        'department' => 'Operations',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '5-8 Years',
        'type' => 'Full Time'
    ),
    'service-engineer' => array(
        'title' => 'Service Engineer',
        'department' => 'Engineering',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '2-4 Years',
        'type' => 'Full Time'
    ),
    'business-development-executive' => array(
        'title' => 'Business Development Executive',
        'department' => 'Sales & Marketing',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '2-4 Years',
        'type' => 'Full Time'
    ),
    'hr-coordinator' => array(
        'title' => 'HR Coordinator',
        'department' => 'Administration',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '1-3 Years',
        'type' => 'Full Time'
    )
);

// Get current job or use default
$job = isset($jobs[$job_slug]) ? $jobs[$job_slug] : $jobs['senior-mechanical-engineer'];
?>

<div id="smooth-wrapper">
	<div id="smooth-content">
		<!-- Breadcrumb Section Start -->
		<div class="breadcrumb-wrapper bg-cover"
			style="background-image: url('<?php echo base_url()?>assets/img/breadcrumb.jpg');">
			<div class="container">
				<div class="page-heading">
					<div class="breadcrumb-sub-title">
						<h1 class="text-white wow fadeInUp" data-wow-delay=".3s">Job Application</h1>
					</div>
					<ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".5s">
						<li>
							<a href="<?php echo base_url()?>">
								<i class="fa-solid fa-house"></i> Home
							</a>
						</li>
						<li>/</li>
						<li>
							<a href="<?php echo base_url()?>careers">Careers</a>
						</li>
						<li>/</li>
						<li>Apply</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Application Form Section Start -->
		<section class="apply-section">
			<div class="container">
				<div class="apply-form-container">
					<h1>Apply for the Position</h1>
					<p class="form-subtitle"><?php echo $job['title']; ?> - <?php echo $job['department']; ?></p>

					<!-- Success Message -->
					<div class="success-message" id="successMessage">
						<div class="success-icon">
							<i class="fa-solid fa-check"></i>
						</div>
						<h3>Application Submitted Successfully!</h3>
						<p>Thank you for applying. Our HR team will review your application and get back to you within
							3-5 business days.</p>
						<a href="<?php echo base_url()?>careers" class="theme-btn"
							style="display: inline-flex; margin-top: 20px;">
							Back to Careers <i class="fa-solid fa-arrow-right"></i>
						</a>
					</div>

					<!-- Application Form -->
					<form class="apply-form" id="jobApplicationForm">
						<input type="hidden" name="position" value="<?php echo $job_slug; ?>">

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="fullName">Full Name <span class="required">*</span></label>
									<input type="text" class="form-control" id="fullName" name="fullName"
										placeholder="Enter your full name" required>
									<span class="error-message">Please enter your full name</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="email">Email Address <span class="required">*</span></label>
									<input type="email" class="form-control" id="email" name="email"
										placeholder="Enter your email address" required>
									<span class="error-message">Please enter a valid email address</span>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="phone">Phone Number <span class="required">*</span></label>
									<input type="tel" class="form-control" id="phone" name="phone"
										placeholder="Enter your phone number" required>
									<span class="error-message">Please enter your phone number</span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="experience">Experience (Years) <span class="required">*</span></label>
									<select class="form-control" id="experience" name="experience" required>
										<option value="">Select experience</option>
										<option value="0-1">0-1 Years</option>
										<option value="1-2">1-2 Years</option>
										<option value="2-3">2-3 Years</option>
										<option value="3-5">3-5 Years</option>
										<option value="5-7">5-7 Years</option>
										<option value="7-10">7-10 Years</option>
										<option value="10+">10+ Years</option>
									</select>
									<span class="error-message">Please select your experience</span>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="positionApplied">Position Applying For <span class="required">*</span></label>
							<input type="text" class="form-control" id="positionApplied" name="positionApplied"
								value="<?php echo $job['title']; ?>" readonly>
						</div>

						<div class="form-group">
							<label for="resume">Upload Resume (PDF/DOC) <span class="required">*</span></label>
							<div class="file-upload-wrapper">
								<input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
								<div class="file-display" id="fileDisplay">
									<i class="fa-solid fa-cloud-upload-alt"></i>
									<p>Drag & drop your resume here or click to browse</p>
									<small>Supported formats: PDF, DOC, DOCX (Max size: 5MB)</small>
								</div>
							</div>
							<span class="error-message">Please upload your resume</span>
						</div>

						<div class="form-group">
							<label for="coverLetter">Cover Letter</label>
							<textarea class="form-control" id="coverLetter" name="coverLetter"
								placeholder="Tell us why you're the perfect fit for this role..."></textarea>
						</div>

						<div class="form-group">
							<label style="display: flex; align-items: start; gap: 10px; cursor: pointer;">
								<input type="checkbox" id="terms" name="terms" required style="margin-top: 5px;">
								<span style="font-weight: 400; font-size: 0.875rem; color: #6c757d;">
									I agree to the processing of my personal data for recruitment purposes. I understand
									that my information will be kept confidential and used only for the hiring process.
								</span>
							</label>
							<span class="error-message" id="termsError">Please accept the terms and conditions</span>
						</div>

						<button type="submit" class="theme-btn">
							Submit Application <i class="fa-solid fa-paper-plane"></i>
						</button>
					</form>
				</div>
			</div>
		</section>

		<script>
			document.addEventListener('DOMContentLoaded', function () {
				const form = document.getElementById('jobApplicationForm');
				const fileInput = document.getElementById('resume');
				const fileDisplay = document.getElementById('fileDisplay');
				const successMessage = document.getElementById('successMessage');

				// File upload display
				fileInput.addEventListener('change', function (e) {
					if (this.files && this.files[0]) {
						const file = this.files[0];
						fileDisplay.innerHTML = `
                    <i class="fa-solid fa-file-pdf" style="color: #ebc86d;"></i>
                    <p style="font-weight: 600; color: #000;">${file.name}</p>
                    <small>${(file.size / 1024 / 1024).toFixed(2)} MB</small>
                `;
					}
				});

				// Form validation
				form.addEventListener('submit', function (e) {
					e.preventDefault();

					let isValid = true;

					// Validate required fields
					const requiredFields = form.querySelectorAll('[required]');
					requiredFields.forEach(field => {
						const formGroup = field.closest('.form-group');
						if (!field.value.trim()) {
							formGroup.classList.add('error');
							isValid = false;
						} else {
							formGroup.classList.remove('error');
						}
					});

					// Validate email format
					const emailField = document.getElementById('email');
					const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
					if (emailField.value && !emailRegex.test(emailField.value)) {
						emailField.closest('.form-group').classList.add('error');
						isValid = false;
					}

					// Validate phone (basic)
					const phoneField = document.getElementById('phone');
					if (phoneField.value && phoneField.value.length < 10) {
						phoneField.closest('.form-group').classList.add('error');
						isValid = false;
					}

					// Validate file size (max 5MB)
					if (fileInput.files && fileInput.files[0]) {
						const fileSize = fileInput.files[0].size / 1024 / 1024; // in MB
						if (fileSize > 5) {
							alert('File size must be less than 5MB');
							isValid = false;
						}
					}

					// Validate terms checkbox
					const termsCheckbox = document.getElementById('terms');
					if (!termsCheckbox.checked) {
						document.getElementById('termsError').style.display = 'block';
						isValid = false;
					} else {
						document.getElementById('termsError').style.display = 'none';
					}

					if (isValid) {
						// Simulate form submission
						const submitBtn = form.querySelector('.theme-btn');
						submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting...';
						submitBtn.disabled = true;

						// Simulate API call
						setTimeout(function () {
							form.style.display = 'none';
							successMessage.classList.add('show');

							// Scroll to top of success message
							successMessage.scrollIntoView({
								behavior: 'smooth'
							});
						}, 1500);
					}
				});

				// Remove error class on input
				const formGroups = form.querySelectorAll('.form-group');
				formGroups.forEach(group => {
					const input = group.querySelector('input, select, textarea');
					if (input) {
						input.addEventListener('input', function () {
							group.classList.remove('error');
						});
					}
				});
			});

		</script>
