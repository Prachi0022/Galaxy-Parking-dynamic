<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galaxy Parking - Case Study Management</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="https://unpkg.com/lucide@latest"></script>
	<!-- Quill Rich Text Editor CDN -->
	<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
	<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
	<!-- Google Fonts -->
	<link id="heading-font-link"
		href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link id="body-font-link"
		href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						primary: {
							50: '#fff8f5',
							100: '#ffefe8',
							200: '#ffdcd1',
							300: '#ffc0ad',
							400: '#ff9670',
							500: '#f94d00',
							600: '#d93d00',
							700: '#b33000',
							800: '#8f2600',
							900: '#702000',
						},
						secondary: {
							50: '#f7f7f7',
							100: '#e3e3e3',
							200: '#c8c8c8',
							300: '#a4a4a4',
							400: '#818181',
							500: '#666666',
							600: '#515151',
							700: '#434343',
							800: '#383838',
							900: '#000000',
						},
						background: {
							50: '#ffffff',
							100: '#f5f5f5',
							200: '#ebebeb',
							300: '#e0e0e0',
							400: '#d6d6d6',
							500: '#cccccc',
							600: '#bfbfbf',
							700: '#b3b3b3',
							800: '#a6a6a6',
							900: '#999999',
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
			--font-heading-name: 'Poppins';
			--font-body-name: 'Poppins';
			--font-heading: 'Poppins', sans-serif;
			--font-body: 'Poppins', sans-serif;
			--letter-spacing-heading: -0.02em;
			--letter-spacing-body: 0px;
			--space-base: 1rem;
			--radius-small: 6px;
			--radius-large: 12px;
			--border-width: 1px;
			--shadow-color: 0 0 0;
			--shadow-offset-x: 0px;
			--shadow-offset-y: 4px;
			--shadow-blur: 12px;
			--shadow-spread: -2px;
			--shadow-opacity: 0.08;
			--shadow-custom: 0px 4px 12px -2px rgba(0, 0, 0, 0.08);
			--shadow-custom-hover: 0px 8px 24px -4px rgba(0, 0, 0, 0.12);
		}
		::-webkit-scrollbar { width: 8px; height: 8px; }
		::-webkit-scrollbar-track { background: #f1f1f1; }
		::-webkit-scrollbar-thumb { background: #ccc; border-radius: 4px; }
		::-webkit-scrollbar-thumb:hover { background: #999; }
		.sidebar-link.active {
			background-color: rgba(249, 77, 0, 0.1); color: #f94d00; border-right: 3px solid #f94d00;
		}
		.toggle-checkbox:checked { right: 0; border-color: #f94d00; }
		.toggle-checkbox:checked+.toggle-label { background-color: #f94d00;}
		.modal-enter { opacity: 0; transform: scale(0.95);}
		.modal-enter-active { opacity:1;transform:scale(1);transition: opacity 300ms ease-out, transform 300ms ease-out;}
		.modal-exit { opacity:1;transform:scale(1);}
		.modal-exit-active {opacity:0;transform:scale(0.95);transition:opacity 200ms ease-in,transform 200ms ease-in;}
	</style>
</head>
<body class="font-body bg-background-100 text-neutral-800 h-full min-h-screen flex overflow-hidden">
	<?php $this->load->view('Admin/component/sidebar'); ?>
	<main class="flex-1 flex flex-col h-screen overflow-hidden bg-background-100 relative">
		<header class="bg-white border-b border-neutral-200 px-4 lg:px-8 py-4 flex items-center justify-between gap-4 flex-shrink-0">
			<div>
				<h1 class="font-heading text-2xl font-bold text-neutral-900"
					style="letter-spacing: var(--letter-spacing-heading);">Case Study Management</h1>
				<p class="text-xs text-neutral-400 mt-0.5">Manage and organize your infrastructure project portfolio.</p>
			</div>
			<div class="flex items-center gap-2 lg:gap-3">
				<button id="open-modal-btn" type="button"
					class="px-4 py-2 bg-primary-500 text-white rounded-small text-sm font-medium hover:bg-primary-600 transition-colors shadow-md flex items-center gap-2">
					<i data-lucide="plus" class="w-4 h-4"></i> Add Case Study
				</button>
			</div>
		</header>
		<div class="flex-1 overflow-y-auto p-6 lg:p-8">
			<div class="bg-white rounded-large shadow-custom border border-neutral-100 overflow-hidden mb-8">
				<div class="px-6 py-4 border-b border-neutral-100 flex items-center justify-between bg-neutral-50/50">
					<h3 class="font-heading font-semibold text-neutral-800">Recent Case Studies</h3>
					<div class="flex items-center gap-2">
						<span class="text-xs text-neutral-500">Showing 1-5 of 124</span>
						<div class="flex gap-1">
							<button class="p-1 text-neutral-400 hover:text-neutral-600" aria-label="Previous page"><i
									data-lucide="chevron-left" class="w-4 h-4"></i></button>
							<button class="p-1 text-neutral-400 hover:text-neutral-600" aria-label="Next page"><i
									data-lucide="chevron-right" class="w-4 h-4"></i></button>
						</div>
					</div>
				</div>
				<div class="overflow-x-auto">
					<!-- Career-like Table Structure for Case Study -->
					<table class="min-w-full divide-y divide-neutral-200">
						<thead class="bg-neutral-50 text-neutral-600 text-xs uppercase">
							<tr>
								<th class="px-6 py-3 text-left font-semibold">#</th>
								<th class="px-6 py-3 text-left font-semibold">Image</th>
								<th class="px-6 py-3 text-left font-semibold">Title</th>
								<th class="px-6 py-3 text-left font-semibold">Client Name</th>
								<th class="px-6 py-3 text-left font-semibold">Location</th>
								<th class="px-6 py-3 text-left font-semibold">Park System</th>
								<th class="px-6 py-3 text-left font-semibold">Capacity</th>
								<th class="px-6 py-3 text-left font-semibold">Completion</th>
								<th class="px-6 py-3 text-left font-semibold">Actions</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-neutral-100">
							<?php if (isset($casestudy) && is_array($casestudy) && count($casestudy) > 0): ?>
								<?php $i = 1; foreach ($casestudy as $case): ?>
									<tr class="hover:bg-neutral-50 transition-colors">
										<td class="px-6 py-4"><?= $i++; ?></td>
										<td class="px-6 py-4">
											<?php if(!empty($case['case_img'])): ?>
												<img src="<?= base_url('upload/casestudy/' . $case['case_img']) ?>"
													 alt="Project"
													 class="w-12 h-12 object-cover rounded border border-neutral-200 shadow-sm"/>
											<?php else: ?>
												<span class="text-neutral-400 italic">No image</span>
											<?php endif; ?>
										</td>
										<td class="px-6 py-4 font-medium text-neutral-900"><?= htmlentities($case['title']) ?></td>
										<td class="px-6 py-4"><?= htmlentities($case['c_name']) ?></td>
										<td class="px-6 py-4"><?= htmlentities($case['location']) ?></td>
										<td class="px-6 py-4"><?= htmlentities($case['park_system']) ?></td>
										<td class="px-6 py-4"><?= htmlentities($case['t_cap']) ?></td>
										<td class="px-6 py-4"><?= htmlentities($case['completion']) ?></td>
										<td class="px-6 py-4">
											<div class="flex items-center gap-2">
												<button
													class="p-1.5 text-neutral-400 hover:text-blue-600 hover:bg-blue-50 rounded transition-colors editCaseBtn"
													title="Edit" type="button" data-id="<?= htmlentities($case['id']) ?>">
													<i data-lucide="edit-2" class="w-4 h-4"></i>
												</button>
												<button
													class="p-1.5 text-neutral-400 hover:text-red-600 hover:bg-red-50 rounded transition-colors deleteCaseBtn"
													title="Delete" type="button" data-id="<?= htmlentities($case['id']) ?>">
													<i data-lucide="trash-2" class="w-4 h-4"></i>
												</button>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php else: ?>
								<tr>
									<td colspan="9" class="px-6 py-4 text-center text-neutral-400">No case studies found.</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>

	<!-- MODAL: Add/Edit Case Study -->
	<div id="case-study-modal" class="relative z-50 hidden" aria-labelledby="modal-title" role="dialog"
		aria-modal="true">
		<div class="fixed inset-0 bg-neutral-900/75 transition-opacity backdrop-blur-sm"></div>
		<div class="fixed inset-0 z-10 overflow-y-auto">
			<div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
				<div class="relative transform overflow-hidden rounded-large bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-4xl">
					<div class="px-6 py-4 border-b border-neutral-100 bg-neutral-50/50 flex items-center justify-between">
						<h3 class="font-heading font-semibold text-neutral-800 flex items-center gap-2 text-lg">
							<i data-lucide="plus-circle" class="w-5 h-5 text-primary-500"></i>
							<span id="modal-title-text">Add New Case Study</span>
						</h3>
						<button id="close-modal-x"
							class="text-neutral-400 hover:text-neutral-600 transition-colors rounded-full p-1 hover:bg-neutral-100"
							type="button" aria-label="Close modal">
							<i data-lucide="x" class="w-6 h-6"></i>
						</button>
					</div>
					<div class="p-6 lg:p-8 max-h-[75vh] overflow-y-auto">
						<form action="<?php echo base_url();?>Casestudy/casestudy" method="post"
							enctype="multipart/form-data" autocomplete="off" id="case-study-form" class="space-y-8">
							<input type="hidden" name="cid" id="cid" value="">
							<div>
								<h4 class="text-sm font-semibold text-neutral-900 uppercase tracking-wide mb-4 border-b border-neutral-100 pb-2">
									Basic Information</h4>
								<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
									<div class="lg:col-span-1">
										<label class="block text-sm font-medium text-neutral-700 mb-2"
											for="projectImageInput">Project Image</label>
										<div
											class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-neutral-300 border-dashed rounded-large hover:border-primary-400 hover:bg-primary-50/30 transition-colors cursor-pointer group relative">
											<input type="file" id="projectImageInput" name="case_img"
												accept="image/png, image/jpeg, image/jpg, image/gif"
												class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
												style="z-index:2;" />
											<div class="space-y-1 text-center pointer-events-none">
												<div
													class="mx-auto h-12 w-12 text-neutral-400 group-hover:text-primary-500 transition-colors">
													<i data-lucide="image-plus" class="w-full h-full"></i>
												</div>
												<div class="flex text-sm text-neutral-600 justify-center">
													<span
														class="relative rounded-md font-medium text-primary-600 group-hover:text-primary-500">
														Upload a file
													</span>
												</div>
												<p class="pl-1 pointer-events-none">or drag and drop</p>
												<p class="text-xs text-neutral-500 pointer-events-none">PNG, JPG, GIF up
													to 10MB</p>
											</div>
										</div>
										<div id="projectImagePreviewContainer"
											class="w-full flex flex-col items-center mt-3" style="display: none;">
											<div class="relative">
												<img id="projectImagePreview" src="" alt="Preview"
													class="w-32 h-32 object-cover rounded-lg border border-neutral-200" />
												<button type="button" id="removeProjectImagePreview"
													class="absolute -top-2 -right-2 bg-white border border-neutral-300 rounded-full p-1 shadow hover:bg-neutral-100"
													aria-label="Remove image">
													<i data-lucide="x" class="w-4 h-4 text-neutral-400"></i>
												</button>
											</div>
										</div>
									</div>
									<script>
										document.addEventListener('DOMContentLoaded', function () {
											const input = document.getElementById('projectImageInput');
											const previewContainer = document.getElementById('projectImagePreviewContainer');
											const previewImage = document.getElementById('projectImagePreview');
											const removeBtn = document.getElementById('removeProjectImagePreview');
											if (input) {
												input.addEventListener('change', function () {
													const file = this.files[0];
													if (file) {
														const reader = new FileReader();
														reader.onload = function (e) {
															previewImage.src = e.target.result;
															previewContainer.style.display = 'flex';
														};
														reader.readAsDataURL(file);
													} else {
														previewContainer.style.display = 'none';
														previewImage.src = '';
													}
												});
											}
											if (removeBtn) {
												removeBtn.addEventListener('click', function (e) {
													e.preventDefault();
													input.value = '';
													previewImage.src = '';
													previewContainer.style.display = 'none';
												});
											}
										});
									</script>
									<div class="lg:col-span-2 space-y-6">
										<div>
											<label for="title"
												class="block text-sm font-medium text-neutral-700 mb-1">Case Study
												Title</label>
											<input type="text" id="title" name="title"
												class="block w-full rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm p-2.5 border"
												placeholder="e.g. Downtown Automated Parking Complex" required
												maxlength="150">
										</div>
										<div>
											<label for="desc-main"
												class="block text-sm font-medium text-neutral-700 mb-1">Description</label>
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
												<textarea name="description" id="desc-main"
													style="display: none;"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<h4 class="text-sm font-semibold text-neutral-900 uppercase tracking-wide mb-4 border-b border-neutral-100 pb-2">
									Project Details</h4>
								<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
									<div>
										<label for="client"
											class="block text-sm font-medium text-neutral-700 mb-1">Client Name</label>
										<input type="text" id="client" name="c_name"
											class="block w-full rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm p-2.5 border"
											placeholder="Client Company Name" maxlength="100">
									</div>
									<div>
										<label for="location"
											class="block text-sm font-medium text-neutral-700 mb-1">Location</label>
										<div class="relative rounded-md shadow-sm">
											<div
												class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
												<i data-lucide="map-pin" class="w-4 h-4 text-neutral-400"></i>
											</div>
											<input type="text" id="location" name="location"
												class="block w-full pl-10 rounded-small border-neutral-300 focus:border-primary-500 focus:ring-primary-500 sm:text-sm p-2.5 border"
												placeholder="City, State" maxlength="100">
										</div>
									</div>
									<div>
										<label for="system"
											class="block text-sm font-medium text-neutral-700 mb-1">Parking
											System</label>
										<input type="text" id="system" name="park_system"
											class="block w-full pl-10 rounded-small border-neutral-300 focus:border-primary-500 focus:ring-primary-500 sm:text-sm p-2.5 border"
											placeholder="Tower, Stack" maxlength="80">
									</div>
									<div>
										<label for="capacity"
											class="block text-sm font-medium text-neutral-700 mb-1">Total
											Capacity</label>
										<input type="number" id="capacity" name="t_cap" min="0"
											class="block w-full rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm p-2.5 border"
											placeholder="Number of cars">
									</div>
									<div>
										<label for="date"
											class="block text-sm font-medium text-neutral-700 mb-1">Completion
											Date</label>
										<input type="date" id="date" name="completion"
											class="block w-full rounded-small border-neutral-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 sm:text-sm p-2.5 border">
									</div>
								</div>
							</div>
							<div
								class="px-6 py-4 border-t border-neutral-100  flex items-center justify-end gap-3 rounded-b-large">
								<button id="close-modal-btn" type="button"
									class="px-5 py-2.5 bg-white border border-neutral-300 text-neutral-700 rounded-small text-sm font-medium hover:bg-neutral-50 transition-colors shadow-sm">
									Cancel
								</button>
								<button id="save-case-study-btn" type="submit"
									class="px-5 py-2.5 bg-primary-500 text-white rounded-small text-sm font-medium hover:bg-primary-600 transition-colors shadow-md flex items-center gap-2">
									<i data-lucide="save" class="w-4 h-4"></i> Save Case Study
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function toggleModal(show = null) {
			const modal = document.getElementById('case-study-modal');
			if (!modal) return;
			const isHidden = modal.classList.contains('hidden');
			const willShow = (show !== null) ? !!show : isHidden;
			if (willShow) {
				modal.classList.remove('hidden');
				document.body.style.overflow = 'hidden';
				if (window._quillEditorMain) {
					setTimeout(() => {
						window._quillEditorMain.enable(true);
						window._quillEditorMain.focus();
					}, 200);
				}
			} else {
				modal.classList.add('hidden');
				document.body.style.overflow = '';
				document.getElementById('case-study-form').reset();
				if (window._quillEditorMain) {
					window._quillEditorMain.setContents([]);
				}
				const preview = document.getElementById('projectImagePreviewContainer');
				const img = document.getElementById('projectImagePreview');
				if (preview && img) {
					preview.style.display = 'none';
					img.src = '';
				}
				document.getElementById('cid').value = '';
				document.getElementById('modal-title-text').innerText = 'Add New Case Study';
			}
		}
		// Use delegated event listeners for opener & closer (handles multiple close elements)
		document.addEventListener('DOMContentLoaded', function () {
			if(window.lucide&&lucide.createIcons) lucide.createIcons();
			document.getElementById('open-modal-btn')?.addEventListener('click', function(){
				document.getElementById('modal-title-text').innerText = 'Add New Case Study';
				toggleModal(true);
			});
			document.getElementById('close-modal-btn')?.addEventListener('click', () => toggleModal(false));
			document.getElementById('close-modal-x')?.addEventListener('click', () => toggleModal(false));
			const modal = document.getElementById('case-study-modal');
			modal?.querySelector('.fixed.inset-0.bg-neutral-900\\/75')
			?.addEventListener('click', () => toggleModal(false));
		});
		document.addEventListener('DOMContentLoaded', function () {
			var quillToolbarOptions = [
				[{ 'header': [1,2,false]}],
				['bold','italic','underline','link'],
				[{ 'list': 'ordered'}, { 'list':'bullet'}]
			];
			var quillDescMain = new Quill('#blogDescriptionEditorMain', {
				modules:{ toolbar: quillToolbarOptions },
				theme:'snow',
				placeholder:'Describe the project, its goals, process and highlights...'
			});
			window._quillEditorMain = quillDescMain;
			var form = document.getElementById('case-study-form');
			if(form){
				form.addEventListener('submit', function(e){
					document.getElementById('desc-main').value = quillDescMain.root.innerHTML.trim();
				});
			}
		});
	</script>
	<script>
	document.addEventListener('DOMContentLoaded', function() {
	  document.addEventListener('click', function(e) {
		if (e.target.closest('.editCaseBtn')) {
		  const btn = e.target.closest('.editCaseBtn');
		  const id = btn.dataset.id;
		  fetch('<?= base_url("Casestudy/get_casestudy") ?>', {
			method: 'POST',
			headers: {'Content-Type':'application/x-www-form-urlencoded'},
			body: 'id=' + encodeURIComponent(id)
		  })
		  .then(r => r.json())
		  .then(data => {
			if (data) {
			  // Set modal fields
			  document.getElementById('cid').value = data.id;
			  document.getElementById('title').value = data.title || '';
			  document.getElementById('client').value = data.c_name || '';
			  document.getElementById('location').value = data.location || '';
			  document.getElementById('system').value = data.park_system || '';
			  document.getElementById('capacity').value = data.t_cap || '';
			  document.getElementById('date').value = data.completion || '';
			  // Set Image preview if any
			  const img = document.getElementById('projectImagePreview');
			  const container = document.getElementById('projectImagePreviewContainer');
			  if(data.case_img){
				img.src = `<?= base_url('upload/casestudy/') ?>${data.case_img}`;
				container.style.display = 'flex';
			  }else{
				container.style.display = 'none';
				img.src = '';
			  }
			  // Set Quill content
			  const quill = window._quillEditorMain;
			  if(quill) { 
				quill.root.innerHTML = data.description || '';
			  }
			  document.getElementById('desc-main').value = data.description || '';
			  document.getElementById('modal-title-text').innerText = 'Edit Case Study';
			  toggleModal(true);
			}
		  });
		}
		if (e.target.closest('.deleteCaseBtn')) {
		  const btn = e.target.closest('.deleteCaseBtn');
		  const id = btn.dataset.id;
		  if(confirm('Delete this case study? Irreversible.')) {
			fetch('<?= base_url("Casestudy/delete") ?>', {
			  method: 'POST',
			  headers: {'Content-Type':'application/x-www-form-urlencoded'},
			  body: 'id=' + encodeURIComponent(id)
			})
			.then(r => r.json())
			.then(data => {
			  if(data.success) location.reload();
			});
		  }
		}
	  });
	  document.getElementById('case-study-form').addEventListener('submit', function() {
		const quill = window._quillEditorMain;
		if (quill) document.getElementById('desc-main').value = quill.root.innerHTML;
	  });
	});
	</script>
</body>
</html>
