<?php

namespace App\Livewire\Guest\Opd;

use App\Models\Opd;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;

    public function render()
    {
        return view('livewire.guest.opd.index', 
        [
            'opds' => Opd::search($this->search)->paginate($this->perPage)
        ]
    );
    }
}
