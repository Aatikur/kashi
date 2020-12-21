<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
})->name('web.index');

// Route::get('/category', function () {
//     return view('web.catagory');
// })->name('web.category');

Route::get('/product', function () {
    return view('web.product');
})->name('web.product');

Route::group(['namespace' => 'Web'], function () {
    Route::get('/category','WebController@category')->name('web.category');
    
});