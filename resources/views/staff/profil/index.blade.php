{{-- <!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SIM-P - Profil Staff</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  .sidebar-link:hover {
    background-color: rgba(59, 130, 246, 0.1);
  }
  .sidebar-link.active {
    background-color: rgba(59, 130, 246, 0.2);
    border-left: 4px solid #3b82f6;
  }
</style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  <div class="flex flex-1 overflow-hidden">
    <!-- Sidebar -->
    <aside class="hidden md:flex md:flex-col w-64 bg-white border-r border-gray-200">
      <div class="flex items-center justify-center h-24 px-4 border-b border-gray-200">
        <img src="https://placehold.co/150x50?text=Logo" alt="Logo" class="h-12" />
      </div>
      <nav class="flex-1 px-2 py-4 space-y-1">
        <a href="#" class="flex items-center px-2 py-2 text-sm font-medium rounded-md sidebar-link">
          Dashboard
        </a>
        <a href="#" class="flex items-center px-2 py-2 text-sm font-medium rounded-md sidebar-link active">
          Profil Staff
        </a>
        <!-- Menu lain -->
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-6">
      <h1 class="text-2xl font-bold mb-6">Profil Staff</h1>

      <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow">
        <form id="profileForm" class="space-y-6">
          <!-- Foto Profil -->
          <div class="flex items-center space-x-6">
            <img id="profilePhoto" src="https://placehold.co/100x100" alt="Foto Profil" class="w-24 h-24 rounded-full object-cover border border-gray-300" />
            <div>
              <label for="photoInput" class="cursor-pointer text-blue-600 hover:underline">Ubah Foto</label>
              <input type="file" id="photoInput" accept="image/*" class="hidden" />
            </div>
          </div>

          <!-- Nama Lengkap -->
          <div>
            <label for="fullName" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" id="fullName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- NIP / ID Staff -->
          <div>
            <label for="nip" class="block text-sm font-medium text-gray-700">NIP / ID Staff</label>
            <input type="text" id="nip" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Jabatan -->
          <div>
            <label for="position" class="block text-sm font-medium text-gray-700">Jabatan</label>
            <input type="text" id="position" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Nomor Telepon -->
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
            <input type="tel" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Alamat -->
          <div>
            <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
            <textarea id="address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
          </div>

          <!-- Tanggal Lahir -->
          <div>
            <label for="birthDate" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
            <input type="date" id="birthDate" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Jenis Kelamin -->
          <div>
            <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
            <select id="gender" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
              <option value="">Pilih Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <!-- Username -->
          <div>
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" id="username" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Password -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password <small>(Kosongkan jika tidak ingin mengubah)</small></label>
            <input type="password" id="password" placeholder="********" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow">Simpan Perubahan</button>
          </div>
        </form>
      </div>
    </main>
  </div>
</div>

<script>
  // Dummy data profil staff
  let staffProfile = {
    photo: 'https://placehold.co/100x100',
    fullName: 'Andi Setiawan',
    nip: '123456789',
    position: 'Staff Administrasi',
    email: 'andi.setiawan@example.com',
    phone: '081234567890',
    address: 'Jl. Merdeka No. 10, Jakarta',
    birthDate: '1990-05-15',
    gender: 'Laki-laki',
    username: 'andi123',
    password: '' // password tidak ditampilkan
  };

  // Isi form dengan data profil
  function loadProfile() {
    document.getElementById('profilePhoto').src = staffProfile.photo;
    document.getElementById('fullName').value = staffProfile.fullName;
    document.getElementById('nip').value = staffProfile.nip;
    document.getElementById('position').value = staffProfile.position;
    document.getElementById('email').value = staffProfile.email;
    document.getElementById('phone').value = staffProfile.phone;
    document.getElementById('address').value = staffProfile.address;
    document.getElementById('birthDate').value = staffProfile.birthDate;
    document.getElementById('gender').value = staffProfile.gender;
    document.getElementById('username').value = staffProfile.username;
    document.getElementById('password').value = '';
  }

  // Update foto preview saat pilih file
  document.getElementById('photoInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(evt) {
        document.getElementById('profilePhoto').src = evt.target.result;
      };
      reader.readAsDataURL(file);
    }
  });

  // Simpan perubahan profil
  document.getElementById('profileForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Update data profil dari form
    staffProfile.fullName = document.getElementById('fullName').value.trim();
    staffProfile.nip = document.getElementById('nip').value.trim();
    staffProfile.position = document.getElementById('position').value.trim();
    staffProfile.email = document.getElementById('email').value.trim();
    staffProfile.phone = document.getElementById('phone').value.trim();
    staffProfile.address = document.getElementById('address').value.trim();
    staffProfile.birthDate = document.getElementById('birthDate').value;
    staffProfile.gender = document.getElementById('gender').value;
    staffProfile.username = document.getElementById('username').value.trim();

    const newPassword = document.getElementById('password').value;
    if (newPassword) {
      // Ganti password jika diisi
      staffProfile.password = newPassword;
    }

    alert('Profil berhasil diperbarui!');
    // Biasanya di sini Anda akan kirim data ke server via AJAX/fetch
  });

  // Inisialisasi
  loadProfile();
</script>
</body>
</html> --}}


@extends('staff.layouts.app')

@section('title', 'Dashboard - SIM-P')

@section('content')

<!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-6">
      <h1 class="text-2xl font-bold mb-6">Profil Staff</h1>

      <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow">
        <form id="profileForm" class="space-y-6">
          <!-- Foto Profil -->
          <div class="flex items-center space-x-6">
            <img id="profilePhoto" src="https://placehold.co/100x100" alt="Foto Profil" class="w-24 h-24 rounded-full object-cover border border-gray-300" />
            <div>
              <label for="photoInput" class="cursor-pointer text-blue-600 hover:underline">Ubah Foto</label>
              <input type="file" id="photoInput" accept="image/*" class="hidden" />
            </div>
          </div>

          <!-- Nama Lengkap -->
          <div>
            <label for="fullName" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
            <input type="text" id="fullName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- NIP / ID Staff -->
          <div>
            <label for="nip" class="block text-sm font-medium text-gray-700">NIP / ID Staff</label>
            <input type="text" id="nip" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Jabatan -->
          <div>
            <label for="position" class="block text-sm font-medium text-gray-700">Jabatan</label>
            <input type="text" id="position" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Nomor Telepon -->
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
            <input type="tel" id="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Alamat -->
          <div>
            <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
            <textarea id="address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
          </div>

          <!-- Tanggal Lahir -->
          <div>
            <label for="birthDate" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
            <input type="date" id="birthDate" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Jenis Kelamin -->
          <div>
            <label class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
            <select id="gender" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
              <option value="">Pilih Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <!-- Username -->
          <div>
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" id="username" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <!-- Password -->
          <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password <small>(Kosongkan jika tidak ingin mengubah)</small></label>
            <input type="password" id="password" placeholder="********" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>

          <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow">Simpan Perubahan</button>
          </div>
        </form>
      </div>
    </main>
  </div>
</div>

<script>
  // Dummy data profil staff
  let staffProfile = {
    photo: 'https://placehold.co/100x100',
    fullName: 'Andi Setiawan',
    nip: '123456789',
    position: 'Staff Administrasi',
    email: 'andi.setiawan@example.com',
    phone: '081234567890',
    address: 'Jl. Merdeka No. 10, Jakarta',
    birthDate: '1990-05-15',
    gender: 'Laki-laki',
    username: 'andi123',
    password: '' // password tidak ditampilkan
  };

  // Isi form dengan data profil
  function loadProfile() {
    document.getElementById('profilePhoto').src = staffProfile.photo;
    document.getElementById('fullName').value = staffProfile.fullName;
    document.getElementById('nip').value = staffProfile.nip;
    document.getElementById('position').value = staffProfile.position;
    document.getElementById('email').value = staffProfile.email;
    document.getElementById('phone').value = staffProfile.phone;
    document.getElementById('address').value = staffProfile.address;
    document.getElementById('birthDate').value = staffProfile.birthDate;
    document.getElementById('gender').value = staffProfile.gender;
    document.getElementById('username').value = staffProfile.username;
    document.getElementById('password').value = '';
  }

  // Update foto preview saat pilih file
  document.getElementById('photoInput').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(evt) {
        document.getElementById('profilePhoto').src = evt.target.result;
      };
      reader.readAsDataURL(file);
    }
  });

  // Simpan perubahan profil
  document.getElementById('profileForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Update data profil dari form
    staffProfile.fullName = document.getElementById('fullName').value.trim();
    staffProfile.nip = document.getElementById('nip').value.trim();
    staffProfile.position = document.getElementById('position').value.trim();
    staffProfile.email = document.getElementById('email').value.trim();
    staffProfile.phone = document.getElementById('phone').value.trim();
    staffProfile.address = document.getElementById('address').value.trim();
    staffProfile.birthDate = document.getElementById('birthDate').value;
    staffProfile.gender = document.getElementById('gender').value;
    staffProfile.username = document.getElementById('username').value.trim();

    const newPassword = document.getElementById('password').value;
    if (newPassword) {
      // Ganti password jika diisi
      staffProfile.password = newPassword;
    }

    alert('Profil berhasil diperbarui!');
    // Biasanya di sini Anda akan kirim data ke server via AJAX/fetch
  });

  // Inisialisasi
  loadProfile();
</script>

@endsection
