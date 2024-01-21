<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/faq', 'HomeController@faq')->name('home.faq');
    Route::get('/gallery', 'HomeController@gallery')->name('home.gallery');
    Route::get('/about', 'HomeController@about')->name('home.about');
    Route::get('/popular', 'HomeController@popular')->name('home.popular');

    Route::get('/geo', function() {
        return view('func.geo');
    })->name('func.geo');

    Route::get('/perjalanan', function() {
        return view('func.menuPerjalanan');
    })->name('func.menuPerjalanan');

    Route::get('/pesawat', function() {
        return view('func.pesawat');
    })->name('func.pesawat');

    Route::get('/shuttle', function() {
        return view('func.travel');
    })->name('func.travel');

    Route::get('/kereta', function() {
        return view('func.kereta');
    })->name('func.kereta');

    Route::get('/bus', function() {
        return view('func.bus');
    })->name('func.bus');

    Route::get('/shop', function() {
        return view('func.shop');
    })->name('func.shop');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});