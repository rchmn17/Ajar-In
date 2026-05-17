<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengajar - Progres Murid - AjarIn</title>
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
            
            <div class="lg:col-span-2 space-y-8">
                
                <div class="flex gap-4 border-b border-slate-200 pb-1 overflow-x-auto">
                    <button class="text-slate-500 hover:text-[#1a3652] hover:bg-slate-100 px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 transition-all whitespace-nowrap">
                        <i class="far fa-calendar-check"></i> Jadwal & Request
                    </button>
                    <button class="bg-[#1a3652] text-white px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 whitespace-nowrap shadow-md">
                        <i class="fas fa-chart-pie"></i> Progres Murid
                    </button>
                    <button class="text-slate-500 hover:text-[#1a3652] hover:bg-slate-100 px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 transition-all whitespace-nowrap">
                        <i class="far fa-calendar-alt"></i> Kalender Ketersediaan
                    </button>
                </div>

                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-8">
                    
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-[#1a3652] mb-1">Monitoring Progres Murid</h2>
                        <p class="text-xs text-slate-400">Pantau perkembangan belajar setiap murid yang terdaftar.</p>
                    </div>

                    <div class="grid grid-cols-3 gap-4 mb-8">
                        <div class="bg-slate-50 rounded-2xl p-5 border border-slate-100 text-center flex flex-col items-center justify-center">
                            <i class="fas fa-book-open text-slate-400 mb-2"></i>
                            <span class="text-2xl font-black text-[#1a3652] mb-1">3</span>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Total Murid</span>
                        </div>
                        <div class="bg-slate-50 rounded-2xl p-5 border border-slate-100 text-center flex flex-col items-center justify-center">
                            <i class="fas fa-award text-amber-400 mb-2"></i>
                            <span class="text-2xl font-black text-[#1a3652] mb-1">77</span>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Rata-rata Skor</span>
                        </div>
                        <div class="bg-slate-50 rounded-2xl p-5 border border-slate-100 text-center flex flex-col items-center justify-center">
                            <i class="far fa-clock text-blue-400 mb-2"></i>
                            <span class="text-2xl font-black text-[#1a3652] mb-1">26 jam</span>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Total Jam</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 mb-6 overflow-x-auto pb-2">
                        <button class="bg-[#1a3652] text-white px-5 py-2 rounded-full text-[11px] font-bold shadow-sm whitespace-nowrap">
                            Semua
                        </button>
                        <button class="bg-white border border-slate-200 text-slate-500 hover:bg-slate-50 px-4 py-2 rounded-full text-[11px] font-bold flex items-center gap-2 transition-all whitespace-nowrap">
                            <i class="fas fa-arrow-trend-up text-emerald-500"></i> Meningkat
                        </button>
                        <button class="bg-white border border-slate-200 text-slate-500 hover:bg-slate-50 px-4 py-2 rounded-full text-[11px] font-bold flex items-center gap-2 transition-all whitespace-nowrap">
                            <i class="fas fa-minus text-slate-400"></i> Stabil
                        </button>
                        <button class="bg-white border border-slate-200 text-slate-500 hover:bg-slate-50 px-4 py-2 rounded-full text-[11px] font-bold flex items-center gap-2 transition-all whitespace-nowrap">
                            <i class="fas fa-arrow-trend-down text-blue-500"></i> Menurun
                        </button>
                    </div>

                    <div class="space-y-3">
                        @php
                            $students = [
                                [
                                    'name' => 'Rizky Pratama',
                                    'sesi' => '8 sesi',
                                    'jam' => '12.5 jam',
                                    'score' => '84',
                                    'trend_icon' => 'fa-arrow-trend-up',
                                    'trend_color' => 'text-emerald-500'
                                ],
                                [
                                    'name' => 'Maya Sari',
                                    'sesi' => '5 sesi',
                                    'jam' => '7.5 jam',
                                    'score' => '76',
                                    'trend_icon' => 'fa-minus',
                                    'trend_color' => 'text-slate-400'
                                ],
                                [
                                    'name' => 'Dian Permata',
                                    'sesi' => '4 sesi',
                                    'jam' => '6 jam',
                                    'score' => '71',
                                    'trend_icon' => 'fa-arrow-trend-up',
                                    'trend_color' => 'text-emerald-500'
                                ],
                            ];
                        @endphp

                        @foreach($students as $student)
                        <div class="flex items-center justify-between p-4 border border-slate-100 rounded-xl hover:border-slate-200 hover:shadow-sm transition-all cursor-pointer bg-white group">
                            <div class="flex items-center gap-4">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($student['name']) }}&background=random" class="w-12 h-12 rounded-xl object-cover">
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <h4 class="font-bold text-sm text-[#1a3652] group-hover:text-blue-600 transition-colors">{{ $student['name'] }}</h4>
                                        <i class="fas {{ $student['trend_icon'] }} {{ $student['trend_color'] }} text-[10px]"></i>
                                    </div>
                                    <div class="flex items-center gap-2 text-[11px] font-medium text-slate-400">
                                        <span>{{ $student['sesi'] }}</span>
                                        <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                        <span>{{ $student['jam'] }}</span>
                                        <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                        <span>Rata-rata: <strong class="text-amber-500">{{ $student['score'] }}</strong></span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-8 h-8 rounded-full flex items-center justify-center text-slate-300 group-hover:bg-slate-50 group-hover:text-[#1a3652] transition-colors">
                                <i class="fas fa-chevron-down text-xs"></i>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="space-y-6">
                
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 relative">
                    <button class="absolute top-6 right-6 text-[10px] font-bold text-slate-400 hover:text-[#1a3652] flex items-center gap-1">
                        <i class="fas fa-pen"></i> Edit
                    </button>
                    <h3 class="font-bold text-slate-800 mb-6">Profil Saya</h3>
                    
                    <div class="flex items-center gap-4 mb-4">
                        <img src="https://ui-avatars.com/api/?name=Andi+Firmansyah&background=random" class="w-14 h-14 rounded-2xl object-cover">
                        <div>
                            <h4 class="font-bold text-[#1a3652] text-sm">Andi Firmansyah</h4>
                            <p class="text-[11px] text-slate-400">Senior Full-Stack Developer</p>
                            <div class="flex items-center gap-1 mt-1 text-[10px] font-bold text-slate-500">
                                <i class="fas fa-star text-amber-500"></i> 4.9 <span class="text-slate-300 font-normal">• 128 ulasan</span>
                            </div>
                        </div>
                    </div>

                    <p class="text-[11px] text-slate-500 leading-relaxed mb-5">Senior Full-Stack Developer dengan 5+ tahun pengalaman di Laravel & React. Spesialis middleware, API design, dan arsitektur scalable.</p>

                    <div class="mb-5">
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">Keahlian Utama</p>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach(['Laravel Middleware', 'React Hooks', 'API Design', 'PostgreSQL'] as $skill)
                                <span class="bg-slate-100 text-slate-600 text-[10px] font-semibold px-2 py-1 rounded-md">{{ $skill }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                        <span class="text-xs font-medium text-slate-400">Harga per jam</span>
                        <span class="font-black text-[#1a3652]">Rp150.000</span>
                    </div>
                </div>

                <div class="bg-[#1a3652] rounded-2xl shadow-lg p-6 text-white relative overflow-hidden">
                    <div class="absolute -right-6 -top-6 w-24 h-24 bg-white/5 rounded-full blur-xl"></div>
                    
                    <h3 class="font-bold mb-6 relative z-10">Bulan Ini</h3>
                    <div class="space-y-4 relative z-10">
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-white/70 flex items-center gap-2"><i class="far fa-check-circle w-4"></i> Sesi Selesai</span>
                            <span class="font-bold">18</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-white/70 flex items-center gap-2"><i class="fas fa-user-plus w-4"></i> Murid Baru</span>
                            <span class="font-bold">6</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-white/70 flex items-center gap-2"><i class="fas fa-bolt w-4"></i> Respons Rate</span>
                            <span class="font-bold">98%</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="font-bold text-sm text-[#1a3652] flex items-center gap-2">
                            <i class="far fa-calendar-alt text-slate-400"></i> Ketersediaan Mengajar
                        </h3>
                        <a href="#" class="text-[10px] font-bold text-blue-500 hover:text-blue-600">Atur &rarr;</a>
                    </div>
                    <p class="text-[11px] text-slate-400 leading-relaxed">Klik untuk membuka kalender dan mengatur slot waktu tersedia kamu secara lengkap.</p>
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