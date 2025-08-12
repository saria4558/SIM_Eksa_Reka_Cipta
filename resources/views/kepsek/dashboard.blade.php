@extends('kepsek.layouts.app')

@section('title', 'Dashboard - SIM-P')

@section('content')
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
                <p class="text-2xl font-semibold">500.000.000</p>
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
            <h3 class="text-lg font-semibold">Rekapitulasi Presensi Hari Ini</h3>
            <a href="#" class="text-sm text-blue-500 hover:underline">Lihat Detail</a>
        </div>

        <div class="space-y-6">
            <!-- Presensi Guru -->
            <div>
                <h4 class="text-md font-semibold mb-2">Guru</h4>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-sm text-gray-700">
                    <div class="bg-blue-50 p-3 rounded-lg text-center">
                        <p class="font-bold text-blue-700 text-lg">20</p>
                        <p>Hadir</p>
                    </div>
                    <div class="bg-yellow-50 p-3 rounded-lg text-center">
                        <p class="font-bold text-yellow-700 text-lg">2</p>
                        <p>Izin</p>
                    </div>
                    <div class="bg-red-50 p-3 rounded-lg text-center">
                        <p class="font-bold text-red-700 text-lg">1</p>
                        <p>Alpa</p>
                    </div>
                    <div class="bg-green-50 p-3 rounded-lg text-center">
                        <p class="font-bold text-green-700 text-lg">0</p>
                        <p>Cuti</p>
                    </div>
                </div>
            </div>

            <!-- Presensi Murid -->
            <div>
                <h4 class="text-md font-semibold mb-2">Murid</h4>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-sm text-gray-700">
                    <div class="bg-blue-50 p-3 rounded-lg text-center">
                        <p class="font-bold text-blue-700 text-lg">180</p>
                        <p>Hadir</p>
                    </div>
                    <div class="bg-yellow-50 p-3 rounded-lg text-center">
                        <p class="font-bold text-yellow-700 text-lg">5</p>
                        <p>Izin</p>
                    </div>
                    <div class="bg-red-50 p-3 rounded-lg text-center">
                        <p class="font-bold text-red-700 text-lg">3</p>
                        <p>Alpa</p>
                    </div>
                    <div class="bg-green-50 p-3 rounded-lg text-center">
                        <p class="font-bold text-green-700 text-lg">2</p>
                        <p>Sakit</p>
                    </div>
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
    <div id="eventModal" class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 hidden">
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

<!-- Riwayat Aktivitas Guru -->
<div class="space-y-6">
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="flex items-center justify-between p-4 border-b">
            <h3 class="text-lg font-semibold">Riwayat Aktivitas Guru</h3>
            <a href="#" class="text-sm text-blue-500 hover:underline">Lihat Semua</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aktivitas</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Waktu</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dr. Budi Santoso, M.Pd.</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mengisi Presensi</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">31 Juli 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">07:15 WIB</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Drs. Ani Wulandari</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mengajar Bahasa Indonesia</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">31 Juli 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">08:00 WIB</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Dr. Budi Santoso, M.Pd.</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mengisi Nilai Siswa</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">30 Juli 2025</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10:45 WIB</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
