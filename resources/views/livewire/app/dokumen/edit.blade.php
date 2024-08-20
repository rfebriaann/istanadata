<div>
    <div>
        <div class="relative ml-0 lg:ml-72">
            <div class="h-[500px] bg-blue-500 rounded-br-3xl rounded-bl-3xl relative w-full"></div>
            <div class="absolute inset-x-0 top-0 z-10 flex flex-col w-full min-h-screen">
                <div class="relative flex-1 pb-10">
                    <div class="px-5 mt-16 lg:mt-20 lg:px-10">
                        <div class="relative max-w-screen-xl mx-auto">
                            <div class="absolute w-full h-20 -scale-90 bg-white/40 rounded-xl -top-8"></div>
                            <div class="absolute w-full h-20 -scale-95 bg-white/60 rounded-xl -top-4"></div>
                            <div class="relative z-10 p-6 bg-white shadow-xl md:p-10 rounded-xl">
                                <h5 class="text-2xl font-semibold capitalize">
                                    Upload Dokumen
                                </h5>
                                <section class="mt-4">
                                    <div class="max-w-screen-xl p-2 mx-auto lg:px-1">
                                        <div class="bg-white w-full relative sm:rounded-lg overflow-hidden">
                                            <div class="flex items-center justify-between d p-4">
                                                
                                            </div>
                                            <div class="overflow-x-auto">
                                                <form action="" wire:submit="update" enctype="multipart/form-data">
                                                    <div class="space-y-6">
                                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                                            <div class="space-y-1">
                                                                <label 
                                                                    for="judul"
                                                                    class="font-medium  text-gray-800"
                                                                >
                                                                    Judul <span class="text-red-600">*</span>
                                                                </label>
                                                                <p class="text-sm text-gray-600">
                                                                    Tambahkan judul berkas dengan lengkap dan benar
                                                                </p>
                                                            </div>
                                                            <div class="pt-0 lg:pt-3">
                                                                <textarea 
                                                                    id="title"
                                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[100px]"
                                                                    wire:model="title"
                                                                    wire:target="store"
                                                                    name="title"
                                                                    wire:loading.attr="disabled"
                                                                ></textarea>
                                                                @error('title')
                                                                    <span class="block mt-0 text-xs text-red-600">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
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
                                                                    name="detail"
                                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[100px]"
                                                                    wire:model="detail"
                                                                    wire:target="store"
                                                                    wire:loading.attr="disabled"
                                                                ></textarea>
                                                                @error('detail')
                                                                    <span class="block mt-0 text-xs text-red-600">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                                            <div class="space-y-1">
                                                                <label 
                                                                    for="title"
                                                                    class="font-medium text-gray-800"
                                                                >
                                                                    Tanggal Upload <span class="text-red-600">*</span>
                                                                </label>
                                                                <p class="text-sm text-gray-600">
                                                                    Tambahkan waktu sesuai dengan kapan dokumen sedang diupload
                                                                </p>
                                                            </div>
                                                            <div class="pt-0 lg:pt-3">
                                                                <input 
                                                                    id="tanggal"
                                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                                    wire:model="tanggal"
                                                                    wire:target="store"
                                                                    name="tanggal"
                                                                    type="date"
                                                                    wire:loading.attr="disabled"
                                                                >
                                                                @error('tanggal')
                                                                    <span class="block mt-0 text-xs text-red-600">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
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
                                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                                    wire:model="tahun"
                                                                    wire:target="store"
                                                                    name="tahun"
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
                                                                @error('tahun')
                                                                    <span class="block mt-0 text-xs text-red-600">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                                            <div class="space-y-1">
                                                                <label 
                                                                    for="file_dokumen"
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
                                                                        wire:target="store"
                                                                        wire:loading.class="absolute inset-0 z-20 w-full h-full border border border-gray-300 rounded-md bg-gray-50/50"
                                                                    ></div>
                                                                    <label 
                                                                        for="file_dokumen"
                                                                        class="flex items-center w-full h-full px-2 overflow-hidden border border-gray-300 text-black rounded-md"
                                                                    >
                                                                        <div
                                                                            wire:loading.remove
                                                                            wire:target="file_dokumen"
                                                                        >
                                                                            <div class="flex text-black items-center w-full h-full space-x-2 cursor-pointer group">
                                                                                <div
                                                                                    class="grid flex-shrink-0 h-8 text-black transition rounded bg-brand w-9 place-content-center group-hover:bg-opacity-80"
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
                                                                                    {{ $file_dokumen ? $file_dokumen : 'Pilih berkas' }}
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div 
                                                                            wire:loading.block
                                                                            wire:target="file_dokumen"
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
                                                                    name="file_dokumen"
                                                                    id="file_dokumen"
                                                                    class="hidden border text-black border-gray-300"
                                                                    wire:model="file_dokumen" 
                                                                    accept="application/pdf"
                                                                >
                                                                @error('file_dokumen')
                                                                    <span class="block mt-2 text-xs text-red-500">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                                            <div class="space-y-1">
                                                                <label 
                                                                    for="file_dokumen_csv"
                                                                    class="font-medium"
                                                                >
                                                                    Berkas Kegiatan CSV <span class="text-red-600">*</span>
                                                                </label>
                                                                <p class="text-sm">
                                                                    Unggah berkas kegiatan dalam bentuk csv
                                                                </p>
                                                            </div>
                                                            <div class="pt-0 lg:pt-3">
                                                                <div 
                                                                    class="relative w-full h-12"
                                                                >
                                                                    <div 
                                                                        wire:target="store"
                                                                        wire:loading.class="absolute inset-0 z-20 w-full h-full border border border-gray-300 rounded-md bg-gray-50/50"
                                                                    ></div>
                                                                    <label 
                                                                        for="file_dokumen_csv"
                                                                        class="flex items-center w-full h-full px-2 overflow-hidden border border-gray-300 text-black rounded-md"
                                                                    >
                                                                        <div
                                                                            wire:loading.remove
                                                                            wire:target="file_dokumen_csv"
                                                                        >
                                                                            <div class="flex text-black items-center w-full h-full space-x-2 cursor-pointer group">
                                                                                <div
                                                                                    class="grid flex-shrink-0 h-8 text-black transition rounded bg-brand w-9 place-content-center group-hover:bg-opacity-80"
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
                                                                                    {{ $file_dokumen_csv ? $file_dokumen_csv : 'Pilih berkas' }}
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div 
                                                                            wire:loading.block
                                                                            wire:target="file_dokumen_csv"
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
                                                                    name="file_dokumen_csv"
                                                                    id="file_dokumen_csv"
                                                                    class="hidden border text-black border-gray-300"
                                                                    wire:model="file_dokumen_csv" 
                                                                    accept=".csv, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                                                                >
                                                                @error('file_dokumen_csv')
                                                                    <span class="block mt-2 text-xs text-red-500">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                                            <div class="space-y-1">
                                                                <label 
                                                                    for="cover_dokumen"
                                                                    class="font-medium"
                                                                >
                                                                    Cover Dokumen <span class="text-red-600">*</span>
                                                                </label>
                                                                <p class="text-sm">
                                                                    Unggah berkas kegiatan dalam bentuk foto
                                                                </p>
                                                            </div>
                                                            <div class="pt-0 lg:pt-3">
                                                                <div 
                                                                    class="relative w-full h-12"
                                                                >
                                                                    <div 
                                                                        wire:target="store"
                                                                        wire:loading.class="absolute inset-0 z-20 w-full h-full border border border-gray-300 rounded-md bg-gray-50/50"
                                                                    ></div>
                                                                    <label 
                                                                        for="cover_dokumen"
                                                                        class="flex items-center w-full h-full px-2 overflow-hidden border border-gray-300 text-black rounded-md"
                                                                    >
                                                                        <div
                                                                            wire:loading.remove
                                                                            wire:target="cover_dokumen"
                                                                        >
                                                                            <div class="flex text-black items-center w-full h-full space-x-2 cursor-pointer group">
                                                                                <div
                                                                                    class="grid flex-shrink-0 h-8 text-black transition rounded bg-brand w-9 place-content-center group-hover:bg-opacity-80"
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
                                                                                    {{ $cover_dokumen ? $cover_dokumen : 'Pilih berkas' }}
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div 
                                                                            wire:loading.block
                                                                            wire:target="cover_dokumen"
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
                                                                    name="cover_dokumen"
                                                                    id="cover_dokumen"
                                                                    class="hidden border text-black border-gray-300"
                                                                    wire:model="cover_dokumen" 
                                                                    accept="image/*"
                                                                >
                                                                @error('cover_dokumen')
                                                                    <span class="block mt-2 text-xs text-red-500">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-end">
                                                            <button type="submit" class=" w-28 rounded-xl p-3 bg-[#0365FE] text-lg text-white hover:bg-[#2678fc]">simpan</button>
                                                        </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
