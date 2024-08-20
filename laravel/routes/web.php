<?php

use App\Livewire\Data;
use App\Livewire\Home;
use App\Livewire\Dokumen;
use App\Models\SubKegiatan;
use App\Livewire\DataFiles\Show;
use App\Livewire\App\Dokumen\Create;
use Yajra\DataTables\DataTables;
// use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\DataApi;
use App\Livewire\Auth\Logout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::middleware('auth', 'role:Opd')->group(function() {
    Route::get('/insertData', [Data::class, 'data.insertData']);
    Route::get('/dokumen', App\Livewire\App\Dokumen\Index::class)->name('dokumen');
    Route::get('/create-dokumen', \App\Livewire\App\Dokumen\Create::class)->name('tambah-dokumen');
    Route::get('/gambar', App\Livewire\App\Gambar\Index::class)->name('gambar');
    Route::get('/create-gambar', \App\Livewire\App\Gambar\Create::class)->name('tambah-gambar');
});

Route::middleware('auth', 'role:Super Admin')->group(function() {
    Route::get('/app/bidangurusan', App\Livewire\App\Bidang\Index::class)->name('bidangurusan.index');
    Route::get('/app/opd', App\Livewire\App\Opd\Index::class)->name('app.opd.index');
    Route::get('/app/kegiatan', App\Livewire\App\Kegiatan\Index::class)->name('app.kegiatan.index');
    Route::get('/app/satuan', App\Livewire\App\Satuan\Index::class)->name('app.satuan.index');
    Route::get('/insertData', [Data::class, 'data.insertData']);
    
});


Route::get('/dokumen/show/{id}', [Dokumen::class, 'show'])->name('dokumen.show');
Route::get('masuk', \App\Livewire\Auth\Login::class)
            ->name('login');


Route::get('/apis', [DataApi::class, 'index'])->name('api');
// Route::get('/data', Data::class)->name('data.insertData');
// Route::get('/create', index::class)->name('dokumen.create');
Route::get('/opd', App\Livewire\Guest\Opd\index::class)->name('opd.index');
Route::get('/bidangurusan', App\Livewire\Guest\BidangUrusan\index::class)->name('bidang-urusan.index');
Route::get('/walidata', App\Livewire\Guest\WaliData\index::class)->name('walidata.index');
Route::get('/kegiatan', App\Livewire\Guest\Kegiatan\index::class)->name('kegiatan.index');
Route::get('/dokumens', App\Livewire\Guest\Dokumen\index::class)->name('dokumen.index');


Route::get('/logout', [Logout::class, 'logout'])->name('logout');


