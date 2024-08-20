<div>
    <div class="h-[600px] md:mx-14 sm:-mx-2 p-4">
        <div class="h-[550px] sm:-mb-[40px] md:-mb-[70px] lg:mb-[70px] lg:w-full p-0 rounded-3xl mt-16 justify-items-stretch">
            <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-1  sm:mx-auto">
                <div class="h-48 mt-2 mb-8 lg:w-full col-span-2">
                    <h1 class="lg:text-7xl mb-4 sm:text-5xl z-40 text-center mt-2 text-[#181818] font-extrabold">Istana Data</h1>
                    <span class="z-50 lg:mb-20 sm:mb-10">
                        <h3 class="mt-2 text-center font-light mb-20 z-20 mx-24 sm:mx-2 text-gray-500 lg:text-2xl sm:text-base">Dibuat dengan tujuan sebagai media untuk penyajian/penyebaran data informasi spesifik dari Data Sektoral dan Data Spasial. Aplikasi ini dikelola oleh bidang Statistik Kabupaten Siak yang bekerjasama dengan Organisasi Perangkat Daerah (OPD) lingkup Pemerintah Kabupaten Siak.</h3>
                    </span>
                </div>
                <div class="h-auto sm:hidden lg:flex md:flex md:-mt-[100px] lg:mt-[2px] justify-center xl:-mt-[127px] w-full col-span-2">
                    <img class="z-1 h-[80%]" src="{{asset('assets/images/landingimage5.png')}}" alt="">
                </div>
            </div>
            <div class="w-full flex justify-center absolute sm:mx-auto inset-x-0 sm:mt-10 md:-mt-[20px] xl:-mt-[4px]">
                <div class="rounded-2xl shadow-black-900 md:absolute md:bg-white sm:bg-slate-100 md:h-[150px] md:w-[500px] lg:w-[680px] xl:w-[800px] sm:h-[300px] sm:w-[380px] md:-mt-[120px] lg:-mt-[220px] xl:-mt-[350px] shadow-lg">
                    <div class="grid w-full  gap-4 md:grid-cols-4 sm:grid-cols-2 sm:gap-2 sm:justify-center md:justify-center p-10 -mt-12">
                        <a href="{{route('opd.index')}}" class="hover:text-blue-500 hover:scale-110 transition duration-300 ease-in-out">
                            <div class="py-8 text-center">
                                <h1 class="lg:text-5xl sm:text-4xl md:text-4xl font-extrabold">{{$data['totalOpd']}}</h1>
                                <p class="mt-3 lg:text-lg md:text-sm">OPD/Instansi</p>
                            </div>
                        </a>
                        <a href="{{route('bidang-urusan.index')}}" class="hover:text-blue-500 hover:scale-110 transition duration-300 ease-in-out">
                            <div class="py-8 text-center">
                                <h1 class="lg:text-5xl sm:text-4xl md:text-4xl font-extrabold">{{$data['totalData']}}</h1>
                                <p class="mt-3 lg:text-lg text-center md:text-sm">Total Bidang Urusan</p>
                            </div>
                        </a>
                        <a href="{{route('walidata.index')}}" class="hover:text-blue-500 hover:scale-110 transition duration-300 ease-in-out">
                            <div class="py-8 text-center">
                                <h1 class="lg:text-5xl sm:text-4xl md:text-4xl font-extrabold">{{$data['dataTahun2022']}}</h1>
                                <p class="mt-3 lg:text-lg md:text-xs">Total Data Terbaru</p>
                            </div>
                        </a>
                        <a href="{{route('kegiatan.index')}}" class="hover:text-blue-500 hover:scale-110 transition duration-300 ease-in-out">
                            <div class="py-8 text-center">
                                <h1 class="lg:text-5xl sm:text-4xl md:text-4xl font-extrabold">{{$data['totalKegiatan']}}</h1>
                                <p class="mt-3 lg:text-lg md:text-sm">Total Kegiatan</p>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="bg-[#0166FE] z-20 h-auto w-full py-20 rounded-[40px] justify-items-stretch sm:mt-24 md:-mt-[10px]">
            
                {{-- <h1 class="text-center text-white font-extrabold text-[49px]">Layanan </h1> --}}
            <div class="flex justify-center sm:mx-1 md:mx-14">
                <div class="grid w-full gap-3 md:grid-cols-5 sm:grid-cols-1 sm:justify-center p-10 sm:-mt-[100px] md:-mt-10">
                    <div class="col-span-2 sm:hidden lg:flex justify-center lg:-mt-28 lg:-ml-10">
                        <img class="h-[100%] mt-10" src="{{asset('assets/images/service.png')}}" alt="">
                    </div>
                    <div class="md:col-span-3 sm:col-span-1 justify-center p-6">
                        <h1 class="md:text-5xl sm:mr-24 sm:text-3xl w-full sm:text-center md:text-start mt-8 text-white font-semibold">Bingung mencari pelayanan cepat dan aman?</h1>
                        <span class="block mt-8">
                            <p class="md:text-2xl md:text-start sm:text-center sm:w-4/4 md:w-3/4 text-white/80 font-extralight">
                                Dapatkan layanan terbaik dari Website Diskominfo seputar pendaftaran, pelaporan, dan lain-lain didalam satu tempat & pastinya Lifetime Update!
                            </p>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mt-16 bg-[#0255db] p-8">
                <h1 class="text-center sm:text-3xl md:text-5xl font-semibold text-white">Publikasi</h1>
                    <p class="mt-4 md:-mx-[-140px] md:text-2xl text-center text-white/80 font-extralight">
                        Dapatkan data publikasi dari setiap OPD yang ada di Kabupaten Siak
                    </p>
            </div>
            <div class="w-full flex justify-center mx-auto bg-[#0255db]">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 sm:gap-3 md:gap-8 w-4/4 sm:mx-4 md:mx-28 md:py-10 sm:py-8">
                    @foreach ($dokumens as $dokumen)
                    <a href="{{asset('storage/assets/files/' . $dokumen->file_dokumen)}}" target=”_blank”>
                        <div class="bg-[#2678fc] rounded-2xl h-[140px] flex p-2 overflow-hidden justify-center col-span-1 duration-150 hover:scale-105">
                            <div class="grid sm:grid-cols-1 md:grid-cols-3 sm:-gap-4 md:gap-4 h-full w-full content-center items-stretch">
                                <div class="col-span-1 overflow-hidden h-full md:w-24 bg-center">
                                    <img class="md:h-24 sm:h-10 mx-auto" src="{{asset('assets/images/folder.png')}}" alt="">
                                </div>
                                <div class="md:mx-30 sm:mx-2 mt-2 col-span-2 h-full relative">
                                    <span>
                                        <h1 class="md:text-xl sm:text-md sm:leading-4 md:leading-6 sm:line-clamp-2 md:line-clamp-2 text-white font-semibold">{{$dokumen->nama_dokumen}}</h1>
                                        <p class="md:text-md sm:text-xs sm:line-clamp-1 md:line-clamp-2 text-white font-thin">{{$dokumen->deskripsi}}</p>
                                    </span>
                                </div>
                            </div>
                        </div>     
                    </a>          
                    @endforeach
                </div>
                    {{-- <div class="bg-[#2678fc] col-span-2 rounded-2xl h-[200px] duration-150 hover:scale-105"></div> --}}
                    
                </div>
                <div class="mt-16">
                    <h1 class="text-center sm:text-3xl md:text-5xl font-semibold text-white">Infografis</h1>
                        <p class="mt-4 md:-mx-[-140px] md:text-2xl text-center text-white/80 font-extralight">
                            Dapatkan data publikasi dari setiap OPD yang ada di Kabupaten Siak
                        </p>
                </div>
                <div class="w-full flex justify-center mx-0">
                    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8 w-4/4 sm:mx-4 md:mx-20 mt-10">
                        @foreach ($gambars as $gambar)
                        <article
                        class="relative overflow-hidden rounded-xl shadow transition hover:shadow-lg md:h-full sm:h-[50%]"
                        >
                        <a href="{{asset('storage/assets/files/' . $gambar->file_gambar)}}" target=”_blank”>
                        <img
                            alt="Office"
                            src="{{asset('storage/assets/images/' . $gambar->file_gambar)}}"
                            class="absolute inset-0 h-full w-full object-cover"
                        />

                        <div
                            class="relative bg-gradient-to-t from-gray-900/80 to-gray-900/50 pt-32 sm:pt-48 h-full lg:pt-64"
                        >
                            <div class="p-4 sm:p-5 md:my-0 sm:my-40 sm:-mt-[140px]">
                            <time datetime="2022-10-10" class="block text-xs text-white/90">
                                10th Oct 2022
                            </time>

                            <a href="#">
                                <h3 class="mt-0.5 sm:text-md md:text-lg text-white">
                                {{$gambar->nama_gambar}}
                                </h3>
                            </a>

                            <p class="mt-2 sm:line-clamp-2 md:line-clamp-3 sm:text-xs md:text-sm/relaxed text-white/95">
                                {{$gambar->deskripsi}}
                            </p>
                            </div>
                        </div>
                        </a>   
                        </article>   
                        @endforeach
                    </div>
                        {{-- <div class="bg-[#2678fc] col-span-2 rounded-2xl h-[200px] duration-150 hover:scale-105"></div> --}}
                        
                    </div>
            </div>
            {{-- <div class="bg-[#0365FE] z-20 h-auto w-full py-10 rounded-[40px] justify-items-stretch sm:mt-24 md:mt-[20px]"> --}}
                <div class="flex justify-center mx-14 py-10 mt-10 border-b sm:hidden">
                    <div class="grid w-full  gap-3 md:grid-cols-5 sm:grid-cols-1sm:justify-center p-10 -mt-10">
                        <div class="col-span-3 justify-center p-6">
                            <h1 class="text-5xl w-full text-start mt-8 text-black/80 font-semibold">Tentang Istana Data</h1>
                            <span class="block mt-8">
                                <p class="text-xl w-4/4 text-black/80 font-extralight">
                                    Istana Data merupakan salah satu aplikasi yang dibangun oleh Dinas Komunikasi, Informatika dan Statistik Kabupaten Siak. Dibuat dengan tujuan sebagai media untuk penyajian/penyebaran data informasi spesifik dari Data Sektoral. Aplikasi ini dikelola oleh bidang Statistik Pemerintah Kabupaten Siak yang bekerjasama dengan Organisasi Perangkat Daerah (OPD) lingkup Pemerintah Kabupaten Siak.
                                </p><br>
                                <p class="text-xl w-4/4 text-black/80 font-extralight">
                                    Diharapkan dengan adanya aplikasi Istana Data ini, bisa membantu masyarakat/akademisi/pengusaha/instansi pemerintahan dalam men-dapat-kan data yang valid serta up to date.
                                </p>
                            </span>
                        </div>
                        <div class="col-span-2 justify-center -mt-28 ml-10">
                            <img class="h-[90%] mt-20" src="{{asset('assets/images/data.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="px-6 lg:divide-y bg-gray-100 mt-10 rounded-t-[40px] lg:divide-white/20 md:px-10 lg:px-20">
                    <div class="flex flex-col items-center justify-between pt-8 pb-4 space-y-4 lg:flex-row mb-14 lg:mb-0">
                        <div class="py-5">
                            <div class="w-full space-y-6  lg:max-w-md">
                                <div class="flex flex-inline items-center space-x-6 lg:items-start">
                                    <a 
                                        {{-- href="{{ route('guest.homepage.index') }}" --}}
                                    >
                                        <img 
                                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Lambang_Kabupaten_Siak.png/800px-Lambang_Kabupaten_Siak.png" 
                                            alt="logo"
                                            class="w-[300px]"
                                        >
                                    </a>
                                    <p class="font-light text-center text-black/80 lg:text-left">
                                        Website Resmi Dinas Komunikasi dan Informatika Kabupaten Siak merupakan website yang menyajikan seputar Informasi Pembangunan di Dinas Kominkasi dan Informatika Kabupaten Siak
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-wrap items-center justify-center space-x-3 lg:justify-end lg:space-x-6 gap-y-3 lg:gap-y-0"
                        >
                            <a 
                                {{-- href="{{ route('guest.profile.index') }}" --}}
                                class="tracking-wide text-black/80 capitalize transition hover:text-opacity-80"
                            >
                                Home
                            </a>
                            <a 
                                {{-- href="{{ route('guest.publication.index') }}" --}}
                                class="tracking-wide text-black/80 capitalize transition hover:text-opacity-80"
                            >
                                Dokumen
                            </a>
                            <a 
                                {{-- href="{{ route('guest.publication.index') }}" --}}
                                class="tracking-wide text-black/80 capitalize transition hover:text-opacity-80"
                            >
                                Opd
                            </a>
                            <a 
                                {{-- href="{{ route('guest.publication.index') }}" --}}
                                class="tracking-wide text-black/80 capitalize transition hover:text-opacity-80"
                            >
                                Biadng Urusan
                            </a>
                            <a 
                                {{-- href="{{ route('guest.publication.index') }}" --}}
                                class="tracking-wide text-black/80 capitalize transition hover:text-opacity-80"
                            >
                                Kegiatan
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
