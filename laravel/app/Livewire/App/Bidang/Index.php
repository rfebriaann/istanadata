<?php

namespace App\Livewire\App\Bidang;

use App\Models\BidangUrusan;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;

    #[Layout('layouts.dashboard')]
    public function render()
    {
        return view('livewire.app.bidang.index', [
            'bidangurusans' => BidangUrusan::with('opd')->search($this->search)->paginate($this->perPage)
        ]);
    }
}
