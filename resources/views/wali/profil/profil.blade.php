@extends('wali.layouts.app')
@section('title', 'Profil')
@section('content')

{{-- Profile Overview --}}
<div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md p-6 mb-6 flex items-center gap-6">
  <img src="{{ asset('storage/' . $murid->user->foto) }}" alt="foto profil" class="h-20 w-20 rounded-full object-cover ring-2 ring-blue-600">
  <div class="flex-1">
    <h2 class="text-sm font-semibold text-gray-800">{{$murid->user->username}}</h2>
    <p class="text-sm text-gray-500">{{$murid->kelas}}</p>
    {{-- <p class="text-xs text-gray-400 italic">-</p> --}}
  </div>
  <button id="open-general-popup" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-xs font-medium flex items-center gap-2">
    <i class="fas fa-pencil-alt"></i> Edit
  </button>
</div>

{{-- Personal Info --}}
<div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md p-6 mb-6">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-sm font-semibold text-gray-800">Informasi Pribadi</h2>
    <button id="open-personal-popup" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-xs font-medium flex items-center gap-2">
      <i class="fas fa-pencil-alt"></i> Edit
    </button>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Nama Lengkap</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->nama}}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">NIS</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->nis}}</p>
  </div>
    <div class="space-y-1">
    <p class="text-xs text-gray-500">NISN</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->nisn}}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Nomor Telepon</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->telepon}}</p>
  </div>

  <div class="space-y-1">
    <p class="text-xs text-gray-500">Tempat, Tanggal Lahir</p>
    <p class="text-sm text-gray-800 font-medium">{{ $murid->tempat_lahir }}, {{ \Carbon\Carbon::parse($murid->tanggal_lahir)->isoFormat('D MMMM Y') }}</p>
  </div>
    <div class="space-y-1">
    <p class="text-xs text-gray-500">Agama</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->agama}}</p>
  </div>
  <div>
    <p class="text-xs text-gray-500">Jenis Kelamin</p>
    <p class="text-sm text-gray-800 font-medium">{{ $murid->jk === 'P' ? 'Perempuan' : ($murid->jk === 'L' ? 'Laki-laki' : '') }}</p>
  </div>
  <div>
    <p class="text-xs text-gray-500">Alamat</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->alamat}}</p>
  </div>
  <div>
    <p class="text-xs text-gray-500">Kelas</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->kelas}}</p>
  </div>
  <div>
    <p class="text-xs text-gray-500">Jurusan</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->jurusan}}</p>
  </div>
  <div>
    <p class="text-xs text-gray-500">Tahun Masuk</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->tahun_masuk}}</p>
  </div>
  <div>
    <p class="text-xs text-gray-500">status</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->status}}</p>
  </div>
  <div>
    <p class="text-xs text-gray-500">Email</p>
    <p class="text-sm text-gray-800 font-medium">{{ $murid->user->email}}</p>
  </div>
</div>
</div>

{{-- parents Info --}}
<div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md p-6 mb-6">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-sm font-semibold text-gray-800">Informasi Orang Tua</h2>
    <button id="open-parents-popup" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-xs font-medium flex items-center gap-2">
      <i class="fas fa-pencil-alt"></i> Edit
    </button>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Nama Ayah</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->nama_ayah}}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Nama Ibu</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->nama_ibu}}</p>
  </div>
    <div class="space-y-1">
    <p class="text-xs text-gray-500">Pekerjaan Ayah</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->pekerjaan_ayah}}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Pekerjaan Ibu</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->pekerjaan_ibu}}</p>
  </div>

  <div class="space-y-1">
    <p class="text-xs text-gray-500">Telepon Orang Tua</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->telepon_ortu}}</p>
  </div>
    <div class="space-y-1">
    <p class="text-xs text-gray-500">Alamat Orang Tua</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->alamat_ortu}}</p>
  </div>
</div>
</div>

{{-- more Info --}}
<div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md p-6 mb-6">
  <div class="flex items-center justify-between mb-4">
    <h2 class="text-sm font-semibold text-gray-800">Informasi Lainnya</h2>
    <button id="open-more-popup" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-xs font-medium flex items-center gap-2">
      <i class="fas fa-pencil-alt"></i> Edit
    </button>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Nama Wali</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->nama_wali}}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Hubungan Wali</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->hubungan_wali}}</p>
  </div>
    <div class="space-y-1">
    <p class="text-xs text-gray-500">Pekerjaan Wali</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->pekerjaan_wali}}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">nomor KIP</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->no_kip}}</p>
  </div>

  <div class="space-y-1">
    <p class="text-xs text-gray-500">Golongan Darah</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->golongan_darah}}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Catatan Kesehatan</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->catatan_kesehatan}}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Catatan Prestasi</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->catatan_prestasi}}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Catatan Pelanggaran</p>
    <p class="text-sm text-gray-800 font-medium">{{$murid->catatan_pelanggaran}}</p>
  </div>
</div>
</div>


{{-- modal edit profil umum --}}
<div id="modal-general" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
  <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-lg relative">
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-sm font-semibold">Edit Profil Umum</h3>
      <button id="close-general-popup" class="text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
    </div>
    {{-- isian Nama Lengkap, Kelas, Foto --}}
    <form action="{{route('murid.update.umum')}}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf
      <div class="flex flex-col items-center space-y-2">
        <div class="relative">
          <img id="preview-general" src="{{ asset('storage/' . $murid->user->foto) }}" class="h-24 w-24 rounded-full ring-2 ring-blue-500 object-cover">
          <label for="upload-general" class="absolute bottom-0 right-0 bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-full cursor-pointer">
            <i class="fas fa-camera text-xs"></i>
          </label>
          <input type="file" id="upload-general" name="foto" accept="image/*" class="hidden">
        </div>
      </div>
      <div>
            <label class="text-xs text-gray-600">Username</label>
            <input type="text" name="username" value="{{ old('username', $murid->user->username) }}"
                class="w-full border rounded-lg px-3 py-2 text-sm @error('username') border-red-500 @enderror">
            @error('username')
                <p class="text-red-500 text-xs mt-1">username sudah terdaftar</p>
            @enderror
      </div>
      <div>
        <label class="text-xs text-gray-500">Kelas</label>
        <input type="text" name="kelas" value="{{old('kelas', $murid->kelas)}}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
      </div>
      <div class="flex justify-end gap-3">
        <button type="button" id="cancel-general-popup" class="px-4 py-2 rounded-lg bg-gray-200 text-sm">Batal</button>
        <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm">Simpan</button>
      </div>
    </form>
    @if (session('modal') === 'general' && $errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('modal-general').classList.remove('hidden');
        });
    </script>
    @endif
  </div>
</div>


{{-- modal info personal --}}
<div id="modal-personal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
  <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-lg relative">
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-sm font-semibold">Edit Informasi Pribadi</h3>
      <button id="close-personal-popup" class="text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
    </div>
    {{-- isian detail pribadi --}}
    <form action="{{route('murid.update.personal')}}" method="POST" class="space-y-4">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="text-xs text-gray-600">Nama Lengkap</label>
          <input type="text" name="nama" value="{{old('nama',$murid->nama)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-500">NIS</label>
          <input type="text" name="nis" value="{{ old('nis', $murid->nis) }}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>
        <div>
          <label class="text-xs text-gray-500">NISN</label>
          <input type="text" name="nisn" value="{{old('nisn', $murid->nisn)}}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>
        <div>
          <label class="text-xs text-gray-600">Nomor Telepon</label>
          <input type="text" name="telepon" value="{{old('telepon', $murid->telepon)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Tempat Lahir</label>
          <input type="text" name="tempat_lahir" value="{{old('tempat_lahir', $murid->tempat_lahir)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
         <div>
          <label class="text-xs text-gray-600">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" value="{{old('tanggal_lahir', $murid->tanggal_lahir)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Agama</label>
          <input type="text" name="agama" value="{{old('agama', $murid->agama)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
            <label class="text-xs text-gray-500">Jenis Kelamin</label>
            <input type="hidden" name="jk" value="{{ $murid->jk }}">
            <input type="text" value="{{ $murid->jk === 'P' ? 'Perempuan' : ($murid->jk === 'L' ? 'Laki-laki' : '') }}"
                class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>

        <div>
          <label class="text-xs text-gray-600">Alamat</label>
          <input type="text" name="alamat" value="{{old('alamat', $murid->alamat)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-500">Kelas</label>
          <input type="text" name="kelas" value="{{old('kelas', $murid->kelas)}}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>
        <div>
          <label class="text-xs text-gray-500">Jurusan</label>
          <input type="text" name="jurusan" value="{{old('jurusan', $murid->jurusan)}}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>
        <div>
          <label class="text-xs text-gray-500">Tahun Masuk</label>
          <input type="text" name="tahun_masuk" value="{{old('tahun_masuk', $murid->tahun_masuk)}}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>
        <div>
          <label class="text-xs text-gray-500">Status</label>
          <input type="text" name="status" value="{{old('status', $murid->status)}}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>
        {{-- <div>
          <label class="text-xs text-gray-600">Status</label>
          <select name="status" class="w-full border rounded-lg px-3 py-2 text-sm">
            <option value="aktif" {{ $murid->status === 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="alumni" {{ $murid->status === 'alumni' ? 'selected' : '' }}>Alumni</option>
            <option value="pindah" {{ $murid->status === 'pindah' ? 'selected' : '' }}>Pindah</option>
            <option value="dikeluarkan" {{ $murid->status === 'dikeluarkan' ? 'selected' : '' }}>Dikeluarkan</option>
          </select>
        </div> --}}
        <div>
            <label class="text-xs text-gray-600">Email</label>
            <input type="email" name="email" value="{{ old('email', $murid->user->email) }}"
                class="w-full border rounded-lg px-3 py-2 text-sm @error('email') border-red-500 @enderror">
            @error('email')
                <p class="text-red-500 text-xs mt-1">email sudah terdaftar</p>
            @enderror
        </div>
      </div>
      <div class="flex justify-end gap-3">
        <button type="button" id="cancel-personal-popup" class="px-4 py-2 rounded-lg bg-gray-200 text-sm">Batal</button>
        <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm">Simpan</button>
      </div>
    </form>
    {{-- @if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('modal-personal').classList.remove('hidden');
        });
    </script>
    @endif --}}
    @if (session('modal') === 'personal' && $errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('modal-personal').classList.remove('hidden');
        });
    </script>
    @endif
  </div>
</div>


{{-- modal parents info  --}}
<div id="modal-parents" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
  <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-lg relative">
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-sm font-semibold">Edit Informasi Orang Tua</h3>
      <button id="close-parents-popup" class="text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
    </div>
    {{-- isian detail pribadi --}}
    <form action="{{route('murid.update.parents')}}" method="POST" class="space-y-4">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="text-xs text-gray-600">Nama Ayah</label>
          <input type="text"  name="nama_ayah" value="{{old('nama_ayah', $murid->nama_ayah)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Nama Ibu</label>
          <input type="text" name="nama_ibu" value="{{old('nama_ibu',$murid->nama_ibu )}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Pekerjaan Ayah</label>
          <input type="text" name="pekerjaan_ayah" value="{{old('pekerjaan_ayah',$murid->pekerjaan_ayah )}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Pekerjaan Ibu</label>
          <input type="text" name="pekerjaan_ibu" value="{{old('pekerjaan_ibu',$murid->pekerjaan_ibu )}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>

        <div>
          <label class="text-xs text-gray-600">Telepon Orang Tua</label>
          <input type="text" name="telepon_ortu" value="{{old('telepon_ortu',$murid->telepon_ortu )}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Alamat Orang Tua</label>
          <input type="text" name="alamat_ortu" value="{{old('alamat_ortu',$murid->alamat_ortu )}}"class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>

      </div>
      <div class="flex justify-end gap-3">
        <button type="button" id="cancel-parents-popup" class="px-4 py-2 rounded-lg bg-gray-200 text-sm">Batal</button>
        <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm">Simpan</button>
      </div>
    </form>
  </div>
</div>

{{-- modal more info  --}}
<div id="modal-more" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
  <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-lg relative">
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-sm font-semibold">Edit Informasi Lainnya</h3>
      <button id="close-more-popup" class="text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
    </div>
    {{-- isian detail pribadi --}}
    <form action="{{route('murid.update.more')}}" method="POST" class="space-y-4">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="text-xs text-gray-600">Nama Wali</label>
          <input type="text" name="nama_wali" value="{{old('nama_wali', $murid->nama_wali)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Hubungan Wali</label>
          <input type="text" name="hubungan_wali" value="{{old('hubungan_wali', $murid->hubungan_wali)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Pekerjaan Wali</label>
          <input type="text" name="pekerjaan_wali" value="{{old('pekerjaan_wali', $murid->pekerjaan_wali)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Nomor KIP</label>
          <input type="text" name="no_kip" value="{{old('no_kip', $murid->no_kip)}}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>

        <div>
          <label class="text-xs text-gray-600">Golongan Darah</label>
          <input type="text" name="golongan_darah" value="{{old('golongan_darah', $murid->golongan_darah)}}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Catatan Kesehatan</label>
          <input type="text" name="catatan_kesehatan" value="{{old('catatan_kesehatan', $murid->catatan_kesehatan)}}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>
        <div>
          <label class="text-xs text-gray-600">Catatan Prestasi</label>
          <input type="text" name="catatan_prestasi" value="{{old('catatan_prestasi', $murid->catatan_prestasi)}}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>
        <div>
          <label class="text-xs text-gray-600">Catatan Pelanggaran</label>
          <input type="text" name="catatan_pelanggaran" value="{{old('catatan_pelanggaran', $murid->catatan_pelanggaran)}}" class="w-full border border-gray-300 bg-gray-100 text-gray-500 rounded-lg px-3 py-2 text-sm cursor-not-allowed" readonly>
        </div>

      </div>
      <div class="flex justify-end gap-3">
        <button type="button" id="cancel-more-popup" class="px-4 py-2 rounded-lg bg-gray-200 text-sm">Batal</button>
        <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm">Simpan</button>
      </div>
    </form>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // GENERAL
  const modalGeneral = document.getElementById('modal-general');
  document.getElementById('open-general-popup').onclick = () => modalGeneral.classList.remove('hidden');
  document.getElementById('close-general-popup').onclick = () => modalGeneral.classList.add('hidden');
  document.getElementById('cancel-general-popup').onclick = () => modalGeneral.classList.add('hidden');
  modalGeneral.addEventListener('click', e => { if(e.target===modalGeneral) modalGeneral.classList.add('hidden'); });

  // preview foto profil
  document.getElementById('upload-general').addEventListener('change', e => {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = ev => { document.getElementById('preview-general').src = ev.target.result; };
      reader.readAsDataURL(file);
    }
  });

  // PERSONAL
  const modalPersonal = document.getElementById('modal-personal');
  document.getElementById('open-personal-popup').onclick = () => modalPersonal.classList.remove('hidden');
  document.getElementById('close-personal-popup').onclick = () => modalPersonal.classList.add('hidden');
  document.getElementById('cancel-personal-popup').onclick = () => modalPersonal.classList.add('hidden');
  modalPersonal.addEventListener('click', e => { if(e.target===modalPersonal) modalPersonal.classList.add('hidden'); });

  //parents
  const modalParents = document.getElementById('modal-parents');
  document.getElementById('open-parents-popup').onclick = () => modalParents.classList.remove('hidden');
  document.getElementById('close-parents-popup').onclick = () => modalParents.classList.add('hidden');
  document.getElementById('cancel-parents-popup').onclick = () => modalParents.classList.add('hidden');
  modalParents.addEventListener('click', e => { if(e.target===modalParents) modalParents.classList.add('hidden'); });

  //more
  const modalMore = document.getElementById('modal-more');
  document.getElementById('open-more-popup').onclick = () => modalMore.classList.remove('hidden');
  document.getElementById('close-more-popup').onclick = () => modalMore.classList.add('hidden');
  document.getElementById('cancel-more-popup').onclick = () => modalMore.classList.add('hidden');
  modalMore.addEventListener('click', e => { if(e.target===modalMore) modalMore.classList.add('hidden'); });
});
</script>
@endsection