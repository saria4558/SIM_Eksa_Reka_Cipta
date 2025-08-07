<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MuridController extends Controller
{
    public function index()
    {
        $murids = Murid::orderBy('kelas')->get();
        return view('staff.data-murid.index', compact('murids'));
    }

    public function create()
    {
        return view('staff.data-murid.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'nis' => 'required|unique:murids,nis',
            'nisn' => 'required|unique:murids,nisn',
            'nama' => 'required|string|max:255',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'kelas' => 'required|string',
            'jurusan' => 'required|string',
            'tahun_masuk' => 'required|digits:4|integer|min:2000',
            'status' => 'required|in:aktif,alumni,pindah,dikeluarkan',
            // Orang Tua
            'nama_ayah' => 'nullable|string|max:255',
            'nama_ibu' => 'nullable|string|max:255',
            'pekerjaan_ayah' => 'nullable|string|max:255',
            'pekerjaan_ibu' => 'nullable|string|max:255',
            'telepon_ortu' => 'nullable|string|max:20',
            'alamat_ortu' => 'nullable|string',
            // Wali
            'nama_wali' => 'nullable|string|max:255',
            'hubungan_wali' => 'nullable|string|max:100',
            'pekerjaan_wali' => 'nullable|string|max:255',
            // Data Lain
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'no_kip' => 'nullable|string|max:100',
            'golongan_darah' => 'nullable|string|max:3',
            'catatan_kesehatan' => 'nullable|string',
            'catatan_prestasi' => 'nullable|string',
            'catatan_pelanggaran' => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_murid', 'public');
        }

        Murid::create($data);

        return redirect()->route('staff.data-murid.index')->with('success', 'Data murid berhasil ditambahkan.');
    }

    public function show(Murid $murid)
    {
        return view('staff.data-murid.show', compact('murid'));
    }

    public function edit(Murid $murid)
    {
        return view('staff.data-murid.edit', compact('murid'));
    }

    public function update(Request $request, Murid $murid)
    {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'nis' => 'required|string|max:20|unique:murids,nis,' . $murid->id,
            'nisn' => 'required|string|max:20|unique:murids,nisn,' . $murid->id,
            'nama' => 'required|string|max:255',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'agama' => 'required|string',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'kelas' => 'required|string',
            'jurusan' => 'required|string',
            'tahun_masuk' => 'required|digits:4|integer|min:2000',
            'status' => 'required|in:aktif,alumni,pindah,dikeluarkan',
            // Orang Tua
            'nama_ayah' => 'nullable|string|max:255',
            'nama_ibu' => 'nullable|string|max:255',
            'pekerjaan_ayah' => 'nullable|string|max:255',
            'pekerjaan_ibu' => 'nullable|string|max:255',
            'telepon_ortu' => 'nullable|string|max:20',
            'alamat_ortu' => 'nullable|string',
            // Wali
            'nama_wali' => 'nullable|string|max:255',
            'hubungan_wali' => 'nullable|string|max:100',
            'pekerjaan_wali' => 'nullable|string|max:255',
            // Data Lain
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'no_kip' => 'nullable|string|max:100',
            'golongan_darah' => 'nullable|string|max:3',
            'catatan_kesehatan' => 'nullable|string',
            'catatan_prestasi' => 'nullable|string',
            'catatan_pelanggaran' => 'nullable|string',
        ]);

        if ($request->hasFile('foto')) {
            if ($murid->foto) {
                Storage::disk('public')->delete($murid->foto);
            }
            $data['foto'] = $request->file('foto')->store('foto_murid', 'public');
        }

        $murid->update($data);

        return redirect()->route('staff.data-murid.index')->with('success', 'Data murid berhasil diperbarui.');
    }

    public function destroy(Murid $murid)
    {
        if ($murid->foto) {
            Storage::disk('public')->delete($murid->foto);
        }
        $murid->delete();

        return redirect()->route('staff.data-murid.index')->with('success', 'Data murid berhasil dihapus.');
    }
}
