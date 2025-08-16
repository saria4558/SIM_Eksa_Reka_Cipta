@extends('wali.layouts.app')

@section('title', 'Jadwal')

@section('content')
<h2>Jadwal Pelajaran - {{ $murid->nama }} ({{ $murid->kelas->nama_kelas }})</h2>

@foreach($jadwal as $hari => $dataJadwal)
    <div class="bg-white shadow rounded-lg p-4 mt-6">
        <!-- Panel head -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold">Jadwal Hari {{ $hari }}</h2>
        </div>
        
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left border-collapse">
                <thead class="border-b border-gray-200">
                    <tr>
                        <th class="py-2 px-3 font-medium">Waktu</th>
                        <th class="py-2 px-3 font-medium">Mata Pelajaran</th>
                        <th class="py-2 px-3 font-medium">Guru</th>
                        <th class="py-2 px-3 font-medium">Ruangan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-600">
                    @forelse($dataJadwal as $j)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-3">
                                {{ $j->jam_mulai }} - {{ $j->jam_selesai }}
                            </td>
                            <td class="py-2 px-3">
                                {{ $j->mapel->nama_mapel ?? '-' }}
                            </td>
                            <td class="py-2 px-3">
                                {{ $j->guru->nama ?? '-' }}
                            </td>
                            <td class="py-2 px-3">
                                {{ $j->ruangan->nama_ruangan ?? '-' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-2 px-3 text-center text-gray-500">
                                Tidak ada jadwal
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endforeach
@endsection
