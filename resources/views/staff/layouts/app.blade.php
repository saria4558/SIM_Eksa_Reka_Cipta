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
  <div class="flex h-screen overflow-hidden">
    {{-- Sidebar --}}
    @include('staff.partials.sidebar')

    {{-- Main Content --}}
    <div class="flex flex-col flex-1 overflow-hidden">
      {{-- Header --}}
      @include('staff.partials.header')

      {{-- Content --}}
      <main class="flex-1 overflow-y-auto p-6">
        @yield('content')
      </main>
    </div>
  </div>
</body>
</html>
