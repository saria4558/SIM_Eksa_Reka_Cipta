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

                    <div x-data="{ open: false }" class="space-y-1">
                        <!-- Tombol Induk -->
                        <button @click="open = !open"
                            class="flex items-center w-full px-2 py-3 text-sm font-medium rounded-md
                            hover:bg-blue-50 focus:outline-none">
                            <i class="fas fa-database min-w-[30px]"></i>
                            <span>Data Murid</span>
                            <i :class="open ? 'fas fa-chevron-up ml-auto' : 'fas fa-chevron-down ml-auto'"></i>
                        </button>

                        <!-- Submenu -->
                        <div x-show="open" x-transition class="ml-6 space-y-1">
                            <a href="/staff/data-murid"
                                class="flex items-center px-2 py-2 text-sm font-medium rounded-md
                                {{ Request::is('staff/data-murid') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                                <i class="fas fa-users min-w-[25px]"></i> Data Murid Aktif
                            </a>
                            <a href="/staff/data-guru"
                                class="flex items-center px-2 py-2 text-sm font-medium rounded-md
                                {{ Request::is('staff/data-alumni') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                                <i class="fas fa-users min-w-[25px]"></i> Data Alumni
                            </a>
                            <a href="/staff/catprestasi"
                                class="flex items-center px-2 py-2 text-sm font-medium rounded-md
                                {{ Request::is('staff/catprestasi') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                                <i class="fas fa-book min-w-[25px]"></i> Catatan Prestasi
                            </a>
                            <a href="/staff/catpelanggaran"
                                class="flex items-center px-2 py-2 text-sm font-medium rounded-md
                                {{ Request::is('staff/catpelanggaran') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                                <i class="fas fa-book min-w-[25px]"></i> Catatan Pelanggaran
                            </a>
                        </div>
                    </div>

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

                    <div x-data="{ open: false }" class="space-y-1">
                        <button @click="open = !open"
                            class="flex items-center w-full px-2 py-3 text-sm font-medium rounded-md hover:bg-blue-50">
                            <i class="fas fa-school min-w-[30px]"></i>
                            <span>Akademik</span>
                            <i :class="open ? 'fas fa-chevron-up ml-auto' : 'fas fa-chevron-down ml-auto'"></i>
                        </button>

                        <div x-show="open" x-transition class="pl-8 space-y-1">
                            <a href="/staff/data-mapel"
                                class="flex items-center px-2 py-2 text-sm font-medium rounded-md {{ Request::is('staff/data-mapel') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                                <i class="fas fa-book-open min-w-[20px]"></i> Data Mata Pelajaran
                            </a>
                            <a href="/staff/jadwal-pelajaran"
                                class="flex items-center px-2 py-2 text-sm font-medium rounded-md {{ Request::is('staff/jadwal-pelajaran') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                                <i class="fas fa-calendar-alt min-w-[20px]"></i> Jadwal Pelajaran
                            </a>
                            <a href="/staff/ekskul"
                                class="flex items-center px-2 py-2 text-sm font-medium rounded-md {{ Request::is('staff/exstra') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                                <i class="fas fa-swimmer min-w-[20px]"></i> Ekstrakurikuler
                            </a>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="space-y-1">
                        <button @click="open = !open"
                            class="flex items-center w-full px-2 py-3 text-sm font-medium rounded-md sidebar-link hover:bg-blue-50 focus:outline-none">
                            <i class="fas fa-briefcase min-w-[30px]"></i>
                            <span class="flex-1 text-left">Administrasi</span>
                            <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="ml-auto"></i>
                        </button>

                        <div x-show="open" x-transition class="ml-8 space-y-1">
                            <a href="/staff/surat"
                                class="flex items-center px-2 py-2 text-sm font-medium rounded-md sidebar-link
                                {{ Request::is('staff/surat') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                                <i class="fas fa-envelope min-w-[30px]"></i> Surat Masuk/Keluar
                            </a>

                            <a href="/staff/inventaris"
                                class="flex items-center px-2 py-2 text-sm font-medium rounded-md sidebar-link
                                {{ Request::is('staff/inventaris') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                                <i class="fas fa-warehouse min-w-[30px]"></i> Inventaris Sekolah
                            </a>
                            <a href="/staff/bukutamu"
                                class="flex items-center px-2 py-2 text-sm font-medium rounded-md sidebar-link
                                {{ Request::is('staff/bukutamu') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                                <i class="fas fa-warehouse min-w-[30px]"></i> Buku Tamu
                            </a>
                        </div>
                    </div>

                    <a href="/staff/presensi"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/presensi') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-fingerprint min-w-[30px]"></i> Presensi Staff
                    </a>

                    <a href="/staff/profil"
                        class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link
                        {{ Request::is('staff/profil') ? 'bg-blue-100 text-blue-600' : 'hover:bg-blue-50' }}">
                        <i class="fas fa-user-circle min-w-[30px]"></i> Profil
                    </a>
                </nav>
            </div>
        </div>
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
</div>
