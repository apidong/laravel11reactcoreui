<?php

use Illuminate\Support\Facades\Route;

Route::get('/{any}', function () {
    return view('welcome'); // Pastikan view ini memuat React
})->where('any', '.*');
