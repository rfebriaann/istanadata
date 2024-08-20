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
                                Surat
                            </h5>
                            <a 
                                        href="{{route('tambah-surat')}}"
                                        class="flex items-center px-3 py-2 mt-2 space-x-0 transition rounded-md lg:space-x-1 w-fit bg-blue-500 hover:bg-opacity-90"
                                        {{-- wire:click.prevent="'app.dokumen.create" --}}
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white lg:w-4 lg:h-4 lg:" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                        <span class="hidden text-sm font-medium text-white capitalize lg:block">
                                            tambah
                                        </span>
                                    </a>
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
                                            
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table class="w-full text-md text-center text-gray-500 dark:text-gray-400">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                                    <tr>
                                                        <th scope="col" class="px-4 py-3">#</th>
                                                        <th scope="col" class="px-4 py-3">Nama Dokumen</th>
                                                        <th scope="col" class="px-4 py-3">Deskripsi</th>
                                                        <th scope="col" class="px-4 py-3">Tahun File</th>
                                                        <th scope="col" class="px-4 py-3">Tgl Upload</th>
                                                        <th scope="col" class="px-4 py-3">Aksi</th>
                                                        {{-- <th scope="col" class="px-4 py-3">Role</th>
                                                        <th scope="col" class="px-4 py-3">Joined</th>
                                                        <th scope="col" class="px-4 py-3">Last update</th> --}}
                                                        {{-- <th scope="col" class="px-4 py-3">
                                                            <span class="sr-only">Actions</span>
                                                        </th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($surats as $surat)
                                                    <tr class="border-b dark:border-gray-200">
                                                            <td class="px-4 py-3">{{$i++}}</td>
                                                            <td class="px-4 text-left py-3 text-blue-500"><span class="bg-[#0365FE]/20 text-sm leading-8 text-[#0365FE] font-medium p-1 rounded-2xl px-4">{{ucwords(strtolower($surat->nama_surat))}}</span></td>
                                                            <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ucwords(strtolower($surat->deskripsi))}}</th>
                                                            <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ucwords(strtolower($surat->tahun))}}</th>
                                                            <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ucwords(strtolower($surat->tgl_upload))}}</th>
                                                            <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900"><a href="{{route('dokumen.edit.{id}', $surat->id)}}">Edit ✏️</a> <button wire:click="destroy({{$surat->id}})">Hapus 🗑️</button></th>
                                                    </tr>
                                                    @endforeach
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
                                            {{-- {{$indikators->links()}} --}}
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
