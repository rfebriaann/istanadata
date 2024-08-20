<?php

namespace App\Http\Controllers\Api;

//import Model "Post"

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\DokumenResource;
use App\Models\Dokumen;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $dokumens = Dokumen::latest()->paginate(5);
        return new DokumenResource(true, 'List Data Posts', $dokumens);
    }
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'judul'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detail'     => 'required',
            'tahun'   => 'required',
            'tanggal'   => 'required',
            'tgl_upload'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        $post = Dokumen::create([
            'nama_dokumen' => $this->image,
            'deskripsi' => $this->detail,
            'tahun_dokumen' => $this->tahun,
            'tgl_upload' => $this->tanggal,
            'file_dokumen' => $this->uploadFile(),
            'opd_id' => auth()->user()->opd_id
        ]);

        //return response
        return new DokumenResource(true, 'Data Post Berhasil Ditambahkan!', $post);
    }
}