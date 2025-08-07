@extends('staff.layouts.app')

@section('title', 'Dashboard - SIM-P')

@section('content')
<div class="p-4 space-y-2">
    <a href="staff.data-murid.index" class="text-blue-600 hover:underline">Data Murid</a>
        <span class="mx-2 text-gray-500">/</span>
        <span class="text-gray-700">Tambah Murid Baru</span>

    <form action="{{ route('staff.data-murid.store') }}" method="POST" class="space-y-4">
        @csrf
        @include('staff.data-murid.partials.form', ['murid' => null])

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Simpan
        </button>
        <a href="{{ route('staff.data-murid.index') }}" class="px-4 py-2 bg-gray-300 text-black rounded hover:bg-gray-400">
            Batal
        </a>
    </form>
</div>
@endsection
