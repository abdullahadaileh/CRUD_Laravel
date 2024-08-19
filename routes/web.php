<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movies', MoviesController::class);
