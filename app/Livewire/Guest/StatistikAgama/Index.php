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
    public $filterKecamatan;

    public function mount()
    {
        $this->kampungs = Religion::distinct()->pluck('kampung'); // Ambil semua kampung yang unik dari tabel statistik
        $this->filterBulan = now()->format('m');
        $this->filterKampung = null;
        $this->filterKecamatan = 'Siak';
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

        $kampungs = Religion::select('kampung')->distinct()->pluck('kampung');
        $statistikPerKampung = $this->getStatistikPerKampung();
        $kecamatans = Religion::pluck('kecamatan')->unique();
        // dd($kecamatans);
        
        return view('livewire.guest.statistik-agama.index', [
            'religions' => $religions,
            'kecamatans' => $allKecamatan,
            'statistikPerKecamatan' => $statistikPerKecamatan,
            'kampungs' => $kampungs,
            'statistikPerKampung' => $statistikPerKampung,
            'kecamatanss' => $kecamatans
        ]);
    }

    protected function getStatistikPerKampung()
    {
        return Religion::when($this->filterKecamatan, function ($query) {
                return $query->where('kecamatan', $this->filterKecamatan);
            })
            ->get()
            ->groupBy('kampung')
            ->map(function ($items, $kampung) {
                return [
                    'total_mesjid' => $items->sum('masjid'),
                    'total_gereja_kristen' => $items->sum('gereja_kristen'),
                    'total_gereja_khatolik' => $items->sum('gereja_khatolik'),
                    'total_pura' => $items->sum('pura'),
                    'total_wihara' => $items->sum('wihara'),
                    'total_klenteng' => $items->sum('klenteng'),
                    'total_rumah_tahfiz' => $items->sum('rumah_tahfiz'),
                    'total_kapel' => $items->sum('kapel'),
                    'total_balai_basarah' => $items->sum('balai_basarah'),
                    'total_surau' => $items->sum('surau'),
                    'kecamatan' => $items->first()->kecamatan,
                ];
            });
    }

    public function updatedFilterKecamatan()
    {
        // Update data saat filterKecamatan berubah
        $this->dispatch('updatedStatistikPerKampung', detail: [
            'data' => $this->getStatistikPerKampung()
        ]);
    }
}

