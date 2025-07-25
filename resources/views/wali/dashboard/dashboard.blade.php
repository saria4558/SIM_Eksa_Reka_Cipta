@extends('wali.layout')
@section('title', 'Dashboard')
@section('content')
  <!-- Main -->
  <div class="main">
    <main class="content">
      <!-- Cards -->
      <div class="cards">
        <div class="card blue">
          <div><p>Pelajaran Hari Ini</p><h3>3</h3></div>
          <div class="icon"><i class="fas fa-book"></i></div>
        </div>
        <div class="card green">
          <div><p>Tugas Mendatang</p><h3>5</h3></div>
          <div class="icon"><i class="fas fa-tasks"></i></div>
        </div>
        <div class="card yellow">
          <div><p>Presensi Bulan Ini</p><h3>85%</h3></div>
          <div class="icon"><i class="fas fa-user-check"></i></div>
        </div>
        <div class="card red">
          <div><p>Tagihan Tertunda</p><h3>Rp 1.250.000</h3></div>
          <div class="icon"><i class="fas fa-receipt"></i></div>
        </div>
      </div>

      <!-- Jadwal -->
      <div class="panel">
        <div class="panel-head">
          <h2>Jadwal Hari Ini</h2><button>Lihat Semua</button>
        </div>
        <table>
          <thead>
            <tr><th>Waktu</th><th>Mata Pelajaran</th><th>Guru</th><th>Ruangan</th></tr>
          </thead>
          <tbody>
            <tr><td>07:00 - 08:30</td><td><span class="dot blue"></span>Matematika</td><td>Bu Dian</td><td>LAB-12</td></tr>
            <tr><td>08:30 - 10:00</td><td><span class="dot green"></span>Fisika</td><td>Pak Rudi</td><td>R-08</td></tr>
            <tr><td>10:30 - 12:00</td><td><span class="dot yellow"></span>Bahasa Indonesia</td><td>Bu Lina</td><td>R-05</td></tr>
          </tbody>
        </table>
      </div>

      <!-- Tugas Mendatang -->
      <div class="panel">
        <div class="panel-head"><h2>Tugas Mendatang</h2><button>Lihat Semua</button></div>
        <div class="task">
          <div class="task-left">
            <div class="task-icon blue"><i class="fas fa-book"></i></div>
            <div><h4>Tugas Matematika</h4><p>Bab Integral - Deadline: Besok</p></div>
          </div>
          <button class="btn blue">Kerjakan</button>
        </div>
        <div class="task">
          <div class="task-left">
            <div class="task-icon green"><i class="fas fa-flask"></i></div>
            <div><h4>Laporan Praktikum Fisika</h4><p>Praktikum Getaran - Deadline: 2 Hari Lagi</p></div>
          </div>
          <button class="btn gray">Dalam Proses</button>
        </div>
        <div class="task">
          <div class="task-left">
            <div class="task-icon purple"><i class="fas fa-landmark"></i></div>
            <div><h4>Makalah Sejarah</h4><p>Perang Dunia II - Deadline: 5 Hari Lagi</p></div>
          </div>
          <button class="btn gray">Belum Mulai</button>
        </div>
      </div>
    </main>
  </div>
@endsection