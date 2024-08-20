<?php

namespace App\Livewire\App\Dokumen;

use App\Models\Dokumen;
use App\Models\Opd;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;

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
        // $fileName = $this->file->getClientOriginalName();  
        // $this->file->move(public_path('uploads/'), $fileName);
        $this->validate();
        Dokumen::create([
            'nama_dokumen' => $this->judul,
            'deskripsi' => $this->detail,
            'tahun_dokumen' => $this->tahun,
            'tgl_upload' => $this->tanggal,
            'file_dokumen' => $this->uploadFile(),
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
        return view('livewire.app.dokumen.create');
    }
}
