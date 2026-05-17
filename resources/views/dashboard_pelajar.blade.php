<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pelajar - AjarIn</title>
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
                <a href="/dashboard-pelajar" class="text-white border-b-2 border-white pb-1">Dashboard</a>
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
            
            <div class="relative group py-2">
                <div class="flex items-center gap-3 bg-white/10 pl-2 pr-4 py-1.5 rounded-full border border-white/10 cursor-pointer">
                    <div class="w-8 h-8 rounded-full bg-slate-400 flex items-center justify-center font-bold text-xs uppercase">RP</div>
                    <span class="text-sm font-semibold">Rizky</span>
                    <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                </div>
                
                <div class="absolute right-0 top-full mt-1 w-52 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 text-slate-700 hidden group-hover:block transition-all animate-in fade-in slide-in-from-top-2 duration-200 z-50">
                    <div class="px-4 py-2.5 border-b border-slate-50">
                        <p class="text-xs font-black text-[#1a3652] leading-tight">Rizky Pratama</p>
                        <p class="text-[10px] text-slate-400 font-medium">learner@ajarin.id</p>
                    </div>
                    <a href="/dashboard-pelajar" class="flex items-center gap-3 px-4 py-2.5 text-xs font-bold text-slate-600 hover:bg-slate-50 hover:text-[#1a3652] transition-colors">
                        <i class="fas fa-th-large w-4 text-slate-400"></i> Dashboard
                    </a>
                    <a href="/profile-pelajar" class="flex items-center gap-3 px-4 py-2.5 text-xs font-bold text-slate-600 hover:bg-slate-50 hover:text-[#1a3652] transition-colors">
                        <i class="far fa-user w-4 text-slate-400"></i> Profil Saya
                    </a>
                    <div class="border-t border-slate-50 mt-1 pt-1">
                        <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-xs font-bold text-red-500 hover:bg-red-50/50 transition-colors">
                            <i class="fas fa-sign-out-alt w-4"></i> Keluar
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-8 py-10">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
            <div>
                <p class="text-slate-500 text-sm font-medium mb-1">Dashboard Pelajar</p>
                <h1 class="text-3xl font-bold text-[#1a3652]">Selamat datang, Rizky! 👋</h1>
            </div>
            <div class="flex items-center gap-3">
                <button class="px-6 py-2.5 bg-white border border-slate-200 rounded-xl text-sm font-bold text-slate-600 hover:bg-slate-50 transition-all">
                    <i class="fas fa-plus mr-2 text-[10px]"></i> Request Matching
                </button>
                <button class="px-6 py-2.5 bg-[#1a3652] text-white rounded-xl text-sm font-bold shadow-lg shadow-[#1a3652]/20 hover:bg-[#132a41] transition-all">
                    <i class="fas fa-search mr-2 text-[10px]"></i> Cari Tutor
                </button>
            </div>
        </div>

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
            <div class="lg:col-span-8 space-y-8">
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
                                ['title' => 'Laravel Middleware & Authentication', 'tutor' => 'Andi Firmansyah', 'time' => '16 Apr • 14:00', 'status' => 'Akan Datang'],
                                ['title' => 'Python Pandas untuk Data Analysis', 'tutor' => 'Sari Dewi Putri', 'time' => '14 Apr • 10:00', 'status' => 'Selesai'],
                                ['title' => 'IELTS Writing Task 2', 'tutor' => 'Alicia Tanoto', 'time' => '18 Apr • 16:00', 'status' => 'Menunggu'],
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
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="lg:col-span-4 space-y-6">
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
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#1a3652] text-white mt-20 pt-20 pb-10 px-8">
        <p class="text-center text-xs text-slate-500">© 2026 AjarIn. Semua hak dilindungi.</p>
    </footer>
</body>
</html>