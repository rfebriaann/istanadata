<?php

namespace App\Livewire\Guest\Kegiatan;

use App\Models\BidangUrusan;
use Livewire\Component;
use App\Models\Indikator;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $bidang = '';
    public function render()
    {
        return view('livewire.guest.kegiatan.index', 
        [
            'indikators' => Indikator::with('bidangUrusan', 'satuan')
            ->search($this->search)
            ->when($this->bidang !== '', function($query){
                $query->where('bidang_urusan_id', $this->bidang);
            })
            ->paginate($this->perPage),

            'bidangs' => BidangUrusan::all()
        ]);
    }
}
