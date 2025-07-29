<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SIM-P - Presensi Staff</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  .checked-in {
    background-color: #16a34a; /* green-600 */
    color: white;
    border-radius: 9999px;
  }
</style>
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
  <!-- Sidebar + Navbar Container -->
  <div class="flex flex-1 overflow-hidden">
    <!-- Sidebar -->
    <aside class="hidden md:flex md:flex-col w-64 bg-white border-r border-gray-200">
      <div class="flex items-center justify-center h-24 px-4 border-b border-gray-200">
        <img src="https://placehold.co/150x50?text=Logo" alt="Logo" class="h-12" />
      </div>
      <nav class="flex-1 px-2 py-4 space-y-1">
        <a href="#" class="flex items-center px-2 py-2 text-sm font-medium rounded-md text-gray-900 bg-gray-100">
          <svg class="mr-3 h-6 w-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true"><path d="M9 12l2 2 4-4"></path><path d="M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z"></path></svg>
          Presensi Staff
        </a>
        <!-- Tambah menu lain jika perlu -->
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex flex-col flex-1 overflow-hidden">
      <!-- Navbar -->
      <header class="flex items-center justify-between bg-white border-b border-gray-200 px-4 py-3">
        <h1 class="text-xl font-semibold text-gray-800">Presensi Staff</h1>
        <div class="flex items-center space-x-4">
          <button class="p-2 rounded-full hover:bg-gray-100">
            <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
          </button>
          <img src="https://placehold.co/40x40" alt="Foto Profil" class="h-10 w-10 rounded-full object-cover" />
        </div>
      </header>

      <!-- Content -->
      <main class="flex-1 overflow-y-auto p-6">
        <button id="btnCheckIn" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg mb-6 shadow">
          Check-in Hari Ini
        </button>
        <div id="message" class="mb-4 text-green-700 font-semibold"></div>

        <div class="bg-white p-4 rounded-lg shadow max-w-md mx-auto">
          <div class="flex justify-between items-center mb-4">
            <button id="prevMonth" class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">&lt;</button>
            <h2 id="monthYear" class="text-lg font-semibold"></h2>
            <button id="nextMonth" class="px-3 py-1 bg-gray-200 rounded hover:bg-gray-300">&gt;</button>
          </div>
          <div class="grid grid-cols-7 gap-2 text-center text-sm font-medium text-gray-600">
            <div>Min</div><div>Sen</div><div>Sel</div><div>Rab</div><div>Kam</div><div>Jum</div><div>Sab</div>
          </div>
          <div id="calendar" class="grid grid-cols-7 gap-2 mt-2 text-center text-sm"></div>
        </div>
      </main>
    </div>
  </div>

<script>
  const btnCheckIn = document.getElementById('btnCheckIn');
  const message = document.getElementById('message');
  const calendarEl = document.getElementById('calendar');
  const monthYearEl = document.getElementById('monthYear');
  const prevMonthBtn = document.getElementById('prevMonth');
  const nextMonthBtn = document.getElementById('nextMonth');

  let currentDate = new Date();
  let currentMonth = currentDate.getMonth();
  let currentYear = currentDate.getFullYear();

  const STORAGE_KEY = 'staffCheckInDates';

  function loadCheckInDates() {
    const data = localStorage.getItem(STORAGE_KEY);
    return data ? JSON.parse(data) : [];
  }

  function saveCheckInDates(dates) {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(dates));
  }

  function formatDate(date) {
    return date.toISOString().split('T')[0];
  }

  function hasCheckedInToday() {
    const todayStr = formatDate(new Date());
    const dates = loadCheckInDates();
    return dates.includes(todayStr);
  }

  function addCheckInToday() {
    const todayStr = formatDate(new Date());
    let dates = loadCheckInDates();
    if (!dates.includes(todayStr)) {
      dates.push(todayStr);
      saveCheckInDates(dates);
      return true;
    }
    return false;
  }

  function renderCalendar(month, year) {
    calendarEl.innerHTML = '';
    monthYearEl.textContent = new Date(year, month).toLocaleDateString('id-ID', { month: 'long', year: 'numeric' });

    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    const firstWeekDay = firstDay.getDay();
    const daysInMonth = lastDay.getDate();

    for (let i = 0; i < firstWeekDay; i++) {
      const emptyCell = document.createElement('div');
      calendarEl.appendChild(emptyCell);
    }

    const checkInDates = loadCheckInDates();

    for (let day = 1; day <= daysInMonth; day++) {
      const date = new Date(year, month, day);
      const dateStr = formatDate(date);

      const dayEl = document.createElement('div');
      dayEl.textContent = day;
      dayEl.classList.add('py-2', 'rounded', 'cursor-default');

      if (checkInDates.includes(dateStr)) {
        dayEl.classList.add('checked-in');
        dayEl.title = 'Sudah Check-in';
      }

      const todayStr = formatDate(new Date());
      if (dateStr === todayStr) {
        dayEl.classList.add('border', 'border-green-600', 'font-semibold');
      }

      calendarEl.appendChild(dayEl);
    }
  }

  function updateButtonState() {
    if (hasCheckedInToday()) {
      btnCheckIn.disabled = true;
      btnCheckIn.textContent = 'Sudah Check-in Hari Ini';
      btnCheckIn.classList.add('bg-gray-400', 'cursor-not-allowed');
      btnCheckIn.classList.remove('bg-green-600', 'hover:bg-green-700');
    } else {
      btnCheckIn.disabled = false;
      btnCheckIn.textContent = 'Check-in Hari Ini';
      btnCheckIn.classList.remove('bg-gray-400', 'cursor-not-allowed');
      btnCheckIn.classList.add('bg-green-600', 'hover:bg-green-700');
    }
  }

  btnCheckIn.addEventListener('click', () => {
    if (addCheckInToday()) {
      message.textContent = 'Check-in berhasil!';
      updateButtonState();
      renderCalendar(currentMonth, currentYear);
    } else {
      message.textContent = 'Anda sudah check-in hari ini.';
    }
  });

  prevMonthBtn.addEventListener('click', () => {
    currentMonth--;
    if (currentMonth < 0) {
      currentMonth = 11;
      currentYear--;
    }
    renderCalendar(currentMonth, currentYear);
  });

  nextMonthBtn.addEventListener('click', () => {
    currentMonth++;
    if (currentMonth > 11) {
      currentMonth = 0;
      currentYear++;
    }
    renderCalendar(currentMonth, currentYear);
  });

  // Initialize
  updateButtonState();
  renderCalendar(currentMonth, currentYear);
</script>
</body>
</html>
