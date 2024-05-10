<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('public-view/home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('public-view/blog', ['title' => 'Blog']);
});

Route::get('/product', function () {
    return view('public-view/product', ['name' => 'Pradhika Setyawan', 'title' => 'About']);
});

Route::get('/contact', function () {
    return view('public-view/contact', ['title' => 'Contact']);
});

Route::get('/userDetails', function () {
    return view('public-view/user-profile', ['title' => 'Contact']);
});

Route::get('/webSetting', function () {
    return view('public-view/web-setting', ['title' => 'Contact']);
});

Route::get('/signOut', function () {
    return view('public-view/contact', ['title' => 'Contact']);
});

Route::get('/shoppingCart', function () {
    return view('public-view/shopping-cart', ['title' => 'Dashboard']);
});

Route::get('/dashboard', function () {
    return view('admin/dashboard', ['title' => 'Dashboard']);
});

Route::resource('admin.dashboard', \App\Http\Controllers\ProductController::class);

