<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Board - AjarIn</title>
    <!-- Vite Integration -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc] font-sans antialiased text-slate-800">

    <!-- NAVBAR -->
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
                <a href="#" class="hover:text-white transition-colors">Dashboard</a>
                <a href="#" class="text-white border-b-2 border-white pb-1">Monitoring</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button class="bg-white/10 px-4 py-1.5 rounded-full text-xs font-semibold border border-white/10 flex items-center gap-2">
                <i class="fas fa-user-graduate"></i> Pelajar
            </button>
            <div class="relative cursor-pointer">
                <i class="far fa-bell text-xl"></i>
                <span class="absolute -top-1 -right-1 bg-red-500 text-[10px] w-4 h-4 flex items-center justify-center rounded-full">3</span>
            </div>
            <div class="flex items-center gap-3 bg-white/10 pl-2 pr-4 py-1.5 rounded-full border border-white/10 cursor-pointer">
                <div class="w-8 h-8 rounded-full bg-slate-400 flex items-center justify-center font-bold text-xs uppercase">RP</div>
                <span class="text-sm font-semibold">Rizky</span>
                <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
            </div>
        </div>
    </nav>

    <!-- HEADER SECTION (Putih Berbeda dari Background Utama) -->
    <!-- Menggunakan bg-white dengan border bawah halus untuk membedakan dari bg-[#f8fafc] -->
    <header class="bg-white border-b border-slate-200/60 py-10 px-8 shadow-sm">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <nav class="flex items-center gap-2 text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2">
                    <i class="fas fa-chart-bar text-[#1a3652]"></i>
                    <span>Monitoring Board</span>
                </nav>
                <h1 class="text-3xl font-bold text-[#1a3652]">Project & Tugas Murid</h1>
            </div>
            
            <!-- Progress Bar di Header -->
            <div class="flex items-center gap-4 bg-slate-50 px-5 py-3 rounded-2xl border border-slate-100">
                <div class="w-40 h-2 bg-slate-200 rounded-full overflow-hidden">
                    <!-- Progress bar menggunakan warna biru tua sesuai desain -->
                    <div class="bg-[#1a3652] h-full w-[40%] rounded-full"></div>
                </div>
                <span class="text-xs font-bold text-slate-500">2/5 selesai</span>
            </div>
        </div>
    </header>

    <!-- KANBAN CONTENT SECTION -->
    <main class="max-w-7xl mx-auto px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            @php
                $columns = [
                    'To Do' => [
                        'count' => 2,
                        'tasks' => [
                            ['priority' => 'Tinggi', 'title' => 'Implementasi REST API Endpoint', 'desc' => 'Buat endpoint CRUD untuk modul Users menggunakan Laravel Resource Controllers', 'tutor' => 'Rizky Pratama', 'date' => '20 Apr'],
                            ['priority' => 'Sedang', 'title' => 'Setup Middleware Auth', 'desc' => 'Konfigurasi Sanctum token authentication dan protect routes', 'tutor' => 'Maya Sari', 'date' => '22 Apr'],
                        ]
                    ],
                    'In Progress' => [
                        'count' => 1,
                        'tasks' => [
                            ['priority' => 'Tinggi', 'title' => 'Database Schema Design', 'desc' => 'Rancang skema database dengan relasi yang optimal untuk aplikasi e-commerce', 'tutor' => 'Dian Permata', 'date' => '15 Apr'],
                        ]
                    ],
                    'Done' => [
                        'count' => 2,
                        'tasks' => [
                            ['priority' => 'Rendah', 'title' => 'Environment Setup', 'desc' => 'Instalasi Laravel, konfigurasi .env, dan setup database lokal', 'tutor' => 'Rizky Pratama', 'date' => '10 Apr'],
                            ['priority' => 'Rendah', 'title' => 'Git Workflow & Best Practice', 'desc' => 'Memahami branching strategy (GitFlow) dan commit convention', 'tutor' => 'Maya Sari', 'date' => '12 Apr'],
                        ]
                    ]
                ];
            @endphp

            @foreach($columns as $title => $data)
            <div class="bg-[#f1f5f9]/60 p-6 rounded-[2rem] border border-slate-100 flex flex-col min-h-[500px]">
                <div class="flex items-center justify-between mb-8 px-1">
                    <div class="flex items-center gap-3">
                        <h3 class="font-bold text-sm tracking-tight {{ $title == 'In Progress' ? 'text-blue-600' : ($title == 'Done' ? 'text-emerald-600' : 'text-slate-600') }}">
                            {{ $title }}
                        </h3>
                        <span class="bg-white px-2.5 py-0.5 rounded-full text-[10px] font-bold text-slate-400 border border-slate-100 shadow-sm">
                            {{ $data['count'] }}
                        </span>
                    </div>
                    <button class="w-7 h-7 rounded-full bg-white flex items-center justify-center text-slate-300 border border-slate-100 hover:text-[#1a3652] hover:border-[#1a3652] transition-all">
                        <i class="fas fa-plus text-[10px]"></i>
                    </button>
                </div>

                <div class="space-y-5">
                    @foreach($data['tasks'] as $task)
                    <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all duration-300 group cursor-pointer">
                        <div class="mb-4">
                            @php
                                $pColor = $task['priority'] == 'Tinggi' ? 'bg-red-50 text-red-500' : ($task['priority'] == 'Sedang' ? 'bg-amber-50 text-amber-500' : 'bg-slate-50 text-slate-500');
                            @endphp
                            <span class="px-2.5 py-1 rounded-lg text-[9px] font-black uppercase tracking-tighter {{ $pColor }}">
                                <i class="fas fa-flag mr-1.5"></i> {{ $task['priority'] }}
                            </span>
                        </div>
                        
                        <h4 class="font-bold text-slate-800 text-sm mb-2 leading-tight group-hover:text-[#1a3652] transition-colors">{{ $task['title'] }}</h4>
                        <p class="text-[11px] text-slate-400 leading-relaxed mb-6">{{ $task['desc'] }}</p>
                        
                        <div class="flex items-center justify-between pt-4 border-t border-slate-50">
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full bg-slate-200 overflow-hidden">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($task['tutor']) }}&background=random" class="w-full h-full object-cover">
                                </div>
                                <span class="text-[10px] font-bold text-slate-500">{{ $task['tutor'] }}</span>
                            </div>
                            <span class="text-[10px] font-bold text-slate-300">
                                <i class="far fa-calendar-alt mr-1"></i> {{ $task['date'] }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#1a3652] text-white pt-20 pb-10 px-8 mt-20">
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
                </div>
                @foreach([
                    'Platform' => ['Cari Tutor', 'Dashboard Pelajar', 'Monitoring Board'],
                    'Kategori' => ['Teknologi', 'Akademis', 'Bahasa'],
                    'Perusahaan' => ['Tentang Kami', 'Karir', 'Kontak']
                ] as $title => $links)
                <div>
                    <h5 class="font-bold mb-6 text-sm tracking-wide uppercase text-white/50">{{ $title }}</h5>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        @foreach($links as $link)
                            <li><a href="#" class="hover:text-white transition-colors">{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="pt-10 border-t border-white/10 text-[10px] font-bold uppercase tracking-widest text-slate-500 flex flex-col md:flex-row justify-between items-center gap-4">
                <p>© 2026 AjarIn. Semua hak dilindungi.</p>
                <div class="flex gap-8">
                    <a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-white transition-colors">Privasi</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>