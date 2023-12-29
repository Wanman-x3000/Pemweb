<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\OrderController;
Route::get('/', function () {
    return view('home.index');
});
Route::get('/subfitur/catheringMenu', function () {
    return view('subfitur.catheringMenu');
});
Route::get('/subfitur/rating', function () {
    return view('subfitur.rating');
});
Route::post('/subfitur/konfirmasi', function () {
    return view('subfitur.konfirmasi');
});
Route::get('/home/show', function () {
    return view('home.show');
});
Route::post('/', [OrderController::class, 'store'])->name('home.store');
Route::resource('resevarsis', OrderController::class);