<?php

namespace App\Livewire\Guest\StatistikAgama;
use App\Models\Religion;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // dd(Religion::all());
        return view('livewire.guest.statistik-agama.index', [
            'religions' => Religion::all()
        ]);
    }
}
