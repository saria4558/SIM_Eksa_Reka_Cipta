@csrf
<div class="space-y-6">
    <!-- Card untuk Data Diri -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Data Diri</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="nis" class="block text-sm font-medium text-gray-700">NIS</label>
                <input type="text" name="nis" id="nis" value="{{ old('nis', $murid->nis ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                <input type="text" name="nisn" id="nisn" value="{{ old('nisn', $murid->nisn ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $murid->nama ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="jk" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <select name="jk" id="jk" required class="mt-1 block w-full border rounded-md p-2">
                    <option value="" {{ old('jk', $murid->jk ?? '') == '' ? 'selected' : '' }} disabled>Pilih Gender</option>
                    <option value="L" {{ old('jk', $murid->jk ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ old('jk', $murid->jk ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div>
                <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir', $murid->tempat_lahir ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', $murid->tanggal_lahir ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="agama" class="block text-sm font-medium text-gray-700">Agama</label>
                <select name="agama" id="agama" required class="mt-1 block w-full border rounded-md p-2">
                    <option value="" {{ old('agama', $murid->agama ?? '') == '' ? 'selected' : '' }} disabled>Pilih Agama</option>
                    <option value="Islam" {{ old('agama', $murid->agama ?? '') == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ old('agama', $murid->agama ?? '') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Hindu" {{ old('agama', $murid->agama ?? '') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Budha" {{ old('agama', $murid->agama ?? '') == 'Budha' ? 'selected' : '' }}>Budha</option>
                    <option value="Katholik" {{ old('agama', $murid->agama ?? '') == 'Katholik' ? 'selected' : '' }}>Katholik</option>
                    <option value="Konghucu" {{ old('agama', $murid->agama ?? '') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                </select>
            </div>
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea name="alamat" id="alamat" class="mt-1 block w-full border rounded-md p-2">{{ old('alamat', $murid->alamat ?? '') }}</textarea>
            </div>
            <div>
                <label for="telepon" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ old('telepon', $murid->telepon ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                <select name="kelas" id="kelas" required class="mt-1 block w-full border rounded-md p-2">
                    <option value="" {{ old('kelas', $murid->kelas ?? '') == '' ? 'selected' : '' }} disabled>Pilih Kelas</option>
                    <!-- Kelas X -->
                    <option value="X IPA 1" {{ old('kelas', $murid->kelas ?? '') == 'X IPA 1' ? 'selected' : '' }}>X IPA 1</option>
                    <option value="X IPA 2" {{ old('kelas', $murid->kelas ?? '') == 'X IPA 2' ? 'selected' : '' }}>X IPA 2</option>
                    <option value="X IPS 1" {{ old('kelas', $murid->kelas ?? '') == 'X IPS 1' ? 'selected' : '' }}>X IPS 1</option>
                    <option value="X IPS 2" {{ old('kelas', $murid->kelas ?? '') == 'X IPS 2' ? 'selected' : '' }}>X IPS 2</option>
                    <!-- Kelas XI -->
                    <option value="XI IPA 1" {{ old('kelas', $murid->kelas ?? '') == 'XI IPA 1' ? 'selected' : '' }}>XI IPA 1</option>
                    <option value="XI IPA 2" {{ old('kelas', $murid->kelas ?? '') == 'XI IPA 2' ? 'selected' : '' }}>XI IPA 2</option>
                    <option value="XI IPS 1" {{ old('kelas', $murid->kelas ?? '') == 'XI IPS 1' ? 'selected' : '' }}>XI IPS 1</option>
                    <option value="XI IPS 2" {{ old('kelas', $murid->kelas ?? '') == 'XI IPS 2' ? 'selected' : '' }}>XI IPS 2</option>
                    <!-- Kelas XII -->
                    <option value="XII IPA 1" {{ old('kelas', $murid->kelas ?? '') == 'XII IPA 1' ? 'selected' : '' }}>XII IPA 1</option>
                    <option value="XII IPA 2" {{ old('kelas', $murid->kelas ?? '') == 'XII IPA 2' ? 'selected' : '' }}>XII IPA 2</option>
                    <option value="XII IPS 1" {{ old('kelas', $murid->kelas ?? '') == 'XII IPS 1' ? 'selected' : '' }}>XII IPS 1</option>
                    <option value="XII IPS 2" {{ old('kelas', $murid->kelas ?? '') == 'XII IPS 2' ? 'selected' : '' }}>XII IPS 2</option>
                </select>
            </div>
            <div>
                <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
                <select name="jurusan" id="jurusan" required class="mt-1 block w-full border rounded-md p-2">
                    <option value="" {{ old('jurusan', $murid->jurusan ?? '') == '' ? 'selected' : '' }} disabled>Pilih Jurusan</option>
                    <option value="IPA" {{ old('jurusan', $murid->jurusan ?? '') == 'IPA' ? 'selected' : '' }}>IPA</option>
                    <option value="IPS" {{ old('jurusan', $murid->jurusan ?? '') == 'IPS' ? 'selected' : '' }}>IPS</option>
                    {{-- <option value="Bahasa" {{ old('jurusan', $murid->jurusan ?? '') == 'Bahasa' ? 'selected' : '' }}>Bahasa</option> --}}
                </select>
            </div>
            <div>
                <label for="tahun_masuk" class="block text-sm font-medium text-gray-700">Tahun Masuk</label>
                <select name="tahun_masuk" id="tahun_masuk" required class="mt-1 block w-full border rounded-md p-2">
                    <option value="" {{ old('tahun_masuk', $murid->tahun_masuk ?? '') == '' ? 'selected' : '' }} disabled>Pilih Tahun Masuk</option>
                    @for ($year = 2025; $year >= 2020; $year--)
                        <option value="{{ $year }}" {{ old('tahun_masuk', $murid->tahun_masuk ?? '') == $year ? 'selected' : '' }}>{{ $year }}</option>
                    @endfor
                </select>
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" id="status" required class="mt-1 block w-full border rounded-md p-2">
                    <option value="" {{ old('status', $murid->status ?? '') == '' ? 'selected' : '' }} disabled>Status</option>
                    <option value="Aktif" {{ old('status', $murid->status ?? '') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="alumni" {{ old('status', $murid->status ?? '') == 'Alumni' ? 'selected' : '' }}>Alumni</option>
                    <option value="pindah" {{ old('status', $murid->status ?? '') == 'Pindah' ? 'selected' : '' }}>Pindah</option>
                    <option value="Dikeluarkan" {{ old('status', $murid->status ?? '') == 'Dikeluarkan' ? 'selected' : '' }}>Dikeluarkan</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Card untuk Data Orang Tua -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Data Orang Tua</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="nama_ayah" class="block text-sm font-medium text-gray-700">Nama Ayah</label>
                <input type="text" name="nama_ayah" id="nama_ayah" value="{{ old('nama_ayah', $murid->nama_ayah ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="nama_ibu" class="block text-sm font-medium text-gray-700">Nama Ibu</label>
                <input type="text" name="nama_ibu" id="nama_ibu" value="{{ old('nama_ibu', $murid->nama_ibu ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="pekerjaan_ayah" class="block text-sm font-medium text-gray-700">Pekerjaan Ayah</label>
                <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" value="{{ old('pekerjaan_ayah', $murid->pekerjaan_ayah ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="pekerjaan_ibu" class="block text-sm font-medium text-gray-700">Pekerjaan Ibu</label>
                <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" value="{{ old('pekerjaan_ibu', $murid->pekerjaan_ibu ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="telepon_ortu" class="block text-sm font-medium text-gray-700">No. Telepon Orang Tua</label>
                <input type="text" name="telepon_ortu" id="telepon_ortu" value="{{ old('telepon_ortu', $murid->telepon_ortu ?? '') }}" required class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="alamat_ortu" class="block text-sm font-medium text-gray-700">Alamat Orang Tua</label>
                <textarea name="alamat_ortu" id="alamat_ortu" class="mt-1 block w-full border rounded-md p-2">{{ old('alamat_ortu', $murid->alamat_ortu ?? '') }}</textarea>
            </div>
        </div>
    </div>

    <!-- Card untuk Data Wali (Opsional) -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Data Wali <span class="text-sm font-normal text-gray-500">(Opsional)</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="nama_wali" class="block text-sm font-medium text-gray-700">Nama Wali</label>
                <input type="text" name="nama_wali" id="nama_wali" value="{{ old('nama_wali', $murid->nama_wali ?? '') }}" class="mt-1 block w-full border rounded-md p-2">
                @error('nama_wali')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="hubungan_wali" class="block text-sm font-medium text-gray-700">Hubungan dengan Murid</label>
                <input type="text" name="hubungan_wali" id="hubungan_wali" value="{{ old('hubungan_wali', $murid->hubungan_wali ?? '') }}" class="mt-1 block w-full border rounded-md p-2">
                @error('hubungan_wali')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="pekerjaan_wali" class="block text-sm font-medium text-gray-700">Pekerjaan Wali</label>
                <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" value="{{ old('pekerjaan_wali', $murid->pekerjaan_wali ?? '') }}" class="mt-1 block w-full border rounded-md p-2">
                @error('pekerjaan_wali')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Card untuk Data Lainnya (Opsional) -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Data Lainnya <span class="text-sm font-normal text-gray-500">(Opsional)</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="foto" class="block text-sm font-medium text-gray-700">Foto Siswa</label>
                <input type="file" name="foto" id="foto" accept="image/*" class="mt-1 block w-full border rounded-md p-2 text-gray-700 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" {{ old('foto', $murid->foto ?? '') ? '' : '' }}>
                @if ($murid->foto ?? false)
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">Foto saat ini:</p>
                        <img src="{{ asset('storage/' . ($murid->foto ?? '')) }}" alt="Foto Siswa" class="mt-2 h-32 w-32 object-cover rounded-md">
                    </div>
                @endif
            </div>
            <div>
                <label for="no_kip" class="block text-sm font-medium text-gray-700">No. KIP</label>
                <input type="text" name="no_kip" id="no_kip" value="{{ old('no_kip', $murid->no_kip ?? '') }}" class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="golongan_darah" class="block text-sm font-medium text-gray-700">Golongan Darah</label>
                <input type="text" name="golongan_darah" id="golongan_darah" value="{{ old('golongan_darah', $murid->golongan_darah ?? '') }}" class="mt-1 block w-full border rounded-md p-2">
            </div>
            <div>
                <label for="catatan_kesehatan" class="block text-sm font-medium text-gray-700">Catatan Kesehatan</label>
                <textarea name="catatan_kesehatan" id="catatan_kesehatan" class="mt-1 block w-full border rounded-md p-2">{{ old('catatan_kesehatan', $murid->catatan_kesehatan ?? '') }}</textarea>
            </div>
            <div>
                <label for="catatan_prestasi" class="block text-sm font-medium text-gray-700">Catatan Prestasi</label>
                <textarea name="catatan_prestasi" id="catatan_prestasi" class="mt-1 block w-full border rounded-md p-2">{{ old('catatan_prestasi', $murid->catatan_prestasi ?? '') }}</textarea>
            </div>
            <div>
                <label for="catatan_pelanggaran" class="block text-sm font-medium text-gray-700">Catatan Pelanggaran</label>
                <textarea name="catatan_pelanggaran" id="catatan_pelanggaran" class="mt-1 block w-full border rounded-md p-2">{{ old('catatan_pelanggaran', $murid->catatan_pelanggaran ?? '') }}</textarea>
            </div>
        </div>
    </div>
    <form action="{{ route('staff.data-murid.update', $murid) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('staff.data-murid.form')
        <div class="mt-6 flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Simpan
            </button>
        </div>
    </form>
</div>
{{-- <div class="mt-6">
    <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
        Simpan
    </button>
</div> --}}
