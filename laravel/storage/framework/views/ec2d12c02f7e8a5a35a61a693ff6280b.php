<section>
<div class="fixed top-0 left-0 z-10 h-screen overflow-y-auto bg-white w-72">
    <div class="flex items-center space-x-2 px-6 h-[105px]">
        <img 
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Lambang_Kabupaten_Siak.png/800px-Lambang_Kabupaten_Siak.png" 
            alt="logo full"
            class="w-10"
        >
        <h1 class="text-xl font-bold">Istana Data</h1>
    </div>
    <div class="px-2 mt-5 space-y-10 pb-14">
        <div class="space-y-3.5">
            <h6 class="pl-3.5 text-xs font-bold tracking-wider text-black uppercase">
                menu utama
            </h6>
            <div class="space-y-3">
                
                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Super Admin')): ?>
                    <a 
                        href="<?php echo e(route('bidangurusan.index')); ?>"
                        class="flex space-x-2 group"
                    >
                        <div class="w-1.5 h-6 rounded-md shrink-0 <?php echo e(request()->routeIs('app.profile.index') || Str::startsWith(request()->segment(3), 'app.profile') ? 'bg-brand' : 'bg-transparent'); ?> group-hover:bg-brand transition"></div>
                        <div class="flex w-full pr-6 space-x-3">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                class="w-6 h-6 shrink-0 <?php echo e(request()->routeIs('app.profile.index') || Str::startsWith(request()->segment(3), 'app.profile') ? 'text-brand' : 'text-black'); ?> group-hover:text-brand transition" 
                                viewBox="0 0 24 24" 
                                stroke-width="2" 
                                stroke="currentColor" 
                                fill="none" 
                                stroke-linecap="round" 
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M3 21h18"></path>
                                <path d="M19 21v-4"></path>
                                <path d="M19 17a2 2 0 0 0 2 -2v-2a2 2 0 1 0 -4 0v2a2 2 0 0 0 2 2z"></path>
                                <path d="M14 21v-14a3 3 0 0 0 -3 -3h-4a3 3 0 0 0 -3 3v14"></path>
                                <path d="M9 17v4"></path>
                                <path d="M8 13h2"></path>
                                <path d="M8 9h2"></path>
                            </svg>
                            <span class="capitalize <?php echo e(request()->routeIs('app.profile.index') || Str::startsWith(request()->segment(3), 'app.profile') ? 'text-brand' : 'text-black'); ?> text-lg truncate group-hover:text-brand transition">
                                Bidang
                            </span>
                        </div>
                    </a>
                    <a 
                        href="<?php echo e(route('app.opd.index')); ?>"
                        class="flex space-x-2 group"
                    >
                        <div class="w-1.5 h-6 rounded-md shrink-0 <?php echo e(request()->routeIs('app.employee.index') || Str::startsWith(request()->segment(3), 'app.employee') ? 'bg-brand' : 'bg-transparent'); ?> group-hover:bg-brand transition"></div>
                        <div class="flex w-full pr-6 space-x-3">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                class="w-6 h-6 shrink-0 <?php echo e(request()->routeIs('app.employee.index') || Str::startsWith(request()->segment(3), 'app.employee') ? 'text-brand' : 'text-black'); ?> group-hover:text-brand transition" 
                                viewBox="0 0 24 24" 
                                stroke-width="2" 
                                stroke="currentColor" 
                                fill="none" 
                                stroke-linecap="round" 
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
                                <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
                                <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
                            </svg>
                            <span class="capitalize <?php echo e(request()->routeIs('app.employee.index') || Str::startsWith(request()->segment(3), 'app.employee') ? 'text-brand' : 'text-black'); ?> text-lg truncate group-hover:text-brand transition">
                                Opd
                            </span>
                        </div>
                    </a>
                    <a 
                        href="<?php echo e(route('app.kegiatan.index')); ?>"
                        class="flex space-x-2 group"
                    >
                        <div class="w-1.5 h-6 rounded-md shrink-0 <?php echo e(request()->routeIs('app.news.index') || Str::startsWith(request()->segment(3), 'app.news') ? 'bg-brand' : 'bg-transparent'); ?> group-hover:bg-brand transition"></div>
                        <div class="flex w-full pr-6 space-x-3">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                class="w-6 h-6 shrink-0 <?php echo e(request()->routeIs('app.news.index') || Str::startsWith(request()->segment(3), 'app.news') ? 'text-brand' : 'text-black'); ?> group-hover:text-brand transition" 
                                viewBox="0 0 24 24" 
                                stroke-width="2" 
                                stroke="currentColor" 
                                fill="none" 
                                stroke-linecap="round" 
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11"></path>
                                <path d="M8 8l4 0"></path>
                                <path d="M8 12l4 0"></path>
                                <path d="M8 16l4 0"></path>
                            </svg>
                            <span class="capitalize <?php echo e(request()->routeIs('app.news.index') || Str::startsWith(request()->segment(3), 'app.news') ? 'text-brand' : 'text-black'); ?> text-lg truncate group-hover:text-brand transition">
                                Kegiatan
                            </span>
                        </div>
                    </a>
                    <a 
                        href="<?php echo e(route('app.satuan.index')); ?>"
                        class="flex space-x-2 group"
                    >
                        <div class="w-1.5 h-6 rounded-md shrink-0 <?php echo e(request()->routeIs('app.imageGallery.index') || Str::startsWith(request()->segment(3), 'app.image-gallery') ? 'bg-brand' : 'bg-transparent'); ?> group-hover:bg-brand transition"></div>
                        <div class="flex w-full pr-6 space-x-3">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                class="w-6 h-6 shrink-0 <?php echo e(request()->routeIs('app.imageGallery.index') || Str::startsWith(request()->segment(3), 'app.image-gallery') ? 'text-brand' : 'text-black'); ?> group-hover:text-brand transition" 
                                viewBox="0 0 24 24" 
                                stroke-width="2" 
                                stroke="currentColor" 
                                fill="none" 
                                stroke-linecap="round" 
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M15 8h.01"></path>
                                <path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z"></path>
                                <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5"></path>
                                <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3"></path>
                            </svg>
                            <span class="capitalize <?php echo e(request()->routeIs('app.imageGallery.index') || Str::startsWith(request()->segment(3), 'app.image-gallery') ? 'text-brand' : 'text-black'); ?> text-lg truncate group-hover:text-brand transition">
                                Satuan
                            </span>
                        </div>
                    </a>
                    <a 
                        href="<?php echo e(route('dokumen')); ?>"
                        class="flex space-x-2 group"
                    >
                        <div class="w-1.5 h-6 rounded-md shrink-0 <?php echo e(request()->routeIs('app.videoGallery.index') || Str::startsWith(request()->segment(3), 'app.video-gallery') ? 'bg-brand' : 'bg-transparent'); ?> group-hover:bg-brand transition"></div>
                        <div class="flex w-full pr-6 space-x-3">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                class="w-6 h-6 shrink-0 <?php echo e(request()->routeIs('app.videoGallery.index') || Str::startsWith(request()->segment(3), 'app.video-gallery') ? 'text-brand' : 'text-black'); ?> group-hover:text-brand transition" 
                                viewBox="0 0 24 24" 
                                stroke-width="2" 
                                stroke="currentColor" 
                                fill="none" 
                                stroke-linecap="round" 
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z"></path>
                                <path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z"></path>
                            </svg>
                            <span class="capitalize <?php echo e(request()->routeIs('app.videoGallery.index') || Str::startsWith(request()->segment(3), 'app.video-gallery') ? 'text-brand' : 'text-black'); ?> text-lg truncate group-hover:text-brand transition">
                                Dokumen
                            </span>
                        </div>
                    </a>
                <?php endif; ?>

                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Opd')): ?>
                <a 
                    href="<?php echo e(route('dokumen')); ?>"
                    class="flex space-x-2 group"
                >
                    <div class="w-1.5 h-6 rounded-md shrink-0 <?php echo e(request()->routeIs('app.complaint.index') || Str::startsWith(request()->segment(3), 'app.complaint') ? 'bg-brand' : 'bg-transparent'); ?> group-hover:bg-brand transition"></div>
                    <div class="flex w-full pr-6 space-x-3">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            class="w-6 h-6 shrink-0 <?php echo e(request()->routeIs('app.complaint.index') || Str::startsWith(request()->segment(3), 'app.complaint') ? 'text-brand' : 'text-black'); ?> group-hover:text-brand transition" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            stroke="currentColor" 
                            fill="none" 
                            stroke-linecap="round" 
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M17 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                            <path d="M17 13v4h4"></path>
                            <path d="M12 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M11.5 21h-6.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v2m0 3v4"></path>
                        </svg>
                        <span class="capitalize <?php echo e(request()->routeIs('app.complaint.index') || Str::startsWith(request()->segment(3), 'app.complaint') ? 'text-brand' : 'text-black'); ?> text-lg truncate group-hover:text-brand transition">
                            Upload Dokumen
                        </span>
                    </div>
                </a>
                <a 
                    href="<?php echo e(route('gambar')); ?>"
                    class="flex space-x-2 group"
                >
                    <div class="w-1.5 h-6 rounded-md shrink-0 <?php echo e(request()->routeIs('app.aspiration.index') || Str::startsWith(request()->segment(3), 'app.aspiration') ? 'bg-brand' : 'bg-transparent'); ?> group-hover:bg-brand transition"></div>
                    <div class="flex w-full pr-6 space-x-3">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            class="w-6 h-6 shrink-0 <?php echo e(request()->routeIs('app.aspiration.index') || Str::startsWith(request()->segment(3), 'app.aspiration') ? 'text-brand' : 'text-black'); ?> group-hover:text-brand transition" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            stroke="currentColor" 
                            fill="none" 
                            stroke-linecap="round" 
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                            <path d="M9 7l6 0"></path>
                            <path d="M9 11l6 0"></path>
                            <path d="M9 15l4 0"></path>
                        </svg>
                        <span class="capitalize <?php echo e(request()->routeIs('app.aspiration.index') || Str::startsWith(request()->segment(3), 'app.aspiration') ? 'text-brand' : 'text-black'); ?> text-lg truncate group-hover:text-brand transition">
                            Upload Gambar
                        </span>
                    </div>
                </a>
                <?php endif; ?>

                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Wali Data')): ?>
                <a 
                    
                    class="flex space-x-2 group"
                >
                    <div class="w-1.5 h-6 rounded-md shrink-0 <?php echo e(request()->routeIs('app.message.index') || Str::startsWith(request()->segment(3), 'app.message') ? 'bg-brand' : 'bg-transparent'); ?> group-hover:bg-brand transition"></div>
                    <div class="flex w-full pr-6 space-x-3">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            class="w-6 h-6 shrink-0 <?php echo e(request()->routeIs('app.message.index') || Str::startsWith(request()->segment(3), 'app.message') ? 'text-brand' : 'text-black'); ?> group-hover:text-brand transition" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            stroke="currentColor" 
                            fill="none" 
                            stroke-linecap="round" 
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8 9h8"></path>
                            <path d="M8 13h6"></path>
                            <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path>
                        </svg>
                        <span class="capitalize <?php echo e(request()->routeIs('app.message.index') || Str::startsWith(request()->segment(3), 'app.message') ? 'text-brand' : 'text-black'); ?> text-lg truncate group-hover:text-brand transition">
                            pesan
                        </span>
                    </div>
                </a>
                <?php endif; ?>
                <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'admin')): ?>
                    <a 
                        
                        class="flex space-x-2 group"
                    >
                        <div class="w-1.5 h-6 rounded-md shrink-0 <?php echo e(request()->routeIs('app.user.index') || Str::startsWith(request()->segment(3), 'app.user')  ? 'bg-brand' : 'bg-transparent'); ?> group-hover:bg-brand transition"></div>
                        <div class="flex w-full pr-6 space-x-3">
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                class="w-6 h-6 shrink-0 <?php echo e(request()->routeIs('app.user.index') || Str::startsWith(request()->segment(3), 'app.user') ? 'text-brand' : 'text-black'); ?> group-hover:text-brand transition" 
                                viewBox="0 0 24 24" 
                                stroke-width="2" 
                                stroke="currentColor" 
                                fill="none" 
                                stroke-linecap="round" 
                                stroke-linejoin="round"
                            >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg>
                            <span class="capitalize <?php echo e(request()->routeIs('app.user.index') || Str::startsWith(request()->segment(3), 'app.user') ? 'text-brand' : 'text-black'); ?> text-lg truncate group-hover:text-brand transition">
                                pengguna
                            </span>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="space-y-3.5">
            <h6 class="pl-3.5 text-xs font-bold tracking-wider text-black uppercase">
                pengaturan
            </h6>
            <div class="space-y-3">
                
                <a 
                    href="<?php echo e(route('logout')); ?>"
                    
                    class="flex space-x-2 group"
                >
                    <div class="w-1.5 h-6 rounded-md shrink-0 bg-transparent group-hover:bg-brand transition"></div>
                    <div class="flex w-full pr-6 space-x-3">
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            class="w-6 h-6 text-black transition shrink-0 group-hover:text-brand" 
                            viewBox="0 0 24 24" 
                            stroke-width="2" 
                            stroke="currentColor" 
                            fill="none" 
                            stroke-linecap="round" 
                            stroke-linejoin="round"
                        >
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M13 12v.01"></path>
                            <path d="M3 21h18"></path>
                            <path d="M5 21v-16a2 2 0 0 1 2 -2h7.5m2.5 10.5v7.5"></path>
                            <path d="M14 7h7m-3 -3l3 3l-3 3"></path>
                        </svg>
                        <span class="text-lg text-black capitalize truncate transition group-hover:text-brand">
                            keluar
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section><?php /**PATH /Users/raflifebrian/Documents/Dev/portaldata/resources/views/components/side-menu.blade.php ENDPATH**/ ?>