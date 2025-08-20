@extends('guru.layouts.app')

@section('title', 'kelas')

@section('content')
<body class="p-6">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($kelasDiampu as $data)
      <div class="bg-white rounded-xl shadow-md overflow-hidden p-6 hover:-translate-y-1 hover:shadow-lg transition-all">
        <div class="flex items-center">
          <div class="flex-shrink-0 bg-green-100 p-3 rounded-full">
            <img src="https://img.icons8.com/ios-filled/50/classroom.png" alt="Kelas" class="h-8 w-8">
          </div>
          <div class="ml-4">
            <h3 class="font-bold text-lg">{{ $data->kelas->nama_kelas }}</h3>
            <p class="text-gray-600">{{ $data->mapel->nama_mapel }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</body>
@endsection
    