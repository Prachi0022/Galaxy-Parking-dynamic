<!DOCTYPE html>
<html lang="en" style="height: auto; min-height: 100%;">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galaxy Parking – Gallery Management</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link id="heading-font-link"
		href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link id="body-font-link" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
		rel="stylesheet">
	<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
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
							50: '#fff2ec',
							100: '#ffe0cc',
							200: '#ffbf99',
							300: '#ff9966',
							400: '#ff7033',
							500: '#f94d00',
							600: '#d94200',
							700: '#b33600',
							800: '#8c2a00',
							900: '#661e00',
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
						background: {
							50: '#f5f5f7',
							100: '#ebebef',
							200: '#dcdce4',
							300: '#c8c8d4',
							400: '#adadc0',
							500: '#9292ac',
							600: '#6e6e8a',
							700: '#4a4a66',
							800: '#2a2a44',
							900: '#111128',
						},
					},
					borderRadius: {
						small: 'var(--radius-small)',
						large: 'var(--radius-large)',
					},
					boxShadow: {
						custom: 'var(--shadow-custom)',
						'custom-hover': 'var(--shadow-custom-hover)',
					},
					spacing: {
						base: 'var(--space-base)',
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
			--shadow-custom-hover: 0px 8px 32px rgba(0, 0, 0, 0.14);
		}

		.sidebar-icon-btn:hover {
			background: rgba(249, 77, 0, 0.12);
		}

		.sidebar-icon-btn.active {
			background: rgba(249, 77, 0, 0.18);
		}

		.gallery-card:hover .gallery-overlay {
			opacity: 1;
		}

		.gallery-overlay {
			transition: opacity 0.25s ease;
		}

		.category-row:hover {
			background: #f5f5f7;
		}

		.modal-backdrop {
			backdrop-filter: blur(4px);
		}

		.drag-zone.dragover {
			border-color: #f94d00;
			background: #fff2ec;
		}

		input[type="file"] {
			display: none;
		}

		.toggle-switch input:checked+.toggle-track {
			background: #f94d00;
		}

		.toggle-switch input:checked+.toggle-track .toggle-thumb {
			transform: translateX(20px);
		}

		.toggle-track {
			transition: background 0.2s;
		}

		.toggle-thumb {
			transition: transform 0.2s;
		}

	</style>
</head>

<body class="font-body bg-background-50 text-neutral-800" style="height: auto; min-height: 100%;">

	<!-- LAYOUT WRAPPER -->
	<div class="flex min-w-0">

		<!-- SIDEBAR -->
		<?php $this->load->view('Admin/component/sidebar'); ?>


		<!-- MAIN CONTENT -->
		<main class="flex-1 min-w-0 flex flex-col">

			<!-- TOP BAR -->
			<header
				class="bg-white border-b border-neutral-200 px-4 lg:px-8 py-4 flex items-center justify-between gap-4 flex-shrink-0">
				<div>
					<h1 class="font-heading text-2xl font-bold text-neutral-900"
						style="letter-spacing: var(--letter-spacing-heading);">Gallery Management</h1>
					<p class="text-xs text-neutral-400 mt-0.5">Manage your parking facility images and categories</p>
				</div>
				<div class="flex items-center gap-2 lg:gap-3">
					<button onclick="document.getElementById('addCategoryModal').classList.remove('hidden')"
						class="flex items-center gap-2 bg-primary-500 hover:bg-primary-600 text-white text-sm font-600 px-4 py-2 rounded-small transition-all shadow-custom-hover">
						<i data-lucide="folder-plus" class="w-4 h-4"></i>
						<span class="hidden sm:inline">Add Category</span>
					</button>
					<button onclick="document.getElementById('uploadModal').classList.remove('hidden')"
						class="flex items-center gap-2 bg-primary-500 hover:bg-primary-600 text-white text-sm font-600 px-4 py-2 rounded-small transition-all shadow-custom-hover">
						<i data-lucide="upload-cloud" class="w-4 h-4"></i>
						<span class="hidden sm:inline">Upload Images</span>
					</button>
				</div>
			</header>

			<!-- PAGE CONTENT -->
			<div class="flex-1 px-4 lg:px-8 py-6 flex flex-col gap-8">

				<!-- STATS ROW -->
				<div class="grid grid-cols-2 lg:grid-cols-2 gap-4" style="max-height: 160px; overflow: visible;">
					<div class="bg-white rounded-large shadow-custom p-4 flex items-center gap-4">
						<div
							class="w-11 h-11 rounded-large bg-primary-50 flex items-center justify-center flex-shrink-0">
							<i data-lucide="folder" class="w-5 h-5 text-primary-500"></i>
						</div>
						<div>
							<p class="text-2xl font-heading font-700 text-neutral-900"><?php echo count($category); ?>
							</p>
							<p class="text-xs text-neutral-500">Categories</p>
						</div>
					</div>
					<div class="bg-white rounded-large shadow-custom p-4 flex items-center gap-4">
						<div class="w-11 h-11 rounded-large bg-blue-50 flex items-center justify-center flex-shrink-0">
							<i data-lucide="image" class="w-5 h-5 text-blue-500"></i>
						</div>
						<div>
							<p class="text-2xl font-heading font-700 text-neutral-900">
								<?php echo isset($count['total']) ? $count['total'] : 0; ?></p>
							<p class="text-xs text-neutral-500">Total Images</p>
						</div>
					</div>
				</div>

				<!-- SECTION 1: GALLERY CATEGORIES -->
				<section style="max-height: 520px; ">
					<div class="flex items-center justify-between mb-4">
						<div>
							<h2 class="font-heading text-lg font-700 text-neutral-900">Gallery Categories</h2>
							<p class="text-xs text-neutral-400 mt-0.5">Organize your images by category</p>
						</div>
						<div class="flex items-center gap-2">
							<div class="relative">
								<i data-lucide="search"
									class="w-4 h-4 text-neutral-400 absolute left-3 top-1/2 -translate-y-1/2"></i>
								<input type="text" placeholder="Search categories..."
									class="pl-9 pr-4 py-2 text-sm border border-neutral-200 rounded-small bg-white focus:outline-none focus:border-primary-400 w-44 lg:w-56">
							</div>
						</div>
					</div>

<div class="bg-white rounded-large shadow-custom overflow-hidden">
				<!-- Table Header -->
				<div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between flex-wrap gap-3">
					<div>
						<h2 class="font-heading text-gray-900 text-base font-700" style="font-weight:700;">Gallery Categories</h2>
					</div>
				</div>
				<!-- Table -->
				<div class="overflow-x-auto">
					<table class="w-full text-sm">
						<thead>
							<tr class="bg-gray-50 border-b border-gray-100">
								<th class="text-left px-6 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">
									<input type="checkbox" class="rounded border-gray-300 text-primary-600 focus:ring-primary-500 w-4 h-4">
								</th>
								<th class="text-left px-6 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Category Name</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Total Images</th>
								<th class="text-left px-4 py-3 text-gray-400 font-600 text-xs uppercase tracking-wide" style="font-weight:600; letter-spacing:0.05em;">Actions</th>
							</tr>
						</thead>
						<tbody> 
							<?php if (!empty($count['categories'])): ?>
								<?php foreach ($count['categories'] as $cat): 
									if (empty($cat['category_name'])) continue;
								?>
								<tr class="table-row border-b border-gray-50 transition-all hover:bg-gray-50" 
									data-category='<?= htmlspecialchars(json_encode($cat), ENT_QUOTES, 'UTF-8') ?>'>
									<td class="px-6 py-4">
										<input type="checkbox" class="rounded border-gray-300 text-primary-600 focus:ring-primary-500 w-4 h-4">
									</td>
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											<div class="w-8 h-8 bg-primary-50 rounded-small flex items-center justify-center flex-shrink-0">
												<svg class="w-4 h-4 text-primary-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
												</svg>
											</div>
											<div>
												<p class="text-gray-800 font-600" style="font-weight:600;"><?= htmlspecialchars($cat['category_name']) ?></p>
											</div>
										</div>
									</td>
									<td class="px-4 py-4 text-gray-600">
										<span class="inline-flex items-center gap-1 text-sm font-600 text-gray-700">
											<svg class="w-4 h-4 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
											</svg>
											<?= $cat['count'] ?>
										</span>
									</td>
									<td class="px-4 py-4">
										<div class="flex items-center gap-1">
											<button class="edit-category-btn w-8 h-8 flex items-center justify-center rounded-small hover:bg-primary-50 text-gray-400 hover:text-primary-500 transition-all" title="Edit" data-id="<?= htmlspecialchars($cat['id']) ?>" type="button">
												<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
													<path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
												</svg>
											</button>
											<button class="delete-category-btn w-8 h-8 flex items-center justify-center rounded-small hover:bg-red-50 text-gray-400 hover:text-red-500 transition-all" title="Delete" data-id="<?= htmlspecialchars($cat['id']) ?>" type="button">
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
									<td colspan="4" class="text-center text-gray-400 py-10">
										No categories found.
									</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
				<!-- Pagination Dummy -->
				<div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between flex-wrap gap-3">
					<p class="text-gray-400 text-xs">Showing 1–5 of <?= count($count['categories']) ?> categories</p>
					<div class="flex items-center gap-1">
						<button type="button" class="w-8 h-8 flex items-center justify-center rounded-small border border-gray-200 text-gray-400 hover:bg-gray-50 transition-all" aria-label="Previous page" disabled>
							<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
								<polyline points="15 18 9 12 15 6" />
							</svg>
						</button>
						<button type="button" class="w-8 h-8 flex items-center justify-center rounded-small bg-primary-500 text-white text-xs font-600" style="font-weight:600;">1</button>
						<button type="button" class="w-8 h-8 flex items-center justify-center rounded-small border border-gray-200 text-gray-500 hover:bg-gray-50 text-xs transition-all">2</button>
						<button type="button" class="w-8 h-8 flex items-center justify-center rounded-small border border-gray-200 text-gray-400 hover:bg-gray-50 transition-all" aria-label="Next page">
							<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
								<polyline points="9 18 15 12 9 6" />
							</svg>
						</button>
					</div>
				</div>
			</div>
				</section>

				<!-- SECTION 2: IMAGE GALLERY GRID -->
				<section style="max-height: 900px;">


					<!-- Image Grid - Dynamic -->
					<div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
						<?php if (isset($images) && !empty($images)): ?>
						<?php foreach ($images as $img_row): 
								$img_array = json_decode($img_row['images'], true); ?>
						<div class="gallery-card bg-white rounded-large shadow-custom overflow-hidden group cursor-pointer"
							data-image-id="<?php echo $img_row['id']; ?>">
							<div class="relative h-40 overflow-hidden">
								<img src="<?php echo base_url('upload/gallery/' . $img_row['images']); ?>"
									alt="<?php echo htmlspecialchars($img_row['title']); ?>"
									class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
									loading="lazy">
								<div
									class="gallery-overlay absolute inset-0 bg-neutral-900 bg-opacity-60 opacity-0 flex items-center justify-center gap-2">
									<button
										onclick="viewImage('<?php echo base_url('upload/gallery/' . $img_row['images']); ?>')"
										class="w-8 h-8 rounded-small bg-white bg-opacity-20 hover:bg-opacity-30 flex items-center justify-center backdrop-blur-sm transition-colors">
										<i data-lucide="eye" class="w-4 h-4 text-white"></i>
									</button>
									<button onclick="deleteImage(<?php echo $img_row['id']; ?>)"
										class="w-8 h-8 rounded-small bg-red-500 hover:bg-red-600 flex items-center justify-center transition-colors">
										<i data-lucide="trash-2" class="w-4 h-4 text-white"></i>
									</button>
								</div>
								<span
									class="absolute top-2 left-2 bg-primary-500 text-white text-xs font-600 px-2 py-0.5 rounded-small">
									<?php echo htmlspecialchars($img_row['title']); ?>
								</span>
							</div>
							<div class="p-3">
								<p class="text-sm font-600 text-neutral-800 truncate">
									<?php echo htmlspecialchars($img_row['title']); ?></p>
								<p class="text-xs text-neutral-400 mt-0.5">
									<?php echo date('M d, Y', strtotime($img_row['created_at'])); ?></p>
							</div>
						</div>
						<?php endforeach; ?>
						<?php else: ?>
						<div class="col-span-full text-center py-12 text-neutral-400">
							<i data-lucide="image-plus" class="w-16 h-16 mx-auto mb-4 text-neutral-300"></i>
							<p class="text-lg font-600">No images yet</p>
							<p class="text-sm mt-1">Upload your first gallery images to get started</p>
						</div>
						<?php endif; ?>
					</div>

					<!-- Load More -->
					<div class="flex justify-center mt-6" id="loadMoreContainer">
						<button
							id="loadMoreBtn"
							class="flex items-center gap-2 px-6 py-2.5 rounded-small border border-neutral-200 bg-white text-neutral-600 text-sm font-500 hover:bg-neutral-50 transition-colors shadow-custom">
							<i data-lucide="refresh-cw" class="w-4 h-4"></i>
							Load More Images
						</button>
					</div>
					<script>
						let page = 1;
						const loadMoreBtn = document.getElementById('loadMoreBtn');
						const galleryGrid = document.querySelector('.gallery-grid'); // add a class to your grid if needed

						if (loadMoreBtn && galleryGrid) {
							loadMoreBtn.addEventListener('click', function() {
								page++;
								loadMoreBtn.disabled = true;
								loadMoreBtn.innerHTML = '<i data-lucide="refresh-cw" class="w-4 h-4 animate-spin"></i> Loading...';

								fetch('<?php echo base_url("admin/load_more_images"); ?>?page=' + page)
									.then(r => r.json())
									.then(data => {
										if (data.html && data.html.trim() !== '') {
											galleryGrid.insertAdjacentHTML('beforeend', data.html);
											loadMoreBtn.disabled = false;
											loadMoreBtn.innerHTML = '<i data-lucide="refresh-cw" class="w-4 h-4"></i> Load More Images';
											if (typeof lucide !== "undefined") lucide.createIcons();
										} else {
											loadMoreBtn.style.display = 'none';
										}
									})
									.catch(() => {
										loadMoreBtn.disabled = false;
										loadMoreBtn.innerHTML = '<i data-lucide="refresh-cw" class="w-4 h-4"></i> Load More Images';
									});
							});
						}
					</script>
				</section>

				<!-- BOTTOM PADDING -->
				<div class="h-8"></div>
			</div>
		</main>
	</div>

	<!-- ===================== UPLOAD IMAGE MODAL ===================== -->
	<div id="uploadModal"
		class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 modal-backdrop bg-neutral-900 bg-opacity-50">
		<div class="bg-white rounded-large shadow-custom-hover w-full max-w-lg"
			style="max-height: 90vh; overflow-y: auto;">
			<!-- Modal Header -->
			<div class="flex items-center justify-between px-6 py-5 border-b border-neutral-100">
				<div>
					<h3 class="font-heading text-lg font-700 text-neutral-900">Upload Images</h3>
					<p class="text-xs text-neutral-400 mt-0.5">Add new images to your gallery</p>
				</div>
				<button onclick="document.getElementById('uploadModal').classList.add('hidden')"
					class="w-8 h-8 rounded-small bg-neutral-100 hover:bg-neutral-200 flex items-center justify-center transition-colors">
					<i data-lucide="x" class="w-4 h-4 text-neutral-600"></i>
				</button>
			</div>

			<!-- Modal Body -->
			<form id="uploadForm" method="post" action="<?php echo base_url('admin/gallery_upload'); ?>" enctype="multipart/form-data">
				<input type="hidden" name="title" value="New Gallery Upload">
				<div class="px-6 py-5 flex flex-col gap-5">

					<!-- Select Category -->
					<div>
						<label class="block text-sm font-600 text-neutral-700 mb-1.5">Select Category <span
								class="text-primary-500">*</span></label>
						<select name="category_id" id="categorySelect" required
							class="w-full text-sm border border-neutral-200 rounded-small px-3 py-2.5 bg-white focus:outline-none focus:border-primary-400 text-neutral-700 appearance-none">
							<option value="" disabled selected>Choose a category...</option>
							<?php $i = 1; foreach ($category as $cat) { ?>
							<option value="<?php echo $cat['id']; ?>"><?php echo $cat['category_name']; ?></option>
							<?php }?>
						</select>
					</div>

					<!-- Drag & Drop Uploader -->
					<div>
						<label class="block text-sm font-600 text-neutral-700 mb-1.5">Upload Images <span
								class="text-primary-500">*</span></label>
						<div id="dragZone"
							class="drag-zone border-2 border-dashed border-neutral-200 rounded-large p-8 text-center cursor-pointer hover:border-primary-400 hover:bg-primary-50 transition-all"
							ondragover="event.preventDefault(); this.classList.add('dragover')"
							ondragleave="this.classList.remove('dragover')" ondrop="handleDrop(event)"
							onclick="document.getElementById('fileInput').click()">
							<input type="file" id="fileInput" name="gallery_img[]" multiple accept="image/*"
								class="hidden" onchange="handleFiles(this.files)">
							<div
								class="w-14 h-14 rounded-large bg-primary-50 flex items-center justify-center mx-auto mb-3">
								<i data-lucide="upload-cloud" class="w-7 h-7 text-primary-500"></i>
							</div>
							<p class="text-sm font-600 text-neutral-700">Drag & drop images here</p>
							<p class="text-xs text-neutral-400 mt-1">or <span class="text-primary-500 font-600">browse
									files</span> from your computer</p>
							<p class="text-xs text-neutral-300 mt-2">Supports: JPG, PNG, WEBP · Max 10MB per file</p>
						</div>

						<!-- Preview Thumbnails (Dynamic) -->
						<div class="flex gap-2 mt-3 flex-wrap" id="previewContainer">
							<!-- Preview thumbnails will be added here dynamically -->
						</div>
					</div>
					<script>
						let selectedFiles = [];

						function handleFiles(files) {
							const previewContainer = document.getElementById('previewContainer');
							for (let i = 0; i < files.length; i++) {
								const file = files[i];
								if (!file.type.startsWith('image/')) continue;
								if (file.size > 10 * 1024 * 1024) continue;

								selectedFiles.push(file);
								const reader = new FileReader();
								reader.onload = function (e) {
									const thumb = document.createElement('div');
									thumb.className =
										'relative w-16 h-16 rounded-large overflow-hidden border border-neutral-200 bg-white';
									thumb.innerHTML = `
								<img src="${e.target.result}" alt="Preview" class="w-full h-full object-cover">
								<button type="button" class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 rounded-full flex items-center justify-center text-xs shadow-lg"
									onclick="removeThumbnail(this.parentElement, '${file.name.replace(/'/g, "\\'")}')">
									<i data-lucide='x' class="w-2 h-2 text-white"></i>
								</button>
							`;
									previewContainer.appendChild(thumb);
									lucide.createIcons();
									updateUploadButton();
								};
								reader.readAsDataURL(file);
							}
						}

						function handleDrop(e) {
							e.preventDefault();
							document.getElementById('dragZone').classList.remove('dragover');
							handleFiles(e.dataTransfer.files);
						}

						function removeThumbnail(thumb, fileName) {
							thumb.remove();
							selectedFiles = selectedFiles.filter(f => f.name !== fileName);
							updateUploadButton();
						}

						function updateUploadButton() {
							const btn = document.getElementById('uploadBtn');
							if (selectedFiles.length > 0) {
								btn.innerHTML =
									`<i data-lucide="upload-cloud" class="w-4 h-4"></i> Upload ${selectedFiles.length} Image${selectedFiles.length > 1 ? 's' : ''}`;
								btn.disabled = !document.getElementById('categorySelect').value;
							} else {
								btn.innerHTML = `<i data-lucide="upload-cloud" class="w-4 h-4"></i> Upload Images`;
								btn.disabled = true;
							}
							lucide.createIcons();
						}

						// AJAX Upload Handler
						document.addEventListener('DOMContentLoaded', function () {
							const uploadBtn = document.getElementById('uploadBtn');
							const categorySelect = document.getElementById('categorySelect');
							const uploadModal = document.getElementById('uploadModal');

							categorySelect.addEventListener('change', updateUploadButton);

						uploadBtn.addEventListener('click', function (e) {
								e.preventDefault();
								uploadImages();
							});

							function uploadImages() {
								const formData = new FormData(); // ❗ empty formData

								formData.append('category_id', document.getElementById('categorySelect').value);
								formData.append('title', 'New Gallery Upload');

								for (let file of selectedFiles) {
									formData.append('gallery_img[]', file);
								}

								fetch('<?php echo base_url("admin/gallery_upload"); ?>', {
									method: 'POST',
									body: formData
								})
								.then(response => response.json())
								.then(data => {
									if (data.success) {
										alert('Upload successful! ' + data.message);
										closeUploadModal();
										location.reload();
									} else {
										alert('Upload failed: ' + (data.message || 'Unknown error'));
									}
								})
								.catch(error => {
									console.error('Upload error:', error);
									alert('Upload failed. Please try again.');
								})
								.finally(() => {
									uploadBtn.disabled = false;
									uploadBtn.innerHTML = '<i data-lucide="upload-cloud" class="w-4 h-4"></i> Upload Images';
									lucide.createIcons();
								});
							}
						});

						function closeUploadModal() {
							document.getElementById('uploadModal').classList.add('hidden');
							selectedFiles = [];
							document.getElementById('previewContainer').innerHTML = '';
							document.getElementById('categorySelect').value = '';
							updateUploadButton();
						}

						function viewImage(imgSrc) {
							const modal = document.createElement('div');
							modal.className = 'fixed inset-0 z-[9999] bg-neutral-900 bg-opacity-90 flex items-center justify-center p-4';
							modal.innerHTML = `
						<div class="max-w-4xl max-h-[90vh] relative">
							<button onclick="this.parentElement.parentElement.remove()" class="absolute -top-4 -right-4 w-12 h-12 bg-neutral-800 hover:bg-neutral-700 rounded-full flex items-center justify-center text-white text-xl">
								<i data-lucide="x"></i>
							</button>
							<img src="${imgSrc}" class="max-h-full max-w-full object-contain rounded-lg shadow-2xl">
						</div>
					`;
							document.body.appendChild(modal);
							lucide.createIcons();
						}

						function deleteImage(imageId) {
							if (confirm('Delete this image group?')) {
								fetch('<?php echo base_url("Category/delete_gallery_image"); ?>', {
										method: 'POST',
										headers: {
											'Content-Type': 'application/x-www-form-urlencoded'
										},
										body: `id=${imageId}`
									})
									.then(res => res.json())
									.then(data => {
										if (data.success) {
											location.reload();
										} else {
											alert('Delete failed');
										}
									});
							}
						}

					</script>

					<!-- Status Toggle -->
					<div
						class="flex items-center justify-between p-4 bg-neutral-50 rounded-large border border-neutral-100">
						<div>
							<p class="text-sm font-600 text-neutral-700">Publish Status</p>
							<p class="text-xs text-neutral-400 mt-0.5">Make images visible on the website</p>
						</div>
						<label class="toggle-switch relative inline-flex items-center cursor-pointer">
							<input type="checkbox" class="sr-only" checked>
							<div class="toggle-track w-11 h-6 bg-primary-500 rounded-full relative">
								<div
									class="toggle-thumb absolute top-1 left-1 w-4 h-4 bg-white rounded-full shadow translate-x-5">
								</div>
							</div>
						</label>
					</div>

				</div>

				<div class="px-6 py-4 border-t border-neutral-100 flex items-center justify-end gap-3">
					<button type="button" onclick="closeUploadModal()"
						class="px-5 py-2.5 rounded-small border border-neutral-200 bg-white text-neutral-600 text-sm font-500 hover:bg-neutral-50 transition-colors">
						Cancel
					</button>
					<button type="submit" id="uploadBtn"
						class="px-5 py-2.5 rounded-small bg-primary-500 hover:bg-primary-600 text-white text-sm font-600 transition-colors flex items-center gap-2 shadow-custom">
						<i data-lucide="upload-cloud" class="w-4 h-4"></i>
						Upload Images
					</button>
				</div>
			</form>
		</div> <!-- close flex-col gap-5 -->

		<!-- Modal Footer -->

	</div>
	</div>

	<!-- ===================== ADD CATEGORY MODAL ===================== -->
	<div id="addCategoryModal"
		class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 modal-backdrop bg-neutral-900 bg-opacity-50">
		<div class="bg-white rounded-large shadow-custom-hover w-full max-w-md">
			<form id="addCategoryForm" action="<?php echo base_url();?>Category/category" method="post"
				enctype="multipart/form-data" class="space-y-4" autocomplete="off"
				onsubmit="return validateAddCategory()">
				<input type="hidden" name="cid" id="cid" value="">
				<div class="flex items-center justify-between px-6 py-5 border-b border-neutral-100">
					<div>
						<h3 class="font-heading text-lg font-700 text-neutral-900">Add Category</h3>
						<p class="text-xs text-neutral-400 mt-0.5">Create a new gallery category</p>
					</div>
					<button type="button" onclick="closeAddCategoryModal()"
						class="w-8 h-8 rounded-small bg-neutral-100 hover:bg-neutral-200 flex items-center justify-center transition-colors">
						<i data-lucide="x" class="w-4 h-4 text-neutral-600"></i>
					</button>
				</div>
				<div class="px-6 py-5 flex flex-col gap-4">
					<div>
						<label class="block text-sm font-600 text-neutral-700 mb-1.5">Category Name <span
								class="text-primary-500">*</span></label>
						<input type="text" id="add-cname" placeholder="e.g. Exterior Views" name="cname"
							class="w-full text-sm border border-neutral-200 rounded-small px-3 py-2.5 bg-white focus:outline-none focus:border-primary-400 text-neutral-700 placeholder-neutral-400"
							autocomplete="off">
					</div>

				</div>
				<div class="px-6 py-4 border-t border-neutral-100 flex items-center justify-end gap-3">
					<button type="button" onclick="closeAddCategoryModal()"
						class="px-5 py-2.5 rounded-small border border-neutral-200 bg-white text-neutral-600 text-sm font-500 hover:bg-neutral-50 transition-colors">
						Cancel
					</button>
					<button type="submit"
						class="px-5 py-2.5 rounded-small bg-primary-500 hover:bg-primary-600 text-white text-sm font-600 transition-colors flex items-center gap-2 shadow-custom">
						<i data-lucide="folder-plus" class="w-4 h-4"></i>
						Create Category
					</button>
				</div>
			</form>
		</div>
	</div>

	<div id="editCategoryModal"
		class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 modal-backdrop bg-neutral-900 bg-opacity-50">
		<div class="bg-white rounded-large shadow-custom-hover w-full max-w-md">
			<div class="flex items-center justify-between px-6 py-5 border-b border-neutral-100">
				<form action="<?php echo base_url();?>Category/category" method="post" enctype="multipart/form-data"
					class="space-y-4">
					<input type="hidden" name="cid" id="cid"
						value="<?php echo isset($category->id)?$category->id:'';?>">
					<div>
						<h3 class="font-heading text-lg font-700 text-neutral-900">Edit Category</h3>
						<p class="text-xs text-neutral-400 mt-0.5">Edit your gallery category</p>
					</div>
					<button onclick="document.getElementById('editCategoryModal').classList.add('hidden')"
						class="w-8 h-8 rounded-small bg-neutral-100 hover:bg-neutral-200 flex items-center justify-center transition-colors">
						<i data-lucide="x" class="w-4 h-4 text-neutral-600"></i>
					</button>
			</div>
			<div class="px-6 py-5 flex flex-col gap-4">
				<div>
					<label class="block text-sm font-600 text-neutral-700 mb-1.5">Category Name <span
							class="text-primary-500">*</span></label>
					<input type="text" id="edit-cname" name="cname" placeholder="e.g. Exterior Views"
						class="w-full text-sm border border-neutral-200 rounded-small px-3 py-2.5 bg-white focus:outline-none focus:border-primary-400 text-neutral-700 placeholder-neutral-400">
				</div>

			</div>
			<div class="px-6 py-4 border-t border-neutral-100 flex items-center justify-end gap-3">
				<button type="button" onclick="document.getElementById('editCategoryModal').classList.add('hidden')"
					class="px-5 py-2.5 rounded-small border border-neutral-200 bg-white text-neutral-600 text-sm font-500 hover:bg-neutral-50 transition-colors">
					Cancel
				</button>
				<button type="submit"
					class="px-5 py-2.5 rounded-small bg-primary-500 hover:bg-primary-600 text-white text-sm font-600 transition-colors flex items-center gap-2 shadow-custom">
					<i data-lucide="save" class="w-4 h-4"></i>
					Update Category
				</button>
			</div>
			</form>
		</div>
	</div>

	<script>
		lucide.createIcons();

		// Prevent empty add category submission
		function validateAddCategory() {
			var cnameInput = document.getElementById('add-cname');
			if (!cnameInput.value.trim()) {
				cnameInput.focus();
				cnameInput.classList.add('border-red-500');
				return false;
			}
			return true;
		}

		// Ensure field styling resets on change
		document.addEventListener('DOMContentLoaded', function () {
			var cnameInput = document.getElementById('add-cname');
			cnameInput && cnameInput.addEventListener('input', function () {
				cnameInput.classList.remove('border-red-500');
			});
		});

		// Reset form and hide modal when Cancel/X is clicked
		function closeAddCategoryModal() {
			var modal = document.getElementById('addCategoryModal');
			var form = document.getElementById('addCategoryForm');
			form && form.reset();
			var cnameInput = document.getElementById('add-cname');
			if (cnameInput) cnameInput.classList.remove('border-red-500');
			modal.classList.add('hidden');
		}

		// Gallery Category CRUD JS
		document.addEventListener('DOMContentLoaded', function () {
			const editCategoryModal = document.getElementById('editCategoryModal');
			const editCategoryForm = editCategoryModal.querySelector('input[name="cname"]');

			// Edit button handler
			document.addEventListener('click', function (e) {
				if (e.target.closest('.edit-category-btn')) {
					const btn = e.target.closest('.edit-category-btn');
					const categoryId = btn.dataset.id;

					// AJAX fetch category data
					console.log('Edit clicked for category ID:', categoryId);
					fetch(`<?php echo base_url();?>Category/edit`, {
							method: 'POST',
							headers: {
								'Content-Type': 'application/x-www-form-urlencoded',
							},
							body: `id=${categoryId}`
						})
						.then(response => response.json())
						.then(data => {
							if (data) {
								document.querySelector('#editCategoryModal input[name="cid"]').value =
									data.id;
								editCategoryForm.value = data.category_name;
								editCategoryModal.classList.remove('hidden');
							}
						})
						.catch(error => {
							console.error('Edit fetch error:', error);
							alert('Failed to load category data');
						});
				}

				// Delete button handler
				if (e.target.closest('.delete-category-btn')) {
					const btn = e.target.closest('.delete-category-btn');
					const categoryId = btn.dataset.id;

					if (confirm('Are you sure you want to delete this category? This cannot be undone.')) {
						fetch(`<?php echo base_url();?>Category/delete`, {
								method: 'POST',
								headers: {
									'Content-Type': 'application/x-www-form-urlencoded',
								},
								body: `id=${categoryId}`
							})
							.then(response => response.json())
							.then(result => {
								if (result.success) {
									location.reload(); // Refresh table
								} else {
									alert('Delete failed');
								}
							})
							.catch(error => {
								console.error('Error:', error);
								alert('Delete failed');
							});
					}
				}
			});
		});

	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
