<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="h-auto w-auto mx-20 sm:w-[320px] sm:mx-auto md:w-[680px] md:mx-auto xl:w-[1200px] lg:w-[800px] lg:mx-auto rounded-2xl bg-[#FAFAFA] mt-28 p-10 sm:p-2">
        <section class="">
            {{-- @dd($items) --}}
            <div class="xl:max-w-screen-xl lg:max-w-screen-lg p-2 mx-auto lg:px-10">
                <!-- Start coding here -->
                <h1 class="text-3xl py-2 font-bold text-black/80">Statistik Rumah Ibadah</h1>
                <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                    <div wire:ignore  class="flex flex-wrap p-12">
                        <canvas id="statistikChart"></canvas>
                    </div>                    
                    <div class="flex items-center justify-between d p-4">
                        <div class="flex">
                            <div class="relative w-full">
                                <div class="flex space-x-3">
                                    <div class="flex space-x-3 items-center">
                                        <label class="w-40 text-sm font-medium text-gray-900">Tanggal :</label>
                                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " type="month" wire:model.live="start_date" id="start_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <div class="flex space-x-3 items-center">
                                <label class="w-40 text-sm font-medium text-gray-900">Kecamatan :</label>
                                <select 
                                wire:model.live = 'kecamatan'
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option value="">Semua Kecamatan</option>
                                    @foreach($kecamatans as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
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
                                    {{-- <th scope="col" class="px-4 py-3">Kode Daerah</th> --}}
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
                                        {{-- <td class="px-4 py-3 text-blue-500"><span class="bg-[#0365FE]/20 text-sm leading-8 text-[#0365FE] font-medium p-1 rounded-2xl px-4">{{$item->kode_daerah}}</span></td> --}}
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
                        {{$religions->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Pastikan skrip dijalankan setelah halaman dimuat
        var ctx = document.getElementById('statistikChart').getContext('2d');
        var statistikChart;
    
        function renderChart(data) {
            var kecamatan = Object.keys(data); // Nama kecamatan
            var totalMesjid = kecamatan.map(k => data[k].total_mesjid);
            var totalGerejaKristen = kecamatan.map(k => data[k].total_gereja_kristen);
            var totalGerejaKhatolik = kecamatan.map(k => data[k].total_gereja_khatolik);
            var totalPura = kecamatan.map(k => data[k].total_pura);
            var totalWihara = kecamatan.map(k => data[k].total_wihara);
            var totalKlenteng = kecamatan.map(k => data[k].total_klenteng);
            var totalRumahTahfiz = kecamatan.map(k => data[k].total_rumah_tahfiz);
            var totalKapel= kecamatan.map(k => data[k].total_kapel);
            var totalBalaiBasarah= kecamatan.map(k => data[k].total_balai_basarah);
            var totalSurau= kecamatan.map(k => data[k].total_surau);
    
            if (statistikChart) {
                statistikChart.destroy(); // Hapus chart lama sebelum render ulang
            }
    
            statistikChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: kecamatan,
                    datasets: [
                        {
                            label: 'Masjid',
                            data: totalMesjid,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Gereja Kristen',
                            data: totalGerejaKristen,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Gereja Khatolik',
                            data: totalGerejaKhatolik,
                            backgroundColor: 'rgba(255, 39, 82, 0.2)',
                            borderColor: 'rgba(255, 39, 82, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Pura',
                            data: totalPura,
                            backgroundColor: 'rgba(255, 205, 86, 0.2)',
                            borderColor: 'rgba(255, 205, 86, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Wihara',
                            data: totalWihara,
                            backgroundColor: 'rgba(201, 203, 207, 0.2)',
                            borderColor: 'rgba(201, 203, 207, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Klenteng',
                            data: totalKlenteng,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Rumah Tahfiz',
                            data: totalRumahTahfiz,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Kapel',
                            data: totalKapel,
                            backgroundColor: 'rgba(113, 82, 155, 0.2)',
                            borderColor: 'rgba(113, 82, 155, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Balai Basarah',
                            data: totalBalaiBasarah,
                            backgroundColor: 'rgba(83, 182, 155, 0.2)',
                            borderColor: 'rgba(83, 182, 155, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Surau',
                            data: totalSurau,
                            backgroundColor: 'rgba(283, 92, 155, 0.2)',
                            borderColor: 'rgba(283, 92, 155, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    
        // Render chart pertama kali dengan data dari backend
        renderChart(@json($statistikPerKecamatan->toArray()));
    
        // Update chart setiap kali bulan diubah
        Livewire.on('updatedStatistikPerKecamatan', data => {
            renderChart(data);
        });
    </script>
    {{-- <script>
        document.addEventListener('livewire:load', function () {
            var ctx = document.getElementById('statistikChart').getContext('2d');
            var statistikChart;
    
            function renderChart(data) {
                var kecamatan = Object.keys(data); // Nama kecamatan
            var totalMesjid = kecamatan.map(k => data[k].total_mesjid);
            var totalGerejaKristen = kecamatan.map(k => data[k].total_gereja_kristen);
            var totalGerejaKhatolik = kecamatan.map(k => data[k].total_gereja_khatolik);
            var totalPura = kecamatan.map(k => data[k].total_pura);
            var totalWihara = kecamatan.map(k => data[k].total_wihara);
            var totalKlenteng = kecamatan.map(k => data[k].total_klenteng);
            var totalRumahTahfiz = kecamatan.map(k => data[k].total_rumah_tahfiz);
            var totalKapel= kecamatan.map(k => data[k].total_kapel);
            var totalBalaiBasarah= kecamatan.map(k => data[k].total_balai_basarah);
            var totalSurau= kecamatan.map(k => data[k].total_surau);
    
                if (statistikChart) {
                    statistikChart.destroy(); // Hapus chart lama sebelum render ulang
                }
    
                statistikChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: kecamatan,
                        datasets: [
                            {
                            label: 'Masjid',
                            data: totalMesjid,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Gereja Kristen',
                            data: totalGerejaKristen,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Gereja Khatolik',
                            data: totalGerejaKhatolik,
                            backgroundColor: 'rgba(255, 39, 82, 0.2)',
                            borderColor: 'rgba(255, 39, 82, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Pura',
                            data: totalPura,
                            backgroundColor: 'rgba(255, 205, 86, 0.2)',
                            borderColor: 'rgba(255, 205, 86, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Wihara',
                            data: totalWihara,
                            backgroundColor: 'rgba(201, 203, 207, 0.2)',
                            borderColor: 'rgba(201, 203, 207, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Klenteng',
                            data: totalKlenteng,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Rumah Tahfiz',
                            data: totalRumahTahfiz,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Kapel',
                            data: totalKapel,
                            backgroundColor: 'rgba(113, 82, 155, 0.2)',
                            borderColor: 'rgba(113, 82, 155, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Balai Basarah',
                            data: totalBalaiBasarah,
                            backgroundColor: 'rgba(83, 182, 155, 0.2)',
                            borderColor: 'rgba(83, 182, 155, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Surau',
                            data: totalSurau,
                            backgroundColor: 'rgba(283, 92, 155, 0.2)',
                            borderColor: 'rgba(283, 92, 155, 1)',
                            borderWidth: 1
                        }
                        ]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }
    
            // Render chart pertama kali dengan data dari backend
            renderChart(@json($statistikPerKecamatan->toArray()));
    
            // Update chart setiap kali bulan atau kampung diubah
            Livewire.on('updatedStatistikPerKecamatan', data => {
                renderChart(data);
            });
        });
    </script> --}}
</div>