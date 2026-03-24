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
        'type' => 'Full Time',
        'summary' => 'Lead mechanical design projects for automated parking systems. Collaborate with cross-functional teams to deliver innovative solutions.',
        'description' => 'We are seeking an experienced Senior Mechanical Engineer to join our dynamic team at Galaxy Parking Systems. In this role, you will be responsible for leading the mechanical design and development of our automated parking solutions. You will work closely with cross-functional teams including electrical engineers, software developers, and project managers to deliver cutting-edge parking systems that meet client requirements.',
        'responsibilities' => array(
            'Lead mechanical design projects for automated parking systems',
            'Develop detailed engineering specifications and drawings',
            'Conduct feasibility studies and technical analysis',
            'Mentor and guide junior engineers',
            'Collaborate with cross-functional teams',
            'Ensure compliance with safety standards and regulations',
            'Manage project timelines and deliverables',
            'Participate in client meetings and presentations'
        ),
        'skills' => array(
            'Bachelor\'s/Master\'s in Mechanical Engineering',
            '5-7 years of experience in mechanical design',
            'Proficiency in CAD software (AutoCAD, SolidWorks)',
            'Experience with automated systems',
            'Strong analytical and problem-solving skills',
            'Excellent communication skills',
            'Project management experience'
        ),
        'benefits' => array(
            'Competitive salary package',
            'Health insurance',
            'Provident Fund',
            'Gratuity benefits',
            'Professional development opportunities',
            'Work-life balance',
            'Modern office environment',
            'Team building activities'
        )
    ),
    'electrical-engineer' => array(
        'title' => 'Electrical Engineer',
        'department' => 'Engineering',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '3-5 Years',
        'type' => 'Full Time',
        'summary' => 'Design and implement electrical control systems for parking equipment. Ensure compliance with safety standards and regulations.',
        'description' => 'We are looking for a talented Electrical Engineer to design and implement electrical control systems for our parking equipment. You will be responsible for ensuring all electrical systems meet safety standards and regulatory requirements.',
        'responsibilities' => array(
            'Design electrical control systems for parking equipment',
            'Create circuit diagrams and wiring layouts',
            'Test and debug electrical systems',
            'Ensure compliance with safety standards',
            'Troubleshoot electrical issues',
            'Coordinate with mechanical team',
            'Document electrical designs'
        ),
        'skills' => array(
            'Bachelor\'s in Electrical Engineering',
            '3-5 years of experience',
            'Knowledge of PLC programming',
            'Experience with control systems',
            'Understanding of safety regulations',
            'Problem-solving skills'
        ),
        'benefits' => array(
            'Competitive salary',
            'Health insurance',
            'PF & ESI',
            'Learning opportunities',
            'Career growth',
            'Team activities'
        )
    ),
    'cad-designer' => array(
        'title' => 'CAD Designer',
        'department' => 'Design',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '2-4 Years',
        'type' => 'Full Time',
        'summary' => 'Create detailed 2D and 3D drawings for parking system components. Work closely with engineering team on product development.',
        'description' => 'Join our design team as a CAD Designer and create detailed drawings for our parking system components.',
        'responsibilities' => array(
            'Create 2D and 3D drawings',
            'Develop product layouts',
            'Work with engineering team',
            'Maintain drawing database',
            'Review designs for accuracy'
        ),
        'skills' => array(
            'Diploma/B.Tech in Mechanical Engineering',
            '2-4 years of CAD experience',
            'Proficiency in AutoCAD/SolidWorks',
            'Attention to detail'
        ),
        'benefits' => array(
            'Competitive package',
            'Health benefits',
            'Learning opportunities',
            'Growth prospects'
        )
    ),
    'sales-manager' => array(
        'title' => 'Sales Manager',
        'department' => 'Sales & Marketing',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '4-6 Years',
        'type' => 'Full Time',
        'summary' => 'Drive business growth through strategic sales initiatives. Build and maintain relationships with key clients and partners.',
        'description' => 'We are seeking an experienced Sales Manager to drive business growth and expand our market presence.',
        'responsibilities' => array(
            'Develop sales strategies',
            'Manage key accounts',
            'Achieve sales targets',
            'Build client relationships',
            'Coordinate with marketing',
            'Lead sales team'
        ),
        'skills' => array(
            'MBA in Sales/Marketing',
            '4-6 years of sales experience',
            'Strong communication skills',
            'Team leadership',
            'Client relationship management'
        ),
        'benefits' => array(
            'Attractive incentives',
            'Performance bonuses',
            'Health insurance',
            'Car allowance',
            'Travel opportunities'
        )
    ),
    'project-manager' => array(
        'title' => 'Project Manager',
        'department' => 'Operations',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '5-8 Years',
        'type' => 'Full Time',
        'summary' => 'Oversee installation projects from planning to completion. Coordinate with clients, contractors, and internal teams.',
        'description' => 'Join our operations team to manage installation projects and ensure timely delivery.',
        'responsibilities' => array(
            'Manage project execution',
            'Coordinate with stakeholders',
            'Monitor progress',
            'Handle budgets',
            'Ensure quality',
            'Client communication'
        ),
        'skills' => array(
            'Engineering degree',
            '5-8 years project management',
            'PMP certification preferred',
            'Leadership skills',
            'Communication skills'
        ),
        'benefits' => array(
            'Competitive salary',
            'Performance incentives',
            'Health benefits',
            'Professional growth'
        )
    ),
    'service-engineer' => array(
        'title' => 'Service Engineer',
        'department' => 'Engineering',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '2-4 Years',
        'type' => 'Full Time',
        'summary' => 'Provide technical support and maintenance services for installed parking systems. Ensure customer satisfaction through timely service.',
        'description' => 'Provide technical support and maintenance services for our installed parking systems.',
        'responsibilities' => array(
            'Perform maintenance',
            'Troubleshoot issues',
            'Client support',
            'Service documentation',
            'Parts management'
        ),
        'skills' => array(
            'Diploma/B.Tech in Engineering',
            '2-4 years experience',
            'Problem-solving',
            'Customer handling'
        ),
        'benefits' => array(
            'Salary + incentives',
            'Health insurance',
            'Vehicle allowance',
            'Training'
        )
    ),
    'business-development-executive' => array(
        'title' => 'Business Development Executive',
        'department' => 'Sales & Marketing',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '2-4 Years',
        'type' => 'Full Time',
        'summary' => 'Identify new business opportunities and generate leads. Develop strategic partnerships to expand market reach.',
        'description' => 'Identify new business opportunities and help grow our market presence.',
        'responsibilities' => array(
            'Generate leads',
            'Business development',
            'Market research',
            'Client meetings',
            'Proposal preparation'
        ),
        'skills' => array(
            'MBA preferred',
            '2-4 years experience',
            'Communication skills',
            'Marketing knowledge'
        ),
        'benefits' => array(
            'Competitive package',
            'Incentives',
            'Growth opportunities',
            'Health benefits'
        )
    ),
    'hr-coordinator' => array(
        'title' => 'HR Coordinator',
        'department' => 'Administration',
        'location' => 'Navi Mumbai, Maharashtra',
        'experience' => '1-3 Years',
        'type' => 'Full Time',
        'summary' => 'Support HR operations including recruitment, onboarding, and employee relations. Maintain HR records and policies.',
        'description' => 'Support HR operations and help maintain a positive work environment.',
        'responsibilities' => array(
            'Recruitment support',
            'Onboarding',
            'Employee records',
            'Policy implementation',
            'HR communications'
        ),
        'skills' => array(
            'MBA in HR',
            '1-3 years experience',
            'Communication skills',
            'MS Office proficiency'
        ),
        'benefits' => array(
            'Competitive salary',
            'Health benefits',
            'Learning opportunities',
            'Work-life balance'
        )
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
						<h1 class="text-white wow fadeInUp" data-wow-delay=".3s"><?php echo $job['title']; ?></h1>
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
						<li><?php echo $job['title']; ?></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Job Detail Section Start -->
		<section class="job-detail-section">
			<div class="container">
				<!-- Job Header -->
				<div class="job-detail-header wow fadeInUp" data-wow-delay=".1s">
					<h1><?php echo $job['title']; ?></h1>
					<div class="job-meta">
						<span><i class="fa-solid fa-building"></i> <?php echo $job['department']; ?></span>
						<span><i class="fa-solid fa-location-dot"></i> <?php echo $job['location']; ?></span>
						<span><i class="fa-solid fa-briefcase"></i> <?php echo $job['experience']; ?></span>
					</div>
					<span class="job-type-badge"><?php echo $job['type']; ?></span>
				</div>

				<!-- Job Content -->
				<div class="job-detail-content">
					<!-- Main Content -->
					<div class="job-detail-main">
						<!-- Job Description -->
						<div class="wow fadeInUp" data-wow-delay=".2s">
							<h2>Job Description</h2>
							<p><?php echo $job['description']; ?></p>
						</div>

						<!-- Responsibilities -->
						<div class="wow fadeInUp" data-wow-delay=".3s">
							<h2>Key Responsibilities</h2>
							<ul>
								<?php foreach($job['responsibilities'] as $responsibility): ?>
								<li><?php echo $responsibility; ?></li>
								<?php endforeach; ?>
							</ul>
						</div>

						<!-- Required Skills -->
						<div class="wow fadeInUp" data-wow-delay=".4s">
							<h2>Required Skills & Qualifications</h2>
							<ul>
								<?php foreach($job['skills'] as $skill): ?>
								<li><?php echo $skill; ?></li>
								<?php endforeach; ?>
							</ul>
						</div>

						<!-- Benefits -->
						<div class="wow fadeInUp" data-wow-delay=".5s">
							<h2>Benefits & Perks</h2>
							<ul class="benefits-list">
								<?php foreach($job['benefits'] as $benefit): ?>
								<li><i class="fa-solid fa-check-circle"></i> <?php echo $benefit; ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>

					<!-- Sidebar -->
					<div class="job-detail-sidebar">
						<!-- Quick Info Widget -->
						<div class="sidebar-widget wow fadeInUp" data-wow-delay=".2s">
							<h3>Job Overview</h3>
							<ul class="quick-info">
								<li>
									<span>Department</span>
									<span><?php echo $job['department']; ?></span>
								</li>
								<li>
									<span>Location</span>
									<span><?php echo $job['location']; ?></span>
								</li>
								<li>
									<span>Experience</span>
									<span><?php echo $job['experience']; ?></span>
								</li>
								<li>
									<span>Job Type</span>
									<span><?php echo $job['type']; ?></span>
								</li>
								<li>
									<span>Posted Date</span>
									<span><?php echo date('d M Y'); ?></span>
								</li>
							</ul>
						</div>

						<!-- Apply Button Widget -->
						<div class="sidebar-widget wow fadeInUp" data-wow-delay=".3s">
							<h3>Interested in this role?</h3>
							<p style="margin-bottom: 20px; color: #6c757d;">Submit your application today and join our
								team!</p>
							<a href="<?php echo base_url()?>apply/<?php echo $job_slug; ?>" class="theme-btn">
								Apply Now <i class="fa-solid fa-arrow-right"></i>
							</a>
						</div>

						<!-- Share Widget -->
						<div class="sidebar-widget wow fadeInUp" data-wow-delay=".4s">
							<h3>Share This Job</h3>
							<div class="social-share" style="display: flex; gap: 10px;">
								<a href="#" class="share-btn"
									style="width: 40px; height: 40px; background: #1877f2; color: white; display: flex; align-items: center; justify-content: center; border-radius: 5px; text-decoration: none;">
									<i class="fa-brands fa-facebook-f"></i>
								</a>
								<a href="#" class="share-btn"
									style="width: 40px; height: 40px; background: #1da1f2; color: white; display: flex; align-items: center; justify-content: center; border-radius: 5px; text-decoration: none;">
									<i class="fa-brands fa-twitter"></i>
								</a>
								<a href="#" class="share-btn"
									style="width: 40px; height: 40px; background: #0a66c2; color: white; display: flex; align-items: center; justify-content: center; border-radius: 5px; text-decoration: none;">
									<i class="fa-brands fa-linkedin-in"></i>
								</a>
								<a href="#" class="share-btn"
									style="width: 40px; height: 40px; background: #25d366; color: white; display: flex; align-items: center; justify-content: center; border-radius: 5px; text-decoration: none;">
									<i class="fa-brands fa-whatsapp"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
