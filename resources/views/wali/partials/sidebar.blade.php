<aside class="hidden md:flex md:flex-shrink-0">
  <div class="flex flex-col w-64 bg-white border-r border-gray-200">
    <div class="flex items-center justify-center h-24 px-4">
      <img src="{{ asset('img/JADWAL.jpg') }}" alt="Logo" class="w-[212px] h-[69px]">
    </div>

    <nav class="flex-1 px-4 py-4 space-y-1 text-sm font-medium text-gray-700">
      <a href="/wali/dashboard"
         class="flex items-center gap-3 px-3 py-3 rounded-md transition sidebar-link 
         {{ Request::is('wali/dashboard') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
         <i class="fas fa-tachometer-alt min-w-[20px]"></i> Dashboard
      </a>
      <a href="/wali/mapel"
         class="flex items-center gap-3 px-3 py-3 rounded-md transition sidebar-link 
         {{ Request::is('wali/mapel') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
         <i class="fas fa-book min-w-[20px] "></i> Daftar Pelajaran
      </a>
        <a href="/wali/tagihan"
            class="flex items-center gap-3 px-3 py-3 rounded-md transition sidebar-link 
            {{ Request::is('wali/tagihan') ? 'bg-blue-100 text-blue-600 ' : 'hover:bg-blue-50' }}">
            <i class="fas fa-receipt min-w-[20px]"></i> Tagihan
        </a>
        <a href="/wali/jadwal"
            class="flex items-center gap-3 px-3 py-3 rounded-md transition sidebar-link 
            {{ Request::is('wali/jadwal') ? 'bg-blue-100 text-blue-600 ' : 'hover:bg-blue-50' }}">
            <i class="fas fa-calendar min-w-[20px]"></i> Jadwal
        </a>
        {{-- <a href="/wali/presensi"
            class="flex items-center gap-3 px-3 py-3 rounded-md transition sidebar-link 
            {{ Request::is('wali/presensi') ? 'bg-blue-100 text-blue-600 ' : 'hover:bg-blue-50' }}">
            <i class="fas fa-user-check min-w-[20px]"></i> Presensi
        </a> --}}
        <a href="/wali/profil"
            class="flex items-center gap-3 px-3 py-3 rounded-md transition sidebar-link 
            {{ Request::is('wali/profil') ? 'bg-blue-100 text-blue-600 ' : 'hover:bg-blue-50' }}">
            <i class="fas fa-user-circle min-w-[20px]"></i> Profil
        </a>
    </nav>

    <div class="p-4 border-t border-gray-200">
      <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit"
              class="flex items-center px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-red-100 hover:text-red-600 transition w-full text-left">
              <i class="fas fa-sign-out-alt mr-3 text-red-500"></i> Logout
          </button>
      </form>
    </div>
  </div>
</aside>
