<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekolah Pintar - Platform E-Learning Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .course-card {
            transition: all 0.3s ease;
        }
        
        .course-card:hover {
            transform: scale(1.03);
        }
        
        .floating-button {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <img src="https://placehold.co/150x50" alt="Logo Sekolah Pintar - Platform E-Learning Modern" class="h-10" />
                    <span class="ml-3 text-xl font-semibold text-gray-800">Sekolah Pintar</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-800 hover:text-indigo-600">Beranda</a>
                    <a href="#features" class="text-gray-800 hover:text-indigo-600">Fitur</a>
                    <a href="#courses" class="text-gray-800 hover:text-indigo-600">Kursus</a>
                    <a href="#about" class="text-gray-800 hover:text-indigo-600">Tentang</a>
                </div>
                <div>
                    <a href="#login" class="px-4 py-2 font-medium text-indigo-600 rounded-lg border border-indigo-600 hover:bg-indigo-600 hover:text-white transition duration-300">Masuk</a>
                    <a href="#register" class="px-4 py-2 ml-3 font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 transition duration-300">Daftar</a>
                </div>
                <button class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-gradient text-white py-20">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Belajar Lebih Mudah dengan Platform Digital Sekolah</h1>
                <p class="text-xl opacity-90 mb-8">Akses materi pembelajaran, tugas, dan ujian online dimanapun dan kapanpun dengan mudah.</p>
                <div class="flex flex-wrap gap-3">
                    <a href="#register" class="px-8 py-3 font-bold rounded-lg bg-white text-indigo-600 hover:bg-gray-100 transition duration-300">Mulai Sekarang</a>
                    <a href="#demo" class="px-8 py-3 font-bold rounded-lg border-2 border-white hover:bg-white hover:bg-opacity-10 transition duration-300">Lihat Demo</a>
                </div>
            </div>
            <div class="md:w-1/2 relative">
                <img src="https://placehold.co/600x400" alt="Siswa menggunakan platform e-learning di laptop dan tablet, dengan antarmuka modern yang menampilkan grafik pembelajaran interaktif" class="rounded-xl shadow-2xl floating-button" />
                <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-indigo-400 rounded-full opacity-20 -z-10"></div>
                <div class="absolute -top-6 right-6 w-16 h-16 bg-purple-300 rounded-full opacity-30 -z-10"></div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-6">
                    <h3 class="text-3xl font-bold text-indigo-600 mb-2">10K+</h3>
                    <p class="text-gray-600">Siswa Terdaftar</p>
                </div>
                <div class="p-6">
                    <h3 class="text-3xl font-bold text-indigo-600 mb-2">500+</h3>
                    <p class="text-gray-600">Guru Profesional</p>
                </div>
                <div class="p-6">
                    <h3 class="text-3xl font-bold text-indigo-600 mb-2">1K+</h3>
                    <p class="text-gray-600">Materi Pembelajaran</p>
                </div>
                <div class="p-6">
                    <h3 class="text-3xl font-bold text-indigo-600 mb-2">24/7</h3>
                    <p class="text-gray-600">Akses Belajar</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Fitur Unggulan Kami</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Platform belajar online dengan fitur lengkap untuk mendukung pembelajaran siswa dan pengajaran guru.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg feature-card transition duration-300">
                    <div class="w-16 h-16 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Materi Pembelajaran Digital</h3>
                    <p class="text-gray-600">Akses buku digital, video pembelajaran, dan modul interaktif yang dapat diunduh dan dipelajari kapan saja.</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg feature-card transition duration-300">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Sistem Evaluasi Digital</h3>
                    <p class="text-gray-600">Ujian online dengan pengawasan AI, penilaian otomatis, dan rapor digital yang terintegrasi.</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg feature-card transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Diskusi Interaktif</h3>
                    <p class="text-gray-600">Forum diskusi antara siswa, guru, dan orang tua untuk mendukung proses belajar mengajar.</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg feature-card transition duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Manajemen Tugas</h3>
                    <p class="text-gray-600">Pengiriman tugas secara online dengan fitur pengingat deadline dan penilaian terstruktur.</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg feature-card transition duration-300">
                    <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Monitoring Orang Tua</h3>
                    <p class="text-gray-600">Orang tua dapat memantau perkembangan akademik anak secara real-time melalui aplikasi khusus.</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-lg feature-card transition duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Cloud Storage</h3>
                    <p class="text-gray-600">Penyimpanan dokumen dan materi pembelajaran secara online dengan kapasitas besar dan aman.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Kursus Populer</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Temukan berbagai materi pembelajaran berkualitas dari guru-guru profesional.</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md overflow-hidden course-card border border-gray-100">
                    <img src="https://placehold.co/600x400" alt="Kursus Matematika Dasar dengan ilustrasi rumus-rumus matematika berwarna-warni di papan tulis digital" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-xs font-semibold">Matematika</div>
                            <div class="ml-auto text-sm text-gray-500">120 Siswa</div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Matematika Dasar</h3>
                        <p class="text-gray-600 text-sm mb-4">Pelajari konsep dasar matematika untuk siswa sekolah menengah pertama.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://placehold.co/40x40" alt="Foto profil Guru Matematika dengan latar belakang akademik" class="w-8 h-8 rounded-full" />
                                <span class="ml-2 text-sm text-gray-700">Pak Budi S.Pd</span>
                            </div>
                            <span class="text-sm font-semibold text-indigo-600">Gratis</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden course-card border border-gray-100">
                    <img src="https://placehold.co/600x400" alt="Kursus Bahasa Inggris Dasar dengan ilustrasi buku dan alat tulis" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold">Bahasa Inggris</div>
                            <div class="ml-auto text-sm text-gray-500">150 Siswa</div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Bahasa Inggris Dasar</h3>
                        <p class="text-gray-600 text-sm mb-4">Kursus untuk memahami dasar-dasar bahasa Inggris dengan cara yang menyenangkan.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://placehold.co/40x40" alt="Foto profil Guru Bahasa Inggris dengan latar belakang akademik" class="w-8 h-8 rounded-full" />
                                <span class="ml-2 text-sm text-gray-700">Bu Siti M.Pd</span>
                            </div>
                            <span class="text-sm font-semibold text-indigo-600">Rp 100.000</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden course-card border border-gray-100">
                    <img src="https://placehold.co/600x400" alt="Kursus Ilmu Pengetahuan Alam dengan ilustrasi eksperimen sains" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">IPA</div>
                            <div class="ml-auto text-sm text-gray-500">200 Siswa</div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ilmu Pengetahuan Alam</h3>
                        <p class="text-gray-600 text-sm mb-4">Kursus yang membahas konsep dasar IPA dengan pendekatan praktis dan interaktif.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://placehold.co/40x40" alt="Foto profil Guru IPA dengan latar belakang akademik" class="w-8 h-8 rounded-full" />
                                <span class="ml-2 text-sm text-gray-700">Pak Joko S.Pd</span>
                            </div>
                            <span class="text-sm font-semibold text-indigo-600">Rp 150.000</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md overflow-hidden course-card border border-gray-100">
                    <img src="https://placehold.co/600x400" alt="Kursus Sejarah dengan ilustrasi peta dan tokoh sejarah" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-semibold">Sejarah</div>
                            <div class="ml-auto text-sm text-gray-500">80 Siswa</div>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Sejarah Dunia</h3>
                        <p class="text-gray-600 text-sm mb-4">Pelajari peristiwa penting dalam sejarah dunia dan dampaknya terhadap kehidupan saat ini.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://placehold.co/40x40" alt="Foto profil Guru Sejarah dengan latar belakang akademik" class="w-8 h-8 rounded-full" />
                                <span class="ml-2 text-sm text-gray-700">Bu Rina M.Pd</span>
                            </div>
                            <span class="text-sm font-semibold text-indigo-600">Rp 120.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Sekolah Pintar adalah platform e-learning yang dirancang untuk memberikan pengalaman belajar yang menyenangkan dan efektif bagi siswa di seluruh Indonesia.</p>
            </div>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <img src="https://placehold.co/600x400" alt="Gambar tim pengajar dan pengembang platform e-learning" class="rounded-lg shadow-lg" />
                </div>
                <div class="md:w-1/2 md:pl-10">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Visi Kami</h3>
                    <p class="text-gray-600 mb-4">Menjadi platform e-learning terdepan yang mendukung pendidikan berkualitas dan aksesibilitas bagi semua siswa.</p>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Misi Kami</h3>
                    <p class="text-gray-600">Menyediakan materi pembelajaran yang interaktif, mendukung pengajaran guru, dan memfasilitasi komunikasi antara siswa, guru, dan orang tua.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-white py-6">
        <div class="container mx-auto px-6 text-center">
            <p class="text-gray-600">© 2023 Sekolah Pintar. Semua hak dilindungi.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="text-gray-600 hover:text-indigo-600">Kebijakan Privasi</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">Syarat dan Ketentuan</a>
                <a href="#" class="text-gray-600 hover:text-indigo-600">Kontak Kami</a>
            </div>
        </div>
    </footer>
</body>
</html>