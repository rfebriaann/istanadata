<?php

namespace App\Livewire\App\User;

use App\Models\Opd;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Spatie\Permission\Models\Role;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Create extends Component
{
    use LivewireAlert;
    #[Rule('required|min:2|max:100')]
    public $nama = '';
    #[Rule('required|email')]
    public $email = '';
    #[Rule('required|min:6')]
    public $password = '';
    #[Rule('nullable')]
    public $opd_id = null;

    #[Layout('layouts.dashboard')]
// 'password'  => bcrypt($this->password)
    public function store(){
        $this->validate();
        
        $user = User::create([
                'nama'      => $this->nama,
                'email'     => $this->email,
                'password'  => bcrypt($this->password),
                'status' => "aktif",
                'opd_id' => $this->opd_id,
            ]);
        $role = Role::all();
        if($user->opd_id != null){
            $user->assignRole($role[1]);
        } else {
            $user->assignRole($role[0]);
        }
        // if(User::get()->count()==1){

        //     $role = Role::all()->first();
        //    foreach (Permission::all() as $permission) {
        //      $role->givePermissionTo($permission);
        //    };

        //    $user->assignRole('Opd');
        // }
        $this->alert('success', 'Berhasil menambahkan data', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
           ]);
        // session()->flash('message', 'Berhasil menambahkan pengguna ' . $this->nama);
        $this->reset(['nama', 'email', 'password', 'opd_id']);
        // return redirect()->route('app.user.index');
    }

    public function alert(){
        $this->alert('success', 'Berhasil menambahkan data', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
            'timerProgressBar' => true,
           ]);
    }

    public function render()
    {
        return view('livewire.app.user.create', [
            'opds' => Opd::all()
        ]);
    }
}
