<?php

namespace App\Livewire\Guest\BidangUrusan;

use App\Models\BidangUrusan;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    public $bidang = '';
    public function render()
    {
        return view('livewire.guest.bidang-urusan.index',
        [
            'bidangurusans' => BidangUrusan::with('opd')
            ->search($this->search)
            ->when($this->bidang !== '', function($query){
                $query->where('opd_id', $this->bidang);
            })
            ->paginate($this->perPage),

            'bidangs' => BidangUrusan::all()

        ]);
    }
}