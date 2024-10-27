<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Jobs;
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



Route::controller(JobsController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/{job}','show');
});



Route::middleware(['auth'])->group(function () {
    Route::delete('/logout', [SessionController::class, 'destroy']);
    Route::get('/logout', function () {
        return redirect('/');
    });
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);

    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});
