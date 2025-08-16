<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MuridController;
use App\Models\JadwalPelajaran;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk dashboard staff
Route::middleware('role:staff')->group(function () {
    //Route DAta Murid
    Route::get('/staff/dashboard', function () {return view('staff.dashboard');})->name('staff.dashboard');
    Route::resource('staff/data-murid', MuridController::class)
    ->names('staff.data-murid')
    ->parameters(['data-murid' => 'murid']);

    //Route Data Guru
    Route::resource('staff/data-guru', GuruController::class)
    ->names('staff.data-guru')
    ->parameters(['data-guru' => 'guru']);

    //Route Data Mapel
    Route::get('/staff/data-mapel', function () {return view('staff.mata-pelajaran.index');})->name('staff.mata-pelajaran.index');
    Route::get('/staff/jadwal-pelajaran', function () {return view('staff.jadwal-pelajaran.index');})->name('staff.jadwal-pelajaran.index');
    Route::get('/staff/tagihan', function () {return view('staff.tagihan.index');})->name('staff.tagihan.index');
    Route::get('/staff/surat', function () {return view('staff.surat.index');})->name('staff.surat.index');
    Route::get('/staff/ijazah', function () {return view('staff.ijazah.index');})->name('staff.ijazah.index');
    Route::get('/staff/inventaris', function () {return view('staff.inventaris.index');})->name('staff.inventaris.index');
    Route::get('/staff/presensi', function () {return view('staff.presensi.index');})->name('staff.presensi.index');
    Route::get('/staff/profil', function () {return view('staff.profil.index');})->name('staff.profil.index');
});

// Keepala Sekolah
// Route::middleware('role:kepsek')->group(function () {
//     Route::get('/kepsek/dashboard', function () {return view('kepsek.dashboard');})->name('dashboard.kepsek');
//     Route::get('/kepsek/data-murid', function () {return view('kepala-sekolah.data-murid.index');})->name('kepala-sekolah.data-murid.index');
//     Route::get('/kepala-sekolah/data-guru', function () {return view    ('kepala-sekolah.data-guru.index');})->name('kepala-sekolah.data-guru.index');
//     Route::get('/kepala-sekolah/data-mapel', function () {return view('kepala-sekolah.data-mapel.index');})->name('kepala-sekolah.data-mapel.index');
//     Route::get('/kepala-sekolah/jadwal-pelajaran', function () {return view('kepala-sekolah.jadwal-pelajaran.index');})->name('kepala-sekolah.jadwal-pelajaran.index');
//     Route::get('/kepala-sekolah/tagihan', function () {return view('kepala-sekolah.tagihan.index');})->name('kepala-sekolah.tagihan.index');
//     Route::get('/kepala-sekolah/surat', function () {return view('kepala-sekolah.surat.index');})->name('kepala-sekolah.surat.index');
//     Route::     get('', function () {return view('');})->name(  'kepala-sekolah.ijazah.index');
//     Route::get('/kepala-sekolah/inventaris', function () {return view('kepala-sekolah.inventaris.index');})->name('kepala-sekolah.inventaris.index');
//     Route::get('/kepala-sekolah/presensi', function () {return view('kepala-sekolah.presensi.index');})->name('kepala-sekolah.presensi.index');
//     Route::get('/kepala-sekolah/profil', function () {return view('kepala-sekolah.profil.index');})->name('kepala-sekolah.profil.index');
// });

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

    Route::get('/wali/profil', [MuridController::class, 'profil'])->name('wali.profil.profil');
    Route::post('/wali/update-umum', [MuridController::class, 'updateUmum'])->name('murid.update.umum');
    Route::put('/wali/update-personal', [MuridController::class, 'personalInfo'])->name('murid.update.personal');
    Route::post('/wali/update-parents', [MuridController::class, 'parentsInfo'])->name('murid.update.parents');
    Route::post('/wali/update-more', [MuridController::class, 'moreInfo'])->name('murid.update.more');
    Route::get('/wali/jadwal', [JadwalController::class, 'jadwalMurid'])->name('murid.jadwal');

    Route::get('/wali/tagihan', function () {
        return view('wali.tagihan.tagihan');
    })->name('wali.tagihan.tagihan');
});

// guru
Route::middleware('role:guru')->group(function () {
    Route::get('/guru/dashboard', [GuruController::class, 'headerDashboard'])->name('guru.dashboard.dashboard');
    Route::get('/guru/jadwal', [GuruController::class, 'headerJadwal'])->name('guru.jadwal.jadwal');
    Route::get('/guru/kelas', [GuruController::class, 'headerKelas'])->name('guru.kelas.kelas');
    Route::get('/guru/presensi', [GuruController::class, 'headerPresensi'])->name('guru.presensi.presensi');
    Route::get('/guru/profil', [GuruController::class, 'profil'])->name('guru.profil.profil');
    Route::post('/guru/update-umum', [GuruController::class, 'updateUmum'])->name('guru.update.umum');
    Route::post('/guru/update-pribadi', [GuruController::class, 'updatePribadi'])->name('guru.update.pribadi');
});
// login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
