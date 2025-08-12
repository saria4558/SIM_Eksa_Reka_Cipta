@extends('staff.layouts.app')

@section('title', 'Dashboard - SIM-P')

@section('content')

<div class="space-y-4">
    <div>
        <label>NIP</label>
        <input type="text" name="nip" value="{{ old('nip', $guru->nip ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>NUPTK</label>
        <input type="text" name="nuptk" value="{{ old('nuptk', $guru->nuptk ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama', $guru->nama ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Jenis Kelamin</label>
        <select name="jk" class="border p-2 w-full">
            <option value="">-- Pilih --</option>
            <option value="L" {{ old('jk', $guru->jk ?? '') == 'L' ? 'selected' : '' }}>Laki-Laki</option>
            <option value="P" {{ old('jk', $guru->jk ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>
    <div>
        <label>Mapel</label>
        <input type="text" name="mapel" value="{{ old('mapel', $guru->mapel ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $guru->tempat_lahir ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $guru->tanggal_lahir ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Agama</label>
        <input type="text" name="agama" value="{{ old('agama', $guru->agama ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Alamat</label>
        <textarea name="alamat" class="border p-2 w-full">{{ old('alamat', $guru->alamat ?? '') }}</textarea>
    </div>
    <div>
        <label>No HP</label>
        <input type="text" name="no_hp" value="{{ old('no_hp', $guru->no_hp ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $guru->email ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Foto</label>
        <input type="file" name="foto" class="border p-2 w-full">
        @if(isset($guru) && $guru->foto)
            <img src="{{ asset('storage/'.$guru->foto) }}" class="h-16 mt-2">
        @endif
    </div>
    <div>
        <label>Status Kepegawaian</label>
        <input type="text" name="status_kepegawaian" value="{{ old('status_kepegawaian', $guru->status_kepegawaian ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Jabatan</label>
        <input type="text" name="jabatan" value="{{ old('jabatan', $guru->jabatan ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>TMT</label>
        <input type="date" name="tmt" value="{{ old('tmt', $guru->tmt ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Pendidikan Terakhir</label>
        <input type="text" name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir', $guru->pendidikan_terakhir ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Jurusan Pendidikan</label>
        <input type="text" name="jurusan_pendidikan" value="{{ old('jurusan_pendidikan', $guru->jurusan_pendidikan ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Sertifikasi Guru</label>
        <select name="sertifikasi_guru" class="border p-2 w-full">
            <option value="0" {{ old('sertifikasi_guru', $guru->sertifikasi_guru ?? '') == 0 ? 'selected' : '' }}>Tidak</option>
            <option value="1" {{ old('sertifikasi_guru', $guru->sertifikasi_guru ?? '') == 1 ? 'selected' : '' }}>Ya</option>
        </select>
    </div>
    <div>
        <label>No Sertifikat</label>
        <input type="text" name="no_sertifikat" value="{{ old('no_sertifikat', $guru->no_sertifikat ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Golongan</label>
        <input type="text" name="golongan" value="{{ old('golongan', $guru->golongan ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Unit Penempatan</label>
        <input type="text" name="unit_penempatan" value="{{ old('unit_penempatan', $guru->unit_penempatan ?? '') }}" class="border p-2 w-full">
    </div>
    <div>
        <label>Pengalaman Mengajar</label>
        <textarea name="pengalaman_mengajar" class="border p-2 w-full">{{ old('pengalaman_mengajar', $guru->pengalaman_mengajar ?? '') }}</textarea>
    </div>
    <div>
        <label>Pelatihan</label>
        <textarea name="pelatihan" class="border p-2 w-full">{{ old('pelatihan', $guru->pelatihan ?? '') }}</textarea>
    </div>
    <div>
        <label>Prestasi</label>
        <textarea name="prestasi" class="border p-2 w-full">{{ old('prestasi', $guru->prestasi ?? '') }}</textarea>
    </div>
    <div>
        <label>Status Aktif</label>
        <select name="status_aktif" class="border p-2 w-full">
            <option value="1" {{ old('status_aktif', $guru->status_aktif ?? '') == 1 ? 'selected' : '' }}>Aktif</option>
            <option value="0" {{ old('status_aktif', $guru->status_aktif ?? '') == 0 ? 'selected' : '' }}>Nonaktif</option>
        </select>
    </div>
</div>

@endsection
