<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});







































// wali
Route::get('/wali/dashboard', function () {
    return view('wali.dashboard.dashboard');
});