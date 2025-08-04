<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64 bg-white border-r border-gray-200">
        <div class="flex items-center justify-center h-24 px-4 text-white">
            <div class="flex items-center px-4 py-6 border-b border-gray-200">
                <img src="{{ asset('img/JADWAL.jpg') }}" alt="Logo" class="w-[212px] h-[69px]">
            </div>
        </div>
        <div class="flex flex-col flex-grow overflow-y-auto">
            <div class="px-4 py-4">
                <!-- Menu Items -->
                <nav class="space-y-1">
                    <a href="/staff/dashboard"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/dashboard') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-tachometer-alt min-w-[30px]"></i> Dashboard
                    </a>

                    <a href="/staff/data-murid"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/data-murid') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-users min-w-[30px]"></i> Data Murid
                    </a>

                    <a href="/staff/data-guru"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/data-guru') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-chalkboard-teacher min-w-[30px]"></i> Data Guru
                    </a>

                    <a href="/staff/tagihan-siswa"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/tagihan-siswa') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-file-invoice-dollar min-w-[30px]"></i> Tagihan Siswa
                    </a>

                    <a href="/staff/ijazah"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/ijazah') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-book min-w-[30px]"></i> Ijazah Siswa
                    </a>

                    <a href="/staff/data-mapel"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/data-mapel') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-book-open min-w-[30px]"></i> Data Mata Pelajaran
                    </a>

                    <a href="/staff/jadwal-pelajaran"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/jadwal-pelajaran') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-calendar-alt min-w-[30px]"></i> Jadwal Pelajaran
                    </a>

                    <a href="/staff/surat"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/surat') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-envelope min-w-[30px]"></i> Surat Masuk/Keluar
                    </a>

                    <a href="/staff/inventaris"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/inventaris') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-warehouse min-w-[30px]"></i> Inventaris Sekolah
                    </a>

                    <a href="/staff/presensi"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/presensi') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-fingerprint min-w-[30px]"></i> Presensi Staff
                    </a>
                </nav>
            </div>
        </div>

        <!-- Bottom Profile -->
        <div class="p-4 border-t border-gray-200">
            <a href="/staff/profil" class="flex items-center px-2 py-2 text-sm font-medium rounded-md sidebar-link {{ request()->routeIs('staff.profil') ? 'active' : '' }}">
                <i class="fas fa-user-circle mr-3 text-blue-500"></i>
                Profil
            </a>
        </div>
    </div>
</div>
