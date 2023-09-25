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


Route::prefix('/silk-screen-printing')->group(function () {
    Route::get('/', function () {
        return view('services.silk-screen-printing');
    })->name('silk-screen-printing');

    Route::get('/hoodies', function () {
        return view('services.silkscreenproducts.hoodies');
    })->name('silk-screen-printing.hoodies');

    // Add more routes related to silk screen printing here...
});