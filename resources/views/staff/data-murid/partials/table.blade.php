{{-- Loop data murid berdasarkan kelas --}}
@forelse ($murids->groupBy('kelas') as $kelas => $groupedMurids)
    <div class="bg-white rounded-lg shadow overflow-hidden mb-6">
        <div class="bg-blue-50 px-4 py-2 border-b border-blue-100">
            <h3 class="font-semibold text-blue-800">Kelas {{ $kelas }} ({{ $groupedMurids->count() }} siswa)</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NISN</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($groupedMurids as $index => $murid)
                        <tr class="hover:bg-gray-50" data-jurusan="{{ $murid->jurusan }}">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($murid->foto)
                                    <img src="{{ Storage::url($murid->foto) }}"
                                         alt="Foto {{ $murid->nama }}"
                                         class="rounded-full w-10 h-10 object-cover">
                                @else
                                    <div class="bg-gray-500 rounded-full flex items-center justify-center w-10 h-10">
                                        <i class="fas fa-user text-white text-sm"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $murid->nis }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $murid->nisn }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $murid->nama }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                <span class="px-2 py-1 text-xs font-semibold rounded-full
                                    {{ $murid->jk == 'L' ? 'bg-blue-100 text-blue-800' : 'bg-pink-100 text-pink-800' }}">
                                    {{ $murid->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-right space-x-2">
                                <a href="{{ route('staff.data-murid.show', $murid->id) }}"
                                   class="text-blue-600 hover:text-blue-900 hover:underline">Detail</a>
                                <a href="{{ route('staff.data-murid.edit', $murid->id) }}"
                                   class="text-green-600 hover:text-green-900 hover:underline">Edit</a>
                                <form action="{{ route('staff.data-murid.destroy', $murid->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin ingin menghapus data {{ $murid->nama }}? Data yang dihapus tidak dapat dikembalikan!')"
                                            type="submit"
                                            class="text-red-600 hover:text-red-900 hover:underline">
                                        Hapus
                                    </button>
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
        <div class="flex">
            <div class="flex-shrink-0">
                <i class="fas fa-exclamation-triangle text-yellow-400"></i>
            </div>
            <div class="ml-3">
                <p class="font-bold">Tidak ada data murid.</p>
                <p class="mt-1">Silakan tambah murid terlebih dahulu dengan mengklik tombol "Tambah Murid" di atas.</p>
            </div>
        </div>
    </div>
@endforelse
