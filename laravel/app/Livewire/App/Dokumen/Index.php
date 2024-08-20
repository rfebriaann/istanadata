<?php

namespace App\Livewire\App\Dokumen;

use Livewire\Component;
use App\Models\Dokumen;
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
        return view('livewire.app.dokumen.index', [
            'dokumens' => Dokumen::where('opd_id', auth()->user()->opd_id)->search($this->search)->paginate($this->perPage)
        ]);
    }
}
