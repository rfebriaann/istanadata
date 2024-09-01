<?php

namespace App\Livewire\Guest\Komoditas;

use App\Http\Resources\RiwayatKomoditas;
use App\Models\JenisKomoditas;
use App\Models\Kecamatan;
use App\Models\Komoditas;
use App\Models\RiwayatHargaKomoditas;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $data;
    public $dataArray = [];
    // public $kecamatanId = 1;
    public $kecamatanId = 1;
    public $kecamatanList = [];
    

    public function mount()
    {
        $this->kecamatanList = Kecamatan::all(); 
        $datas = RiwayatHargaKomoditas::with(['komoditas.jenisKomoditass', 'kecamatan', 'satuanKomoditas'])->get();
        $selisih = 0;
        foreach ($datas as $data) {
            // dd($data);
            $jenisKomoditasArray = [];
            $kecamatanArray = [];
            $selisih = $data->harga_baru - $data->harga_lama;
            foreach ($data->komoditas->jenisKomoditass as $jenisKomoditas) {
                $jenisKomoditasArray[] = [
                    'id' => $jenisKomoditas->id,
                    'jenis_komoditas' => $jenisKomoditas->jenis_komoditas,
                ];
            }
            $this->dataArray[] = [
                'id' => $data->id,
                'jenis_komoditas' => $jenisKomoditasArray,
                'komoditas' => $data->komoditas->komoditas,
                'kecamatan' =>  $data->kecamatan->kecamatan ?? null,
                'satuan' => $data->satuanKomoditas->satuan,
                'harga_baru' => $data->harga_baru,
                'harga_lama' => $data->harga_lama,
                'selisih_harga' => $selisih,
                'tanggal' => $data->tanggal,
                'verifikasi' => $data->verifikasi,
            ];
        }
    }

    public function updatedKecamatanId($value)
    {
        $this->kecamatanId = $value;
    }

    public function render()
    {
        return view('livewire.guest.komoditas.index', [
            'items' => RiwayatHargaKomoditas::with(['komoditas.jenisKomoditass', 'kecamatan', 'satuanKomoditas'])
            ->from('kis_riwayatharga_komoditas as rhk')
            ->joinSub(
                RiwayatHargaKomoditas::select('komoditas_id', DB::raw('MAX(id) as latest_id'))
                    ->where('kecamatan_id', $this->kecamatanId)
                    ->groupBy('komoditas_id'), 
                'latest_riwayat', 
                fn($join) => $join->on('rhk.id', '=', 'latest_riwayat.latest_id')
            )
            ->get(),
            // 'kecamatans' => Kecamatan::all()
        ]);
    }
}
