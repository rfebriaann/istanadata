<div>
    <div class="h-auto w-auto mx-20 sm:w-[320px] sm:mx-auto md:w-[680px] md:mx-auto xl:w-[1200px] lg:w-[800px] lg:mx-auto rounded-2xl bg-[#FAFAFA] mt-28 p-10 sm:p-2">
        <section class="">
           @dd($item)
            {{-- @foreach($item as $data)
                <p>ID: {{$data->id}}</p>
                <p>Komoditas: {{ $data->komoditas->komoditas }}</p>
                    @if($data->komoditas->jenisKomoditass->isNotEmpty())
                        @foreach($data->komoditas->jenisKomoditass as $jenisKomoditas)
                            <p>Jenis Komoditas: {{ $jenisKomoditas->jenis_komoditas }}</p>
                            
                        @endforeach
                    @else
                        <p>Tidak ada jenis komoditas terkait.</p>
                        <br>
                    @endif

                    @if($data->kecamatan)
                        <p>Kecamatan: {{ $data->kecamatan->kecamatan }}</p> <!-- Asumsikan nama kecamatan berada di kolom 'nama' -->
                    @else
                        <p>Kecamatan tidak tersedia.</p>
                    @endif
                   
                <p>Harga Baru: {{ $data->harga_baru }}</p>
                <p>Harga Lama: {{ $data->harga_lama }}</p>
                <p>Selisih Harga: {{ $data->harga_baru - $data->harga_lama}}</p>
                <p>Tanggal: {{ $data->tanggal }}</p>

                    @if($data->satuanKomoditas)
                        <p>Satuan: {{ $data->satuanKomoditas->satuan }}</p> <!-- Asumsikan nama kecamatan berada di kolom 'nama' -->
                    @else
                        <p>Kecamatan tidak tersedia.</p>
                    @endif
                <br>
            @endforeach --}}
        </section>
    </div>
</div>
