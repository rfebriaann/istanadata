<?php


use App\Livewire\Home;
use App\Livewire\Dokumen;
use App\Livewire\Auth\Logout;
use App\Http\Controllers\DataApi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OpdController;

Route::get('/', Home::class)->name('home');

Route::middleware('auth', 'role:Opd')->group(function() {
    // Route::get('/insertData', [Data::class, 'data.insertData']);
    Route::get('/dokumen', App\Livewire\App\Dokumen\Index::class)->name('dokumen');
    Route::get('/dokumen/edit/{id}', App\Livewire\App\Dokumen\Edit::class)->name('dokumen.edit.{id}');
    Route::get('/create-dokumen', \App\Livewire\App\Dokumen\Create::class)->name('tambah-dokumen');
    Route::get('/gambar', App\Livewire\App\Gambar\Index::class)->name('gambar');
    Route::get('/gambar/edit/{id}', App\Livewire\App\Gambar\Edit::class)->name('gambar.edit.{id}');
    Route::get('/create-gambar', \App\Livewire\App\Gambar\Create::class)->name('tambah-gambar');

    Route::get('/surat', App\Livewire\App\Surat\Index::class)->name('surat');
    Route::get('/create-surat', \App\Livewire\App\Surat\Create::class)->name('tambah-surat');
});

Route::middleware('auth', 'role:Super Admin')->group(function() {
    Route::get('/app/bidangurusan', App\Livewire\App\Bidang\Index::class)->name('bidangurusan.index');
    Route::get('/app/opd', App\Livewire\App\Opd\Index::class)->name('app.opd.index');
    Route::get('/app/kegiatan', App\Livewire\App\Kegiatan\Index::class)->name('app.kegiatan.index');
    Route::get('/app/satuan', App\Livewire\App\Satuan\Index::class)->name('app.satuan.index');
    Route::get('/app/user', App\Livewire\App\User\Index::class)->name('app.user.index');
    Route::get('/app/user/tambah-pengguna', App\Livewire\App\User\Create::class)->name('app.user.create');
    Route::get('/app/user/edit/{id}', App\Livewire\App\User\Edit::class)->name('app.user.edit.{id}');
    Route::get('/app/user/password/{id}', App\Livewire\App\User\Password::class)->name('app.user.edit-password.{id}');
    // Route::get('/insertData', [Data::class, 'data.insertData']);
});


// Route::get('/dokumen/show/{id}', [Dokumen::class, 'show'])->name('dokumen.show');
Route::get('masuk', \App\Livewire\Auth\Login::class)
            ->name('login');


Route::get('/apis', [DataApi::class, 'index'])->name('api');
// Route::get('/data', Data::class)->name('data.insertData');
// Route::get('/create', index::class)->name('dokumen.create');
Route::get('/opd', App\Livewire\Guest\Opd\index::class)->name('opd.index');
Route::get('/opdshow', [App\Livewire\Guest\Opd\index::class, 'opd.show']);
Route::get('/guest/bidangurusan', App\Livewire\Guest\BidangUrusan\index::class)->name('bidang-urusan.index');
Route::get('/walidata', App\Livewire\Guest\WaliData\index::class)->name('walidata.index');
Route::get('/kegiatan', App\Livewire\Guest\Kegiatan\index::class)->name('kegiatan.index');
Route::get('/dokumens', App\Livewire\Guest\Dokumen\index::class)->name('dokumen.index');
Route::get('/ikkp', App\Livewire\Guest\Ikkp\index::class)->name('ikkp.index');
Route::get('/sp2kp', App\Livewire\Guest\Sp2kp\index::class)->name('sp2kp.index');
Route::get('/komoditas', App\Livewire\Guest\Komoditas\index::class)->name('komoditas.index');
Route::get('/rumahibadah', App\Livewire\Guest\StatistikAgama\Index::class)->name('rumahibadah.index');


Route::get('/logout', [Logout::class, 'logout'])->name('logout');
Route::resource('/opdss', OpdController::class);


