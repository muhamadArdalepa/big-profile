<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\PageController;
use App\Http\Controllers\Admin\PageController as AdminPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('home'));
});


// auth
Auth::routes([
    'register' => false
]);

// admin
Route::get('/dashboard', [AdminPageController::class, 'index'])->name('dashboard');



// public
Route::get('/home', [PageController::class, 'index'])->name('home');
Route::get('/paket', [PageController::class, 'paket'])->name('paket');
