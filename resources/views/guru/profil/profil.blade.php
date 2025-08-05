@extends('guru.layouts.app')

@section('title', 'profil')

@section('content')

<div class="max-w-5xl mx-auto bg-white rounded-xl shadow-md p-6 mb-6 flex items-center gap-6">
  <img src="{{ asset('storage/' . $guru->user->foto) }}" alt="foto profil" class="h-20 w-20 rounded-full object-cover ring-2 ring-blue-600">
  <div class="flex-1">
    <h2 class="text-sm font-semibold text-gray-800">{{ $guru->nama }}</h2>
    <p class="text-sm text-gray-500">Guru {{ $guru->mapel }}</p>
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
    <p class="text-sm text-gray-800 font-medium">{{ $guru->nama }}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">NIP</p>
    <p class="text-sm text-gray-800 font-medium">{{ $guru->nip }}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">email</p>
    <p class="text-sm text-gray-800 font-medium">{{ $guru->user->email }}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Mata Pelajaran</p>
    <p class="text-sm text-gray-800 font-medium">{{ $guru->mapel }}</p>
  </div>
  
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Telepon</p>
    <p class="text-sm text-gray-800 font-medium">{{ $guru->no_hp }}</p>
  </div>
  <div class="space-y-1">
    <p class="text-xs text-gray-500">Tempat, Tanggal Lahir</p>
    <p class="text-sm text-gray-800 font-medium">{{ $guru->tempat_lahir }}, {{ $guru->tanggal_lahir }}</p>
  </div>
  <div>
    <p class="text-xs text-gray-500">Jenis Kelamin</p>
    <p class="text-sm text-gray-800 font-medium">{{ $guru->jk }}</p>
  </div>
  <div>
    <p class="text-xs text-gray-500">Alamat</p>
    <p class="text-sm text-gray-800 font-medium">{{ $guru->alamat }}</p>
  </div>
</div>
</div>

<div id="modal-general" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
  <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-lg relative">
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-sm font-semibold">Edit Profil Umum</h3>
      <button id="close-general-popup" class="text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
    </div>
    {{-- isian Nama Lengkap, Kelas, Foto --}}
    <form action="{{ route('guru.update.umum') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf
      <div class="flex flex-col items-center space-y-2">
        <div class="relative">
          <img id="preview-general" src="{{ asset('storage/' . $guru->user->foto) }}" class="h-24 w-24 rounded-full ring-2 ring-blue-500 object-cover">
          <label for="upload-general" class="absolute bottom-0 right-0 bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-full cursor-pointer">
            <i class="fas fa-camera text-xs"></i>
          </label>
          <input type="file" id="upload-general" name="foto" accept="image/*" class="hidden">
        </div>
      </div>
      <div>
        <label class="text-xs text-gray-600">Nama Lengkap</label>
        <input type="text" name="nama" value="{{ old('nama', $guru->nama) }}" class="w-full border rounded-lg px-3 py-2 text-sm">
      </div>
      <div>
        <label class="text-xs text-gray-600">Posisi / Mata Pelajaran</label>
        <input type="text" name="mapel" value="{{ old('mapel', $guru->mapel) }}" class="w-full border rounded-lg px-3 py-2 text-sm">
      </div>
      <div class="flex justify-end gap-3">
        <button type="button" id="cancel-general-popup" class="px-4 py-2 rounded-lg bg-gray-200 text-sm">Batal</button>
        <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm">Simpan</button>
      </div>
    </form>
  </div>
</div>

<div id="modal-personal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
  <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-lg relative">
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-sm font-semibold">Edit Informasi Pribadi</h3>
      <button id="close-personal-popup" class="text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
    </div>
    {{-- isian detail pribadi --}}
    <form action="{{ route('guru.update.pribadi') }}" method="POST" class="space-y-4">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="text-xs text-gray-600">Nama Lengkap</label>
          <input type="text" name="nama" value="{{ old('nama', $guru->nama) }}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">NIP</label>
          <input type="text" name="nip" value="{{ old('nip', $guru->nip) }}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Email</label>
          <input type="email" name="email" value="{{ old('email', $guru->user->email) }}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Mata Pelajaran</label>
          <input type="text" name="mapel" value="{{ old('mapel', $guru->mapel) }}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Tempat, Tanggal Lahir</label>
          <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $guru->tempat_lahir) }}, {{ old('tanggal_lahir', \Carbon\Carbon::parse($guru->tanggal_lahir)->format('d F Y')) }}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Jenis Kelamin</label>
          <select name="jk" class="w-full border rounded-lg px-3 py-2 text-sm">
            <option value="Laki-laki" {{ $guru->jk === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $guru->jk === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
          </select>
        </div>
        <div>
          <label class="text-xs text-gray-600">Alamat</label>
          <input type="text" name="alamat" value="{{ old('alamat', $guru->alamat) }}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
        <div>
          <label class="text-xs text-gray-600">Nomor HP</label>
          <input type="text" name="no_hp" value="{{ old('no_hp', $guru->no_hp) }}" class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>
      </div>
      <div class="flex justify-end gap-3">
        <button type="button" id="cancel-personal-popup" class="px-4 py-2 rounded-lg bg-gray-200 text-sm">Batal</button>
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
});
</script>
@endsection
    