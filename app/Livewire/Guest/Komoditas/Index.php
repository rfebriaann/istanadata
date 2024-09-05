<?php

namespace App\Livewire\Guest\Komoditas;

use App\Models\Kecamatan;
use App\Models\RiwayatHargaKomoditas;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;
    public $perPage = 15;
    public $kecamatanId = 1;
    public $start_date;

    public function render()
    {
        return view('livewire.guest.komoditas.index', [
            'items' => RiwayatHargaKomoditas::with(['komoditas.jenisKomoditass', 'kecamatan', 'satuanKomoditas'])
            ->from('kis_riwayatharga_komoditas as rhk')
            ->joinSub(
                RiwayatHargaKomoditas::select('komoditas_id', DB::raw('MAX(id) as latest_id'))
                    ->where('kecamatan_id', $this->kecamatanId)
                    ->when($this->start_date, function ($query) {
                        $query->whereDate('tanggal', '>=', $this->start_date); // Apply date filter
                    })
                    ->groupBy('komoditas_id'),
                'latest_riwayat',
                function($join) {
                    $join->on('rhk.id', '=', 'latest_riwayat.latest_id');
                }
            )
            ->paginate($this->perPage),
            'kecamatans' => Kecamatan::all()
        ]);
    }
}

// RiwayatHargaKomoditas::with(['komoditas.jenisKomoditass', 'kecamatan', 'satuanKomoditas'])
// ->from('riwayat_harga_komoditas as rhk')
// ->joinSub(
//     RiwayatHargaKomoditas::select('komoditas_id', DB::raw('MAX(id) as latest_id'))
//         ->where('kecamatan_id', $this->kecamatanId)
//         ->groupBy('komoditas_id'),
//     'latest_riwayat', 
    // function($join) { // Gunakan function closure
    //     $join->on('rhk.id', '=', 'latest_riwayat.latest_id');
    // }
// )->paginate($this->perPage);