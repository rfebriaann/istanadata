<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RiwayatKomoditas;
use App\Models\RiwayatHargaKomoditas;
use Illuminate\Http\Request;

class RiwayatKomoditasController extends Controller
{
    public function index()
    {
        // Mengambil semua data riwayat beserta relasi yang diperlukan
        $data = RiwayatHargaKomoditas::with(['komoditas.jenisKomoditass', 'kecamatan', 'satuanKomoditas'])->get();

        // Mengembalikan resource sebagai API response
        return RiwayatKomoditas::collection($data);
    }

    public function show($id)
    {
        // Mengambil satu data riwayat berdasarkan ID beserta relasi yang diperlukan
        $data = RiwayatHargaKomoditas::with(['komoditas.jenisKomoditass', 'kecamatan', 'satuanKomoditas'])->findOrFail($id);

        // Mengembalikan resource sebagai API response
        return new RiwayatKomoditas($data);
    }
}
