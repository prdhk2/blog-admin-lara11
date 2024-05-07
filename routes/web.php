<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('landing_page/home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('landing_page/blog', ['title' => 'Blog']);
});

Route::get('/about', function () {
    return view('landing_page/about', ['name' => 'Pradhika Setyawan', 'title' => 'About']);
});

Route::get('/contact', function () {
    return view('landing_page/contact', ['title' => 'Contact']);
});

Route::get('/userDetails', function () {
    return view('landing_page/contact', ['title' => 'Contact']);
});

Route::get('/webSetting', function () {
    return view('landing_page/contact', ['title' => 'Contact']);
});

Route::get('/signOut', function () {
    return view('landing_page/contact', ['title' => 'Contact']);
});

Route::get('/myChart', function () {
    return view('landing_page/myChart', ['title' => 'Dashboard']);
});

Route::get('/dashboard', function () {
    return view('admin/dashboard', ['title' => 'Dashboard']);
});

