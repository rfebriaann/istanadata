<?php

namespace App\Livewire\App\User;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    public $search = '';
    public $perPage = 10;
    public $data;

    
    
     #[Layout('layouts.dashboard')]

    public function destroy($id){
        $this->data = $id;
        $this->alert('warning', 'Hapus Data', [
            'text' => 'Klik tombol Hapus untuk menghapus data',
            'showConfirmButton' => true,
            'onConfirmed' => 'confirmed',
            'showCancelButton' => true,
            'onDismissed' => '',
            'cancelButtonText' => 'Batal',
            'confirmButtonText' => 'Hapus',
            'imageUrl' => Storage::url('../assets/images/alertconfirm2.png'),
            'confirmButtonColor' => "#d33",
            'cancelButtonColor' => "#3085d6",
            // 'imageWidth' => '400',
            'container' => 'rounded-full',
            'imageHeight' => '300',
            'icon' => null,
            'allowOutsideClick' => true,
            'timerProgressBar' => true,
        ]);
        // session()->flash('message', 'Data berhasil dihapus!');
        // return redirect()->route('app.user.index');
    }
    public function getListeners(){
        return [
            'confirmed'
        ];
    }
    public function confirmed()
    {
        // Get input value and do anything you want to it
        // dd($this->data);
        User::destroy($this->data);
    }

    // public function confirmed($data)
    // {
    //     $id = $data;
    //     User::destroy($id);
    // }

    public function render()
    {
        return view('livewire.app.user.index', [
            'roles' => Role::all(),
            'users' => User::search($this->search)->paginate($this->perPage)
        ]);
    }
}
