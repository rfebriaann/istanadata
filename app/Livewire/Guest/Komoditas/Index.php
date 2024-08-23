<?php

namespace App\Livewire\Guest\Komoditas;

use App\Models\JenisKomoditas;
use App\Models\Kecamatan;
use App\Models\RiwayatHargaKomoditas;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $data;
    public $dataArray = [];

    public function mount()
    {
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

    public function render()
    {
        return view('livewire.guest.komoditas.index', [
            'item' => $this->dataArray,
        ]);
    }
}
