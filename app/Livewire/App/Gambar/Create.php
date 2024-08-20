<?php

namespace App\Livewire\App\Gambar;

use App\Models\Gambar;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('layouts.dashboard')]
    
    #[Rule('required|min:2|max:40')]
    public $judul = '';
    #[Rule('required|min:2|max:200')]
    public $detail = '';
    #[Rule('required|max:10240')]
    public $file = '';
    #[Rule('required')]
    public $tahun = '';
    #[Rule('required')]
    public $tanggal = '';
    public function store(){
        // $fileName = $this->file->getClientOriginalName();  
        // $this->file->move(public_path('uploads/'), $fileName);
        $this->validate();
        Gambar::create([
            'nama_gambar' => $this->judul,
            'deskripsi' => $this->detail,
            'tahun_dokumen' => $this->tahun,
            'tgl_upload' => $this->tanggal,
            'file_gambar' => $this->uploadFile(),
            'opd_id' => auth()->user()->opd_id
        ]);

        $this->reset(['judul', 'detail', 'file', 'tahun', 'tanggal']);

        request()->session()->flash('success', 'berhasil');
    }

    public function uploadFile()
    {
        $filename = $this->getFileUploadName($this->file, 'public/assets/images/');

        $this->file->storeAs('public/assets/images/', $filename);

        return $filename;
    }

    public function getFileUploadName($filename, $storagePath)
    {
        $imageName = $filename->getClientOriginalName();

        $i = 1;

        while (file_exists(storage_path($storagePath . $imageName))) 
        {
            $imageName = pathinfo($imageName, PATHINFO_FILENAME) . '-' . $i . '.' . $filename->extension();

            $i++;
        }

        return $imageName;
    }
    public function render()
    {
        return view('livewire.app.gambar.create');
    }
}
