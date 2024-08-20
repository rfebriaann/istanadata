<?php

namespace App\Livewire\App\Gambar;

use App\Models\Gambar;
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
        return view('livewire.app.gambar.index', [
            'gambars' => Gambar::where('opd_id', auth()->user()->opd_id)->search($this->search)->paginate($this->perPage)
        ]);
    }
    public function destroy($id){
        Gambar::destroy($id);
        session()->flash('message', 'Data berhasil dihapus!');
        return redirect()->route('gambar');
    }
}
