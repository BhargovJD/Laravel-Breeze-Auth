<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// .....................................................

Route::get('/show-auth-user', [ShowController::class,'show_auth_user']);
Route::get('/check-auth-user', [ShowController::class,'check_auth_user']);


// Middelware
Route::get('/report', function () {
    return view('report');
})->middleware(['auth']);


// Redirect unauth user to a specific page
Route::get('/product', function () {
    return view('product');
})->name('product');







