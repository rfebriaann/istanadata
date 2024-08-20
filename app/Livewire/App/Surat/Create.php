<?php

namespace App\Livewire\App\Surat;

use App\Models\Surat;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Title('Tambah Dokumen')]
    #[Layout('layouts.dashboard')]

    #[Rule('required|min:2|max:100')]
    public $judul = '';
    #[Rule('required|min:2|max:200')]
    public $detail = '';
    #[Rule('required|max:80240')]
    public $file = '';
    #[Rule('required')]
    public $tahun = '';
    #[Rule('required')]
    public $tanggal = '';
    
    public function store(){
        $this->validate();
        Surat::create([
            'nama_surat' => $this->judul,
            'deskripsi' => $this->detail,
            'tahun' => $this->tahun,
            'tgl_upload' => $this->tanggal,
            'file' => $this->uploadFile(),
            'opd_id' => auth()->user()->opd_id
        ]);

        $this->reset(['judul', 'detail', 'file', 'tahun', 'tanggal']);

        request()->session()->flash('success', 'berhasil');
    }

    public function uploadFile()
    {
        $filename = $this->getFileUploadName($this->file, 'public/assets/files/');

        $this->file->storeAs('public/assets/files/', $filename);

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
        return view('livewire.app.surat.create');
    }
}
