<?php

namespace App\Livewire\App\User;

use App\Models\Opd;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Edit extends Component
{
    use LivewireAlert;
    #[Layout('layouts.dashboard')]

    public $id;
    #[Rule('required|min:2|max:100')]
    public $nama = '';
    #[Rule('required|email')]
    public $email = '';
    #[Rule('required|min:6')]
    public $password = '';
    #[Rule('nullable')]
    public $opd_id = null;

    public function mount($id)
    {
        //get post
        $user = User::find($id);

        $this->id   = $user->id;
        $this->nama    = $user->nama;
        $this->email  = $user->email;
        $this->password  = $user->password;
        $this->opd_id  = $user->opd_id;
    }

    public function update(){
        $this->validate();

        $user = User::find($this->id);

        $user->update([
            'nama' => $this->nama,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'opd_id' => $this->opd_id,
        ]);

        $this->alert('success', 'Data berhasil di update', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
        ]);

        //redirect
        // return redirect()->route('app.user.index');
    }

    public function render()
    {
        return view('livewire.app.user.edit', [
            'opds' => Opd::all()
        ]);
    }
}
