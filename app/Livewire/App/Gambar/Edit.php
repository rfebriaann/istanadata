<?php

namespace App\Livewire\App\Gambar;

use App\Models\Gambar;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class Edit extends Component
{
    use WithFileUploads;
    #[Layout('layouts.dashboard')]
    public $id;
    #[Rule('required|min:2|max:40')]
    public $judul;
    #[Rule('required|min:2|max:200')]
    public $detail;
    public $tahun;
    public $tanggal;
    #[Rule('required|max:10240')]
    public $file;
    public $opdId;

    public function mount($id)
    {
        //get post
        $gambar = Gambar::find($id);

        $this->id   = $gambar->id;
        $this->judul    = $gambar->nama_gambar;
        $this->detail  = $gambar->deskripsi;
        $this->tahun  = $gambar->tahun_dokumen;
        $this->tanggal  = $gambar->tgl_upload;
        $this->file  = $gambar->file_gambar;
        $this->opdId = $gambar->opd_id;
    }

    public function update()
    {
        $this->validate();

        //get post
        $gambar = Gambar::find($this->id);

        //check if image
        // dd($this->file_dokumen->getClientOriginalName());
        // dd($gambar->file);
        if ($gambar->file_gambar != $this->file) {

            //store image in storage/app/public/posts
            $this->file->storeAs('public/assets/images/', $this->file->getClientOriginalName());

            //update post
            $gambar->update([
                'nama_dokumen' => $this->judul,
                'deskripsi' => $this->detail,
                'tahun_dokumen' => $this->tahun,
                'tgl_upload' => $this->tanggal,
                'file_gambar' => $this->file->getClientOriginalName(),
                'opd_id' => $this->opdId,
            ]);
        } else {
            //update post
            $gambar->update([
                'nama_dokumen' => $this->judul,
                'deskripsi' => $this->detail,
                'tahun_dokumen' => $this->tahun,
                'tgl_upload' => $this->tanggal,
                'opd_id' => $this->opdId,
            ]);
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('gambar');
    }
    
    public function render()
    {
        return view('livewire.app.gambar.edit', [
            'file_gambar' => $this->file,
        ]);
    }
}
