@extends('wali.layouts.app')
@section('title', 'Jadwal')
@section('content')
{{-- main --}}
        <div class="bg-white shadow rounded-lg p-4 mt-6">
            <!-- Panel head -->
            <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Jadwal Hari Senin</h2>
            {{-- <button class="text-sm text-blue-500 hover:underline">Lihat Semua</button> --}}
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

        <div class="bg-white shadow rounded-lg p-4 mt-6">
            <!-- Panel head -->
            <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Jadwal Hari Selasa</h2>
            {{-- <button class="text-sm text-blue-500 hover:underline">Lihat Semua</button> --}}
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

        <div class="bg-white shadow rounded-lg p-4 mt-6">
            <!-- Panel head -->
            <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Jadwal Hari Rabu</h2>
            {{-- <button class="text-sm text-blue-500 hover:underline">Lihat Semua</button> --}}
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

        <div class="bg-white shadow rounded-lg p-4 mt-6">
            <!-- Panel head -->
            <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Jadwal Hari Rabu</h2>
            {{-- <button class="text-sm text-blue-500 hover:underline">Lihat Semua</button> --}}
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

        <div class="bg-white shadow rounded-lg p-4 mt-6">
            <!-- Panel head -->
            <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Jadwal Hari Kamis</h2>
            {{-- <button class="text-sm text-blue-500 hover:underline">Lihat Semua</button> --}}
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

        <div class="bg-white shadow rounded-lg p-4 mt-6">
            <!-- Panel head -->
            <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Jadwal Hari Jumat</h2>
            {{-- <button class="text-sm text-blue-500 hover:underline">Lihat Semua</button> --}}
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
@endsection