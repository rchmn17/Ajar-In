<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengajar - AjarIn</title>
    <!-- Vite Integration -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc] font-sans antialiased text-slate-800">

    <!-- NAVBAR -->
    <x-navbar></x-navbar>

    <main class="max-w-7xl mx-auto px-8 py-10">
        <!-- HEADER -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
            <div>
                <p class="text-slate-500 text-sm font-medium mb-1">Dashboard Pengajar</p>
                <h1 class="text-3xl font-bold text-[#1a3652]">Selamat datang, Pak Rizky! 👋</h1>
            </div>
            <div class="flex items-center gap-3">
                <button class="px-6 py-2.5 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-50 transition-all">
                    <i class="fas fa-plus mr-2 text-[10px]"></i> Request Matching
                </button>
                <button class="px-6 py-2.5 bg-[#1a3652] text-white rounded-xl text-sm font-bold shadow-lg shadow-[#1a3652]/20 hover:bg-[#132a41] transition-all">
                    <i class="fas fa-search mr-2 text-[10px]"></i> Cari Duit
                </button>
            </div>
        </div>

        <!-- STATS CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            @php
                $stats = [
                    ['label' => 'Total Sesi', 'value' => '12', 'sub' => '+3 bulan ini', 'icon' => 'fa-calendar-alt'],
                    ['label' => 'Jam Belajar', 'value' => '18.5', 'sub' => 'jam total', 'icon' => 'fa-clock'],
                    ['label' => 'Rata-rata Nilai', 'value' => '82', 'sub' => 'dari assessment', 'icon' => 'fa-award'],
                    ['label' => 'Skill Dipelajari', 'value' => '6', 'sub' => 'skill unik', 'icon' => 'fa-chart-line'],
                ];
            @endphp
            @foreach($stats as $stat)
            <div class="bg-white p-6 rounded-[2rem] border border-slate-100 shadow-sm flex items-start justify-between">
                <div>
                    <p class="text-slate-400 text-[11px] font-bold uppercase tracking-wider mb-3">{{ $stat['label'] }}</p>
                    <h3 class="text-3xl font-black text-[#1a3652] mb-1">{{ $stat['value'] }}</h3>
                    <p class="text-slate-400 text-xs">{{ $stat['sub'] }}</p>
                </div>
                <div class="bg-slate-50 p-3 rounded-2xl text-slate-300">
                    <i class="fas {{ $stat['icon'] }} text-lg"></i>
                </div>
            </div>
            @endforeach
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- LEFT COLUMN -->
            <div class="lg:col-span-8 space-y-8">
                <!-- FEATURED SESSION -->
                <div class="bg-[#1a3652] rounded-[2.5rem] p-8 text-white relative overflow-hidden group">
                    <div class="absolute top-[-20%] right-[-10%] w-64 h-64 bg-white/5 rounded-full blur-3xl group-hover:bg-white/10 transition-all"></div>
                    <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 rounded-2xl overflow-hidden border-2 border-white/20 shadow-xl">
                                <img src="https://ui-avatars.com/api/?name=Andi+Firmansyah&background=random" alt="Tutor" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <div class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-emerald-400 mb-2">
                                    <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span> Sesi Berikutnya
                                </div>
                                <h2 class="text-xl font-bold mb-1">Laravel Middleware & Authentication</h2>
                                <p class="text-slate-300 text-sm">dengan Andi Firmansyah</p>
                                <div class="flex items-center gap-4 mt-4 text-xs text-slate-400 font-medium">
                                    <span><i class="far fa-calendar mr-2"></i> Kamis, 16 April</span>
                                    <span><i class="far fa-clock mr-2"></i> 14:00 WIB • 2 jam</span>
                                </div>
                            </div>
                        </div>
                        <button class="bg-white text-[#1a3652] px-8 py-3 rounded-2xl font-bold text-sm hover:bg-slate-100 transition-all flex items-center gap-2">
                            <i class="fas fa-video text-xs"></i> Bergabung
                        </button>
                    </div>
                </div>

                <!-- JADWAL SESI -->
                <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-8">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-xl font-bold text-[#1a3652]">Jadwal Sesi</h3>
                        <button class="text-xs font-bold text-[#1a3652] hover:underline flex items-center gap-2">
                            <i class="fas fa-plus"></i> Tambah Sesi
                        </button>
                    </div>
                    <div class="space-y-4">
                        @php
                            $sessions = [
                                ['title' => 'Laravel Middleware & Authentication', 'tutor' => 'Andi Firmansyah', 'time' => '16 Apr • 14:00', 'status' => 'Akan Datang', 'color' => 'blue'],
                                ['title' => 'Python Pandas untuk Data Analysis', 'tutor' => 'Sari Dewi Putri', 'time' => '14 Apr • 10:00', 'status' => 'Selesai', 'color' => 'slate'],
                                ['title' => 'IELTS Writing Task 2', 'tutor' => 'Alicia Tanoto', 'time' => '18 Apr • 16:00', 'status' => 'Menunggu', 'color' => 'orange'],
                            ];
                        @endphp
                        @foreach($sessions as $s)
                        <div class="group flex items-center justify-between p-4 rounded-[1.5rem] border border-transparent hover:border-slate-100 hover:bg-slate-50/50 transition-all">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-slate-100 overflow-hidden">
                                    <img src="https://ui-avatars.com/api/?name={{ $s['tutor'] }}&background=random" alt="Avatar" class="w-full h-full">
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-800 group-hover:text-[#1a3652] transition-colors">{{ $s['title'] }}</h4>
                                    <p class="text-[11px] text-slate-400 font-medium">{{ $s['tutor'] }} • {{ $s['time'] }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col items-end gap-2">
                                <span class="text-[9px] px-3 py-1 rounded-full font-black uppercase tracking-wider
                                    {{ $s['status'] == 'Akan Datang' ? 'bg-blue-50 text-blue-600' : '' }}
                                    {{ $s['status'] == 'Selesai' ? 'bg-slate-100 text-slate-500' : '' }}
                                    {{ $s['status'] == 'Menunggu' ? 'bg-orange-50 text-orange-600' : '' }}">
                                    <i class="fas fa-circle text-[6px] mr-1 mb-0.5"></i> {{ $s['status'] }}
                                </span>
                                @if($s['status'] == 'Selesai')
                                    <button class="text-[10px] font-bold text-slate-400 hover:text-[#1a3652]">Coba Assessment</button>
                                @elseif($s['status'] == 'Akan Datang')
                                    <button class="text-[10px] font-bold text-[#1a3652]"><i class="fas fa-link mr-1"></i> Join</button>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="lg:col-span-4 space-y-6">
                <!-- HASIL ASSESSMENT -->
                <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-8">
                    <h3 class="text-lg font-bold text-[#1a3652] mb-6 flex items-center gap-2">
                        <i class="fas fa-chart-bar text-slate-300"></i> Hasil Assessment
                    </h3>
                    <div class="space-y-6">
                        <div class="relative pl-4 border-l-2 border-emerald-500">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="text-xs font-bold leading-relaxed pr-8">Python Pandas untuk Data Analysis</h4>
                                <span class="bg-emerald-500 text-white text-[10px] font-bold px-2 py-1 rounded-lg">88</span>
                            </div>
                            <p class="text-[10px] text-slate-400 leading-relaxed mb-1">Pemahaman konsep DataFrame sangat baik. Perlu latihan lebih pada operasi merge dan groupby kompleks.</p>
                            <p class="text-[9px] font-bold text-slate-300 uppercase">14/4/2026</p>
                        </div>
                        <div class="relative pl-4 border-l-2 border-yellow-500">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="text-xs font-bold leading-relaxed pr-8">Kalkulus Diferensial</h4>
                                <span class="bg-yellow-500 text-white text-[10px] font-bold px-2 py-1 rounded-lg">76</span>
                            </div>
                            <p class="text-[10px] text-slate-400 leading-relaxed mb-1">Konsep limit sudah paham, namun perlu memperkuat pemahaman chain rule pada fungsi komposit.</p>
                            <p class="text-[9px] font-bold text-slate-300 uppercase">8/4/2026</p>
                        </div>
                    </div>
                    <button class="w-full mt-8 py-3 bg-white border border-dashed border-slate-200 rounded-xl text-[10px] font-black uppercase tracking-widest text-slate-400 hover:border-slate-400 hover:text-slate-600 transition-all">
                        + Mulai Assessment Baru
                    </button>
                </div>

                <!-- PROGRES SKILL -->
                <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-8">
                    <h3 class="text-lg font-bold text-[#1a3652] mb-6">Progres Skill</h3>
                    <div class="space-y-6">
                        @foreach([['n' => 'Laravel', 'p' => '75%'], ['n' => 'Python Pandas', 'p' => '60%'], ['n' => 'IELTS Writing', 'p' => '45%']] as $skill)
                        <div class="space-y-2">
                            <div class="flex justify-between text-[11px] font-bold">
                                <span class="text-slate-600">{{ $skill['n'] }}</span>
                                <span class="text-slate-400">{{ $skill['p'] }}</span>
                            </div>
                            <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                                <div class="bg-[#1a3652] h-full rounded-full" style="width: {{ $skill['p'] }}"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- AKSI CEPAT -->
                <div class="bg-slate-50 rounded-[2.5rem] p-8 border border-slate-100/50">
                    <h3 class="text-sm font-black uppercase tracking-widest text-slate-400 mb-6">Aksi Cepat</h3>
                    <div class="space-y-3">
                        <button class="w-full py-3.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold shadow-lg shadow-[#1a3652]/10 hover:-translate-y-0.5 transition-all">Request Matching</button>
                        <button class="w-full py-3.5 bg-white border border-slate-200 text-slate-600 rounded-xl text-xs font-bold hover:bg-white transition-all">Cari Tutor Baru</button>
                        <button class="w-full py-3.5 text-slate-400 text-xs font-bold hover:text-[#1a3652] transition-colors">Lihat Monitoring Board</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#1a3652] text-white mt-20 pt-20 pb-10 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
                <div class="space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="bg-white/20 p-2 rounded-lg">
                            <i class="fas fa-book-open text-xl text-white"></i>
                        </div>
                        <span class="text-2xl font-bold tracking-tight text-white">AjarIn</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">Platform micro-learning yang menghubungkan pelajar dengan pengajar ahli secara spesifik.</p>
                    <div class="flex items-center gap-4 text-slate-400 text-lg">
                        <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                @foreach(['Platform' => ['Cari Tutor', 'Dashboard Pelajar', 'Dashboard Tutor', 'Monitoring Board'], 'Kategori' => ['Teknologi', 'Akademis', 'Professional', 'Bahasa'], 'Perusahaan' => ['Tentang Kami', 'Karir', 'Blog', 'Kontak']] as $title => $links)
                <div>
                    <h5 class="font-bold mb-6 text-sm tracking-wide">{{ $title }}</h5>
                    <ul class="space-y-4 text-slate-400 text-sm">
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
                    <a href="#" class="hover:text-white">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-white">Privasi</a>
                    <a href="#" class="hover:text-white">Cookie</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>