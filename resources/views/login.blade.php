<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Siswa</title>
  <link rel="icon" href="{{ asset('images/logo3.png') }}" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
   @vite(['resources/css/app.css', 'resources/js/app.js'])
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
<body class="flex h-screen bg-gray-100 font-sans">
    <div class="w-1/2 hidden md:flex items-center justify-center bg-cover bg-center relative"
        style="background-image: url('{{ asset('images/anak-sma.png') }}');">
    <div class="absolute inset-0 bg-[#2C415E] opacity-70"></div>
    </div>

  <!-- Bagian Kanan: Form Login -->
  <div class="w-full md:w-1/2 bg-white flex items-center justify-center">
    <div class="w-full max-w-md p-8">
      <!-- Logo -->
      <div class="flex justify-center mb-6">
        <img src="{{ asset('images/logo.png') }}"  alt="Logo" class="w-47 h-47">
      </div>
      <!-- Form -->
      <form>
        <div class="mb-4">
          <label class="block text-gray-700 text-base font-semibold mb-1" for="username">Username</label>
          <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm"
                 id="username" type="text" placeholder="Username/Email" />
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-base font-semibold mb-1" for="password">Password</label>
          <input class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm"
                 id="password" type="password" placeholder="Input your password account" />
        </div>
        <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
          Login
        </button>
      </form>
    </div>
  </div>
</body>
</html>
