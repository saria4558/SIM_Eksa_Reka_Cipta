@extends('guru.layouts.app')

@section('title', 'Dashboard')

@section('content')

        {{-- Content --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="cursor-default flex items-center justify-between bg-white shadow rounded-xl p-4 transition-all duration-500 ease-in-out transform hover:-translate-y-0.5 hover:shadow-lg">
            <div>
            <p class="text-gray-600 text-sm">Total Kelas diampu</p>
            <h3 class="text-[22px] font-bold mt-3">12</h3>
            </div>
            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-blue-100 text-blue-600 ">
            <i class="fas fa-users text-xl"></i>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="cursor-default flex items-center justify-between bg-white shadow rounded-xl p-4 transition-all duration-500 ease-in-out transform hover:-translate-y-0.5 hover:shadow-lg">
            <div>
            <p class="text-gray-600 text-sm">Tugas Menunggu penilaian</p>
            <h3 class="text-[22px] font-bold mt-3">25</h3>
            </div>
            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-green-600">
            <i class="fas fa-tasks text-xl"></i>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="cursor-default flex items-center justify-between bg-white shadow rounded-xl p-4 transition-all duration-500 ease-in-out transform hover:-translate-y-0.5 hover:shadow-lg">
            <div>
            <p class="text-gray-600 text-sm">Pertemuan Hari Ini</p>
            <h3 class="text-[22px] font-bold mt-3">3 Kelas</h3>
            </div>
            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-yellow-100 text-yellow-600">
            <i class="fas fa-calendar-day text-xl"></i>
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
                    <th class="py-2 px-3 font-medium">Hari/Tanggal</th>
                    <th class="py-2 px-3 font-medium">Waktu</th>
                    <th class="py-2 px-3 font-medium">Kelas</th>
                    <th class="py-2 px-3 font-medium">Ruangan</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-600">
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-3">Senin, 12 Juni</td>
                    <td class="py-2 px-3">07:00 - 08:30</td>
                    <td class="py-2 px-3">10 IPA 1</td>
                    <td class="py-2 px-3">LAB-12</td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-3">Senin, 12 Juni</td>
                    <td class="py-2 px-3">07:00 - 08:30</td>
                    <td class="py-2 px-3">10 IPA 1</td>
                    <td class="py-2 px-3">LAB-12</td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-3">Senin, 12 Juni</td>
                    <td class="py-2 px-3">07:00 - 08:30</td>
                    <td class="py-2 px-3">10 IPA 1</td>
                    <td class="py-2 px-3">LAB-12</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
@endsection
    