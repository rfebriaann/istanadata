<section class="p-3 mt-0 fixed w-full px-0 left-0 z-10 top-0 mx-auto">
    <nav class="bg-[#0166FE] z-10 sm-l:bg-red-500 xl:px-2 mx-20 sm:w-[370px] sm:mx-auto lg:w-[900px] lg:mx-auto md:w-[730px] xl:w-auto xl:mx-20 md:rounded-full border-2 sm:rounded-3xl shadow-lg">
        <div class="xl:max-w-screen-xl lg:max-w-screen-lg  sm:max-w-screen-sm md:max-w-screen-md sm-l:max-w-screen-sm-l sm:mx-2 lg:mx-10 flex mx-10 flex-wrap items-center justify-between p-4">
        <a href="{{route('home')}}" class="flex items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Lambang_Kabupaten_Siak.png/800px-Lambang_Kabupaten_Siak.png" class="h-10 mr-3" alt="Flowbite Logo" />
            <span class="self-center text-2xl text-white font-semibold whitespace-nowrap dark:text-white">Istana Data</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex bg-white items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-full md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-200 dark:focus:ring-gray-600 " aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4  rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 ">
                <x-nav-link href="/">Home</x-nav-link>
                <x-nav-link href="/dokumens">Dokumen</x-nav-link>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Data <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
                <div id="dropdownNavbar" class="z-10 hidden font-normal bg-[#0255DB] divide-y divide-gray-100 rounded-lg shadow w-44">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li>
                        <a href="{{route('opd.index')}}" class="block px-4 py-2 hover:bg-[#0365FE] text-white">Opd</a>
                        </li>
                        <li>
                        <a href="{{route('ikkp.index')}}" class="block px-4 py-2 hover:bg-[#0365FE] text-white">IKKP</a>
                        </li>
                        <li>
                        <a href="{{route('sp2kp.index')}}" class="block px-4 py-2 hover:bg-[#0365FE] text-white">SP2KP</a>
                        </li>
                        <li>
                        <a href="{{route('bidang-urusan.index')}}" class="block px-4 py-2 hover:bg-[#0365FE] et text-white">Bidang Urusan</a>
                        </li>
                        <li>
                        <a href="{{route('walidata.index')}}" class="block px-4 py-2 hover:bg-[#0365FE] text-white">Data</a>
                        </li>
                        <li>
                        <a href="{{route('kegiatan.index')}}" class="block px-4 py-2 hover:bg-[#0365FE] text-white">Kegiatan</a>
                        </li>
                        <li>
                        <a href="{{route('komoditas.index')}}" class="block px-4 py-2 hover:bg-[#0365FE] text-white">Komoditas</a>
                        </li>
                    </ul>
                </div>
                {{-- <x-nav-link href="/create">Tambah Dokumen</x-nav-link> --}}
                <x-nav-link href="/masuk" class="hover:bg-[#3180ff] transition duration-200 p-2 px-6 py-2 rounded-2xl text-white">Login</x-nav-link>
                {{-- <x-nav-link href="/datafiles">Data</x-nav-link> --}}
            </ul>
        </div>
        </div>
    </nav>
</section>