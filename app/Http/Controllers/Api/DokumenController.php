<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DokumenResource;
use App\Models\Dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    //
    public function index()
    {
        $dokumens = Dokumen::all();
        return new DokumenResource(true, 'List Dokumen', $dokumens);
    }
    public function show($id)
    {
        //find post by ID
        $dokumen = Dokumen::find($id);

        //return single dokumen as a resource
        return new DokumenResource(true, 'Detail Dokumen', $dokumen);
    }
}
