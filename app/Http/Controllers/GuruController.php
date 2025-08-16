<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\JadwalPelajaran;
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
    public function headerPresensi()
    {
        $guru = Guru::with('user')->where('user_id', Auth::id())->first();
        return view('guru.presensi.presensi', compact('guru'));
    }
    public function headerJadwal()
    {
        $guru = Guru::with('user')->where('user_id', Auth::id())->first();
        return view('guru.jadwal.jadwal', compact('guru'));
    }
    public function headerKelas()
    {
        $guru = Guru::with('user')->where('user_id', Auth::id())->first();
        return view('guru.kelas.kelas', compact('guru'));
    }
    public function headerDashboard()
    {
        $guru = Guru::with('user')->where('user_id', Auth::id())->first();
        return view('guru.dashboard.dashboard', compact('guru'));
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
            'nip' => 'required|string|unique:gurus,nip,' . $guru->id,
            'email' => 'required|email',
            'jk' => 'required|string',
            'mapel' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            
            'nuptk' => 'nullable|string|max:50',
            'agama' => 'nullable|string|max:20',
            'status_kepegawaian'=> 'nullable|string|max:255',
            'jabatan'=> 'nullable|string|max:255',
            'tmt' => 'nullable|date',
            'pendidikan_terakhir'=>'nullable|string|max:255',
            'jurusan_pendidikan'=>'nullable|string|max:255',
            'golongan'=>'nullable|string|max:255',
            'status_aktif'=>'nullable|string|max:255',
            'npk'=>'nullable|string|max:255',
            'nik'=>'nullable|string|max:255',
            'nrg'=>'nullable|string|max:255',
            'peg_id'=>'nullable|string|max:255',
            
        ]);

        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $user->email = $request->email;
        $guru->jk = $request->jk;
        $guru->mapel = $request->mapel;
        $guru->no_hp = $request->no_hp;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->alamat = $request->alamat;
        $guru->nuptk = $request->nuptk;
        $guru->agama = $request->agama;
        $guru->status_kepegawaian = $request->status_kepegawaian;
        $guru->jabatan = $request->jabatan;
        $guru->tmt = $request->tmt;
        $guru->pendidikan_terakhir = $request->pendidikan_terakhir;
        $guru->jurusan_pendidikan = $request->jurusan_pendidikan;
        $guru->golongan = $request->golongan;
        $guru->status_aktif = $request->status_aktif;
        $guru->npk = $request->npk;
        $guru->nik = $request->nik;
        $guru->nrg = $request->nrg;
        $guru->peg_id = $request->peg_id;

        

        $guru->save();
        $user->save();

        return redirect()->route('guru.profil.profil')->with('success', 'Informasi pribadi berhasil diperbarui.');
    }



    //perubahan dari eva

    public function index()
    {
        $gurus = Guru::orderBy('nama')->paginate(10);
        return view('staff.data-guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('staff.data-guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|unique:gurus',
            'nama' => 'required',
            'jk' => 'required|in:L,P',
            'email' => 'nullable|email',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('foto_guru', 'public');
        }

        Guru::create($request->all() + $validated);

        return redirect()->route('staff.data-guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function show(Guru $data_guru)
    {
        return view('staff.data-guru.show', ['guru' => $data_guru]);
    }

    public function edit(Guru $data_guru)
    {
        return view('staff.data-guru.edit', ['guru' => $data_guru]);
    }

    public function update(Request $request, Guru $data_guru)
    {
        $validated = $request->validate([
            'nip' => 'required|unique:gurus,nip,' . $data_guru->id,
            'nama' => 'required',
            'jk' => 'required|in:L,P',
            'email' => 'nullable|email',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($data_guru->foto) {
                Storage::disk('public')->delete($data_guru->foto);
            }
            $validated['foto'] = $request->file('foto')->store('foto_guru', 'public');
        }

        $data_guru->update($request->all() + $validated);

        return redirect()->route('staff.data-guru.index')->with('success', 'Data guru berhasil diupdate.');
    }

    public function destroy(Guru $data_guru)
    {
        if ($data_guru->foto) {
            Storage::disk('public')->delete($data_guru->foto);
        }
        $data_guru->delete();

        return redirect()->route('staff.data-guru.index')->with('success', 'Data guru berhasil dihapus.');
    }
}
