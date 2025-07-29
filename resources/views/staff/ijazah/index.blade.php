<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SIM-P - Ijazah</title>
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
            <a href="/staff/surat" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
              <i class="fas fa-file-alt mr-3 text-blue-500"></i>Surat
            </a>
            <a href="/staff/ijazah" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link active">
              <i class="fas fa-graduation-cap mr-3 text-blue-500"></i>Ijazah
            </a>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="content flex-1 flex flex-col overflow-hidden">
    <!-- Top Navigation -->
    <div class="bg-white border-b border-gray-200 p-4 flex justify-between items-center">
      <h1 class="text-xl font-semibold text-gray-800">Daftar Ijazah</h1>
      <button id="btnTambahIjazah" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
        <i class="fas fa-plus mr-2"></i>Tambah Data
      </button>
    </div>

    <!-- Content Area -->
    <div class="flex-1 overflow-y-auto p-6 bg-gray-50">
      <!-- Ijazah Table -->
      <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Siswa</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun Lulus</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas Terakhir</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggungan</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
              </tr>
            </thead>
            <tbody id="ijazahTableBody" class="bg-white divide-y divide-gray-200">
              <!-- Data akan diisi JS -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah/Edit Ijazah -->
<div id="modalIjazah" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
  <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
    <div class="flex justify-between items-center border-b pb-3">
      <h3 id="modalIjazahTitle" class="text-lg font-semibold text-gray-800">Tambah Data Ijazah</h3>
      <button onclick="closeModal('modalIjazah')" class="text-gray-500 hover:text-gray-700">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <div class="mt-4">
      <form id="formIjazah">
        <input type="hidden" id="ijazahId" />
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div>
            <label for="namaIjazah" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
            <input type="text" id="namaIjazah" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>
          <div>
            <label for="tahunLulus" class="block text-sm font-medium text-gray-700">Tahun Lulus</label>
            <input type="number" id="tahunLulus" min="1900" max="2100" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>
          <div>
            <label for="kelasTerakhir" class="block text-sm font-medium text-gray-700">Kelas Terakhir</label>
            <input type="text" id="kelasTerakhir" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
          </div>
          <div>
            <label for="statusIjazah" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="statusIjazah" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
              <option value="Belum Diambil">Belum Diambil</option>
              <option value="Diambil">Diambil</option>
            </select>
          </div>
          <div class="md:col-span-2">
            <label for="tanggunganIjazah" class="block text-sm font-medium text-gray-700">Tanggungan</label>
            <textarea id="tanggunganIjazah" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
          </div>
        </div>
        <div class="mt-6 flex justify-end space-x-3">
          <button type="button" onclick="closeModal('modalIjazah')" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Batal</button>
          <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  // Data dummy ijazah
  let ijazahData = [
    { id: 1, nama: 'Andi Setiawan', tahunLulus: 2020, kelasTerakhir: 'XII IPA', status: 'Belum Diambil', tanggungan: 'SPP Bulanan' },
    { id: 2, nama: 'Budi Santoso', tahunLulus: 2019, kelasTerakhir: 'XII IPS', status: 'Diambil', tanggungan: '' },
    { id: 3, nama: 'Citra Dewi', tahunLulus: 2021, kelasTerakhir: 'XII IPA', status: 'Belum Diambil', tanggungan: 'Uang Gedung' },
    { id: 4, nama: 'Dewi Lestari', tahunLulus: 2018, kelasTerakhir: 'XII IPS', status: 'Diambil', tanggungan: '' },
  ];

  // Render ijazah
  function renderIjazah() {
    const tbody = document.getElementById('ijazahTableBody');
    tbody.innerHTML = '';

    ijazahData.forEach((ijazah, index) => {
      tbody.insertAdjacentHTML('beforeend', `
        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 whitespace-nowrap text-center">${index + 1}</td>
          <td class="px-6 py-4 whitespace-nowrap">${ijazah.nama}</td>
          <td class="px-6 py-4 whitespace-nowrap">${ijazah.tahunLulus}</td>
          <td class="px-6 py-4 whitespace-nowrap">${ijazah.kelasTerakhir}</td>
          <td class="px-6 py-4 whitespace-nowrap">${ijazah.status}</td>
          <td class="px-6 py-4 whitespace-nowrap">${ijazah.tanggungan || 'Tidak ada'}</td>
          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <button onclick="showEditIjazahModal(${ijazah.id})" class="text-yellow-600 hover:text-yellow-900 mr-3" title="Edit">
              <i class="fas fa-edit"></i>
            </button>
            <button onclick="deleteIjazah(${ijazah.id})" class="text-red-600 hover:text-red-900" title="Hapus">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>
      `);
    });
  }

  // Buka modal tambah ijazah
  document.getElementById('btnTambahIjazah').addEventListener('click', function() {
    document.getElementById('modalIjazahTitle').textContent = 'Tambah Data Ijazah';
    document.getElementById('ijazahId').value = '';
    document.getElementById('namaIjazah').value = '';
    document.getElementById('tahunLulus').value = '';
    document.getElementById('kelasTerakhir').value = '';
    document.getElementById('statusIjazah').value = 'Belum Diambil';
    document.getElementById('tanggunganIjazah').value = '';
    openModal('modalIjazah');
  });

  // Simpan data ijazah
  document.getElementById('formIjazah').addEventListener('submit', function(e) {
    e.preventDefault();
    const id = document.getElementById('ijazahId').value;
    const nama = document.getElementById('namaIjazah').value.trim();
    const tahunLulus = parseInt(document.getElementById('tahunLulus').value);
    const kelasTerakhir = document.getElementById('kelasTerakhir').value.trim();
    const status = document.getElementById('statusIjazah').value;
    const tanggungan = document.getElementById('tanggunganIjazah').value.trim();

    if (!nama || !tahunLulus || !kelasTerakhir || !status) {
      alert('Mohon isi semua field dengan benar.');
      return;
    }

    if (id) {
      // Edit
      const index = ijazahData.findIndex(i => i.id == id);
      if (index !== -1) {
        ijazahData[index] = { id: parseInt(id), nama, tahunLulus, kelasTerakhir, status, tanggungan };
      }
    } else {
      // Tambah baru
      const newId = ijazahData.length > 0 ? Math.max(...ijazahData.map(i => i.id)) + 1 : 1;
      ijazahData.push({ id: newId, nama, tahunLulus, kelasTerakhir, status, tanggungan });
    }

    closeModal('modalIjazah');
    renderIjazah();
  });

  // Hapus data ijazah
  function deleteIjazah(id) {
    if (!confirm('Apakah Anda yakin ingin menghapus data ini?')) return;
    ijazahData = ijazahData.filter(i => i.id !== id);
    renderIjazah();
  }

  // Buka modal edit ijazah
  function showEditIjazahModal(id) {
    const ijazah = ijazahData.find(i => i.id === id);
    if (!ijazah) return alert('Data tidak ditemukan.');

    document.getElementById('modalIjazahTitle').textContent = 'Edit Data Ijazah';
    document.getElementById('ijazahId').value = ijazah.id;
    document.getElementById('namaIjazah').value = ijazah.nama;
    document.getElementById('tahunLulus').value = ijazah.tahunLulus;
    document.getElementById('kelasTerakhir').value = ijazah.kelasTerakhir;
    document.getElementById('statusIjazah').value = ijazah.status;
    document.getElementById('tanggunganIjazah').value = ijazah.tanggungan;
    openModal('modalIjazah');
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
  renderIjazah();
</script>
</body>
</html>
