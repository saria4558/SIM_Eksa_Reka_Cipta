@extends('staff.layouts.app')

@section('title', 'Edit Murid - SIM-P')

@section('content')
<div class="p-4 space-y-4">
    <!-- Breadcrumb -->
    <nav class="flex mb-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('staff.data-murid.index') }}" class="text-blue-600 hover:underline">Data Murid</a>
            </li>
            <li>
                <div class="flex items-center">
                    <span class="mx-2 text-gray-500">/</span>
                    <span class="text-gray-700">Edit Data Murid</span>
                </div>
            </li>
        </ol>
    </nav>

    <!-- Header -->
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Edit Data Murid</h1>
            <p class="text-gray-600">Perbarui informasi data siswa: <span class="font-semibold text-blue-600">{{ $murid->nama }}</span></p>
        </div>
        <div class="flex space-x-2 mt-4 md:mt-0">
            <a href="{{ route('staff.data-murid.show', $murid) }}" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                👁️ Detail
            </a>
            <a href="{{ route('staff.data-murid.index') }}" class="px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400">
                ← Kembali
            </a>
        </div>
    </div>

    {{-- Alert Messages --}}
    @if(session('success'))
        <div class="bg-green-50 border-l-4 border-green-400 text-green-700 p-4 mb-4" role="alert">
            <p class="font-bold">{{ session('success') }}</p>
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-50 border-l-4 border-red-400 text-red-700 p-4 mb-4" role="alert">
            <p class="font-bold">Terdapat kesalahan dalam pengisian form:</p>
            <ul class="mt-2 list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form -->
    <form action="{{ route('staff.data-murid.update', $murid) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        @include('staff.data-murid.partials.form', ['murid' => $murid])

        <!-- Submit Buttons -->
        <div class="bg-white shadow rounded-lg p-6">
            <div class="flex flex-col sm:flex-row justify-end space-y-2 sm:space-y-0 sm:space-x-4">
                <a href="{{ route('staff.data-murid.index') }}"
                   class="px-6 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition duration-200 text-center">
                    Batal
                </a>
                <a href="{{ route('staff.data-murid.show', $murid) }}"
                   class="px-6 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition duration-200 text-center">
                    Lihat Detail
                </a>
                <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200">
                    Simpan Perubahan
                </button>
            </div>
        </div>
    </form>
</div>

<!-- Script untuk validasi form -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-sync kelas dan jurusan
    const kelasSelect = document.getElementById('kelas');
    const jurusanSelect = document.getElementById('jurusan');

    if (kelasSelect && jurusanSelect) {
        kelasSelect.addEventListener('change', function() {
            const kelas = this.value;
            if (kelas.includes('IPA')) {
                jurusanSelect.value = 'IPA';
            } else if (kelas.includes('IPS')) {
                jurusanSelect.value = 'IPS';
            }
        });
    }

    // Validasi form sebelum submit
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        const requiredFields = form.querySelectorAll('[required]');
        let hasError = false;

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                hasError = true;
                field.classList.add('border-red-500');
            } else {
                field.classList.remove('border-red-500');
            }
        });

        if (hasError) {
            e.preventDefault();
            alert('Mohon lengkapi semua field yang wajib diisi (bertanda *)');
        }
    });

    // Konfirmasi sebelum menyimpan
    form.addEventListener('submit', function(e) {
        if (!confirm('Apakah Anda yakin ingin menyimpan perubahan data murid ini?')) {
            e.preventDefault();
        }
    });
});
</script>
@endsection
