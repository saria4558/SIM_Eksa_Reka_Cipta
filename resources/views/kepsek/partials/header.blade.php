<header class="bg-white shadow-sm">
    <div class="flex items-center justify-between px-6 py-4">
        <!-- Mobile menu button -->
        <div class="md:hidden">
            <button type="button" class="text-gray-500 focus:outline-none" id="mobile-menu-button">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        
        <!-- Search and Notifications -->
        <div class="flex items-center space-x-4">
            <div class="relative">
                <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>
            
            <button class="relative p-1 text-gray-400 hover:text-gray-500">
                <i class="fas fa-bell"></i>
                <span class="absolute top-0 right-0 h-2 w-2 rounded-full bg-red-500"></span>
            </button>
            
            <button class="md:hidden p-1 text-gray-400 hover:text-gray-500">
                <i class="fas fa-user-circle text-xl"></i>
            </button>
        </div>
        
        <!-- User Profile -->
        <div class="flex items-center mb-2">
            <img class="h-10 w-10 rounded-full object-cover" src="https://placehold.co/100x100" alt="Foto profil staff TU dengan jas formal">
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-700">{{ auth()->user()->name ?? 'Staff TU' }}</p>
                <p class="text-xs text-gray-500">{{ auth()->user()->role ?? 'Bagian Administrasi' }}</p>
            </div>
        </div>
    </div>
</header>