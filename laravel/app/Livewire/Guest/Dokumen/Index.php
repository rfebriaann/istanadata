<?php

namespace App\Livewire\Guest\Dokumen;

use App\Models\Dokumen;
use Livewire\Component;
use App\Models\BidangUrusan;
use Livewire\WithPagination;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $bidang = '';
    
    public function render()
    {
        return view('livewire.guest.dokumen.index', [
            'dokumens' => Dokumen::with('opd')
            ->search($this->search)
            ->when($this->bidang !== '', function($query){
                $query->where('opd_id', $this->bidang);
            })
            ->paginate($this->perPage),

            'bidangs' => BidangUrusan::all()
        ]);
    }
}
