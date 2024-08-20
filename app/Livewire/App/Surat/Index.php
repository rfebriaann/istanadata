<?php

namespace App\Livewire\App\Surat;

use App\Models\Surat;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;
    #[Layout('layouts.dashboard')]
    public function render()
    {
        return view('livewire.app.surat.index', [
            'surats' => Surat::search($this->search)->paginate($this->perPage)
        ]);
    }
}
