<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galaxy Parking System - Admin Dashboard</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://unpkg.com/lucide@latest"></script>
	<link id="heading-font-link"
		href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link id="body-font-link" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
		rel="stylesheet">

	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						primary: {
							50: '#fff1eb',
							100: '#ffe3d6',
							200: '#ffc5ad',
							300: '#ffa785',
							400: '#ff8a5c',
							500: '#f94d00', // Base Primary
							600: '#d14100',
							700: '#a83400',
							800: '#802700',
							900: '#571b00',
						},
						neutral: {
							50: '#f9fafb',
							100: '#f5f5f5', // Base Background
							200: '#e5e5e5',
							300: '#d4d4d4',
							400: '#a3a3a3',
							500: '#737373',
							600: '#525252',
							700: '#404040',
							800: '#262626',
							900: '#111827', // Base Secondary
						}
					},
					fontFamily: {
						heading: ['var(--font-heading-name)', 'sans-serif'],
						body: ['var(--font-body-name)', 'sans-serif'],
					},
					spacing: {
						base: 'var(--space-base)',
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
			/* Typography */
			--font-heading-name: 'Poppins';
			--font-body-name: 'Poppins';
			--font-heading: 'Poppins', sans-serif;
			--font-body: 'Poppins', sans-serif;
			--letter-spacing-heading: -0.02em;
			--letter-spacing-body: 0px;

			/* Spacing */
			--space-base: 1rem;

			/* Borders */
			--radius-small: 0.375rem;
			--radius-large: 0.75rem;
			--border-width: 1px;

			/* Shadows */
			--shadow-color: 0 0 0;
			--shadow-offset-x: 0px;
			--shadow-offset-y: 4px;
			--shadow-blur: 20px;
			--shadow-spread: -2px;
			--shadow-opacity: 0.05;
			--shadow-custom: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
			--shadow-custom-hover: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
		}

		/* Custom Scrollbar */
		::-webkit-scrollbar {
			width: 8px;
			height: 8px;
		}

		::-webkit-scrollbar-track {
			background: #f1f1f1;
		}

		::-webkit-scrollbar-thumb {
			background: #d1d5db;
			border-radius: 4px;
		}

		::-webkit-scrollbar-thumb:hover {
			background: #9ca3af;
		}

	</style>
</head>

<body class="font-body bg-neutral-100 text-neutral-800 h-screen flex overflow-hidden" ">

    <!-- Sidebar -->
    <?php $this->load->view('Admin/component/sidebar'); ?>

    <!-- Main Content Wrapper -->
    <div class=" flex-1 flex flex-col h-full overflow-hidden">

	<!-- Top Header -->
	<header class="h-16 bg-neutral-900 text-white flex items-center justify-between px-6 shadow-md z-10">

	</header>

	<!-- Main Content Area -->
	<main class="flex-1 overflow-y-auto bg-neutral-100 p-6">
		<div class="max-w-7xl mx-auto">

			<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
				<div>
					<h1 class="font-heading text-2xl font-bold text-neutral-900">Dashboard Overview</h1>
					<p class="text-neutral-500 text-sm mt-1">Welcome back, here's what's happening today.</p>
				</div>
			</div>

			<!-- Stats Grid -->
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
				<!-- Card 1 -->
				<div
					class="bg-white p-6 rounded-large shadow-custom hover:shadow-custom-hover transition-shadow border border-neutral-100">
					<div class="flex justify-between items-start mb-4">
						<div class="p-3 bg-primary-50 rounded-small">
							<i data-lucide="package" class="w-6 h-6 text-primary-500"></i>
						</div>
						<div>
							<h3 class="text-3xl font-heading font-bold text-neutral-900 mb-1">
								<?php echo $count['product_count']; ?></h3>
							<p class="text-sm text-neutral-500 font-medium">Total Products</p>
						</div>
					</div>

				</div>

				<!-- Card 2 -->
				<div
					class="bg-white p-6 rounded-large shadow-custom hover:shadow-custom-hover transition-shadow border border-neutral-100">
					<div class="flex justify-between items-start mb-4">
						<div class="p-3 bg-blue-50 rounded-small">
							<i data-lucide="file-text" class="w-6 h-6 text-blue-500"></i>
						</div>
						<div>
							<h3 class="text-3xl font-heading font-bold text-neutral-900 mb-1">
								<?php echo $count['blog_count']; ?></h3>
							<p class="text-sm text-neutral-500 font-medium">Total Blogs</p>
						</div>
					</div>

				</div>

				<!-- Card 3 -->
				<div
					class="bg-white p-6 rounded-large shadow-custom hover:shadow-custom-hover transition-shadow border border-neutral-100">
					<div class="flex justify-between items-start mb-4">
						<div class="p-3 bg-purple-50 rounded-small">
							<i data-lucide="image" class="w-6 h-6 text-purple-500"></i>
						</div>
						<div>
							<h3 class="text-3xl font-heading font-bold text-neutral-900 mb-1">
								<?php echo $count['gallery_count']; ?></h3>
							<p class="text-sm text-neutral-500 font-medium">Gallery Images</p>
						</div>
					</div>

				</div>

				<!-- Card 4 -->
				<div
					class="bg-white p-6 rounded-large shadow-custom hover:shadow-custom-hover transition-shadow border border-neutral-100">
					<div class="flex justify-between items-start mb-4">
						<div class="p-3 bg-orange-50 rounded-small">
							<i data-lucide="briefcase" class="w-6 h-6 text-orange-500"></i>
						</div>
						<div>
							<h3 class="text-3xl font-heading font-bold text-neutral-900 mb-1">
								<?php echo $count['career_count']; ?></h3>
							<p class="text-sm text-neutral-500 font-medium">Active Career Posts</p>
						</div>
					</div>

				</div>
			</div>

			<!-- Content Grid -->
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

				<!-- Latest Blogs Section -->
				<div class="bg-white rounded-large shadow-custom border border-neutral-100 flex flex-col">
					<div class="p-6 border-b border-neutral-100 flex justify-between items-center">
						<h2 class="font-heading font-semibold text-lg text-neutral-900">Latest Blogs</h2>
						<a href="<?php echo base_url()?>manage-blog"
							class="text-sm text-primary-500 font-medium hover:text-primary-600">View All</a>
					</div>
					<div class="p-0 overflow-x-auto">
						<table class="w-full text-left border-collapse">
							<thead class="bg-neutral-50 text-neutral-500 text-xs uppercase font-semibold">
								<tr>
									<th class="px-6 py-4">Blog Title</th>
									<th class="px-6 py-4">Tags</th>
								</tr>
							</thead>
							<tbody class="divide-y divide-neutral-100">
								<?php 
									// Fixed to use the correct variable ($blog - single blog entry) that is set in your controller
									if (isset($blog) && is_array($blog) && count($blog) > 0): 
										foreach ($blog as $b): ?>
								<tr class="hover:bg-neutral-50/50 transition-colors">
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											<div
												class="w-10 h-10 rounded-small bg-neutral-200 overflow-hidden flex-shrink-0">
												<?php if (!empty($b['image'])): ?>
												<img src="<?php echo base_url('upload/blog/') . htmlspecialchars(trim($b['image'])); ?>"
													class="w-12 h-12 rounded object-cover" alt="Blog Image">
												<?php else: ?>
												<span class="text-neutral-400 italic">No image</span>
												<?php endif; ?>
											</div>
											<span
												class="font-medium text-neutral-900 text-sm"><?php echo htmlspecialchars(isset($b['title']) ? $b['title'] : ''); ?></span>
										</div>
									</td>
									<td class="px-6 py-4 text-sm text-neutral-500">
										<?php echo htmlspecialchars(isset($b['tags']) ? $b['tags'] : ''); ?></td>

								</tr>
								<?php 
										endforeach;
									else: ?>
								<tr>
									<td class="px-6 py-8 text-neutral-400 text-center" colspan="6">
										No blog posts found.
									</td>
								</tr>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>

				<!-- Latest Job Posts Section -->
				<div class="bg-white rounded-large shadow-custom border border-neutral-100 flex flex-col">
					<div class="p-6 border-b border-neutral-100 flex justify-between items-center">
						<h2 class="font-heading font-semibold text-lg text-neutral-900">Latest Job Posts</h2>
						<a href="<?php echo base_url()?>manage-career"
							class="text-sm text-primary-500 font-medium hover:text-primary-600">View All</a>
					</div>
					<div class="p-0 overflow-x-auto">
						<table class="w-full text-left border-collapse">
							<thead class="bg-neutral-50 text-neutral-500 text-xs uppercase font-semibold">
								<tr>
									<th class="px-6 py-4">Job Title</th>
									<th class="px-6 py-4">Department</th>
									<th class="px-6 py-4">Location</th>
									<th class="px-6 py-4">Status</th>
								</tr>
							</thead>
							<tbody class="divide-y divide-neutral-100">
								<?php if (!empty($careers) && is_array($careers)): ?>
								<?php foreach ($careers as $career): ?>
								<tr class="hover:bg-neutral-50/50 transition-colors">
									<td class="px-6 py-4">
										<span
											class="font-medium text-neutral-900 text-sm block"><?= htmlspecialchars(isset($career['j_title']) ? $career['j_title'] : (isset($career['title']) ? $career['title'] : '-')) ?></span>
										<span class="text-xs text-neutral-400">ID:
											<?= 'JOB-' . str_pad(isset($career['id']) ? $career['id'] : 0, 3, '0', STR_PAD_LEFT); ?></span>
									</td>
									<td class="px-6 py-4 text-sm text-neutral-500">
										<?= htmlspecialchars(isset($career['department']) ? $career['department'] : '-') ?>
									</td>
									<td class="px-6 py-4 text-sm text-neutral-500">
										<?= htmlspecialchars(isset($career['location']) ? $career['location'] : '-') ?>
									</td>
									<td class="px-6 py-4">
										<?php
											$status = isset($career['status']) ? strtolower($career['status']) : 'inactive';
										?>
										<span
											class="<?= $status == 'active' ? 'status-active' : 'status-inactive'; ?> text-xs font-600 px-2.5 py-1 rounded-small"
											style="font-weight:600;">
											● <?= ucfirst($status) ?>
										</span>
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
				</div>

			</div>
		</div>
	</main>
	</div>

	<script>
		// Initialize Lucide icons
		lucide.createIcons();

	</script>
</body>

</html>
