@extends('wali.layouts.app')
@section('title', 'Mata Pelajaran')
@section('content')

<body class="p-6">
  <!-- ===== Halaman Daftar Pelajaran ===== -->
  <div id="page-pelajaran" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @php
    $mapelList = [
        ['nama' => 'Matematika', 'kelas' => 'X', 'guru' => 'Pak Budi', 'ikon' => 'https://img.icons8.com/ios-filled/50/math.png'],
        ['nama' => 'Fisika', 'kelas' => 'X', 'guru' => 'Pak Rudi', 'ikon' => 'https://img.icons8.com/ios-filled/50/physics.png'],
        ['nama' => 'Kimia', 'kelas' => 'X', 'guru' => 'Bu Erna', 'ikon' => 'https://img.icons8.com/ios-filled/50/test-tube.png'],
        ['nama' => 'Biologi', 'kelas' => 'X', 'guru' => 'Bu Dina', 'ikon' => 'https://img.icons8.com/ios-filled/50/microscope.png'],
        ['nama' => 'Bahasa Inggris', 'kelas' => 'X', 'guru' => 'Miss Lina', 'ikon' => 'https://img.icons8.com/ios-filled/50/open-book--v1.png'],
        ['nama' => 'Bahasa Indonesia', 'kelas' => 'X', 'guru' => 'Pak Agus', 'ikon' => 'https://img.icons8.com/ios-filled/50/book.png'],
        ['nama' => 'Sejarah', 'kelas' => 'X', 'guru' => 'Bu Diah', 'ikon' => 'https://img.icons8.com/material-outlined/48/hourglass.png'],
        ['nama' => 'Agama', 'kelas' => 'X', 'guru' => 'Pak Hasan', 'ikon' => 'https://img.icons8.com/ios-filled/50/pray.png'],
    ];
    @endphp
    @foreach($mapelList as $mapel)
      <div onclick="showDetail('{{ $mapel['nama'] }}')" class="bg-white rounded-xl shadow-md overflow-hidden card-hover transition-all cursor-pointer hover:-translate-y-1 hover:shadow-lg">
        <div class="flex items-center p-6">
          <div class="flex-shrink-0 bg-blue-100 p-3 rounded-full">
            <img src="{{ $mapel['ikon'] }}" alt="Ikon {{ $mapel['nama'] }}" class="h-8 w-8">
          </div>
          <div class="ml-4">
            <h3 class="font-bold text-lg">{{ $mapel['nama'] }}</h3>
            <p class="text-gray-600">Kelas {{ $mapel['kelas'] }} - {{ $mapel['guru'] }}</p>
          </div>
        </div>
        <div class="px-6 pb-4">
          <div class="flex justify-between text-sm text-gray-500">
            <span>5 Tugas</span>
            <span>3 Tuntas</span>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <!-- ===== Halaman Detail Tugas Mapel ===== -->
  <div id="page-detail" class="hidden mt-6">
    <button onclick="goBack()" class="mb-4 text-blue-600 hover:underline">&larr; Kembali</button>
    <h2 class="text-xl font-bold mb-4" id="judul-mapel">Tugas - [Mapel]</h2>

    <!-- Tugas Aktif -->
    <div class="overflow-x-auto bg-white rounded-xl shadow p-4 mb-6">
    <h3 class="text-lg font-semibold mb-3">Tugas Aktif</h3>
    <table class="min-w-full divide-y divide-gray-200 text-sm">
        <thead class="bg-gray-50">
        <tr>
            <th class="px-4 py-2 text-left">Judul</th>
            <th class="px-4 py-2 text-left">Deadline</th>
            <th class="px-4 py-2 text-left">Status</th>
            <th class="px-4 py-2 text-left">Aksi</th> <!-- Tambahan kolom aksi -->
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
        <tr>
            <td class="px-4 py-2">Tugas 1</td>
            <td class="px-4 py-2">30 Juli 2025</td>
            <td class="px-4 py-2 text-green-600 font-semibold">Belum Dikumpul</td>
            <td class="px-4 py-2">
            <button onclick="openModal()" class="bg-blue-500 hover:bg-blue-600 text-white text-xs font-medium px-3 py-1 rounded-lg">
                Serahkan
            </button>
            </td>
        </tr>
        </tbody>
    </table>
    </div>


    <!-- Riwayat Tugas -->
    <div class="overflow-x-auto bg-white rounded-xl shadow p-4">
      <h3 class="text-lg font-semibold mb-3">Riwayat Tugas</h3>
      <table class="min-w-full divide-y divide-gray-200 text-sm">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-4 py-2 text-left">Judul</th>
            <th class="px-4 py-2 text-left">Tanggal Kumpul</th>
            <th class="px-4 py-2 text-left">Nilai</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          <tr>
            <td class="px-4 py-2">Tugas Sebelumnya</td>
            <td class="px-4 py-2">10 Juli 2025</td>
            <td class="px-4 py-2 text-blue-600 font-bold">90</td>
          </tr>
        </tbody>
      </table>
    </div>


  <!-- Riwayat Presensi -->
  <div class="overflow-x-auto bg-white rounded-xl shadow p-4 mt-6">
    <h3 class="text-lg font-semibold mb-3">Riwayat Presensi</h3>
    <table class="min-w-full divide-y divide-gray-200 text-sm">
      <thead class="bg-gray-50">
        <tr>
          <th class="px-4 py-2 text-left">Tanggal</th>
          <th class="px-4 py-2 text-left">Waktu</th>
          <th class="px-4 py-2 text-left">Pertemuan</th>
          <th class="px-4 py-2 text-left">Status</th>
          
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-100">
        <tr>
          <td class="px-4 py-2">26 Juli 2025</td>
          <td class="px-4 py-2">07:00 - 08:30</td>
          <td class="px-4 py-2">Pertemuan 1</td>
          <td class="px-4 py-2 text-green-600 font-medium">Hadir</td>
        </tr>
        <tr>
          <td class="px-4 py-2">24 Juli 2025</td>
          <td class="px-4 py-2">07:00 - 08:30</td>
          <td class="px-4 py-2">Pertemuan 2</td>
          <td class="px-4 py-2 text-red-500 font-medium">Tidak Hadir</td>         
        </tr>
      </tbody>
    </table>
  </div>
  </div>
  <!-- ===== Modal Serahkan Tugas ===== -->
<div id="modal-serahkan" class="fixed inset-0 bg-black bg-opacity-40 z-50 hidden items-center justify-center">
  <div class="bg-white w-11/12 md:w-1/2 rounded-xl p-6 shadow-lg relative">
    <button onclick="closeModal()" class="absolute top-2 right-3 text-gray-500 hover:text-red-500 text-xl">&times;</button>
    <h2 class="text-lg font-bold mb-4">Serahkan Tugas</h2>
    <form id="form-serahkan" class="space-y-4">
      <div class="bg-gray-100 p-4 rounded-xl">
        <label class="block font-medium mb-1">Upload File</label>
        <input type="file" name="file_tugas" class="w-full border rounded p-2" />
      </div>
      <div class="text-right">
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Kirim</button>
      </div>
    </form>
  </div>
</div>


  <!-- ===== Script untuk Ganti Tampilan ===== -->
  <script>
    function showDetail(mapel) {
      document.getElementById('page-pelajaran').classList.add('hidden');
      document.getElementById('page-detail').classList.remove('hidden');
      document.getElementById('judul-mapel').textContent = 'Tugas - ' + mapel;
    }

    function goBack() {
      document.getElementById('page-detail').classList.add('hidden');
      document.getElementById('page-pelajaran').classList.remove('hidden');
    }

    function openModal() {
    document.getElementById('modal-serahkan').classList.remove('hidden');
    document.getElementById('modal-serahkan').classList.add('flex');
  }

  function closeModal() {
    document.getElementById('modal-serahkan').classList.add('hidden');
    document.getElementById('modal-serahkan').classList.remove('flex');
  }
  </script>
</body>

@endsection
