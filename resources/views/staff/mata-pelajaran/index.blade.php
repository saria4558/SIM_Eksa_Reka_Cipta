<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM-P - Data Mata Pelajaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar-link:hover {
            background-color: rgba(59, 130, 246, 0.1);
        }
        .sidebar-link.active {
            background-color: rgba(59, 130, 246, 0.2);
            border-left: 4px solid #3b82f6;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .transition-all {
            transition: all 0.3s ease;
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
                            
                            <a href="/staff/data-siswa" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link active">
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
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-calendar-alt mr-3 text-blue-500"></i>
                                Jadwal Pelajaran
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
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
                    <h1 id="pageTitle" class="text-xl font-semibold text-gray-800">Data Mata Pelajaran Siswa</h1>
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
                <!-- Header and Actions -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Daftar Mata Pelajaran</h2>
                        <p class="text-gray-600">Manajemen data mata pelajaran sekolah</p>
                    </div>
                    <div class="mt-4 md:mt-0 flex flex-col sm:flex-row gap-3">
                        <div class="relative">
                            <input type="text" id="searchInput" placeholder="Cari mata pelajaran..." 
                                   class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 pl-10">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                        </div>
                        <button onclick="openTambahModal()" 
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center justify-center">
                            <i class="fas fa-plus mr-2"></i>
                            Tambah Baru
                        </button>
                    </div>
                </div>

                <!-- Filter Options -->
                <div class="bg-white rounded-lg shadow p-4 mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="filterKurikulum" class="block text-sm font-medium text-gray-700 mb-1">Kurikulum</label>
                            <select id="filterKurikulum" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Semua Kurikulum</option>
                                <option value="2013">Kurikulum 2013</option>
                                <option value="Merdeka">Kurikulum Merdeka</option>
                            </select>
                        </div>
                        <div>
                            <label for="filterKelas" class="block text-sm font-medium text-gray-700 mb-1">Tingkat Kelas</label>
                            <select id="filterKelas" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Semua Kelas</option>
                                <option value="X">Kelas X</option>
                                <option value="XI">Kelas XI</option>
                                <option value="XII">Kelas XII</option>
                            </select>
                        </div>
                        <div>
                            <label for="filterJurusan" class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
                            <select id="filterJurusan" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Semua Jurusan</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                                <option value="Bahasa">Bahasa</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Mata Pelajaran Table -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mata Pelajaran</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kurikulum</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah Jam</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="mataPelajaranTableBody" class="bg-white divide-y divide-gray-200">
                                <!-- Data akan diisi oleh JavaScript -->
                            </tbody>
                        </table>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <p class="text-sm text-gray-700">
                                    Menampilkan <span class="font-medium">1</span> sampai <span class="font-medium">10</span> dari <span class="font-medium">24</span> hasil
                                </p>
                            </div>
                            <div>
                                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Previous</span>
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                    <a href="#" aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        1
                                    </a>
                                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        2
                                    </a>
                                    <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                                        3
                                    </a>
                                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">Next</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah/Edit Mata Pelajaran -->
    <div id="tambahMataPelajaranModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
            <div class="flex justify-between items-center border-b pb-3">
                <h3 class="text-lg font-semibold text-gray-800" id="modalTitle">Tambah Mata Pelajaran</h3>
                <button onclick="closeModal('tambahMataPelajaranModal')" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="mt-4">
                <form id="mataPelajaranForm">
                    <input type="hidden" id="mataPelajaranId">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="kode" class="block text-sm font-medium text-gray-700">Kode*</label>
                            <input type="text" id="kode" required placeholder="MAT101"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <p class="mt-1 text-xs text-gray-500">Kode unik untuk mata pelajaran</p>
                        </div>
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Mata Pelajaran*</label>
                            <input type="text" id="nama" required placeholder="Matematika"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="kurikulum" class="block text-sm font-medium text-gray-700">Kurikulum*</label>
                            <select id="kurikulum" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                <option value="">Pilih Kurikulum</option>
                                <option value="2013">Kurikulum 2013</option>
                                <option value="Merdeka">Kurikulum Merdeka</option>
                            </select>
                        </div>
                        <div>
                            <label for="jumlahJam" class="block text-sm font-medium text-gray-700">Jumlah Jam/Minggu*</label>
                            <input type="number" id="jumlahJam" required min="1" max="10" placeholder="4"
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div class="md:col-span-2">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea id="deskripsi" rows="3" placeholder="Deskripsi singkat mata pelajaran"
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Kelas yang Mengikuti</label>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="kelas-checkbox rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-offset-0 focus:ring-blue-200 focus:ring-opacity-50" value="X IPA">
                                <span class="ml-2">X IPA</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="kelas-checkbox rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-offset-0 focus:ring-blue-200 focus:ring-opacity-50" value="X IPS">
                                <span class="ml-2">X IPS</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="kelas-checkbox rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-offset-0 focus:ring-blue-200 focus:ring-opacity-50" value="XI IPA">
                                <span class="ml-2">XI IPA</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="kelas-checkbox rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-offset-0 focus:ring-blue-200 focus:ring-opacity-50" value="XI IPS">
                                <span class="ml-2">XI IPS</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="kelas-checkbox rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-offset-0 focus:ring-blue-200 focus:ring-opacity-50" value="XII IPA">
                                <span class="ml-2">XII IPA</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="checkbox" class="kelas-checkbox rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-offset-0 focus:ring-blue-200 focus:ring-opacity-50" value="XII IPS">
                                <span class="ml-2">XII IPS</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-3">
                        <button type="button" onclick="closeModal('tambahMataPelajaranModal')"
                                class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                            Batal
                        </button>
                        <button type="submit"
                                class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Detail Mata Pelajaran -->
    <div id="detailMataPelajaranModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
            <div class="flex justify-between items-center border-b pb-3">
                <h3 class="text-lg font-semibold text-gray-800">Detail Mata Pelajaran</h3>
                <button onclick="closeModal('detailMataPelajaranModal')" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="mt-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">Kode Mata Pelajaran</p>
                        <p id="detailKode" class="font-medium text-gray-800">-</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Nama Mata Pelajaran</p>
                        <p id="detailNama" class="font-medium text-gray-800">-</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Kurikulum</p>
                        <p id="detailKurikulum" class="font-medium text-gray-800">-</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Jumlah Jam/Minggu</p>
                        <p id="detailJumlahJam" class="font-medium text-gray-800">-</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-500">Deskripsi</p>
                        <p id="detailDeskripsi" class="font-medium text-gray-800">-</p>
                    </div>
                    <div class="md:col-span-2">
                        <p class="text-sm text-gray-500">Diajarkan di Kelas</p>
                        <div id="detailKelas" class="mt-2 flex flex-wrap gap-2">
                            <!-- Kelas akan diisi oleh JavaScript -->
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex justify-end">
                    <button onclick="closeModal('detailMataPelajaranModal')"
                            class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div id="confirmDeleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-full max-w-md shadow-lg rounded-md bg-white">
            <div class="flex justify-between items-center border-b pb-3">
                <h3 class="text-lg font-semibold text-gray-800">Konfirmasi Hapus</h3>
                <button onclick="closeModal('confirmDeleteModal')" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="mt-4">
                <p>Apakah Anda yakin ingin menghapus mata pelajaran ini?</p>
                <div class="mt-6 flex justify-end space-x-3">
                    <button onclick="closeModal('confirmDeleteModal')"
                            class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                        Batal
                    </button>
                    <button id="confirmDeleteBtn"
                            class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700">
                        Hapus
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sample data for mata pelajaran
        const mataPelajaranData = [
            {
                id: 1,
                kode: 'MAT101',
                nama: 'Matematika',
                kurikulum: '2013',
                jumlahJam: 4,
                deskripsi: 'Mempelajari konsep dasar matematika seperti aljabar, geometri, dan kalkulus',
                kelas: ['X IPA', 'XI IPA', 'XII IPA']
            },
            {
                id: 2,
                kode: 'BIO102',
                nama: 'Biologi',
                kurikulum: '2013',
                jumlahJam: 3,
                deskripsi: 'Mempelajari tentang makhluk hidup dan interaksinya dengan lingkungan',
                kelas: ['X IPA', 'XI IPA', 'XII IPA']
            },
            {
                id: 3,
                kode: 'FIS103',
                nama: 'Fisika',
                kurikulum: '2013',
                jumlahJam: 4,
                deskripsi: 'Mempelajari tentang hukum-hukum fisika dasar',
                kelas: ['X IPA', 'XI IPA', 'XII IPA']
            },
            {
                id: 4,
                kode: 'KIM104',
                nama: 'Kimia',
                kurikulum: '2013',
                jumlahJam: 3,
                deskripsi: 'Mempelajari tentang struktur, komposisi, dan sifat zat',
                kelas: ['X IPA', 'XI IPA', 'XII IPA']
            },
            {
                id: 5,
                kode: 'EKO201',
                nama: 'Ekonomi',
                kurikulum: '2013',
                jumlahJam: 4,
                deskripsi: 'Mempelajari tentang prinsip-prinsip ekonomi dasar',
                kelas: ['X IPS', 'XI IPS', 'XII IPS']
            },
            {
                id: 6,
                kode: 'GEO202',
                nama: 'Geografi',
                kurikulum: '2013',
                jumlahJam: 3,
                deskripsi: 'Mempelajari tentang bumi dan kehidupan manusia di atasnya',
                kelas: ['X IPS', 'XI IPS', 'XII IPS']
            }
        ];

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            renderMataPelajaran();

            // Form submission
            document.getElementById('mataPelajaranForm').addEventListener('submit', function(e) {
                e.preventDefault();
                saveMataPelajaran();
            });

            // Search functionality
            document.getElementById('searchInput').addEventListener('input', function() {
                filterMataPelajaran();
            });

            // Filter functionality
            document.getElementById('filterKurikulum').addEventListener('change', function() {
                filterMataPelajaran();
            });

            document.getElementById('filterKelas').addEventListener('change', function() {
                filterMataPelajaran();
            });

            document.getElementById('filterJurusan').addEventListener('change', function() {
                filterMataPelajaran();
            });
        });

        // Render mata pelajaran table
        function renderMataPelajaran(data = mataPelajaranData) {
            const tableBody = document.getElementById('mataPelajaranTableBody');
            tableBody.innerHTML = '';

            if (data.length === 0) {
                tableBody.innerHTML = `
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                            Tidak ada data mata pelajaran
                        </td>
                    </tr>
                `;
                return;
            }

            data.forEach(matpel => {
                const row = document.createElement('tr');
                row.className = 'hover:bg-gray-50';
                row.innerHTML = `
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${matpel.kode}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">${matpel.nama}</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                            ${matpel.kurikulum === '2013' ? 'bg-blue-100 text-blue-800' : 'bg-green-100 text-green-800'}">
                            ${matpel.kurikulum === '2013' ? 'K13' : 'Merdeka'}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${matpel.jumlahJam} jam</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <button onclick="showDetailMataPelajaran(${matpel.id})" class="text-blue-600 hover:text-blue-900 mr-3">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button onclick="editMataPelajaran(${matpel.id})" class="text-yellow-600 hover:text-yellow-900 mr-3">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button onclick="confirmDelete(${matpel.id})" class="text-red-600 hover:text-red-900">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Filter mata pelajaran
        function filterMataPelajaran() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const kurikulumFilter = document.getElementById('filterKurikulum').value;
            const kelasFilter = document.getElementById('filterKelas').value;
            const jurusanFilter = document.getElementById('filterJurusan').value;

            const filteredData = mataPelajaranData.filter(matpel => {
                // Search filter
                const matchesSearch = matpel.kode.toLowerCase().includes(searchTerm) || 
                                    matpel.nama.toLowerCase().includes(searchTerm);
                
                // Kurikulum filter
                const matchesKurikulum = kurikulumFilter ? matpel.kurikulum === kurikulumFilter : true;
                
                // Kelas filter
                let matchesKelas = true;
                if (kelasFilter) {
                    matchesKelas = matpel.kelas.some(kelas => kelas.includes(kelasFilter));
                }
                
                // Jurusan filter
                let matchesJurusan = true;
                if (jurusanFilter) {
                    matchesJurusan = matpel.kelas.some(kelas => kelas.includes(jurusanFilter));
                }

                return matchesSearch && matchesKurikulum && matchesKelas && matchesJurusan;
            });

            renderMataPelajaran(filteredData);
        }

        // Open tambah modal
        function openTambahModal() {
            document.getElementById('modalTitle').textContent = 'Tambah Mata Pelajaran';
            document.getElementById('mataPelajaranForm').reset();
            document.getElementById('mataPelajaranId').value = '';
            
            // Uncheck all kelas checkboxes
            document.querySelectorAll('.kelas-checkbox').forEach(checkbox => {
                checkbox.checked = false;
            });
            
            openModal('tambahMataPelajaranModal');
        }

        // Show detail mata pelajaran
        function showDetailMataPelajaran(id) {
            const matpel = mataPelajaranData.find(m => m.id === id);
            if (!matpel) return;

            document.getElementById('detailKode').textContent = matpel.kode;
            document.getElementById('detailNama').textContent = matpel.nama;
            document.getElementById('detailKurikulum').textContent = matpel.kurikulum === '2013' ? 'Kurikulum 2013' : 'Kurikulum Merdeka';
            document.getElementById('detailJumlahJam').textContent = matpel.jumlahJam + ' jam/minggu';
            document.getElementById('detailDeskripsi').textContent = matpel.deskripsi || '-';
            
            // Set kelas
            const kelasContainer = document.getElementById('detailKelas');
            kelasContainer.innerHTML = '';
            matpel.kelas.forEach(kelas => {
                const badge = document.createElement('span');
                badge.className = 'px-2 py-1 text-xs font-medium rounded-full bg-gray-100 text-gray-800';
                badge.textContent = kelas;
                kelasContainer.appendChild(badge);
            });

            openModal('detailMataPelajaranModal');
        }

        // Edit mata pelajaran
        function editMataPelajaran(id) {
            const matpel = mataPelajaranData.find(m => m.id === id);
            if (!matpel) return;

            document.getElementById('modalTitle').textContent = 'Edit Mata Pelajaran';
            document.getElementById('mataPelajaranId').value = matpel.id;
            document.getElementById('kode').value = matpel.kode;
            document.getElementById('nama').value = matpel.nama;
            document.getElementById('kurikulum').value = matpel.kurikulum;
            document.getElementById('jumlahJam').value = matpel.jumlahJam;
            document.getElementById('deskripsi').value = matpel.deskripsi || '';
            
            // Set kelas checkboxes
            document.querySelectorAll('.kelas-checkbox').forEach(checkbox => {
                checkbox.checked = matpel.kelas.includes(checkbox.value);
            });

            openModal('tambahMataPelajaranModal');
        }

        // Save mata pelajaran
        function saveMataPelajaran() {
            const id = document.getElementById('mataPelajaranId').value;
            const isEdit = !!id;
            
            const kelas = [];
            document.querySelectorAll('.kelas-checkbox:checked').forEach(checkbox => {
                kelas.push(checkbox.value);
            });
            
            const matpelData = {
                kode: document.getElementById('kode').value,
                nama: document.getElementById('nama').value,
                kurikulum: document.getElementById('kurikulum').value,
                jumlahJam: parseInt(document.getElementById('jumlahJam').value),
                deskripsi: document.getElementById('deskripsi').value,
                kelas: kelas
            };
            
            if (isEdit) {
                // Update existing data
                const index = mataPelajaranData.findIndex(m => m.id === parseInt(id));
                mataPelajaranData[index] = { ...mataPelajaranData[index], ...matpelData };
            } else {
                // Add new data
                const newId = mataPelajaranData.length > 0 ? Math.max(...mataPelajaranData.map(m => m.id)) + 1 : 1;
                mataPelajaranData.push({ id: newId, ...matpelData });
            }
            
            closeModal('tambahMataPelajaranModal');
            renderMataPelajaran();
            alert(`Data mata pelajaran berhasil ${isEdit ? 'diperbarui' : 'ditambahkan'}`);
        }

        // Confirm delete
        function confirmDelete(id) {
            const confirmBtn = document.getElementById('confirmDeleteBtn');
            
            // Remove previous event listener
            confirmBtn.onclick = null;
            
            // Add new event listener
            confirmBtn.onclick = function() {
                deleteMataPelajaran(id);
                closeModal('confirmDeleteModal');
            };
            
            openModal('confirmDeleteModal');
        }

        // Delete mata pelajaran
        function deleteMataPelajaran(id) {
            const index = mataPelajaranData.findIndex(m => m.id === id);
            if (index !== -1) {
                mataPelajaranData.splice(index, 1);
                renderMataPelajaran();
                alert('Data mata pelajaran berhasil dihapus');
            }
        }

        // Generic modal functions
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    </script>
</body>
</html>
