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
                                            <div class="flex">
                                                <div class="relative w-full">
                                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                            fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                    <input  type="text"
                                                        wire:model.live = 'search'
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                                        placeholder="Search" required="">
                                                </div>
                                            </div>
                                            <div class="flex space-x-3">
                                                <div class="flex space-x-3 items-center">
                                                    <label class="w-20 text-sm font-medium text-gray-900">Bidang Urusan :</label>
                                                    <select 
                                                        wire:model.live = 'bidang'
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-40 p-2.5 ">
                                                        <option value="">All</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table class="w-full text-md text-center text-gray-500 dark:text-gray-400">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                                    <tr>
                                                        <th scope="col" class="px-4 py-3">#</th>
                                                        <th scope="col" class="px-4 py-3">Kode Bidang</th>
                                                        <th scope="col" class="px-4 py-3">Bidang Urusan</th>
                                                        <th scope="col" class="px-4 py-3">Satuan</th>
                                                        <th scope="col" class="px-4 py-3">Bidang Urusan</th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $i = 1;
                                                    ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="py-4 px-3">
                                            <div class="flex ">
                                                <div class="flex space-x-4 items-center mb-3">
                                                    <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                                                    <select
                                                        wire:model.live='perPage' 
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                                        <option value="10">10</option>
                                                        <option value="20">20</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
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
<?php /**PATH /Users/raflifebrian/Documents/Dev/portaldata/resources/views/livewire/dokumen.blade.php ENDPATH**/ ?>