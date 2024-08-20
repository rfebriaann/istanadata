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
                                Data Akun Pengguna
                            </h5>
                            {{-- <a 
                                        href="{{route('tambah-dokumen')}}"
                                        class="flex items-center px-3 py-2 mt-2 space-x-0 transition rounded-md lg:space-x-1 w-fit bg-blue-500 hover:bg-opacity-90"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white lg:w-4 lg:h-4 lg:" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                        <span class="hidden text-sm font-medium text-white capitalize lg:block">
                                            tambah
                                        </span>
                                    </a> --}}
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
                                                    {{-- <label class="w-20 text-sm font-medium text-gray-900">Bidang Urusan :</label>
                                                    <select 
                                                        wire:model.live = 'bidang'
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-40 p-2.5 ">
                                                        <option value="">All</option>
                                                        @foreach ($bidangs as $bidang)
                                                            <option value="{{$bidang->id}}">{{$bidang->bidang_urusan}}</option>
                                                        @endforeach
                                                    </select> --}}
                                                     <a 
                                                        href="{{route('app.user.create')}}"
                                                        class="flex items-center px-3 py-2 mt-2 space-x-0 transition rounded-md lg:space-x-1 w-fit bg-blue-500 hover:bg-opacity-90"
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table class="w-full text-md text-center text-gray-500 dark:text-gray-400">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                                    <tr>
                                                        <th scope="col" class="px-4 py-3">#</th>
                                                        <th scope="col" class="px-4 py-3">Nama</th>
                                                        <th scope="col" class="px-4 py-3">Email</th>
                                                        <th scope="col" class="px-4 py-3">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="">
                                                    @php
                                                        $i = 1;
                                                    @endphp
                                                    @foreach ($users as $user)
                                                    <tr class="border-b dark:border-gray-200">
                                                            <td class="px-4 py-3">{{$i++}}</td>
                                                            <td class="px-4 text-left py-3 text-blue-500">
                                                                <span class="bg-[#0365FE]/20 text-sm leading-8 text-[#0365FE] font-medium p-1 rounded-2xl px-4">{{ucwords(strtolower($user->nama))}}</span></td>
                                                            <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ucwords(strtolower($user->email))}}</th>
                                                            {{-- <td class="px-4 py-3  flex items-center justify-end">
                                                                <a href="{{route('dokumen.edit.{id}', $user->id)}}">Edit ✏️</a> | <button wire:click="destroy({{$user->id}})">Hapus 🗑️</button>
                                                            </td> --}}
                                                            <td scope="row" class="px-2 py-3 flex flex-col items-start justify-start text-gray-900 font-semibold">
                                                                <a class="text-left" href="{{route('app.user.edit.{id}', $user->id)}}">Edit ✏️</a>
                                                                <a class="text-left mt-2" href="{{route('app.user.edit-password.{id}', $user->id)}}">Ubah Password 🔒</a>
                                                                    {{-- <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class=" mt-2 flex items-center justify-start w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-black md:dark:hover:text-blue-500 dark:focus:text-black dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Edit ✏️<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                                                    </svg></button> --}}
                                                                    
                                                                    <button class="text-left mt-2" wire:click="destroy({{$user->id}})">Hapus 🗑️<button>
                                                            </td>
                                                    </tr>
                                                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-blue-500 divide-y divide-gray-100 rounded-lg shadow w-32">
                                                        <ul class="py-2 text-sm text-left text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                                            <li>
                                                            <a href="{{route('app.user.edit.{id}', $user->id)}}" class="block px-4 py-2 hover:bg-[#0365FE] text-white">Edit Data</a>
                                                            </li>
                                                            <li>
                                                            <a href="{{route('app.user.edit-password.{id}', $user->id)}}" class="block px-4 py-2 hover:bg-[#0365FE] text-white">Edit Password</a>
                                                            </li>
                                                        </ul>
                                                    </div>
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
