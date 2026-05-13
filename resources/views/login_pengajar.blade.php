<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AjarIn - Masuk Pengajar</title>
    <!-- Vite Integration -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-white font-sans antialiased">
    <div class="flex min-h-screen">
        
        <!-- Kolom Kiri: Hero/Branding (Sesuai AjarIn Login Pengajar_2.jpg) -->
        <div class="hidden lg:flex lg:w-1/2 bg-[#1a3652] text-white p-12 flex-col justify-between relative overflow-hidden">
            <!-- Background Decoration (Subtle Gradient) -->
            <div class="absolute inset-0 bg-gradient-to-br from-slate-800/50 to-transparent"></div>
            
            <div class="relative z-10">
                <div class="flex items-center gap-2 mb-16">
                    <div class="bg-white/20 p-2 rounded-lg">
                        <i class="fas fa-book-open text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold tracking-tight">AjarIn</span>
                </div>

                <div class="inline-flex items-center gap-2 bg-white/10 px-3 py-1 rounded-full text-xs mb-6 border border-white/20">
                    <i class="fas fa-sparkles text-[10px]"></i>
                    Micro-Learning Platform
                </div>

                <h1 class="text-4xl font-bold mb-4 leading-tight">
                    Belajar Apa yang <br> <span class="text-slate-300">Kamu Butuhkan</span>
                </h1>
                <p class="text-slate-400 mb-10 max-w-md">
                    Hubungkan dirimu dengan pengajar terbaik. Tidak perlu kursus panjang — belajar spesifik, efisien, dan efektif.
                </p>

                <ul class="space-y-6">
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center"><i class="fas fa-book text-xs"></i></div>
                        <span>Belajar sesuai kebutuhan & jadwalmu</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center"><i class="fas fa-chart-line text-xs"></i></div>
                        <span>Pantau progress belajarmu secara real-time</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center"><i class="fas fa-shield-alt text-xs"></i></div>
                        <span>Tutor terverifikasi & terpercaya</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center"><i class="fas fa-clock text-xs"></i></div>
                        <span>Bayar hanya untuk sesi yang kamu jalani</span>
                    </li>
                </ul>
            </div>

            <!-- Testimonial Section -->
            <div class="relative z-10 bg-white/5 border border-white/10 p-6 rounded-2xl backdrop-blur-sm">
                <p class="italic text-slate-300 mb-4">"AjarIn mengubah cara saya belajar. Dalam 2 bulan, saya berhasil lulus ujian sertifikasi berkat tutor yang tepat!"</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-slate-500"></div>
                        <div>
                            <p class="font-semibold text-sm">Sarah Amelia</p>
                            <p class="text-xs text-slate-500">Pelajar AjarIn · Jakarta</p>
                        </div>
                    </div>
                    <div class="flex text-yellow-500 text-xs">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Form Login -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="max-w-md w-full">
                <a href="#" class="text-slate-500 text-sm mb-8 inline-block hover:text-slate-800 transition">
                    <i class="fas fa-arrow-left mr-2"></i> Ganti Peran
                </a>

                <h2 class="text-3xl font-bold text-slate-800 mb-2">Masuk ke AjarIn</h2>
                <p class="text-slate-500 mb-8">Pilih role dan masukkan kredensial akunmu.</p>

                <!-- Tab Role -->
                <div class="flex p-1 bg-slate-100 rounded-xl mb-6">
                    <a href="{{ route('login.pelajar') }}" class="flex-1 py-2 text-sm font-medium text-slate-500 rounded-lg flex items-center justify-center gap-2">
                        <i class="fas fa-book-reader"></i> Pelajar
                    </a>
                    <a class="flex-1 py-2 text-sm font-medium bg-[#1a3652] text-white rounded-lg shadow-sm flex items-center justify-center gap-2">
                        <i class="fas fa-chalkboard-teacher"></i> Pengajar
                    </a>
                </div>

                <!-- Info Alert -->
                <div class="bg-slate-50 border border-slate-200 p-4 rounded-xl mb-6 flex gap-3">
                    <i class="fas fa-graduation-cap text-slate-400 mt-1"></i>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Masuk sebagai <strong>Pengajar</strong>. Environment dan data terpisah.
                    </p>
                </div>

                <!-- Login Form -->
                <form action="#" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-2">Alamat Email</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                                <i class="far fa-envelope"></i>
                            </span>
                            <input type="email" placeholder="nama@email.com" class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-800 focus:border-transparent outline-none transition">
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between mb-2">
                            <label class="text-sm font-semibold text-slate-700">Password</label>
                            <a href="#" class="text-xs text-slate-400 hover:text-slate-600">Lupa password?</a>
                        </div>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" placeholder="Masukkan password" class="w-full pl-10 pr-10 py-3 border border-slate-200 rounded-xl focus:ring-2 focus:ring-slate-800 focus:border-transparent outline-none transition">
                            <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 cursor-pointer">
                                <i class="far fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-[#1a3652] text-white py-3 rounded-xl font-semibold hover:bg-slate-800 transition shadow-lg shadow-slate-200">
                        Masuk sebagai Pengajar
                    </button>
                </form>

                <p class="text-center text-sm text-slate-500 mt-8">
                    Belum punya akun? <a href="#" class="text-slate-800 font-bold hover:underline">Daftar Sekarang</a>
                </p>

                <!-- Akun Demo Section -->
                <div class="mt-10 p-6 bg-slate-50 rounded-2xl border border-slate-100">
                    <p class="text-[10px] font-bold text-slate-400 tracking-widest mb-4 uppercase">Akun Demo — Coba Langsung</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-3 rounded-xl border border-slate-200">
                            <p class="text-xs font-bold text-slate-700">Demo Pelajar</p>
                            <p class="text-[10px] text-slate-400">learner@ajarin.id</p>
                        </div>
                        <div class="bg-white p-3 rounded-xl border border-slate-200">
                            <p class="text-xs font-bold text-slate-700">Demo Pengajar</p>
                            <p class="text-[10px] text-slate-400">tutor@ajarin.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>