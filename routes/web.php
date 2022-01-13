<?php

use Illuminate\Support\Facades\Route;

/* Fallback route - README.md: 'A Fallback Route' */
Route::get('/{any?}', function () {
    return view('index');
})->where('any', '^(?!api\/)[\/\w\.\,-]*');
