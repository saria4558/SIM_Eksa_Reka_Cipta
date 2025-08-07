@foreach ($murids->groupBy('kelas') as $kelas => $groupedMurids)
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="bg-blue-50 px-4 py-2 border-b border-blue-100">
            <h3 class="font-semibold text-blue-800">Kelas {{ $kelas }}</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIS</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Kelamin</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($groupedMurids as $murid)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm font-medium text-gray-900">{{ $murid->nis }}</td>
                            <td class="px-6 py-4 text-sm">{{ $murid->nama }}</td>
                            <td class="px-6 py-4 text-sm">
                                {{ $murid->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}
                            </td>
                            <td class="px-6 py-4 text-sm">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                                    {{ $murid->status == 'aktif' ? 'bg-green-100 text-green-800' :
                                       ($murid->status == 'alumni' ? 'bg-blue-100 text-blue-800' :
                                       ($murid->status == 'pindah' ? 'bg-yellow-100 text-yellow-800' :
                                       'bg-red-100 text-red-800')) }}">
                                    {{ ucfirst($murid->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-right space-x-2">
                                <a href="{{ route('staff.data-murid.show', $murid->id) }}"
                                   class="text-blue-600 hover:text-blue-900">Detail</a>
                                <a href="{{ route('staff.data-murid.edit', $murid->id) }}"
                                   class="text-green-600 hover:text-green-900">Edit</a>
                                <form action="{{ route('staff.data-murid.destroy', $murid->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin ingin menghapus data ini?')"
                                            type="submit"
                                            class="text-red-600 hover:text-red-900">
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
@endforeach
