<!DOCTYPE html>
<html lang="en" style="height: auto; min-height: 100%;">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galaxy Parking — Career Management</title>
	<!-- Only use ONE Lucide JS source: -->
	<script src="https://unpkg.com/lucide@latest"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lucide/0.263.1/umd/lucide.min.js"></script>
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- TinyMCE Editor -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
	<link id="heading-font-link" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link id="body-font-link" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

	<script>
		tailwind.config = {
			theme: {
				extend: {
					fontFamily: {
						heading: ['var(--font-heading-name)', 'sans-serif'],
						body: ['var(--font-body-name)', 'sans-serif'],
					},
					colors: {
						primary: {
							50: '#fff3ee',
							100: '#ffe4d5',
							200: '#ffc4a0',
							300: '#ff9d66',
							400: '#ff7033',
							500: '#f94d00',
							600: '#d93e00',
							700: '#b33000',
							800: '#8c2400',
							900: '#661a00',
						},
						neutral: {
							50: '#f9f9f9',
							100: '#f0f0f0',
							200: '#e0e0e0',
							300: '#c8c8c8',
							400: '#a0a0a0',
							500: '#787878',
							600: '#585858',
							700: '#383838',
							800: '#222222',
							900: '#111827',
						},
						brand: {
							black: '#000000',
							white: '#ffffff',
						}
					},
					borderRadius: {
						small: 'var(--radius-small)',
						large: 'var(--radius-large)',
					},
					boxShadow: {
						custom: 'var(--shadow-custom)',
						'custom-hover': 'var(--shadow-custom-hover)',
					},
				}
			}
		}
	</script>
	<style>
		:root {
			--font-heading-name: 'Poppins';
			--font-body-name: 'Poppins';
			--font-heading: 'Poppins', sans-serif;
			--font-body: 'Poppins', sans-serif;
			--letter-spacing-heading: -0.25px;
			--letter-spacing-body: 0px;
			--space-base: 1rem;
			--radius-small: 8px;
			--radius-large: 14px;
			--border-width: 1px;
			--shadow-color: 0 0 0;
			--shadow-offset-x: 0px;
			--shadow-offset-y: 4px;
			--shadow-blur: 24px;
			--shadow-spread: 0px;
			--shadow-opacity: 0.08;
			--shadow-custom: 0px 4px 24px rgba(0, 0, 0, 0.08);
			--shadow-custom-hover: 0px 8px 32px rgba(249, 77, 0, 0.18);
		}
		.sidebar-nav-item:hover .nav-icon, .sidebar-nav-item.active .nav-icon { color: #f94d00; }
		.sidebar-nav-item.active { background: rgba(249, 77, 0, 0.10); border-left: 3px solid #f94d00; }
		.sidebar-nav-item { border-left: 3px solid transparent; }
		.status-active { background: rgba(34, 197, 94, 0.12); color: #16a34a; }
		.status-inactive, .status-closed { background: rgba(239, 68, 68, 0.10); color: #dc2626; }
		.table-row:hover { background: rgba(249, 77, 0, 0.04); }
		.modal-overlay { background: rgba(0, 0, 0, 0.55); backdrop-filter: blur(2px); }
		.rich-editor {
			min-height: 90px;
			border: 1.5px solid #e5e7eb;
			border-radius: 8px;
			padding: 10px 14px;
			font-size: 14px;
			outline: none;
			resize: vertical;
		}
		.rich-editor:focus { border-color: #f94d00; box-shadow: 0 0 0 3px rgba(249, 77, 0, 0.10);}
		input:focus, select:focus, textarea:focus {
			outline: none;
			border-color: #f94d00 !important;
			box-shadow: 0 0 0 3px rgba(249, 77, 0, 0.10);
		}
		.toggle-bg { transition: background 0.2s; }
		.toggle-dot { transition: transform 0.2s; }
		::-webkit-scrollbar { width: 5px; height: 5px; }
		::-webkit-scrollbar-track { background: #f1f1f1; }
		::-webkit-scrollbar-thumb { background: #f94d00; border-radius: 10px; }
		.toolbar-btn:hover { background: #f3f4f6; border-radius: 4px;}
	</style>
</head>

<body class="font-body bg-neutral-50 text-neutral-700 h-full min-h-screen flex overflow-hidden">
	<!-- Sidebar -->
	<?php $this->load->view('Admin/component/sidebar'); ?>

	<!-- Main Content -->
	<main class="flex-1 flex flex-col bg-gray-50 overflow-x-hidden">
		<!-- Top Header -->
		<header class="bg-white border-b border-gray-100 px-6 py-4 flex items-center justify-between flex-shrink-0"
			style="max-height:80px;">
			<div>
				<h1 class="font-heading text-gray-900 text-xl font-700" style="font-weight:700;">Career Management</h1>
				<p class="text-gray-400 text-xs mt-0.5">Manage job openings, track applicants, and build your team.</p>
			</div>
			<div class="flex items-center gap-3">
				<!-- Add Job Button -->
				<button type="button" onclick="openJobModal()" class="flex items-center gap-2 bg-primary-500 hover:bg-primary-600 text-white text-sm font-600 px-4 py-2 rounded-small transition-all shadow-custom-hover" style="font-weight:600;">
					<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
						<line x1="12" y1="5" x2="12" y2="19" />
						<line x1="5" y1="12" x2="19" y2="12" /></svg>
					Add Job Opening
				</button>
			</div>
		</header>
		<!-- Table Section -->
		<section class="px-6 py-4 flex-1" style="max-height:900px;">
			<div class="bg-white rounded-large shadow-custom overflow-hidden">
				<!-- Table Header -->
				<div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between flex-wrap gap-3">
					<div>
						<h2 class="font-heading text-gray-900 text-base font-700" style="font-weight:700;">Job Openings</h2>
					</div>
				</div>
				<!-- Table -->
				<div class="overflow-x-auto">
					<table class="w-full text-sm">
						<thead>
							<tr class="bg-gray-50 border-b border-gray-100">
								<th class="text-left px-6 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Job Title</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Department</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Location</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Experience</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Job Type</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Posted Date</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Status</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Actions</th>
							</tr>
						</thead>
						<tbody> 
							<?php if (!empty($careers) && is_array($careers)): ?>
								<?php foreach ($careers as $career): ?>
								<tr class="table-row border-b border-gray-50 transition-all" 
									data-career='<?= htmlspecialchars(json_encode($career), ENT_QUOTES, "UTF-8") ?>'>
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											<div class="w-8 h-8 bg-primary-50 rounded-small flex items-center justify-center flex-shrink-0">
												<svg class="w-4 h-4 text-primary-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
													<path d="M20 7H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z" />
												</svg>
											</div>
											<div>
												<p class="text-gray-800 font-600" style="font-weight:600;">
													<?= htmlspecialchars(isset($career['j_title']) ? $career['j_title'] : (isset($career['title']) ? $career['title'] : '-')) ?>
												</p>
												<p class="text-gray-400 text-xs">
													ID: <?= 'JOB-' . str_pad(isset($career['id']) ? $career['id'] : 0, 3, '0', STR_PAD_LEFT); ?>
												</p>
											</div>
										</div> 
									</td>
									<td class="px-4 py-4 text-gray-600">
										<?= htmlspecialchars(isset($career['department']) ? $career['department'] : '-') ?>
									</td>
									<td class="px-4 py-4 text-gray-600">
										<?= htmlspecialchars(isset($career['location']) ? $career['location'] : '-') ?>
									</td>
									<td class="px-4 py-4 text-gray-600">
										<?php
										echo htmlspecialchars(isset($career['experience']) ? $career['experience'] : (isset($career['experince']) ? $career['experince'] : '-'));
										?>
									</td>
									<td class="px-4 py-4">
										<span class="bg-blue-50 text-blue-600 text-xs font-600 px-2.5 py-1 rounded-small" style="font-weight:600;">
											<?= htmlspecialchars(ucfirst(isset($career['j_type']) ? $career['j_type'] : '-')) ?>
										</span>
									</td>
									<td class="px-4 py-4 text-gray-500 text-xs">
										<?php
										$date = isset($career['post_date']) ? $career['post_date'] : null;
										echo (!empty($date) && $date != '0000-00-00') ? date('M d, Y', strtotime($date)) : '-';
										?>
									</td>
									<td class="px-4 py-4">
										<?php
											$status = isset($career['status']) ? strtolower($career['status']) : 'inactive';
										?>
										<span class="<?= $status == 'active' ? 'status-active' : 'status-inactive'; ?> text-xs font-600 px-2.5 py-1 rounded-small" style="font-weight:600;">
											● <?= ucfirst($status) ?>
										</span>
									</td>
									<td class="px-4 py-4">
										<div class="flex items-center gap-1">
											<button class="editCareerBtn w-8 h-8 flex items-center justify-center rounded-small hover:bg-primary-50 text-gray-400 hover:text-primary-500 transition-all" title="Edit" data-id="<?= htmlspecialchars($career['id']) ?>" type="button">
												<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
													<path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7" />
													<path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
												</svg>
											</button>
											<button class="deleteCareerBtn w-8 h-8 flex items-center justify-center rounded-small hover:bg-red-50 text-gray-400 hover:text-red-500 transition-all" title="Delete" data-id="<?= htmlspecialchars($career['id']) ?>" type="button">
												<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
													<polyline points="3 6 5 6 21 6" />
													<path d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6" />
													<path d="M10 11v6" />
													<path d="M14 11v6" />
													<path d="M9 6V4a1 1 0 011-1h4a1 1 0 011 1v2" />
												</svg>
											</button>
										</div>
									</td>
								</tr>
								<?php endforeach; ?>
							<?php else: ?>
								<tr>
									<td colspan="8" class="text-center text-gray-400 py-10">
										No job openings found.
									</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
				<!-- Pagination Dummy (implement server/integration to work!) -->
				<div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between flex-wrap gap-3">
					<p class="text-gray-400 text-xs">Showing 1–6 of 24 results</p>
					<div class="flex items-center gap-1">
						<!-- These could be replaced by dynamic PHP links if backend paginated -->
						<button type="button" class="w-8 h-8 flex items-center justify-center rounded-small border border-gray-200 text-gray-400 hover:bg-gray-50 transition-all" aria-label="Previous page" disabled>
							<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
								viewBox="0 0 24 24">
								<polyline points="15 18 9 12 15 6" /></svg>
						</button>
						<button type="button" class="w-8 h-8 flex items-center justify-center rounded-small bg-primary-500 text-white text-xs font-600" style="font-weight:600;">1</button>
						<button type="button" class="w-8 h-8 flex items-center justify-center rounded-small border border-gray-200 text-gray-500 hover:bg-gray-50 text-xs transition-all">2</button>
						<button type="button" class="w-8 h-8 flex items-center justify-center rounded-small border border-gray-200 text-gray-500 hover:bg-gray-50 text-xs transition-all">3</button>
						<button type="button" class="w-8 h-8 flex items-center justify-center rounded-small border border-gray-200 text-gray-500 hover:bg-gray-50 text-xs transition-all">4</button>
						<button type="button" class="w-8 h-8 flex items-center justify-center rounded-small border border-gray-200 text-gray-400 hover:bg-gray-50 transition-all" aria-label="Next page">
							<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2"
								viewBox="0 0 24 24">
								<polyline points="9 18 15 12 9 6" /></svg>
						</button>
					</div>
				</div>
			</div>
		</section>
	</main>

	<!-- Add/Edit Modal (shared fragment through JS) -->
	<div id="job-modal"
		class="hidden fixed inset-0 z-50 flex items-start justify-center pt-8 pb-8 px-4 modal-overlay overflow-y-auto">
		<div class="bg-white rounded-large shadow-custom w-full max-w-3xl relative" style="max-height:none;">
			<form action="<?php echo base_url('Career/career'); ?>" method="post" enctype="multipart/form-data"
				autocomplete="off" id="career-job-form">
				<input type="hidden" name="cid" id="cid" value="<?php echo isset($careers['cid']) ? htmlspecialchars($careers['cid']) : ''; ?>">
				<!-- Modal Header -->
				<div
					class="flex items-center justify-between px-7 py-5 border-b border-gray-100 bg-black rounded-t-large">
					<div class="flex items-center gap-3">
						<div class="w-9 h-9 bg-primary-500 rounded-small flex items-center justify-center">
							<svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
								viewBox="0 0 24 24">
								<line x1="12" y1="5" x2="12" y2="19" />
								<line x1="5" y1="12" x2="19" y2="12" /></svg>
						</div>
						<div>
							<h2 id="job-modal-title" class="font-heading text-white text-base font-700" style="font-weight:700;">
								<?php echo isset($careers) && $careers ? 'Edit Job Opening' : 'Add New Job Opening'; ?></h2>
							<p class="text-gray-400 text-xs" id="job-modal-desc">
								<?php echo isset($careers) && $careers ? 'Update required fields to revise this job position' : 'Fill in all required fields to post a new position'; ?>
							</p>
						</div>
					</div>
					<button type="button" onclick="closeJobModal()"
						class="w-8 h-8 flex items-center justify-center rounded-small bg-gray-800 hover:bg-gray-700 text-gray-400 hover:text-white transition-all"
						aria-label="Close Modal">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
							<line x1="18" y1="6" x2="6" y2="18" />
							<line x1="6" y1="6" x2="18" y2="18" /></svg>
					</button>
				</div>

				<!-- Step Indicators -->
				<div class="px-7 py-4 border-b border-gray-100 flex items-center gap-0">
					<div class="flex items-center gap-2 step-indicator" data-step="1">
						<div class="w-7 h-7 rounded-full bg-primary-500 flex items-center justify-center step-circle-1">
							<span class="text-white text-xs font-700" style="font-weight:700;">1</span>
						</div>
						<span class="text-primary-500 text-xs font-600 step-label-1" style="font-weight:600;">Basic Info</span>
					</div>
					<div class="flex-1 h-px bg-gray-200 mx-3 step-line-1"></div>
					<div class="flex items-center gap-2 step-indicator" data-step="2">
						<div class="w-7 h-7 rounded-full bg-gray-200 flex items-center justify-center step-circle-2">
							<span class="text-gray-500 text-xs font-700 step-num-2" style="font-weight:700;">2</span>
						</div>
						<span class="text-gray-400 text-xs font-600 step-label-2" style="font-weight:600;">Job Content</span>
					</div>
					<div class="flex-1 h-px bg-gray-200 mx-3 step-line-2"></div>
					<div class="flex items-center gap-2 step-indicator" data-step="3">
						<div class="w-7 h-7 rounded-full bg-gray-200 flex items-center justify-center step-circle-3">
							<span class="text-gray-500 text-xs font-700 step-num-3" style="font-weight:700;">3</span>
						</div>
						<span class="text-gray-400 text-xs font-600 step-label-3" style="font-weight:600;">Publish</span>
					</div>
				</div>
				<!-- Form Body -->
				<div class="px-7 py-6">
					<!-- STEP 1: Basic Information -->
					<div id="step-1" class="step-content">
						<div class="flex items-center gap-2 mb-5">
							<div class="w-1 h-5 bg-primary-500 rounded-full"></div>
							<h3 class="font-heading text-gray-800 text-sm font-700" style="font-weight:700;">Basic Information</h3>
						</div>
						<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
							<div class="md:col-span-2">
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Job Title <span class="text-primary-500">*</span></label>
								<input type="text" placeholder="e.g. Parking Operations Manager" name="j_title" id="j_title"
									class="w-full border border-gray-200 rounded-small px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:bg-white transition-all"
									style="font-family:inherit;" required
									value="<?php echo isset($careers['j_title']) ? htmlspecialchars($careers['j_title']) : ''; ?>">
							</div>
							<div>
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Department <span class="text-primary-500">*</span></label>
								<input type="text" placeholder="e.g. Operation, Customer service" name="department" id="department"
									class="w-full border border-gray-200 rounded-small px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:bg-white transition-all"
									style="font-family:inherit;" required
									value="<?php echo isset($careers['department']) ? htmlspecialchars($careers['department']) : ''; ?>">
							</div>
							<div>
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Location <span class="text-primary-500">*</span></label>
								<input type="text" placeholder="e.g. New York, NY or Remote" name="location" id="location"
									class="w-full border border-gray-200 rounded-small px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:bg-white transition-all"
									style="font-family:inherit;" required
									value="<?php echo isset($careers['location']) ? htmlspecialchars($careers['location']) : ''; ?>">
							</div>
							<div>
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Experience Required <span class="text-primary-500">*</span></label>
								<input type="text" placeholder="e.g. Fresher or number of Years Experience" name="experience" id="experience"
									class="w-full border border-gray-200 rounded-small px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:bg-white transition-all"
									style="font-family:inherit;" required
									value="<?php echo isset($careers['experience']) ? htmlspecialchars($careers['experience']) : ''; ?>">
							</div>
							<div>
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Job Type <span class="text-primary-500">*</span></label>
								<div class="grid grid-cols-2 gap-2">
									<label class="flex items-center gap-2 border border-gray-200 rounded-small px-3 py-2.5 cursor-pointer hover:border-primary-300 hover:bg-primary-50 transition-all job-type-option">
										<input type="radio" name="j_type" value="full-time" class="accent-primary-500 w-3.5 h-3.5" id="j_type_full_time" required
										<?php if(isset($careers['j_type']) && $careers['j_type'] == 'full-time') echo 'checked'; ?>>
										<span class="text-gray-600 text-xs font-500">Full-time</span>
									</label>
									<label class="flex items-center gap-2 border border-gray-200 rounded-small px-3 py-2.5 cursor-pointer hover:border-primary-300 hover:bg-primary-50 transition-all job-type-option">
										<input type="radio" name="j_type" value="part-time" class="accent-primary-500 w-3.5 h-3.5" id="j_type_part_time"
										<?php if(isset($careers['j_type']) && $careers['j_type'] == 'part-time') echo 'checked'; ?>>
										<span class="text-gray-600 text-xs font-500">Part-time</span>
									</label>
									<label class="flex items-center gap-2 border border-gray-200 rounded-small px-3 py-2.5 cursor-pointer hover:border-primary-300 hover:bg-primary-50 transition-all job-type-option">
										<input type="radio" name="j_type" value="internship" class="accent-primary-500 w-3.5 h-3.5" id="j_type_internship"
										<?php if(isset($careers['j_type']) && $careers['j_type'] == 'internship') echo 'checked'; ?>>
										<span class="text-gray-600 text-xs font-500">Internship</span>
									</label>
									<label class="flex items-center gap-2 border border-gray-200 rounded-small px-3 py-2.5 cursor-pointer hover:border-primary-300 hover:bg-primary-50 transition-all job-type-option">
										<input type="radio" name="j_type" value="contract" class="accent-primary-500 w-3.5 h-3.5" id="j_type_contract"
										<?php if(isset($careers['j_type']) && $careers['j_type'] == 'contract') echo 'checked'; ?>>
										<span class="text-gray-600 text-xs font-500">Contract</span>
									</label>
								</div>
							</div>
						</div>
					</div>
					<!-- STEP 2: Job Content -->
					<div id="step-2" class="step-content hidden">
						<div class="flex items-center gap-2 mb-5">
							<div class="w-1 h-5 bg-primary-500 rounded-full"></div>
							<h3 class="font-heading text-gray-800 text-sm font-700" style="font-weight:700;">Job Content Sections</h3>
						</div>
						<div class="flex flex-col gap-5">
							<div>
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Job Description <span class="text-primary-500">*</span></label>
								<div class="border border-gray-200 rounded-small overflow-hidden focus-within:border-primary-500 focus-within:shadow-[0_0_0_3px_rgba(249,77,0,0.10)] transition-all">
									<textarea id="job_description" name="j_description"
										class="w-full px-3.5 py-3 text-sm text-gray-700 bg-white outline-none rich-editor"
										rows="6"
										placeholder="Describe the role, responsibilities, and what makes this position exciting..."
										style="font-family:inherit;"><?php echo isset($careers['j_description']) ? htmlspecialchars($careers['j_description']) : ''; ?></textarea>
								</div>
							</div>
							<div>
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Key Responsibilities <span class="text-primary-500">*</span></label>
								<div class="border border-gray-200 rounded-small overflow-hidden focus-within:border-primary-500 focus-within:shadow-[0_0_0_3px_rgba(249,77,0,0.10)] transition-all">
									<textarea id="key_resp" name="key_resp"
										class="w-full px-3.5 py-3 text-sm text-gray-700 bg-white outline-none rich-editor"
										rows="6"
										placeholder="• Oversee daily parking operations&#10;• Manage a team of parking attendants&#10;• Ensure compliance with safety regulations..."
										style="font-family:inherit;"><?php echo isset($careers['key_resp']) ? htmlspecialchars($careers['key_resp']) : ''; ?></textarea>
								</div>
							</div>
							<div>
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Required Skills & Qualifications <span class="text-primary-500">*</span></label>
								<div class="border border-gray-200 rounded-small overflow-hidden focus-within:border-primary-500 focus-within:shadow-[0_0_0_3px_rgba(249,77,0,0.10)] transition-all">
									<textarea id="req_skill" name="req_skill"
										class="w-full px-3.5 py-3 text-sm text-gray-700 bg-white outline-none rich-editor"
										rows="6"
										placeholder="• Bachelor's degree in Business or related field&#10;• Strong leadership and communication skills&#10;• Proficiency in parking management software..."
										style="font-family:inherit;"><?php echo isset($careers['req_skill']) ? htmlspecialchars($careers['req_skill']) : ''; ?></textarea>
								</div>
							</div>
							<div>
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Benefits & Perks</label>
								<div class="border border-gray-200 rounded-small overflow-hidden focus-within:border-primary-500 focus-within:shadow-[0_0_0_3px_rgba(249,77,0,0.10)] transition-all">
									<textarea id="benefit" name="benefit"
										class="w-full px-3.5 py-3 text-sm text-gray-700 bg-white outline-none rich-editor"
										rows="6"
										placeholder="• Competitive salary and performance bonuses&#10;• Health, dental, and vision insurance&#10;• Flexible working hours and remote options..."
										style="font-family:inherit;"><?php echo isset($careers['benefit']) ? htmlspecialchars($careers['benefit']) : ''; ?></textarea>
								</div>
							</div>
						</div>
					</div>
					<!-- STEP 3: Publish -->
					<div id="step-3" class="step-content hidden">
						<div class="flex items-center gap-2 mb-5">
							<div class="w-1 h-5 bg-primary-500 rounded-full"></div>
							<h3 class="font-heading text-gray-800 text-sm font-700" style="font-weight:700;">Publish Settings</h3>
						</div>
						<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
							<div>
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Posted Date <span class="text-primary-500">*</span></label>
								<input type="date"
									class="w-full border border-gray-200 rounded-small px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:bg-white transition-all"
									style="font-family:inherit;" name="post_date" id="post_date" required
									value="<?php echo isset($careers['post_date']) ? htmlspecialchars($careers['post_date']) : ''; ?>">
							</div>
							<div>
								<label class="block text-gray-600 text-xs font-600 mb-1.5" style="font-weight:600;">Application Deadline</label>
								<input type="date"
									class="w-full border border-gray-200 rounded-small px-3.5 py-2.5 text-sm text-gray-700 bg-gray-50 focus:bg-white transition-all"
									style="font-family:inherit;" name="deadline" id="deadline"
									value="<?php echo isset($careers['deadline']) ? htmlspecialchars($careers['deadline']) : ''; ?>">
							</div>
							<div class="md:col-span-2">
								<label class="block text-gray-600 text-xs font-600 mb-3" style="font-weight:600;">Job Status</label>
								<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between bg-gray-50 border border-gray-200 rounded-large px-5 py-4 gap-4 sm:gap-0">
									<div class="flex flex-col justify-center">
										<p class="text-gray-700 text-sm font-600" style="font-weight:600;">Publish this job opening</p>
										<p class="text-gray-400 text-xs mt-0.5">Toggle to set the job as Active or Inactive</p>
									</div>
									<div class="flex items-center sm:justify-end w-full sm:w-auto mt-2 sm:mt-0">
										<input type="hidden" name="status" id="status" value="<?php echo isset($careers['status']) ? htmlspecialchars($careers['status']) : 'active'; ?>">
										<button id="toggle-status-btn" type="button" role="switch" aria-checked="<?php echo isset($careers['status']) && $careers['status']=='inactive' ? 'false' : 'true'; ?>"
											tabindex="0"
											class="relative w-12 h-6 <?php echo (isset($careers['status']) && $careers['status']=='inactive') ? 'bg-gray-300' : 'bg-primary-500'; ?> rounded-full toggle-bg flex-shrink-0 transition-colors duration-200"
											data-active="<?php echo (isset($careers['status']) && $careers['status']=='inactive') ? 'false' : 'true'; ?>" aria-pressed="<?php echo (isset($careers['status']) && $careers['status']=='inactive') ? 'false' : 'true'; ?>">
											<span id="toggle-dot"
												class="absolute top-0.5 <?php echo (isset($careers['status']) && $careers['status']=='inactive') ? 'left-0.5' : 'left-0.5'; ?> w-5 h-5 bg-white rounded-full shadow toggle-dot transition-transform duration-200"
												style="transform:<?php echo (isset($careers['status']) && $careers['status']=='inactive') ? 'translateX(0px);' : 'translateX(24px);'; ?>"></span>
										</button>
										<span id="toggle-status-text" class="ml-3 text-xs font-600 <?php echo (isset($careers['status']) && $careers['status']=='inactive') ? 'text-gray-500' : 'text-primary-500'; ?>">
											<?php echo (isset($careers['status']) && $careers['status']=='inactive') ? 'Inactive' : 'Active'; ?>
										</span>
									</div>
								</div>
							</div>
							<div class="md:col-span-2">
								<div class="bg-primary-50 border border-primary-100 rounded-large p-4 flex items-start gap-3">
									<svg class="w-5 h-5 text-primary-500 flex-shrink-0 mt-0.5" fill="none"
										stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
										<circle cx="12" cy="12" r="10"/>
										<line x1="12" y1="8" x2="12" y2="12"/>
										<line x1="12" y1="16" x2="12.01" y2="16"/>
									</svg>
									<div>
										<p class="text-primary-700 text-xs font-600" style="font-weight:600;">Ready to publish?</p>
										<p class="text-primary-600 text-xs mt-0.5">Once published, this job will be visible to all applicants on the Galaxy Parking careers portal. You can edit or close it at any time.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Footer -->
				<div class="px-7 py-4 border-t border-gray-100 flex items-center justify-between bg-gray-50 rounded-b-large">
					<button id="btn-back" type="button" class="hidden flex items-center gap-2 text-sm text-gray-500 hover:text-gray-700 font-500 px-4 py-2 rounded-small border border-gray-200 hover:bg-white transition-all" style="font-weight:500;">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
							<polyline points="15 18 9 12 15 6" /></svg>
						Back
					</button>
					<div class="flex items-center gap-2 ml-auto">
						<button type="button" onclick="closeJobModal()"
							class="text-sm text-gray-500 hover:text-gray-700 font-500 px-4 py-2 rounded-small border border-gray-200 hover:bg-white transition-all"
							style="font-weight:500;">Cancel</button>
						<button id="btn-next" type="button"
							class="flex items-center gap-2 bg-primary-500 hover:bg-primary-600 text-white text-sm font-600 px-5 py-2 rounded-small transition-all shadow-custom-hover"
							style="font-weight:600;">
							Next Step
							<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
								<polyline points="9 18 15 12 9 6" /></svg>
						</button>
						<button id="btn-submit" type="submit"
							class="hidden flex items-center gap-2 bg-primary-500 hover:bg-primary-600 text-white text-sm font-600 px-5 py-2 rounded-small transition-all shadow-custom-hover"
							style="font-weight:600;">
							Publish Job
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script>
	// ======= MODAL Logic, Step Logic, Toggle Switch Logic =======
	var currentStep = 1, totalSteps = 3;
	function showStep(step) {
		currentStep = step;
		for (let i = 1; i <= totalSteps; i++) {
			const el = document.getElementById('step-' + i);
			if (el) el.classList.toggle('hidden', i !== step);
		}
		// Step header coloring
		for (let i = 1; i <= totalSteps; i++) {
			const circle = document.querySelector('.step-circle-' + i);
			const label = document.querySelector('.step-label-' + i);
			const line = document.querySelector('.step-line-' + i);
			if (circle) {
				circle.classList.remove('bg-green-500', 'bg-gray-200', 'bg-primary-500');
				circle.style.background = '';
				if (i < currentStep) {
					circle.classList.add('bg-green-500');
					circle.innerHTML = '<svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>';
				} else if (i === currentStep) {
					circle.classList.add('bg-primary-500');
					circle.innerHTML = '<span class="text-white text-xs font-700" style="font-weight:700;">' + i + '</span>';
				} else {
					circle.classList.add('bg-gray-200');
					circle.innerHTML = '<span class="text-gray-500 text-xs font-700 step-num-' + i + '" style="font-weight:700;">' + i + '</span>';
				}
			}
			if (label) {
				label.style.color = i <= currentStep ? '#f94d00' : '#9ca3af';
				label.style.fontWeight = i === currentStep ? '600' : '500';
			}
			if (line) {
				line.style.background = i < currentStep ? '#f94d00' : '#e5e7eb';
			}
		}
		document.getElementById('btn-back').classList.toggle('hidden', step === 1);
		document.getElementById('btn-next').classList.toggle('hidden', step === totalSteps);
		document.getElementById('btn-submit').classList.toggle('hidden', step !== totalSteps);
	}
	function openJobModal(isEdit = false, rowData = null) {
		document.getElementById('job-modal').classList.remove('hidden');
		document.body.style.overflow = 'hidden';
		showStep(1);
		document.getElementById('career-job-form').reset();
		clearTinyMCEcontent();
		document.getElementById('cid').value = '';
		document.getElementById('job-modal-title').textContent = isEdit ? 'Edit Job Opening' : 'Add New Job Opening';
		document.getElementById('job-modal-desc').textContent = isEdit ? 'Update required fields to revise this job position' : 'Fill in all required fields to post a new position';
		document.getElementById('btn-next').textContent = "Next Step";
		setToggleUI(true);
		if (isEdit && rowData) {
			// Accepts full array of raw job object from backend, not just columns displayed in html table
			document.getElementById('cid').value = rowData.id || rowData.cid || '';
			document.getElementById('j_title').value = rowData.j_title || rowData.title || '';
			document.getElementById('department').value = rowData.department || '';
			document.getElementById('location').value = rowData.location || '';
			document.getElementById('experience').value = rowData.experience || rowData.experince || '';
			// Handle radio job-type
			const types = ["full-time","part-time","internship","contract"];
			for(let t of types){
				document.getElementById("j_type_"+t.replace('-','_')).checked = false;
			}
			const typeVal = (rowData.j_type || '').toLowerCase();
			if(typeVal && types.includes(typeVal)) document.getElementById("j_type_"+typeVal.replace('-','_')).checked = true;
			// Set date fields
			document.getElementById('post_date').value = (rowData.post_date && rowData.post_date !== '0000-00-00') ? rowData.post_date : '';
			document.getElementById('deadline').value = rowData.deadline || '';
			document.getElementById('status').value = rowData.status && rowData.status.toLowerCase() == "active" ? "active" : "inactive";
			setToggleUI(document.getElementById('status').value === "active");
			// Set TINYMCE
			setTimeout(function() {
				if (tinymce.get('job_description')) tinymce.get('job_description').setContent(rowData.j_description || "");
				if (tinymce.get('key_resp')) tinymce.get('key_resp').setContent(rowData.key_resp || "");
				if (tinymce.get('req_skill')) tinymce.get('req_skill').setContent(rowData.req_skill || "");
				if (tinymce.get('benefit')) tinymce.get('benefit').setContent(rowData.benefit || "");
			}, 350);
		}
	}
	function closeJobModal() {
		document.getElementById('job-modal').classList.add('hidden');
		document.body.style.overflow = '';
	}
	document.getElementById('btn-next').addEventListener('click', function() {
		if(currentStep === 1) {
			// Required validation: basic infos
			var jTitle = document.getElementById('j_title').value.trim();
			var dept = document.getElementById('department').value.trim();
			var loc = document.getElementById('location').value.trim();
			var exp = document.getElementById('experience').value.trim();
			var typeFields = document.getElementsByName('j_type');
			var typeChecked = false;
			for(var i=0;i<typeFields.length;i++) if(typeFields[i].checked) typeChecked=true;
			if(!jTitle || !dept || !loc || !exp || !typeChecked) { alert('All fields required!'); return; }
		}
		if(currentStep === 2) {
			if(!tinymce.get('job_description').getContent({format:'text'}).trim()) { alert('Job Description required!'); return;}
			if(!tinymce.get('key_resp').getContent({format:'text'}).trim()) { alert('Key Responsibilities required!'); return;}
			if(!tinymce.get('req_skill').getContent({format:'text'}).trim()) { alert('Required Skills & Qualifications required!'); return;}
			// No required validation for benefit.
		}
		if(currentStep<totalSteps) { showStep(currentStep+1);}
	});
	document.getElementById('btn-back').addEventListener('click',function(){ if(currentStep>1)showStep(currentStep-1);});
	document.getElementById('career-job-form').addEventListener('submit',function(e){
		if(currentStep!==totalSteps) { e.preventDefault(); return false;}
	});
	document.getElementById('job-modal').addEventListener('click',function(e){
		if(e.target===this) closeJobModal();
	});

	// EDIT JOB LOGIC using FULL DATA from data-career attribute:
	window.openEditJobModal = function(jobId) {
		var row = document.querySelector('button[data-id="'+jobId+'"].edit-job-btn');
		if(!row) return;
		var tr = row.closest('tr');
		var attr = tr.getAttribute('data-career');
		if(attr){
			try{
				var data = JSON.parse(attr.replace(/&quot;/g,'"'));
				openJobModal(true, data);
				return;
			}catch(e){}
		}
		// fallback (if data-career missing)
		var tds = tr.querySelectorAll('td');
		var careers = {
			id: jobId,
			j_title: tds[0].querySelector('p').textContent.trim(),
			department: tds[1].textContent.trim(),
			location: tds[2].textContent.trim(),
			experience: tds[3].textContent.trim(),
			j_type: tds[4].textContent.trim().toLowerCase(),
			post_date: "",
			deadline: "",
			j_description: "",
			key_resp: "",
			req_skill: "",
			benefit: "",
			status: tds[6].textContent.toLowerCase().includes('active') ? "active" : "inactive"
		};
		openJobModal(true, careers);
	};

	// Toggle status button logic:
	const toggleBtn = document.getElementById('toggle-status-btn');
	const inputStatus = document.getElementById('status');
	const dot = document.getElementById('toggle-dot');
	const text = document.getElementById('toggle-status-text');
	function setToggleUI(isActive) {
		toggleBtn.setAttribute('data-active', isActive ? 'true' : 'false');
		toggleBtn.setAttribute('aria-checked', isActive ? 'true' : 'false');
		toggleBtn.setAttribute('aria-pressed', isActive ? 'true' : 'false');
		inputStatus.value = isActive ? 'active' : 'inactive';
		if(isActive) {
			toggleBtn.classList.remove('bg-gray-300');
			toggleBtn.classList.add('bg-primary-500');
			dot.style.transform='translateX(24px)';
			text.textContent="Active";
			text.classList.remove('text-gray-400');
			text.classList.add('text-primary-500');
		} else {
			toggleBtn.classList.remove('bg-primary-500');
			toggleBtn.classList.add('bg-gray-300');
			dot.style.transform='translateX(0px)';
			text.textContent="Inactive";
			text.classList.remove('text-primary-500');
			text.classList.add('text-gray-400');
		}
	}
	toggleBtn.addEventListener('click',function(){
		const isActive = toggleBtn.getAttribute('data-active')==='true';
		setToggleUI(!isActive);
	});
	toggleBtn.addEventListener('keydown',function(event){
		if(event.key==='Enter' || event.key===' ') {
			event.preventDefault();
			const isActive = toggleBtn.getAttribute('data-active')==='true';
			setToggleUI(!isActive);
		}
	});
	setToggleUI(inputStatus.value==='active');
	function clearTinyMCEcontent(){
		if(tinymce.get('job_description')) tinymce.get('job_description').setContent('');
		if(tinymce.get('key_resp')) tinymce.get('key_resp').setContent('');
		if(tinymce.get('req_skill')) tinymce.get('req_skill').setContent('');
		if(tinymce.get('benefit')) tinymce.get('benefit').setContent('');
	}

	// TinyMCE initialization for all step 2 textareas
	function initRichTextarea(id, min_height) {
		if(window["tinymce"]) {
			if(tinymce.editors && tinymce.editors.length) tinymce.editors.forEach(ed=>ed.remove());
			tinymce.init({
				selector: '#' + id,
				menubar: false,
				branding: false,
				statusbar: false,
				min_height: min_height || 130,
				max_height: 350,
				skin: 'oxide',
				content_css: 'default',
				toolbar: 'undo redo | bold italic underline removeformat | bullist numlist outdent indent | link  | image table | code',
				plugins: 'lists link image table code',
				convert_urls: false,
				relative_urls: false,
				elementpath: false,
				setup: function (editor) {
					editor.on('init', function () {
						editor.getBody().style.fontFamily = "inherit";
					});
				},
			});
		}
	}
		document.addEventListener('DOMContentLoaded', function () {
			initRichTextarea('job_description', 180);
			initRichTextarea('key_resp', 130);
			initRichTextarea('req_skill', 130);
			initRichTextarea('benefit', 130);
			// Career edit/delete handlers
			document.addEventListener('click', function(e) {
				if (e.target.closest('.editCareerBtn')) {
					const id = e.target.closest('.editCareerBtn').dataset.id;
					openEditCareerModal(id);
				}
				if (e.target.closest('.deleteCareerBtn')) {
					const id = e.target.closest('.deleteCareerBtn').dataset.id;
					deleteCareerJob(id);
				}
			});
		});
	window.openJobModal=openJobModal;
	window.openEditCareerModal = function(jobId) {
		fetch("<?php echo base_url('Career/get_career'); ?>", {
			method: 'POST',
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			body: 'id=' + encodeURIComponent(jobId)
		})
		.then(r => r.json())
		.then(data => {
			if (data) {
				openJobModal(true, data);
			}
		});
	};
	window.deleteCareerJob = function(jobId){
		if (confirm('Delete this career job? Irreversible.')) {
			fetch("<?php echo base_url('Career/delete'); ?>", {
				method: "POST",
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				body: 'id=' + encodeURIComponent(jobId)
			}).then(r => r.json())
			.then(data => {
				if (data.success) location.reload();
			});
		}
	};
	
	</script>
	<script>
		document.addEventListener('DOMContentLoaded', function(){ if(window.lucide) lucide.createIcons(); });
	</script>
</body>
</html>
