<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galaxy Parking - Blog Manager</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
	<script src="https://unpkg.com/lucide@latest"></script>
	<!-- QuillJS CSS and JS -->
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
	<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						primary: {
							50: '#fff5eb',
							100: '#ffe8cc',
							200: '#ffd199',
							300: '#ffb366',
							400: '#ff8c33',
							500: '#f94d00',
							600: '#cc3f00',
							700: '#992f00',
							800: '#661f00',
							900: '#331000',
						},
						secondary: {
							50: '#f2f2f2',
							100: '#e6e6e6',
							200: '#cccccc',
							300: '#b3b3b3',
							400: '#999999',
							500: '#000000',
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
						heading: ['Poppins', 'sans-serif'],
						body: ['Poppins', 'sans-serif'],
					},
					spacing: {
						base: '1rem',
					},
					borderRadius: {
						small: '0.5rem',
						large: '1rem',
					},
					boxShadow: {
						custom: '0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06)',
						'custom-hover': '0 10px 15px -3px rgba(0,0,0,0.1), 0 4px 6px -2px rgba(0,0,0,0.05)',
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
			--letter-spacing-heading: -0.02em;
			--letter-spacing-body: 0px;
			--space-base: 1rem;
			--radius-small: 0.5rem;
			--radius-large: 1rem;
			--border-width: 1px;
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

		.rich-text-toolbar button {
			padding: 0.25rem 0.5rem;
			border-radius: 0.25rem;
			color: #4b5563;
		}

		.rich-text-toolbar button:hover {
			background-color: #f3f4f6;
			color: #111827;
		}

	</style>
</head>

<body class="font-body bg-neutral-50 text-neutral-700 h-full min-h-screen flex overflow-hidden"
	style="height: auto; min-height: 100%;">
	<!-- Sidebar -->
	<?php $this->load->view('Admin/component/sidebar'); ?> 

	<!-- Main Content -->
	<main class="flex-1 flex flex-col h-screen overflow-hidden bg-neutral-50">
		<!-- Mobile Header -->
		<header class="lg:hidden bg-secondary-500 text-white p-4 flex items-center justify-between shadow-md z-20">
			<div class="flex items-center gap-2">
				<div class="w-8 h-8 bg-primary-500 rounded-lg flex items-center justify-center">
					<i data-lucide="rocket" class="w-5 h-5 text-white"></i>
				</div>
				<span class="font-heading font-bold text-lg">Galaxy Parking</span>
			</div>
			<button class="p-2 text-white hover:bg-neutral-800 rounded-md">
				<i data-lucide="menu" class="w-6 h-6"></i>
			</button>
		</header>

		<!-- Top Bar -->
		<header
			class="bg-white border-b border-neutral-200 h-16 flex items-center justify-between px-8 shadow-sm z-10 hidden lg:flex">
			<div class="flex items-center gap-4">
				<h1 class="font-heading text-2xl font-bold text-neutral-900">Blog Manager</h1>

			</div>
			<div class="flex items-center gap-4">

				<button id="addBlogBtn"
					class="flex items-center gap-2 bg-primary-500 hover:bg-primary-600 text-white text-sm font-600 px-4 py-2 rounded-small transition-all shadow-custom-hover">
					<i data-lucide="plus" class="w-4 h-4"></i> Add New Blog
				</button>
			</div>
		</header>

		<!-- Scrollable Content Area -->
		<div class="flex-1 overflow-y-auto p-4 lg:p-8">
			<div class="grid grid-cols-1 xl:grid-cols-3 gap-8">
				<!-- Blog List Table (Left 2/3) -->
				<div class="xl:col-span-2 flex flex-col gap-6">
					<div class="bg-white rounded-large shadow-custom border border-neutral-100 overflow-hidden">
						<div class="p-6 border-b border-neutral-100 flex items-center justify-between">
							<h2 class="font-heading text-lg font-semibold text-neutral-900">Recent Blog Posts</h2>
							<div class="flex gap-2">
								<button
									class="p-2 text-neutral-400 hover:text-neutral-600 hover:bg-neutral-50 rounded-small">
									<i data-lucide="filter" class="w-4 h-4"></i>
								</button>
								<button
									class="p-2 text-neutral-400 hover:text-neutral-600 hover:bg-neutral-50 rounded-small">
									<i data-lucide="more-horizontal" class="w-4 h-4"></i>
								</button>
							</div>
						</div>
						<div class="overflow-x-auto">
<table class="w-full text-sm">
						<thead>
							<tr class="bg-gray-50 border-b border-gray-100">
								<th class="text-left px-6 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">ID</th>
								<th class="text-left px-6 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Blog Title</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Image</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Tags</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Description</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Actions</th>
							</tr>
						</thead>
						<tbody> 
							<?php if (isset($blog) && is_array($blog) && count($blog) > 0): ?>
								<?php foreach ($blog as $b): 
									$js_obj = [
										'id' => $b['id'] ?? '',
										'title' => $b['title'] ?? '',
										'image' => $b['image'] ?? '',
										'tags' => $b['tags'] ?? '',
										'description' => $b['description'] ?? ''
									];
									$js_obj_json = htmlspecialchars(json_encode($js_obj), ENT_QUOTES, 'UTF-8');
								?>
								<tr class="table-row border-b border-gray-50 transition-all hover:bg-gray-50" 
									data-blog='<?= $js_obj_json ?>'>
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											
											<div>
												<p class="text-gray-800 font-600" style="font-weight:600;"><?= htmlspecialchars($b['id']) ?></p>
											</div>
										</div>
									</td>
									<td class="px-4 py-4 text-gray-600">
										<?= htmlspecialchars($b['title']) ?>
									</td>
									<td class="px-4 py-4">
										<?php if (!empty($b['image'])): ?>
											<div class="w-10 h-10 bg-gray-50 rounded-small flex items-center justify-center overflow-hidden">
												<img src="<?= base_url('upload/blog/'.htmlspecialchars(trim($b['image']))) ?>" class="w-full h-full object-cover rounded" alt="Blog Image">
											</div>
										<?php else: ?>
											<span class="text-gray-400 text-xs">No image</span>
										<?php endif; ?>
									</td>
									<td class="px-4 py-4">
										<span class="bg-blue-50 text-blue-600 text-xs font-600 px-2 py-1 rounded-small" style="font-weight:600;">
											<?= htmlspecialchars($b['tags']) ?>
										</span>
									</td>
									<td class="px-4 py-4 text-gray-500 text-xs">
										<?php 
											$desc = $b['description'] ?? '';
											if (function_exists('word_limiter')) {
												echo word_limiter(strip_tags($desc), 10); 
											} else {
												echo implode(' ', array_slice(explode(' ', strip_tags($desc)), 0, 10)) . (str_word_count(strip_tags($desc)) > 10 ? '...' : '');
											}
										?>
									</td>
									<td class="px-4 py-4">
										<div class="flex items-center gap-1">
											<button class="editBlogBtn w-8 h-8 flex items-center justify-center rounded-small hover:bg-primary-50 text-gray-400 hover:text-primary-500 transition-all" title="Edit" data-id="<?= htmlspecialchars($b['id']) ?>" type="button">
												<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
												</svg>
											</button>
											<button class="deleteBlogBtn w-8 h-8 flex items-center justify-center rounded-small hover:bg-red-50 text-gray-400 hover:text-red-500 transition-all" title="Delete" data-id="<?= htmlspecialchars($b['id']) ?>" type="button">
												<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
												</svg>
											</button>
										</div>
									</td>
								</tr>
								<?php endforeach; ?>
							<?php else: ?>
								<tr>
									<td colspan="6" class="text-center text-gray-400 py-10">
										No blog posts found.
									</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
						</div>
						<!-- Pagination Placeholder -->
						<div class="px-6 py-4 border-t border-neutral-100 flex items-center justify-between">

							<span class="text-sm text-neutral-500">
								<?php
								$totalBlogs = isset($blogs) && is_array($blogs) ? count($blogs) : 0;
								if ($totalBlogs > 0) {
									echo 'Showing <span class="font-medium text-neutral-900">1-' . min($totalBlogs, 4) . '</span> of <span class="font-medium text-neutral-900">' . $totalBlogs . '</span> results';
								}
								?>
							</span>
							<div class="flex gap-2">
								<button
									class="px-3 py-1 border border-neutral-200 rounded-md text-sm text-neutral-600 hover:bg-neutral-50 disabled:opacity-50"
									disabled>Previous</button>
								<button
									class="px-3 py-1 border border-neutral-200 rounded-md text-sm text-neutral-600 hover:bg-neutral-50">Next</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Add New Blog Form (Right 1/3) -->
				<div class="xl:col-span-1">
					<div class="bg-white rounded-large shadow-custom border border-neutral-100 p-6 sticky top-6">
						<h2
							class="font-heading text-lg font-semibold text-neutral-900 mb-6 pb-4 border-b border-neutral-100">
							Quick Add Blog</h2>
						<form action="<?php echo base_url('Blogs/blog'); ?>" method="post" enctype="multipart/form-data"
							id="add-blog-form-main">
							<input type="hidden" name="bid" id="bid" value="">
							<!-- Title -->
							<div>
								<label class="block text-sm font-medium text-neutral-700 mb-1">Blog Title</label>
								<input type="text" name="title" placeholder="Enter blog title"
									class="w-full px-4 py-2 border border-neutral-200 rounded-small text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-shadow"
									required>
							</div>
							<!-- Image Upload -->
							<div>
								<label class="block text-sm font-medium text-neutral-700 mb-1">Cover Image</label>
								<label for="coverImageUploadMain"
									class="border-2 border-dashed border-neutral-200 rounded-small p-6 flex flex-col items-center justify-center text-center hover:border-primary-400 hover:bg-primary-50 transition-colors cursor-pointer group"
									style="cursor: pointer;">
									<div
										class="w-10 h-10 bg-neutral-100 rounded-full flex items-center justify-center mb-2 group-hover:bg-white transition-colors">
										<i data-lucide="upload-cloud"
											class="w-5 h-5 text-neutral-400 group-hover:text-primary-500 transition-colors"></i>
									</div>
									<p class="text-xs text-neutral-500"><span class="text-primary-600 font-medium">Click
											to upload</span> or drag and drop</p>
									<p class="text-[10px] text-neutral-400 mt-1">SVG, PNG, JPG (max. 2MB)</p>
									<input id="coverImageUploadMain" name="image" type="file"
										accept=".jpg,.jpeg,.png,.svg" class="hidden" />
								</label>
								<div id="coverImagePreviewContainerMain" class="mt-3 relative hidden">
									<img id="coverImagePreviewMain" src="" alt="Cover Preview"
										class="rounded-lg max-h-32 border border-neutral-200 bg-neutral-50" />
									<button type="button" id="removeCoverImageMain"
										class="absolute top-2 right-2 bg-white bg-opacity-80 hover:bg-red-500 hover:text-white text-neutral-600 rounded-full w-7 h-7 flex items-center justify-center shadow transition-colors"
										title="Remove">
										<i data-lucide="x" class="w-4 h-4"></i>
									</button>
								</div>
							</div>
							<script>
								document.addEventListener('DOMContentLoaded', function () {
									const input = document.getElementById('coverImageUploadMain');
									const preview = document.getElementById('coverImagePreviewMain');
									const previewContainer = document.getElementById('coverImagePreviewContainerMain');
									const removeBtn = document.getElementById('removeCoverImageMain');
									input.addEventListener('change', function (event) {
										const file = event.target.files[0];
										if (file) {
											const reader = new FileReader();
											reader.onload = function (e) {
												preview.src = e.target.result;
												previewContainer.classList.remove('hidden');
											};
											reader.readAsDataURL(file);
										} else {
											preview.src = "";
											previewContainer.classList.add('hidden');
										}
									});
									removeBtn.addEventListener('click', function (e) {
										e.preventDefault();
										input.value = "";
										preview.src = "";
										previewContainer.classList.add('hidden');
									});
								});

							</script>
							<!-- Rich Text Editor (Simplified) -->
							<div>
								<label class="block text-sm font-medium text-neutral-700 mb-1">Description</label>
								<div
									class="border border-neutral-200 rounded-small overflow-hidden focus-within:ring-2 focus-within:ring-primary-500 focus-within:border-transparent transition-shadow">
									<div id="editorToolbarMain"
										class="bg-neutral-50 border-b border-neutral-200 p-2 flex gap-1 rich-text-toolbar">
										<span class="ql-formats">
											<select class="ql-header">
												<option value="1"></option>
												<option value="2"></option>
												<option selected></option>
											</select>
											<button class="ql-bold"></button>
											<button class="ql-italic"></button>
											<button class="ql-underline"></button>
											<button class="ql-link"></button>
											<button class="ql-list" value="ordered"></button>
											<button class="ql-list" value="bullet"></button>
										</span>
									</div>
									<div id="blogDescriptionEditorMain" style="min-height: 180px;"
										class="px-4 py-2 bg-white"></div>
									<textarea name="description" id="desc-main" style="display: none;"></textarea>
								</div>
							</div>
							<!-- Tags -->
							<div class="grid grid-cols-1 gap-4 mt-2">
								<div>
									<label class="block text-sm font-medium text-neutral-700 mb-1">Tags</label>
									<input type="text" name="tags" placeholder="e.g. Tech, News"
										class="w-full px-4 py-2 border border-neutral-200 rounded-small text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
								</div>
							</div>
							<!-- Submit Button -->
							<div class="pt-2">
								<button type="submit"
									class="w-full bg-primary-500 hover:bg-primary-600 text-white font-medium py-2.5 rounded-small shadow-lg shadow-primary-500/25 transition-all flex items-center justify-center gap-2">
									<i data-lucide="save" class="w-4 h-4"></i>
									Save Blog Post
								</button>
							</div>
						</form>
					</div>
				</div>
				<!-- End Right 1/3 -->
			</div>
			<!-- End grid -->
		</div>
		<!-- End content area -->
	</main>

	<!-- Modal Overlay -->
	<div id="addBlogModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog"
		aria-modal="true">
		<!-- Backdrop -->
		<div class="fixed inset-0 bg-neutral-900/50 backdrop-blur-sm transition-opacity opacity-0" id="modalBackdrop">
		</div>
		<!-- Modal Panel -->
		<div class="fixed inset-0 z-10 overflow-y-auto">
			<div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
				<div class="relative transform overflow-hidden rounded-large bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl opacity-0 scale-95"
					id="modalPanel">
					<!-- Modal Header -->
					<div class="bg-white px-6 py-4 border-b border-neutral-100 flex items-center justify-between">
						<h3 class="text-lg font-heading font-semibold text-neutral-900" id="modal-title">Add New Blog
							Post</h3>
						<button type="button" id="closeModalBtn"
							class="rounded-md bg-white text-neutral-400 hover:text-neutral-500 focus:outline-none">
							<span class="sr-only">Close</span>
							<i data-lucide="x" class="w-5 h-5"></i>
						</button>
					</div>
					<!-- Modal Body (Form) -->
					<div class="px-6 py-6 max-h-[70vh] overflow-y-auto">
						<form action="<?php echo base_url('Blogs/blog'); ?>" method="post" enctype="multipart/form-data"
							id="add-blog-form-modal">
							<input type="hidden" name="bid" id="bid-modal" value="">
							<div>
								<label class="block text-sm font-medium text-neutral-700 mb-1">Blog Title</label>
								<input type="text" name="title" placeholder="Enter blog title"
									class="w-full px-4 py-2 border border-neutral-200 rounded-small text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-shadow"
									required>
							</div>
							<div>
								<label class="block text-sm font-medium text-neutral-700 mb-1">Cover Image</label>
								<div id="coverImageDropzoneModal"
									class="border-2 border-dashed border-neutral-200 rounded-small p-6 flex flex-col items-center justify-center text-center hover:border-primary-400 hover:bg-primary-50 transition-colors cursor-pointer group relative"
									style="position: relative;">
									<input type="file" id="coverImageInputModal" name="image"
										accept="image/png, image/jpeg, image/jpg, image/svg+xml"
										class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
										style="z-index:2;" />
									<div
										class="w-10 h-10 bg-neutral-100 rounded-full flex items-center justify-center mb-2 group-hover:bg-white transition-colors">
										<i data-lucide="upload-cloud"
											class="w-5 h-5 text-neutral-400 group-hover:text-primary-500 transition-colors"></i>
									</div>
									<p class="text-xs text-neutral-500"><span class="text-primary-600 font-medium">Click
											to upload</span> or drag and drop</p>
									<p class="text-[10px] text-neutral-400 mt-1">SVG, PNG, JPG (max. 2MB)</p>
								</div>
								<!-- Preview image block, hidden by default -->
								<div id="coverImagePreviewContainerModal" class="flex flex-col items-center mt-2"
									style="display:none;">
									<div class="relative">
										<img id="coverImagePreviewModal" src="" alt="Preview"
											class="w-32 h-32 object-cover rounded-lg border border-neutral-200" />
										<button id="removeCoverImageBtnModal" type="button"
											class="absolute -top-2 -right-2 bg-white border border-neutral-300 rounded-full shadow p-1 hover:bg-neutral-200 transition"
											style="line-height:0;" title="Remove">
											<i data-lucide="x" class="w-4 h-4 text-neutral-600"></i>
										</button>
									</div>
								</div>
								<script>
									document.addEventListener('DOMContentLoaded', function () {
										const input = document.getElementById('coverImageInputModal');
										const previewContainer = document.getElementById('coverImagePreviewContainerModal');
										const previewImg = document.getElementById('coverImagePreviewModal');
										const removeBtn = document.getElementById('removeCoverImageBtnModal');
										const dropzone = document.getElementById('coverImageDropzoneModal');
										input.addEventListener('change', function (e) {
											if (input.files && input.files[0]) {
												const file = input.files[0];
												const reader = new FileReader();
												reader.onload = function (event) {
													previewImg.src = event.target.result;
													previewContainer.style.display = "flex";
												}
												reader.readAsDataURL(file);
											} else {
												previewImg.src = "";
												previewContainer.style.display = "none";
											}
										});
										removeBtn.addEventListener('click', function (e) {
											e.preventDefault();
											input.value = "";
											previewImg.src = "";
											previewContainer.style.display = "none";
										});
										['dragenter', 'dragover'].forEach(eventName => {
											dropzone.addEventListener(eventName, function (e) {
												e.preventDefault();
												e.stopPropagation();
												dropzone.classList.add('border-primary-400', 'bg-primary-50');
											});
										});
										['dragleave', 'drop'].forEach(eventName => {
											dropzone.addEventListener(eventName, function (e) {
												e.preventDefault();
												e.stopPropagation();
												dropzone.classList.remove('border-primary-400', 'bg-primary-50');
											});
										});
										dropzone.addEventListener('drop', function (e) {
											e.preventDefault();
											e.stopPropagation();
											if (e.dataTransfer.files && e.dataTransfer.files.length > 0) {
												input.files = e.dataTransfer.files;
												const file = e.dataTransfer.files[0];
												const reader = new FileReader();
												reader.onload = function (event) {
													previewImg.src = event.target.result;
													previewContainer.style.display = "flex";
												}
												reader.readAsDataURL(file);
											}
										});
									});

								</script>
							</div>
							<!-- Rich Text Editor -->
							<div>
								<label class="block text-sm font-medium text-neutral-700 mb-1">Description</label>
								<div
									class="border border-neutral-200 rounded-small overflow-hidden focus-within:ring-2 focus-within:ring-primary-500 focus-within:border-transparent transition-shadow">
									<div id="editorToolbarModal"
										class="bg-neutral-50 border-b border-neutral-200 p-2 flex gap-1 rich-text-toolbar">
										<span class="ql-formats">
											<select class="ql-header">
												<option value="1"></option>
												<option value="2"></option>
												<option selected></option>
											</select>
											<button class="ql-bold"></button>
											<button class="ql-italic"></button>
											<button class="ql-underline"></button>
											<button class="ql-link"></button>
											<button class="ql-list" value="ordered"></button>
											<button class="ql-list" value="bullet"></button>
										</span>
									</div>
									<div id="blogDescriptionEditorModal" style="min-height: 180px;"
										class="px-4 py-2 bg-white"></div>
									<textarea name="description" id="desc-modal" style="display: none;"></textarea>
								</div>
							</div>
							<!-- Tags -->
							<div class="grid grid-cols-1 gap-4 mt-2">
								<div>
									<label class="block text-sm font-medium text-neutral-700 mb-1">Tags</label>
									<input type="text" name="tags" placeholder="e.g. Tech, News"
										class="w-full px-4 py-2 border border-neutral-200 rounded-small text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
								</div>
							</div>
							<!-- Modal Submit in Footer -->
						</form>
					</div>
					<!-- Modal Footer -->
					<div class="bg-neutral-50 px-6 py-4 flex items-center justify-end gap-3 rounded-b-large">
						<button type="button" id="cancelModalBtn"
							class="px-4 py-2 text-sm font-medium text-neutral-700 bg-white border border-neutral-300 rounded-small hover:bg-neutral-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">Cancel</button>
						<button type="submit" form="add-blog-form-modal"
							class="px-4 py-2 text-sm font-medium text-white bg-primary-500 rounded-small hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 shadow-lg shadow-primary-500/25">
							Save Blog Post
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- NEW PROPER EDIT MODAL -->
	<div id="editBlogModal" class="fixed inset-0 z-50 hidden" aria-labelledby="edit-modal-title" role="dialog"
		aria-modal="true">
		<!-- Backdrop -->
		<div class="fixed inset-0 bg-neutral-900/50 backdrop-blur-sm transition-opacity opacity-0"
			id="editModalBackdrop"></div>
		<!-- Modal Panel -->
		<div class="fixed inset-0 z-10 overflow-y-auto">
			<div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
				<div class="relative transform overflow-hidden rounded-large bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl opacity-0 scale-95"
					id="editModalPanel">
					<!-- Modal Header -->
					<div class="bg-white px-6 py-4 border-b border-neutral-100 flex items-center justify-between">
						<h3 class="text-lg font-heading font-semibold text-neutral-900" id="edit-modal-title">Edit Blog
							Post</h3>
						<button type="button" id="closeEditModalBtn"
							class="rounded-md bg-white text-neutral-400 hover:text-neutral-500 focus:outline-none">
							<span class="sr-only">Close</span>
							<i data-lucide="x" class="w-5 h-5"></i>
						</button>
					</div>
					<!-- Modal Body (Form) -->
					<div class="px-6 py-6 max-h-[70vh] overflow-y-auto">
						<form action="<?php echo base_url('Blogs/blog'); ?>" method="post" enctype="multipart/form-data"
							id="edit-blog-form">
							<input type="hidden" name="bid" id="edit-bid" value="">
							<div>
								<label class="block text-sm font-medium text-neutral-700 mb-1">Blog Title</label>
								<input type="text" name="title" id="edit-title" placeholder="Enter blog title"
									class="w-full px-4 py-2 border border-neutral-200 rounded-small text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-shadow"
									required>
							</div>
							<div class="mt-4">
								<label class="block text-sm font-medium text-neutral-700 mb-1">Cover Image</label>
								<div id="edit-cover-dropzone"
									class="border-2 border-dashed border-neutral-200 rounded-small p-4 flex flex-col items-center justify-center text-center hover:border-primary-400 hover:bg-primary-50 transition-colors cursor-pointer group relative">
									<input type="file" id="edit-cover-input" name="image"
										accept="image/png, image/jpeg, image/jpg, image/svg+xml"
										class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
										style="z-index:2;" />
									<div id="edit-current-placeholder"
										class="w-10 h-10 bg-neutral-100 rounded-full flex items-center justify-center mb-2 group-hover:bg-white transition-colors">
										<i data-lucide="image"
											class="w-5 h-5 text-neutral-400 group-hover:text-primary-500 transition-colors"></i>
									</div>
									<p class="text-xs text-neutral-500" id="edit-image-label">Click to change image</p>
								</div>
								<div id="edit-current-preview" class="flex flex-col items-center mt-2 hidden">
									<div class="relative">
										<img id="edit-current-img" src="" alt="Current image"
											class="w-32 h-32 object-cover rounded-lg border border-neutral-200" />
										<button id="edit-remove-current" type="button"
											class="absolute -top-2 -right-2 bg-white border border-neutral-300 rounded-full shadow p-1 hover:bg-neutral-200 transition"
											style="line-height:0;" title="Remove">
											<i data-lucide="x" class="w-4 h-4 text-neutral-600"></i>
										</button>
									</div>
									<p class="text-xs text-neutral-400 mt-1">Current image (new upload replaces it)</p>
								</div>
								<div id="edit-new-preview" class="flex flex-col items-center mt-2 hidden">
									<div class="relative">
										<img id="edit-new-img" src="" alt="New image"
											class="w-32 h-32 object-cover rounded-lg border border-neutral-200" />
										<button id="edit-remove-new" type="button"
											class="absolute -top-2 -right-2 bg-red-500 hover:bg-red-600 text-white rounded-full w-7 h-7 flex items-center justify-center shadow transition-colors"
											title="Remove">
											<i data-lucide="x" class="w-4 h-4"></i>
										</button>
									</div>
									<p class="text-xs text-green-600 font-medium mt-1">New image selected</p>
								</div>
							</div>
							<!-- Rich Text Editor -->
							<div class="mt-4">
								<label class="block text-sm font-medium text-neutral-700 mb-1">Description</label>
								<div
									class="border border-neutral-200 rounded-small overflow-hidden focus-within:ring-2 focus-within:ring-primary-500 focus-within:border-transparent transition-shadow">
									<div id="edit-editor-toolbar"
										class="bg-neutral-50 border-b border-neutral-200 p-2 flex gap-1 rich-text-toolbar">
										<span class="ql-formats">
											<select class="ql-header">
												<option value="1"></option>
												<option value="2"></option>
												<option selected></option>
											</select>
											<button class="ql-bold"></button>
											<button class="ql-italic"></button>
											<button class="ql-underline"></button>
											<button class="ql-link"></button>
											<button class="ql-list" value="ordered"></button>
											<button class="ql-list" value="bullet"></button>
										</span>
									</div>
									<div id="edit-blog-editor" style="min-height: 180px;" class="px-4 py-2 bg-white">
									</div>
									<textarea name="description" id="edit-desc" style="display: none;"></textarea>
								</div>
							</div>
							<div class="mt-4">
								<label class="block text-sm font-medium text-neutral-700 mb-1">Tags</label>
								<input type="text" name="tags" id="edit-tags" placeholder="e.g. Tech, News"
									class="w-full px-4 py-2 border border-neutral-200 rounded-small text-sm focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
							</div>
						</form>
					</div>
					<!-- Modal Footer -->
					<div class="bg-neutral-50 px-6 py-4 flex items-center justify-end gap-3 rounded-b-large">
						<button type="button" id="cancel-edit-btn"
							class="px-4 py-2 text-sm font-medium text-neutral-700 bg-white border border-neutral-300 rounded-small hover:bg-neutral-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">Cancel</button>
						<button type="submit" form="edit-blog-form"
							class="px-4 py-2 text-sm font-medium text-white bg-primary-500 rounded-small hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 shadow-lg shadow-primary-500/25">
							Update Blog
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit modal basic JS (full handlers next) -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Basic edit image preview
			const editInput = document.getElementById('edit-cover-input');
			const editNewPreview = document.getElementById('edit-new-preview');
			const editNewImg = document.getElementById('edit-new-img');
			const editRemoveNew = document.getElementById('edit-remove-new');

			if (editInput) {
				editInput.addEventListener('change', function (e) {
					if (e.target.files[0]) {
						const reader = new FileReader();
						reader.onload = (event) => {
							editNewImg.src = event.target.result;
							editNewPreview.classList.remove('hidden');
						};
						reader.readAsDataURL(e.target.files[0]);
					}
				});
			}
		});

	</script>
	
	<!-- JS: Lucide icons, Modal logic, Quill init -->
	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Initialize Lucide Icons
			if (window.lucide && typeof window.lucide.createIcons === 'function') {
				window.lucide.createIcons();
			}
			// Modal Logic
			const modal = document.getElementById('addBlogModal');
			const openBtn = document.getElementById('addBlogBtn');
			const closeBtn = document.getElementById('closeModalBtn');
			const cancelBtn = document.getElementById('cancelModalBtn');
			const backdrop = document.getElementById('modalBackdrop');
			const panel = document.getElementById('modalPanel');

			function openModal() {
				modal.classList.remove('hidden');
				setTimeout(() => {
					backdrop.classList.remove('opacity-0');
					panel.classList.remove('opacity-0', 'scale-95');
				}, 10);
			}

			function closeModal() {
				backdrop.classList.add('opacity-0');
				panel.classList.add('opacity-0', 'scale-95');
				setTimeout(() => {
					modal.classList.add('hidden');
				}, 300);
			}

			if (openBtn) openBtn.addEventListener('click', openModal);
			if (closeBtn) closeBtn.addEventListener('click', closeModal);
			if (cancelBtn) cancelBtn.addEventListener('click', closeModal);

			if (modal) {
				modal.addEventListener('click', (e) => {
					if (e.target.closest('#modalPanel') === null) {
						closeModal();
					}
				});
			}

			// Quick Add Blog Quill Editor (Main side form)
			if (document.getElementById('blogDescriptionEditorMain')) {
				const quillMain = new Quill('#blogDescriptionEditorMain', {
					modules: {
						toolbar: "#editorToolbarMain"
					},
					theme: 'snow'
				});
				const descField = document.getElementById('desc-main');
				const mainForm = document.getElementById('add-blog-form-main');
				quillMain.on('text-change', function () {
					descField.value = quillMain.root.innerHTML;
				});
				mainForm.addEventListener('submit', function () {
					descField.value = quillMain.root.innerHTML;
				});
			}
			// Modal Blog Quill Editor
			if (document.getElementById('blogDescriptionEditorModal')) {
				const quillModal = new Quill('#blogDescriptionEditorModal', {
					modules: {
						toolbar: "#editorToolbarModal"
					},
					theme: 'snow'
				});
				const descField = document.getElementById('desc-modal');
				const modalForm = document.getElementById('add-blog-form-modal');
				quillModal.on('text-change', function () {
					descField.value = quillModal.root.innerHTML;
				});
				modalForm.addEventListener('submit', function () {
					descField.value = quillModal.root.innerHTML;
				});
			}
		});

	</script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Edit modal handlers
			const editModal = document.getElementById('editBlogModal');
			const editBtnClose = document.getElementById('closeEditModalBtn');
			const editBtnCancel = document.getElementById('cancel-edit-btn');
			const editBackdrop = document.getElementById('editModalBackdrop');
			const editPanel = document.getElementById('editModalPanel');
			const editForm = document.getElementById('edit-blog-form');
			const editQuill = null;

			// Edit modal open/close
			function openEditModal() {
				editModal.classList.remove('hidden');
				setTimeout(() => {
					editBackdrop.classList.remove('opacity-0');
					editPanel.classList.remove('opacity-0', 'scale-95');
				}, 10);
			}

			function closeEditModal() {
				editBackdrop.classList.add('opacity-0');
				editPanel.classList.add('opacity-0', 'scale-95');
				setTimeout(() => {
					editModal.classList.add('hidden');
					// Reset form
					editForm.reset();
					if (editQuill) editQuill.root.innerHTML = '';
					document.getElementById('edit-current-preview').classList.add('hidden');
					document.getElementById('edit-new-preview').classList.add('hidden');
					document.getElementById('edit-current-placeholder').style.display = 'flex';
					document.getElementById('edit-image-label').textContent = 'Click to change image';
				}, 300);
			}

			if (editBtnClose) editBtnClose.addEventListener('click', closeEditModal);
			if (editBtnCancel) editBtnCancel.addEventListener('click', closeEditModal);
			editModal.addEventListener('click', (e) => {
				if (e.target.closest('#editModalPanel') === null) closeEditModal();
			});

			// Edit button handlers (event delegation since table dynamic)
			document.addEventListener('click', function (e) {
				if (e.target.closest('.editBlogBtn')) {
					const btn = e.target.closest('.editBlogBtn');
					const id = btn.dataset.id;
					loadBlogForEdit(id);
				}
				if (e.target.closest('.deleteBlogBtn')) {
					const btn = e.target.closest('.deleteBlogBtn');
					const id = btn.dataset.id;
					if (confirm(
							'Are you sure you want to delete this blog post? This action cannot be undone.'
						)) {
						deleteBlog(id);
					}
				}
			});

			// Load blog data for edit
			function loadBlogForEdit(id) {
				fetch('<?= base_url("Blogs/get_blog") ?>', {
						method: 'POST',
						headers: {
							'Content-Type': 'application/x-www-form-urlencoded'
						},
						body: 'id=' + encodeURIComponent(id)
					})
					.then(response => response.json())
					.then(data => {
						if (data) {
							document.getElementById('edit-bid').value = data.id;
							document.getElementById('edit-title').value = data.title || '';
							document.getElementById('edit-tags').value = data.tags || '';

							// Image
							if (data.image) {
								document.getElementById('edit-current-img').src =
									'<?= base_url("upload/blog/") ?>' + data.image;
								document.getElementById('edit-current-preview').classList.remove('hidden');
								document.getElementById('edit-current-placeholder').style.display = 'none';
								document.getElementById('edit-image-label').textContent =
									'Current image shown. Upload new to replace.';
							}

							// Description to Quill
							const quillEdit = new Quill('#edit-blog-editor', {
								modules: {
									toolbar: '#edit-editor-toolbar'
								},
								theme: 'snow'
							});
							quillEdit.root.innerHTML = data.description || '';
							document.getElementById('edit-desc').value = data.description || '';
							quillEdit.on('text-change', () => {
								document.getElementById('edit-desc').value = quillEdit.root.innerHTML;
							});

							openEditModal();
						} else {
							alert('Blog not found');
						}
					})
					.catch(() => alert('Error loading blog'));
			}

			// Delete blog
			function deleteBlog(id) {
				fetch('<?= base_url("Blogs/delete") ?>', {
						method: 'POST',
						headers: {
							'Content-Type': 'application/x-www-form-urlencoded'
						},
						body: 'id=' + encodeURIComponent(id)
					})
					.then(response => response.json())
					.then(data => {
						if (data.success) {
							location.reload(); // Reload to update table
						} else {
							alert('Delete failed');
						}
					})
					.catch(() => alert('Error deleting blog'));
			}

			// Edit form submit
			editForm.addEventListener('submit', function (e) {
				e.preventDefault();
				const formData = new FormData(editForm);
				fetch(editForm.action, {
						method: 'POST',
						body: formData
					})
					.then(response => response.text()) // Since controller redirects
					.then(() => {
						closeEditModal();
						location.reload(); // Reload to show updates
					})
					.catch(() => alert('Update failed'));
			});
		});

	</script>
</body>

</html>
