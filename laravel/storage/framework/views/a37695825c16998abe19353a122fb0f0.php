<div>
    <div class="h-auto mb-[70px] md:mx-[250px] flex justify-center bg-[#FAFAFA] rounded-3xl mt-28">
        <div class="h-auto p-8 w-4/4">
            <form action="" wire:submit.prevent="store">
            <div class="space-y-6">
                <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                    <div class="space-y-1">
                        <label 
                            for="id_opd"
                            class="font-medium text-gray-800"
                        >
                            Pilih OPD <span class="text-red-600">*</span>
                        </label>
                        <p class="text-sm text-gray-600">
                            Tambahkan Instansi/OPD sesuai dengan berkas yang akan di upload
                        </p>
                    </div>
                    <div class="pt-0 lg:pt-3">
                        <select 
                            id="id_opd"
                            class="w-full p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                            wire:model="id_opd"
                            wire:target="submit"
                            wire:loading.attr="disabled"
                        >
                        <option value=""></option>
                        <!-- __BLOCK__ --><?php $__currentLoopData = $opds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($opd->id_opd); ?>"><?php echo e($opd->nama_opd); ?></option>  
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- __ENDBLOCK__ -->
                    </select>
                        <!-- __BLOCK__ --><?php $__errorArgs = ['id_opd'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="block mt-0 text-xs text-red-600">
                                <?php echo e($message); ?>

                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                    <div class="space-y-1">
                        <label 
                            for="title"
                            class="font-medium text-gray-800"
                        >
                            Tahun <span class="text-red-600">*</span>
                        </label>
                        <p class="text-sm text-gray-600">
                            Tambahkan tahun sesuai dengan tahun berkas yang akan di upload
                        </p>
                    </div>
                    <div class="pt-0 lg:pt-3">
                        <select 
                            id="tahun"
                            class="w-full p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                            wire:model="tahun"
                            wire:target="submit"
                            wire:loading.attr="disabled"
                        >
                        <option value=""></option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                    </select>
                        <!-- __BLOCK__ --><?php $__errorArgs = ['tahun'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="block mt-0 text-xs text-red-600">
                                <?php echo e($message); ?>

                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                    <div class="space-y-1">
                        <label 
                            for="judul"
                            class="font-medium text-gray-800"
                        >
                            Judul <span class="text-red-600">*</span>
                        </label>
                        <p class="text-sm text-gray-600">
                            Tambahkan judul berkas dengan lengkap dan benar
                        </p>
                    </div>
                    <div class="pt-0 lg:pt-3">
                        <textarea 
                            id="judul"
                            class="w-full p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[100px]"
                            wire:model="judul"
                            wire:target="submit"
                            wire:loading.attr="disabled"
                        ></textarea>
                        <!-- __BLOCK__ --><?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="block mt-0 text-xs text-red-600">
                                <?php echo e($message); ?>

                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                    <div class="space-y-1">
                        <label 
                            for="detail"
                            class="font-medium text-gray-800"
                        >
                            Detail Berkas <span class="text-red-600">*</span>
                        </label>
                        <p class="text-sm text-gray-600">
                            Tambahkan detail singkat tentang berkas yang diupload
                        </p>
                    </div>
                    <div class="pt-0 lg:pt-3">
                        <textarea 
                            id="detail"
                            class="w-full p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[100px]"
                            wire:model="detail"
                            wire:target="submit"
                            wire:loading.attr="disabled"
                        ></textarea>
                        <!-- __BLOCK__ --><?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="block mt-0 text-xs text-red-600">
                                <?php echo e($message); ?>

                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                    <div class="space-y-1">
                        <label 
                            for="file"
                            class="font-medium"
                        >
                            Berkas Kegiatan <span class="text-red-600">*</span>
                        </label>
                        <p class="text-sm">
                            Unggah berkas kegiatan dalam bentuk pdf
                        </p>
                    </div>
                    <div class="pt-0 lg:pt-3">
                        <div 
                            class="relative w-full h-12"
                        >
                            <div 
                                wire:target="submit"
                                wire:loading.class="absolute inset-0 z-20 w-full h-full border border-gray-500 rounded-md bg-gray-50/50"
                            ></div>
                            <label 
                                for="file"
                                class="flex items-center w-full h-full px-2 overflow-hidden border border-gray-500 rounded-md"
                            >
                                <div
                                    wire:loading.remove
                                    wire:target="file"
                                >
                                    <div class="flex items-center w-full h-full space-x-2 cursor-pointer group">
                                        <div
                                            class="grid flex-shrink-0 h-8 text-white transition rounded bg-brand w-9 place-content-center group-hover:bg-opacity-80"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" stroke-width="2" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <desc>Download more icon variants from https://tabler-icons.io/i/file-upload</desc>
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                <path d="M12 11v6"></path>
                                                <path d="M9.5 13.5l2.5 -2.5l2.5 2.5"></path>
                                            </svg>
                                        </div>
                                        <span class="w-64 pr-2 truncate">
                                            <?php echo e($file ? $file->getClientOriginalName() : 'Pilih berkas'); ?>

                                        </span>
                                    </div>
                                </div>
                                <div 
                                    wire:loading.block
                                    wire:target="file"
                                >
                                    <div class="absolute top-0 left-0 flex items-center w-full h-full px-2 space-x-2 animate-pulse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 animate-spin" viewBox="0 0 24 24" stroke-width="2" stroke="#000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <desc>Download more icon variants from https://tabler-icons.io/i/loader</desc>
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <line x1="12" y1="6" x2="12" y2="3"></line>
                                            <line x1="16.25" y1="7.75" x2="18.4" y2="5.6"></line>
                                            <line x1="18" y1="12" x2="21" y2="12"></line>
                                            <line x1="16.25" y1="16.25" x2="18.4" y2="18.4"></line>
                                            <line x1="12" y1="18" x2="12" y2="21"></line>
                                            <line x1="7.75" y1="16.25" x2="5.6" y2="18.4"></line>
                                            <line x1="6" y1="12" x2="3" y2="12"></line>
                                            <line x1="7.75" y1="7.75" x2="5.6" y2="5.6"></line>
                                        </svg>
                                        <span class="w-64 pr-2 truncate">
                                            Sedang mengunggah...
                                        </span>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <input 
                            type="file"
                            id="file"
                            class="hidden"
                            wire:model="file"
                            accept="application/pdf"
                        >
                        <!-- __BLOCK__ --><?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="block mt-2 text-xs text-red-500">
                                <?php echo e($message); ?>

                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!-- __ENDBLOCK__ -->
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class=" w-28 rounded-xl p-3 bg-[#0365FE] text-lg text-white hover:bg-[#2678fc]">simpan</button>
                </div>
            </form>
            </div>
        </div>
        
            
        
            
        
            
        </div>
    </div>
</div>
<?php /**PATH /Users/raflifebrian/Documents/Dev/portaldata/resources/views/livewire/dokumen/create.blade.php ENDPATH**/ ?>