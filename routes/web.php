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


Route::prefix('/embroidery')->group(function () {
    Route::get('/', function () {
        return view('services.embroidery');
    })->name('embroidery');

Route::get('/bag', function () {
        return view('services.embroideryproducts.bag');
    })->name('embroidery.bag');

Route::get('/beanies', function () {
        return view('services.embroideryproducts.beanies');
    })->name('embroidery.beanies');
  
Route::get('/caps', function () {
        return view('services.embroideryproducts.caps');
    })->name('embroidery.caps');
  
      
Route::get('/hoodies', function () {
        return view('services.embroideryproducts.hoodies');
    })->name('embroidery.hoodies');
  
    Route::get('/polo', function () {
        return view('services.embroideryproducts.polo');
    })->name('embroidery.polo');
  


});


Route::prefix('/packaging')->group(function () {
    Route::get('/', function () {
        return view('services.packaging');
    })->name('packaging');

Route::get('/box', function () {
        return view('services.packagingproducts.box');
    })->name('packaging.box');

Route::get('/bag', function () {
        return view('services.packagingproducts.bag');
    })->name('packaging.bag');


});



Route::prefix('/mylar')->group(function () {
    Route::get('/', function () {
        return view('services.mylar');
    })->name('mylar');

Route::get('/standard', function () {
        return view('services.mylarproducts.standard');
    })->name('mylarproducts.standard');
Route::get('/custom', function () {
        return view('services.mylarproducts.custom');
    })->name('mylarproducts.custom');
});

Route::prefix('/glass')->group(function () {
    Route::get('/', function () {
        return view('services.glass');
    })->name('glass');

Route::get('/tubes', function () {
        return view('services.glassproducts.tubes');
    })->name('glassproducts.tubes');

Route::get('/jars', function () {
        return view('services.glassproducts.jars');
    })->name('glassproducts.jars');


});


Route::prefix('/labels')->group(function () {
    Route::get('/', function () {
        return view('services.labels');
    })->name('labels');

Route::get('/stickers', function () {
        return view('services.labelsproducts.stickers');
    })->name('labelssproducts.stickers');


});



Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');

Route::prefix('/admin/banners')->group(function () {
    Route::post('/create', 'App\Http\Controllers\BannerController@store')->name('admin.banners.store');
    Route::get('/view', 'App\Http\Controllers\BannerController@index')->name('admin.banners.index');
    Route::delete('/{id}', 'App\Http\Controllers\BannerController@destroy')->name('admin.banners.destroy'); // Add this line
    Route::get('/json', 'App\Http\Controllers\BannerController@getBannersJson')->name('admin.banners.json');

});