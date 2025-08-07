<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Validator;
use App\Models\Murid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class MuridController extends Controller
{
    public function profil()
    {
        $murid = Murid::with('user')->where('user_id', Auth::id())->first();
        return view('wali.profil.profil', compact('murid'));
    }

    //update data umum
    public function updateUmum(Request $request)
    {
        try {
            $murid = Murid::where('user_id', Auth::id())->first();
            $user = $murid->user;

            $request->validate([
                'username' => 'required|string|max:255|unique:users,username,' . $user->id,
                'kelas' => 'required|string|max:255',
                'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $murid->kelas = $request->kelas;
            $user->username = $request->username;

            if ($request->hasFile('foto')) {
                if ($user->foto) {
                    Storage::disk('public')->delete($user->foto);
                }

                $path = $request->file('foto')->store('user', 'public');
                $user->foto = $path;
            }

            $murid->save();
            $user->save();

            return redirect()->route('wali.profil.profil')
                ->with('success', 'Profil umum berhasil diperbarui.');
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('modal', 'general'); // ← ini bikin modal muncul
        }
    }

     //update personal info
    public function personalInfo(Request $request)
    {
        try {
            $murid = Murid::where('user_id', Auth::id())->first();
            $user = $murid->user;

            $request->validate([
                'nama'=> 'required|string|max:255',
                'nis' => 'required|string|max:10',
                'nisn' => 'required|string|max:10',
                'telepon' => 'required|string|max:20',
                'tempat_lahir' => 'required|string|max:255',
                'tanggal_lahir' => 'required|date',
                'agama' => 'required|string|max:255',
                // 'agama' => 'nullable|string|max:255',
                'jk' => 'required|string',
                'alamat' => 'required|string|max:255',
                'kelas' => 'required|string|max:255',
                'jurusan' => 'required|string|max:255',
                'tahun_masuk' => 'required|string|max:255',
                'status'=> 'required|string|max:10',
                'email' => 'required|email|unique:users,email,' . $user->id,
            ]);

            $murid->nama = $request->nama;
            $murid->nis = $request->nis;
            $murid->nisn = $request->nisn;
            $murid->telepon = $request->telepon;
            $murid->tempat_lahir =$request->tempat_lahir;
            $murid->tanggal_lahir = $request->tanggal_lahir;
            $murid->agama = $request->agama;
            $murid->jk = $request->jk;
            $murid->alamat = $request->alamat;
            $murid->kelas = $request->kelas;
            $murid->jurusan = $request->jurusan;
            $murid->tahun_masuk = $request->tahun_masuk;
            $murid->status = $request->status;
            $user->email = $request->email;

            $murid->save();
            $user->save();

            return redirect()->route('wali.profil.profil')
                ->with('success', 'Informasi Pribadi berhasil diperbarui.');
        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('modal', 'personal'); // ← ini bikin modal muncul
        }
    }


    //update personal info
    // public function personalInfo(Request $request)
    // {
    //     $murid = Murid::where('user_id', Auth::id())->first();
    //     $user = $murid->user;

    //     $request->validate([
    //         'nama'=> 'required|string|max:255',
    //         'nis' => 'required|string|max:10',
    //         'nisn' => 'required|string|max:10',
    //         'telepon' => 'required|string|max:20',
    //         'tempat_lahir' => 'required|string|max:255',
    //         'tanggal_lahir' => 'required|date',
    //         'agama' => 'required|string|max:255',
    //         // 'agama' => 'nullable|string|max:255',
    //         'jk' => 'required|string',
    //         'alamat' => 'required|string|max:255',
    //         'kelas' => 'required|string|max:255',
    //         'jurusan' => 'required|string|max:255',
    //         'tahun_masuk' => 'required|string|max:255',
    //         'status'=> 'required|string|max:10',
    //         'email' => 'required|email|unique:users,email,' . $user->id,
    //     ]);

    //     $murid->nama = $request->nama;
    //     $murid->nis = $request->nis;
    //     $murid->nisn = $request->nisn;
    //     $murid->telepon = $request->telepon;
    //     $murid->tempat_lahir =$request->tempat_lahir;
    //     $murid->tanggal_lahir = $request->tanggal_lahir;
    //     $murid->agama = $request->agama;
    //     $murid->jk = $request->jk;
    //     $murid->alamat = $request->alamat;
    //     $murid->kelas = $request->kelas;
    //     $murid->jurusan = $request->jurusan;
    //     $murid->tahun_masuk = $request->tahun_masuk;
    //     $murid->status = $request->status;
    //     $user->email = $request->email;

    //     $murid->save();
    //     $user->save();

    //     return redirect()->route('wali.profil.profil')->with('success', 'Informasi pribadi berhasil diperbarui.');
    // }
    
    //update parents info
    public function parentsInfo(Request $request)
    {
        $murid = Murid::where('user_id', Auth::id())->first();
        $request->validate([
            'nama_ayah'=> 'required|string|max:255',
            'nama_ibu' => 'required|string|max:225',
            'pekerjaan_ayah'=>'required|string|max:225',
            'pekerjaan_ibu'=> 'required|string|max:255',
            'telepon_ortu' => 'required|string|max:225',
            'alamat_ortu'=>'required|string|max:225',
        ]);

        $murid->nama_ayah = $request->nama_ayah;
        $murid->nama_ibu = $request->nama_ibu;
        $murid->pekerjaan_ayah = $request->pekerjaan_ayah;
        $murid->pekerjaan_ibu = $request->pekerjaan_ibu;
        $murid->telepon_ortu = $request->telepon_ortu;
        $murid->alamat_ortu = $request->alamat_ortu;

        $murid->save();
        return redirect()->route('wali.profil.profil')->with('success', 'Informasi pribadi berhasil diperbarui.');
    }
    //update more info

   
    public function index()
    {
        // Logic to display the list of students
        return view('staff.data-murid.index');
    }

    public function create() {
        return view('staff.data-murid.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'nis' => 'required|unique:murids,nis',
            'nisn' => 'required|unique:murids,nisn',
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:L,P',
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

        // Upload Foto jika ada
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('foto_murid', 'public');
            $data['foto'] = $fotoPath;
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

    public function update(Request $request, Murid $murid) {
        $murid->update($request->all());

        return redirect()->route('staff.data-murid.index')->with('success','Data murid berhasil diperbarui.');
    }

    public function destroy(Murid $murid) {
        $murid->delete();

        return redirect()->route('staff.data-murid.index')->with('success', 'Data murid berhasil dihapus.');
    }
}
