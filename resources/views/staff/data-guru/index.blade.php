<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIM-P - Data Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar-link:hover {
            background-color: rgba(59, 130, 246, 0.1);
        }
        .sidebar-link.active {
            background-color: rgba(59, 130, 246, 0.2);
            border-left: 4px solid #3b82f6;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .transition-all {
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-white border-r border-gray-200">
                <div class="flex items-center justify-center h-24 px-4 text-white">
                    <div class="flex items-center px-4 py-6 border-b border-gray-200">
                        <img src="{{ asset('img/JADWAL.jpg') }}" alt="Logo" class="w-[212px] h-[69px]">
                    </div>
                </div>
                <div class="flex flex-col flex-grow overflow-y-auto">
                    <div class="px-4 py-6">                
                        <!-- Menu Items -->
                        <nav class="space-y-1">
                            <a href="/staff/dashboard" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-tachometer-alt mr-3 text-blue-500"></i>
                                Dashboard
                            </a>
                            
                            <a href="/staff/data-siswa" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-users mr-3 text-blue-500"></i>
                                Data Siswa
                            </a>
                            
                            <a href="/staff/data-guru" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link active">
                                <i class="fas fa-chalkboard-teacher mr-3 text-blue-500"></i>
                                Data Guru
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-book-open mr-3 text-blue-500"></i>
                                Mata Pelajaran
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-calendar-alt mr-3 text-blue-500"></i>
                                Jadwal Pelajaran
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-file-invoice-dollar mr-3 text-blue-500"></i>
                                Tagihan Siswa
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-envelope mr-3 text-blue-500"></i>
                                Surat Masuk/Keluar
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-warehouse mr-3 text-blue-500"></i>
                                Inventaris Sekolah
                            </a>
                            
                            <a href="#" class="flex items-center px-2 py-3 text-sm font-medium rounded-md sidebar-link">
                                <i class="fas fa-fingerprint mr-3 text-blue-500"></i>
                                Presensi Staff
                            </a>
                        </nav>
                    </div>
                </div>
                
                <!-- Bottom Profile -->
                <div class="p-4 border-t border-gray-200">
                    <a href="#" class="flex items-center px-2 py-2 text-sm font-medium rounded-md sidebar-link">
                        <i class="fas fa-user-circle mr-3 text-blue-500"></i>
                        Profil
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="content flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <div class="bg-white border-b border-gray-200 p-4 flex justify-between items-center">
                <div class="flex items-center">
                    <button id="mobileToggleSidebar" class="p-2 mr-2 rounded-lg hover:bg-gray-100 md:hidden">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 id="pageTitle" class="text-xl font-semibold text-gray-800">Data Guru</h1>
                </div>
                <div class="flex items-center space-x-3">
                    <button class="p-2 rounded-full hover:bg-gray-100 relative">
                        <i class="fas fa-bell text-gray-500"></i>
                    </button>
                    <div class="flex items-center mb-1">
                        <img class="h-10 w-10 rounded-full object-cover" src="https://placehold.co/100x100" alt="Foto profil staff TU dengan jas formal">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-700">Staff TU</p>
                            <p class="text-xs text-gray-500">Bagian Administrasi</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Content Area -->
            <div class="flex-1 overflow-y-auto p-6 bg-gray-50">
                <!-- Header -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">Data Guru</h1>
                        <p class="text-gray-600">Manajemen data guru per mata pelajaran</p>
                    </div>
                    <button onclick="openModal('tambahGuruModal')" 
                            class="mt-4 md:mt-0 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg flex items-center">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Guru
                    </button>
                </div>

                <!-- Data Guru Table -->
                <div id="dataGuruContainer" class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Foto</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NIP</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mata Pelajaran</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Dummy Data Rows -->
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/150" alt="Foto Guru">
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">Budi Santoso, S.Pd</div>
                                        <div class="text-sm text-gray-500">budi.santoso@example.com</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">198304122008011002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Matematika</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aktif</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-indigo-600 hover:text-indigo-900 mr-3 edit-guru-btn" data-id="1">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-900 delete-guru-btn" data-id="1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- More rows can be added here -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modal Tambah/Edit Guru -->
                <div id="tambahGuruModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
                    <div class="relative top-20 mx-auto p-5 border w-full max-w-2xl shadow-lg rounded-md bg-white">
                        <div class="flex justify-between items-center border-b pb-3">
                            <h3 class="text-lg font-semibold text-gray-800" id="modalTitle">Tambah Data Guru</h3>
                            <button onclick="closeModal('tambahGuruModal')" class="text-gray-500 hover:text-gray-700">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        
                        <div class="mt-4">
                            <form id="guruForm">
                                <input type="hidden" id="guruId">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="guruNip" class="block text-sm font-medium text-gray-700">NIP*</label>
                                        <input type="text" id="guruNip" required
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="guruNama" class="block text-sm font-medium text-gray-700">Nama Lengkap*</label>
                                        <input type="text" id="guruNama" required
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="guruMataPelajaran" class="block text-sm font-medium text-gray-700">Mata Pelajaran*</label>
                                        <input type="text" id="guruMataPelajaran" required
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="guruEmail" class="block text-sm font-medium text-gray-700">Email*</label>
                                        <input type="email" id="guruEmail" required
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="guruTelepon" class="block text-sm font-medium text-gray-700">No. Telepon</label>
                                        <input type="text" id="guruTelepon"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    </div>
                                    <div>
                                        <label for="guruStatus" class="block text-sm font-medium text-gray-700">Status*</label>
                                        <select id="guruStatus" required
                                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                            <option value="">Pilih Status</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Cuti">Cuti</option>
                                            <option value="Nonaktif">Nonaktif</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-6 flex justify-end space-x-3">
                                    <button type="button" onclick="closeModal('tambahGuruModal')"
                                            class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                        Batal
                                    </button>
                                    <button type="submit"
                                            class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- JavaScript for Modal and CRUD Operations -->
                <script>
                    // Sample data for teachers
                    let teachers = [
                        {
                            id: 1,
                            nip: '198304122008011002',
                            nama: 'Budi Santoso, S.Pd',
                            mataPelajaran: 'Matematika',
                            email: 'budi.santoso@example.com',
                            telepon: '081234567890',
                            status: 'Aktif'
                        },
                        {
                            id: 2,
                            nip: '197812212005012003',
                            nama: 'Siti Aminah, M.Pd',
                            mataPelajaran: 'Bahasa Indonesia',
                                                        email: 'siti.aminah@example.com',
                            telepon: '081234567891',
                            status: 'Aktif'
                        }
                    ];

                    // DOM elements
                    const addGuruBtn = document.getElementById('add-teacher-btn');
                    const guruModal = document.getElementById('tambahGuruModal');
                    const guruForm = document.getElementById('guruForm');

                    // Initialize the page
                    document.addEventListener('DOMContentLoaded', function() {
                        renderTeachersTable();
                        
                        // Form submission
                        guruForm.addEventListener('submit', function(e) {
                            e.preventDefault();
                            saveTeacher();
                        });
                    });

                    // Render teachers table
                    function renderTeachersTable() {
                        const tableBody = document.querySelector('#dataGuruContainer tbody');
                        tableBody.innerHTML = '';
                        
                        teachers.forEach(teacher => {
                            const row = document.createElement('tr');
                            row.className = 'hover:bg-gray-50';
                            row.innerHTML = `
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/150" alt="Foto Guru">
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">${teacher.nama}</div>
                                    <div class="text-sm text-gray-500">${teacher.email}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${teacher.nip}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${teacher.mataPelajaran}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${getStatusClass(teacher.status)}">
                                        ${teacher.status}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button onclick="editTeacher(${teacher.id})" class="text-indigo-600 hover:text-indigo-900 mr-3">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="deleteTeacher(${teacher.id})" class="text-red-600 hover:text-red-900">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            `;
                            tableBody.appendChild(row);
                        });
                    }

                    // Get status class for styling
                    function getStatusClass(status) {
                        switch(status) {
                            case 'Aktif': return 'bg-green-100 text-green-800';
                            case 'Cuti': return 'bg-yellow-100 text-yellow-800';
                            case 'Nonaktif': return 'bg-red-100 text-red-800';
                            default: return 'bg-gray-100 text-gray-800';
                        }
                    }

                    // Open modal
                    function openModal(modalId) {
                        document.getElementById(modalId).classList.remove('hidden');
                        document.body.style.overflow = 'hidden';
                    }

                    // Close modal
                    function closeModal(modalId) {
                        document.getElementById(modalId).classList.add('hidden');
                        document.body.style.overflow = 'auto';
                    }

                    // Edit teacher
                    function editTeacher(id) {
                        const teacher = teachers.find(t => t.id === id);
                        if (!teacher) return;
                        
                        document.getElementById('modalTitle').textContent = 'Edit Data Guru';
                        document.getElementById('guruId').value = teacher.id;
                        document.getElementById('guruNip').value = teacher.nip;
                        document.getElementById('guruNama').value = teacher.nama;
                        document.getElementById('guruMataPelajaran').value = teacher.mataPelajaran;
                        document.getElementById('guruEmail').value = teacher.email;
                        document.getElementById('guruTelepon').value = teacher.telepon || '';
                        document.getElementById('guruStatus').value = teacher.status;
                        
                        openModal('tambahGuruModal');
                    }

                    // Save teacher (create or update)
                    function saveTeacher() {
                        const id = document.getElementById('guruId').value;
                        const isEdit = !!id;
                        
                        const teacherData = {
                            nip: document.getElementById('guruNip').value,
                            nama: document.getElementById('guruNama').value,
                            mataPelajaran: document.getElementById('guruMataPelajaran').value,
                            email: document.getElementById('guruEmail').value,
                            telepon: document.getElementById('guruTelepon').value,
                            status: document.getElementById('guruStatus').value
                        };
                        
                        if (isEdit) {
                            // Update existing teacher
                            const index = teachers.findIndex(t => t.id === parseInt(id));
                            if (index !== -1) {
                                teachers[index] = { ...teachers[index], ...teacherData };
                            }
                        } else {
                            // Add new teacher
                            const newId = teachers.length > 0 ? Math.max(...teachers.map(t => t.id)) + 1 : 1;
                            teachers.push({ id: newId, ...teacherData });
                        }
                        
                        closeModal('tambahGuruModal');
                        renderTeachersTable();
                        
                        // Show success message
                        alert(`Data guru berhasil ${isEdit ? 'diperbarui' : 'ditambahkan'}`);
                    }

                    // Delete teacher
                    function deleteTeacher(id) {
                        if (confirm('Apakah Anda yakin ingin menghapus data guru ini?')) {
                            teachers = teachers.filter(teacher => teacher.id !== id);
                            renderTeachersTable();
                            alert('Data guru berhasil dihapus');
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</body>
</html>
