<?php

namespace App\Livewire\Guest\Opd;

use App\Http\Resources\OpdResource;
use App\Models\Opd;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 10;

    public function show(){
        $opds = Opd::all();
        dump($opds);
        return new OpdResource($opds);
    }

    public function render()
    {
        return view('livewire.guest.opd.index', 
        [
            'opds' => Opd::search($this->search)->paginate($this->perPage),
        ]
    );
    }
}
