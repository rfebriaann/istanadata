<?php

namespace App\Livewire\Guest\WaliData;

use Livewire\Component;
use App\Models\DataWalidata;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
    public function render()
    {  
        $eloqurent = DataWalidata::search($this->search)
        ->join('indikators', 'indikators.id', '=', 'data_walidatas.indikator_id')
        ->join('satuans', 'satuans.id', '=', 'indikators.satuan_id')
        ->select('data_walidatas.indikator_id','indikators.uraian_indikator as uraian_indikator', 'satuans.nama_satuan',
        DB::raw(
            '
            max(case when tahun = 2017 then data end) tahun2017,
            max(case when tahun = 2018 then data end) tahun2018,
            max(case when tahun = 2019 then data end) tahun2019,
            max(case when tahun = 2020 then data end) tahun2020,
            max(case when tahun = 2021 then data end) tahun2021,
            max(case when tahun = 2022 then data end) tahun2022
            '
            ))
        ->groupBy('data_walidatas.indikator_id')
        ->groupBy('indikators.uraian_indikator')
        ->groupBy('satuans.nama_satuan');
        // DataWalidata::select('indikator_id')->max
        return view('livewire.guest.wali-data.index', [
            // 'walidatas' => DataWalidata::selectRaw($query)
            'walidatas' => $eloqurent->paginate($this->perPage)
            
        ]);
    }
}
