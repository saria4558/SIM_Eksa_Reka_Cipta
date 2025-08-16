@extends('staff.layouts.app')

@section('title', 'Dashboard - SIM-P')

@section('content')

<div class="p-4 space-y-4">
    <div class="flex-1 overflow-y-auto p-2 bg-gray-50">
        {{-- Statistics Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 mb-6">
            <div class="bg-blue-400 text-white rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h4 class="text-2xl font-bold">{{ $murids->where('status', 'aktif')->count() }}</h4>
                        <p class="text-white">Murid Aktif Tahun Ini</p>
                    </div>
                    <i class="fas fa-user-graduate text-3xl text-blue-200"></i>
                </div>
            </div>
            <div class="bg-green-400 text-white rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h4 class="text-2xl font-bold">{{ $murids->where('status', 'alumni')->count() }}</h4>
                        <p class="text-white">Alumni</p>
                    </div>
                    <i class="fas fa-graduation-cap text-3xl text-green-200"></i>
                </div>
            </div>
            <div class="bg-purple-400 text-white rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h4 class="text-2xl font-bold">{{ $murids->where('jk', 'L')->count() }}</h4>
                        <p class="text-white">Laki-laki</p>
                    </div>
                    <i class="fas fa-male text-3xl text-purple-200"></i>
                </div>
            </div>
            <div class="bg-pink-400 text-white rounded-lg p-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h4 class="text-2xl font-bold">{{ $murids->where('jk', 'P')->count() }}</h4>
                        <p class="text-white">Perempuan</p>
                    </div>
                    <i class="fas fa-female text-3xl text-pink-200"></i>
                </div>
            </div>
        </div>
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Data Siswa</h1>
                <p class="text-gray-600">Manajemen data siswa per kelas</p>
            </div>
            <div class="flex justify-between items-center">
                <a href="{{ route('staff.data-murid.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 shadow">
                    + Tambah Murid
                </a>
            </div>
        </div>

        {{-- Alert Messages --}}
        @if(session('success'))
            <div class="bg-green-50 border-l-4 border-green-400 text-green-700 p-4 mb-4" role="alert">
                <p class="font-bold">{{ session('success') }}</p>
            </div>
        @endif

        <!-- Filter Kelas -->
        <div class="bg-white rounded-lg shadow p-4 mb-4">
            <div class="flex flex-col md:flex-row items-start md:items-center space-y-2 md:space-y-0 md:space-x-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Filter Kelas</label>
                    <select class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" id="filter-kelas">
                        <option value="">Semua Kelas</option>
                        @foreach($murids->pluck('kelas.nama_kelas')->unique()->sort() as $kelas)
                            <option value="{{ $kelas }}">{{ $kelas }}</option>
                        @endforeach

                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
                    <select class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" id="filter-jurusan">
                        <option value="">Semua Jurusan</option>
                        @foreach($murids->pluck('jurusan')->unique()->sort() as $jurusan)
                            <option value="{{ $jurusan }}">{{ $jurusan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full md:w-auto flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Cari Siswa</label>
                    <div class="relative">
                        <input type="text" id="search-nama" placeholder="Cari berdasarkan NIS atau nama..."
                            class="block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 pl-10">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Loop data murid berdasarkan kelas --}}
        @forelse ($murids->groupBy('kelas.nama_kelas') as $kelas => $groupedMurids)
            <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
                <div class="bg-blue-50 px-4 py-2 border-b border-blue-100">
                    <h3 class="font-semibold text-blue-800">Kelas {{ $kelas }}</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">No</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Foto</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">NIS</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">NISN</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nama</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Jenis Kelamin</th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($groupedMurids as $index => $murid)
                                <tr data-jurusan="{{ $murid->jurusan }}">
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if($murid->foto)
                                            <img src="{{ Storage::url($murid->foto) }}"
                                                 alt="Foto {{ $murid->nama }}"
                                                 class="rounded-full w-10 h-10 object-cover">
                                        @else
                                            <div class="bg-gray-500 rounded-full flex items-center justify-center w-10 h-10">
                                                <i class="fas fa-user text-white"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $murid->nis }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $murid->nisn }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $murid->nama }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $murid->jk == 'L' ? 'bg-blue-100 text-blue-800' : 'bg-pink-100 text-pink-800' }}">
                                            {{ $murid->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('staff.data-murid.show', $murid->id) }}" class="text-blue-500 hover:underline mr-2">Detail</a>
                                        <a href="{{ route('staff.data-murid.edit', $murid->id) }}" class="text-yellow-500 hover:underline mr-2">Edit</a>
                                        <form action="{{ route('staff.data-murid.destroy', $murid->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus data murid {{ $murid->nama }}?')">
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
            <div class="bg-yellow-50 border-l-4 border-yellow-400 text-yellow-700 p-4" role="alert">
                <p class="font-bold">Tidak ada data murid.</p>
                <p>Silakan tambah murid terlebih dahulu.</p>
            </div>
        @endforelse
    </div>
</div>

{{-- JavaScript for filtering --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterKelas = document.getElementById('filter-kelas');
    const filterJurusan = document.getElementById('filter-jurusan');
    const searchNama = document.getElementById('search-nama');

    function filterTables() {
        const tables = document.querySelectorAll('table');

        tables.forEach(table => {
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
            let visibleRows = 0;

            for (let i = 0; i < rows.length; i++) {
                const row = rows[i];
                const cells = row.getElementsByTagName('td');

                if (cells.length < 7) continue;

                const nis = cells[2].textContent.toLowerCase();
                const nama = cells[4].textContent.toLowerCase();
                const jurusan = filterJurusan.value.toLowerCase();
                const rowJurusan = row.dataset.jurusan ? row.dataset.jurusan.toLowerCase() : '';

                const searchMatch = !searchNama.value ||
                    nis.includes(searchNama.value.toLowerCase()) ||
                    nama.includes(searchNama.value.toLowerCase());
                const jurusanMatch = !jurusan || rowJurusan === jurusan;

                if (searchMatch && jurusanMatch) {
                    row.style.display = '';
                    visibleRows++;
                } else {
                    row.style.display = 'none';
                }
            }

            const tableContainer = table.closest('.bg-white.rounded-lg.shadow');
            if (tableContainer) {
                tableContainer.style.display = visibleRows > 0 ? '' : 'none';
            }
        });
    }

    function filterByKelas() {
        const selectedKelas = filterKelas.value;
        const tableContainers = document.querySelectorAll('.bg-white.rounded-lg.shadow');

        tableContainers.forEach(container => {
            const kelasHeader = container.querySelector('h3');
            if (kelasHeader) {
                const kelasText = kelasHeader.textContent.replace('Kelas ', '');
                if (!selectedKelas || kelasText === selectedKelas) {
                    container.style.display = '';
                } else {
                    container.style.display = 'none';
                }
            }
        });
    }

    filterKelas.addEventListener('change', function() {
        filterByKelas();
        filterTables();
    });

    filterJurusan.addEventListener('change', filterTables);
    searchNama.addEventListener('input', filterTables);
});
</script>

@endsection
