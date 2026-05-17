<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengajar - Kalender Ketersediaan - AjarIn</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc] font-sans antialiased text-slate-800">

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
                                <button class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-slate-50">
                                    <i class="fas fa-chevron-left text-xs"></i>
                                </button>
                                <h3 class="font-extrabold text-sm text-[#1a3652]">Mei 2026</h3>
                                <button class="w-8 h-8 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-slate-50">
                                    <i class="fas fa-chevron-right text-xs"></i>
                                </button>
                            </div>

                            <div class="grid grid-cols-7 gap-y-4 text-center mb-4">
                                @foreach(['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'] as $dayName)
                                    <span class="text-xs font-bold text-slate-400">{{ $dayName }}</span>
                                @endforeach
                            </div>

                            <div class="grid grid-cols-7 gap-y-3 text-center">
                                <span></span><span></span><span></span><span></span><span></span>
                                
                                @for($i = 1; $i <= 31; $i++)
                                    @php
                                        // Simulasi logic style tanggal berdasarkan gambar
                                        $isToday = ($i == 18);
                                        $hasDot = ($i >= 17 && $i <= 30);
                                    @endphp
                                    <div class="flex flex-col items-center justify-center relative py-1.5">
                                        <button class="w-10 h-10 rounded-xl text-xs font-bold flex items-center justify-center transition-all
                                            {{ $isToday ? 'bg-[#1a3652] text-white shadow-md shadow-[#1a3652]/20 scale-105' : 'text-slate-700 hover:bg-slate-50' }}
                                            {{ $i < 17 ? 'text-slate-300 pointer-events-none' : '' }}">
                                            {{ $i }}
                                        </button>
                                        @if($hasDot)
                                            <span class="w-1 h-1 rounded-full mt-1 {{ $isToday ? 'bg-white' : 'bg-slate-400' }}"></span>
                                        @endif
                                    </div>
                                @endfor
                            </div>

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
                                    <h3 class="font-extrabold text-[#1a3652] text-base mb-1">Senin, 18 Mei 2026</h3>
                                    <p class="text-xs text-slate-400 font-medium">7 slot dipilih</p>
                                </div>

                                <div class="flex gap-2 mb-6">
                                    <button class="px-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-[10px] font-bold text-slate-500 hover:bg-slate-100 transition-colors">Pilih Semua</button>
                                    <button class="px-4 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-[10px] font-bold text-slate-500 hover:bg-slate-100 transition-colors">Hapus Semua</button>
                                </div>

                                <div class="grid grid-cols-3 gap-2.5">
                                    @php
                                        $slots = [
                                            ['time' => '07:00', 'selected' => false],
                                            ['time' => '08:00', 'selected' => true],
                                            ['time' => '09:00', 'selected' => true],
                                            ['time' => '10:00', 'selected' => true],
                                            ['time' => '11:00', 'selected' => true],
                                            ['time' => '12:00', 'selected' => false],
                                            ['time' => '13:00', 'selected' => false],
                                            ['time' => '14:00', 'selected' => false],
                                            ['time' => '15:00', 'selected' => false],
                                            ['time' => '16:00', 'selected' => false],
                                            ['time' => '17:00', 'selected' => false],
                                            ['time' => '18:00', 'selected' => true],
                                            ['time' => '19:00', 'selected' => true],
                                            ['time' => '20:00', 'selected' => true],
                                            ['time' => '21:00', 'selected' => false],
                                        ];
                                    @endphp

                                    @foreach($slots as $slot)
                                        <button class="py-3 border rounded-xl text-xs font-bold transition-all
                                            {{ $slot['selected'] 
                                                ? 'bg-[#1a3652] text-white border-transparent shadow-sm' 
                                                : 'bg-white border-slate-100 text-slate-600 hover:border-slate-300' }}">
                                            {{ $slot['time'] }}
                                        </button>
                                    @endforeach
                                </div>
                            </div>

                            <div class="space-y-3 mt-8">
                                <button class="w-full py-3.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold shadow-lg shadow-[#1a3652]/10 hover:bg-[#12273c] transition-all flex items-center justify-center gap-2">
                                    <i class="far fa-save"></i> Simpan untuk Senin ini
                                </button>
                                <button class="w-full py-3.5 bg-white border border-slate-200 text-slate-500 rounded-xl text-xs font-bold hover:bg-slate-50 transition-all">
                                    Terapkan ke semua Senin di bulan ini
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#1a3652] text-white pt-20 pb-10 px-8 mt-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-20">
                <div class="space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="bg-white/20 p-2 rounded-lg">
                            <i class="fas fa-book-open text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold tracking-tight">AjarIn</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">Platform micro-learning yang menghubungkan pelajar dengan pengajar ahli secara spesifik.</p>
                    <div class="flex items-center gap-3">
                        @foreach(['twitter', 'instagram', 'linkedin-in', 'facebook-f'] as $icon)
                            <a href="#" class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center text-slate-400 hover:bg-white/10 hover:text-white transition-all">
                                <i class="fab fa-{{ $icon }} text-xs"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
                @foreach([
                    'Platform' => ['Cari Tutor', 'Dashboard Pelajar', 'Dashboard Tutor', 'Monitoring Board'],
                    'Kategori' => ['Teknologi', 'Akademis', 'Professional', 'Bahasa'],
                    'Perusahaan' => ['Tentang Kami', 'Karir', 'Blog', 'Kontak']
                ] as $title => $links)
                <div>
                    <h5 class="font-bold mb-6 text-sm tracking-wide text-white/50">{{ $title }}</h5>
                    <ul class="space-y-4 text-slate-400 text-sm font-medium">
                        @foreach($links as $link)
                            <li><a href="#" class="hover:text-white transition-colors">{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="flex flex-col md:flex-row items-center justify-between pt-10 border-t border-white/10 text-[10px] font-bold uppercase tracking-widest text-slate-500">
                <p>© 2026 AjarIn. Semua hak dilindungi.</p>
                <div class="flex items-center gap-8 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-white transition-colors">Privasi</a>
                    <a href="#" class="hover:text-white transition-colors">Cookie</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>