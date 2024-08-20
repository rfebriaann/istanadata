<?php

namespace App\Livewire\App\Dokumen;

use App\Models\Dokumen;
use App\Models\Opd;
use Illuminate\Http\Request;
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
    #[Rule('required')]
    public $cover = '';
    // #[Rule('required')]
    public $file = '';
    // #[Rule('required')]
    public $csv = '';
    #[Rule('required')]
    public $tahun = '';
    // #[Rule('required')]
    // public $tanggal = '';

    public function store(){
        // $fileName = $this->file->getClientOriginalName();  
        // $this->file->move(public_path('uploads/'), $fileName);
        
        $this->validate();
        if($this->file != null && $this->csv != null){     
            Dokumen::create([
                'nama_dokumen' => $this->judul,
                'deskripsi' => $this->detail,
                'tahun_dokumen' => $this->tahun,
                'cover_dokumen' => $this->uploadFileCover(),
                'file_dokumen' =>  $this->uploadFile(),
                'file_dokumen_csv' =>  $this->uploadFileCSV(),
                'opd_id' => auth()->user()->opd_id
            ]);
        } elseif ($this->file != null) {
            Dokumen::create([
                'nama_dokumen' => $this->judul,
                'deskripsi' => $this->detail,
                'tahun_dokumen' => $this->tahun,
                'cover_dokumen' => $this->uploadFileCover(),
                'file_dokumen' =>  $this->uploadFile(),
                'file_dokumen_csv' =>  null,
                'opd_id' => auth()->user()->opd_id
            ]);
        } elseif ($this->csv != null) {
            Dokumen::create([
                'nama_dokumen' => $this->judul,
                'deskripsi' => $this->detail,
                'tahun_dokumen' => $this->tahun,
                'cover_dokumen' => $this->uploadFileCover(),
                'file_dokumen' =>  null,
                'file_dokumen_csv' =>  $this->uploadFileCSV(),
                'opd_id' => auth()->user()->opd_id
            ]);
        }

        $this->reset(['judul', 'detail', 'cover', 'file', 'csv', 'tahun']);

        request()->session()->flash('success', 'berhasil');
    }

    public function uploadFile()
    {
        $filename =  $this->getFileUploadName($this->file, 'public/assets/files/');

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

    public function uploadFileCSV()
    {
        $filename = $this->getFileUploadNameCSV($this->csv, 'public/assets/files/');

        $this->csv->storeAs('public/assets/files/', $filename);

        return $filename;
    }

    public function getFileUploadNameCSV($filename, $storagePath)
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

    public function uploadFileCover()
    {
        $filename = $this->getFileUploadNameCover($this->cover, 'public/assets/files/');

        $this->cover->storeAs('public/assets/files/', $filename);

        return $filename;
    }

    public function getFileUploadNameCover($filename, $storagePath)
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
