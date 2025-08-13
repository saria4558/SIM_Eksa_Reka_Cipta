@csrf
{{-- partials/form.blade.php --}}
<div class="space-y-6">
    <!-- Card untuk Data Diri -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Data Diri</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="nis" class="block text-sm font-medium text-gray-700">NIS <span class="text-red-500">*</span></label>
                <input type="text" name="nis" id="nis" value="{{ old('nis', $murid->nis ?? '') }}" required
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('nis')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="nisn" class="block text-sm font-medium text-gray-700">NISN <span class="text-red-500">*</span></label>
                <input type="text" name="nisn" id="nisn" value="{{ old('nisn', $murid->nisn ?? '') }}" required
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('nisn')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $murid->nama ?? '') }}" required
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('nama')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="jk" class="block text-sm font-medium text-gray-700">Jenis Kelamin <span class="text-red-500">*</span></label>
                <select name="jk" id="jk" required
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="" disabled {{ !old('jk', $murid->jk ?? '') ? 'selected' : '' }}>Pilih Jenis Kelamin</option>
                    <option value="L" {{ old('jk', $murid->jk ?? '') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ old('jk', $murid->jk ?? '') == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jk')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="tempat_lahir" class="block text-sm font-medium text-gray-700">Tempat Lahir <span class="text-red-500">*</span></label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir', $murid->tempat_lahir ?? '') }}" required
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('tempat_lahir')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir <span class="text-red-500">*</span></label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', $murid->tanggal_lahir ?? '') }}" required
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('tanggal_lahir')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="agama" class="block text-sm font-medium text-gray-700">Agama <span class="text-red-500">*</span></label>
                <select name="agama" id="agama" required
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="" disabled {{ !old('agama', $murid->agama ?? '') ? 'selected' : '' }}>Pilih Agama</option>
                    <option value="Islam" {{ old('agama', $murid->agama ?? '') == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ old('agama', $murid->agama ?? '') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Katolik" {{ old('agama', $murid->agama ?? '') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                    <option value="Hindu" {{ old('agama', $murid->agama ?? '') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Buddha" {{ old('agama', $murid->agama ?? '') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="Konghucu" {{ old('agama', $murid->agama ?? '') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                </select>
                @error('agama')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="md:col-span-2">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat <span class="text-red-500">*</span></label>
                <textarea name="alamat" id="alamat" rows="3" required
                          class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">{{ old('alamat', $murid->alamat ?? '') }}</textarea>
                @error('alamat')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="telepon" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                <input type="text" name="telepon" id="telepon" value="{{ old('telepon', $murid->telepon ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="08xxxxxxxxx">
                @error('telepon')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $murid->email ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="email@example.com">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas <span class="text-red-500">*</span></label>
                <select name="kelas" id="kelas" required
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="" disabled {{ !old('kelas', $murid->kelas ?? '') ? 'selected' : '' }}>Pilih Kelas</option>
                    <!-- Kelas X -->
                    <optgroup label="Kelas X">
                        <option value="X IPA 1" {{ old('kelas', $murid->kelas ?? '') == 'X IPA 1' ? 'selected' : '' }}>X IPA 1</option>
                        <option value="X IPA 2" {{ old('kelas', $murid->kelas ?? '') == 'X IPA 2' ? 'selected' : '' }}>X IPA 2</option>
                        <option value="X IPS 1" {{ old('kelas', $murid->kelas ?? '') == 'X IPS 1' ? 'selected' : '' }}>X IPS 1</option>
                        <option value="X IPS 2" {{ old('kelas', $murid->kelas ?? '') == 'X IPS 2' ? 'selected' : '' }}>X IPS 2</option>
                    </optgroup>
                    <!-- Kelas XI -->
                    <optgroup label="Kelas XI">
                        <option value="XI IPA 1" {{ old('kelas', $murid->kelas ?? '') == 'XI IPA 1' ? 'selected' : '' }}>XI IPA 1</option>
                        <option value="XI IPA 2" {{ old('kelas', $murid->kelas ?? '') == 'XI IPA 2' ? 'selected' : '' }}>XI IPA 2</option>
                        <option value="XI IPS 1" {{ old('kelas', $murid->kelas ?? '') == 'XI IPS 1' ? 'selected' : '' }}>XI IPS 1</option>
                        <option value="XI IPS 2" {{ old('kelas', $murid->kelas ?? '') == 'XI IPS 2' ? 'selected' : '' }}>XI IPS 2</option>
                    </optgroup>
                    <!-- Kelas XII -->
                    <optgroup label="Kelas XII">
                        <option value="XII IPA 1" {{ old('kelas', $murid->kelas ?? '') == 'XII IPA 1' ? 'selected' : '' }}>XII IPA 1</option>
                        <option value="XII IPA 2" {{ old('kelas', $murid->kelas ?? '') == 'XII IPA 2' ? 'selected' : '' }}>XII IPA 2</option>
                        <option value="XII IPS 1" {{ old('kelas', $murid->kelas ?? '') == 'XII IPS 1' ? 'selected' : '' }}>XII IPS 1</option>
                        <option value="XII IPS 2" {{ old('kelas', $murid->kelas ?? '') == 'XII IPS 2' ? 'selected' : '' }}>XII IPS 2</option>
                    </optgroup>
                </select>
                @error('kelas')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan <span class="text-red-500">*</span></label>
                <select name="jurusan" id="jurusan" required
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="" disabled {{ !old('jurusan', $murid->jurusan ?? '') ? 'selected' : '' }}>Pilih Jurusan</option>
                    <option value="IPA" {{ old('jurusan', $murid->jurusan ?? '') == 'IPA' ? 'selected' : '' }}>IPA (Ilmu Pengetahuan Alam)</option>
                    <option value="IPS" {{ old('jurusan', $murid->jurusan ?? '') == 'IPS' ? 'selected' : '' }}>IPS (Ilmu Pengetahuan Sosial)</option>
                </select>
                @error('jurusan')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="tahun_masuk" class="block text-sm font-medium text-gray-700">Tahun Masuk <span class="text-red-500">*</span></label>
                <select name="tahun_masuk" id="tahun_masuk" required
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="" disabled {{ !old('tahun_masuk', $murid->tahun_masuk ?? '') ? 'selected' : '' }}>Pilih Tahun Masuk</option>
                    @for ($year = 2025; $year >= 2020; $year--)
                        <option value="{{ $year }}" {{ old('tahun_masuk', $murid->tahun_masuk ?? '') == $year ? 'selected' : '' }}>{{ $year }}</option>
                    @endfor
                </select>
                @error('tahun_masuk')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700">Status <span class="text-red-500">*</span></label>
                <select name="status" id="status" required
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="" disabled {{ !old('status', $murid->status ?? '') ? 'selected' : '' }}>Pilih Status</option>
                    <option value="aktif" {{ old('status', $murid->status ?? '') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="alumni" {{ old('status', $murid->status ?? '') == 'alumni' ? 'selected' : '' }}>Alumni</option>
                    <option value="pindah" {{ old('status', $murid->status ?? '') == 'pindah' ? 'selected' : '' }}>Pindah</option>
                    <option value="dikeluarkan" {{ old('status', $murid->status ?? '') == 'dikeluarkan' ? 'selected' : '' }}>Dikeluarkan</option>
                </select>
                @error('status')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Card untuk Data Orang Tua -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Data Orang Tua</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="nama_ayah" class="block text-sm font-medium text-gray-700">Nama Ayah</label>
                <input type="text" name="nama_ayah" id="nama_ayah" value="{{ old('nama_ayah', $murid->nama_ayah ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('nama_ayah')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="nama_ibu" class="block text-sm font-medium text-gray-700">Nama Ibu</label>
                <input type="text" name="nama_ibu" id="nama_ibu" value="{{ old('nama_ibu', $murid->nama_ibu ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('nama_ibu')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="pekerjaan_ayah" class="block text-sm font-medium text-gray-700">Pekerjaan Ayah</label>
                <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" value="{{ old('pekerjaan_ayah', $murid->pekerjaan_ayah ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('pekerjaan_ayah')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="pekerjaan_ibu" class="block text-sm font-medium text-gray-700">Pekerjaan Ibu</label>
                <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" value="{{ old('pekerjaan_ibu', $murid->pekerjaan_ibu ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('pekerjaan_ibu')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="telepon_ortu" class="block text-sm font-medium text-gray-700">No. Telepon Orang Tua</label>
                <input type="text" name="telepon_ortu" id="telepon_ortu" value="{{ old('telepon_ortu', $murid->telepon_ortu ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="08xxxxxxxxx">
                @error('telepon_ortu')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="alamat_ortu" class="block text-sm font-medium text-gray-700">Alamat Orang Tua</label>
                <textarea name="alamat_ortu" id="alamat_ortu" rows="3"
                          class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">{{ old('alamat_ortu', $murid->alamat_ortu ?? '') }}</textarea>
                @error('alamat_ortu')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>

    <!-- Card untuk Data Wali (Opsional) -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Data Wali <span class="text-sm font-normal text-gray-500">(Opsional)</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="nama_wali" class="block text-sm font-medium text-gray-700">Nama Wali</label>
                <input type="text" name="nama_wali" id="nama_wali" value="{{ old('nama_wali', $murid->nama_wali ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('nama_wali')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="hubungan_wali" class="block text-sm font-medium text-gray-700">Hubungan dengan Murid</label>
                <input type="text" name="hubungan_wali" id="hubungan_wali" value="{{ old('hubungan_wali', $murid->hubungan_wali ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500"
                       placeholder="Contoh: Paman, Bibi, Kakek, dll">
                @error('hubungan_wali')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="pekerjaan_wali" class="block text-sm font-medium text-gray-700">Pekerjaan Wali</label>
                <input type="text" name="pekerjaan_wali" id="pekerjaan_wali" value="{{ old('pekerjaan_wali', $murid->pekerjaan_wali ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
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
                <input type="file" name="foto" id="foto" accept="image/*"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 text-gray-700
                              file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0
                              file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <p class="mt-1 text-sm text-gray-500">Format: JPG, JPEG, PNG. Maksimal 2MB</p>
                @if (isset($murid) && $murid->foto)
                    <div class="mt-2">
                        <p class="text-sm text-gray-600">Foto saat ini:</p>
                        <img src="{{ Storage::url($murid->foto) }}" alt="Foto Siswa" class="mt-2 h-32 w-32 object-cover rounded-md border">
                    </div>
                @endif
                @error('foto')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="no_kip" class="block text-sm font-medium text-gray-700">No. KIP (Kartu Indonesia Pintar)</label>
                <input type="text" name="no_kip" id="no_kip" value="{{ old('no_kip', $murid->no_kip ?? '') }}"
                       class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                @error('no_kip')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="golongan_darah" class="block text-sm font-medium text-gray-700">Golongan Darah</label>
                <select name="golongan_darah" id="golongan_darah"
                        class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Pilih Golongan Darah</option>
                    <option value="A" {{ old('golongan_darah', $murid->golongan_darah ?? '') == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ old('golongan_darah', $murid->golongan_darah ?? '') == 'B' ? 'selected' : '' }}>B</option>
                    <option value="AB" {{ old('golongan_darah', $murid->golongan_darah ?? '') == 'AB' ? 'selected' : '' }}>AB</option>
                    <option value="O" {{ old('golongan_darah', $murid->golongan_darah ?? '') == 'O' ? 'selected' : '' }}>O</option>
                </select>
                @error('golongan_darah')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </div>
</div>
