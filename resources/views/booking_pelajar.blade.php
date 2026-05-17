<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Tutor Terbaik - AjarIn</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                    <button class="bg-white border border-slate-200 text-[#1a3652] px-6 py-4 rounded-xl font-bold text-sm flex items-center gap-2 transition-all whitespace-nowrap shadow-md">
                        <i class="fas fa-sliders-h"></i> Filter
                    </button>
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

        <section class="max-w-7xl mx-auto px-8 my-6">
            <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-sm grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="space-y-3">
                    <label class="text-xs font-bold text-slate-700 block">Harga (Rp500.000/jam max)</label>
                    <div class="pt-2">
                        <input type="range" min="50000" max="500000" value="500000" class="w-full h-1.5 bg-slate-100 rounded-lg appearance-none cursor-pointer accent-[#1a3652]">
                        <div class="flex justify-between text-[10px] font-bold text-slate-400 mt-1">
                            <span>Rp50rb</span><span>Rp500rb</span>
                        </div>
                    </div>
                </div>
                <div class="space-y-3">
                    <label class="text-xs font-bold text-slate-700 block">Rating Minimum</label>
                    <div class="flex bg-slate-50 p-1 rounded-xl border border-slate-100 gap-1">
                        <button class="flex-1 py-1.5 text-center rounded-lg text-[11px] font-black bg-[#1a3652] text-white shadow-sm">Semua</button>
                        <button class="flex-1 py-1.5 text-center rounded-lg text-[11px] font-bold text-slate-500 hover:bg-white transition-colors">4.5+</button>
                        <button class="flex-1 py-1.5 text-center rounded-lg text-[11px] font-bold text-slate-500 hover:bg-white transition-colors">4.8+</button>
                    </div>
                </div>
                <div class="space-y-3">
                    <label class="text-xs font-bold text-slate-700 block">Ketersediaan</label>
                    <label class="flex items-center gap-3 px-4 py-2.5 bg-slate-50 rounded-xl border border-slate-100 cursor-pointer hover:bg-slate-100/50 transition-colors">
                        <input type="checkbox" class="w-4 h-4 rounded border-slate-300 text-[#1a3652] focus:ring-[#1a3652]/20">
                        <span class="text-xs font-bold text-slate-600">Tersedia Sekarang</span>
                    </label>
                </div>
                <div class="space-y-3">
                    <label class="text-xs font-bold text-slate-700 block">Urutkan</label>
                    <div class="relative">
                        <select class="w-full px-4 py-3 bg-slate-50 border border-slate-100 rounded-xl text-xs font-bold text-slate-600 appearance-none focus:outline-none">
                            <option>Paling Relevan</option>
                            <option>Harga Rendah - Tinggi</option>
                            <option>Rating Tertinggi</option>
                        </select>
                        <span class="absolute inset-y-0 right-4 flex items-center text-slate-400 text-[10px] pointer-events-none"><i class="fas fa-chevron-down"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <main class="max-w-7xl mx-auto px-8 mt-8">
            <div class="flex flex-wrap gap-2 mb-6 border-b border-slate-200 pb-6">
                @foreach(['Laravel', 'React', 'Python', 'Machine Learning', 'UI/UX Design', 'IELTS', 'Matematika'] as $tag)
                    <button class="px-4 py-1.5 bg-white border border-slate-200 rounded-full text-[11px] font-bold text-slate-500 hover:border-[#1a3652] hover:text-[#1a3652] transition-all shadow-sm">
                        {{ $tag }}
                    </button>
                @endforeach
            </div>

            <p class="text-slate-400 text-xs font-bold mb-8 uppercase tracking-widest">Menampilkan <span class="text-slate-800">6</span> pengajar pilihan</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                @php
                    $tutors = [
                        ['name' => 'Alicia Tanoto', 'title' => 'English & IELTS Specialist', 'cat' => 'Bahasa', 'rating' => '5.0', 'reviews' => '88', 'price' => '120.000', 'tags' => ['Business English', 'IELTS Prep'], 'status' => 'online', 'profile_bg' => 'bg-emerald-100 text-emerald-800'],
                        ['name' => 'Andi Firmansyah', 'title' => 'Senior Full-Stack Developer', 'cat' => 'Teknologi', 'rating' => '4.9', 'reviews' => '128', 'price' => '150.000', 'tags' => ['Laravel Middleware', 'React Hooks'], 'status' => 'online', 'profile_bg' => 'bg-teal-100 text-teal-800'],
                        ['name' => 'Priya Ratnasari', 'title' => 'Business Analyst & PM', 'cat' => 'Professional', 'rating' => '4.9', 'reviews' => '112', 'price' => '200.000', 'tags' => ['Product Strategy', 'Agile/Scrum'], 'status' => 'online', 'profile_bg' => 'bg-yellow-100 text-yellow-800'],
                        ['name' => 'Sari Dewi Putri', 'title' => 'Data Scientist & ML Engineer', 'cat' => 'Teknologi', 'rating' => '4.8', 'reviews' => '95', 'price' => '175.000', 'tags' => ['Python Pandas', 'Machine Learning'], 'status' => 'online', 'profile_bg' => 'bg-red-500 text-white'],
                        ['name' => 'Budi Santoso', 'title' => 'Matematika & Fisika SMA', 'cat' => 'Akademis', 'rating' => '4.8', 'reviews' => '204', 'price' => '85.000', 'tags' => ['Kalkulus', 'Aljabar Linear'], 'status' => 'online', 'profile_bg' => 'bg-orange-100 text-orange-800'],
                        ['name' => 'Reza Mahendra', 'title' => 'UI/UX Designer', 'cat' => 'Professional', 'rating' => '4.7', 'reviews' => '73', 'price' => '125.000', 'tags' => ['Figma Advanced', 'Tailwind CSS'], 'status' => 'full', 'profile_bg' => 'bg-blue-600 text-white']
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
                        <div class="relative">
                            <div class="w-20 h-20 rounded-2xl border-4 border-white font-black text-lg flex items-center justify-center shadow-sm {{ $tutor['profile_bg'] }}">
                                @php
                                    $initials = implode('', array_map(fn($n) => $n[0], explode(' ', $tutor['name'])));
                                @endphp
                                {{ $initials }}
                            </div>
                            <div class="absolute -bottom-1 -right-1 w-5 h-5 {{ $tutor['status'] == 'online' ? 'bg-emerald-500' : 'bg-slate-300' }} border-4 border-white rounded-full"></div>
                        </div>
                    </div>

                    <div class="p-8 pt-4 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-[#1a3652] mb-1">{{ $tutor['name'] }}</h3>
                            <p class="text-xs font-medium text-slate-400 mb-4">{{ $tutor['title'] }}</p>
                            
                            <div class="flex items-center gap-4 text-xs font-bold mb-4">
                                <span class="text-yellow-500"><i class="fas fa-star"></i> {{ $tutor['rating'] }} <span class="text-slate-300">({{ $tutor['reviews'] }})</span></span>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-6">
                                @foreach($tutor['tags'] as $tag)
                                    <span class="px-2.5 py-1 bg-slate-50 border border-slate-100 text-[10px] font-bold text-slate-500 rounded-lg">{{ $tag }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="flex items-center justify-between border-t border-slate-50 pt-4 mt-4">
                            <div>
                                <p class="text-[10px] font-bold text-slate-300 uppercase">Harga/jam</p>
                                <p class="text-base font-black text-[#1a3652]">Rp{{ $tutor['price'] }}</p>
                            </div>
                            
                            <div class="flex gap-2">
                                <button class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-600 hover:bg-slate-50 transition-colors">Profil</button>
                                @if($tutor['status'] == 'full')
                                    <button class="px-4 py-2 bg-slate-100 text-slate-400 rounded-xl text-xs font-bold flex items-center gap-1.5 cursor-not-allowed border border-slate-200">
                                        <i class="fas fa-video-slash"></i> Penuh
                                    </button>
                                @else
                                    <button onclick="openBookingModal('{{ $tutor['name'] }}', '{{ $tutor['price'] }}')" 
                                            class="px-4 py-2 bg-[#1a3652] text-white rounded-xl text-xs font-bold hover:bg-[#132a41] transition-all shadow-md">
                                        Booking
                                    </button>
                                @endif
                            </div>
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


    <div id="booking-modal-overlay" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/50 backdrop-blur-[2px] hidden opacity-0 transition-all duration-300">
        
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
                <div class="flex items-center gap-1 text-slate-400/60"><i class="fas fa-check-circle"></i> Jadwal</div>
                <span class="text-slate-200">/</span>
                <div id="step-badge-confirm" class="flex items-center gap-1.5 text-[#1a3652]">
                    <span class="w-4 h-4 rounded-full bg-[#1a3652] text-white flex items-center justify-center text-[9px]">2</span> Konfirmasi
                </div>
                <span class="text-slate-200">/</span>
                <div id="step-badge-success" class="flex items-center gap-1.5">
                    <span class="w-4 h-4 rounded-full bg-slate-200 flex items-center justify-center text-[9px]">3</span> Selesai
                </div>
            </div>

            <div class="p-6">
                
                <div id="step-content-confirm" class="space-y-6">
                    <h3 class="text-xs font-extrabold text-slate-400 uppercase tracking-wider">Detail Sesi Pertemuan</h3>
                    
                    <div class="space-y-3.5 text-xs">
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-medium"><i class="far fa-calendar-alt w-5 text-slate-300"></i> Tanggal & Waktu</span>
                            <span class="font-bold text-slate-700">15 April · 10:00 WIB</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-medium"><i class="far fa-clock w-5 text-slate-300"></i> Durasi Kelas</span>
                            <span class="font-bold text-slate-700">1 jam</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-slate-400 font-medium"><i class="fas fa-desktop w-5 text-slate-300"></i> Platform</span>
                            <span class="font-bold text-[#1a3652]">Jitsi Meet (Auto)</span>
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
                        <button type="button" onclick="closeBookingModal()" class="flex-1 py-3 bg-white border border-slate-200 text-slate-500 font-bold text-xs rounded-xl hover:bg-slate-50 transition-colors">Kembali</button>
                        <button type="button" onclick="processPaymentSuccess()" class="flex-1 py-3 bg-[#1a3652] text-white font-bold text-xs rounded-xl hover:bg-[#12273c] transition-all shadow-md">Konfirmasi</button>
                    </div>
                </div>

                <div id="step-content-success" class="space-y-6 hidden text-center py-4">
                    <div class="w-12 h-12 rounded-full bg-emerald-50 text-emerald-500 border border-emerald-100 flex items-center justify-center text-lg mx-auto shadow-sm">
                        <i class="fas fa-check"></i>
                    </div>

                    <div class="space-y-1">
                        <h3 class="text-base font-black text-[#1a3652]">Booking Berhasil!</h3>
                        <p class="text-xs text-slate-400 max-w-xs mx-auto leading-relaxed">Sesimu telah terjadwal pada 15 April pukul 10:00 WIB.</p>
                    </div>

                    <div class="bg-[#f8fafc] border border-slate-100 rounded-xl p-4 text-left space-y-1.5 max-w-sm mx-auto shadow-inner">
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block">Link Video Call:</span>
                        <a href="https://meet.jit.si/ajarin-session-1778976193468" target="_blank" class="text-xs font-semibold text-blue-600 break-all hover:underline block">
                            https://meet.jit.si/ajarin-session-1778976193468
                        </a>
                    </div>

                    <div class="pt-4 max-w-sm mx-auto">
                        <button type="button" onclick="closeBookingModal()" class="w-full py-3.5 bg-[#1a3652] text-white font-bold text-xs rounded-xl hover:bg-[#12273c] transition-all shadow-md">
                            Lihat Dashboard
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        const overlay = document.getElementById('booking-modal-overlay');
        const modalBox = document.getElementById('modal-box');
        const mainWrapper = document.getElementById('main-content-wrapper');

        const confirmContent = document.getElementById('step-content-confirm');
        const successContent = document.getElementById('step-content-success');
        
        const badgeConfirm = document.getElementById('step-badge-confirm');
        const badgeSuccess = document.getElementById('step-badge-success');

        // Fungsi Membuka Modal Booking & Manipulasi Konten secara Dinamis
        function openBookingModal(tutorName, tutorPrice) {
            document.getElementById('modal-target-name').innerText = tutorName;
            document.getElementById('modal-target-price').innerText = 'Rp' + tutorPrice + '/jam';
            document.getElementById('modal-summary-price').innerText = 'Rp' + tutorPrice;
            document.getElementById('modal-avatar-placeholder').innerText = tutorName.charAt(0);

            // Selalu kembalikan modal ke Step 2 (Konfirmasi) tiap kali dibuka
            confirmContent.classList.remove('hidden');
            successContent.classList.add('hidden');
            badgeConfirm.className = "flex items-center gap-1.5 text-[#1a3652]";
            badgeSuccess.className = "flex items-center gap-1.5 text-slate-400";
            badgeSuccess.querySelector('span').className = "w-4 h-4 rounded-full bg-slate-200 flex items-center justify-center text-[9px]";

            // Tampilkan layer overlay dengan transisi opacity dan scale up
            overlay.classList.remove('hidden');
            setTimeout(() => {
                overlay.classList.remove('opacity-0');
                modalBox.classList.remove('scale-95');
                // Beri efek blur dan redup pada elemen halaman utama di latar belakang
                mainWrapper.classList.add('blur-[2px]', 'brightness-70', 'pointer-events-none', 'select-none');
            }, 50);
        }

        // Fungsi Menutup Modal & Normalisasi Tampilan Background
        function closeBookingModal() {
            overlay.classList.add('opacity-0');
            modalBox.classList.add('scale-95');
            mainWrapper.classList.remove('blur-[2px]', 'brightness-70', 'pointer-events-none', 'select-none');
            
            setTimeout(() => {
                overlay.classList.add('hidden');
            }, 300);
        }

        // Fungsi Memindahkan Alur ke Step 3 (Selesai/Berhasil)
        function processPaymentSuccess() {
            confirmContent.classList.add('hidden');
            successContent.classList.remove('hidden');

            // Perbarui visual stepper penunjuk posisi progress di bagian atas modal
            badgeConfirm.className = "flex items-center gap-1.5 text-slate-400";
            badgeSuccess.className = "flex items-center gap-1.5 text-[#1a3652]";
            badgeSuccess.querySelector('span').className = "w-4 h-4 rounded-full bg-[#1a3652] text-white flex items-center justify-center text-[9px]";
        }

        // Menutup modal otomatis apabila area abu-abu (luar box modal) diklik oleh pengguna
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                closeBookingModal();
            }
        });
    </script>
</body>
</html>