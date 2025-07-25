<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM-P - Data Siswa</title>
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
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-chalkboard-teacher mr-3 text-blue-500"></i>
                                Data Guru
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
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
                    <h1 id="pageTitle" class="text-xl font-semibold text-gray-800">Data Siswa</h1>
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
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Data Siswa</h1>
                <p class="text-gray-600">Manajemen data siswa per kelas</p>
            </div>
            <button onclick="openModal('tambahModal')" 
                    class="mt-4 md:mt-0 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                <i class="fas fa-plus mr-2"></i>
                Tambah Siswa
            </button>
        </div>

        <!-- Filter Kelas -->
        <div class="bg-white rounded-lg shadow p-4 mb-6">
            <div class="flex flex-col md:flex-row items-start md:items-center space-y-2 md:space-y-0 md:space-x-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Filter Kelas</label>
                    <select id="filterKelas" onchange="filterByClass()" 
                            class="block w-full md:w-48 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="all">Semua Kelas</option>
                        <option value="X IPA 1">X IPA 1</option>
                        <option value="X IPA 2">X IPA 2</option>
                        <option value="XI IPA 1">XI IPA 1</option>
                        <option value="XI IPA 2">XI IPA 2</option>
                        <option value="XII IPA 1">XII IPA 1</option>
                        <option value="XII IPA 2">XII IPA 2</option>
                        <option value="X IPS 1">X IPS 1</option>
                        <option value="X IPS 2">X IPS 2</option>
                        <option value="XI IPS 1">XI IPS 1</option>
                        <option value="XI IPS 2">XI IPS 2</option>
                        <option value="XII IPS 1">XII IPS 1</option>
                        <option value="XII IPS 2">XII IPS 2</option>
                    </select>
                </div>
                <div class="w-full md:w-auto flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Cari Siswa</label>
                    <div class="relative">
                        <input type="text" id="searchInput" placeholder="Cari berdasarkan NIS atau nama..."
                               class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 pl-10">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Siswa by Kelas -->
        <div id="studentsByClassContainer">
            <!-- Data akan diisi oleh JavaScript -->
        </div>

        <!-- Modal Tambah/Edit Siswa -->
        <div id="tambahModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
            <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
                <div class="flex justify-between items-center border-b pb-3">
                    <h3 class="text-lg font-semibold text-gray-800" id="modalTitle">Tambah Data Siswa</h3>
                    <button onclick="closeModal('tambahModal')" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="mt-4">
                    <form id="studentForm">
                        <input type="hidden" id="studentId">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="nis" class="block text-sm font-medium text-gray-700">NIS*</label>
                                <input type="text" id="nis" required
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="nisn" class="block text-sm font-medium text-gray-700">NISN*</label>
                                <input type="text" id="nisn" required
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap*</label>
                                <input type="text" id="nama" required
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="jenisKelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin*</label>
                                <select id="jenisKelamin" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas*</label>
                                <select id="kelas" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Pilih Kelas</option>
                                    <option value="X IPA 1">X IPA 1</option>
                                    <option value="X IPA 2">X IPA 2</option>
                                    <option value="XI IPA 1">XI IPA 1</option>
                                    <option value="XI IPA 2">XI IPA 2</option>
                                    <option value="XII IPA 1">XII IPA 1</option>
                                    <option value="XII IPA 2">XII IPA 2</option>
                                    <option value="X IPS 1">X IPS 1</option>
                                    <option value="X IPS 2">X IPS 2</option>
                                    <option value="XI IPS 1">XI IPS 1</option>
                                    <option value="XI IPS 2">XI IPS 2</option>
                                    <option value="XII IPS 1">XII IPS 1</option>
                                    <option value="XII IPS 2">XII IPS 2</option>
                                </select>
                            </div>
                            <div>
                                <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan*</label>
                                <select id="jurusan" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Pilih Jurusan</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                </select>
                            </div>
                            <div>
                                <label for="tempatLahir" class="block text-sm font-medium text-gray-700">Tempat Lahir*</label>
                                <input type="text" id="tempatLahir" required
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="tanggalLahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir*</label>
                                <input type="date" id="tanggalLahir" required
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="agama" class="block text-sm font-medium text-gray-700">Agama*</label>
                                <select id="agama" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                            <div>
                                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat*</label>
                                <textarea id="alamat" rows="2" required
                                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                            </div>
                            <div>
                                <label for="telepon" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                                <input type="text" id="telepon"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email"
                                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label for="status" class="block text-sm font-medium text-gray-700">Status*</label>
                                <select id="status" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option value="">Pilih Status</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Lulus">Lulus</option>
                                    <option value="Pindah">Pindah</option>
                                    <option value="Drop Out">Drop Out</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-end space-x-3">
                            <button type="button" onclick="closeModal('tambahModal')"
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

        <!-- Modal Detail Siswa -->
        <div id="detailModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
            <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
                <div class="flex justify-between items-center border-b pb-3">
                    <h3 class="text-lg font-semibold text-gray-800">Detail Data Siswa</h3>
                    <button onclick="closeModal('detailModal')" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="mt-4">
                    <div class="flex flex-col md:flex-row">
                        <div class="flex-shrink-0 mr-6 mb-4 md:mb-0">
                            <img id="detailFoto" src="https://placehold.co/150x200" alt="Foto siswa" 
                                 class="h-40 w-32 object-cover rounded-md border border-gray-200">
                        </div>
                        <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-500">NIS</p>
                                <p id="detailNis" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">NISN</p>
                                <p id="detailNisn" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Nama Lengkap</p>
                                <p id="detailNama" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Jenis Kelamin</p>
                                <p id="detailJenisKelamin" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Kelas</p>
                                <p id="detailKelas" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Jurusan</p>
                                <p id="detailJurusan" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Tempat, Tanggal Lahir</p>
                                <p id="detailTtl" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Agama</p>
                                <p id="detailAgama" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Alamat</p>
                                <p id="detailAlamat" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">No. Telepon</p>
                                <p id="detailTelepon" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Email</p>
                                <p id="detailEmail" class="font-medium text-gray-800">-</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Status</p>
                                <p id="detailStatus" class="font-medium text-gray-800">-</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button onclick="closeModal('detailModal')"
                                class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <script>
        // Sample data - in a real app, this would come from an API
        let students = [
            {
                id: 1,
                nis: '2023001',
                nisn: '1234567890',
                nama: 'Andi Setiawan',
                jenisKelamin: 'L',
                kelas: 'X IPA 1',
                jurusan: 'IPA',
                tempatLahir: 'Jakarta',
                tanggalLahir: '2007-05-15',
                agama: 'Islam',
                alamat: 'Jl. Merdeka No. 123, Jakarta',
                telepon: '081234567890',
                email: 'andi.setiawan@email.com',
                status: 'Aktif'
            },
            {
                id: 2,
                nis: '2023002',
                nisn: '2345678901',
                nama: 'Budi Santoso',
                jenisKelamin: 'L',
                kelas: 'X IPA 1',
                jurusan: 'IPA',
                tempatLahir: 'Bandung',
                tanggalLahir: '2007-08-20',
                agama: 'Islam',
                alamat: 'Jl. Pahlawan No. 45, Bandung',
                telepon: '082345678901',
                email: 'budi.santoso@email.com',
                status: 'Aktif'
            },
            {
                id: 3,
                nis: '2023003',
                nisn: '3456789012',
                nama: 'Citra Dewi',
                jenisKelamin: 'P',
                kelas: 'X IPA 2',
                jurusan: 'IPA',
                tempatLahir: 'Surabaya',
                tanggalLahir: '2007-03-10',
                agama: 'Kristen',
                alamat: 'Jl. Sudirman No. 67, Surabaya',
                telepon: '083456789012',
                email: 'citra.dewi@email.com',
                status: 'Aktif'
            },
            {
                id: 4,
                nis: '2023004',
                nisn: '4567890123',
                nama: 'Dewi Lestari',
                jenisKelamin: 'P',
                kelas: 'XI IPA 1',
                jurusan: 'IPA',
                tempatLahir: 'Yogyakarta',
                tanggalLahir: '2006-11-25',
                agama: 'Islam',
                alamat: 'Jl. Malioboro No. 89, Yogyakarta',
                telepon: '084567890123',
                email: 'dewi.lestari@email.com',
                status: 'Aktif'
            },
            {
                id: 5,
                nis: '2023005',
                nisn: '5678901234',
                nama: 'Eko Prasetyo',
                jenisKelamin: 'L',
                kelas: 'XII IPA 1',
                jurusan: 'IPA',
                tempatLahir: 'Medan',
                tanggalLahir: '2005-07-30',
                agama: 'Katolik',
                alamat: 'Jl. Gatot Subroto No. 12, Medan',
                telepon: '085678901234',
                email: 'eko.prasetyo@email.com',
                status: 'Aktif'
            },
            {
                id: 6,
                nis: '2023006',
                nisn: '6789012345',
                nama: 'Fitriana Sari',
                jenisKelamin: 'P',
                kelas: 'X IPS 1',
                jurusan: 'IPS',
                tempatLahir: 'Semarang',
                tanggalLahir: '2007-01-05',
                agama: 'Islam',
                alamat: 'Jl. Diponegoro No. 34, Semarang',
                telepon: '086789012345',
                email: 'fitriana.sari@email.com',
                status: 'Aktif'
            },
            {
                id: 7,
                nis: '2023007',
                nisn: '7890123456',
                nama: 'Gita Wulandari',
                jenisKelamin: 'P',
                kelas: 'XI IPS 1',
                jurusan: 'IPS',
                tempatLahir: 'Denpasar',
                tanggalLahir: '2006-09-15',
                agama: 'Hindu',
                alamat: 'Jl. Raya Kuta No. 56, Denpasar',
                telepon: '087890123456',
                email: 'gita.wulandari@email.com',
                status: 'Aktif'
            },
            {
                id: 8,
                nis: '2023008',
                nisn: '8901234567',
                nama: 'Hadi Saputra',
                jenisKelamin: 'L',
                kelas: 'XII IPS 2',
                jurusan: 'IPS',
                tempatLahir: 'Makassar',
                tanggalLahir: '2005-04-20',
                agama: 'Islam',
                alamat: 'Jl. Urip Sumoharjo No. 78, Makassar',
                telepon: '088901234567',
                email: 'hadi.saputra@email.com',
                status: 'Aktif'
            }
        ];

        // Initialize the page
        document.addEventListener('DOMContentLoaded', function() {
            renderStudentsByClass();
            
            // Form submission
            document.getElementById('studentForm').addEventListener('submit', function(e) {
                e.preventDefault();
                saveStudent();
            });
            
            // Search functionality
            document.getElementById('searchInput').addEventListener('input', function() {
                filterStudents();
            });
        });

        // Render students grouped by class
        function renderStudentsByClass() {
            const container = document.getElementById('studentsByClassContainer');
            container.innerHTML = '';
            
            // Filter by selected class
            const selectedClass = document.getElementById('filterKelas').value;
            let filteredStudents = students;
            
            if (selectedClass !== 'all') {
                filteredStudents = students.filter(student => student.kelas === selectedClass);
            }
            
            // Group by class
            const classGroups = filteredStudents.reduce((groups, student) => {
                if (!groups[student.kelas]) {
                    groups[student.kelas] = [];
                }
                groups[student.kelas].push(student);
                return groups;
            }, {});
            
            // If filtering by specific class, we only have one group
            if (selectedClass !== 'all') {
                const classStudents = classGroups[selectedClass] || [];
                if (classStudents.length > 0) {
                    container.appendChild(createClassSection(selectedClass, classStudents));
                } else {
                    container.innerHTML = '<div class="bg-white rounded-lg shadow p-6 text-center text-gray-500">Tidak ada data siswa untuk kelas ini</div>';
                }
                return;
            }
            
            // Show all classes if no specific filter
            const sortedClasses = Object.keys(classGroups).sort();
            
            if (sortedClasses.length === 0) {
                container.innerHTML = '<div class="bg-white rounded-lg shadow p-6 text-center text-gray-500">Tidak ada data siswa</div>';
                return;
            }
            
            sortedClasses.forEach(className => {
                container.appendChild(createClassSection(className, classGroups[className]));
            });
        }

        // Create a section for a class
        function createClassSection(className, studentsList) {
            const section = document.createElement('div');
            section.className = 'bg-white rounded-lg shadow overflow-hidden mb-6';
            
            const header = document.createElement('div');
            header.className = 'bg-blue-50 px-4 py-2 border-b border-blue-100';
            header.innerHTML = `<h3 class="font-semibold text-blue-800">Kelas ${className}</h3>`;
            
            const table = document.createElement('div');
            table.className = 'overflow-x-auto';
            
            let tableHTML = `
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Siswa</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
            `;
            
            studentsList.forEach(student => {
                const gender = student.jenisKelamin === 'L' ? 'Laki-laki' : 'Perempuan';
                const statusColor = student.status === 'Aktif' ? 'green' : 
                                  student.status === 'Lulus' ? 'blue' : 
                                  student.status === 'Pindah' ? 'yellow' : 'red';
                
                tableHTML += `
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${student.nis}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <img class="h-8 w-8 rounded-full mr-3" src="https://placehold.co/40x40" alt="Foto siswa ${student.nama}">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">${student.nama}</p>
                                    <p class="text-xs text-gray-500">${student.kelas}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${gender}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-${statusColor}-100 text-${statusColor}-800">
                                ${student.status}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button onclick="showDetail(${student.id})" class="text-blue-600 hover:text-blue-900 mr-3">Detail</button>
                            <button onclick="editStudent(${student.id})" class="text-green-600 hover:text-green-900 mr-3">Edit</button>
                            <button onclick="deleteStudent(${student.id})" class="text-red-600 hover:text-red-900">Hapus</button>
                        </td>
                    </tr>
                `;
            });
            
            tableHTML += `
                    </tbody>
                </table>
            `;
            
            table.innerHTML = tableHTML;
            section.appendChild(header);
            section.appendChild(table);
            
            return section;
        }

        // Filter students by class
        function filterByClass() {
            renderStudentsByClass();
        }

        // Search students
        function filterStudents() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            if (!searchTerm) {
                renderStudentsByClass();
                return;
            }
            
            const filtered = students.filter(student => 
                student.nis.toLowerCase().includes(searchTerm) || 
                student.nama.toLowerCase().includes(searchTerm)
            );
            
            const container = document.getElementById('studentsByClassContainer');
            container.innerHTML = '';
            
            if (filtered.length === 0) {
                container.innerHTML = '<div class="bg-white rounded-lg shadow p-6 text-center text-gray-500">Tidak ditemukan siswa yang sesuai</div>';
                return;
            }
            
            // Create a single section for search results
            const section = document.createElement('div');
            section.className = 'bg-white rounded-lg shadow overflow-hidden mb-6';
            
            const header = document.createElement('div');
            header.className = 'bg-blue-50 px-4 py-2 border-b border-blue-100';
            header.innerHTML = `<h3 class="font-semibold text-blue-800">Hasil Pencarian</h3>`;
            
            const table = document.createElement('div');
            table.className = 'overflow-x-auto';
            
            let tableHTML = `
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Siswa</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
            `;
            
            filtered.forEach(student => {
                const statusColor = student.status === 'Aktif' ? 'green' : 
                                  student.status === 'Lulus' ? 'blue' : 
                                  student.status === 'Pindah' ? 'yellow' : 'red';
                
                tableHTML += `
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${student.nis}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <img class="h-8 w-8 rounded-full mr-3" src="https://placehold.co/40x40" alt="Foto siswa ${student.nama}">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">${student.nama}</p>
                                    <p class="text-xs text-gray-500">${student.jurusan}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${student.kelas}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-${statusColor}-100 text-${statusColor}-800">
                                ${student.status}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button onclick="showDetail(${student.id})" class="text-blue-600 hover:text-blue-900 mr-3">Detail</button>
                            <button onclick="editStudent(${student.id})" class="text-green-600 hover:text-green-900 mr-3">Edit</button>
                            <button onclick="deleteStudent(${student.id})" class="text-red-600 hover:text-red-900">Hapus</button>
                        </td>
                    </tr>
                `;
            });
            
            tableHTML += `
                    </tbody>
                </table>
            `;
            
            table.innerHTML = tableHTML;
            section.appendChild(header);
            section.appendChild(table);
            container.appendChild(section);
        }

        // Open modal
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        // Close modal
        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Show student detail
        function showDetail(id) {
            const student = students.find(s => s.id === id);
            if (!student) return;
            
            document.getElementById('detailNis').textContent = student.nis;
            document.getElementById('detailNisn').textContent = student.nisn;
            document.getElementById('detailNama').textContent = student.nama;
            document.getElementById('detailJenisKelamin').textContent = student.jenisKelamin === 'L' ? 'Laki-laki' : 'Perempuan';
            document.getElementById('detailKelas').textContent = student.kelas;
            document.getElementById('detailJurusan').textContent = student.jurusan;
            document.getElementById('detailTtl').textContent = `${student.tempatLahir}, ${formatDate(student.tanggalLahir)}`;
            document.getElementById('detailAgama').textContent = student.agama;
            document.getElementById('detailAlamat').textContent = student.alamat;
            document.getElementById('detailTelepon').textContent = student.telepon || '-';
            document.getElementById('detailEmail').textContent = student.email || '-';
            document.getElementById('detailStatus').textContent = student.status;
            
            openModal('detailModal');
        }

        // Edit student
        function editStudent(id) {
            const student = students.find(s => s.id === id);
            if (!student) return;
            
            document.getElementById('modalTitle').textContent = 'Edit Data Siswa';
            document.getElementById('studentId').value = student.id;
            document.getElementById('nis').value = student.nis;
            document.getElementById('nisn').value = student.nisn;
            document.getElementById('nama').value = student.nama;
            document.getElementById('jenisKelamin').value = student.jenisKelamin;
            document.getElementById('kelas').value = student.kelas;
            document.getElementById('jurusan').value = student.jurusan;
            document.getElementById('tempatLahir').value = student.tempatLahir;
            document.getElementById('tanggalLahir').value = student.tanggalLahir;
            document.getElementById('agama').value = student.agama;
            document.getElementById('alamat').value = student.alamat;
            document.getElementById('telepon').value = student.telepon || '';
            document.getElementById('email').value = student.email || '';
            document.getElementById('status').value = student.status;
            
            openModal('tambahModal');
        }

        // Save student (create or update)
        function saveStudent() {
            const id = document.getElementById('studentId').value;
            const isEdit = !!id;
            
            const studentData = {
                nis: document.getElementById('nis').value,
                nisn: document.getElementById('nisn').value,
                nama: document.getElementById('nama').value,
                jenisKelamin: document.getElementById('jenisKelamin').value,
                kelas: document.getElementById('kelas').value,
                jurusan: document.getElementById('jurusan').value,
                tempatLahir: document.getElementById('tempatLahir').value,
                tanggalLahir: document.getElementById('tanggalLahir').value,
                agama: document.getElementById('agama').value,
                alamat: document.getElementById('alamat').value,
                telepon: document.getElementById('telepon').value,
                email: document.getElementById('email').value,
                status: document.getElementById('status').value
            };
            
            if (isEdit) {
                // Update existing student
                const index = students.findIndex(s => s.id === parseInt(id));
                if (index !== -1) {
                    students[index] = { ...students[index], ...studentData };
                }
            } else {
                // Add new student
                const newId = students.length > 0 ? Math.max(...students.map(s => s.id)) + 1 : 1;
                students.push({ id: newId, ...studentData });
            }
            
            closeModal('tambahModal');
            renderStudentsByClass();
            
            // Reset form
            if (!isEdit) {
                document.getElementById('studentForm').reset();
            }
            
            alert(`Data siswa berhasil ${isEdit ? 'diperbarui' : 'ditambahkan'}`);
        }

        // Delete student
        function deleteStudent(id) {
            if (confirm('Apakah Anda yakin ingin menghapus data siswa ini?')) {
                students = students.filter(student => student.id !== id);
                renderStudentsByClass();
                alert('Data siswa berhasil dihapus');
            }
        }

        // Format date to DD/MM/YYYY
        function formatDate(dateString) {
            const date = new Date(dateString);
            const day = date.getDate().toString().padStart(2, '0');
            const month = (date.getMonth() + 1).toString().padStart(2, '0');
            const year = date.getFullYear();
            return `${day}/${month}/${year}`;
        }
    </script>
</body>
</html>
