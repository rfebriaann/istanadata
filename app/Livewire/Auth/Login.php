<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;

class Login extends Component
{

    #[Layout('layouts.auth')] 

    #[Rule('required', 'email', message: 'Masukkan email')]
    public string $email = '';
    
    #[Rule('required', message: 'Masukkan password')]
    public string $password = '';

    #[Rule('required', message: 'Captcha')]
    public $recaptcha;

    public function login(){
        
        // dd($users->hasRole('Opd'));
        // dd($users);
        // if (Auth::attempt($this->validate())){
        //     $users = Auth::user();
        //     if($users->hasRole('Super Admin')){
        //         return redirect()->route('app.opd.index');
        //     } else{
        //         return redirect()->route('dokumen');
        //     }
        // }
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password'=> $this->password])) {
            $users = Auth::user();
            if($users->hasRole('Super Admin')){
                return redirect()->route('app.opd.index');
            } else{
                return redirect()->route('dokumen');
            }
        } else {
            session()->flash('error', 'Alamat Email atau Password Anda salah!.');
            return redirect()->route('login');
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
    
}
