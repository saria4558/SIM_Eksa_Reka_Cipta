<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk dashboard staff
Route::get('/staff/dashboard', function () {return view('staff.dashboard');});
Route::get('/staff/data-siswa', function () {return view('staff.data-murid.index');});























// wali
Route::get('/wali/dashboard', function () {
    return view('wali.dashboard.dashboard');
});
Route::get('/wali/jadwal', function () {
    return view('wali.jadwal.jadwal');
});
Route::get('/wali/mapel', function () {
    return view('wali.mapel.mapel');
});
Route::get('/wali/presensi', function () {
    return view('wali.presensi.presensi');
});
Route::get('/wali/profil', function () {
    return view('wali.profil.profil');
});
Route::get('/wali/tagihan', function () {
    return view('wali.tagihan.tagihan');
});

// guru
Route::get('/guru/dashboard', function () {
    return view('guru.dashboard.dashboard');
});
Route::get('/guru/jadwal', function () {
    return view('guru.jadwal.jadwal');
});
Route::get('/guru/kelas', function () {
    return view('guru.kelas.kelas');
});
Route::get('/guru/presensi', function () {
    return view('guru.presensi.presensi');
});
Route::get('/guru/profil', function () {
    return view('guru.profil.profil');
});