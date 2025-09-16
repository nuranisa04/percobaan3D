<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/add', [MathController::class, 'add']);