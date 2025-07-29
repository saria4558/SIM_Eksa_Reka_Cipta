<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM-P | Sistem Informasi Manajemen Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
                    <div class="px-4 py-4">
                        <!-- Menu Items -->
                        <nav class="space-y-1">
                            <a href="/staff/dashboard" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link active">
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
        <div class="flex flex-col flex-1 overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button type="button" class="text-gray-500 focus:outline-none">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    
                    <!-- Search and Notifications -->
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                        
                        <button class="relative p-1 text-gray-400 hover:text-gray-500">
                            <i class="fas fa-bell"></i>
                            <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
                        </button>
                        
                        <button class="md:hidden p-1 text-gray-400 hover:text-gray-500">
                            <i class="fas fa-user-circle text-xl"></i>
                        </button>
                    </div>
                    <div class="flex items-center mb-2">
                        <img class="h-10 w-10 rounded-full object-cover" src="https://placehold.co/100x100" alt="Foto profil staff TU dengan jas formal">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-700">Staff TU</p>
                            <p class="text-xs text-gray-500">Bagian Administrasi</p>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Dashboard Content -->
            <main class="flex-1 overflow-y-auto p-6">
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-800">Dashboard</h1>
                    <p class="text-gray-600">Ringkasan aktivitas sekolah hari ini</p>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6 card-hover transition-all">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Total Siswa</p>
                                <p class="text-2xl font-semibold">1,245</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-6 card-hover transition-all">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-100 text-green-600 mr-4">
                                <i class="fas fa-chalkboard-teacher text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Total Guru</p>
                                <p class="text-2xl font-semibold">68</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-6 card-hover transition-all">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mr-4">
                                <i class="fas fa-file-invoice-dollar text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Tagihan Belum Lunas</p>
                                <p class="text-2xl font-semibold">84</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-6 card-hover transition-all">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600 mr-4">
                                <i class="fas fa-calendar-check text-xl"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Kelas Aktif Hari Ini</p>
                                <p class="text-2xl font-semibold">24</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activities and Calendar -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6 lg:col-span-2">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold">Aktivitas Terkini</h3>
                            <a href="#" class="text-sm text-blue-500 hover:underline">Lihat Semua</a>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="p-2 rounded-full bg-blue-100 text-blue-600 mr-3">
                                    <i class="fas fa-user-graduate"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">Pendaftaran siswa baru</p>
                                    <p class="text-sm text-gray-500">5 siswa baru telah mendaftar hari ini</p>
                                    <p class="text-xs text-gray-400">1 jam yang lalu</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="p-2 rounded-full bg-green-100 text-green-600 mr-3">
                                    <i class="fas fa-money-bill-wave"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">Pembayaran SPP</p>
                                    <p class="text-sm text-gray-500">12 pembayaran SPP telah diterima</p>
                                    <p class="text-xs text-gray-400">3 jam yang lalu</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="p-2 rounded-full bg-yellow-100 text-yellow-600 mr-3">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">Surat masuk baru</p>
                                    <p class="text-sm text-gray-500">3 surat masuk dari Dinas Pendidikan</p>
                                    <p class="text-xs text-gray-400">5 jam yang lalu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg shadow p-6">
                        <h3 class="text-lg font-semibold mb-4">Kalender Akademik</h3>
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-medium">Oktober 2023</span>
                                <div class="flex space-x-2">
                                    <button class="p-1 rounded hover:bg-gray-100">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="p-1 rounded hover:bg-gray-100">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="grid grid-cols-7 gap-1 text-center">
                                <div class="text-xs text-gray-500 p-2">M</div>
                                <div class="text-xs text-gray-500 p-2">S</div>
                                <div class="text-xs text-gray-500 p-2">S</div>
                                <div class="text-xs text-gray-500 p-2">R</div>
                                <div class="text-xs text-gray-500 p-2">K</div>
                                <div class="text-xs text-gray-500 p-2">J</div>
                                <div class="text-xs text-gray-500 p-2">S</div>
                                
                                <!-- Calendar days -->
                                <div class="p-2 text-sm"></div> <!-- Empty for alignment -->
                                <div class="p-2 text-sm"></div> <!-- Empty for alignment -->
                                <div class="p-2 text-sm"></div> <!-- Empty for alignment -->
                                <div class="p-2 text-sm"></div> <!-- Empty for alignment -->
                                <div class="p-2 text-sm"></div> <!-- Empty for alignment -->
                                <div class="p-2 text-sm"></div> <!-- Empty for alignment -->
                                <div class="p-2 text-sm" onclick="openModal(1)">1</div>
                                <div class="p-2 text-sm" onclick="openModal(2)">2</div>
                                <div class="p-2 text-sm" onclick="openModal(3)">3</div>
                                <div class="p-2 text-sm" onclick="openModal(4)">4</div>
                                <div class="p-2 text-sm bg-blue-100 rounded-full text-blue-700 font-medium" onclick="openModal(5)">5</div>
                                <div class="p-2 text-sm" onclick="openModal(6)">6</div>
                                <div class="p-2 text-sm" onclick="openModal(7)">7</div>
                                <div class="p-2 text-sm" onclick="openModal(8)">8</div>
                                <div class="p-2 text-sm" onclick="openModal(9)">9</div>
                                <div class="p-2 text-sm" onclick="openModal(10)">10</div>
                                <div class="p-2 text-sm" onclick="openModal(11)">11</div>
                                <div class="p-2 text-sm" onclick="openModal(12)">12</div>
                                <div class="p-2 text-sm" onclick="openModal(13)">13</div>
                                <div class="p-2 text-sm" onclick="openModal(14)">14</div>
                                <div class="p-2 text-sm" onclick="openModal(15)">15</div>
                                <div class="p-2 text-sm" onclick="openModal(16)">16</div>
                                <div class="p-2 text-sm" onclick="openModal(17)">17</div>
                                <div class="p-2 text-sm" onclick="openModal(18)">18</div>
                                <div class="p-2 text-sm" onclick="openModal(19)">19</div>
                                <div class="p-2 text-sm" onclick="openModal(20)">20</div>
                                <div class="p-2 text-sm" onclick="openModal(21)">21</div>
                                <div class="p-2 text-sm" onclick="openModal(22)">22</div>
                                <div class="p-2 text-sm" onclick="openModal(23)">23</div>
                                <div class="p-2 text-sm" onclick="openModal(24)">24</div>
                                <div class="p-2 text-sm" onclick="openModal(25)">25</div>
                                <div class="p-2 text-sm" onclick="openModal(26)">26</div>
                                <div class="p-2 text-sm" onclick="openModal(27)">27</div>
                                <div class="p-2 text-sm" onclick="openModal(28)">28</div>
                                <div class="p-2 text-sm" onclick="openModal(29)">29</div>
                                <div class="p-2 text-sm" onclick="openModal(30)">30</div>
                                <div class="p-2 text-sm" onclick="openModal(31)">31</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-blue-500 mr-2"></div>
                                <p class="text-sm">Libur Semester</p>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-red-500 mr-2"></div>
                                <p class="text-sm">Ujian Akhir</p>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-green-500 mr-2"></div>
                                <p class="text-sm">Rapat Guru</p>
                            </div>
                        </div>
                    </div>

                    <!-- Modal for adding events -->
                    <div id="eventModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                        <div class="bg-white rounded-lg p-6">
                            <h3 class="text-lg font-semibold mb-4">Tambah Kegiatan</h3>
                            <input type="text" id="eventInput" class="border p-2 w-full mb-4" placeholder="Masukkan kegiatan...">
                            <div class="flex justify-end">
                                <button class="p-2 bg-blue-500 text-white rounded" onclick="addEvent()">Simpan</button>
                                <button class="p-2 bg-gray-300 rounded ml-2" onclick="closeModal()">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="bg-white rounded-lg shadow p-6 mb-8">
                    <h3 class="text-lg font-semibold mb-4">Aksi Cepat</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <button class="flex flex-col items-center justify-center p-4 border rounded-lg hover:bg-gray-50 transition-all">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600 mb-2">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <p class="text-sm text-center">Tambah Siswa</p>
                        </button>
                        
                        <button class="flex flex-col items-center justify-center p-4 border rounded-lg hover:bg-gray-50 transition-all">
                            <div class="p-3 rounded-full bg-green-100 text-green-600 mb-2">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <p class="text-sm text-center">Tambah Guru</p>
                        </button>
                        
                        <button class="flex flex-col items-center justify-center p-4 border rounded-lg hover:bg-gray-50 transition-all">
                            <div class="p-3 rounded-full bg-purple-100 text-purple-600 mb-2">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            <p class="text-sm text-center">Buat Tagihan</p>
                        </button>
                        
                        <button class="flex flex-col items-center justify-center p-4 border rounded-lg hover:bg-gray-50 transition-all">
                            <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mb-2">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <p class="text-sm text-center">Surat Baru</p>
                        </button>
                    </div>
                </div>

                <!-- Data Tables Preview -->
                <div class="space-y-6">
                    <!-- Students Table Preview -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="flex items-center justify-between p-4 border-b">
                            <h3 class="text-lg font-semibold">Data Siswa Terbaru</h3>
                            <a href="#" class="text-sm text-blue-500 hover:underline">Lihat Semua</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">202301001</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Ahmad Budiman</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">XII IPA 1</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">202301002</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Siti Nurhaliza</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">XII IPS 2</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- Teachers Table Preview -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="flex items-center justify-between p-4 border-b">
                            <h3 class="text-lg font-semibold">Data Guru Terbaru</h3>
                            <a href="#" class="text-sm text-blue-500 hover:underline">Lihat Semua</a>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIP</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mapel</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1970010112345</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Dr. Budi Santoso, M.Pd.</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Matematika</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1980020212345</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Drs. Ani Wulandari</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bahasa Indonesia</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-md">
            <div class="flex justify-between items-center p-4 border-b">
                <h3 class="text-lg font-semibold">Tambah Data Baru</h3>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-4">
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">
                            Nama
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nama" type="text" placeholder="Masukkan nama">
                    </div>
                    <!-- More form fields would go here -->
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300">
                            Batal
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Basic modal functionality
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }
        
        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
        
        // Simulate navigation for demo purposes
        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('.sidebar-link.active').classList.remove('active');
                this.classList.add('active');
                // In a real app, you would load the appropriate content here
            });
        });
        
        // Mobile menu toggle would be implemented here
    </script>
</body>
</html>
