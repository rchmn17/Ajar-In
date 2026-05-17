<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Tutor Terbaik - AjarIn</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .modal-open { overflow: hidden; }
        .step-circle { transition: all 0.3s ease; }
    </style>
</head>
<body class="bg-[#f8fafc] font-sans antialiased text-slate-800 min-h-screen relative">

    <div id="main-content-wrapper" class="transition-all duration-300">
        
        <x-navbar></x-navbar>

        <section class="bg-[#1a3652] pt-12 pb-16 px-8">
            <div class="max-w-6xl mx-auto">
                <h1 class="text-4xl font-bold text-white mb-8">Temukan Pengajar Terbaikmu</h1>
                <form action="{{ route('student.search') }}" method="GET" class="flex items-center gap-4 mb-8">
                    <div class="relative flex-1">
                        <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari skill spesifik... (cth: Laravel Middleware)" 
                            class="w-full pl-12 pr-4 py-4 rounded-xl bg-white border-none focus:ring-4 focus:ring-white/20 outline-none text-sm shadow-xl">
                    </div>
                    <button type="submit" class="bg-[#e2d1b9] text-[#1a3652] px-6 py-4 rounded-xl font-bold text-sm shadow-lg hover:bg-[#d4c1a8] transition-all whitespace-nowrap">
                        Cari Tutor
                    </button>
                </form>
            </div>
        </section>

        <main class="max-w-7xl mx-auto px-8 mt-12">
            <p class="text-slate-400 text-xs font-bold mb-8 uppercase tracking-widest">
                Menampilkan <span class="text-slate-800">{{ isset($courses) ? $courses->count() : 0 }}</span> Kursus Pilihan
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                @if(isset($courses))
                    @forelse($courses as $course)
                    <div class="bg-white rounded-[2rem] border border-slate-100 shadow-sm overflow-hidden flex flex-col group hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="bg-[#1a3652] h-24 p-6 relative">
                            <span class="absolute right-6 top-6 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full text-[10px] font-bold text-white uppercase tracking-widest border border-white/10">
                                KURSUS ID: {{ $course->course_id }}
                            </span>
                        </div>
                        
                        <div class="px-8 -mt-10 relative z-10 flex items-end justify-between">
                            <div class="w-20 h-20 rounded-2xl border-4 border-white font-black text-lg flex items-center justify-center shadow-sm bg-emerald-100 text-emerald-800">
                                {{ strtoupper(substr($course->user->name ?? 'U', 0, 2)) }}
                            </div>
                        </div>

                        <div class="p-8 pt-4 flex-grow flex flex-col justify-between">
                            <div>
                                <p class="text-xs font-bold text-emerald-600 uppercase tracking-wider mb-1">
                                    <i class="fas fa-user-tie mr-1"></i> {{ $course->user->name ?? 'Tutor Tidak Ditemukan' }}
                                </p>
                                <h3 class="text-lg font-bold text-[#1a3652] mb-1 line-clamp-1">{{ $course->name }}</h3>
                                <p class="text-xs font-medium text-slate-400 mb-4 line-clamp-2">{{ $course->description }}</p>
                            </div>

                            <div class="flex items-center justify-between border-t border-slate-50 pt-4 mt-4">
                                <div>
                                    <p class="text-[10px] font-bold text-slate-300 uppercase">Biaya / Jam</p>
                                    <p class="text-base font-black text-[#1a3652]">Rp{{ number_format($course->price, 0, ',', '.') }}</p>
                                </div>
                                
                                <button onclick="openBookingModal('{{ addslashes($course->name) }}', '{{ addslashes($course->user->name ?? 'Tutor') }}', {{ $course->price ?? 0 }}, {{ $course->course_id }})" 
                                        class="px-4 py-2 bg-[#1a3652] text-white rounded-xl text-xs font-bold hover:bg-[#132a41] transition-all shadow-md">
                                    Ikuti Kursus
                                </button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-12 bg-white rounded-3xl border border-dashed border-slate-200">
                        <i class="fas fa-folder-open text-slate-300 text-4xl mb-3"></i>
                        <p class="text-sm font-medium text-slate-500">Maaf, kursus atau skill yang Anda cari belum tersedia.</p>
                    </div>
                    @endforelse
                @endif
            </div>
        </main>
    </div>

    <div id="booking-modal-overlay" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-sm hidden opacity-0 transition-all duration-300">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden flex flex-col transform scale-95 transition-all duration-300" id="modal-box">
            
            <div class="bg-[#1a3652] text-white px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center text-sm font-bold text-white" id="modal-avatar-placeholder"><i class="fas fa-graduation-cap text-xs"></i></div>
                    <div>
                        <h2 class="text-sm font-bold tracking-tight" id="modal-target-name">Nama Kursus</h2>
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
                            <div class="text-center text-xs font-bold text-[#1a3652] mb-2" id="calendar-month-year">Bulan Tahun</div>
                            <div id="calendar-grid" class="text-center text-xs text-slate-500 py-4 bg-white rounded border">
                                Tanggal otomatis diset Hari Ini.
                            </div>
                        </div>

                        <div class="md:col-span-5 space-y-4">
                            <div>
                                <h4 class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1.5">Pilih Jam Sesi</h4>
                                <div id="slots-wrapper" class="grid grid-cols-2 gap-2">
                                    <button onclick="selectTime('09:00', this)" class="time-btn py-2 border rounded-lg text-xs font-bold hover:bg-slate-50 text-slate-600 transition">09:00</button>
                                    <button onclick="selectTime('13:00', this)" class="time-btn py-2 border rounded-lg text-xs font-bold hover:bg-slate-50 text-slate-600 transition">13:00</button>
                                    <button onclick="selectTime('19:00', this)" class="time-btn py-2 border rounded-lg text-xs font-bold hover:bg-slate-50 text-slate-600 transition">19:00</button>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-[10px] font-bold text-slate-400 uppercase tracking-wide mb-1.5">Durasi Belajar</h4>
                                <div class="flex items-center justify-between bg-slate-50 border border-slate-200 p-2 rounded-xl">
                                    <button type="button" onclick="adjustDuration(-1)" class="w-8 h-8 bg-white border rounded-lg text-slate-600 hover:bg-slate-50 font-bold"><i class="fas fa-minus"></i></button>
                                    <div class="text-center">
                                        <span id="duration-counter-value" class="text-sm font-black text-[#1a3652]">1</span>
                                        <span class="text-[10px] font-bold text-slate-400 block -mt-0.5">Jam</span>
                                    </div>
                                    <button type="button" onclick="adjustDuration(1)" class="w-8 h-8 bg-white border rounded-lg text-slate-600 hover:bg-slate-50 font-bold"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-3 pt-4 border-t border-slate-100">
                        <button type="button" onclick="closeBookingModal()" class="flex-1 py-3 bg-white border border-slate-200 text-slate-500 font-bold text-xs rounded-xl">Batal</button>
                        <button type="button" onclick="goToConfirmationStep()" class="flex-1 py-3 bg-[#1a3652] text-white font-bold text-xs rounded-xl shadow-md">Lanjutkan</button>
                    </div>
                </div> 

                <div id="step-content-confirm" class="space-y-6 hidden">
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

                    <div class="flex gap-3 pt-2">
                        <button type="button" onclick="goToScheduleStep()" class="flex-1 py-3 bg-white border border-slate-200 text-slate-500 font-bold text-xs rounded-xl">Kembali</button>
                        <button type="button" id="btn-submit-booking" onclick="submitBookingToDatabase()" class="flex-1 py-3 bg-[#1a3652] text-white font-bold text-xs rounded-xl shadow-md">Konfirmasi & Simpan</button>
                    </div>
                </div> 

                <div id="step-content-success" class="space-y-6 hidden text-center py-4">
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
                </div> 
            </div> 
        </div> 
    </div> 

    <x-footer></x-footer>

    <script>
        const overlay = document.getElementById('booking-modal-overlay');
        const modalBox = document.getElementById('modal-box');
        const mainWrapper = document.getElementById('main-content-wrapper');
        const scheduleContent = document.getElementById('step-content-schedule');
        const confirmContent = document.getElementById('step-content-confirm');
        const successContent = document.getElementById('step-content-success');
        const badgeConfirm = document.getElementById('step-badge-confirm');
        const badgeSuccess = document.getElementById('step-badge-success');

        let currentlySelectedTutorName = "";
        let selectedCourseId = null;
        let basePrice = 0;
        let selectedDateStr = "";
        let selectedTimeStr = "";
        let durationMultiplier = 1;

        function openBookingModal(courseName, tutorName, coursePrice, courseId) {
            currentlySelectedTutorName = tutorName;
            selectedCourseId = courseId; 
            basePrice = parseInt(coursePrice, 10);
            
            document.getElementById('modal-target-name').innerHTML = `${courseName} <span class="block text-[11px] text-slate-300 font-normal">Tutor: ${tutorName}</span>`;
            document.getElementById('modal-target-price').innerText = 'Rp' + basePrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + '/jam';
            
            const today = new Date();
            selectedDateStr = `${today.getFullYear()}-${String(today.getMonth()+1).padStart(2,'0')}-${String(today.getDate()).padStart(2,'0')}`;
            document.getElementById('calendar-month-year').innerText = today.toLocaleDateString('id-ID', { month: 'long', year: 'numeric' });
            
            selectedTimeStr = "";
            durationMultiplier = 1;
            document.querySelectorAll('.time-btn').forEach(btn => btn.classList.remove('bg-[#1a3652]', 'text-white'));
            updateDurationUI();
            goToScheduleStep();

            document.body.classList.add('modal-open');
            overlay.classList.remove('hidden');
            setTimeout(() => {
                overlay.classList.remove('opacity-0');
                modalBox.classList.remove('scale-95');
                mainWrapper.classList.add('blur-[3px]', 'brightness-50', 'pointer-events-none');
            }, 50);
        }

        function selectTime(time, btnElement) {
            selectedTimeStr = time;
            document.querySelectorAll('.time-btn').forEach(btn => btn.classList.remove('bg-[#1a3652]', 'text-white'));
            btnElement.classList.add('bg-[#1a3652]', 'text-white');
        }

        function adjustDuration(dir) {
            durationMultiplier += dir;
            if(durationMultiplier < 1) durationMultiplier = 1;
            if(durationMultiplier > 8) durationMultiplier = 8;
            updateDurationUI();
        }

        function updateDurationUI() {
            document.getElementById('duration-counter-value').innerText = durationMultiplier;
        }

        function goToScheduleStep() {
            scheduleContent.classList.remove('hidden');
            confirmContent.classList.add('hidden');
            successContent.classList.add('hidden');
            document.getElementById('circle-1').className = "step-circle w-4 h-4 rounded-full bg-[#1a3652] text-white flex items-center justify-center text-[9px]";
            document.getElementById('circle-2').className = "step-circle w-4 h-4 rounded-full bg-slate-200 text-white flex items-center justify-center text-[9px]";
        }

        function goToConfirmationStep() {
            if(!selectedTimeStr) {
                alert("Mohon pilih Jam Sesi terlebih dahulu!");
                return;
            }

            scheduleContent.classList.add('hidden');
            confirmContent.classList.remove('hidden');
            document.getElementById('circle-2').className = "step-circle w-4 h-4 rounded-full bg-[#1a3652] text-white flex items-center justify-center text-[9px]";
            
            document.getElementById('summary-datetime').innerText = `${selectedDateStr} | ${selectedTimeStr} WIB`;
            document.getElementById('summary-duration').innerText = `${durationMultiplier} Jam`;
            
            const total = basePrice * durationMultiplier;
            document.getElementById('modal-summary-price').innerText = 'Rp' + total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function submitBookingToDatabase() {
            const btnSubmit = document.getElementById('btn-submit-booking');
            const fullDateTime = `${selectedDateStr} ${selectedTimeStr}`;

            btnSubmit.disabled = true;
            btnSubmit.innerText = "Memproses...";
            btnSubmit.className = "flex-1 py-3 bg-slate-400 text-white font-bold text-xs rounded-xl cursor-not-allowed";

            let tokenElement = document.querySelector('meta[name="csrf-token"]');
            let csrfToken = tokenElement ? tokenElement.getAttribute('content') : '';

            const payload = {
                course_id: selectedCourseId,
                date_time: fullDateTime,
                duration: durationMultiplier
            };

            fetch('/api/booking/store', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                },
                body: JSON.stringify(payload)
            })
            .then(response => response.json())
            .then(result => {
                if(result.success || result.message) { 
                    processPaymentSuccess();
                } else {
                    alert("Gagal Booking: " + (result.message || 'Error tidak diketahui'));
                    resetSubmitButton();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert("Terjadi gangguan jaringan atau rute backend bermasalah.");
                resetSubmitButton();
            });
        }

        function processPaymentSuccess() {
            const circle2 = document.getElementById('circle-2');
            circle2.innerHTML = '<i class="fas fa-check"></i>';
            circle2.className = "step-circle w-4 h-4 rounded-full bg-emerald-500 text-white flex items-center justify-center text-[8px]";
            badgeConfirm.className = "flex items-center gap-1.5 text-emerald-600";

            scheduleContent.classList.add('hidden');
            confirmContent.classList.add('hidden');
            successContent.classList.remove('hidden');
            
            document.getElementById('success-datetime').innerText = `${selectedDateStr} pukul ${selectedTimeStr} WIB (${durationMultiplier} jam)`;
            
            const uniqueRoomId = currentlySelectedTutorName.replace(/[^a-zA-Z0-9]/g, '') + "-" + Math.floor(100000 + Math.random() * 900000);
            const meetUrl = `https://meet.jit.si/ajarin-${uniqueRoomId}`;
            
            document.getElementById('success-meet-link').href = meetUrl;
            document.getElementById('success-meet-text').innerText = meetUrl;

            badgeSuccess.className = "flex items-center gap-1.5 text-[#1a3652]";
            document.getElementById('circle-3').className = "step-circle w-4 h-4 rounded-full bg-[#1a3652] text-white flex items-center justify-center text-[9px]";
        }

        function resetSubmitButton() {
            const btnSubmit = document.getElementById('btn-submit-booking');
            btnSubmit.disabled = false;
            btnSubmit.innerText = "Konfirmasi & Simpan";
            btnSubmit.className = "flex-1 py-3 bg-[#1a3652] text-white font-bold text-xs rounded-xl shadow-md";
        }

        function closeBookingModal() {
            overlay.classList.add('opacity-0');
            modalBox.classList.add('scale-95');
            document.body.classList.remove('modal-open');
            setTimeout(() => overlay.classList.add('hidden'), 300);
            mainWrapper.classList.remove('blur-[3px]', 'brightness-50', 'pointer-events-none');
            resetSubmitButton();
        }

        overlay.addEventListener('click', function(e) { if(e.target === overlay) closeBookingModal(); });
    </script>
</body>
</html>