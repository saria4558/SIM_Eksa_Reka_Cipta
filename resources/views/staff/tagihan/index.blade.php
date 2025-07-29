<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SIM-P - Tagihan Siswa</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-white border-r border-gray-200">
                <div class="flex items-center justify-center h-24 px-4 text-white">
                    <div class="flex items-center px-4 py-6 border-b border-gray-200">
                        <img src="{{ asset('img/JADWAL.jpg') }}" alt="Logo" class="w-[212px] h-[69px]">
                    </div>
                </div>
                <div class="flex flex-col flex-grow overflow-y-auto">
                    <div class="px-4 py-6">                
                        <!-- Menu Items -->
                        <nav class="space-y-1">
                            <a href="/staff/dashboard" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-tachometer-alt mr-3 text-blue-500"></i>
                                Dashboard
                            </a>
                            
                            <a href="/staff/data-siswa" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-users mr-3 text-blue-500"></i>
                                Data Siswa
                            </a>
                            
                            <a href="/staff/data-guru" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-chalkboard-teacher mr-3 text-blue-500"></i>
                                Data Guru
                            </a>
                            
                            <a href="/staff/data-mapel" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-book-open mr-3 text-blue-500"></i>
                                Mata Pelajaran
                            </a>
                            
                            <a href="/staff/jadwal-pelajaran" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-calendar-alt mr-3 text-blue-500"></i>
                                Jadwal Pelajaran
                            </a>
                            
                            <a href="/staff/tagihan" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link active">
                                <i class="fas fa-file-invoice-dollar mr-3 text-blue-500"></i>
                                Tagihan Siswa
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-envelope mr-3 text-blue-500"></i>
                                Surat Masuk/Keluar
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-warehouse mr-3 text-blue-500"></i>
                                Inventaris Sekolah
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-fingerprint mr-3 text-blue-500"></i>
                                Presensi Staff
                            </a>
                        </nav>
                    </div>
                </div>
                
                <!-- Bottom Profile -->
                <div class="p-4 border-t border-gray-200">
                    <a href="#" class="flex items-center px-2 py-2 text-sm font-medium rounded-md sidebar-link">
                        <i class="fas fa-user-circle mr-3 text-blue-500"></i>
                        Profil
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
         <div class="content flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <div class="bg-white border-b border-gray-200 p-4 flex justify-between items-center">
                <div class="flex items-center">
                    <button id="mobileToggleSidebar" class="p-2 mr-2 rounded-lg hover:bg-gray-100 md:hidden">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 id="pageTitle" class="text-xl font-semibold text-gray-800">Data Tagihan Siswa</h1>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="p-2 rounded-full hover:bg-gray-100 relative">
                        <i class="fas fa-bell text-gray-500"></i>
                    </button>
                    <div class="flex items-center mb-1">
                        <img class="h-10 w-10 rounded-full object-cover" src="https://placehold.co/100x100" alt="Foto profil staff TU dengan jas formal">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-700">Staff TU</p>
                            <p class="text-xs text-gray-500">Bagian Administrasi</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="flex-1 overflow-y-auto p-6 bg-gray-50">
                <!-- Header and Filters -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-3">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Daftar Tagihan</h2>
                        <p class="text-gray-600">Kelola pembayaran dan tagihan siswa</p>
                    </div>
                    <div class="flex flex-wrap gap-3 w-full md:w-auto">
                        <select id="filterKelasTagihan" class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Filter Kelas</option>
                            <option value="X IPA">X IPA</option>
                            <option value="X IPS">X IPS</option>
                            <option value="XI IPA">XI IPA</option>
                            <option value="XI IPS">XI IPS</option>
                            <option value="XII IPA">XII IPA</option>
                            <option value="XII IPS">XII IPS</option>
                        </select>
                        <select id="filterJenisTagihan" class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Semua Jenis</option>
                            <option value="SPP">SPP Bulanan</option>
                            <option value="Semester">Pembayaran Semester</option>
                            <option value="Uang Gedung">Uang Gedung</option>
                            <option value="Infaq">Infaq Jum'at</option>
                            <option value="Buku">Pembayaran Buku</option>
                            <option value="Seragam">Pembayaran Seragam</option>
                        </select>
                        <select id="filterStatusTagihan" class="rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Semua Status</option>
                            <option value="Lunas">Lunas</option>
                            <option value="Belum Lunas">Belum Lunas</option>
                        </select>
                        <button id="btnTambahTagihan" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                            <i class="fas fa-plus mr-2"></i>Tambah Tagihan
                        </button>
                    </div>
                </div>

                <!-- Tagihan Table -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Siswa</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Tagihan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                            </thead>
                            <tbody id="tagihanTableBody" class="bg-white divide-y divide-gray-200">
                            <!-- Data akan diisi JS -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah/Edit Tagihan -->
    <div id="modalTagihan" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
            <div class="flex justify-between items-center border-b pb-3">
                <h3 id="modalTagihanTitle" class="text-lg font-semibold text-gray-800">Tambah Tagihan</h3>
                <button onclick="closeModal('modalTagihan')" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="mt-4">
                <form id="formTagihan">
                    <input type="hidden" id="tagihanId" />
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="namaSiswaTagihan" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                        <input type="text" id="namaSiswaTagihan" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label for="kelasTagihan" class="block text-sm font-medium text-gray-700">Kelas</label>
                        <select id="kelasTagihan" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">Pilih Kelas</option>
                        <option value="X IPA">X IPA</option>
                        <option value="X IPS">X IPS</option>
                        <option value="XI IPA">XI IPA</option>
                        <option value="XI IPS">XI IPS</option>
                        <option value="XII IPA">XII IPA</option>
                        <option value="XII IPS">XII IPS</option>
                        </select>
                    </div>
                    <div>
                        <label for="jenisTagihanInput" class="block text-sm font-medium text-gray-700">Jenis Tagihan</label>
                        <select id="jenisTagihanInput" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">Pilih Jenis</option>
                        <option value="SPP">SPP Bulanan</option>
                        <option value="Semester">Pembayaran Semester</option>
                        <option value="Uang Gedung">Uang Gedung</option>
                        <option value="Infaq">Infaq Jum'at</option>
                        <option value="Buku">Pembayaran Buku</option>
                        <option value="Seragam">Pembayaran Seragam</option>
                        </select>
                    </div>
                    <div>
                        <label for="jumlahTagihanInput" class="block text-sm font-medium text-gray-700">Jumlah (Rp)</label>
                        <input type="number" id="jumlahTagihanInput" min="1" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                    </div>
                    <div class="md:col-span-2">
                        <label for="keteranganTagihan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                        <textarea id="keteranganTagihan" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>
                    </div>
                    <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" onclick="closeModal('modalTagihan')" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Batal</button>
                    <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Pembayaran -->
    <div id="modalPembayaran" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
        <div class="flex justify-between items-center border-b pb-3">
        <h3 class="text-lg font-semibold text-gray-800">Pembayaran Tagihan</h3>
        <button onclick="closeModal('modalPembayaran')" class="text-gray-500 hover:text-gray-700">
            <i class="fas fa-times"></i>
        </button>
        </div>
        <div class="mt-4">
            <form id="formPembayaran">
                <input type="hidden" id="pembayaranId" />
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="md:col-span-2">
                    <label for="namaSiswaBayar" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                    <input type="text" id="namaSiswaBayar" readonly class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100" />
                </div>
                <div>
                    <label for="jenisTagihanBayar" class="block text-sm font-medium text-gray-700">Jenis Tagihan</label>
                    <input type="text" id="jenisTagihanBayar" readonly class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100" />
                </div>
                <div>
                    <label for="jumlahTagihanBayar" class="block text-sm font-medium text-gray-700">Jumlah Tagihan</label>
                    <input type="text" id="jumlahTagihanBayar" readonly class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100" />
                </div>
                <div>
                    <label for="jumlahBayarInput" class="block text-sm font-medium text-gray-700">Jumlah Bayar (Rp)</label>
                    <input type="number" id="jumlahBayarInput" min="1" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                </div>
                <div>
                    <label for="tanggalBayarInput" class="block text-sm font-medium text-gray-700">Tanggal Bayar</label>
                    <input type="date" id="tanggalBayarInput" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                </div>
                <div>
                    <label for="metodeBayarInput" class="block text-sm font-medium text-gray-700">Metode Bayar</label>
                    <select id="metodeBayarInput" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    <option value="">Pilih Metode</option>
                    <option value="Tunai">Tunai</option>
                    <option value="Transfer">Transfer Bank</option>
                    <option value="Kartu Debit">Kartu Debit</option>
                    <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label for="keteranganBayarInput" class="block text-sm font-medium text-gray-700">Keterangan</label>
                    <textarea id="keteranganBayarInput" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                </div>
                </div>
                <div class="mt-6 flex justify-end space-x-3">
                <button type="button" onclick="closeModal('modalPembayaran')" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Batal</button>
                <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">Simpan Pembayaran</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
  // Data dummy tagihan siswa
  let tagihanSiswaData = [
    { id: 1, nis: '2023001', nama: 'Andi Setiawan', kelas: 'X IPA', jenis: 'SPP', bulan: 'Januari 2023', jumlah: 500000, status: 'Belum Lunas', jatuhTempo: '2023-01-10' },
    { id: 2, nis: '2023001', nama: 'Andi Setiawan', kelas: 'X IPA', jenis: 'Semester', periode: 'Semester 1 2023', jumlah: 2500000, status: 'Belum Lunas' },
    { id: 3, nis: '2023002', nama: 'Budi Santoso', kelas: 'X IPS', jenis: 'SPP', bulan: 'Januari 2023', jumlah: 500000, status: 'Lunas', tanggalBayar: '2023-01-05' },
    { id: 4, nis: '2023003', nama: 'Citra Dewi', kelas: 'XI IPA', jenis: 'Uang Gedung', jumlah: 1500000, status: 'Belum Lunas' },
    { id: 5, nis: '2023004', nama: 'Dewi Lestari', kelas: 'XI IPS', jenis: 'Infaq', jumlah: 50000, status: 'Belum Lunas' },
    { id: 6, nis: '2023005', nama: 'Eko Prabowo', kelas: 'XII IPA', jenis: 'Buku', jumlah: 300000, status: 'Lunas', tanggalBayar: '2023-01-15' },
    { id: 7, nis: '2023006', nama: 'Fani Wulandari', kelas: 'XII IPS', jenis: 'Seragam', jumlah: 600000, status: 'Belum Lunas' },
    ];
      // Render tagihan dengan filter
  function renderTagihan(filterKelas = '', filterJenis = '', filterStatus = '') {
    const tbody = document.getElementById('tagihanTableBody');
    tbody.innerHTML = '';

    const filtered = tagihanSiswaData.filter(t =>
      (!filterKelas || t.kelas === filterKelas) &&
      (!filterJenis || t.jenis === filterJenis) &&
      (!filterStatus || t.status === filterStatus)
    );

    if (filtered.length === 0) {
      tbody.innerHTML = `<tr><td colspan="7" class="p-4 text-center text-gray-500">Tidak ada data tagihan untuk filter yang dipilih</td></tr>`;
      return;
    }

    filtered.forEach((t, i) => {
      tbody.insertAdjacentHTML('beforeend', `
        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 whitespace-nowrap text-center">${i + 1}</td>
          <td class="px-6 py-4 whitespace-nowrap">${t.nama}</td>
          <td class="px-6 py-4 whitespace-nowrap">${t.kelas}</td>
          <td class="px-6 py-4 whitespace-nowrap">${t.jenis}</td>
          <td class="px-6 py-4 whitespace-nowrap">Rp${t.jumlah.toLocaleString()}</td>
          <td class="px-6 py-4 whitespace-nowrap">
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${t.status === 'Lunas' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800'}">${t.status}</span>
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <button onclick="showPembayaranModal(${t.id})" class="text-blue-600 hover:text-blue-900 mr-3" title="Bayar" ${t.status === 'Lunas' ? 'disabled title="Sudah Lunas"' : ''}>
              <i class="fas fa-money-bill-wave"></i>
            </button>
            <button onclick="showEditTagihanModal(${t.id})" class="text-yellow-600 hover:text-yellow-900 mr-3" title="Edit">
              <i class="fas fa-edit"></i>
            </button>
            <button onclick="deleteTagihan(${t.id})" class="text-red-600 hover:text-red-900" title="Hapus">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>
      `);
    });
  }

  // Buka modal tambah tagihan
  function openTambahTagihanModal() {
    document.getElementById('modalTagihanTitle').textContent = 'Tambah Tagihan';
    document.getElementById('tagihanId').value = '';
    document.getElementById('namaSiswaTagihan').value = '';
    document.getElementById('kelasTagihan').value = '';
    document.getElementById('jenisTagihanInput').value = '';
    document.getElementById('jumlahTagihanInput').value = '';
    document.getElementById('keteranganTagihan').value = '';
    openModal('modalTagihan');
  }

  // Buka modal edit tagihan dan isi data
  function showEditTagihanModal(id) {
    const tagihan = tagihanSiswaData.find(t => t.id === id);
    if (!tagihan) return alert('Data tagihan tidak ditemukan.');

    document.getElementById('modalTagihanTitle').textContent = 'Edit Tagihan';
    document.getElementById('tagihanId').value = tagihan.id;
    document.getElementById('namaSiswaTagihan').value = tagihan.nama;
    document.getElementById('kelasTagihan').value = tagihan.kelas;
    document.getElementById('jenisTagihanInput').value = tagihan.jenis;
    document.getElementById('jumlahTagihanInput').value = tagihan.jumlah;
    document.getElementById('keteranganTagihan').value = tagihan.keterangan || '';
    openModal('modalTagihan');
  }

  // Simpan tambah/edit tagihan
  document.getElementById('formTagihan').addEventListener('submit', function(e) {
    e.preventDefault();
    const id = document.getElementById('tagihanId').value;
    const nama = document.getElementById('namaSiswaTagihan').value.trim();
    const kelas = document.getElementById('kelasTagihan').value;
    const jenis = document.getElementById('jenisTagihanInput').value;
    const jumlah = parseInt(document.getElementById('jumlahTagihanInput').value);
    const keterangan = document.getElementById('keteranganTagihan').value.trim();

    if (!nama || !kelas || !jenis || !jumlah || jumlah <= 0) {
      alert('Mohon isi semua field dengan benar.');
      return;
    }

    if (id) {
      // Edit
      const index = tagihanSiswaData.findIndex(t => t.id == id);
      if (index !== -1) {
        tagihanSiswaData[index] = {
          ...tagihanSiswaData[index],
          nama,
          kelas,
          jenis,
          jumlah,
          keterangan,
          // Jangan reset status dan tanggal bayar saat edit data tagihan
        };
      }
    } else {
      // Tambah baru
      const newId = tagihanSiswaData.length > 0 ? Math.max(...tagihanSiswaData.map(t => t.id)) + 1 : 1;
      tagihanSiswaData.push({
        id: newId,
        nis: '', // bisa ditambah jika ada data NIS
        nama,
        kelas,
        jenis,
        jumlah,
        status: 'Belum Lunas',
        keterangan
      });
    }

    closeModal('modalTagihan');
    renderTagihan(
      document.getElementById('filterKelasTagihan').value,
      document.getElementById('filterJenisTagihan').value,
      document.getElementById('filterStatusTagihan').value
    );
  });

  // Hapus tagihan
  function deleteTagihan(id) {
    if (!confirm('Apakah Anda yakin ingin menghapus tagihan ini?')) return;
    tagihanSiswaData = tagihanSiswaData.filter(t => t.id !== id);
    renderTagihan(
      document.getElementById('filterKelasTagihan').value,
      document.getElementById('filterJenisTagihan').value,
      document.getElementById('filterStatusTagihan').value
    );
  }

  // Buka modal pembayaran dan isi data
  function showPembayaranModal(id) {
    const tagihan = tagihanSiswaData.find(t => t.id === id);
    if (!tagihan) return alert('Data tagihan tidak ditemukan.');
    if (tagihan.status === 'Lunas') return alert('Tagihan sudah lunas.');

    document.getElementById('pembayaranId').value = id;
    document.getElementById('namaSiswaBayar').value = tagihan.nama;
    document.getElementById('jenisTagihanBayar').value = tagihan.jenis;
    document.getElementById('jumlahTagihanBayar').value = `Rp${tagihan.jumlah.toLocaleString()}`;
    document.getElementById('jumlahBayarInput').value = tagihan.jumlah;
    document.getElementById('tanggalBayarInput').valueAsDate = new Date();
    document.getElementById('metodeBayarInput').value = '';
    document.getElementById('keteranganBayarInput').value = '';

    openModal('modalPembayaran');
  }

  // Simpan pembayaran
  document.getElementById('formPembayaran').addEventListener('submit', function(e) {
    e.preventDefault();
    const id = document.getElementById('pembayaranId').value;
    const jumlahBayar = parseInt(document.getElementById('jumlahBayarInput').value);
    const tanggalBayar = document.getElementById('tanggalBayarInput').value;
    const metodeBayar = document.getElementById('metodeBayarInput').value;
    const keterangan = document.getElementById('keteranganBayarInput').value.trim();

    if (!jumlahBayar || jumlahBayar <= 0 || !tanggalBayar || !metodeBayar) {
      alert('Mohon isi semua field pembayaran dengan benar.');
      return;
    }

    const tagihan = tagihanSiswaData.find(t => t.id == id);
    if (!tagihan) {
      alert('Data tagihan tidak ditemukan.');
      return;
    }

    // Update status lunas jika bayar >= jumlah tagihan
    tagihan.status = jumlahBayar >= tagihan.jumlah ? 'Lunas' : 'Belum Lunas';
    tagihan.tanggalBayar = tanggalBayar;
    tagihan.metodeBayar = metodeBayar;
    tagihan.keteranganBayar = keterangan;
    tagihan.jumlahBayar = jumlahBayar;

    closeModal('modalPembayaran');
    renderTagihan(
      document.getElementById('filterKelasTagihan').value,
      document.getElementById('filterJenisTagihan').value,
      document.getElementById('filterStatusTagihan').value
    );
    alert('Pembayaran berhasil disimpan.');
  });

  // Modal open/close helper
  function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }
  function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
    document.body.style.overflow = 'auto';
  }

  // Event listeners filter dan tombol tambah
  document.getElementById('filterKelasTagihan').addEventListener('change', () => {
    renderTagihan(
      document.getElementById('filterKelasTagihan').value,
      document.getElementById('filterJenisTagihan').value,
      document.getElementById('filterStatusTagihan').value
    );
  });
  document.getElementById('filterJenisTagihan').addEventListener('change', () => {
    renderTagihan(
      document.getElementById('filterKelasTagihan').value,
      document.getElementById('filterJenisTagihan').value,
      document.getElementById('filterStatusTagihan').value
    );
  });
  document.getElementById('filterStatusTagihan').addEventListener('change', () => {
    renderTagihan(
      document.getElementById('filterKelasTagihan').value,
      document.getElementById('filterJenisTagihan').value,
      document.getElementById('filterStatusTagihan').value
    );
  });
  document.getElementById('btnTambahTagihan').addEventListener('click', openTambahTagihanModal);

  // Inisialisasi render awal
  renderTagihan();
</script>
</body>
</html>