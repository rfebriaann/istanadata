<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    #[Layout('layouts.auth')] 

    #[\Livewire\Attributes\Rule('required', 'email', )]
    public string $email = '';
    
    #[\Livewire\Attributes\Rule('required')]
    public string $password = '';

    public function login(){
        
        // dd($users->hasRole('Opd'));
        // dd($users);
        if (Auth::attempt($this->validate())){
            $users = Auth::user();
            if($users->hasRole('Super Admin')){
                return redirect()->route('app.opd.index');
            } else{
                return redirect()->route('dokumen');
            }
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
    
}
