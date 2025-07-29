<header class="bg-white shadow-sm">
  <div class="flex items-center justify-between px-4 py-4 gap-4 md:gap-8">
    <div class="md:hidden">
      <button type="button" class="text-gray-500 focus:outline-none">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <div class="relative">
      <input type="text" placeholder="Cari sesuatu..."
             class="text-sm pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
      <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
    </div>

    <div class="flex items-center mb-2 mr-6">
      <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('images/wali/profil.jpeg') }}" alt="Foto profil">
      <div class="ml-3">
        <p class="text-sm font-medium text-gray-700">Keiichiro Asaka</p>
        <p class="text-xs text-gray-500">X IPA 1</p>
      </div>
    </div>
  </div>
</header>
