<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GalleryController;

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

Route::get('backend/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard','DashboardController@index')->name('dashboard');

Route::resource('backend/produk',ProdukController::class);

Route::resource('backend/gallery',GalleryController::class);

Route::resource('user','UserController');

Route::resource('metode','MetodeController');

Route::resource('riwayat','RiwayatController');

Route::resource('admin', 'UsersController')
    ->middleware('auth');
Route::group(['middleware' => 'auth'], function () {

});

require __DIR__.'/auth.php';
