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
                    <a href="/staff/dashboard" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link {{ request()->routeIs('staff.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt mr-3 text-blue-500"></i>
                        Dashboard
                    </a>
                    
                    <a href="/staff/data-siswa" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link {{ request()->routeIs('staff.data-siswa') ? 'active' : '' }}">
                        <i class="fas fa-users mr-3 text-blue-500"></i>
                        Data Siswa
                    </a>
                    
                    <a href="/staff/data-guru" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link {{ request()->routeIs('staff.data-guru') ? 'active' : '' }}">
                        <i class="fas fa-chalkboard-teacher mr-3 text-blue-500"></i>
                        Data Guru
                    </a>
                    
                    <a href="/staff/data-mapel" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link {{ request()->routeIs('staff.data-mapel') ? 'active' : '' }}">
                        <i class="fas fa-book-open mr-3 text-blue-500"></i>
                        Mata Pelajaran
                    </a>
                    
                    <a href="/staff/jadwal-pelajaran" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link {{ request()->routeIs('staff.jadwal-pelajaran') ? 'active' : '' }}">
                        <i class="fas fa-calendar-alt mr-3 text-blue-500"></i>
                        Jadwal Pelajaran
                    </a>
                    
                    <a href="/staff/tagihan-siswa" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link {{ request()->routeIs('staff.tagihan-siswa') ? 'active' : '' }}">
                        <i class="fas fa-file-invoice-dollar mr-3 text-blue-500"></i>
                        Tagihan Siswa
                    </a>
                    
                    <a href="/staff/surat" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link {{ request()->routeIs('staff.surat') ? 'active' : '' }}">
                        <i class="fas fa-envelope mr-3 text-blue-500"></i>
                        Surat Masuk/Keluar
                    </a>
                    
                    <a href="/staff/inventaris" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link {{ request()->routeIs('staff.inventaris') ? 'active' : '' }}">
                        <i class="fas fa-warehouse mr-3 text-blue-500"></i>
                        Inventaris Sekolah
                    </a>
                    
                    <a href="/staff/presensi-staff" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link {{ request()->routeIs('staff.presensi-staff') ? 'active' : '' }}">
                        <i class="fas fa-fingerprint mr-3 text-blue-500"></i>
                        Presensi Staff
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