<?php

namespace App\Livewire\Guest\StatistikAgama;
use App\Models\Religion;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $kecamatan;
    public $start_date;
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

        return view('livewire.guest.statistik-agama.index', [
            'religions' => $religions,
            'kecamatans' => $allKecamatan
        ]);
    }
}
