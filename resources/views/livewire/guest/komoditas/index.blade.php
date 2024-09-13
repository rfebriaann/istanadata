<div>
    <div class="h-auto w-auto sm:mx-0 mx-10 sm:w-max-w-screen-sm  md:w-max-w-screen-md md:mx-auto xl:w-max-w-screen-xl xl:mx-40 lg:w-max-w-screen-lg lg:mx-auto rounded-2xl bg-[#FAFAFA] mt-28 p-10 sm:p-2">
        <section class="">
            <div class="xl:max-w-screen-xl lg:max-w-screen-lg p-2 mx-auto ">
                <h1 class="text-3xl py-2 font-bold text-black/80">Data Komoditas</h1>
                <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between d p-4">
                        <div class="flex">
                            <div class="relative w-full">
                                <div class="flex space-x-3">
                                    <div class="flex space-x-3 items-center">
                                        <label class="w-40 text-sm font-medium text-gray-900">Tanggal :</label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="date" wire:model.live="start_date" id="start_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3">
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
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-md text-center text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">#</th>
                                    <th scope="col" class="px-4 py-3">Komoditas</th>
                                    <th scope="col" class="px-4 py-3">Satuan</th>
                                    <th scope="col" class="px-4 py-3">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($items->isEmpty())
                                    <tr class="col-span-3">
                                        <td colspan="4">tidak ada data untuk tanggal yang dipilih.</td>
                                    </tr>
                                @else
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($items as $item)
                                <tr class="border-b dark:border-gray-200">
                                        <td class="px-4 py-3">{{$i++}}</td>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">{{ucwords(strtolower($item->komoditas->komoditas))}}</th>
                                        <td class="px-4 py-3 text-blue-500"><span class="bg-[#0365FE]/20 text-sm leading-8 text-[#0365FE] font-medium p-1 rounded-2xl px-4">{{ucwords(strtolower($item->satuanKomoditas->satuan))}}</span></td>
                                        <th scope="row" class="px-6 text-left py-2 font-medium text-gray-900">Rp{{ number_format($item->harga_baru, 0, ',', '.') }}</th>
                                        {{-- <td class="px-4 py-3 text-blue-500"><span class="bg-[#0365FE]/20 text-sm leading-8 text-[#0365FE] font-medium p-1 rounded-2xl px-4">{{$item->satuan->satuan}}</span></td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                            @endif
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
                        {{$items->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
