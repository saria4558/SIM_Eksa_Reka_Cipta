<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::with('user')->latest()->get();
        return view('staff.data-staff.index', compact('staffs'));
    }

    public function create()
    {
        return view('staff.data-staff.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|unique:staffs,nip',
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
            'jk' => 'required|string',
            'agama' => 'nullable|string',
            'jabatan' => 'required|string',
            'status' => 'required|in:Aktif,Tidak Aktif,Pensiun,Pindah',
            'alamat' => 'nullable|string',
            'no_hp' => 'nullable|string',
            'email_kantor' => 'nullable|email',
            'pendidikan_terakhir' => 'nullable|string',
            'foto' => 'nullable|string'
        ]);

        Staff::create($validated);

        return redirect()->route('staff.data-staff.index')->with('success', 'Data staff berhasil ditambahkan.');
    }

    public function show(Staff $staff)
    {
        return view('staff.data-staff.show', compact('staff'));
    }

    public function edit(Staff $staff)
    {
        return view('staff.data-staff.edit', compact('staff'));
    }

    public function update(Request $request, Staff $staff)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'nullable|string|unique:staffs,nip,' . $staff->id,
            'tempat_lahir' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
            'jk' => 'required|string',
            'agama' => 'nullable|string',
            'jabatan' => 'required|string',
            'status' => 'required|in:Aktif,Tidak Aktif,Pensiun,Pindah',
            'alamat' => 'nullable|string',
            'no_hp' => 'nullable|string',
            'email_kantor' => 'nullable|email',
            'pendidikan_terakhir' => 'nullable|string',
            'foto' => 'nullable|string'
        ]);

        $staff->update($validated);

        return redirect()->route('staff.data-staff.index')->with('success', 'Data staff berhasil diperbarui.');
    }

    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.data-staff.index')->with('success', 'Data staff berhasil dihapus.');
    }
}
