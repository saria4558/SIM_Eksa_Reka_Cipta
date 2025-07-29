@extends('wali.layouts.app')

@section('title', 'Dashboard')

@section('content')

        {{-- Content --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="cursor-default flex items-center justify-between bg-white shadow rounded-xl p-4 transition-all duration-500 ease-in-out transform hover:-translate-y-0.5 hover:shadow-lg">
            <div>
            <p class="text-gray-600 text-sm">Pelajaran Hari Ini</p>
            <h3 class="text-[22px] font-bold mt-3">3</h3>
            </div>
            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 text-blue-600 ">
            <i class="fas fa-book text-xl"></i>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="cursor-default flex items-center justify-between bg-white shadow rounded-xl p-4 transition-all duration-500 ease-in-out transform hover:-translate-y-0.5 hover:shadow-lg">
            <div>
            <p class="text-gray-600 text-sm">Tugas Mendatang</p>
            <h3 class="text-[22px] font-bold mt-3">5</h3>
            </div>
            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-green-600">
            <i class="fas fa-tasks text-xl"></i>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="cursor-default flex items-center justify-between bg-white shadow rounded-xl p-4 transition-all duration-500 ease-in-out transform hover:-translate-y-0.5 hover:shadow-lg">
            <div>
            <p class="text-gray-600 text-sm">Presensi Bulan Ini</p>
            <h3 class="text-[22px] font-bold mt-3">85%</h3>
            </div>
            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-yellow-100 text-yellow-600">
            <i class="fas fa-user-check text-xl"></i>
            </div>
        </div>

        <!-- Card 4 -->
        {{-- <div class="cursor-default flex items-center justify-between bg-white shadow rounded-xl p-4 transition-all duration-500 ease-in-out transform hover:-translate-y-0.5 hover:shadow-lg">
            <div>
            <p class="text-gray-600 text-sm">Tagihan Tertunda</p>
            <h3 class="text-[22px] font-bold mt-3">Rp 1.250.000</h3>
            </div>
            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-red-100 text-red-600">
            <i class="fas fa-receipt text-xl"></i>
            </div>
        </div> --}}
        </div>

        <!-- Jadwal Hari Ini -->
        <div class="bg-white shadow rounded-lg p-4 mt-6">
            <!-- Panel head -->
            <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Jadwal Hari Ini</h2>
            <button class="text-sm text-blue-500 hover:underline">Lihat Semua</button>
            </div>
            <!-- Table -->
            <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left border-collapse">
                <thead class="border-b border-gray-200 ">
                <tr>
                    <th class="py-2 px-3 font-medium">Waktu</th>
                    <th class="py-2 px-3 font-medium">Mata Pelajaran</th>
                    <th class="py-2 px-3 font-medium">Guru</th>
                    <th class="py-2 px-3 font-medium">Ruangan</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-600">
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-3">07:00 - 08:30</td>
                    <td class="py-2 px-3 flex items-center space-x-2">
                    {{-- <span class="inline-block w-2 h-2 rounded-full bg-blue-500"></span> --}}
                    <span>Matematika</span>
                    </td>
                    <td class="py-2 px-3">Bu Dian</td>
                    <td class="py-2 px-3">LAB-12</td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-3">08:30 - 10:00</td>
                    <td class="py-2 px-3 flex items-center space-x-2">
                    {{-- <span class="inline-block w-2 h-2 rounded-full bg-green-500"></span> --}}
                    <span>Fisika</span>
                    </td>
                    <td class="py-2 px-3">Pak Rudi</td>
                    <td class="py-2 px-3">R-08</td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-3">10:30 - 12:00</td>
                    <td class="py-2 px-3 flex items-center space-x-2">
                    {{-- <span class="inline-block w-2 h-2 rounded-full bg-yellow-500"></span> --}}
                    <span>Bahasa Indonesia</span>
                    </td>
                    <td class="py-2 px-3">Bu Lina</td>
                    <td class="py-2 px-3">R-05</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        
        <!-- Tugas Mendatang -->
        <div class="bg-white shadow rounded-lg p-4 mt-6">
        <!-- Panel head -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Tugas Mendatang</h2>
            <button class="text-sm text-blue-500 hover:underline">Lihat Semua</button>
        </div>

        <!-- Container item pakai divide-y -->
        <div class="divide-y divide-gray-200 pl-2" >
            <!-- 1. Tugas Matematika -->
            <div class="flex items-center justify-between py-3">
            <div class="flex items-center space-x-3">
                {{-- <div class="flex items-center justify-center w-10 h-10 rounded-full bg-blue-100 text-blue-600">
                <i class="fas fa-book"></i>
                </div> --}}
                
                <div class="pl-2.4">
                <h4 class="font-semibold text-gray-800">Tugas Matematika</h4>
                <p class="text-sm text-gray-500">Bab Integral - Deadline: Besok</p>
                </div>
            </div>
            <button class="px-3 py-1 text-sm bg-blue-500 hover:bg-blue-600 text-white rounded-lg shadow-sm">
                Kerjakan
            </button>
            </div>

            <!-- 2. Laporan Praktikum Fisika -->
            <div class="flex items-center justify-between py-3">
            <div class="flex items-center space-x-3">
                {{-- <div class="flex items-center justify-center w-10 h-10 rounded-full bg-green-100 text-green-600">
                <i class="fas fa-flask"></i>
                </div> --}}
                <div class="pl-2.4">
                <h4 class="font-semibold text-gray-800">Laporan Praktikum Fisika</h4>
                <p class="text-sm text-gray-500">Praktikum Getaran - Deadline: 2 Hari Lagi</p>
                </div>
            </div>
            <button class="px-3 py-1 text-sm bg-gray-100 text-gray-600 rounded-lg shadow-sm cursor-default">
                Dalam Proses
            </button>
            </div>

            <!-- 3. Makalah Sejarah -->
            <div class="flex items-center justify-between py-3">
            <div class="flex items-center space-x-3">
                {{-- <div class="flex items-center justify-center w-10 h-10 rounded-full bg-purple-100 text-purple-600">
                <i class="fas fa-landmark"></i>
                </div> --}}
                <div class="pl-2.4">
                <h4 class="font-semibold text-gray-800">Makalah Sejarah</h4>
                <p class="text-sm text-gray-500">Perang Dunia II - Deadline: 5 Hari Lagi</p>
                </div>
            </div>
            <button class="px-3 py-1 text-sm bg-gray-100 text-gray-600 rounded-lg shadow-sm cursor-default">
                Belum Mulai
            </button>
            </div>
        </div>
        </div>
@endsection
    