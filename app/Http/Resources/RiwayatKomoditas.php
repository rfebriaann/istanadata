<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RiwayatKomoditas extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'jenis_komoditas' => $this->komoditas->jenisKomoditass->map(function($jenisKomoditas) {
                return [
                    'id' => $jenisKomoditas->id,
                    'jenis_komoditas' => $jenisKomoditas->jenis_komoditas,
                ];
            }),
            'komoditas' => $this->komoditas->komoditas,
            'kecamatan' => $this->kecamatan->kecamatan ?? null,
            'satuan' => $this->satuanKomoditas->satuan,
            'harga_baru' => $this->harga_baru,
            'harga_lama' => $this->harga_lama,
            'tanggal' => $this->tanggal,
            'verifikasi' => $this->tanggal,
        ];
    }
}
