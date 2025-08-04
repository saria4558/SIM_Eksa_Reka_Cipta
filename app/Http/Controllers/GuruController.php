<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function profil()
    {
        $guru = Guru::with('user')->where('user_id', Auth::id())->first();
        return view('guru.profil.profil', compact('guru'));
    }

    // Update data umum
    public function updateUmum(Request $request)
    {
        $guru = Guru::where('user_id', Auth::id())->first();
        $user = $guru->user;

        $request->validate([
            'nama' => 'required|string|max:255',
            'mapel' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $guru->nama = $request->nama;
        $guru->mapel = $request->mapel;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto) {
                Storage::disk('public')->delete($user->foto);
            }

            // Simpan foto baru
            $path = $request->file('foto')->store('user', 'public');
            $user->foto = $path;
        }

        $guru->save();
        $user->save();

        return redirect()->route('guru.profil.profil')->with('success', 'Profil umum berhasil diperbarui.');
    }

    // Update informasi pribadi
    public function updatePribadi(Request $request)
    {
        $guru = Guru::where('user_id', Auth::id())->first();
        $user = $guru->user;

        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20',
            'email' => 'required|email',
            'jk' => 'required|string',
            'mapel' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->jk = $request->jk;
        $guru->mapel = $request->mapel;
        $guru->no_hp = $request->no_hp;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->alamat = $request->alamat;

        $user->email = $request->email;

        $guru->save();
        $user->save();

        return redirect()->route('guru.profil.profil')->with('success', 'Informasi pribadi berhasil diperbarui.');
    }
}