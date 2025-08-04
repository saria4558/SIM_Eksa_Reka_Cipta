@extends('staff.layouts.app')

@section('title', 'Dashboard - SIM-P')

@section('content')

<!-- Main Content -->
    <div class="content flex-1 flex flex-col overflow-hidden">
        <!-- Top Navigation -->
        <div class="bg-white border-b border-gray-200 p-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-800">Surat Masuk/Keluar</h1>
            <div class="flex items-center space-x-3">
                <button id="btnTambahSurat" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                    <i class="fas fa-plus mr-2"></i>Tambah Surat
                </button>
            </div>
        </div>

        <!-- Content Area -->
        <div class="flex-1 overflow-y-auto p-6 bg-gray-50">
            <!-- Surat Table -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kegiatan</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ditujukan Kepada</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="suratTableBody" class="bg-white divide-y divide-gray-200">
                            <!-- Data akan diisi JS -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah/Edit Surat -->
<div id="modalSurat" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
        <div class="flex justify-between items-center border-b pb-3">
            <h3 id="modalSuratTitle" class="text-lg font-semibold text-gray-800">Tambah Surat</h3>
            <button onclick="closeModal('modalSurat')" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="mt-4">
            <form id="formSurat">
                <input type="hidden" id="suratId" />
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label for="tanggalSurat" class="block text-sm font-medium text-gray-700">Tanggal</label>
                        <input type="date" id="tanggalSurat" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label for="kegiatanSurat" class="block text-sm font-medium text-gray-700">Kegiatan</label>
                        <textarea id="kegiatanSurat" rows="3" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>
                    <div>
                        <label for="ditujukanKepada" class="block text-sm font-medium text-gray-700">Ditujukan Kepada</label>
                        <input type="text" id="ditujukanKepada" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                    </div>
                    <div>
                        <label for="ttdSurat" class="block text-sm font-medium text-gray-700">Tanda Tangan</label>
                        <input type="text" id="ttdSurat" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                    </div>
                </div>
                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" onclick="closeModal('modalSurat')" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">Batal</button>
                    <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Detail Surat -->
<div id="modalDetailSurat" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
        <div class="flex justify-between items-center border-b pb-3">
            <h3 class="text-lg font-semibold text-gray-800">Detail Surat</h3>
            <button onclick="closeModal('modalDetailSurat')" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="mt-4">
            <div class="kop-surat">
                <h1>Nama Sekolah</h1>
                <h2>Alamat Sekolah</h2>
                <p>Telepon: (021) 12345678</p>
                <p>Email: info@sekolah.com</p>
            </div>
            <p id="detailTanggal" class="text-sm font-medium text-gray-800"></p>
            <p id="detailKegiatan" class="mt-2 text-sm text-gray-600"></p>
            <p id="detailDitujukanKepada" class="mt-2 text-sm font-medium text-gray-800"></p>
            <p id="detailTandaTangan" class="mt-2 text-sm font-medium text-gray-800"></p>
        </div>
        <div class="mt-6 flex justify-end">
            <button onclick="closeModal('modalDetailSurat')" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">Tutup</button>
        </div>
    </div>
</div>

<script>
  // Data dummy surat
  let suratData = [
    {
      id: 1,
      tanggal: '2023-01-01',
      kegiatan: 'Pertemuan dengan orang tua siswa',
      ditujukanKepada: 'Kepala Sekolah',
      ttd: 'Andi Setiawan'
    },
    {
      id: 2,
      tanggal: '2023-01-05',
      kegiatan: 'Pertemuan dengan guru mata pelajaran',
      ditujukanKepada: 'Wakil Kepala Sekolah',
      ttd: 'Budi Santoso'
    },
    {
      id: 3,
      tanggal: '2023-01-10',
      kegiatan: 'Pertemuan dengan komite sekolah',
      ditujukanKepada: 'Kepala Sekolah',
      ttd: 'Citra Dewi'
    }
  ];

  // Render surat
  function renderSurat() {
    const tbody = document.getElementById('suratTableBody');
    tbody.innerHTML = '';

    suratData.forEach((surat, index) => {
      tbody.insertAdjacentHTML('beforeend', `
        <tr class="hover:bg-gray-50">
          <td class="px-6 py-4 whitespace-nowrap text-center">${index + 1}</td>
          <td class="px-6 py-4 whitespace-nowrap">${surat.tanggal}</td>
          <td class="px-6 py-4 whitespace-nowrap">${surat.kegiatan}</td>
          <td class="px-6 py-4 whitespace-nowrap">${surat.ditujukanKepada}</td>
          <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
            <button onclick="showDetailSurat(${surat.id})" class="text-indigo-600 hover:text-indigo-900 mr-3" title="Detail">
              <i class="fas fa-eye"></i>
            </button>
            <button onclick="showEditSuratModal(${surat.id})" class="text-yellow-600 hover:text-yellow-900 mr-3" title="Edit">
              <i class="fas fa-edit"></i>
            </button>
            <button onclick="deleteSurat(${surat.id})" class="text-red-600 hover:text-red-900" title="Hapus">
              <i class="fas fa-trash"></i>
            </button>
          </td>
        </tr>
      `);
    });
  }

  // Buka modal tambah surat
  document.getElementById('btnTambahSurat').addEventListener('click', function() {
    document.getElementById('modalSuratTitle').textContent = 'Tambah Surat';
    document.getElementById('suratId').value = '';
    document.getElementById('tanggalSurat').value = '';
    document.getElementById('kegiatanSurat').value = '';
    document.getElementById('ditujukanKepada').value = '';
    document.getElementById('ttdSurat').value = '';
    openModal('modalSurat');
  });

  // Simpan surat
  document.getElementById('formSurat').addEventListener('submit', function(e) {
    e.preventDefault();
    const id = document.getElementById('suratId').value;
    const tanggal = document.getElementById('tanggalSurat').value;
    const kegiatan = document.getElementById('kegiatanSurat').value;
    const ditujukanKepada = document.getElementById('ditujukanKepada').value;
    const ttd = document.getElementById('ttdSurat').value;

    if (!tanggal || !kegiatan || !ditujukanKepada || !ttd) {
      alert('Mohon isi semua field dengan benar.');
      return;
    }

    if (id) {
      // Edit surat
      const index = suratData.findIndex(s => s.id == id);
      if (index !== -1) {
        suratData[index] = { id, tanggal, kegiatan, ditujukanKepada, ttd };
      }
    } else {
      // Tambah surat baru
      suratData.push({ id: suratData.length + 1, tanggal, kegiatan, ditujukanKepada, ttd });
    }

    closeModal('modalSurat');
    renderSurat();
  });

  // Hapus surat
  function deleteSurat(id) {
    if (!confirm('Apakah Anda yakin ingin menghapus surat ini?')) return;
    suratData = suratData.filter(s => s.id !== id);
    renderSurat();
  }

  // Tampilkan detail surat
  function showDetailSurat(id) {
    const surat = suratData.find(s => s.id === id);
    if (!surat) return alert('Data surat tidak ditemukan.');

    document.getElementById('detailTanggal').textContent = `Tanggal: ${surat.tanggal}`;
    document.getElementById('detailKegiatan').textContent = `Kegiatan: ${surat.kegiatan}`;
    document.getElementById('detailDitujukanKepada').textContent = `Ditujukan Kepada: ${surat.ditujukanKepada}`;
    document.getElementById('detailTandaTangan').textContent = `Tanda Tangan: ${surat.ttd}`;

    openModal('modalDetailSurat');
  }

  // Buka modal edit surat
  function showEditSuratModal(id) {
    const surat = suratData.find(s => s.id === id);
    if (!surat) return alert('Data surat tidak ditemukan.');

    document.getElementById('modalSuratTitle').textContent = 'Edit Surat';
    document.getElementById('suratId').value = surat.id;
    document.getElementById('tanggalSurat').value = surat.tanggal;
    document.getElementById('kegiatanSurat').value = surat.kegiatan;
    document.getElementById('ditujukanKepada').value = surat.ditujukanKepada;
    document.getElementById('ttdSurat').value = surat.ttd;
    openModal('modalSurat');
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
  renderSurat();
</script>

@endsection
