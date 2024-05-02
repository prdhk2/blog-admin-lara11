<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Pradhika Setyawan', 'title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/userDetails', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/webSetting', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/signOut', function () {
    return view('contact', ['title' => 'Contact']);
});
