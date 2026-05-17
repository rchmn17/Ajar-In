<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard Pengajar - Kalender Ketersediaan - AjarIn</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc] font-sans antialiased text-slate-800 relative">

    <nav class="bg-[#1a3652] text-white px-8 py-4 flex items-center justify-between sticky top-0 z-50">
        <div class="flex items-center gap-12">
            <div class="flex items-center gap-2">
                <div class="bg-white/20 p-1.5 rounded-lg">
                    <i class="fas fa-book-open text-lg"></i>
                </div>
                <span class="text-xl font-bold tracking-tight">AjarIn</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="#" class="hover:text-white transition-colors">Cari Tutor</a>
                <a href="#" class="text-white border-b-2 border-white pb-1">Dashboard Pengajar</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="bg-white/10 px-4 py-1.5 rounded-full text-xs font-semibold border border-white/10 flex items-center gap-2">
                <i class="fas fa-chalkboard-teacher"></i> Pengajar
            </button>
            <div class="relative cursor-pointer">
                <i class="far fa-bell text-xl"></i>
                <span class="absolute -top-1 -right-1 bg-red-500 text-[10px] w-4 h-4 flex items-center justify-center rounded-full">3</span>
            </div>
            <div class="flex items-center gap-3 bg-white/10 pl-2 pr-4 py-1.5 rounded-full border border-white/10 cursor-pointer">
                <div class="w-8 h-8 rounded-full bg-slate-400 flex items-center justify-center font-bold text-xs uppercase">AF</div>
                <span class="text-sm font-semibold">Andi</span>
                <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-8 py-10">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
            <div>
                <p class="text-xs font-bold text-slate-400 mb-1">Dashboard Pengajar</p>
                <h1 class="text-3xl font-bold text-[#1a3652]">Selamat datang, Andi! 👋</h1>
            </div>
            <button class="bg-white border border-slate-200 px-5 py-2.5 rounded-xl text-sm font-bold text-slate-600 flex items-center gap-2 hover:bg-slate-50 transition-all shadow-sm">
                <i class="fas fa-chart-line"></i> Monitoring Board
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            @php
                $stats = [
                    ['title' => 'Total Pendapatan', 'value' => 'Rp4.2jt', 'sub' => 'bulan ini', 'icon' => 'fa-dollar-sign', 'color' => 'text-emerald-500', 'bg' => 'bg-emerald-50'],
                    ['title' => 'Total Murid', 'value' => '24', 'sub' => 'aktif', 'icon' => 'fa-users', 'color' => 'text-blue-500', 'bg' => 'bg-blue-50'],
                    ['title' => 'Rating', 'value' => '4.9', 'sub' => '128 ulasan', 'icon' => 'fa-star', 'color' => 'text-amber-500', 'bg' => 'bg-amber-50'],
                    ['title' => 'Jam Mengajar', 'value' => '38', 'sub' => 'bulan ini', 'icon' => 'fa-clock', 'color' => 'text-indigo-500', 'bg' => 'bg-indigo-50'],
                ];
            @endphp

            @foreach($stats as $stat)
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="text-xs font-bold text-slate-400">{{ $stat['title'] }}</h3>
                    <div class="w-8 h-8 rounded-full {{ $stat['bg'] }} {{ $stat['color'] }} flex items-center justify-center">
                        <i class="fas {{ $stat['icon'] }} text-sm"></i>
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl font-black text-[#1a3652] mb-1">{{ $stat['value'] }}</h2>
                    <p class="text-[11px] font-semibold text-slate-400">{{ $stat['sub'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-3 space-y-8">
                
                <div class="flex gap-4 border-b border-slate-200 pb-1 overflow-x-auto">
                    <button class="text-slate-500 hover:text-[#1a3652] hover:bg-slate-100 px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 transition-all whitespace-nowrap">
                        <i class="far fa-calendar-check"></i> Jadwal & Request
                    </button>
                    <button class="text-slate-500 hover:text-[#1a3652] hover:bg-slate-100 px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 transition-all whitespace-nowrap">
                        <i class="fas fa-chart-pie"></i> Progres Murid
                    </button>
                    <button class="bg-[#1a3652] text-white px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 whitespace-nowrap shadow-md">
                        <i class="far fa-calendar-alt"></i> Kalender Ketersediaan
                    </button>
                </div>

                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-8">
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-[#1a3652] mb-1">Manajemen Ketersediaan</h2>
                        <p class="text-xs text-slate-400">Atur slot waktu mengajarmu. Slot yang kamu buka akan muncul saat murid memilih jadwal.</p>
                    </div>

                    <div class="grid grid-cols-1 xl:grid-cols-12 gap-10">
                        
                        <div class="xl:col-span-7">
                            <div class="flex items-center justify-between mb-8 px-4">
                                <button id="prev-month" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-slate-50 transition-colors">
                                    <i class="fas fa-chevron-left text-xs"></i>
                                </button>
                                <h3 id="calendar-month-year" class="font-extrabold text-sm text-[#1a3652]">Mei 2026</h3>
                                <button id="next-month" class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-slate-50 transition-colors">
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </button>
                            </div>

                            <div class="grid grid-cols-7 gap-y-4 text-center mb-4">
                                @foreach(['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'] as $dayName)
                                    <span class="text-xs font-bold text-slate-400">{{ $dayName }}</span>
                                @endforeach
                            </div>

                            <div class="grid grid-cols-7 gap-y-3 text-center" id="calendar-grid"></div>

                            <div class="flex items-center gap-6 mt-10 pt-6 border-t border-slate-100 px-2 text-[11px] font-bold text-slate-400">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-[#1a3652]"></span> Tersedia
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-amber-400"></span> Dikustomisasi
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-slate-200"></span> Tidak tersedia
                                </div>
                            </div>
                        </div>

                        <div class="xl:col-span-5 flex flex-col justify-between">
                            <div>
                                <div class="mb-6">
                                    <h3 id="panel-date-title" class="font-extrabold text-[#1a3652] text-base mb-1">Pilih Tanggal...</h3>
                                    <p id="panel-slot-counter" class="text-xs text-slate-400 font-medium">0 slot dipilih</p>
                                </div>

                                <div class="flex gap-2 mb-6">
                                    <button onclick="selectAllSlots()" class="px-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-[10px] font-bold text-slate-500 hover:bg-slate-100 transition-colors">Pilih Semua</button>
                                    <button onclick="clearAllSlots()" class="px-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-[10px] font-bold text-slate-500 hover:bg-slate-100 transition-colors">Hapus Semua</button>
                                </div>

                                <div class="grid grid-cols-3 gap-2.5" id="slots-container">
                                    @php
                                        $slots = [
                                            ['time' => '07:00'], ['time' => '08:00'], ['time' => '09:00'], 
                                            ['time' => '10:00'], ['time' => '11:00'], ['time' => '12:00'], 
                                            ['time' => '13:00'], ['time' => '14:00'], ['time' => '15:00'], 
                                            ['time' => '16:00'], ['time' => '17:00'], ['time' => '18:00'], 
                                            ['time' => '19:00'], ['time' => '20:00'], ['time' => '21:00'],
                                        ];
                                    @endphp

                                    @foreach($slots as $slot)
                                        <button onclick="toggleSlot(this)" class="slot-btn py-3 border border-slate-100 bg-white text-slate-600 rounded-xl text-xs font-bold transition-all hover:border-slate-300">
                                            {{ $slot['time'] }}
                                        </button>
                                    @endforeach
                                </div>
                            </div>

                            <div class="space-y-3 mt-8">
                                <button id="save-schedule-btn" class="w-full py-3.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold shadow-lg shadow-[#1a3652]/10 hover:bg-[#12273c] transition-all flex items-center justify-center gap-2">
                                    <i class="far fa-save"></i> Simpan untuk <span id="save-day-text">Hari</span> ini
                                </button>
                                <button id="save-all-month-btn" class="w-full py-3.5 bg-white border border-slate-200 text-slate-500 rounded-xl text-xs font-bold hover:bg-slate-50 transition-all">
                                    Terapkan ke semua <span id="apply-all-day-text">Hari</span> di bulan ini
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="success-modal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-[100] p-4 transition-all opacity-0 pointer-events-none duration-300">
        <div class="bg-white rounded-2xl max-w-sm w-full p-6 text-center shadow-xl transform scale-95 transition-transform duration-300">
            <div class="w-16 h-16 bg-emerald-50 text-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fas fa-check-circle text-3xl animate-pulse"></i>
            </div>
            <h3 class="text-lg font-black text-[#1a3652] mb-2">Jadwal Berhasil Disimpan!</h3>
            <p class="text-xs text-slate-500 leading-relaxed mb-6">
                Slot ketersediaan mengajar Anda untuk <span id="modal-target-date" class="font-bold text-slate-700">Hari ini</span> telah sukses diperbarui dan siap dipilih oleh murid.
            </p>
            <button onclick="closeSuccessModal()" class="w-full py-3.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold hover:bg-[#12273c] transition-colors shadow-md shadow-[#1a3652]/10">
                Selesai
            </button>
        </div>
    </div>

    <footer class="bg-[#1a3652] text-white pt-20 pb-10 px-8 mt-10">
        <p class="text-center text-xs text-slate-400">© 2026 AjarIn. Semua hak dilindungi.</p>
    </footer>

    <script>
        let currentDate = new Date();
        let currentYear = currentDate.getFullYear();
        let currentMonth = currentDate.getMonth(); 
        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        const dayNames = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

        // Menyimpan format YYYY-MM-DD yang sedang aktif (bukan text display)
        let activeDateDBFormat = ""; 
        let activeFullDate = ""; 

        // Setup Setup Header CSRF Token untuk request Fetch POST
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        document.addEventListener("DOMContentLoaded", function() {
            renderCalendar(currentYear, currentMonth);

            document.getElementById('prev-month').addEventListener('click', () => {
                currentMonth--;
                if (currentMonth < 0) { currentMonth = 11; currentYear--; }
                renderCalendar(currentYear, currentMonth);
            });

            document.getElementById('next-month').addEventListener('click', () => {
                currentMonth++;
                if (currentMonth > 11) { currentMonth = 0; currentYear++; }
                renderCalendar(currentYear, currentMonth);
            });

            // Event listener untuk tombol simpan
            document.getElementById('save-schedule-btn').addEventListener('click', saveScheduleToDB);
        });

        function renderCalendar(year, month) {
            const grid = document.getElementById('calendar-grid');
            const title = document.getElementById('calendar-month-year');
            
            title.innerText = `${monthNames[month]} ${year}`;
            grid.innerHTML = ''; 

            const firstDayIndex = new Date(year, month, 1).getDay();
            const totalDays = new Date(year, month + 1, 0).getDate();
            
            for (let i = 0; i < firstDayIndex; i++) {
                grid.appendChild(document.createElement('span'));
            }

            const today = new Date();
            
            for (let i = 1; i <= totalDays; i++) {
                const dayDiv = document.createElement('div');
                dayDiv.className = 'flex flex-col items-center justify-center relative py-1.5';

                const btn = document.createElement('button');
                btn.innerText = i;
                
                const itemDate = new Date(year, month, i);
                const isToday = itemDate.toDateString() === today.toDateString();
                const isPast = itemDate < new Date(today.getFullYear(), today.getMonth(), today.getDate());

                btn.className = `date-btn w-10 h-10 rounded-xl text-xs font-bold flex items-center justify-center transition-all`;
                
                // Format YYYY-MM-DD untuk mempermudah query backend
                const dbFormat = `${year}-${String(month + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
                const displayDate = `${dayNames[itemDate.getDay()]}, ${i} ${monthNames[month]} ${year}`;
                
                btn.setAttribute('data-display', displayDate);
                btn.setAttribute('data-db', dbFormat);

                if (isToday) {
                    btn.classList.add('bg-[#1a3652]', 'text-white', 'shadow-md', 'shadow-[#1a3652]/20', 'scale-105', 'active-date');
                    activeFullDate = displayDate;
                    activeDateDBFormat = dbFormat;
                    updateRightPanel(activeFullDate);
                    fetchSchedulesFromDB(activeDateDBFormat); // Fetch jadwal hari ini
                } else if (isPast) {
                    btn.classList.add('text-slate-300', 'cursor-not-allowed');
                    btn.setAttribute('disabled', 'true');
                } else {
                    btn.classList.add('text-slate-700', 'hover:bg-slate-50', 'cursor-pointer');
                }

                if (!isPast) {
                    btn.addEventListener('click', function() {
                        handleDateClick(this);
                    });
                }

                dayDiv.appendChild(btn);
                grid.appendChild(dayDiv);
            }
        }

        function handleDateClick(clickedBtn) {
            const allDateBtns = document.querySelectorAll('.date-btn:not([disabled])');
            allDateBtns.forEach(b => {
                b.classList.remove('bg-[#1a3652]', 'text-white', 'shadow-md', 'shadow-[#1a3652]/20', 'scale-105', 'active-date');
                b.classList.add('text-slate-700', 'hover:bg-slate-50');
            });

            clickedBtn.classList.remove('text-slate-700', 'hover:bg-slate-50');
            clickedBtn.classList.add('bg-[#1a3652]', 'text-white', 'shadow-md', 'shadow-[#1a3652]/20', 'scale-105', 'active-date');
            
            activeFullDate = clickedBtn.getAttribute('data-display');
            activeDateDBFormat = clickedBtn.getAttribute('data-db');
            updateRightPanel(activeFullDate);
            
            // Ambil data jadwal dari DB ketika hari diklik
            fetchSchedulesFromDB(activeDateDBFormat);
        }

        function updateRightPanel(fullDateString) {
            document.getElementById('panel-date-title').innerText = fullDateString;
            const dayName = fullDateString.split(',')[0];
            document.getElementById('save-day-text').innerText = dayName;
            document.getElementById('apply-all-day-text').innerText = dayName;
        }

        // -------------------------------------------------------------
        // FUNGSI FETCH (AJAX) - MENGAMBIL DATA DARI DATABASE
        // -------------------------------------------------------------
        async function fetchSchedulesFromDB(tanggal) {
            clearAllSlots(); // Bersihkan slot sebelum memuat data baru
            document.getElementById('panel-slot-counter').innerText = 'Memuat jadwal...';

            try {
                const response = await fetch(`/api/schedules?tanggal=${tanggal}`, {
                    headers: { 'Accept': 'application/json' }
                });
                const result = await response.json();
                
                // Jika ada jadwal yang sudah terpesan/tidak tersedia
                if(result.booked_hours) {
                    const slots = document.querySelectorAll('.slot-btn');
                    slots.forEach(slot => {
                        const timeStr = slot.innerText.trim();
                        if(result.booked_hours.includes(timeStr)) {
                            // Jadikan toggle aktif (tidak tersedia / sudah diblokir)
                            slot.classList.add('is-selected', 'bg-[#1a3652]', 'text-white', 'shadow-sm');
                            slot.classList.remove('bg-white', 'text-slate-600');
                            
                            // Opsional: Jika tidak ingin bisa diklik lagi karena sudah "permanen"
                            // slot.setAttribute('disabled', 'true'); 
                            // slot.classList.add('opacity-50', 'cursor-not-allowed');
                        }
                    });
                }
                updateCounter();
            } catch (error) {
                console.error("Gagal mengambil jadwal:", error);
                document.getElementById('panel-slot-counter').innerText = 'Gagal memuat';
            }
        }

        // -------------------------------------------------------------
        // FUNGSI POST (AJAX) - MENYIMPAN DATA KE DATABASE
        // -------------------------------------------------------------
        async function saveScheduleToDB() {
            // Kumpulkan jam yang di toggle (dipilih untuk ditandai tidak tersedia)
            const selectedSlots = [];
            document.querySelectorAll('.slot-btn.is-selected').forEach(slot => {
                selectedSlots.push(slot.innerText.trim());
            });

            if(selectedSlots.length === 0) {
                alert("Pilih setidaknya satu slot jadwal!");
                return;
            }

            try {
                const response = await fetch('/api/schedules', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        tanggal: activeDateDBFormat,
                        jam: selectedSlots
                    })
                });

                const result = await response.json();
                if(response.ok) {
                    openSuccessModal(); // Tampilkan popup sukses bawaan HTML Anda
                } else {
                    alert(result.message || "Terjadi kesalahan sistem.");
                }
            } catch (error) {
                console.error("Gagal menyimpan jadwal:", error);
                alert("Gagal menghubungi server.");
            }
        }

        // Fungsi toggle UI statis tetap dibiarkan agar tombol bisa diklik
        function toggleSlot(btnElement) {
            if(btnElement.hasAttribute('disabled')) return; // Abaikan jika didisable

            btnElement.classList.toggle('is-selected');
            if(btnElement.classList.contains('is-selected')) {
                btnElement.classList.remove('bg-white', 'border-slate-100', 'text-slate-600', 'hover:border-slate-300');
                btnElement.classList.add('bg-[#1a3652]', 'text-white', 'border-transparent', 'shadow-sm');
            } else {
                btnElement.classList.add('bg-white', 'border-slate-100', 'text-slate-600', 'hover:border-slate-300');
                btnElement.classList.remove('bg-[#1a3652]', 'text-white', 'border-transparent', 'shadow-sm');
            }
            updateCounter();
        }

        function selectAllSlots() {
            document.querySelectorAll('.slot-btn:not([disabled])').forEach(slot => {
                if(!slot.classList.contains('is-selected')) toggleSlot(slot);
            });
        }

        function clearAllSlots() {
            document.querySelectorAll('.slot-btn:not([disabled])').forEach(slot => {
                if(slot.classList.contains('is-selected')) toggleSlot(slot);
            });
        }

        function updateCounter() {
            const count = document.querySelectorAll('.slot-btn.is-selected').length;
            document.getElementById('panel-slot-counter').innerText = count + ' slot tidak tersedia';
        }

        function openSuccessModal() {
            const modal = document.getElementById('success-modal');
            const modalContent = modal.querySelector('div');
            document.getElementById('modal-target-date').innerText = activeFullDate; 
            modal.classList.remove('hidden', 'opacity-0', 'pointer-events-none');
            modal.classList.add('flex', 'opacity-100');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
        }

        function closeSuccessModal() {
            const modal = document.getElementById('success-modal');
            const modalContent = modal.querySelector('div');
            modal.classList.add('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.remove('flex');
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
</body>
</html>