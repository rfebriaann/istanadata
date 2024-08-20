<?php

namespace App\Livewire\App\Kegiatan;

use Livewire\Component;
use App\Models\Indikator;
use App\Models\BidangUrusan;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
    public $bidang = '';
    #[Layout('layouts.dashboard')]
    public function render()
    {
        return view('livewire.app.kegiatan.index', [
            'kegiatans' => Indikator::with('bidangUrusan', 'satuan')
            ->search($this->search)
            ->when($this->bidang !== '', function($query){
                $query->where('bidang_urusan_id', $this->bidang);
            })
            ->paginate($this->perPage),
            'bidangs' => BidangUrusan::all()
        ]);
    }
}
