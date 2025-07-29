@extends('guru.layouts.app')

@section('title', 'presensi')

@section('content')

<script>
    const today = new Date().toISOString().slice(0, 10); // Format YYYY-MM-DD
    const submittedDates = ['2025-07-27', '2025-07-28']; // Contoh tanggal yang sudah submit

    document.addEventListener('DOMContentLoaded', () => {
      const days = document.querySelectorAll('[data-date]');
      days.forEach(day => {
        const date = day.dataset.date;

        if (date === today) {
          day.classList.add('border-2', 'border-blue-500', 'font-bold');
          if (!submittedDates.includes(date)) {
            const btn = document.createElement('button');
            btn.textContent = 'Submit';
            btn.className = 'mt-2 px-2 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600';
            btn.onclick = () => {
              alert(`Daily check-in untuk ${date} berhasil!`);
              day.classList.remove('bg-gray-200');
              day.classList.add('bg-green-200');
              btn.remove();
            };
            day.appendChild(btn);
          } else {
            day.classList.add('bg-green-200');
          }
        } else if (date < today) {
          if (submittedDates.includes(date)) {
            day.classList.add('bg-green-200');
          } else {
            day.classList.add('bg-red-200');
          }
        } else {
          day.classList.add('bg-white');
        }
      });
    });
  </script>
  <div class="max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-center">Kalender Presensi Guru - Juli 2025</h1>
    <div class="grid grid-cols-7 gap-4 bg-white p-4 rounded shadow">
      <!-- Baris hari -->
      <div class="text-center font-semibold text-gray-600">Minggu</div>
      <div class="text-center font-semibold text-gray-600">Senin</div>
      <div class="text-center font-semibold text-gray-600">Selasa</div>
      <div class="text-center font-semibold text-gray-600">Rabu</div>
      <div class="text-center font-semibold text-gray-600">Kamis</div>
      <div class="text-center font-semibold text-gray-600">Jumat</div>
      <div class="text-center font-semibold text-gray-600">Sabtu</div>

      <!-- Kalender tanggal (1 - 31) Juli 2025 -->
      <!-- Kosongkan dulu slot sebelum 1 Juli (karena 1 Juli 2025 hari Selasa) -->
      <div></div><div></div>

      <!-- Generate tanggal -->
      <!-- Ganti secara dinamis jika perlu -->
      <!-- Misal dari 1 sampai 31 Juli -->
      <!-- Data-date harus dalam format YYYY-MM-DD -->

      <!-- Contoh 1 sampai 31 Juli -->
      <!-- Gunakan JavaScript untuk generate atau isi manual -->

      <!-- Tanggal -->
      <!-- Manual: 1 - 31 -->
      <!-- Loop tanggal -->
      <!-- Gunakan skrip Python, JS, atau isi manual -->
      <!-- Contoh: -->
      <!-- data-date format: '2025-07-01' -->
      <!-- Tanggal 1 sampai 31 -->
      <!-- Tambah <div></div> sampai genap 35 elemen agar grid penuh -->
      <!-- Berikut 31 hari untuk demo -->

      <!-- 1-31 Juli -->
      <script>
        const container = document.currentScript.parentElement;
        for (let i = 1; i <= 31; i++) {
          const day = i.toString().padStart(2, '0');
          const date = `2025-07-${day}`;
          const div = document.createElement('div');
          div.className = 'text-center p-2 rounded transition-all';
          div.dataset.date = date;
          div.innerHTML = `<div class="text-sm">${i}</div>`;
          container.appendChild(div);
        }

        // Tambahan kotak kosong untuk melengkapi grid (jika dibutuhkan)
        for (let i = 0; i < 2; i++) {
          const empty = document.createElement('div');
          container.appendChild(empty);
        }
      </script>
    </div>
  </div>

@endsection
    