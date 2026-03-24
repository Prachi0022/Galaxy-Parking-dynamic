<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galaxy Parking - General Settings</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link id="heading-font-link"
		href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link id="body-font-link" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
		rel="stylesheet">
	<script src="https://unpkg.com/lucide@latest"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						primary: {
							50: '#fff1eb',
							100: '#ffe3d6',
							200: '#ffc6ad',
							300: '#ffa985',
							400: '#ff8c5c',
							500: '#f94d00', // Base Primary
							600: '#e04500',
							700: '#b83900',
							800: '#8f2c00',
							900: '#661f00',
						},
						secondary: {
							50: '#f2f2f2',
							100: '#e6e6e6',
							200: '#cccccc',
							300: '#b3b3b3',
							400: '#999999',
							500: '#000000', // Base Secondary
							600: '#000000',
							700: '#000000',
							800: '#000000',
							900: '#000000',
						},
						neutral: {
							50: '#f9fafb',
							100: '#f3f4f6',
							200: '#e5e7eb',
							300: '#d1d5db',
							400: '#9ca3af',
							500: '#6b7280',
							600: '#4b5563',
							700: '#374151',
							800: '#1f2937',
							900: '#111827',
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
			--radius-small: 0.5rem;
			--radius-large: 1rem;
			--border-width: 1px;

			/* Shadows */
			--shadow-color: 0 0 0;
			--shadow-offset-x: 0px;
			--shadow-offset-y: 4px;
			--shadow-blur: 20px;
			--shadow-spread: -2px;
			--shadow-opacity: 0.05;
			--shadow-custom: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
			--shadow-custom-hover: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -2px rgba(0, 0, 0, 0.025);
		}

	</style>
</head>

<body class="font-body bg-neutral-50 text-neutral-900" style="height: auto; min-height: 100%;">

	<div class="flex flex-col lg:flex-row min-h-screen">
		<!-- Sidebar -->
		<?php $this->load->view('Admin/component/sidebar'); ?>

		<!-- Main Content -->
		<main class="flex-1 flex flex-col min-w-0 bg-neutral-50">
			<!-- Header -->
			<header
				class="bg-white border-b border-neutral-200 px-8 py-5 flex items-center justify-between sticky top-0 z-10">
				<div>
					<h2 class="font-heading text-2xl font-bold text-neutral-900">General Settings</h2>
					<p class="text-neutral-500 text-sm mt-1">Manage your company details, branding, and social
						connections.</p>
				</div>
				<div class="flex items-center gap-4">
					
					<button
						class="hidden sm:flex items-center gap-2 px-4 py-2 bg-white border border-neutral-200 rounded-small text-neutral-600 hover:bg-neutral-50 transition-colors text-sm font-medium">
						<i data-lucide="external-link" class="w-4 h-4"></i>
						View Website
					</button>
				</div>
			</header>

			<!-- Content Scroll Area -->
			<div class="flex-1 p-6 lg:p-10 overflow-y-auto">
				<div class="max-w-5xl mx-auto space-y-8">
					<form action="<?php echo base_url();?>general/profile" method="post" enctype="multipart/form-data">
						<input type="hidden" name="wid" id="wid" value="<?php echo isset($general->id)?$general->id:'';?>">
						<!-- Section 1: Contact Details -->
						<section class="bg-white rounded-large shadow-custom border border-neutral-100 overflow-hidden">
							<div class="px-6 py-5 border-b border-neutral-100 bg-neutral-50/50 flex items-center gap-3">
								<div class="p-2 bg-primary-50 rounded-md text-primary-600">
									<i data-lucide="building-2" class="w-5 h-5"></i>
								</div>
								<div>
									<h3 class="font-heading text-lg font-semibold text-neutral-900">Contact Details</h3>
									<p class="text-sm text-neutral-500">Public information displayed on your contact
										page.
									</p>
								</div>
							</div>

							<div class="p-6 lg:p-8 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
								<div class="space-y-2 md:col-span-2">
									<label for="company_name" class="block text-sm font-medium text-neutral-700">Company
										Name</label>
									<input type="text" name="company_name" id="company_name" value="<?php echo isset($general->company_name)? $general->company_name:'';?>"
										class="w-full px-4 py-2.5 rounded-small border border-neutral-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all text-neutral-900 placeholder-neutral-400">
								</div>

								<div class="space-y-2 md:col-span-2">
									<label for="address" class="block text-sm font-medium text-neutral-700">Headquarters
										Address</label>
									<textarea name="address" id="address"  rows="3" value="<?php echo isset($general->address)? $general->address:'';?>"
										class="w-full px-4 py-2.5 rounded-small border border-neutral-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all text-neutral-900 placeholder-neutral-400"><?php echo isset($general->address)? $general->address:'';?></textarea>
								</div> 

								<div class="space-y-2">
									<label for="phone" class="block text-sm font-medium text-neutral-700">Phone
										Number</label>
									<div class="relative">
										<div
											class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-neutral-400">
											<i data-lucide="phone" class="w-4 h-4"></i>
										</div>
										<input type="tel" name="phone" id="phone" value="<?php echo isset($general->phone)? $general->phone:'';?>"
											class="w-full pl-10 pr-4 py-2.5 rounded-small border border-neutral-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all text-neutral-900 placeholder-neutral-400">
									</div>
								</div>

								<div class="space-y-2">
									<label for="email" class="block text-sm font-medium text-neutral-700">Email
										Address</label>
									<div class="relative">
										<div
											class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-neutral-400">
											<i data-lucide="mail" class="w-4 h-4"></i>
										</div>
										<input type="email" name="email" id="email" value="<?php echo isset($general->email)? $general->email:'';?>"
											class="w-full pl-10 pr-4 py-2.5 rounded-small border border-neutral-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all text-neutral-900 placeholder-neutral-400">
									</div>
								</div>

							</div>
						</section>

						<!-- Section 2: Branding -->
						<section class="bg-white rounded-large shadow-custom border border-neutral-100 overflow-hidden">
							<div class="px-6 py-5 border-b border-neutral-100 bg-neutral-50/50 flex items-center gap-3">
								<div class="p-2 bg-primary-50 rounded-md text-primary-600">
									<i data-lucide="palette" class="w-5 h-5"></i>
								</div>
								<div>
									<h3 class="font-heading text-lg font-semibold text-neutral-900">Branding</h3>
									<p class="text-sm text-neutral-500">Manage your logos and visual identity assets.
									</p>
								</div>
							</div>

							<div class="p-6 lg:p-8 grid grid-cols-1 md:grid-cols-3 gap-8">
								<!-- Website Logo -->
								<div class="space-y-4">
									<label class="block text-sm font-medium text-neutral-700">Header Logo</label>
									<div
										class="logo-upload border-2 border-dashed border-neutral-300 rounded-large p-6 flex flex-col items-center justify-center text-center hover:bg-neutral-50 transition-colors cursor-pointer group"
										data-target-input="hlogo" data-target-img="hlogo-preview">
										<div
											class="w-full h-32 mb-4 flex items-center justify-center bg-neutral-100 rounded-md overflow-hidden relative">
											<img 
												id="hlogo-preview"
												src="<?php echo !empty($general->hlogo) ? base_url('upload/logo/'.$general->hlogo) : '' ?>"
												alt="Logo Preview"
												class="h-full w-full object-cover opacity-80 group-hover:opacity-100 transition-opacity
												<?php if(empty($general->hlogo)) echo 'hidden'; ?>"
											>
											<div
												class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity">
												<span class="text-white text-sm font-medium">Change Image</span>
											</div>
										</div>
										<div class="space-y-1">
											<p class="text-sm font-medium text-primary-600">Click to upload</p>
											<p class="text-xs text-neutral-500">SVG, PNG, JPG or GIF (max. 2MB)</p>
										</div>
										<input type="file" name="hlogo" id="hlogo" class="hidden" accept="image/*" onchange="showPreview(this, 'hlogo-preview')">
									</div>
								</div>

								<div class="space-y-4">
									<label class="block text-sm font-medium text-neutral-700">Footer Logo</label>
									<div
										class="logo-upload border-2 border-dashed border-neutral-300 rounded-large p-6 flex flex-col items-center justify-center text-center hover:bg-neutral-50 transition-colors cursor-pointer group"
										data-target-input="flogo" data-target-img="flogo-preview">
										<div
											class="w-full h-32 mb-4 flex items-center justify-center bg-neutral-100 rounded-md overflow-hidden relative">
											<img 
												id="flogo-preview"
												src="<?php echo !empty($general->flogo) ? base_url('upload/logo/'.$general->flogo) : '' ?>"
												alt="Logo Preview"
												class="h-full w-full object-cover opacity-80 group-hover:opacity-100 transition-opacity
												<?php if(empty($general->flogo)) echo 'hidden'; ?>"
											>
											<div
												class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity">
												<span class="text-white text-sm font-medium">Change Image</span>
											</div>
										</div>
										<div class="space-y-1">
											<p class="text-sm font-medium text-primary-600">Click to upload</p>
											<p class="text-xs text-neutral-500">SVG, PNG, JPG or GIF (max. 2MB)</p>
										</div>
										<input type="file" name="flogo" id="flogo" class="hidden" accept="image/*" onchange="showPreview(this, 'flogo-preview')">
									</div>
								</div>

								<!-- Favicon -->
								<div class="space-y-4">
									<label class="block text-sm font-medium text-neutral-700">Favicon</label>
									<div
										class="logo-upload border-2 border-dashed border-neutral-300 rounded-large p-6 flex flex-col items-center justify-center text-center hover:bg-neutral-50 transition-colors cursor-pointer group"
										data-target-input="favicon" data-target-img="favicon-preview">
										<div
											class="w-full h-32 mb-4 flex items-center justify-center bg-neutral-100 rounded-md overflow-hidden relative">
											<img 
												id="favicon-preview"
												src="<?php echo !empty($general->favicon) ? base_url('upload/logo/'.$general->favicon) : '' ?>"
												alt="Logo Preview"
												class="h-full w-full object-cover opacity-80 group-hover:opacity-100 transition-opacity
												<?php if(empty($general->favicon)) echo 'hidden'; ?>"
											>
											<div
												class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity">
												<span class="text-white text-sm font-medium">Change Image</span>
											</div>
										</div>
										<div class="space-y-1">
											<p class="text-sm font-medium text-primary-600">Click to upload</p>
											<p class="text-xs text-neutral-500">ICO, PNG (32x32px recommended)</p>
										</div>
										<input type="file" name="favicon" id="favicon" class="hidden" accept="image/*" onchange="showPreview(this, 'favicon-preview')">
									</div>
								</div>
							</div>
							<script>
								// Handle "Click to upload"
								document.querySelectorAll('.logo-upload').forEach(function(wrapper) {
									wrapper.addEventListener('click', function(e) {
										// only trigger input if not clicking child input
										if (!e.target.matches('input[type="file"]')) {
											const inputId = wrapper.getAttribute('data-target-input');
											document.getElementById(inputId).click();
										}
									});
								});

								// Show preview after selecting file
								function showPreview(input, imgId) {
									const file = input.files[0];
									if (file) {
										const reader = new FileReader();
										reader.onload = function(e) {
											const img = document.getElementById(imgId);
											img.src = e.target.result;
											img.classList.remove('hidden');
										}
										reader.readAsDataURL(file);
									}
								}
							</script>
						</section>

						<!-- Section 3: Social Media Links -->
						<section class="bg-white rounded-large shadow-custom border border-neutral-100 overflow-hidden">
							<div class="px-6 py-5 border-b border-neutral-100 bg-neutral-50/50 flex items-center gap-3">
								<div class="p-2 bg-primary-50 rounded-md text-primary-600">
									<i data-lucide="share-2" class="w-5 h-5"></i>
								</div>
								<div>
									<h3 class="font-heading text-lg font-semibold text-neutral-900">Social Media Links
									</h3>
									<p class="text-sm text-neutral-500">Connect your social profiles to your website
										footer.
									</p>
								</div>
							</div>

							<div class="p-6 lg:p-8 space-y-5">
								<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
									<div class="space-y-2">
										<label for="facebook"
											class="block text-sm font-medium text-neutral-700">Facebook
											URL</label>
										<div class="relative">
											<div
												class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-neutral-400">
												<i data-lucide="facebook" class="w-4 h-4"></i>
											</div>
											<input type="url" value="<?php echo isset($general->facebook)? $general->facebook:'';?>" name="facebook" id="facebook"
												placeholder="https://facebook.com/galaxyparking"
												class="w-full pl-10 pr-4 py-2.5 rounded-small border border-neutral-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all text-neutral-900 placeholder-neutral-400">
										</div>
									</div>

									<div class="space-y-2">
										<label for="instagram"
											class="block text-sm font-medium text-neutral-700">Instagram
											URL</label>
										<div class="relative">
											<div
												class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-neutral-400">
												<i data-lucide="instagram" class="w-4 h-4"></i>
											</div>
											<input type="url" value="<?php echo isset($general->instagram)? $general->instagram:'';?>" name="instagram" id="instagram"
												placeholder="https://instagram.com/galaxyparking"
												class="w-full pl-10 pr-4 py-2.5 rounded-small border border-neutral-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all text-neutral-900 placeholder-neutral-400">
										</div>
									</div>

									<div class="space-y-2">
										<label for="linkedin"
											class="block text-sm font-medium text-neutral-700">LinkedIn
											URL</label>
										<div class="relative">
											<div
												class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-neutral-400">
												<i data-lucide="linkedin" class="w-4 h-4"></i>
											</div>
											<input type="url" name="linkedin" id="linkedin" value="<?php echo isset($general->linkedin)? $general->linkedin:'';?>"
												placeholder="https://linkedin.com/company/galaxyparking"
												class="w-full pl-10 pr-4 py-2.5 rounded-small border border-neutral-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all text-neutral-900 placeholder-neutral-400">
										</div>
									</div>

									<div class="space-y-2">
										<label for="youtube" class="block text-sm font-medium text-neutral-700">YouTube
											URL</label>
										<div class="relative">
											<div
												class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-neutral-400">
												<i data-lucide="youtube" class="w-4 h-4"></i>
											</div>
											<input type="url" name="youtube" id="youtube" value="<?php echo isset($general->youtube)? $general->youtube:'';?>"
												placeholder="https://youtube.com/c/galaxyparking"
												class="w-full pl-10 pr-4 py-2.5 rounded-small border border-neutral-300 focus:border-primary-500 focus:ring-2 focus:ring-primary-200 outline-none transition-all text-neutral-900 placeholder-neutral-400">
										</div>
									</div>
								</div>
							</div>
						</section>

						<!-- Action Buttons -->
						<div class="flex items-center justify-end gap-4 pt-4 pb-10">
							<button
								class="px-6 py-3 rounded-small border border-neutral-300 text-neutral-700 font-medium hover:bg-neutral-50 transition-colors">
								Cancel
							</button>
							<button
								class="px-8 py-3 rounded-small bg-primary-500 text-white font-semibold shadow-lg shadow-primary-500/30 hover:bg-primary-600 hover:shadow-primary-500/40 transition-all transform hover:-translate-y-0.5">
								Save Settings
							</button>
						</div>
					</form>
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
