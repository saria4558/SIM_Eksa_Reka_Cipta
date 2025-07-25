<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Staff
Route::get('/staff/dashboard', function () {return view('staff.dashboard');});
Route::get('/staff/data-siswa', function () {return view('staff.data-murid.index');});

