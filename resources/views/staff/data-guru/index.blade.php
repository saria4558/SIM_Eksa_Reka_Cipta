@extends('staff.layouts.app')

@section('title', 'Dashboard - SIM-P')

@section('content')

<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Data Guru</h1>
    <a href="{{ route('staff.data-guru.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Guru</a>

    {{-- Loop data guru berdasarkan jabatan --}}
    @forelse ($gurus->groupBy('jabatan') as $jabatan => $groupedGurus)
        <div class="bg-white rounded-lg shadow overflow-hidden mb-6 mt-4">
            <div class="bg-blue-50 px-4 py-2 border-b border-blue-100">
                <h3 class="font-semibold text-blue-800">{{ $jabatan ?? 'Tidak Ada Jabatan' }}</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">No</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Foto</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">NIP</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nama</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Email</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">No HP</th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($groupedGurus as $index => $guru)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($guru->foto)
                                        <img src="{{ asset('storage/'.$guru->foto) }}"
                                             alt="Foto {{ $guru->nama }}"
                                             class="rounded-full w-10 h-10 object-cover">
                                    @else
                                        <div class="bg-gray-500 rounded-full flex items-center justify-center w-10 h-10">
                                            <i class="fas fa-user text-white"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $guru->nip }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $guru->nama }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $guru->email ?? '-' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $guru->no_hp ?? '-' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ route('staff.data-guru.show', $guru->id) }}" class="text-blue-500 hover:underline mr-2">Detail</a>
                                    <a href="{{ route('staff.data-guru.edit', $guru->id) }}" class="text-yellow-500 hover:underline mr-2">Edit</a>
                                    <form action="{{ route('staff.data-guru.destroy', $guru->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus data guru {{ $guru->nama }}?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @empty
        <div class="mt-4 bg-white rounded-lg shadow p-4 text-center text-gray-500">
            Tidak ada data guru
        </div>
    @endforelse

    {{-- Pagination --}}
    <div class="mt-4">
        {{ $gurus->links() }}
    </div>
</div>

@endsection
