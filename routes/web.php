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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/equipment', function () {
    return view('equipment');
})->name('equipment');
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', 'App\Http\Controllers\ContactUsController@index')->name('contact');;
Route::post('/contact', 'App\Http\Controllers\ContactUsController@sendEmail')->name('contact.send');


Route::prefix('/silk-screen-printing')->group(function () {
    Route::get('/', function () {
        return view('services.silk-screen-printing');
    })->name('silk-screen-printing');

    Route::get('/hoodies', function () {
        return view('services.silkscreenproducts.hoodies');
    })->name('silk-screen-printing.hoodies');


       Route::get('/tshirt', function () {
        return view('services.silkscreenproducts.tshirt');
    })->name('silk-screen-printing.tshirt');

  Route::get('/vest', function () {
        return view('services.silkscreenproducts.vest');
    })->name('silk-screen-printing.vest');

 Route::get('/bandana', function () {
        return view('services.silkscreenproducts.bandana');
    })->name('silk-screen-printing.bandana');

    // Add more routes related to silk screen printing here...
});


Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');

Route::prefix('/admin/banners')->group(function () {
    Route::post('/create', 'App\Http\Controllers\BannerController@store')->name('admin.banners.store');
    Route::get('/view', 'App\Http\Controllers\BannerController@index')->name('admin.banners.index');
    Route::delete('/{id}', 'App\Http\Controllers\BannerController@destroy')->name('admin.banners.destroy'); // Add this line
    Route::get('/json', 'App\Http\Controllers\BannerController@getBannersJson')->name('admin.banners.json');

});