<?php

namespace App\Livewire\App\Satuan;

use App\Models\Satuan;
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
        return view('livewire.app.satuan.index',[
            'satuans' => Satuan::search($this->search)->paginate($this->perPage)
        ]);
    }
}
