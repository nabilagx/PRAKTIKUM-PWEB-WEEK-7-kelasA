<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('awal');
// });

Route::get('/contact', [ContactController::class, 'index']);
// Route::get('/', function () {
//     return view('awal');
// });

// routes/web.php
Route::get('/', function () {
    return view('login');
});