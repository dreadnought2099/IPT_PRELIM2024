<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home')->name('home');
});

Route::get('/', function () {
    return view('item')->name('items.index');
});

Route::get('/', function () {
    return view('picture')->name('pics.index');
});
