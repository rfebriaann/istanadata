<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="h-auto w-auto mx-20 sm:w-[320px] sm:mx-auto md:w-[680px] md:mx-auto xl:w-[1200px] lg:w-[800px] lg:mx-auto rounded-2xl bg-[#FAFAFA] mt-28 p-10 sm:p-2">
        <section class="">
            {{-- @dd($items) --}}
            <div class="xl:max-w-screen-xl lg:max-w-screen-lg p-2 mx-auto lg:px-10">
                <!-- Start coding here -->
                <h1 class="text-3xl py-2 font-bold text-black/80">Data Komoditas</h1>
                <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between d p-4">
                        <div class="flex">
                            {{-- <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input  type="text"
                                    wire:model.debounce.300ms="search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                    placeholder="Search" required="">
                            </div> --}}
                        </div>
                        {{-- <div class="flex space-x-3">
                            <div class="flex space-x-3 items-center">
                                <label class="w-40 text-sm font-medium text-gray-900">Kecamatan :</label>
                                <select 
                                wire:model.live = 'kecamatanId'
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    @foreach($kecamatans as $kecamatan)
                                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->kecamatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-md text-center text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">#</th>
                                    <th scope="col" class="px-4 py-3">Kode Daerah</th>
                                    <th scope="col" class="px-4 py-3">Kampung</th>
                                    <th scope="col" class="px-4 py-3">Kecamatan</th>
                                    <th scope="col" class="px-4 py-3">Bulan</th>
                                    <th scope="col" class="px-4 py-3">Masjid</th>
                                    <th scope="col" class="px-4 py-3">Gereja Kristen</th>
                                    <th scope="col" class="px-4 py-3">Gereja Katolik</th>
                                    <th scope="col" class="px-4 py-3">Pura</th>
                                    <th scope="col" class="px-4 py-3">Wihara</th>
                                    <th scope="col" class="px-4 py-3">Klenteng</th>
                                    <th scope="col" class="px-4 py-3">Rumah Tahfiz</th>
                                    <th scope="col" class="px-4 py-3">Kapel</th>
                                    <th scope="col" class="px-4 py-3">Balai Basarah</th>
                                    <th scope="col" class="px-4 py-3">Surau</th>
                                    <th scope="col" class="px-4 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($religions as $item)
                                <tr class="border-b dark:border-gray-200">
                                        <td class="px-4 py-3">{{$i++}}</td>
                                        <td class="px-4 py-3 text-blue-500"><span class="bg-[#0365FE]/20 text-sm leading-8 text-[#0365FE] font-medium p-1 rounded-2xl px-4">{{$item->kode_daerah}}</span></td>
                                        {{-- <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ucwords(strtolower($item->kode_daerah))}}</th> --}}
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ucwords(strtolower($item->kampung))}}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->kecamatan }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->bulan }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->masjid }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->gereja_kristen }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->gereja_khatolik }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->pura }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->wihara }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->klenteng }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->rumah_tahfiz }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->kapel }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->balai_basarah }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->surau }}</th>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ $item->status }}</th>
                                        
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
                        {{-- {{$items->links()}} --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
