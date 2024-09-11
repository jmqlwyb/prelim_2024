<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});
Route::get('/item', function () {
    return view('page.item');
});
Route::get('/picture', function () {
    return view('page.picture');
});
