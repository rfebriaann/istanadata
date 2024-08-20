<div>
    {{-- <div class="h-auto mb-[70px] md:mx-24 flex justify-center bg-[#000] rounded-3xl mt-28"> --}}
        <div class="h-auto w-auto mx-20 rounded-2xl bg-[#FAFAFA] mt-28 p-10">
            <div class="grid gap-2 md:grid-cols-2 sm:grid-cols-1sm:justify-center">
                <div>
                    <label for="small" class="block mb-2 text-md font-normal text-gray-900">Filter Bidang Urusan</label>
                    <select name="bidangurusan" wire:model.live="bidangurusan" id="small" class="block w-3/4 p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 ">
                        <option selected>Pilih Bidang Urusan</option>
                        @foreach ($bidangurusan as $item)
                            <option value="{{$item->bidangurusan}}">{{$item->bidangurusan}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    
                </div>
            </div>
            <table id="myTable" class="table border-spacing-4 w- table-stripped">
                <thead>
                    <tr>
                        <th class="text-start text-lg">No.</th>
                        <th class="text-center w-[400px] text-lg">Indikator</th>
                        <th class="text-center text-lg">Satuan</th>
                        {{-- <th class="text-center">Bidang Urusan</th> --}}
                        <th class="text-center text-lg">2017</th>
                        <th class="text-center text-lg">2018</th>
                        <th class="text-center text-lg">2019</th>
                        <th class="text-center text-lg">2020</th>
                        <th class="text-center text-lg">2021</th>
                        <th class="text-center text-lg">2022</th>
                    </tr>
                </thead>
                <tbody class="p-10">
                    @php
                        $i = 1;    
                    @endphp
                        @foreach ($dataSatuan as $filter)    
                        <tr class="mt-28">
                            <td>{{$i++}}</td>
                            <td><span class="bg-[#0365FE]/20 leading-8 text-[#0365FE] font-medium p-1 rounded-2xl px-4">{{$filter->indikator}}</span></td>
                            <td class="text-center">{{$filter->unit}}</td>
                            {{-- <td class="text-center">{{$filter->bidangurusan}}</td> --}}
                            <td class="text-center">{{$filter->tahun2}}</td>
                            <td class="text-center">{{$filter->tahun3}}</td>
                            <td class="text-center">{{$filter->tahun4}}</td>
                            <td class="text-center">{{$filter->tahun5}}</td>
                            <td class="text-center">{{$filter->tahun6}}</td>
                            <td class="text-center">{{$filter->tahun7}}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    {{-- </div> --}}
</div>
