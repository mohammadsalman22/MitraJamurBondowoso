<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
    return view('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('backend')->group(function () {
        Route::get('/home',[HomeController::class,'index'])->name('home');

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
