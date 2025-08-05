<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'SIM-P')</title>
  <link rel="icon" href="{{ asset('images/logo3.png') }}" type="image/png">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Poppins', 'sans-serif'],
          },
        },
      },
    }
  </script>
</head>
<body class="bg-gray-50">
@if(session('session_expired'))
  <div id="sessionModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full text-center">
      <h2 class="text-lg font-semibold mb-4 text-red-600">Sesi Berakhir</h2>
      <p class="mb-4">Sesi Anda telah berakhir. Silakan login kembali.</p>
      <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        Login Ulang
      </a>
    </div>
  </div>
@endif
  <div class="flex h-screen overflow-hidden">
    {{-- Sidebar --}}
    @include('wali.partials.sidebar')

    {{-- Main Content --}}
    <div class="flex flex-col flex-1 overflow-hidden">
      {{-- Header --}}
      @include('wali.partials.header')

      {{-- Content --}}
      <main class="flex-1 overflow-y-auto p-6">
        @yield('content')
      </main>
    </div>
  </div>
</body>
</html>
