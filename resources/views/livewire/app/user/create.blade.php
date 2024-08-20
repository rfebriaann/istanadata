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
                                    Tambah Akun Pengguna
                                </h5>
                                <section class="mt-4">
                                    <div class="max-w-screen-xl p-2 mx-auto lg:px-1">
                                        <div class="bg-white w-full relative sm:rounded-lg overflow-hidden">
                                            @if (session()->has('message'))
                                            <div class="md:mx-28 sm:mx-0 md:p-3 sm:p-1 bg-[#8DECB4] border border-[#41B06E] rounded-xl md:flex sm:grid grid-rows-2">
                                                <div class="md:mx-4 sm:mx-2 md:p-2 sm:p-1 w-2/3">
                                                    <p class="mx-auto text-[#36925b] font-medium text-lg">🎉 {{session('message')}}</p>
                                                </div>
                                                <div class="text-right w-1/3 ">
                                                    <a href="{{route('app.user.index')}}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-indigo-100 border border-[#40A578] rounded-full shadow-sm cursor-pointer hover:text-white bg-gradient-to-br from-[#9DDE8B] via-[#40A578] to-[#40A578]">
                                                        <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
                                                        <span class="relative">Kembali</span>
                                                    </a>
                                                </div>
                                            </div>
                                            @endif
                                            
                                            <div class="overflow-x-auto">
                                                <form class="mt-4" action="" wire:submit="store">
                                                    <div class="space-y-6">
                                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                                            <div class="space-y-1">
                                                                <label 
                                                                    for="nama"
                                                                    class="font-medium  text-gray-800"
                                                                >
                                                                    Nama <span class="text-red-600">*</span>
                                                                </label>
                                                                <p class="text-sm text-gray-600">
                                                                    Tambahkan nama pengguna dengan lengkap dan benar
                                                                </p>
                                                            </div>
                                                            <div class="pt-0 lg:pt-3">
                                                                <input 
                                                                    id="nama"
                                                                    type="text"
                                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[30px]"
                                                                    wire:model="nama"
                                                                    wire:target="store"
                                                                    name="nama"
                                                                    wire:loading.attr="disabled"
                                                                ></input>
                                                                @error('nama')
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
                                                                    Email <span class="text-red-600">*</span>
                                                                </label>
                                                                <p class="text-sm text-gray-600">
                                                                    Tambahkan email akun pengguna 
                                                                </p>
                                                            </div>
                                                            <div class="pt-0 lg:pt-3">
                                                                <input 
                                                                    type="email"
                                                                    id="email"
                                                                    name="email"
                                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                                    wire:model="email"
                                                                    wire:target="store"
                                                                    wire:loading.attr="disabled"
                                                                ></input>
                                                                @error('email')
                                                                    <span class="block mt-0 text-xs text-red-600">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2 lg:gap-10">
                                                            <div class="space-y-1">
                                                                <label 
                                                                    for="password"
                                                                    class="font-medium text-gray-800"
                                                                >
                                                                    Kata Sandi <span class="text-red-600">*</span>
                                                                </label>
                                                                <p class="text-sm text-gray-600">
                                                                    Tambahkan kata sandi akun pengguna dengan minimal 6 karakter
                                                                </p>
                                                            </div>
                                                            <div class="pt-0 lg:pt-3">
                                                                <input 
                                                                    type="password"
                                                                    id="password"
                                                                    name="password"
                                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                                    wire:model="password"
                                                                    wire:target="store"
                                                                    wire:loading.attr="disabled"
                                                                ></input>
                                                                @error('password')
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
                                                                    OPD <span class="text-red-600">*</span>
                                                                </label>
                                                                <p class="text-sm text-gray-600">
                                                                    {{-- Tambahkan jenis OPD yang dituju, apabila akun dibuat untuk admin, cukup dikosongkan saja --}}
                                                                    Tambahkan jenis OPD yang dituju
                                                                </p>
                                                            </div>
                                                            <div class="pt-0 lg:pt-3">
                                                                <select 
                                                                    required
                                                                    id="opd_id"
                                                                    class="w-full border border-gray-300 p-4 text-black rounded-md focus:border-gray-800 focus:ring-gray-800 disabled:bg-gray-50 min-h-[40px]"
                                                                    wire:model="opd_id"
                                                                    wire:target="store"
                                                                    name="opd_id"
                                                                    wire:loading.attr="disabled"
                                                                >
                                                                <option value="%00"></option>
                                                                @foreach ($opds as $opd)
                                                                    <option value="{{$opd->id}}">{{$opd->uraian_skpd}}</option>
                                                                @endforeach
                                                            </select>
                                                                @error('tahun')
                                                                    <span class="block mt-0 text-xs text-red-600">
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
