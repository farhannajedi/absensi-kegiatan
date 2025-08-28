<?php

use App\Http\Controllers\PresenceController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\PresenceDetailController;
use Illuminate\Support\Facades\Route;

// routes mengarah ke halaman login saat pertama kali akses aplikasi
Route::get('/', function () {
    return redirect()->route('home');
});

// routes admin
Route::resource('presence', PresenceController::class);
Route::delete('presence-detail/{id}', [PresenceDetailController::class, 'destroy'])->name('presence-detail.destroy');
// memanggil export pdf
Route::get('presence-detail/export-pdf/{id}', [PresenceDetailController::class, 'exportPdf'])->name('presence-detail.export-pdf');

//routes publik
Route::get('absen/{slug}', [AbsenController::class, 'index'])->name('absen.index');
Route::post('absen/save/{id}', [AbsenController::class, 'save'])->name('absen.save');

// untuk menghapus tombol registernya tinggal tambah routes(['register' => false]);
Auth::routes(['reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');