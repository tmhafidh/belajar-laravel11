<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about',['nama' => 'Hafidh']);
});
route::get('/blog', function() {
    return view('blog');
});
route::get('/contact', function() {
    return view('contact');
});