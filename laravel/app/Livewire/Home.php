<?php

namespace App\Livewire;

use App\Models\BidangUrusan;
use App\Models\DataWalidata;
use App\Models\Dokumen;
use App\Models\Gambar;
use App\Models\Indikator;
use App\Models\Opd;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use PhpParser\JsonDecoder;

class Home extends Component
{
    #[Title('Home')]
    
    public function render()
    {
        $opd = Opd::all();
        $bidangUrusan = BidangUrusan::all();
        $indikator = Indikator::all();
        $subkegiatan = DataWalidata::all();
        $totalIndikator = count($indikator);

        $data = [
            'totalData' => count($bidangUrusan),
            'dataTahun2022' => count($subkegiatan),
            'totalOpd' => count($opd),
            'totalKegiatan' => $totalIndikator
        ];
        return view('livewire.home', [
            'data' => $data,
            'dokumens' => Dokumen::paginate(9),
            'gambars' => Gambar::paginate(9)
        ]);
    }
}
