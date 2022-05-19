<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\DashboardController as FrontendDashboardController;
use App\Http\Controllers\Frontend\GalleryController as FrontendGalleryController;
use App\Http\Controllers\Frontend\KontakController as FrontendKontakController;
use App\Http\Controllers\Frontend\ProdukController as FrontendProdukController;
use App\Http\Controllers\Frontend\TentangController as FrontendTentangController;

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

Route::get('/', [FrontendDashboardController::class,'index'])->name('dashboard');

Route::prefix('produk')->group(function(){
    Route::get('/', [FrontendProdukController::class,'index'])->name('produk');
    Route::get('/detail-produk', [FrontendProdukController::class,'index'])->name('produk');

});

Route::get('/galery', [FrontendGalleryController::class,'index'])->name('gallery');

Route::get('/tentang', [FrontendTentangController::class,'index'])->name('tentang');

Route::get('/kontak', [FrontendKontakController::class,'index'])->name('kontak');

Route::middleware(['auth'])->group(function () {
    Route::prefix('administrator')->group(function () {
        Route::get('/',[HomeController::class,'index'])->name('home');

        Route::resource('/profile',UserController::class);

        Route::resource('/produk',ProdukController::class);

        Route::resource('/gallery',GalleryController::class);

        Route::resource('/dashboard',DashboardController::class);

        Route::resource('/feedback',FeedbackController::class);

    });
});



// Route::resource('riwayat','RiwayatController');

// Route::resource('admin', 'UsersController')
//     ->middleware('auth');
// Route::group(['middleware' => 'auth'], function () {

// });

require __DIR__.'/auth.php';
