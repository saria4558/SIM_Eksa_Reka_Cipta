@extends('staff.layouts.app')

@section('title', 'Detail Murid - SIM-P')

@section('content')
<div class="p-4 space-y-4">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Detail Data Murid</h1>
            <p class="text-gray-600">Informasi lengkap data siswa</p>
        </div>
        <a href="{{ route('staff.data-murid.index') }}" class="px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400">
            Kembali
        </a>
    </div>

    <div class="space-y-6">
        <!-- Card untuk Data Diri -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Data Diri</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">NIS</label>
                    <p class="mt-1 text-gray-900">{{ $murid->nis }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">NISN</label>
                    <p class="mt-1 text-gray-900">{{ $murid->nisn }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama</label>
                    <p class="mt-1 text-gray-900">{{ $murid->nama }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                    <p class="mt-1 text-gray-900">{{ $murid->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                    <p class="mt-1 text-gray-900">{{ $murid->tempat_lahir }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                    <p class="mt-1 text-gray-900">{{ $murid->tanggal_lahir ? \Carbon\Carbon::parse($murid->tanggal_lahir)->format('d-m-Y') : '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Agama</label>
                    <p class="mt-1 text-gray-900">{{ $murid->agama }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Alamat</label>
                    <p class="mt-1 text-gray-900">{{ $murid->alamat ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">No. Telepon</label>
                    <p class="mt-1 text-gray-900">{{ $murid->telepon ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <p class="mt-1 text-gray-900">{{ $murid->email ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kelas</label>
                    <p class="mt-1 text-gray-900">{{ $murid->kelas }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Jurusan</label>
                    <p class="mt-1 text-gray-900">{{ $murid->jurusan }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Tahun Masuk</label>
                    <p class="mt-1 text-gray-900">{{ $murid->tahun_masuk }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <p class="mt-1 text-gray-900">{{ ucfirst($murid->status) }}</p>
                </div>
            </div>
        </div>

        <!-- Card untuk Data Orang Tua -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Data Orang Tua</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Ayah</label>
                    <p class="mt-1 text-gray-900">{{ $murid->nama_ayah ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Ibu</label>
                    <p class="mt-1 text-gray-900">{{ $murid->nama_ibu ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Pekerjaan Ayah</label>
                    <p class="mt-1 text-gray-900">{{ $murid->pekerjaan_ayah ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Pekerjaan Ibu</label>
                    <p class="mt-1 text-gray-900">{{ $murid->pekerjaan_ibu ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">No. Telepon Orang Tua</label>
                    <p class="mt-1 text-gray-900">{{ $murid->telepon_ortu ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Alamat Orang Tua</label>
                    <p class="mt-1 text-gray-900">{{ $murid->alamat_ortu ?? '-' }}</p>
                </div>
            </div>
        </div>

        <!-- Card untuk Data Wali -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Data Wali <span class="text-sm font-normal text-gray-500">(Opsional)</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Wali</label>
                    <p class="mt-1 text-gray-900">{{ $murid->nama_wali ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Hubungan dengan Murid</label>
                    <p class="mt-1 text-gray-900">{{ $murid->hubungan_wali ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Pekerjaan Wali</label>
                    <p class="mt-1 text-gray-900">{{ $murid->pekerjaan_wali ?? '-' }}</p>
                </div>
            </div>
        </div>

        <!-- Card untuk Data Lainnya -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Data Lainnya <span class="text-sm font-normal text-gray-500">(Opsional)</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Foto Siswa</label>
                    <div class="mt-1">
                        @if($murid->foto)
                            <img src="{{ Storage::url($murid->foto) }}" alt="Foto {{ $murid->nama }}" class="h-32 w-32 object-cover rounded-md">
                        @else
                            <div class="bg-gray-500 rounded-md flex items-center justify-center w-32 h-32">
                                <i class="fas fa-user text-white text-2xl"></i>
                            </div>
                        @endif
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">No. KIP</label>
                    <p class="mt-1 text-gray-900">{{ $murid->no_kip ?? '-' }}</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Golongan Darah</label>
                    <p class="mt-1 text-gray-900">{{ $murid->golongan_darah ?? '-' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
