<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedbackController;

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

Route::get('backend/home', function () {
    return view('welcome');
})->middleware(['auth'])->name('home');

// Route::get('/dashboard','DashboardController@index')->name('dashboard');

Route::resource('backend/produk',ProdukController::class);

Route::resource('backend/gallery',GalleryController::class);

Route::resource('backend/dashboard',DashboardController::class);

Route::resource('backend/feedback',FeedbackController::class);

// Route::resource('user','UserController');

// Route::resource('riwayat','RiwayatController');

// Route::resource('admin', 'UsersController')
//     ->middleware('auth');
// Route::group(['middleware' => 'auth'], function () {

// });

require __DIR__.'/auth.php';
