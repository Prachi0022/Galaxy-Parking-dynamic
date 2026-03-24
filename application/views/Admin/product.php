<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galaxy Parking - Product Management</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link id="heading-font-link"
		href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link id="body-font-link" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
		rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lucide/0.263.1/umd/lucide.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://unpkg.com/lucide@latest"></script>

	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						primary: {
							50: '#fff5eb',
							100: '#ffe8cc',
							200: '#ffd199',
							300: '#ffb966',
							400: '#ffa233',
							500: '#f94d00', // Base Primary
							600: '#cc3f00',
							700: '#992f00',
							800: '#661f00',
							900: '#331000',
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
			--letter-spacing-heading: 0px;
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
			--shadow-blur: 6px;
			--shadow-spread: -1px;
			--shadow-opacity: 0.1;
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
			background: #cbd5e1;
			border-radius: 4px;
		}

		::-webkit-scrollbar-thumb:hover {
			background: #94a3b8;
		}

		/* Modal Transition */
		.modal {
			transition: opacity 0.25s ease;
		}

		body.modal-active {
			overflow-y: hidden;
		}

	</style>
</head>

<body class="font-body bg-neutral-50 text-neutral-700 h-full min-h-screen flex flex-col"
	style="height: auto; min-height: 100%;">

	<div class="flex flex-col md:flex-row min-h-screen w-full">

		<!-- Mobile Header -->
		<div class="md:hidden bg-neutral-900 text-white p-4 flex justify-between items-center sticky top-0 z-50">
			<div class="flex items-center gap-2">
				<div class="w-8 h-8 bg-primary-500 rounded-small flex items-center justify-center">
					<i data-lucide="parking-circle" class="text-white w-5 h-5"></i>
				</div>
				<span class="font-heading font-bold text-lg">Galaxy Parking</span>
			</div>
			<button id="mobile-menu-btn" class="text-white hover:text-primary-500 transition-colors">
				<i data-lucide="menu" class="w-6 h-6"></i>
			</button>
		</div>

		<!-- Sidebar Navigation -->
		<?php $this->load->view('Admin/component/sidebar'); ?>


		<!-- Main Content Area -->
		<main class="flex-1 flex flex-col min-w-0 bg-neutral-50">

			<!-- Top Header -->
			<header
				class="bg-white border-b border-neutral-200 sticky top-0 z-30 px-6 py-4 flex items-center justify-between shadow-sm">
				<div>
						<h1 class="font-heading text-2xl font-bold text-neutral-900">Product Management</h1>
						<p class="text-xs text-neutral-400 mt-0.5">Manage your parking systems and equipment inventory.</p>
					</div>

				<!-- Right Header Actions -->
				<div class="flex items-center gap-4 ml-auto">

					<button onclick="document.getElementById('addProductModal').classList.remove('hidden')"
						class="flex items-center gap-2 bg-primary-500 hover:bg-primary-600 text-white text-sm font-600 px-4 py-2 rounded-small transition-all shadow-custom-hover">
						<i data-lucide="plus" class="w-5 h-5"></i>
						<span>Add New Product</span>
					</button>
				</div>
			</header>

			<!-- Page Content -->
			<div class="p-6 md:p-8 flex-1 overflow-y-auto">

				<!-- Page Title & Actions -->
				<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
					
					
				</div>

				<!-- Filters & Search for Table -->
				<div
					class="bg-white rounded-t-large border-b border-neutral-200 p-5 flex flex-col sm:flex-row justify-between items-center gap-4 shadow-sm">
					<div class="flex items-center gap-2 w-full sm:w-auto">
						<div class="relative w-full sm:w-64">
							<i data-lucide="search"
								class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-neutral-400"></i>
							<input type="text" placeholder="Search products..."
								class="w-full pl-9 pr-4 py-2 text-sm border border-neutral-300 rounded-small focus:ring-1 focus:ring-primary-500 focus:border-primary-500">
						</div>
						<button
							class="p-2 border border-neutral-300 rounded-small hover:bg-neutral-50 text-neutral-600">
							<i data-lucide="filter" class="w-4 h-4"></i>
						</button>
					</div>
					<div class="flex items-center gap-3 w-full sm:w-auto justify-end">
						<span class="text-sm text-neutral-500">Sort by:</span>
						<select
							class="text-sm border-none bg-transparent font-medium text-neutral-900 focus:ring-0 cursor-pointer">
							<option>Newest First</option>
							<option>Price: Low to High</option>
							<option>Price: High to Low</option>
							<option>Status</option>
						</select>
					</div>
				</div>

				<!-- Product Table -->
				<div
					class="bg-white rounded-b-large shadow-custom overflow-hidden border border-neutral-200 border-t-0">
					<div class="overflow-x-auto">
						<table class="w-full text-left border-collapse">
							<thead>
								<tr
									class="bg-neutral-50 border-b border-neutral-200 text-xs uppercase text-neutral-500 font-semibold tracking-wider">
									<th class="px-6 py-4 w-16">
										<input type="checkbox"
											class="rounded border-neutral-300 text-primary-600 focus:ring-primary-500">
									</th>
									<th class="px-6 py-4">Product</th>
									<th class="px-6 py-4">Description</th>
									<th class="px-6 py-4">Status</th>
									<th class="px-6 py-4 text-right">Action</th>
								</tr>
							</thead>
							<tbody class="divide-y divide-neutral-100">

							<?php $i = 1; foreach ($product as $pro) { 
								// Compose the features array for editing (decode from JSON or fallback)
								$features = [];
								if (!empty($pro['features'])) {
									$decoded = json_decode($pro['features'], true);
									if (is_array($decoded)) $features = $decoded;
								}
								// Compose a JS object literal for this product's edit modal
								$js_obj = [
									'id' => $pro['id'],
									'title' => $pro['title'],
									'description' => $pro['description'],
									'status' => (int)$pro['status'],
									'img' => base_url('upload/product/'.$pro['product_img']),
									'features' => $features,
								];
								$js_obj_json = htmlspecialchars(json_encode($js_obj), ENT_QUOTES, 'UTF-8');
							?>
								<tr class="hover:bg-neutral-50 transition-colors group">
									<td class="px-6 py-4">
										<input type="checkbox"
											class="rounded border-neutral-300 text-primary-600 focus:ring-primary-500">
									</td>
									<td class="px-6 py-4">
										<div class="flex items-center gap-4">
											<div
												class="h-12 w-12 rounded-small overflow-hidden bg-neutral-100 border border-neutral-200 flex-shrink-0">
												<img src="<?php echo base_url(); ?>upload/product/<?php echo $pro['product_img']; ?>"
													alt="<?php echo $pro['title']; ?>" class="h-full w-full object-cover">
											</div>
											<div>
												<p class="font-medium text-neutral-900"><?php echo $pro['title']; ?></p>
											</div>
										</div>
									</td>
									<td class="px-6 py-4 max-w-xs">
										<p class="text-sm text-neutral-600 truncate">
											<?php
												$desc = $pro['description'];
												echo strlen($desc) > 50 ? substr($desc, 0, 50) . '...' : $desc;
											?>
										</p>
									</td>
									<td class="px-6 py-4">
										<span
											class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
											<span class="w-1.5 h-1.5 bg-green-500 rounded-full mr-1.5"></span>
											<?php echo $pro['status']; ?>
										</span>
									</td>
									<td class="px-6 py-4 text-right">
										<div class="flex items-center justify-end gap-2">
											
											<button
												class="p-1.5 text-neutral-500 hover:text-blue-600 hover:bg-blue-50 rounded transition-colors"
												title="Edit" onclick="openEditProductModal(<?php echo $js_obj_json; ?>)">
												<i data-lucide="edit-2" class="w-4 h-4"></i>
											</button>

											<!-- Edit Product Modal --> 

											<button
												class="p-1.5 text-neutral-500 delproduct hover:text-red-600 hover:bg-red-50 rounded transition-colors"
												title="Delete" data-id="<?php echo $pro['id']; ?>">
												<i data-lucide="trash-2" class="w-4 h-4"></i>
											</button>
										</div>
									</td>
								</tr>
								<?php }?>

							</tbody>
						</table>
					</div>

					<!-- Pagination -->
					<div class="bg-white px-6 py-4 border-t border-neutral-200 flex items-center justify-between">
						<p class="text-sm text-neutral-500">Showing <span class="font-medium text-neutral-900">1</span>
							to <span class="font-medium text-neutral-900">3</span> of <span
								class="font-medium text-neutral-900">124</span> results</p>
						<div class="flex items-center gap-2">
							<button
								class="px-3 py-1 border border-neutral-300 rounded-small text-sm text-neutral-600 hover:bg-neutral-50 disabled:opacity-50">Previous</button>
							<button
								class="px-3 py-1 bg-primary-500 border border-primary-500 rounded-small text-sm text-white hover:bg-primary-600">1</button>
							<button
								class="px-3 py-1 border border-neutral-300 rounded-small text-sm text-neutral-600 hover:bg-neutral-50">2</button>
							<button
								class="px-3 py-1 border border-neutral-300 rounded-small text-sm text-neutral-600 hover:bg-neutral-50">3</button>
							<span class="text-neutral-400">...</span>
							<button
								class="px-3 py-1 border border-neutral-300 rounded-small text-sm text-neutral-600 hover:bg-neutral-50">Next</button>
						</div>
					</div>
				</div>

			</div>
		</main>
	</div>

	<!-- Add Product Modal -->
	<div id="addProductModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog"
		aria-modal="true">
		<!-- Backdrop -->
		<div class="fixed inset-0 bg-neutral-900/75 transition-opacity backdrop-blur-sm"
			onclick="document.getElementById('addProductModal').classList.add('hidden')"></div>

		<div class="fixed inset-0 z-10 overflow-y-auto">
			<div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

				<div
					class="relative transform overflow-hidden rounded-large bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl">

					<!-- Modal Header -->
					<div class="bg-white px-6 py-4 border-b border-neutral-200 flex items-center justify-between">
						<h3 class="text-lg font-heading font-semibold text-neutral-900" id="modal-title">Add New Product
						</h3>
						<button onclick="document.getElementById('addProductModal').classList.add('hidden')"
							class="text-neutral-400 hover:text-neutral-500">
							<i data-lucide="x" class="w-6 h-6"></i>
						</button>
					</div>

					<!-- Modal Body -->
					<div class="px-6 py-6 max-h-[70vh] overflow-y-auto">
						<form action="<?php echo base_url();?>Products/products" method="post"
							enctype="multipart/form-data" id="productForm" class="space-y-6">
							<input type="hidden" name="cid" id="cid"
								value="<?php echo isset($product->id)?$product->id:'';?>">
							<!-- Image Upload -->
							<div class="flex justify-center">
								<div class="w-full">
									<label class="block text-sm font-medium text-neutral-700 mb-2">Product Image</label>
									<div id="dropzone-upload"
										class="mt-1 flex justify-center rounded-large border-2 border-dashed border-neutral-300 px-6 pt-5 pb-6 hover:border-primary-500 hover:bg-primary-50 transition-colors cursor-pointer group relative"
										ondragenter="highlight(event)" ondragover="highlight(event)"
										ondragleave="unhighlight(event)" ondrop="handleDrop(event)">
										<div class="space-y-1 text-center pointer-events-none select-none w-full">
											<div
												class="mx-auto h-12 w-12 text-neutral-400 group-hover:text-primary-500 transition-colors">
												<i data-lucide="image-plus" class="w-12 h-12"></i>
											</div>
											<div class="flex text-sm text-neutral-600 justify-center">
												<span
													class="relative font-medium text-primary-600 hover:text-primary-500">
													Upload a file
												</span>
												<p class="pl-1">or drag and drop</p>
											</div>
											<p class="text-xs text-neutral-500">PNG, JPG, GIF up to 10MB</p>
										</div>
										<!-- File Input (only one) -->
										<input id="file-upload" name="product_img" type="file"
											class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
											style="position:absolute; left:0; top:0; width:100%; height:100%; opacity:0; cursor:pointer;"
											onchange="handleFileInput(event)">
									</div>
									<!-- Preview with remove button, appears below the upload box -->
									<div id="preview-container" class="flex justify-center mt-2" style="display:none;">
										<div class="relative inline-block">
											<img id="preview-image" class="max-h-32 rounded shadow border"
												alt="Preview" />
											<button type="button" id="remove-preview"
												class="absolute -top-2 -right-2 bg-white border border-neutral-300 rounded-full p-1 shadow hover:bg-red-50 transition"
												title="Remove image" onclick="removePreview()">
												<i data-lucide="x" class="w-4 h-4 text-red-500"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<script>
								// Guard for DOMContentLoaded case
								document.addEventListener('DOMContentLoaded', function () {
									const dropzone = document.getElementById('dropzone-upload');
									const fileInput = document.getElementById('file-upload');
									const previewImage = document.getElementById('preview-image');
									const previewContainer = document.getElementById('preview-container');

									if (dropzone && fileInput) {
										function highlight(e) {
											e.preventDefault();
											e.stopPropagation();
											dropzone.classList.add('border-primary-500', 'bg-primary-50/30');
										}

										function unhighlight(e) {
											e.preventDefault();
											e.stopPropagation();
											dropzone.classList.remove('border-primary-500', 'bg-primary-50/30');
										}

										function handleDrop(e) {
											e.preventDefault();
											e.stopPropagation();
											unhighlight(e);
											const dt = e.dataTransfer;
											const files = dt.files;
											if (files && files.length > 0) {
												fileInput.files = files;
												handleFileInput({
													target: fileInput
												});
											}
										}

										dropzone.ondragenter = highlight;
										dropzone.ondragover = highlight;
										dropzone.ondragleave = unhighlight;
										dropzone.ondrop = handleDrop;

										dropzone.addEventListener('click', function (e) {
											if (e.target === dropzone) {
												fileInput.click();
											}
										});

										window.handleFileInput = function (e) {
											const file = e.target.files[0];
											if (file && file.type.startsWith('image/')) {
												const reader = new FileReader();
												reader.onload = function (ev) {
													previewImage.src = ev.target.result;
													previewContainer.style.display = 'flex';
												};
												reader.readAsDataURL(file);
											} else {
												removePreview();
											}
										}

										window.removePreview = function () {
											previewImage.src = '';
											previewContainer.style.display = 'none';
											fileInput.value = '';
										}
									}
								});

							</script>

							<div class="grid grid-cols-1 gap-6">
								<div>
									<label for="title" class="block text-sm font-medium text-neutral-700">Product
										Title</label>
									<input type="text" name="title" id="title" 
										class="mt-1 block w-full rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2.5 px-3 border"
										placeholder="e.g. Smart Parking Sensor" required>
								</div>
								<div>
									<label for="full-desc" class="block text-sm font-medium text-neutral-700">
										Full Description
									</label>
									<div class="mt-1 rounded-small border border-neutral-300 shadow-sm">
										<!-- Editor Container -->
										<div id="editor" class="bg-white" style="min-height: 200px;"></div>
										<!-- Hidden Input to store content -->
										<input type="hidden" name="description" id="description">
									</div>
								</div>
								<!-- Include Quill JS -->
								<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.min.js"></script>
								<script>
									document.addEventListener('DOMContentLoaded', function () {
										var quill = new Quill('#editor', {
											theme: 'snow',
											placeholder: 'Detailed product information...',
											modules: {
												toolbar: [
													[{
														'header': [1, 2, 3, false]
													}],
													['bold', 'italic', 'underline'],
													[{
														'list': 'ordered'
													}, {
														'list': 'bullet'
													}],
													['link', 'image'],
													['clean']
												]
											}
										});
										// Properly set the description hidden field on submit,
										// and validate at least something is entered
										document.getElementById('productForm').addEventListener('submit', function (e) {
											document.getElementById('description').value = quill.root.innerHTML;
											const descValue = quill.getText().trim();
											const titleValue = document.getElementById('title').value.trim();
											if (!titleValue || !descValue) {
												alert('Please fill out all required fields.');
												e.preventDefault();
												return false;
											}
											return true;
										});
									});

								</script>
								<div>
									<label class="block text-sm font-medium text-neutral-700 mb-2">Features</label>
									<div class="space-y-3" id="features-container">
										<div
											class="feature-row group flex flex-col lg:flex-row gap-2 p-3 border border-neutral-200 rounded-small bg-neutral-50 hover:border-primary-300 transition-all">
											<input type="text" name="feature[]"
												class="flex-1 rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2 px-3 border"
												placeholder="Feature Title">
											<textarea name="f_description[]" rows="2"
												class="flex-1 rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2 px-3 border resize-vertical"
												placeholder="Feature Description"></textarea>
											<button type="button"
												class="remove-feature-btn p-2 text-red-500 hover:bg-red-50 rounded-small shrink-0 self-start lg:self-auto group-hover:text-red-600 transition-colors"><i
													data-lucide="trash-2" class="w-4 h-4"></i></button>
										</div>
									</div>
									<button type="button" id="add-feature-btn"
										class="mt-3 text-sm text-primary-600 font-medium hover:text-primary-700 flex items-center gap-1">
										<i data-lucide="plus-circle" class="w-4 h-4"></i> Add another feature
									</button>
								</div>
								<script>
									document.addEventListener('DOMContentLoaded', function () {
										function refreshLucideIcons() {
											if (window.lucide) lucide.createIcons();
										}

										function getFeatureRowHTML() {
											return `<div class="feature-row group flex flex-col lg:flex-row gap-2 p-3 border border-neutral-200 rounded-small bg-neutral-50 hover:border-primary-300 transition-all">
												<input type="text" name="feature[]" class="flex-1 rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2 px-3 border" placeholder="Feature Title">
												<textarea name="f_description[]" rows="2" class="flex-1 rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2 px-3 border resize-vertical" placeholder="Feature Description"></textarea>
												<button type="button" class="remove-feature-btn p-2 text-red-500 hover:bg-red-50 rounded-small shrink-0 self-start lg:self-auto group-hover:text-red-600 transition-colors"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
											</div>`;
										}
										const featuresContainer = document.getElementById('features-container');
										const addFeatureBtn = document.getElementById('add-feature-btn');
										addFeatureBtn.addEventListener('click', function () {
											featuresContainer.insertAdjacentHTML('beforeend', getFeatureRowHTML());
											refreshLucideIcons();
										});
										featuresContainer.addEventListener('click', function (e) {
											if (e.target.closest('.remove-feature-btn')) {
												const row = e.target.closest('.feature-row');
												if (featuresContainer.querySelectorAll('.feature-row').length > 1) {
													row.remove();
												}
											}
										});
									});

								</script>
								<div
									class="flex items-center justify-between bg-neutral-50 p-4 rounded-small border border-neutral-200">
									<div>
										<span class="block text-sm font-medium text-neutral-900">Product Status</span>
										<span class="block text-xs text-neutral-500">Visible to customers when
											active</span>
									</div>
									<div class="flex items-center">
										<label class="relative inline-flex items-center cursor-pointer">
											<input type="checkbox" name="status" value="1" class="sr-only peer"
												id="product-status-toggle" checked>
											<div
												class="w-11 h-6 bg-neutral-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-neutral-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-500">
											</div>
											<span class="ml-3 text-sm font-medium text-neutral-900"
												id="product-status-text">Active</span>
										</label>
									</div>
								</div>
								<script>
									document.addEventListener('DOMContentLoaded', function () {
										const statusToggle = document.getElementById('product-status-toggle');
										const statusText = document.getElementById('product-status-text');
										statusToggle.addEventListener('change', function () {
											if (this.checked) {
												statusText.textContent = 'Active';
												statusToggle.value = '1';
											} else {
												statusText.textContent = 'Inactive';
												statusToggle.value = '0';
											}
										});
									});

								</script>
							</div>
							<!-- Modal Footer -->
							<div class=" px-6 py-4 flex flex-row-reverse gap-3 border-t border-neutral-200">
								<button type="submit"
									class="inline-flex w-full justify-center rounded-small bg-primary-500 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm transition-colors">Save
									Product</button>
								<button type="button"
									onclick="document.getElementById('addProductModal').classList.add('hidden')"
									class="mt-3 inline-flex w-full justify-center rounded-small border border-neutral-300 bg-white px-4 py-2 text-base font-medium text-neutral-700 shadow-sm hover:bg-neutral-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm transition-colors">Cancel</button>
							</div>
						</form>
					</div>


				</div>
			</div>
		</div>
	</div>


	<!-- EDIT PRODUCT MODAL (FIXED for DATA binding & "features" error) -->
	<div id="editProductModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
		<!-- Backdrop -->
		<div class="fixed inset-0 bg-neutral-900/75 transition-opacity backdrop-blur-sm" onclick="closeEditProductModal()"></div>
		<div class="fixed inset-0 z-10 overflow-y-auto">
			<div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
				<div class="relative bg-white rounded-large shadow-xl overflow-hidden max-w-2xl w-full p-6 text-left">
					<div class="flex items-center justify-between pb-4 mb-4 border-b">
						<h3 class="text-xl font-heading font-bold text-neutral-900" id="modal-title-edit-product">Edit Product</h3>
						<button type="button" class="text-neutral-400 hover:text-neutral-700 p-1 rounded"
							onclick="closeEditProductModal()">
							<span class="sr-only">Close</span>
							<i data-lucide="x" class="h-6 w-6"></i>
						</button>
					</div>
					<div class="px-6 py-6 max-h-[70vh] overflow-y-auto">
						<form id="editProductForm" action="<?php echo base_url();?>Products/products" method="post" enctype="multipart/form-data" class="space-y-6">
							<input type="hidden" name="cid" id="edit-cid"
								value="">
							<!-- Image Upload -->
							<div class="flex justify-center">
								<div class="w-full">
									<label class="block text-sm font-medium text-neutral-700 mb-2">Product Image</label>
									<div id="edit-dropzone-upload"
										class="mt-1 flex justify-center rounded-large border-2 border-dashed border-neutral-300 px-6 pt-5 pb-6 hover:border-primary-500 hover:bg-primary-50 transition-colors cursor-pointer group relative"
										ondragenter="editHighlight(event)" ondragover="editHighlight(event)"
										ondragleave="editUnhighlight(event)" ondrop="editHandleDrop(event)">
										<div class="space-y-1 text-center pointer-events-none select-none w-full">
											<div class="mx-auto h-12 w-12 text-neutral-400 group-hover:text-primary-500 transition-colors">
												<i data-lucide="image-plus" class="w-12 h-12"></i>
											</div>
											<div class="flex text-sm text-neutral-600 justify-center">
												<span class="relative font-medium text-primary-600 hover:text-primary-500">
													Upload a file
												</span>
												<p class="pl-1">or drag and drop</p>
											</div>
											<p class="text-xs text-neutral-500">PNG, JPG, GIF up to 10MB</p>
										</div>
										<!-- File Input (only one) -->
										<input id="edit-file-upload" name="product_img" type="file"
											class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10"
											style="position:absolute; left:0; top:0; width:100%; height:100%; opacity:0; cursor:pointer;"
											onchange="handleEditFileInput(event)">
									</div>
									<!-- Preview with remove button, appears below the upload box -->
									<div id="edit-preview-container" class="flex justify-center mt-2"
										style="display:none;">
										<div class="relative inline-block">
											<img id="edit-preview-image" class="max-h-32 rounded shadow border"
												alt="Preview"
												src="">
											<button type="button" id="edit-remove-preview"
												class="absolute -top-2 -right-2 bg-white border border-neutral-300 rounded-full p-1 shadow hover:bg-red-50 transition"
												title="Remove image" onclick="removeEditPreview()">
												<i data-lucide="x" class="w-4 h-4 text-red-500"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<script>
								document.addEventListener('DOMContentLoaded', function () {
									const dropzone = document.getElementById('edit-dropzone-upload');
									const fileInput = document.getElementById('edit-file-upload');
									const previewImage = document.getElementById('edit-preview-image');
									const previewContainer = document.getElementById('edit-preview-container');

									function editHighlight(e) {
										e.preventDefault();
										e.stopPropagation();
										dropzone.classList.add('border-primary-500', 'bg-primary-50/30');
									}
									function editUnhighlight(e) {
										e.preventDefault();
										e.stopPropagation();
										dropzone.classList.remove('border-primary-500', 'bg-primary-50/30');
									}
									function editHandleDrop(e) {
										e.preventDefault();
										e.stopPropagation();
										editUnhighlight(e);
										const dt = e.dataTransfer;
										const files = dt.files;
										if (files && files.length > 0) {
											fileInput.files = files;
											handleEditFileInput({ target: fileInput });
										}
									}
									if (dropzone && fileInput) {
										dropzone.ondragenter = editHighlight;
										dropzone.ondragover = editHighlight;
										dropzone.ondragleave = editUnhighlight;
										dropzone.ondrop = editHandleDrop;

										dropzone.addEventListener('click', function (e) {
											if (e.target === dropzone) {
												fileInput.click();
											}
										});
									}
									window.handleEditFileInput = function (e) {
										const file = e.target.files[0];
										if (file && file.type.startsWith('image/')) {
											const reader = new FileReader();
											reader.onload = function (ev) {
												previewImage.src = ev.target.result;
												previewContainer.style.display = 'flex';
											};
											reader.readAsDataURL(file);
										} else {
											removeEditPreview();
										}
									}
									window.removeEditPreview = function () {
										previewImage.src = '';
										previewContainer.style.display = 'none';
										fileInput.value = '';
									}
								});
							</script>
							<div class="grid grid-cols-1 gap-6">
								<div>
									<label for="edit-title" class="block text-sm font-medium text-neutral-700">Product Title</label>
									<input type="text" name="title" id="edit-title"
										value=""
										class="mt-1 block w-full rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2.5 px-3 border"
										placeholder="e.g. Smart Parking Sensor" required>
								</div>
								<div>
									<label for="edit-full-desc" class="block text-sm font-medium text-neutral-700">
										Full Description
									</label>
									<div class="mt-1 rounded-small border border-neutral-300 shadow-sm">
										<!-- Editor Container -->
										<div id="edit-editor" class="bg-white" style="min-height: 200px;"></div>
										<!-- Hidden Input to store content -->
										<input type="hidden" value="" name="description" id="edit-description">
									</div>
								</div>
								<!-- Quill JS -->
								<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.min.js"></script>
								<script>
									var editQuill;
									document.addEventListener('DOMContentLoaded', function () {
										editQuill = new Quill('#edit-editor', {
											theme: 'snow',
											placeholder: 'Detailed product information...',
											modules: {
												toolbar: [
													[{ 'header': [1, 2, 3, false] }],
													['bold', 'italic', 'underline'],
													[{ 'list': 'ordered' }, { 'list': 'bullet' }],
													['link', 'image'],
													['clean']
												]
											}
										});
										document.getElementById('editProductForm').addEventListener('submit', function (e) {
											document.getElementById('edit-description').value = editQuill.root.innerHTML;
											const descValue = editQuill.getText().trim();
											const titleValue = document.getElementById('edit-title').value.trim();
											if (!titleValue || !descValue) {
												alert('Please fill out all required fields.');
												e.preventDefault();
												return false;
											}
											return true;
										});
									});
								</script>
								<div>
									<label class="block text-sm font-medium text-neutral-700 mb-2">Features</label>
									<div class="space-y-3" id="edit-features-container">
										<!-- Rows will be injected by openEditProductModal -->
									</div>
									<button type="button" id="add-edit-feature"
										class="mt-3 text-sm text-primary-600 font-medium hover:text-primary-700 flex items-center gap-1">
										<i data-lucide="plus-circle" class="w-4 h-4"></i> Add another feature
									</button>
								</div>
								<script>
									document.addEventListener('DOMContentLoaded', function () {
										function refreshLucideIcons() {
											if (window.lucide) lucide.createIcons();
										}
										function getEditFeatureRowHTML() {
											return `<div class="edit-feature-row group flex flex-col lg:flex-row gap-2 p-3 border border-neutral-200 rounded-small bg-neutral-50 hover:border-primary-300 transition-all">
												<input type="text" name="feature[]" class="flex-1 rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2 px-3 border" placeholder="Feature Title">
												<textarea name="f_description[]" rows="2" class="flex-1 rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2 px-3 border resize-vertical" placeholder="Feature Description"></textarea>
												<button type="button" class="remove-feature-btn p-2 text-red-500 hover:bg-red-50 rounded-small shrink-0 self-start lg:self-auto group-hover:text-red-600 transition-colors"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
											</div>`;
										}
										const featuresContainer = document.getElementById('edit-features-container');
										const addFeatureBtn = document.getElementById('add-edit-feature');
										addFeatureBtn.addEventListener('click', function () {
											featuresContainer.insertAdjacentHTML('beforeend', getEditFeatureRowHTML());
											refreshLucideIcons();
										});
										featuresContainer.addEventListener('click', function (e) {
											if (e.target.closest('.remove-feature-btn')) {
												const row = e.target.closest('.edit-feature-row');
												if (featuresContainer.querySelectorAll('.edit-feature-row').length > 1) {
													row.remove();
												}
											}
										});
									});
								</script>
								<div class="flex items-center justify-between bg-neutral-50 p-4 rounded-small border border-neutral-200">
									<div>
										<span class="block text-sm font-medium text-neutral-900">Product Status</span>
										<span class="block text-xs text-neutral-500">Visible to customers when active</span>
									</div>
									<div class="flex items-center">
										<label class="relative inline-flex items-center cursor-pointer">
											<input type="checkbox" name="status" value="1" class="sr-only peer"
												id="edit-product-status-toggle">
											<div
												class="w-11 h-6 bg-neutral-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-neutral-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-500"
											></div>
											<span class="ml-3 text-sm font-medium text-neutral-900"
												id="edit-product-status-text">Inactive</span>
										</label>
									</div>
								</div>
								<script>
									document.addEventListener('DOMContentLoaded', function () {
										const statusToggle = document.getElementById('edit-product-status-toggle');
										const statusText = document.getElementById('edit-product-status-text');
										if (statusToggle && statusText) {
											statusToggle.addEventListener('change', function () {
												if (this.checked) {
													statusText.textContent = 'Active';
													statusToggle.value = '1';
												} else {
													statusText.textContent = 'Inactive';
													statusToggle.value = '0';
												}
											});
										}
									});
								</script>
							</div>
							<!-- Modal Footer -->
							<div class="px-6 py-4 flex flex-row-reverse gap-3 border-t border-neutral-200">
								<button type="submit"
									class="inline-flex w-full justify-center rounded-small bg-primary-500 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm transition-colors">Save Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		function openEditProductModal(product) {
			// Accepts a JS object describing the product & populates the modal with REAL data
			if (!product) return;
			document.getElementById('editProductModal').classList.remove('hidden');
			document.getElementById('edit-cid').value = product.id || '';
			document.getElementById('edit-title').value = product.title || '';
			// Description for Quill
			if (window.editQuill) {
				editQuill.root.innerHTML = product.description || '';
			} else {
				document.getElementById('edit-description').value = product.description || '';
			}
			// Status
			const statusToggle = document.getElementById('edit-product-status-toggle');
			const statusText = document.getElementById('edit-product-status-text');
			if (statusToggle && statusText) {
				statusToggle.checked = (product.status == 1 || product.status == '1');
				statusToggle.value = statusToggle.checked ? '1' : '0';
				statusText.textContent = statusToggle.checked ? 'Active' : 'Inactive';
			}
			// Image
			const preview = document.getElementById('edit-preview-image');
			const previewContainer = document.getElementById('edit-preview-container');
			if (product.img) {
				preview.src = product.img; // Should be a URL (set via backend)
				previewContainer.style.display = 'flex';
			} else {
				preview.src = '';
				previewContainer.style.display = 'none';
			}
			document.getElementById('edit-file-upload').value = '';

			// Features
			const featuresContainer = document.getElementById('edit-features-container');
			featuresContainer.innerHTML = '';
			if (Array.isArray(product.features) && product.features.length > 0) {
				product.features.forEach(function (feat) {
					const feature = feat.feature !== undefined ? feat.feature : '';
					const desc = feat.f_description !== undefined ? feat.f_description : '';
					const row = document.createElement('div');
					row.className = "edit-feature-row group flex flex-col lg:flex-row gap-2 p-3 border border-neutral-200 rounded-small bg-neutral-50 hover:border-primary-300 transition-all";
					row.innerHTML = `
						<input type="text" name="feature[]" value="${feature.replace(/"/g, '&quot;')}"
							class="flex-1 rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2 px-3 border"
							placeholder="Feature Title">
						<textarea name="f_description[]" rows="2"
							class="flex-1 rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2 px-3 border resize-vertical"
							placeholder="Feature Description">${desc.replace(/</g,'&lt;').replace(/>/g,'&gt;')}</textarea>
						<button type="button" class="remove-feature-btn p-2 text-red-500 hover:bg-red-50 rounded-small shrink-0 self-start lg:self-auto group-hover:text-red-600 transition-colors"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
					`;
					featuresContainer.appendChild(row);
				});
			} else {
				// At least one empty row
				const row = document.createElement('div');
				row.className = "edit-feature-row group flex flex-col lg:flex-row gap-2 p-3 border border-neutral-200 rounded-small bg-neutral-50 hover:border-primary-300 transition-all";
				row.innerHTML = `
					<input type="text" name="feature[]" class="flex-1 rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2 px-3 border" placeholder="Feature Title">
					<textarea name="f_description[]" rows="2" class="flex-1 rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm py-2 px-3 border resize-vertical" placeholder="Feature Description"></textarea>
					<button type="button" class="remove-feature-btn p-2 text-red-500 hover:bg-red-50 rounded-small shrink-0 self-start lg:self-auto group-hover:text-red-600 transition-colors"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
				`;
				featuresContainer.appendChild(row);
			}
			// Re-init Lucide icons after DOM update
			if (window.lucide) lucide.createIcons();
		}

		function closeEditProductModal() {
			document.getElementById('editProductModal').classList.add('hidden');
		}
		// handleEditFileInput & removeEditPreview are setup above in the uploaded <script>
	</script>

	<script>
		// Initialize Lucide Icons
		lucide.createIcons();

		// Mobile Menu Toggle
		const mobileMenuBtn = document.getElementById('mobile-menu-btn');
		const sidebar = document.getElementById('sidebar');

		if (mobileMenuBtn && sidebar) {
			mobileMenuBtn.addEventListener('click', () => {
				sidebar.classList.toggle('hidden');
				sidebar.classList.toggle('fixed');
				sidebar.classList.toggle('inset-0');
				sidebar.classList.toggle('z-50');
				sidebar.classList.toggle('w-full');
			});
		}

	</script>

	<script>
		function submitProduct() {
			if (!validateForm()) {
				alert('Please fill in all required fields');
				return;
			}

			// Submit the form to the server
			document.getElementById('productForm').submit();
		}

	</script>

	<script>
		$(document).on('click', '.delproduct', function () {
		const id = $(this).data('id');

		if (!confirm('Are you sure you want to delete this product?')) return;

		$.ajax({
			url: "<?php echo base_url('Products/delete'); ?>",
			type: "POST",
			data: { id: id },
			dataType: "json",
			success: function (res) {
				if (res.status === 'success') {
					alert('Deleted successfully');
					
					// remove row instantly (🔥 smooth UX)
					$('.delproduct[data-id="' + id + '"]').closest('tr').remove();
				} else {
					alert(res.message || 'Delete failed');
				}
			},
			error: function () {
				alert('Server error. Try again.');
			}
		});
	});
	</script>
</body>

</html>
