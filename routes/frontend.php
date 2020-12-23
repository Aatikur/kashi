<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.index');
})->name('web.index');

Route::get('/About', function () {
    return view('web.about.about');
})->name('web.about.about');

Route::get('/product', function () {
    return view('web.product.product');
})->name('web.product.product');

Route::group(['namespace' => 'Web'], function () {
    Route::get('/category','WebController@category')->name('web.category');
    Route::get('/Career','WebController@career')->name('web.career.career');
});

Route::get('/Blog', function () {
    return view('web.blog.blog');
})->name('web.blog.blog');


Route::get('/Blog-Detail', function () {
    return view('web.blog.blog-detail');
})->name('web.blog.blog-detail');


Route::get('/Testimonial', function () {
    return view('web.testimonial.testimonial');
})->name('web.testimonial.testimonial');


// Route::get('/Career', function () {
//     return view('web.career.career');
// })->name('web.career.career');


Route::get('/Contact', function () {
    return view('web.contact.contact');
})->name('web.contact.contact');
