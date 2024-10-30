<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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
    Route::post('/jobs', 'store')
        ->middleware('auth');
    Route::get('/jobs/create', 'create')
        ->middleware('auth');
    Route::get('/jobs/{job}/edit', 'edit')
        ->middleware(['auth', 'can:edit,job']);
    Route::get('/jobs/{job}', 'show');
    Route::patch('/jobs/{job}', 'update')
        ->middleware(['auth', 'can:edit,job']);
    Route::delete('/jobs/{job}', 'destroy')
        ->middleware(['auth', 'can:edit,job']);
});

// Route::resource('jobs', JobsController::class);


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
