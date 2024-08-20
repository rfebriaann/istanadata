<?php

namespace App\Livewire\App\Opd;

use App\Models\Opd;
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
        return view('livewire.app.opd.index', [
            'opds' => Opd::search($this->search)->paginate($this->perPage)
        ]);
    }
}
