<?php

use App\Models\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::middleware('auth')->group(function () {  
    Route::get('/dashboard', [AdminPageController::class, 'index'])->name('dashboard');
    Route::prefix('admin')->group(function () {    
        Route::get('/home', [HomeController::class, 'edit'])->name('home.edit');
        Route::post('/home', [HomeController::class, 'update'])->name('home.update');
    });
});



// public
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/paket', [PageController::class, 'paket'])->name('paket');
