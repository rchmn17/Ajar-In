

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>AjarIn - Platform Micro-Learning</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .bg-custom-dark { background-color: #1a2e3e; }
        .bg-card-dark { background-color: rgba(255, 255, 255, 0.05); }
    </style>
</head>
<body class="bg-custom-dark text-white min-h-screen flex flex-col items-center justify-center p-6 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-[#233d52] to-[#1a2e3e]">

    <div class="text-center mb-12">
        <div class="flex items-center justify-center gap-2 mb-6">
            <div class="bg-white p-1.5 rounded-lg">
                <i data-lucide="book-open" class="text-slate-800 w-6 h-6"></i>
            </div>
            <h1 class="text-2xl font-bold tracking-tight">AjarIn</h1>
        </div>
        
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/10 text-xs text-slate-300 mb-8">
            <i data-lucide="sparkles" class="w-3 h-3 text-yellow-400"></i>
            Platform Micro-Learning #1 Indonesia
        </div>

        <h2 class="text-4xl font-bold mb-4">Selamat Datang di AjarIn</h2>
        <p class="text-slate-400 max-w-md mx-auto text-sm leading-relaxed">
            Belajar apa yang kamu butuhkan, bayar hanya apa yang kamu pelajari. 
            Pilih peranmu untuk memulai.
        </p>
    </div>

    <div class="grid md:grid-cols-2 gap-6 w-full max-w-4xl mb-12">
        
        <div class="bg-card-dark border border-white/10 rounded-3xl p-8 hover:border-amber-500/50 transition-all duration-300 group">
            <div class="bg-white/10 w-12 h-12 rounded-xl flex items-center justify-center mb-6">
                <i data-lucide="book" class="w-6 h-6 text-slate-300"></i>
            </div>
            <span class="text-[10px] uppercase tracking-widest bg-white/10 px-3 py-1 rounded-full text-slate-400 font-semibold">Pelajar</span>
            <h3 class="text-2xl font-bold mt-4 mb-3">Saya Ingin Belajar</h3>
            <p class="text-slate-400 text-sm mb-8 leading-relaxed">
                Temukan tutor terbaik sesuai kebutuhan dan jadwal belajarmu. Mulai perjalanan belajarmu sekarang.
            </p>
            <ul class="space-y-3 mb-10 text-sm text-slate-400">
                <li class="flex items-center gap-3">
                    <div class="w-1 h-1 bg-slate-500 rounded-full"></div> Akses ribuan tutor terverifikasi
                </li>
                <li class="flex items-center gap-3">
                    <div class="w-1 h-1 bg-slate-500 rounded-full"></div> Jadwal fleksibel sesuai kebutuhanmu
                </li>
                <li class="flex items-center gap-3">
                    <div class="w-1 h-1 bg-slate-500 rounded-full"></div> Bayar per sesi, tanpa komitmen
                </li>
            </ul>
            <a href="{{ route('student.login') }}" class="flex items-center gap-2 text-amber-500 font-semibold text-sm hover:gap-4 transition-all">
                Masuk sebagai <span class="text-amber-500">Pelajar</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

        <div class="bg-card-dark border border-white/10 rounded-3xl p-8 hover:border-amber-500/50 transition-all duration-300 group">
            <div class="bg-white/10 w-12 h-12 rounded-xl flex items-center justify-center mb-6">
                <i data-lucide="graduation-cap" class="w-6 h-6 text-slate-300"></i>
            </div>
            <span class="text-[10px] uppercase tracking-widest bg-white/10 px-3 py-1 rounded-full text-slate-400 font-semibold">Pengajar</span>
            <h3 class="text-2xl font-bold mt-4 mb-3">Saya Ingin Mengajar</h3>
            <p class="text-slate-400 text-sm mb-8 leading-relaxed">
                Bagikan keahlianmu, bantu pelajar berkembang, dan dapatkan penghasilan dari passion-mu.
            </p>
            <ul class="space-y-3 mb-10 text-sm text-slate-400">
                <li class="flex items-center gap-3">
                    <div class="w-1 h-1 bg-slate-500 rounded-full"></div> Atur jadwal dan tarif sendiri
                </li>
                <li class="flex items-center gap-3">
                    <div class="w-1 h-1 bg-slate-500 rounded-full"></div> Dashboard lengkap untuk monitoring
                </li>
                <li class="flex items-center gap-3">
                    <div class="w-1 h-1 bg-slate-500 rounded-full"></div> Komunitas pengajar profesional
                </li>
            </ul>
            <a href="{{ route('instructor.login') }}" class="flex items-center gap-2 text-amber-500 font-semibold text-sm hover:gap-4 transition-all">
                Masuk sebagai <span class="text-amber-500">Pengajar</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>

    </div>

    <div class="text-center space-y-4">
        <div class="flex items-center justify-center gap-4 text-xs text-slate-500">
            <div class="h-[1px] w-12 bg-white/10"></div>
            <span>atau</span>
            <div class="h-[1px] w-12 bg-white/10"></div>
        </div>
        
        <p class="text-sm text-slate-400">
            <i data-lucide="users" class="w-4 h-4 inline mr-1 mb-1"></i>
            Sudah punya akun? <a href="{{ route('student.login') }}" class="text-white underline underline-offset-4 font-medium hover:text-amber-400 transition-colors">Masuk di sini</a>
        </p>
        
        <a href="#" class="flex items-center justify-center gap-2 text-xs text-slate-500 hover:text-white transition-colors">
            <i data-lucide="arrow-left" class="w-3 h-3"></i>
            Kembali ke Beranda
        </a>
    </div>

    <script>
        // Inisialisasi Lucide Icons
        lucide.createIcons();
    </script>
</body>
</html>