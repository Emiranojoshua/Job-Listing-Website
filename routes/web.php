<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/jobs', function () {
    return 'jobs page';
});
Route::get('/login', function () {
    return 'login page';
});
Route::get('/logout', function () {
    return 'logout page';
});
