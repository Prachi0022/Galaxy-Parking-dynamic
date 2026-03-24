 <!-- Sidebar -->
    <aside class="w-64 bg-neutral-900 text-white hidden md:flex flex-col flex-shrink-0 transition-all duration-300 z-20">
        <div class="h-16 flex items-center px-6 border-b border-neutral-800">
            <div class="flex items-center gap-2">
                 <img src="<?php echo base_url()?>assets/img/logo/wlogo.png" alt="Logo" class="h-10 w-auto" />
            </div>
        </div>
        <?php $segment = $this->uri->segment(1); ?>
        <nav class="flex-1 overflow-y-auto py-6 px-3 space-y-1">
            <p class="px-3 text-xs font-semibold text-neutral-500 uppercase tracking-wider mb-2">Main</p>
            
            <a href="<?php echo base_url()?>admin" class="flex items-center <?= ($segment == 'admin' || $segment == '') ? 'active bg-primary-500/10 text-primary-500' : '' ?> gap-3 px-3 py-2.5 text-neutral-400 hover:text-white hover:bg-neutral-800 rounded-small group transition-colors">
                <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                <span class="font-medium">Dashboard</span>
            </a>

            <a href="<?php echo base_url()?>general-setting" class="flex items-center <?= ($segment == 'general-setting' || $segment == '') ? 'active bg-primary-500/10 text-primary-500' : '' ?> gap-3 px-3 py-2.5 text-neutral-400 hover:text-white hover:bg-neutral-800 rounded-small group transition-colors">
                <i data-lucide="settings" class="w-5 h-5 group-hover:text-primary-500 transition-colors"></i>
                <span class="font-medium">General Settings</span>
            </a>

            <p class="px-3 text-xs font-semibold text-neutral-500 uppercase tracking-wider mt-6 mb-2">Management</p>

            <a href="<?php echo base_url()?>manage-product" class="flex items-center <?= ($segment == 'manage-product' || $segment == '') ? 'active bg-primary-500/10 text-primary-500' : '' ?> gap-3 px-3 py-2.5 text-neutral-400 hover:text-white hover:bg-neutral-800 rounded-small group transition-colors">
                <i data-lucide="package" class="w-5 h-5 group-hover:text-primary-500 transition-colors"></i>
                <span class="font-medium">Product Management</span>
            </a>

            <a href="<?php echo base_url()?>manage-gallery" class="flex items-center <?= ($segment == 'manage-gallery' || $segment == '') ? 'active bg-primary-500/10 text-primary-500' : '' ?> gap-3 px-3 py-2.5 text-neutral-400 hover:text-white hover:bg-neutral-800 rounded-small group transition-colors">
                <i data-lucide="image" class="w-5 h-5 group-hover:text-primary-500 transition-colors"></i>
                <span class="font-medium">Gallery Management</span>
            </a>

            <a href="<?php echo base_url()?>manage-blog" class="flex items-center <?= ($segment == 'manage-blog' || $segment == '') ? 'active bg-primary-500/10 text-primary-500' : '' ?> gap-3 px-3 py-2.5 text-neutral-400 hover:text-white hover:bg-neutral-800 rounded-small group transition-colors">
                <i data-lucide="file-text" class="w-5 h-5 group-hover:text-primary-500 transition-colors"></i>
                <span class="font-medium">Blog Management</span>
            </a>

            <a href="<?php echo base_url()?>manage-casestudy" class="flex items-center <?= ($segment == 'manage-casestudy' || $segment == '') ? 'active bg-primary-500/10 text-primary-500' : '' ?> gap-3 px-3 py-2.5 text-neutral-400 hover:text-white hover:bg-neutral-800 rounded-small group transition-colors">
                <i data-lucide="briefcase" class="w-5 h-5 group-hover:text-primary-500 transition-colors"></i>
                <span class="font-medium">Case Study Management</span>
            </a>

            <a href="<?php echo base_url()?>manage-career" class="flex items-center <?= ($segment == 'manage-career' || $segment == '') ? 'active bg-primary-500/10 text-primary-500' : '' ?> gap-3 px-3 py-2.5 text-neutral-400 hover:text-white hover:bg-neutral-800 rounded-small group transition-colors">
                <i data-lucide="users" class="w-5 h-5 group-hover:text-primary-500 transition-colors"></i>
                <span class="font-medium">Career Management</span>
            </a>

        </nav>

        <div class="p-4 border-t border-neutral-800">
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-neutral-400 hover:text-white hover:bg-neutral-800 rounded-small group transition-colors">
                <i data-lucide="log-out" class="w-5 h-5 group-hover:text-red-500 transition-colors"></i>
                <span class="font-medium">Logout</span>
            </a>
        </div>
    </aside>