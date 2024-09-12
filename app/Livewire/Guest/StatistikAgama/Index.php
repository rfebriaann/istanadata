<?php

namespace App\Livewire\Guest\StatistikAgama;
use App\Models\Religion;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $chartData = [];
    public $perPage = 10;
    public $kecamatan;
    public $start_date;
    public $filterBulan;
    public $filterKampung;
    public $kampungs;

    public function mount()
    {
        $this->kampungs = Religion::distinct()->pluck('kampung'); // Ambil semua kampung yang unik dari tabel statistik
        $this->filterBulan = now()->format('m');
        $this->filterKampung = null;
    }

    public function render()
    {
        $query = Religion::query();

        if ($this->kecamatan) {
            $query->where('kecamatan', $this->kecamatan);
        }

        if ($this->start_date) {
            $month = date('m', strtotime($this->start_date)); // Extract the month
            $query->whereMonth('bulan', '=', $month);
        }

        $religions = $query->paginate($this->perPage);
        $allKecamatan = Religion::select('kecamatan')->distinct()->pluck('kecamatan');

        $this->chartData = [
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            'datasets' => [
                [
                    'label' => 'Sales',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'data' => [65, 59, 80, 81, 56, 55, 40], // Contoh data statistik
                ]
            ],
        ];

        $statistik = Religion::Select(
                'kecamatan',
                'masjid',
                'gereja_kristen',
                'gereja_khatolik',
                'pura',
                'wihara',
                'klenteng',
                'rumah_tahfiz',
                'kapel',
                'balai_basarah',
                'surau',
            )
            // ->whereMonth('bulan', '=', $this->filterBulan)
            ->get();

        $statistikPerKecamatan = $statistik->groupBy('kecamatan')->map(function ($group) {
            return [
                'total_mesjid' => $group->sum('masjid'),
                'total_gereja_kristen' => $group->sum('gereja_kristen'),
                'total_gereja_khatolik' => $group->sum('gereja_khatolik'),
                'total_pura' => $group->sum('pura'),
                'total_wihara' => $group->sum('wihara'),
                'total_klenteng' => $group->sum('klenteng'),
                'total_rumah_tahfiz' => $group->sum('rumah_tahfiz'),
                'total_kapel' => $group->sum('kapel'),
                'total_balai_basarah' => $group->sum('balai_basarah'),
                'total_surau' => $group->sum('surau'),
            ];
        });

        // dd($statistikPerKecamatan);
        
        return view('livewire.guest.statistik-agama.index', [
            'religions' => $religions,
            'kecamatans' => $allKecamatan,
            'statistikPerKecamatan' => $statistikPerKecamatan
        ]);
    }

    protected function getStatistikPerKecamatan()
    {
        // Ambil data berdasarkan filter bulan dan kampung
        $query = Religion::whereMonth('bulan', $this->filterBulan);

        if ($this->filterKampung) {
            $query->where('kampung', $this->filterKampung);
        }

        $data = $query->get();

        return $data->groupBy('kecamatan')
            ->map(function ($group, $kecamatan) {
                return [
                    'total_mesjid' => $group->sum('masjid'),
                    'total_gereja_kristen' => $group->sum('gereja_kristen'),
                    'total_gereja_khatolik' => $group->sum('gereja_khatolik'),
                    'total_pura' => $group->sum('pura'),
                    'total_wihara' => $group->sum('wihara'),
                    'total_klenteng' => $group->sum('klenteng'),
                    'total_rumah_tahfiz' => $group->sum('rumah_tahfiz'),
                    'total_kapel' => $group->sum('kapel'),
                    'total_balai_basarah' => $group->sum('balai_basarah'),
                    'total_surau' => $group->sum('surau'),
                ];
            });
    }
}

