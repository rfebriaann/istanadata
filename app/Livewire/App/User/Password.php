<?php

namespace App\Livewire\App\User;

use App\Models\Opd;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Password extends Component
{
    #[Layout('layouts.dashboard')]

    public $id;
    #[Rule('required|min:2|max:100')]
    public $nama = '';
    #[Rule('required|email')]
    public $email = '';
    #[Rule('required|min:6')]
    public $password = '';
    #[Rule('required|min:6')]
    public $passwordconfirm = '';
    #[Rule('nullable')]
    public $opd_id = null;
    public $status = '';
    
    public function mount($id)
    {
        //get post
        $user = User::find($id);

        $this->id   = $user->id;
        $this->nama    = $user->nama;
        $this->email  = $user->email;
        $this->password  = "";
        $this->passwordconfirm  = "";
        $this->opd_id  = $user->opd_id;
    }

    public function update(){
        $this->validate();

        $user = User::find($this->id);
        if ($this->password == $this->passwordconfirm) {
            $user->update([
                'nama' => $this->nama,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'opd_id' => $this->opd_id,
            ]);
            session()->flash('message', 'Password berhasil di ubah');
            // return redirect()->route('app.user.index');
        } else {
            $this->status = "Password yang diinput tidak sama";
        }



    }

    public function render()
    {
        return view('livewire.app.user.password', [
            'opds' => Opd::all()
        ]);
    }
}
