<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Tutor Terbaik - AjarIn</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#f8fafc] font-sans antialiased text-slate-800 min-h-screen relative overflow-x-hidden">

    <div id="bg-content-wrapper" class="transition-all duration-300 filter blur-[2px] brightness-50 pointer-events-none select-none">
        
        <nav class="bg-[#1a3652] text-white px-8 py-4 flex items-center justify-between sticky top-0 z-40 shadow-md">
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
                    <button class="bg-white/10 text-white px-6 py-4 rounded-xl border border-white/20 font-bold text-sm flex items-center gap-2 hover:bg-white/20 transition-all whitespace-nowrap">
                        <i class="fas fa-sliders-h"></i> Filter
                    </button>
                    <button id="open-modal-btn" class="bg-[#e2d1b9] text-[#1a3652] px-6 py-4 rounded-xl font-bold text-sm shadow-lg hover:bg-[#d4c1a8] transition-all whitespace-nowrap">
                        Request Match
                    </button>
                </div>

                <div class="space-y-5">
                    <div class="flex flex-wrap gap-3">
                        @foreach(['Semua', 'Teknologi', 'Akademis', 'Professional', 'Bahasa'] as $cat)
                            <button class="px-6 py-2 rounded-full text-sm font-bold transition-all {{ $cat == 'Semua' ? 'bg-white text-[#1a3652]' : 'bg-white/10 text-white hover:bg-white/20 border border-white/10' }}">
                                {{ $cat }}
                            </button>
                        @endforeach
                    </div>

                    <div class="flex flex-wrap gap-2">
                        @foreach(['Laravel', 'React', 'Python', 'Machine Learning', 'UI/UX Design', 'IELTS', 'Matematika', 'Data Science', 'Product Management', 'English'] as $tag)
                            <button class="px-4 py-1.5 bg-white rounded-full text-[11px] font-bold text-[#1a3652] hover:bg-slate-100 transition-all shadow-sm">
                                {{ $tag }}
                            </button>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <main class="max-w-7xl mx-auto px-8 mt-12">
            <p class="text-slate-400 text-xs font-bold mb-8 uppercase tracking-widest">Menampilkan <span class="text-slate-800">6</span> pengajar</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
                @php
                    $tutors = [
                        ['name' => 'Alicia Tanoto', 'title' => 'English & IELTS Specialist', 'cat' => 'Bahasa', 'rating' => '5', 'reviews' => '88', 'sessions' => '160', 'price' => '120.000', 'tags' => ['Business English', 'IELTS Preparation'], 'status' => 'online'],
                        ['name' => 'Andi Firmansyah', 'title' => 'Senior Full-Stack Developer', 'cat' => 'Teknologi', 'rating' => '4.9', 'reviews' => '128', 'sessions' => '340', 'price' => '150.000', 'tags' => ['Laravel Middleware', 'React Hooks'], 'status' => 'online'],
                        ['name' => 'Priya Ratnasari', 'title' => 'Business Analyst & PM', 'cat' => 'Professional', 'rating' => '4.9', 'reviews' => '112', 'sessions' => '290', 'price' => '200.000', 'tags' => ['Product Strategy', 'Agile/Scrum'], 'status' => 'online'],
                        ['name' => 'Sari Dewi Putri', 'title' => 'Data Scientist & ML Engineer', 'cat' => 'Teknologi', 'rating' => '4.8', 'reviews' => '95', 'sessions' => '210', 'price' => '175.000', 'tags' => ['Python Pandas', 'Machine Learning'], 'status' => 'online'],
                        ['name' => 'Budi Santoso', 'title' => 'Matematika & Fisika SMA', 'cat' => 'Akademis', 'rating' => '4.8', 'reviews' => '204', 'sessions' => '520', 'price' => '85.000', 'tags' => ['Kalkulus', 'Aljabar Linear'], 'status' => 'online'],
                        ['name' => 'Reza Mahendra', 'title' => 'UI/UX Designer', 'cat' => 'Professional', 'rating' => '4.7', 'reviews' => '73', 'sessions' => '180', 'price' => '125.000', 'tags' => ['Figma Advanced', 'Tailwind CSS'], 'status' => 'full']
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
    </div>


    <div id="request-matching-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/40 backdrop-blur-[2px] transition-all duration-300">
        
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden flex flex-col animate-in fade-in zoom-in-95 duration-200">
            
            <div class="bg-[#1a3652] text-white px-6 py-4 flex items-center justify-between">
                <div>
                    <h2 class="text-base font-bold tracking-tight">Request Matching</h2>
                    <p class="text-[11px] text-slate-300 font-medium mt-0.5">Temukan pengajar yang tepat untukmu</p>
                </div>
                <button type="button" id="close-modal-btn" class="w-7 h-7 rounded-full bg-white/10 flex items-center justify-center text-white/80 hover:bg-white/20 hover:text-white transition-all">
                    <i class="fas fa-times text-xs"></i>
                </button>
            </div>

            <form action="#" method="POST" class="p-6 space-y-5 overflow-y-auto max-h-[calc(100vh-120px)]">
                @csrf

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-700">Saya ingin belajar...</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-slate-400 text-sm">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" name="skill_target" placeholder="Ketik skill spesifik (cth: Laravel Middleware)" required
                            class="w-full pl-10 pr-4 py-3 bg-[#f8fafc] border border-slate-100 rounded-xl text-xs font-medium focus:bg-white focus:border-slate-300 focus:outline-none transition-all placeholder:text-slate-400">
                    </div>
                </div>

                <div class="space-y-2">
                    <div class="flex justify-between items-center">
                        <label class="text-xs font-bold text-slate-700">Durasi Belajar</label>
                        <span id="duration-badge" class="text-xs font-bold text-[#1a3652] bg-blue-50 border border-blue-100/40 px-2.5 py-0.5 rounded-md">Selama 2 jam</span>
                    </div>
                    <div class="space-y-1">
                        <input type="range" id="duration-slider" min="1" max="10" value="2" name="durasi_jam"
                            class="w-full h-1.5 bg-slate-100 rounded-lg appearance-none cursor-pointer accent-[#1a3652]">
                        <div class="flex justify-between text-[10px] text-slate-400 font-bold px-0.5">
                            <span>1 jam</span>
                            <span>10 jam</span>
                        </div>
                    </div>
                </div>

                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-slate-700">Ceritakan kebutuhanmu</label>
                    <textarea name="deskripsi_kebutuhan" rows="4" required
                        placeholder="Misal: Saya sedang membangun API dengan Laravel dan sedang stuck di bagian middleware multirole. Ingin dibimbing step-by-step..."
                        class="w-full px-4 py-3 bg-[#f8fafc] border border-slate-100 rounded-xl text-xs font-medium focus:bg-white focus:border-slate-300 focus:outline-none transition-all placeholder:text-slate-400/80 resize-none leading-relaxed"></textarea>
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-700">Budget per jam <span class="text-slate-400 font-normal">(opsional)</span></label>
                    <div class="grid grid-cols-3 gap-2.5">
                        <label class="cursor-pointer group">
                            <input type="radio" name="budget_range" value="under_100" class="sr-only peer">
                            <div class="py-2.5 text-center border border-slate-200 rounded-xl text-xs font-bold text-slate-600 transition-all 
                                peer-checked:bg-[#1a3652] peer-checked:text-white peer-checked:border-transparent hover:bg-slate-50 peer-checked:hover:bg-[#1a3652]">
                                &lt; 100rb
                            </div>
                        </label>
                        <label class="cursor-pointer group">
                            <input type="radio" name="budget_range" value="100_200" checked class="sr-only peer">
                            <div class="py-2.5 text-center border border-slate-200 rounded-xl text-xs font-bold text-slate-600 transition-all 
                                peer-checked:bg-[#1a3652] peer-checked:text-white peer-checked:border-transparent hover:bg-slate-50 peer-checked:hover:bg-[#1a3652]">
                                100-200rb
                            </div>
                        </label>
                        <label class="cursor-pointer group">
                            <input type="radio" name="budget_range" value="above_200" class="sr-only peer">
                            <div class="py-2.5 text-center border border-slate-200 rounded-xl text-xs font-bold text-slate-600 transition-all 
                                peer-checked:bg-[#1a3652] peer-checked:text-white peer-checked:border-transparent hover:bg-slate-50 peer-checked:hover:bg-[#1a3652]">
                                &gt; 200rb
                            </div>
                        </label>
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" class="w-full py-3.5 bg-[#1a3652] hover:bg-[#12273c] text-white rounded-xl text-xs font-bold shadow-lg shadow-[#1a3652]/20 transition-all tracking-wide uppercase">
                        Temukan Pengajar Cocok
                    </button>
                </div>
            </form>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = document.getElementById('duration-slider');
            const badge = document.getElementById('duration-badge');

            if (slider && badge) {
                slider.addEventListener('input', function () {
                    badge.textContent = `Selama ${this.value} jam`;
                });
            }

            const modal = document.getElementById('request-matching-modal');
            const bgWrapper = document.getElementById('bg-content-wrapper');
            const openBtn = document.getElementById('open-modal-btn');
            const closeBtn = document.getElementById('close-modal-btn');

            function closeModal() {
                modal.classList.add('hidden');
                bgWrapper.classList.remove('blur-[2px]', 'brightness-50', 'pointer-events-none', 'select-none');
            }

            function openModal() {
                modal.classList.remove('hidden');
                bgWrapper.classList.add('blur-[2px]', 'brightness-50', 'pointer-events-none', 'select-none');
            }

            closeBtn.addEventListener('click', closeModal);
            openBtn.addEventListener('click', openModal);
            
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });
        });
    </script>
</body>
</html>