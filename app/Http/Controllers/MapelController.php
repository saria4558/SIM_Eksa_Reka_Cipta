<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JadwalPelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapelController extends Controller
{
        public function mapelMurid()
        {
            $murid = Auth::user()->murid;

            $mapelKelas = JadwalPelajaran::with(['mapel', 'guru', 'kelas'])
                ->where('kelas_id', $murid->kelas_id)
                ->get()
                ->unique('mapel_id');

            return view('wali.mapel.mapel', compact('mapelKelas', 'murid'));
        }
}
