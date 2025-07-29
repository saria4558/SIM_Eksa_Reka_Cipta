<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk dashboard staff
Route::get('/staff/dashboard', function () {return view('staff.dashboard');});
Route::get('/staff/data-siswa', function () {return view('staff.data-murid.index');});
Route::get('/staff/data-guru', function () {return view('staff.data-guru.index');});
Route::get('/staff/data-mapel', function () {return view('staff.mata-pelajaran.index');});
Route::get('/staff/jadwal-pelajaran', function () {return view('staff.jadwal-pelajaran.index');});

// wali
Route::get('/wali/dashboard', function () {
    return view('wali.dashboard.dashboard');
});