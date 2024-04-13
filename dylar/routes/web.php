<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/odd', function () {
    return view('odd');
});

Route::get('/even', function () {
    return view('even');
});

