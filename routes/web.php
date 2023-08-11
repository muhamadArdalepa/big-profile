<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PartnerController;


Route::get('/', function () {
    return redirect(route('home'));
});


// auth
Auth::routes([
    'register' => false
]);

// admin
Route::middleware('auth')->group(function () {  
    Route::prefix('admin')->group(function () {
        Route::get('/home', [HomeController::class, 'edit'])->name('admin.home');
        Route::post('/home', [HomeController::class, 'update'])->name('admin.home.update');
        Route::post('/info', [InfoController::class, 'update'])->name('admin.info.update');
        Route::post('/kontak', [KontakController::class, 'update'])->name('admin.kontak.update');
        Route::post('/sosmed', [KontakController::class, 'sosmed'])->name('admin.sosmed.update');
        Route::get('/paket', [PaketController::class, 'edit'])->name('admin.paket');
        Route::get('/promo', [PaketController::class, 'promo'])->name('admin.promo');
        Route::post('/paket', [PaketController::class, 'store'])->name('admin.paket.store');
        Route::delete('/paket', [PaketController::class, 'destroy'])->name('admin.paket.delete');
        Route::get('/galeri-proyek', [GaleriController::class, 'edit_proyek'])->name('admin.galeri.proyek');
        Route::get('/galeri-internal', [GaleriController::class, 'edit_internal'])->name('admin.galeri.internal');
        Route::post('/galeri', [GaleriController::class, 'store'])->name('admin.galeri.store');
        Route::delete('/galeri', [GaleriController::class, 'destroy'])->name('admin.galeri.delete');
        Route::get('/partner', [PartnerController::class, 'edit'])->name('admin.partner.edit');
        Route::post('/partner', [PartnerController::class, 'store'])->name('admin.partner.store');
        Route::delete('/partner', [PartnerController::class, 'destroy'])->name('admin.partner.delete');
        Route::get('/pesan', [PesanController::class, 'edit'])->name('admin.pesan.edit');
        Route::post('/pesan', [PesanController::class, 'store'])->name('admin.pesan.store');
        Route::delete('/pesan', [PesanController::class, 'destroy'])->name('admin.pesan.delete');
    });
});



// public
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/paket', [PaketController::class, 'index'])->name('paket');
Route::get('/galeri-proyek', [GaleriController::class, 'proyek'])->name('galeri.proyek');
Route::get('/galeri-internal', [GaleriController::class, 'internal'])->name('galeri.internal');
