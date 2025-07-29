<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SIM-P - Inventaris Sekolah</title>
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
          <img src="{{ asset('img/JADWAL.jpg') }}" alt="Logo" class="w-[212px] h-[69px]" />
        </div>
      </div>
      <div class="flex flex-col flex-grow overflow-y-auto">
        <div class="px-4 py-6">
          <nav class="space-y-1">
            <a href="/staff/dashboard" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
              <i class="fas fa-tachometer-alt mr-3 text-blue-500"></i>Dashboard
            </a>
            <a href="/staff/inventaris" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link active">
              <i class="fas fa-boxes mr-3 text-blue-500"></i>Inventaris
            </a>
            <!-- Tambahkan menu lain sesuai kebutuhan -->
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="content flex-1 flex flex-col overflow-hidden">
    <!-- Top Navigation -->
    <div class="bg-white border-b border-gray-200 p-4 flex justify-between items-center">
      <h1 class="text-xl font-semibold text-gray-800">Inventaris Sekolah</h1>
      <button id="btnTambahInventaris" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
        <i class="fas fa-plus mr-2"></i>Tambah Inventaris
      </button>
    </div>

    <!-- Content Area -->
    <div class="flex-1 overflow-y-auto p-6 bg-gray-50">
      <!-- Inventaris Table -->
      <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Barang</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kondisi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lokasi</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
              </tr>
            </thead>
            <tbody id="inventarisTableBody" class="bg-white divide-y divide-gray-200">
              <!-- Data akan diisi JS -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah/Edit Inventaris -->
<div id="modalInventaris" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
  <div class="relative top-20 mx-auto p-5 border w-full max-w-3xl shadow-lg rounded-md bg-white">
    <div class="flex justify-between items-center border-b pb-3">
      <h3 id="modalInventarisTitle" class="text-lg font-semibold text-gray-800">Tambah Inventaris</h3>
      <button onclick="closeModal('modalInventaris')" class="text-gray-500 hover:text-gray-700">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <div class="mt-4">
      <form id="formInventaris">
        <input type="hidden" id="inventarisId" />
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="namaBarang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
            <input type="text" id="namaBarang" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>
          <div>
            <label for="jumlahBarang" class="block text-sm font-medium text-gray-700">Jumlah</label>
            <input type="number" id="jumlahBarang" min="1" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>
          <div>
            <label for="kondisiBarang" class="block text-sm font-medium text-gray-700">Kondisi</label>
            <select id="kondisiBarang" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
              <option value="">Pilih Kondisi</option>
              <option value="Baik">Baik</option>
              <option value="Rusak Ringan">Rusak Ringan</option>
              <option value="Rusak Berat">Rusak Berat</option>
            </select>
          </div>
          <div>
            <label for="lokasiBarang" class="block text-sm font-medium text-gray-700">Lokasi</label>
            <input type="text" id="lokasiBarang" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>
          <div class="md:col-span-2">
            <label for="keteranganBarang" class="block text-sm font-medium text-gray-700">Keterangan</label>
            <textarea id="keteranganBarang" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
          </div>
        </div>
        <div class="mt-6 flex justify-end space-x-3">
          <button type="button" onclick="closeModal('modalInventaris')" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Batal</button>
          <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  // Data dummy inventaris
  let inventarisData = [
    { id: 1, nama: 'Meja Guru', jumlah: 10, kondisi: 'Baik', lokasi: 'Ruang Guru', keterangan: 'Meja kayu jati' },
    { id: 2, nama: 'Kursi Siswa', jumlah: 100, kondisi: 'Baik', lokasi: 'Kelas X IPA', keterangan: '' },
    { id: 3, nama: 'Proyektor', jumlah: 2, kondisi: 'Rusak Ringan', lokasi: 'Lab Komputer', keterangan: 'Perlu perbaikan minor' },
  ];

  // Render inventaris
  function renderInventaris() {
    const tbody = document.getElementById('inventarisTableBody');
    tbody.innerHTML = '';

    inventarisData.forEach((item, index) => {
      tbody.insertAdjacentHTML('beforeend', `
        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 whitespace-nowrap text-center">${index + 1}</td>
          <td class="px-6 py-4 whitespace-nowrap">${item.nama}</td>
          <td class="px-6 py-4 whitespace-nowrap">${item.jumlah}</td>
          <td class="px-6 py-4 whitespace-nowrap">${item.kondisi}</td>
          <td class="px-6 py-4 whitespace-nowrap">${item.lokasi}</td>
          <td class="px-6 py-4 whitespace-nowrap">${item.keterangan || '-'}</td>
          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <button onclick="showEditInventarisModal(${item.id})" class="text-yellow-600 hover:text-yellow-900 mr-3" title="Edit">
              <i class="fas fa-edit"></i>
            </button>
            <button onclick="deleteInventaris(${item.id})" class="text-red-600 hover:text-red-900" title="Hapus">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>
      `);
    });
  }

  // Buka modal tambah inventaris
  document.getElementById('btnTambahInventaris').addEventListener('click', function() {
    document.getElementById('modalInventarisTitle').textContent = 'Tambah Inventaris';
    document.getElementById('inventarisId').value = '';
    document.getElementById('namaBarang').value = '';
    document.getElementById('jumlahBarang').value = '';
    document.getElementById('kondisiBarang').value = '';
    document.getElementById('lokasiBarang').value = '';
    document.getElementById('keteranganBarang').value = '';
    openModal('modalInventaris');
  });

  // Simpan data inventaris
  document.getElementById('formInventaris').addEventListener('submit', function(e) {
    e.preventDefault();
    const id = document.getElementById('inventarisId').value;
    const nama = document.getElementById('namaBarang').value.trim();
    const jumlah = parseInt(document.getElementById('jumlahBarang').value);
    const kondisi = document.getElementById('kondisiBarang').value;
    const lokasi = document.getElementById('lokasiBarang').value.trim();
    const keterangan = document.getElementById('keteranganBarang').value.trim();

    if (!nama || !jumlah || jumlah <= 0 || !kondisi || !lokasi) {
      alert('Mohon isi semua field yang wajib dengan benar.');
      return;
    }

    if (id) {
      // Edit
      const index = inventarisData.findIndex(i => i.id == id);
      if (index !== -1) {
        inventarisData[index] = { id: parseInt(id), nama, jumlah, kondisi, lokasi, keterangan };
      }
    } else {
      // Tambah baru
      const newId = inventarisData.length > 0 ? Math.max(...inventarisData.map(i => i.id)) + 1 : 1;
      inventarisData.push({ id: newId, nama, jumlah, kondisi, lokasi, keterangan });
    }

    closeModal('modalInventaris');
    renderInventaris();
  });

  // Hapus data inventaris
  function deleteInventaris(id) {
    if (!confirm('Apakah Anda yakin ingin menghapus data ini?')) return;
    inventarisData = inventarisData.filter(i => i.id !== id);
    renderInventaris();
  }

  // Buka modal edit inventaris
  function showEditInventarisModal(id) {
    const item = inventarisData.find(i => i.id === id);
    if (!item) return alert('Data tidak ditemukan.');

    document.getElementById('modalInventarisTitle').textContent = 'Edit Inventaris';
    document.getElementById('inventarisId').value = item.id;
    document.getElementById('namaBarang').value = item.nama;
    document.getElementById('jumlahBarang').value = item.jumlah;
    document.getElementById('kondisiBarang').value = item.kondisi;
    document.getElementById('lokasiBarang').value = item.lokasi;
    document.getElementById('keteranganBarang').value = item.keterangan;
    openModal('modalInventaris');
  }

  // Modal open/close helper
  function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  }
  function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
    document.body.style.overflow = 'auto';
  }

  // Inisialisasi render awal
  renderInventaris();
</script>
</body>
</html>
