<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JadwalPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function jadwalMurid()
{
    $murid = Auth::user()->murid;

    $orderHari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

    $jadwal = JadwalPelajaran::with(['guru', 'mapel', 'kelas', 'ruangan'])
        ->where('kelas_id', $murid->kelas_id)
        ->get()
        ->sortBy(function ($item) use ($orderHari) {
            return array_search($item->hari, $orderHari);
        })
        ->groupBy('hari');

    return view('wali.jadwal.jadwal', compact('jadwal', 'orderHari', 'murid'));
}

public function jadwalGuru()
{
    $guru = Auth::user()->guru;

    $orderHari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];

    $jadwal = JadwalPelajaran::with(['kelas', 'mapel'])
        ->where('guru_id', $guru->id)
        ->whereIn('hari', $orderHari)
        ->get()
        ->sortBy(function ($item) use ($orderHari) {
            return array_search($item->hari, $orderHari);
        })
        ->groupBy('hari');

    return view('guru.jadwal', compact('jadwal', 'orderHari'));
}

}
