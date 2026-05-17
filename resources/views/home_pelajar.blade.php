<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Tutor Terbaik - AjarIn</title>
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
                <a href="#" class="text-white">Cari Tutor</a>
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
                        <span>Rp50rb</span>
                        <span>Rp500rb</span>
                    </div>
                </div>
            </div>

            <div class="space-y-3">
                <label class="text-xs font-bold text-slate-700 block">Rating Minimum</label>
                <div class="flex bg-slate-50 p-1 rounded-xl border border-slate-100 gap-1">
                    <button class="flex-1 py-1.5 text-center rounded-lg text-[11px] font-black bg-[#1a3652] text-white shadow-sm">Semua</button>
                    <button class="flex-1 py-1.5 text-center rounded-lg text-[11px] font-bold text-slate-500 hover:bg-white transition-colors">4+</button>
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
                    <select class="w-full px-4 py-3 bg-slate-50 border border-slate-100 rounded-xl text-xs font-bold text-slate-600 appearance-none focus:bg-white focus:outline-none focus:ring-2 focus:ring-[#1a3652]/10">
                        <option>Paling Relevan</option>
                        <option>Harga Rendah - Tinggi</option>
                        <option>Harga Tinggi - Rendah</option>
                        <option>Rating Tertinggi</option>
                    </select>
                    <span class="absolute inset-y-0 right-4 flex items-center text-slate-400 text-[10px] pointer-events-none">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-8 mt-8">
        <div class="flex flex-wrap gap-2 mb-6 border-b border-slate-200 pb-6">
            @foreach(['Laravel', 'React', 'Python', 'Machine Learning', 'UI/UX Design', 'IELTS', 'Matematika', 'Data Science', 'Product Management', 'English'] as $tag)
                <button class="px-4 py-1.5 bg-white border border-slate-200 rounded-full text-[11px] font-bold text-slate-500 hover:border-[#1a3652] hover:text-[#1a3652] transition-all shadow-sm">
                    {{ $tag }}
                </button>
            @endforeach
        </div>

        <p class="text-slate-400 text-xs font-bold mb-8 uppercase tracking-widest">Menampilkan <span class="text-slate-800">6</span> pengajar</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            @php
                $tutors = [
                    ['name' => 'Alicia Tanoto', 'title' => 'English & IELTS Specialist', 'cat' => 'Bahasa', 'rating' => '5', 'reviews' => '88', 'sessions' => '160', 'price' => '120.000', 'tags' => ['Business English', 'IELTS Preparation', 'Public Speaking'], 'status' => 'online'],
                    ['name' => 'Andi Firmansyah', 'title' => 'Senior Full-Stack Developer', 'cat' => 'Teknologi', 'rating' => '4.9', 'reviews' => '128', 'sessions' => '340', 'price' => '150.000', 'tags' => ['Laravel Middleware', 'React Hooks', 'API Design'], 'status' => 'online'],
                    ['name' => 'Priya Ratnasari', 'title' => 'Business Analyst & PM', 'cat' => 'Professional', 'rating' => '4.9', 'reviews' => '112', 'sessions' => '290', 'price' => '200.000', 'tags' => ['Product Strategy', 'Agile/Scrum', 'User Story Mapping'], 'status' => 'online'],
                    ['name' => 'Sari Dewi Putri', 'title' => 'Data Scientist & ML Engineer', 'cat' => 'Teknologi', 'rating' => '4.8', 'reviews' => '95', 'sessions' => '210', 'price' => '175.000', 'tags' => ['Python Pandas', 'Machine Learning', 'TensorFlow'], 'status' => 'online'],
                    ['name' => 'Budi Santoso', 'title' => 'Matematika & Fisika SMA/Universitas', 'cat' => 'Akademis', 'rating' => '4.8', 'reviews' => '204', 'sessions' => '520', 'price' => '85.000', 'tags' => ['Kalkulus', 'Aljabar Linear', 'Fisika Mekanika'], 'status' => 'online'],
                    ['name' => 'Reza Mahendra', 'title' => 'UI/UX Designer & Frontend Dev', 'cat' => 'Professional', 'rating' => '4.7', 'reviews' => '73', 'sessions' => '180', 'price' => '125.000', 'tags' => ['Figma Advanced', 'Tailwind CSS', 'Design System'], 'status' => 'full']
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
                        <div class="w-20 h-20 rounded-2xl border-4 border-white overflow-hidden bg-slate-200">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($tutor['name']) }}&background=random" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-5 h-5 {{ $tutor['status'] == 'online' ? 'bg-emerald-500' : 'bg-slate-400' }} border-4 border-white rounded-full"></div>
                    </div>
                </div>

                <div class="p-8 pt-4 flex-grow">
                    <h3 class="text-xl font-bold text-[#1a3652] mb-1">{{ $tutor['name'] }}</h3>
                    <p class="text-xs font-medium text-slate-400 mb-4">{{ $tutor['title'] }}</p>
                    
                    <div class="flex items-center gap-4 text-xs font-bold mb-6">
                        <span class="flex items-center gap-1 text-yellow-500">
                            <i class="fas fa-star"></i> {{ $tutor['rating'] }} <span class="text-slate-300">({{ $tutor['reviews'] }})</span>
                        </span>
                        <span class="text-slate-300 flex items-center gap-1">
                            <i class="fas fa-user-friends"></i> {{ $tutor['sessions'] }} sesi
                        </span>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-8">
                        @foreach($tutor['tags'] as $tag)
                            <span class="px-3 py-1 bg-slate-50 text-[10px] font-bold text-slate-500 rounded-lg">{{ $tag }}</span>
                        @endforeach
                        <span class="px-3 py-1 bg-slate-50 text-[10px] font-bold text-slate-500 rounded-lg">+1</span>
                    </div>

                    <div class="flex items-center justify-between mt-auto border-t border-slate-50 pt-6">
                        <div>
                            <p class="text-[10px] font-bold text-slate-300 uppercase tracking-tighter">Mulai dari</p>
                            <p class="text-lg font-black text-[#1a3652]">Rp{{ $tutor['price'] }}<span class="text-[10px] font-medium text-slate-400">/jam</span></p>
                        </div>
                        <div class="flex gap-2">
                            <button class="px-4 py-2 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-600 hover:bg-slate-50 transition-all">Profil</button>
                            @if($tutor['status'] == 'full')
                                <button class="px-4 py-2 bg-slate-100 text-slate-400 rounded-xl text-xs font-bold flex items-center gap-2 cursor-not-allowed">
                                    <i class="fas fa-video-slash"></i> Penuh
                                </button>
                            @else
                                <button class="px-4 py-2 bg-[#1a3652] text-white rounded-xl text-xs font-bold flex items-center gap-2 hover:bg-[#132a41] transition-all shadow-lg shadow-[#1a3652]/10">
                                    <i class="fas fa-video"></i> Booking
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <footer class="bg-[#1a3652] text-white pt-20 pb-10 px-8">
        <div class="max-w-7xl mx-auto text-center md:text-left">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-20">
                <div class="space-y-6">
                    <div class="flex items-center justify-center md:justify-start gap-2">
                        <div class="bg-white/20 p-2 rounded-lg">
                            <i class="fas fa-book-open text-xl text-white"></i>
                        </div>
                        <span class="text-2xl font-bold tracking-tight text-white">AjarIn</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">Platform micro-learning yang menghubungkan pelajar dengan pengajar ahli.</p>
                </div>
                @foreach(['Platform' => ['Cari Tutor', 'Dashboard'], 'Kategori' => ['Teknologi', 'Akademis'], 'Perusahaan' => ['Tentang Kami', 'Kontak']] as $title => $links)
                <div>
                    <h5 class="font-bold mb-6 text-sm tracking-wide uppercase">{{ $title }}</h5>
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
                    <a href="#">Privasi</a>
                    <a href="#">Syarat</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>