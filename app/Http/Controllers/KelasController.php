<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JadwalPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    public function kelasDiampu()
    {
        $guru = Auth::user()->guru;

        // ambil semua jadwal yang diampu guru ini
        $kelasDiampu = JadwalPelajaran::with(['mapel', 'kelas'])
            ->where('guru_id', $guru->id)
            ->get()
            // supaya tidak dobel, karena jadwal bisa ada jam berbeda tapi mapel & kelas sama
            ->unique(function ($item) {
                return $item->kelas_id . '-' . $item->mapel_id;
            });

        return view('guru.kelas.kelas', compact('kelasDiampu', 'guru'));
    }

}
