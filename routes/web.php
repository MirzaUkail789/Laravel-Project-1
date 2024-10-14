<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');// ini menuju ke halaman walcome.blade.php
});

Route::get('/index', function () {
    return view('index');// ini menuju ke halaman index.blade.php
});

Route::get('/', function () {
    return view('login');// ini menuju ke halaman login.blade.php
});
