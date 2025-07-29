@extends('wali.layouts.app')
@section('title', 'Tagihan')
@section('content')
{{-- main --}}
        <div class="bg-white shadow rounded-lg p-4 mt-6">
            <!-- Panel head -->
            <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Riwayat Pembayaran</h2>
            {{-- <button class="text-sm text-blue-500 hover:underline">Lihat Semua</button> --}}
            </div>
            <!-- Table -->
            <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left border-collapse">
                <thead class="border-b border-gray-200 ">
                <tr>
                    <th class="py-2 px-3 font-medium">Tanggal Pembayaran</th>
                    <th class="py-2 px-3 font-medium">Jenis Pelajaran</th>
                    <th class="py-2 px-3 font-medium">Catatan</th>
                    <th class="py-2 px-3 font-medium">Status</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-600">
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-3">27/07/2025</td>
                    <td class="py-2 px-3 flex items-center space-x-2">
                    {{-- <span class="inline-block w-2 h-2 rounded-full bg-blue-500"></span> --}}
                    <span>SPP Bulan Juli</span>
                    </td>
                    <td class="py-2 px-3">-</td>
                    <td class="py-2 px-3">Lunas</td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-3">27/07/2025</td>
                    <td class="py-2 px-3 flex items-center space-x-2">
                    {{-- <span class="inline-block w-2 h-2 rounded-full bg-blue-500"></span> --}}
                    <span>SPP Bulan Juli</span>
                    </td>
                    <td class="py-2 px-3">-</td>
                    <td class="py-2 px-3">Lunas</td>
                </tr>
                                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-3">27/07/2025</td>
                    <td class="py-2 px-3 flex items-center space-x-2">
                    {{-- <span class="inline-block w-2 h-2 rounded-full bg-blue-500"></span> --}}
                    <span>SPP Bulan Juli</span>
                    </td>
                    <td class="py-2 px-3">-</td>
                    <td class="py-2 px-3">Lunas</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
@endsection