<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title','SekolahKu')</title>
  @vite(['resources/css/wali/dashboard.css'])
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="logo">
      <img src="{{ asset('images/wali/logo.png') }}" class="logo-img" alt="">
    </div>
    <ul class="menu">
      <li class="{{ Request::is('wali/dashboard') ? 'active-menu' : '' }}">
        <i class="fas fa-home"></i><span class="sidebar-text">Dashboard</span>
      </li>
      <li class="{{ Request::is('wali/pelajaran') ? 'active-menu' : '' }}">
        <i class="fas fa-tasks"></i><span class="sidebar-text">Daftar Pelajaran</span>
      </li>
      {{-- <li class="{{ Request::is('wali/kelas') ? 'active-menu' : '' }}">
        <i class="fas fa-book"></i><span class="sidebar-text">Daftar Kelas</span>
      </li> --}}

      {{-- <li class="{{ Request::is('wali/penilaian') ? 'active-menu' : '' }}">
        <i class="fas fa-star"></i><span class="sidebar-text">Penilaian</span>
      </li> --}}
      <li class="{{ Request::is('wali/tagihan') ? 'active-menu' : '' }}">
        <i class="fas fa-receipt"></i><span class="sidebar-text">Tagihan</span>
      </li>
      <li class="{{ Request::is('wali/jadwal') ? 'active-menu' : '' }}">
        <i class="fas fa-calendar"></i><span class="sidebar-text">Jadwal</span>
      </li>
      <li class="{{ Request::is('wali/presensi') ? 'active-menu' : '' }}">
        <i class="fas fa-user-check"></i><span class="sidebar-text">Presensi</span>
      </li>
      <li class="{{ Request::is('wali/profil') ? 'active-menu' : '' }}">
        <i class="fas fa-user"></i><span class="sidebar-text">Profil</span>
      </li>
    </ul>
    <div class="collapse-btn">
      <button onclick="toggleSidebar()">
        <i class="fas fa-chevron-left"></i><span class="sidebar-text">Sembunyikan</span>
      </button>
    </div>
  </aside>

  <!-- Header -->
  <header class="header">
    <div class="search-box">
      <input type="text" placeholder="Cari sesuatu..." />
      <button><i class="fas fa-search"></i></button>
    </div>
    <div class="header-right">
      <div class="admin-btn">
        <img src="{{ asset('images/wali/profil.jpeg') }}" alt="Profil" class="admin-img">
        <i class="fas fa-chevron-down"></i>
      </div>
    </div>
  </header>

  <!-- Main -->

      @yield('content')


<script>
  function toggleSidebar() {
    document.querySelector('.sidebar').classList.toggle('collapsed');
    document.querySelector('.main').classList.toggle('collapsed');
  }
</script>
</body>
</html>
