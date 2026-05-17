<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pengajar - AjarIn</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .tab-content { display: none; }
        .tab-content.active { display: block; }
        .tab-btn.active { 
            background-color: #1a3652; 
            color: white; 
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-[#f8fafc] font-sans antialiased text-slate-800">

    <nav class="bg-[#1a3652] text-white px-8 py-4 flex items-center justify-between sticky top-0 z-50 shadow-sm">
        <div class="flex items-center gap-12">
            <div class="flex items-center gap-2">
                <div class="bg-white/20 p-1.5 rounded-lg"><i class="fas fa-book-open text-lg"></i></div>
                <span class="text-xl font-bold tracking-tight">AjarIn</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="#" class="hover:text-white transition-colors">Cari Tutor</a>
                <a href="{{ route('pengajar.dashboard') }}" class="text-white border-b-2 border-white pb-1">Dashboard Pengajar</a>
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
            
            <div class="relative group py-2">
                <div class="flex items-center gap-3 bg-white/10 pl-2 pr-4 py-1.5 rounded-full border border-white/10 cursor-pointer">
                    <div class="w-8 h-8 rounded-full bg-slate-400 flex items-center justify-center font-bold text-xs uppercase">AF</div>
                    <span class="text-sm font-semibold">Andi</span>
                    <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                </div>
                
                <div class="absolute right-0 top-full mt-1 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 text-slate-700 hidden group-hover:block transition-all duration-200 z-50">
                    <div class="px-4 py-3 border-b border-slate-50">
                        <p class="text-sm font-black text-[#1a3652] leading-tight">Andi Firmansyah</p>
                        <p class="text-xs text-slate-400 font-medium mt-0.5">tutor@ajarin.id</p>
                    </div>
                    <a href="{{ route('pengajar.dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-xs font-bold text-[#1a3652] bg-slate-50 transition-colors">
                        <i class="fas fa-th-large w-4 text-[#1a3652] text-sm"></i> Dashboard
                    </a>
                    <a href="{{ route('pengajar.profile') }}" class="flex items-center gap-3 px-4 py-3 text-xs font-bold text-slate-600 hover:bg-slate-50 hover:text-[#1a3652] transition-colors">
                        <i class="far fa-user w-4 text-slate-400 text-sm"></i> Profil Saya
                    </a>
                    <div class="border-t border-slate-50 mt-1 pt-1">
                        <a href="#" class="flex items-center gap-3 px-4 py-3 text-xs font-bold text-red-500 hover:bg-red-50/50 transition-colors">
                            <i class="fas fa-sign-out-alt w-4 text-sm"></i> Keluar
                        </a>
                    </div>
                </div>
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
            
            <div class="lg:col-span-2 space-y-6">
                
                <div class="flex gap-4 border-b border-slate-200 pb-1 overflow-x-auto">
                    <button onclick="switchTab('jadwal')" id="btn-jadwal" class="tab-btn active px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 whitespace-nowrap transition-all">
                        <i class="far fa-calendar-check"></i> Jadwal & Request
                    </button>
                    <button onclick="switchTab('progres')" id="btn-progres" class="tab-btn text-slate-500 hover:text-[#1a3652] hover:bg-slate-100 px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 transition-all whitespace-nowrap">
                        <i class="fas fa-chart-pie"></i> Progres Murid
                    </button>
                    <button onclick="switchTab('kalender')" id="btn-kalender" class="tab-btn text-slate-500 hover:text-[#1a3652] hover:bg-slate-100 px-5 py-2.5 rounded-xl text-xs font-bold flex items-center gap-2 transition-all whitespace-nowrap">
                        <i class="far fa-calendar-alt"></i> Kalender Ketersediaan
                    </button>
                </div>

                <div id="tab-jadwal" class="tab-content active space-y-6">
                    
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <h2 class="text-xl font-bold text-[#1a3652]">Request Masuk</h2>
                            <span class="bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">2</span>
                        </div>

                        <div class="space-y-4">
                            <div class="border border-slate-100 rounded-xl p-5 hover:border-slate-200 transition-colors">
                                <div class="flex justify-between items-start mb-3">
                                    <div class="flex items-center gap-3">
                                        <img src="https://ui-avatars.com/api/?name=Rizky+Pratama&background=random" class="w-10 h-10 rounded-full object-cover">
                                        <div>
                                            <h4 class="font-bold text-sm text-[#1a3652]">Rizky Pratama</h4>
                                            <div class="flex items-center gap-2 mt-1 text-[10px]">
                                                <span class="bg-slate-100 text-slate-500 font-bold px-2 py-0.5 rounded-md">Laravel Middleware</span>
                                                <span class="text-slate-400 font-medium">3 jam</span>
                                                <span class="text-slate-400 font-medium">150rb/jam</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] font-medium text-slate-400">5 menit lalu</span>
                                </div>
                                <p class="text-xs text-slate-500 leading-relaxed mb-4 pl-13">Stuck di bagian auth middleware untuk multi-role. Sudah coba tapi error terus.</p>
                                <div class="flex gap-3 pl-13">
                                    <button class="flex-1 py-2 rounded-lg border border-slate-200 text-xs font-bold text-slate-500 hover:bg-slate-50 transition-colors">Tolak</button>
                                    <button class="flex-1 py-2 rounded-lg bg-[#1a3652] text-white text-xs font-bold hover:bg-[#112438] transition-colors shadow-md">Terima & Hubungi</button>
                                </div>
                            </div>

                            <div class="border border-slate-100 rounded-xl p-5 hover:border-slate-200 transition-colors">
                                <div class="flex justify-between items-start mb-3">
                                    <div class="flex items-center gap-3">
                                        <img src="https://ui-avatars.com/api/?name=Maya+Sari&background=random" class="w-10 h-10 rounded-full object-cover">
                                        <div>
                                            <h4 class="font-bold text-sm text-[#1a3652]">Maya Sari</h4>
                                            <div class="flex items-center gap-2 mt-1 text-[10px]">
                                                <span class="bg-slate-100 text-slate-500 font-bold px-2 py-0.5 rounded-md">API Design</span>
                                                <span class="text-slate-400 font-medium">2 jam</span>
                                                <span class="text-slate-400 font-medium">150rb/jam</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] font-medium text-slate-400">1 jam lalu</span>
                                </div>
                                <p class="text-xs text-slate-500 leading-relaxed mb-4 pl-13">Ingin belajar cara design RESTful API yang clean dan scalable.</p>
                                <div class="flex gap-3 pl-13">
                                    <button class="flex-1 py-2 rounded-lg border border-slate-200 text-xs font-bold text-slate-500 hover:bg-slate-50 transition-colors">Tolak</button>
                                    <button class="flex-1 py-2 rounded-lg bg-[#1a3652] text-white text-xs font-bold hover:bg-[#112438] transition-colors shadow-md">Terima & Hubungi</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-8">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-lg font-bold text-[#1a3652]">Jadwal Mengajar</h2>
                            <span class="text-xs font-bold text-slate-400 flex items-center gap-2">
                                <i class="far fa-calendar"></i> April 2026
                            </span>
                        </div>

                        <div class="space-y-4">
                            @php
                                $schedules = [
                                    ['title' => 'Database Schema Design', 'student' => 'Dian Permata', 'time' => 'Hari ini • 14:00 WIB • 2 jam', 'status' => 'Akan Datang', 'color' => 'blue', 'action' => 'Start'],
                                    ['title' => 'Laravel REST API', 'student' => 'Rizky Pratama', 'time' => 'Besok • 10:00 WIB • 1.5 jam', 'status' => 'Akan Datang', 'color' => 'blue', 'action' => 'Start'],
                                    ['title' => 'Git Workflow', 'student' => 'Maya Sari', 'time' => '15 Apr • 16:00 WIB • 1 jam', 'status' => 'Selesai', 'color' => 'slate', 'action' => ''],
                                ];
                            @endphp

                            @foreach($schedules as $sched)
                            <div class="flex items-center justify-between border border-slate-100 rounded-xl p-4 border-l-4 {{ $sched['color'] == 'blue' ? 'border-l-[#1a3652]' : 'border-l-slate-300' }} hover:bg-slate-50 transition-colors">
                                <div>
                                    <h4 class="font-bold text-sm text-[#1a3652]">{{ $sched['title'] }}</h4>
                                    <p class="text-xs text-slate-500 mt-1">{{ $sched['student'] }}</p>
                                    <div class="flex items-center gap-1 mt-2 text-[10px] font-medium text-slate-400">
                                        <i class="far fa-clock"></i> {{ $sched['time'] }}
                                    </div>
                                </div>
                                <div class="text-right flex flex-col items-end gap-2">
                                    <span class="text-[10px] font-bold uppercase tracking-wider {{ $sched['color'] == 'blue' ? 'text-blue-500' : 'text-slate-400' }} flex items-center gap-1">
                                        @if($sched['color'] == 'blue') <i class="fas fa-play-circle"></i> @else <i class="fas fa-check-circle"></i> @endif
                                        {{ $sched['status'] }}
                                    </span>
                                    @if($sched['action'])
                                        <button class="px-4 py-1.5 bg-white border border-slate-200 text-[#1a3652] text-[11px] font-bold rounded-lg hover:bg-slate-50 transition-colors shadow-sm">
                                            {{ $sched['action'] }}
                                        </button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div id="tab-progres" class="tab-content space-y-6">
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 overflow-hidden">
                        <div class="mb-6">
                            <h2 class="text-lg font-bold text-[#1a3652]">Daftar Progres Murid</h2>
                            <p class="text-xs text-slate-400">Pantau perkembangan materi, total sesi, dan skor akademik siswa.</p>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="border-b border-slate-100 text-slate-400 text-[11px] font-bold uppercase tracking-wider">
                                        <th class="pb-3 pl-2">Nama Murid</th>
                                        <th class="pb-3">Tanggal Bergabung</th>
                                        <th class="pb-3 text-center">Sesi Selesai</th>
                                        <th class="pb-3 text-center">Jam Belajar</th>
                                        <th class="pb-3 text-center pr-2">Rata-rata Skor</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-50 text-xs font-medium text-slate-700">
                                    @php
                                        $studentsList = [
                                            ['name' => 'Rizky Pratama', 'join' => '12 Jan 2026', 'sesi' => '18 / 24', 'jam' => '36 Jam', 'skor' => '88/100', 'color' => 'text-emerald-500'],
                                            ['name' => 'Dian Permata', 'join' => '05 Feb 2026', 'sesi' => '12 / 16', 'jam' => '24 Jam', 'skor' => '85/100', 'color' => 'text-emerald-500'],
                                            ['name' => 'Maya Sari', 'join' => '20 Mar 2026', 'sesi' => '4 / 12', 'jam' => '8 Jam', 'skor' => '74/100', 'color' => 'text-amber-500'],
                                            ['name' => 'Budi Santoso', 'join' => '02 Apr 2026', 'sesi' => '2 / 8', 'jam' => '4 Jam', 'skor' => '90/100', 'color' => 'text-emerald-500']
                                        ];
                                    @endphp
                                    @foreach($studentsList as $stud)
                                    <tr class="hover:bg-slate-50/80 transition-colors">
                                        <td class="py-4 pl-2 flex items-center gap-3">
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($stud['name']) }}&background=random" class="w-8 h-8 rounded-full">
                                            <span class="font-bold text-slate-800">{{ $stud['name'] }}</span>
                                        </td>
                                        <td class="py-4 text-slate-500">{{ $stud['join'] }}</td>
                                        <td class="py-4 text-center font-bold text-slate-600">{{ $stud['sesi'] }}</td>
                                        <td class="py-4 text-center text-slate-500">{{ $stud['jam'] }}</td>
                                        <td class="py-4 text-center pr-2">
                                            <span class="font-bold {{ $stud['color'] }}">{{ $stud['skor'] }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="tab-kalender" class="tab-content space-y-6">
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-8">
                        <div class="mb-8">
                            <h2 class="text-xl font-bold text-[#1a3652] mb-1">Manajemen Ketersediaan</h2>
                            <p class="text-xs text-slate-400">Atur slot waktu mengajarmu di kalender. Tanggal lewat otomatis dikunci.</p>
                        </div>
                        
                        <div class="grid grid-cols-1 xl:grid-cols-12 gap-10">
                            <div class="xl:col-span-7">
                                <div class="flex items-center justify-between mb-8 px-4">
                                    <button onclick="prevMonth()" class="text-slate-400 hover:text-slate-600"><i class="fas fa-chevron-left"></i></button>
                                    <h3 id="calendar-month-year" class="font-extrabold text-sm text-[#1a3652]">-</h3>
                                    <button onclick="nextMonth()" class="text-slate-400 hover:text-slate-600"><i class="fas fa-chevron-right"></i></button>
                                </div>
                                <div class="grid grid-cols-7 text-center mb-4 text-[10px] font-bold text-slate-400">
                                    <span>Min</span><span>Sen</span><span>Sel</span><span>Rab</span><span>Kam</span><span>Jum</span><span>Sab</span>
                                </div>
                                <div class="grid grid-cols-7 gap-y-3 text-center" id="calendar-grid"></div>
                            </div>

                            <div class="xl:col-span-5 border-l border-slate-50 pl-6">
                                <div class="mb-6">
                                    <h3 id="panel-date-title" class="font-extrabold text-[#1a3652] text-base mb-1">Pilih Tanggal...</h3>
                                    <p id="panel-slot-counter" class="text-xs text-slate-400">0 slot dipilih</p>
                                </div>
                                <div class="grid grid-cols-2 gap-2" id="slots-container">
                                    @php
                                        $timeSlots = ['07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00'];
                                    @endphp
                                    @foreach($timeSlots as $time)
                                        <button onclick="toggleSlot(this)" class="slot-btn py-2 border border-slate-100 rounded-lg text-xs font-bold text-slate-600 hover:border-slate-300 transition-colors">
                                            {{ $time }}
                                        </button>
                                    @endforeach
                                </div>
                                <button class="w-full mt-8 py-3 bg-[#1a3652] text-white rounded-xl text-xs font-bold shadow-lg shadow-[#1a3652]/10">Simpan Jadwal</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="space-y-6">
                <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 relative">
                    <a href="{{ route('pengajar.profile') }}" class="absolute top-6 right-6 text-[10px] font-bold text-slate-400 hover:text-[#1a3652]"><i class="fas fa-pen"></i> Edit</a>
                    <h3 class="font-bold text-slate-800 mb-6">Profil Saya</h3>
                    
                    <div class="flex items-center gap-4 mb-5">
                        <img src="https://ui-avatars.com/api/?name=Andi+Firmansyah&background=random" class="w-14 h-14 rounded-2xl object-cover">
                        <div>
                            <h4 class="font-bold text-[#1a3652] text-sm">Andi Firmansyah</h4>
                            <p class="text-[11px] text-slate-400">Senior Full-Stack Developer</p>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h5 class="text-[11px] font-bold text-slate-400 uppercase tracking-wide mb-2">Keahlian Utama</h5>
                        <div class="flex flex-wrap gap-1.5">
                            <span class="bg-slate-50 text-[#1a3652] border border-slate-100 px-2.5 py-1 rounded-md font-bold text-[10px]">Laravel</span>
                            <span class="bg-slate-50 text-[#1a3652] border border-slate-100 px-2.5 py-1 rounded-md font-bold text-[10px]">Vue.js</span>
                            <span class="bg-slate-50 text-[#1a3652] border border-slate-100 px-2.5 py-1 rounded-md font-bold text-[10px]">REST API</span>
                            <span class="bg-slate-50 text-[#1a3652] border border-slate-100 px-2.5 py-1 rounded-md font-bold text-[10px]">SQL Design</span>
                        </div>
                    </div>

                    <div class="mb-5">
                        <h5 class="text-[11px] font-bold text-slate-400 uppercase tracking-wide mb-2">Deskripsi Pengalaman</h5>
                        <p class="text-[11px] text-slate-500 leading-relaxed font-medium">
                            Berpengalaman lebih dari 5 tahun membangun arsitektur aplikasi web skala enterprise. Aktif mengajar coding dasar hingga advance secara privat terhitung sejak tahun 2022.
                        </p>
                    </div>

                    <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                        <span class="text-xs text-slate-400">Harga per jam</span>
                        <span class="font-black text-[#1a3652]">Rp150.000</span>
                    </div>
                </div>

                <div class="bg-[#1a3652] rounded-2xl shadow-lg p-6 text-white">
                    <h3 class="font-bold mb-6">Bulan Ini</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-white/70">Sesi Selesai</span>
                            <span class="font-bold">18</span>
                        </div>
                        <div class="flex justify-between items-center text-xs">
                            <span class="text-white/70">Respons Rate</span>
                            <span class="font-bold">98%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="bg-[#1a3652] text-white pt-10 pb-10 px-8 mt-10">
        <p class="text-center text-xs text-slate-400">© 2026 AjarIn. Semua hak dilindungi.</p>
    </footer>

    <script>
        function switchTab(tabId) {
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active', 'bg-[#1a3652]', 'text-white', 'shadow-md');
                btn.classList.add('text-slate-500');
            });
            
            document.getElementById('tab-' + tabId).classList.add('active');
            const activeBtn = document.getElementById('btn-' + tabId);
            activeBtn.classList.add('active');
            activeBtn.classList.remove('text-slate-500');

            if(tabId === 'kalender') renderCalendar();
        }

        let date = new Date();
        let currYear = date.getFullYear();
        let currMonth = date.getMonth();
        const todayDate = date.getDate();
        const todayMonth = date.getMonth();
        const todayYear = date.getFullYear();

        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        function renderCalendar() {
            const grid = document.getElementById('calendar-grid');
            const title = document.getElementById('calendar-month-year');
            grid.innerHTML = "";
            title.innerText = `${monthNames[currMonth]} ${currYear}`;

            let firstDay = new Date(currYear, currMonth, 1).getDay();
            let lastDate = new Date(currYear, currMonth + 1, 0).getDate();

            for (let i = 0; i < firstDay; i++) {
                grid.appendChild(document.createElement('span'));
            }

            for (let i = 1; i <= lastDate; i++) {
                let btn = document.createElement('button');
                btn.innerText = i;
                
                let isPast = false;
                if (currYear < todayYear) {
                    isPast = true;
                } else if (currYear === todayYear && currMonth < todayMonth) {
                    isPast = true;
                } else if (currYear === todayYear && currMonth === todayMonth && i < todayDate) {
                    isPast = true;
                }

                if (isPast) {
                    btn.className = "w-10 h-10 rounded-xl text-xs font-bold flex items-center justify-center bg-slate-50 text-slate-300 cursor-not-allowed select-none";
                    btn.disabled = true;
                } else {
                    btn.className = "w-10 h-10 rounded-xl text-xs font-bold flex items-center justify-center transition-all hover:bg-slate-100 text-slate-700 date-btn";
                    btn.onclick = function() {
                        document.querySelectorAll('.date-btn').forEach(b => b.classList.remove('bg-[#1a3652]', 'text-white'));
                        this.classList.add('bg-[#1a3652]', 'text-white');
                        document.getElementById('panel-date-title').innerText = `${i} ${monthNames[currMonth]} ${currYear}`;
                    };
                }
                grid.appendChild(btn);
            }
        }

        function toggleSlot(btn) {
            btn.classList.toggle('bg-[#1a3652]');
            btn.classList.toggle('text-white');
            const selected = document.querySelectorAll('.slot-btn.text-white').length;
            document.getElementById('panel-slot-counter').innerText = selected + ' slot dipilih';
        }

        document.addEventListener('DOMContentLoaded', () => {
            renderCalendar();
        });
    </script>
</body>
</html>
