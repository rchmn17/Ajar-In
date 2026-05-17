<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Tutor Terbaik - AjarIn</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .modal-open { overflow: hidden; }
        .step-circle { transition: all 0.3s ease; }
    </style>
</head>
<body class="bg-[#f8fafc] font-sans antialiased text-slate-800 min-h-screen relative">

    <div id="main-content-wrapper" class="transition-all duration-300">
        
        <nav class="bg-[#1a3652] text-white px-8 py-4 flex items-center justify-between sticky top-0 z-40 shadow-sm">
            <div class="flex items-center gap-12">
                <div class="flex items-center gap-2">
                    <div class="bg-white/20 p-1.5 rounded-lg">
                        <i class="fas fa-book-open text-lg"></i>
                    </div>
                    <span class="text-xl font-bold tracking-tight">AjarIn</span>
                </div>
                <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                    <a href="#" class="hover:text-white transition-colors">Cari Tutor</a>
                    <a href="#" class="hover:text-white transition-colors">Dashboard</a>
                    <a href="#" class="hover:text-white transition-colors">Monitoring</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button class="bg-white/10 px-4 py-1.5 rounded-full text-xs font-semibold border border-white/10 flex items-center gap-2">
                    <i class="fas fa-user-graduate"></i> Pelajar
                </button>
                <div class="relative">
                    <i class="far fa-bell text-xl"></i>
                    <span class="absolute -top-1 -right-1 bg-red-500 text-[10px] w-4 h-4 flex items-center justify-center rounded-full">3</span>
                </div>
                <div class="flex items-center gap-3 bg-white/10 pl-2 pr-4 py-1.5 rounded-full border border-white/10">
                    <div class="w-8 h-8 rounded-full bg-slate-400 flex items-center justify-center font-bold text-xs uppercase">RP</div>
                    <span class="text-sm font-semibold">Rizky</span>
                    <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                </div>
            </div>
        </nav>

        <section class="bg-[#1a3652] pt-12 pb-16 px-8">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl font-bold text-white mb-8">Temukan Pengajar Terbaikmu</h1>
                
                <div class="flex items-center gap-4 mb-8">
                    <div class="relative flex-1">
                        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        <input type="text" placeholder="Cari skill spesifik... (cth: Laravel Middleware)" 
                               class="w-full pl-12 pr-4 py-4 rounded-xl bg-white border-none focus:ring-4 focus:ring-white/20 outline-none text-sm shadow-xl">
                    </div>
                    <button class="bg-[#e2d1b9] text-[#1a3652] px-6 py-4 rounded-xl font-bold text-sm shadow-lg hover:bg-[#d4c1a8] transition-all whitespace-nowrap">
                        Request Match
                    </button>
                </div>

                <div class="flex flex-wrap gap-3">
                    @foreach(['Semua', 'Teknologi', 'Akademis', 'Professional', 'Bahasa'] as $cat)
                        <button class="px-6 py-2 rounded-full text-sm font-bold transition-all {{ $cat == 'Semua' ? 'bg-white text-[#1a3652]' : 'bg-white/10 text-white hover:bg-white/20 border border-white/10' }}">
                            {{ $cat }}
                        </button>
                    @endforeach
                </div>
            </div>
        </section>

        <main class="max-w-7xl mx-auto px-8 mt-12">
            <p class="text-slate-400 text-xs font-bold mb-8 uppercase tracking-widest">Menampilkan <span class="text-slate-800">6</span> pengajar pilihan</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                @php
                    $tutors = [
                        ['name' => 'Alicia Tanoto', 'title' => 'English & IELTS Specialist', 'cat' => 'Bahasa', 'price' => '120.000', 'profile_bg' => 'bg-emerald-100 text-emerald-800'],
                        ['name' => 'Andi Firmansyah', 'title' => 'Senior Full-Stack Developer', 'cat' => 'Teknologi', 'price' => '150.000', 'profile_bg' => 'bg-teal-100 text-teal-800'],
                        ['name' => 'Priya Ratnasari', 'title' => 'Business Analyst & PM', 'cat' => 'Professional', 'price' => '200.000', 'profile_bg' => 'bg-yellow-100 text-yellow-800'],
                        ['name' => 'Sari Dewi Putri', 'title' => 'Data Scientist & ML Engineer', 'cat' => 'Teknologi', 'price' => '175.000', 'profile_bg' => 'bg-rose-100 text-rose-800'],
                        ['name' => 'Budi Santoso', 'title' => 'Matematika & Fisika SMA', 'cat' => 'Akademis', 'price' => '85.000', 'profile_bg' => 'bg-orange-100 text-orange-800'],
                        ['name' => 'Reza Mahendra', 'title' => 'UI/UX Designer', 'cat' => 'Professional', 'price' => '125.000', 'profile_bg' => 'bg-blue-100 text-blue-800']
                    ];
                @endphp

                @foreach($tutors as $tutor)
                <div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="bg-[#1a3652] h-24 p-6 relative">
                        <span class="absolute right-6 top-6 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-widest border border-white/10">
                            {{ $tutor['cat'] }}
                        </span>
                    </div>
                    <div class="px-8 -mt-10 relative z-10 flex items-end justify-between">
                        <div class="w-20 h-20 rounded-2xl border-4 border-white font-black text-lg flex items-center justify-center shadow-sm {{ $tutor['profile_bg'] }}">
                            {{ implode('', array_map(fn($n) => $n[0], explode(' ', $tutor['name']))) }}
                        </div>
                    </div>

                    <div class="p-8 pt-4 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-[#1a3652] mb-1">{{ $tutor['name'] }}</h3>
                            <p class="text-xs font-medium text-slate-400 mb-4">{{ $tutor['title'] }}</p>
                        </div>

                        <div class="flex items-center justify-between border-t border-slate-50 pt-4 mt-4">
                            <div>
                                <p class="text-[10px] font-bold text-slate-300 uppercase">Harga/jam</p>
                                <p class="text-base font-black text-[#1a3652]">Rp{{ $tutor['price'] }}</p>
                            </div>
                            <button onclick="openBookingModal('{{ $tutor['name'] }}', '{{ $tutor['price'] }}')" 
                                    class="px-4 py-2 bg-[#1a3652] text-white rounded-xl text-xs font-bold hover:bg-[#132a41] transition-all shadow-md">
                                Booking
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </main>

        <footer class="bg-[#1a3652] text-white py-8 px-8 text-center text-xs text-slate-400 border-t border-white/10">
            <p>© 2026 AjarIn. Semua hak dilindungi.</p>
        </footer>
    </div>


    <div id="booking-modal-overlay" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm hidden opacity-0 transition-all duration-300">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden flex flex-col transform scale-95 transition-all duration-300" id="modal-box">
            
            <div class="bg-[#1a3652] text-white px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center text-sm font-bold text-white" id="modal-avatar-placeholder"></div>
                    <div>
                        <h2 class="text-sm font-bold tracking-tight">Booking <span class="font-normal text-slate-300">dengan</span> <span id="modal-target-name">Tutor</span></h2>
                        <p class="text-[10px] text-slate-400 font-medium" id="modal-target-price">Rp0/jam</p>
                    </div>
                </div>
                <button type="button" onclick="closeBookingModal()" class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center text-white/80 hover:bg-white/20 transition-all">
                    <i class="fas fa-times text-xs"></i>
                </button>
            </div>

            <div class="px-8 py-4 border-b border-slate-100 bg-slate-50/50 flex items-center justify-center gap-4 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                <div id="step-badge-schedule" class="flex items-center gap-1.5 text-[#1a3652]">
                    <span id="circle-1" class="step-circle w-4 h-4 rounded-full bg-[#1a3652] text-white flex items-center justify-center text-[9px]">1</span> Jadwal
                </div>
                <span class="text-slate-200">/</span>
                <div id="step-badge-confirm" class="flex items-center gap-1.5 text-slate-400">
                    <span id="circle-2" class="step-circle w-4 h-4 rounded-full bg-slate-200 text-white flex items-center justify-center text-[9px]">2</span> Konfirmasi
                </div>
                <span class="text-slate-200">/</span>
                <div id="step-badge-success" class="flex items-center gap-1.5 text-slate-400">
                    <span id="circle-3" class="step-circle w-4 h-4 rounded-full bg-slate-200 text-white flex items-center justify-center text-[9px]">3</span> Selesai
                </div>
            </div>

            <div class="p-6 overflow-y-auto max-h-[70vh]">
                
                <div id="step-content-schedule" class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start">
                        
                        <div class="md:col-span-7 border border-slate-100 rounded-xl p-3 bg-slate-50/40">
                            <div class="flex items-center justify-between mb-4 px-2">
                                <button type="button" onclick="changeMonth(-1)" class="text-slate-400 hover:text-slate-700 text-xs"><i class="fas fa-chevron-left"></i></button>
                                <span id="calendar-month-year" class="text-xs font-black text-[#1a3652]">-</span>
                                <button type="button" onclick="changeMonth(1)" class="text-slate-400 hover:text-slate-700 text-xs"><i class="fas fa-chevron-right"></i></button>
                            </div>
                            <div class="grid grid-cols-7 text-center text-[10px] font-bold text-slate-400 uppercase mb-2">
                                <span>Min</span><span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span>
                            </div>
                            <div id="calendar-grid" class="grid grid-cols-7 text-center gap-y-1.5 text-xs font-semibold"></div>
                        </div>

                        <div class="md:col-span-5 space-y-4">
                            <div>
                                <h4 class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1.5">Pilih Jam Sesi</h4>
                                <div id="slots-wrapper" class="grid grid-cols-2 gap-2 max-h-[160px] overflow-y-auto pr-1"></div>
                            </div>
                            <div>
                                <h4 class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1.5">Durasi Belajar</h4>
                                <div class="flex items-center justify-between bg-slate-50 border border-slate-200 p-2 rounded-xl">
                                    <button type="button" onclick="adjustDuration(-1)" class="w-8 h-8 bg-white border border-slate-200 rounded-lg text-slate-600 hover:bg-slate-50 font-bold flex items-center justify-center text-xs"><i class="fas fa-minus"></i></button>
                                    <div class="text-center">
                                        <span id="duration-counter-value" class="text-sm font-black text-[#1a3652]">1</span>
                                        <span class="text-[10px] font-bold text-slate-400 block -mt-0.5">Jam</span>
                                    </div>
                                    <button type="button" onclick="adjustDuration(1)" class="w-8 h-8 bg-white border border-slate-200 rounded-lg text-slate-600 hover:bg-slate-50 font-bold flex items-center justify-center text-xs"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-3 pt-4 border-t border-slate-100">
                        <button type="button" onclick="closeBookingModal()" class="flex-1 py-3 bg-white border border-slate-200 text-slate-500 font-bold text-xs rounded-xl">Batal</button>
                        <button type="button" onclick="goToConfirmationStep()" class="flex-1 py-3 bg-[#1a3652] text-white font-bold text-xs rounded-xl shadow-md">Lanjutkan</button>
                    </div>
                </div> <div id="step-content-confirm" class="space-y-6 hidden">
                    <h3 class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Detail Sesi Pertemuan</h3>
                    <div class="space-y-3.5 text-xs">
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-medium"><i class="far fa-calendar-alt w-5 text-slate-300"></i> Tanggal & Waktu</span>
                            <span class="font-bold text-slate-700" id="summary-datetime">-</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-medium"><i class="far fa-clock w-5 text-slate-300"></i> Durasi Kelas</span>
                            <span class="font-bold text-slate-700" id="summary-duration">1 jam</span>
                        </div>
                        <div class="flex justify-between items-center pt-3 border-t border-slate-100">
                            <span class="text-slate-500 font-bold">Total Biaya</span>
                            <span class="text-lg font-black text-[#1a3652]" id="modal-summary-price">Rp0</span>
                        </div>
                    </div>

                    <div class="bg-amber-50/80 border border-amber-200 p-4 rounded-xl flex items-start gap-2.5 text-[11px] text-amber-800 leading-relaxed">
                        <i class="fas fa-lightbulb mt-0.5 text-amber-500"></i>
                        <p>Link video call akan dikirim otomatis ke email kamu 30 menit sebelum sesi dimulai.</p>
                    </div>

                    <div class="flex gap-3 pt-2">
                        <button type="button" onclick="goToScheduleStep()" class="flex-1 py-3 bg-white border border-slate-200 text-slate-500 font-bold text-xs rounded-xl">Kembali</button>
                        <button type="button" onclick="processPaymentSuccess()" class="flex-1 py-3 bg-[#1a3652] text-white font-bold text-xs rounded-xl shadow-md">Konfirmasi</button>
                    </div>
                </div> <div id="step-content-success" class="space-y-6 hidden text-center py-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-500 border border-emerald-100 flex items-center justify-center text-lg mx-auto shadow-sm animate-bounce">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="space-y-1">
                        <h3 class="text-base font-black text-[#1a3652]">Booking Berhasil!</h3>
                        <p class="text-xs text-slate-400 max-w-xs mx-auto leading-relaxed">
                            Sesimu telah terjadwal pada <span id="success-datetime" class="font-bold text-slate-600">-</span>.
                        </p>
                    </div>

                    <div class="bg-[#f8fafc] border border-slate-100 rounded-xl p-4 text-left space-y-1.5 max-w-sm mx-auto shadow-inner">
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Link Virtual Room:</span>
                        <a id="success-meet-link" href="#" target="_blank" class="text-xs font-semibold text-blue-600 break-all hover:underline flex items-center gap-1.5">
                            <i class="fas fa-video text-slate-400 text-[10px]"></i> <span id="success-meet-text">-</span>
                        </a>
                    </div>

                    <div class="pt-4 max-w-sm mx-auto">
                        <button type="button" onclick="closeBookingModal()" class="w-full py-3.5 bg-[#1a3652] text-white font-bold text-xs rounded-xl hover:bg-[#12273c] transition-all shadow-md">
                            Selesai & Tutup
                        </button>
                    </div>
                </div> </div> </div> </div> <script>
        const overlay = document.getElementById('booking-modal-overlay');
        const modalBox = document.getElementById('modal-box');
        const mainWrapper = document.getElementById('main-content-wrapper');

        const scheduleContent = document.getElementById('step-content-schedule');
        const confirmContent = document.getElementById('step-content-confirm');
        const successContent = document.getElementById('step-content-success');
        
        const badgeSchedule = document.getElementById('step-badge-schedule');
        const badgeConfirm = document.getElementById('step-badge-confirm');
        const badgeSuccess = document.getElementById('step-badge-success');

        let activeYear = 2026, activeMonth = 4; 
        let selectedDateStr = "", selectedTimeStr = "", currentlySelectedTutorName = "";
        let basePrice = 0, durationMultiplier = 1;

        const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        const bookedSchedules = [
            { tutor: "Alicia Tanoto", date: "2026-05-18", start: "09:00", end: "11:00" }, 
            { tutor: "Alicia Tanoto", date: "2026-05-18", start: "14:00", end: "16:00" },
            { tutor: "Andi Firmansyah", date: "2026-05-18", start: "14:00", end: "16:00" },
            { tutor: "Alicia Tanoto", date: "2026-05-19", start: "10:00", end: "11:00" },
            { tutor: "Alicia Tanoto", date: "2026-05-19", start: "15:00", end: "17:00" }
        ];

        const masterTimeSlots = ["07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00"];

        function openBookingModal(tutorName, tutorPrice) {
            currentlySelectedTutorName = tutorName;
            basePrice = parseInt(tutorPrice.replace(/\./g, ''), 10);
            
            document.getElementById('modal-target-name').innerText = tutorName;
            document.getElementById('modal-target-price').innerText = 'Rp' + tutorPrice + '/jam';
            document.getElementById('modal-avatar-placeholder').innerText = tutorName.charAt(0);
            document.body.classList.add('modal-open');

            document.getElementById('circle-1').innerHTML = "1";
            document.getElementById('circle-2').innerHTML = "2";
            document.getElementById('circle-1').className = "step-circle w-4 h-4 rounded-full bg-[#1a3652] text-white flex items-center justify-center text-[9px]";
            document.getElementById('circle-2').className = "step-circle w-4 h-4 rounded-full bg-slate-200 text-white flex items-center justify-center text-[9px]";

            const today = new Date();
            activeYear = today.getFullYear();
            activeMonth = today.getMonth();
            
            selectedDateStr = `${activeYear}-${String(activeMonth+1).padStart(2,'0')}-${String(today.getDate()).padStart(2,'0')}`;
            selectedTimeStr = "";
            durationMultiplier = 1; 

            renderCalendarGrid();
            renderTimeSlots();
            updateDurationUI();
            goToScheduleStep();

            overlay.classList.remove('hidden');
            setTimeout(() => {
                overlay.classList.remove('opacity-0');
                modalBox.classList.remove('scale-95');
                mainWrapper.classList.add('blur-[3px]', 'brightness-50', 'pointer-events-none');
            }, 50);
        }

        function renderCalendarGrid() {
            const grid = document.getElementById('calendar-grid');
            document.getElementById('calendar-month-year').innerText = `${months[activeMonth]} ${activeYear}`;
            grid.innerHTML = '';

            const firstDay = new Date(activeYear, activeMonth, 1).getDay();
            const totalDays = new Date(activeYear, activeMonth + 1, 0).getDate();

            for(let i=0; i<firstDay; i++) grid.appendChild(document.createElement('span'));

            for(let i=1; i<=totalDays; i++) {
                const dayBox = document.createElement('div');
                dayBox.className = "flex flex-col items-center justify-center relative";

                const btn = document.createElement('button');
                btn.type = "button";
                btn.innerText = i;

                const thisDate = new Date(activeYear, activeMonth, i);
                const thisDateStr = `${activeYear}-${String(activeMonth+1).padStart(2,'0')}-${String(i).padStart(2,'0')}`;
                
                const isPast = thisDate < new Date(new Date().setHours(0,0,0,0));
                const isCurrentSelected = thisDateStr === selectedDateStr;
                const hasAnyConflict = bookedSchedules.some(b => b.tutor === currentlySelectedTutorName && b.date === thisDateStr);

                btn.className = "w-8 h-8 rounded-lg flex items-center justify-center transition-all text-[11px] font-bold";
                
                if (isCurrentSelected) {
                    btn.className += " bg-[#1a3652] text-white shadow-sm";
                } else if (isPast) {
                    btn.className += " text-slate-200 cursor-not-allowed";
                    btn.disabled = true;
                } else {
                    btn.className += " text-slate-700 hover:bg-slate-100";
                }

                if(!isPast) {
                    btn.onclick = () => {
                        selectedDateStr = thisDateStr;
                        selectedTimeStr = "";
                        renderCalendarGrid();
                        renderTimeSlots();
                    };
                }

                dayBox.appendChild(btn);

                if (hasAnyConflict && !isPast) {
                    const dot = document.createElement('span');
                    dot.className = `w-1 h-1 rounded-full absolute bottom-0 ${isCurrentSelected ? 'bg-white' : 'bg-red-500'}`;
                    dayBox.appendChild(dot);
                }
                grid.appendChild(dayBox);
            }
        }

        function renderTimeSlots() {
            const wrapper = document.getElementById('slots-wrapper');
            wrapper.innerHTML = '';

            const now = new Date();
            const todayStr = `${now.getFullYear()}-${String(now.getMonth()+1).padStart(2,'0')}-${String(now.getDate()).padStart(2,'0')}`;
            const currentTimeStr = `${String(now.getHours()).padStart(2,'0')}:${String(now.getMinutes()).padStart(2,'0')}`;

            masterTimeSlots.forEach(time => {
                const btn = document.createElement('button');
                btn.type = "button";
                btn.innerText = time; 
                
                const isTimePast = (selectedDateStr === todayStr && time < currentTimeStr);
                const isAlreadyBooked = bookedSchedules.some(b => 
                    b.tutor === currentlySelectedTutorName && b.date === selectedDateStr && time >= b.start && time < b.end
                );

                btn.className = "py-2 px-1 border rounded-lg text-center text-[11px] font-bold transition-all focus:outline-none";

                if (isAlreadyBooked || isTimePast) {
                    btn.className += " bg-slate-100 border-slate-200 text-slate-300 cursor-not-allowed";
                    btn.disabled = true;
                } else if (selectedTimeStr === time) {
                    btn.className += " bg-[#1a3652] text-white border-transparent shadow-sm";
                } else {
                    btn.className += " bg-white border-slate-200 text-slate-600 hover:border-slate-400";
                    btn.onclick = () => {
                        selectedTimeStr = time;
                        renderTimeSlots();
                    };
                }
                wrapper.appendChild(btn);
            });
        }

        function adjustDuration(amount) {
            durationMultiplier += amount;
            if (durationMultiplier < 1) durationMultiplier = 1;
            if (durationMultiplier > 8) durationMultiplier = 8;
            updateDurationUI();
        }

        function updateDurationUI() {
            document.getElementById('duration-counter-value').innerText = durationMultiplier;
        }

        function changeMonth(dir) {
            activeMonth += dir;
            if (activeMonth < 0) { activeMonth = 11; activeYear--; }
            if (activeMonth > 11) { activeMonth = 0; activeYear++; }
            renderCalendarGrid();
            renderTimeSlots();
        }

        function goToScheduleStep() {
            const circle1 = document.getElementById('circle-1');
            circle1.innerHTML = "1";
            circle1.className = "step-circle w-4 h-4 rounded-full bg-[#1a3652] text-white flex items-center justify-center text-[9px]";
            badgeSchedule.className = "flex items-center gap-1.5 text-[#1a3652]";

            scheduleContent.classList.remove('hidden');
            confirmContent.classList.add('hidden');
            successContent.classList.add('hidden');
            
            badgeConfirm.className = "flex items-center gap-1.5 text-slate-400";
            document.getElementById('circle-2').className = "step-circle w-4 h-4 rounded-full bg-slate-200 text-white flex items-center justify-center text-[9px]";
        }

        function goToConfirmationStep() {
            if(!selectedDateStr || !selectedTimeStr) {
                alert("Silakan pilih tanggal dan jam terlebih dahulu pada kalender.");
                return;
            }

            const startParts = selectedTimeStr.split(':');
            const inputStartMin = parseInt(startParts[0], 10) * 60 + parseInt(startParts[1], 10);
            const inputEndMin = inputStartMin + (durationMultiplier * 60);

            const isOverlap = bookedSchedules.some(b => {
                if (b.tutor !== currentlySelectedTutorName || b.date !== selectedDateStr) return false;
                const bStartMin = parseInt(b.start.split(':')[0], 10) * 60 + parseInt(b.start.split(':')[1], 10);
                const bEndMin = parseInt(b.end.split(':')[0], 10) * 60 + parseInt(b.end.split(':')[1], 10);
                
                return inputStartMin < bEndMin && inputEndMin > bStartMin;
            });

            if (isOverlap) {
                alert("Gagal melanjutkan!\n\nRentang waktu mengajar pilihan Anda menabrak jadwal kelas tutor yang sudah terisi oleh pelajar lain pada tanggal ini.");
                return;
            }

            const circle1 = document.getElementById('circle-1');
            circle1.innerHTML = '<i class="fas fa-check"></i>';
            circle1.className = "step-circle w-4 h-4 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[8px]";
            badgeSchedule.className = "flex items-center gap-1.5 text-emerald-600";

            scheduleContent.classList.add('hidden');
            confirmContent.classList.remove('hidden');
            successContent.classList.add('hidden');

            const dateParts = selectedDateStr.split('-');
            formattedDateString = `${parseInt(dateParts[2], 10)} ${months[parseInt(dateParts[1],10)-1]} ${dateParts[0]}`;

            document.getElementById('summary-datetime').innerText = `${formattedDateString} · ${selectedTimeStr} WIB`;
            document.getElementById('summary-duration').innerText = `${durationMultiplier} jam`;
            
            const total = basePrice * durationMultiplier;
            document.getElementById('modal-summary-price').innerText = 'Rp' + total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");

            badgeConfirm.className = "flex items-center gap-1.5 text-[#1a3652]";
            document.getElementById('circle-2').className = "step-circle w-4 h-4 rounded-full bg-[#1a3652] text-white flex items-center justify-center text-[9px]";
        }

        function processPaymentSuccess() {
            const circle2 = document.getElementById('circle-2');
            circle2.innerHTML = '<i class="fas fa-check"></i>';
            circle2.className = "step-circle w-4 h-4 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[8px]";
            badgeConfirm.className = "flex items-center gap-1.5 text-emerald-600";

            scheduleContent.classList.add('hidden');
            confirmContent.classList.add('hidden');
            successContent.classList.remove('hidden');
            
            document.getElementById('success-datetime').innerText = `${formattedDateString} pukul ${selectedTimeStr} WIB (${durationMultiplier} jam)`;
            
            const uniqueRoomId = currentlySelectedTutorName.replace(/\s+/g, '') + "-" + Math.floor(100000 + Math.random() * 900000);
            const meetUrl = `https://meet.jit.si/ajarin-${uniqueRoomId}`;
            
            document.getElementById('success-meet-link').href = meetUrl;
            document.getElementById('success-meet-text').innerText = meetUrl;

            badgeSuccess.className = "flex items-center gap-1.5 text-[#1a3652]";
            document.getElementById('circle-3').className = "step-circle w-4 h-4 rounded-full bg-[#1a3652] text-white flex items-center justify-center text-[9px]";
        }

        function closeBookingModal() {
            overlay.classList.add('opacity-0');
            modalBox.classList.add('scale-95');
            document.body.classList.remove('modal-open');
            setTimeout(() => overlay.classList.add('hidden'), 300);
            mainWrapper.classList.remove('blur-[3px]', 'brightness-50', 'pointer-events-none');
        }

        overlay.addEventListener('click', function(e) { if(e.target === overlay) closeBookingModal(); });
    </script>
</body>
</html>