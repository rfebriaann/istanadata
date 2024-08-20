<?php

namespace App\Livewire\App\Dokumen;

use App\Models\Dokumen;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class Edit extends Component
{
    
    use WithFileUploads;
    public $id;
    public $file_dokumen;
    public $file_dokumen_csv;
    public $cover_dokumen;
    public $tahun;
    public $tanggal;
    public $opdId;
    #[Rule('required', message: 'Masukkan Judul Post')]
    public $title;

    #[Rule('required', message: 'Masukkan Isi Post')]
    #[Rule('min:3', message: 'Isi Post Minimal 3 Karakter')]
    public $detail;

    #[Layout('layouts.dashboard')]
    public function mount($id)
    {
        //get post
        $dokumen = Dokumen::find($id);

        //assign
        $this->id   = $dokumen->id;
        $this->title    = $dokumen->nama_dokumen;
        $this->detail  = $dokumen->deskripsi;
        $this->tahun  = $dokumen->tahun_dokumen;
        // $this->tanggal  = $dokumen->tgl_upload;
        $this->cover_dokumen  = $dokumen->cover_dokumen;
        $this->file_dokumen  = $dokumen->file_dokumen;
        $this->file_dokumen_csv = $dokumen->file_dokumen_csv;
        $this->opdId = $dokumen->opd_id;
    }

    public function update()
    {
        $this->validate();

        //get post
        $dokumen = Dokumen::find($this->id);

        //check if image
        // dd($this->file_dokumen->getClientOriginalName());
        // dd($dokumen->file_dokumen);
        if ($dokumen->file_dokumen != $this->file_dokumen) {

            //store image in storage/app/public/posts
            $this->file_dokumen->storeAs('public/assets/files/', $this->file_dokumen->getClientOriginalName());

            //update post
            $dokumen->update([
                'nama_dokumen' => $this->title,
                'deskripsi' => $this->detail,
                'tahun_dokumen' => $this->tahun,
                'tgl_upload' => $this->tanggal,
                'file_dokumen' => $this->file_dokumen->getClientOriginalName(),
                'opd_id' => $this->opdId,
            ]);
        } elseif ($dokumen->file_dokumen_csv != $this->file_dokumen_csv) {
            $this->file_dokumen_csv->storeAs('public/assets/files/', $this->file_dokumen_csv->getClientOriginalName());

            $dokumen->update([
                'nama_dokumen' => $this->title,
                'deskripsi' => $this->detail,
                'tahun_dokumen' => $this->tahun,
                'tgl_upload' => $this->tanggal,
                'file_dokumen_csv' => $this->file_dokumen_csv->getClientOriginalName(),
                'opd_id' => $this->opdId,
            ]);
        } elseif ($dokumen->cover_dokumen != $this->cover_dokumen) {
            $this->cover_dokumen->storeAs('public/assets/files/', $this->cover_dokumen->getClientOriginalName());

            $dokumen->update([
                'nama_dokumen' => $this->title,
                'deskripsi' => $this->detail,
                'tahun_dokumen' => $this->tahun,
                'tgl_upload' => $this->tanggal,
                'cover_dokumen' => $this->cover_dokumen->getClientOriginalName(),
                'opd_id' => $this->opdId,
            ]);
        } else {
            //update post
            $dokumen->update([
                'nama_dokumen' => $this->title,
                'deskripsi' => $this->detail,
                'tahun_dokumen' => $this->tahun,
                'tgl_upload' => $this->tanggal,
                'opd_id' => $this->opdId,
            ]);
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('dokumen');
    }

    public function render()
    {
        return view('livewire.app.dokumen.edit', [
            'file_dokumen' => $this->file_dokumen,
        ]);
    }
}
