<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk dashboard staff
Route::middleware('role:staff')->group(function () {
    Route::get('/staff/dashboard', function () {return view('staff.dashboard');})->name('staff.dashboard');
    //Route::resource('staff/data-murid', MuridController::class)->names('staff.data-murid');

    Route::get('/staff/data-murid', function () {return view('staff.data-murid.index');})->name('staff.data-murid.index');
    Route::get('/staff/data-guru', function () {return view('staff.data-guru.index');})->name('staff.data-guru.index');
    Route::get('/staff/data-mapel', function () {return view('staff.mata-pelajaran.index');})->name('staff.mata-pelajaran.index');
    Route::get('/staff/jadwal-pelajaran', function () {return view('staff.jadwal-pelajaran.index');})->name('staff.jadwal-pelajaran.index');
    Route::get('/staff/tagihan', function () {return view('staff.tagihan.index');})->name('staff.tagihan.index');
    Route::get('/staff/surat', function () {return view('staff.surat.index');})->name('staff.surat.index');
    Route::get('/staff/ijazah', function () {return view('staff.ijazah.index');})->name('staff.ijazah.index');
    Route::get('/staff/inventaris', function () {return view('staff.inventaris.index');})->name('staff.inventaris.index');
    Route::get('/staff/absen', function () {return view('staff.presensi.index');})->name('staff.presensi.index');
    Route::get('/staff/profil', function () {return view('staff.profil.index');})->name('staff.profil.index');
});

// wali
Route::middleware('role:murid')->group(function () {
    Route::get('/wali/dashboard', function () {
        return view('wali.dashboard.dashboard');
    })->name('wali.dashboard.dashboard');

    Route::get('/wali/jadwal', function () {
        return view('wali.jadwal.jadwal');
    })->name('wali.jadwal.jadwal');

    Route::get('/wali/mapel', function () {
        return view('wali.mapel.mapel');
    })->name('wali.mapel.mapel');

    Route::get('/wali/presensi', function () {
        return view('wali.presensi.presensi');
    })->name('wali.presensi.presensi');

    Route::get('/wali/profil', function () {
        return view('wali.profil.profil');
    })->name('wali.profil.profil');

    Route::get('/wali/tagihan', function () {
        return view('wali.tagihan.tagihan');
    })->name('wali.tagihan.tagihan');
});

// guru
Route::middleware('role:guru')->group(function () {
    Route::get('/guru/dashboard', function () {
        return view('guru.dashboard.dashboard');
    })->name('guru.dashboard.dashboard');

    Route::get('/guru/jadwal', function () {
        return view('guru.jadwal.jadwal');
    })->name('guru.jadwal.jadwal');

    Route::get('/guru/kelas', function () {
        return view('guru.kelas.kelas');
    })->name('guru.kelas.kelas');

    Route::get('/guru/presensi', function () {
        return view('guru.presensi.presensi');
    })->name('guru.presensi.presensi');

    // Route::get('/guru/profil', function () {
    //     return view('guru.profil.profil');
    // })->name('guru.profil.profil');

    Route::get('/guru/profil', [GuruController::class, 'profil'])->name('guru.profil.profil');
    Route::post('/guru/update-umum', [GuruController::class, 'updateUmum'])->name('guru.update.umum');
    Route::post('/guru/update-pribadi', [GuruController::class, 'updatePribadi'])->name('guru.update.pribadi');
});

// login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
