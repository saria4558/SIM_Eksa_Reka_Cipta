@extends('staff.layouts.app')

@section('title', 'Edit Murid - SIM-P')

@section('content')
<div class="p-4 space-y-4">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Edit Data Murid</h1>
            <p class="text-gray-600">Perbarui informasi data siswa</p>
        </div>
        <a href="{{ route('staff.data-murid.index') }}" class="px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400">
            Batal
        </a>
    </div>

    <form action="{{ route('staff.data-murid.update', $murid) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('staff.data-murid.form')
        <div class="mt-6 flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
