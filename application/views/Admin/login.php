<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galaxy Parking - Admin Login</title>
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
							50: 'var(--color-primary-50)',
							100: 'var(--color-primary-100)',
							200: 'var(--color-primary-200)',
							300: 'var(--color-primary-300)',
							400: 'var(--color-primary-400)',
							500: 'var(--color-primary-500)',
							600: 'var(--color-primary-600)',
							700: 'var(--color-primary-700)',
							800: 'var(--color-primary-800)',
							900: 'var(--color-primary-900)',
						},
						neutral: {
							50: 'var(--color-neutral-50)',
							100: 'var(--color-neutral-100)',
							200: 'var(--color-neutral-200)',
							300: 'var(--color-neutral-300)',
							400: 'var(--color-neutral-400)',
							500: 'var(--color-neutral-500)',
							600: 'var(--color-neutral-600)',
							700: 'var(--color-neutral-700)',
							800: 'var(--color-neutral-800)',
							900: 'var(--color-neutral-900)',
						},
						background: {
							50: 'var(--color-background-50)',
							100: 'var(--color-background-100)',
							200: 'var(--color-background-200)',
							300: 'var(--color-background-300)',
							400: 'var(--color-background-400)',
							500: 'var(--color-background-500)',
							600: 'var(--color-background-600)',
							700: 'var(--color-background-700)',
							800: 'var(--color-background-800)',
							900: 'var(--color-background-900)',
						},
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
			--shadow-offset-y: 10px;
			--shadow-blur: 30px;
			--shadow-spread: -10px;
			--shadow-opacity: 0.1;
			--shadow-custom: 0 10px 30px -10px rgba(var(--shadow-color), var(--shadow-opacity));
			--shadow-custom-hover: 0 20px 40px -10px rgba(var(--shadow-color), 0.15);

			/* Colors - Galaxy Orange Primary (#f94d00 base) */
			--color-primary-50: #fff3ec;
			--color-primary-100: #ffe4d3;
			--color-primary-200: #ffc6a8;
			--color-primary-300: #ff9e70;
			--color-primary-400: #ff6d33;
			--color-primary-500: #f94d00;
			--color-primary-600: #ea3c00;
			--color-primary-700: #c22e00;
			--color-primary-800: #9a2406;
			--color-primary-900: #7e200a;

			/* Colors - Industrial Neutral (Slate/Cool Grey) */
			--color-neutral-50: #f8fafc;
			--color-neutral-100: #f1f5f9;
			--color-neutral-200: #e2e8f0;
			--color-neutral-300: #cbd5e1;
			--color-neutral-400: #94a3b8;
			--color-neutral-500: #64748b;
			--color-neutral-600: #475569;
			--color-neutral-700: #334155;
			--color-neutral-800: #1e293b;
			--color-neutral-900: #0f172a;

			/* Colors - Background (Light Grey #f5f5f5 base) */
			--color-background-50: #f5f5f5;
			--color-background-100: #eeeeee;
			--color-background-200: #e0e0e0;
			--color-background-300: #bdbdbd;
			--color-background-400: #9e9e9e;
			--color-background-500: #757575;
			--color-background-600: #616161;
			--color-background-700: #424242;
			--color-background-800: #212121;
			--color-background-900: #000000;
		}

		/* Custom pattern for the dark side */
		.tech-pattern {
			background-image: radial-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px);
			background-size: 30px 30px;
		}

	</style>
</head>

<body class="font-body bg-background-50 text-neutral-900" style="height: auto; min-height: 100%;">

	<div class="flex min-h-screen w-full flex-col lg:flex-row">

		<!-- Left Side: Branding & Visuals -->
		<div class="relative flex w-full flex-col justify-between bg-neutral-900 lg:w-5/12 xl:w-1/2 overflow-hidden">
			<!-- Background Image with Overlay -->
			<div class="absolute inset-0 z-0">
				<img src="<?php echo base_url()?>assets/img/home-1/about.png"
					alt="Modern Architecture" class="h-full w-full object-cover opacity-20 mix-blend-overlay">
				<div class="absolute inset-0 bg-gradient-to-br from-neutral-900 via-neutral-900/95 to-primary-900/40">
				</div>
				<div class="tech-pattern absolute inset-0 opacity-20"></div>
			</div>

			<!-- Content -->
			<div class="relative z-10 flex h-full flex-col justify-between p-8 lg:p-12">
				<!-- Logo Area -->
				<div class="flex items-center gap-3">
					<div
						class="flex h-10 w-10 items-center justify-center rounded-small bg-primary-500 text-white shadow-lg shadow-primary-500/30">
						<i data-lucide="car" class="h-6 w-6"></i>
					</div>
					<span class="font-heading text-xl font-bold tracking-wide text-white">GALAXY<span
							class="text-primary-500">PARKING</span></span>
				</div>

				<!-- Main Text -->
				<div class="my-12 lg:my-0">
					<div
						class="mb-6 inline-block rounded-full border border-primary-500/30 bg-primary-500/10 px-4 py-1.5 backdrop-blur-sm">
						<span class="text-xs font-semibold uppercase tracking-wider text-primary-400">Admin Portal</span>
					</div>
					<h1 class="font-heading mb-4 text-4xl font-bold leading-tight text-white lg:text-5xl">
						Smart Parking <br>
						<span
							class="text-transparent bg-clip-text bg-gradient-to-r from-primary-400 to-primary-600">Solutions.</span>
					</h1>
					<p class="max-w-md text-lg text-neutral-400">
						Streamline your facility management with our advanced AI-driven parking analytics and control
						system.
					</p>
				</div>

				<!-- Footer Text -->
				<div class="hidden text-sm text-neutral-500 lg:block">
					<p>&copy; 2026 Galaxy Parking Systems Pvt. Ltd.</p>
				</div>
			</div>

			<!-- Decorative Circle -->
			<div class="absolute -bottom-24 -right-24 h-64 w-64 rounded-full bg-primary-600 blur-[100px] opacity-20">
			</div>
		</div>

		<!-- Right Side: Login Form -->
		<div class="flex w-full flex-col justify-center bg-background-50 px-4 py-12 lg:w-7/12 lg:px-12 xl:w-1/2">
			<div class="mx-auto w-full max-w-md">

				<!-- Mobile Logo (Visible only on small screens) -->
				<div class="mb-8 flex justify-center lg:hidden">
					<div class="flex items-center gap-2">
						<div class="flex h-8 w-8 items-center justify-center rounded-small bg-primary-500 text-white">
							<i data-lucide="car" class="h-5 w-5"></i>
						</div>
						<span class="font-heading text-lg font-bold text-neutral-900">GALAXY<span
								class="text-primary-600">PARKING</span></span>
					</div>
				</div>

				<div class="mb-8 text-center lg:text-left">
					<h2 class="font-heading text-3xl font-bold text-neutral-900">Admin Login</h2>
					<p class="mt-2 text-neutral-500">Please enter your credentials to access the dashboard.</p>
				</div>

				<!-- Login Card -->
				<div class="rounded-large bg-white p-8 shadow-custom border border-neutral-100">
					<form action="#" method="POST" class="space-y-6">

						<!-- Username Field -->
						<div class="space-y-2">
							<label for="username" class="block text-sm font-medium text-neutral-700">Username</label>
							<div class="relative">
								<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
									<i data-lucide="user" class="h-5 w-5 text-neutral-400"></i>
								</div>
								<input type="text" id="username" name="username"
									class="block w-full rounded-small border border-neutral-200 bg-neutral-50 py-3 pl-10 pr-3 text-neutral-900 placeholder-neutral-400 focus:border-primary-500 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary-500 transition-all duration-200 sm:text-sm"
									placeholder="Enter your username" required>
							</div>
						</div>

						<!-- Password Field -->
						<div class="space-y-2">
							<label for="password" class="block text-sm font-medium text-neutral-700">Password</label>
							<div class="relative">
								<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
									<i data-lucide="lock" class="h-5 w-5 text-neutral-400"></i>
								</div>
								<input type="password" id="password" name="password"
									class="block w-full rounded-small border border-neutral-200 bg-neutral-50 py-3 pl-10 pr-10 text-neutral-900 placeholder-neutral-400 focus:border-primary-500 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary-500 transition-all duration-200 sm:text-sm"
									placeholder="••••••••" required>
								<div class="absolute inset-y-0 right-0 flex items-center pr-3">
									<button type="button"
										class="text-neutral-400 hover:text-neutral-600 focus:outline-none">
										<i data-lucide="eye" class="h-5 w-5"></i>
									</button>
								</div>
							</div>
						</div>

						<!-- Options -->
						<div class="flex items-center justify-between">
							<div class="flex items-center">
								<input id="remember-me" name="remember-me" type="checkbox"
									class="h-4 w-4 rounded border-neutral-300 text-primary-600 focus:ring-primary-500">
								<label for="remember-me" class="ml-2 block text-sm text-neutral-600">Remember me</label>
							</div>
						</div>

						<!-- Submit Button -->
						<button type="submit"
							class="flex w-full justify-center rounded-small bg-primary-500 py-3 px-4 text-sm font-semibold text-white shadow-md shadow-primary-500/20 hover:bg-primary-600 hover:shadow-lg hover:shadow-primary-500/30 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all duration-200">
							Login
						</button>
					</form>

					
				</div>

			</div>
		</div>
	</div>

	<script>
		// Initialize Lucide icons
		lucide.createIcons();

	</script>
</body>

</html>
