<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AjarIn - Masuk Pelajar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="antialiased bg-white font-sans">

    <div class="flex min-h-screen">
        <div class="hidden lg:flex lg:w-5/12 bg-[#1a3652] text-white p-12 flex-col justify-between relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/40 to-transparent"></div>
            
            <div class="relative z-10">
                <div class="flex items-center gap-3 mb-16">
                    <div class="bg-white/20 p-2 rounded-lg">
                        <i class="fas fa-book-open text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold tracking-tight">AjarIn</span>
                </div>

                <div class="inline-flex items-center gap-2 bg-white/10 px-4 py-1.5 rounded-full text-xs font-medium mb-8 border border-white/20">
                    <i class="fas fa-sparkles text-amber-400"></i>
                    Micro-Learning Platform
                </div>

                <h1 class="text-4xl font-bold mb-6 leading-[1.2]">
                    Belajar Apa yang <br> 
                    <span class="text-slate-400 font-medium">Kamu Butuhkan</span>
                </h1>
                <p class="text-slate-400 mb-12 max-w-sm leading-relaxed">
                    Hubungkan dirimu dengan pengajar terbaik. Tidak perlu kursus panjang — belajar spesifik, efisien, dan efektif.
                </p>

                <ul class="space-y-6">
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[10px]">
                            <i class="fas fa-book"></i>
                        </div>
                        <span class="text-sm">Belajar sesuai kebutuhan & jadwalmu</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[10px]">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <span class="text-sm">Pantau progress belajarmu secara real-time</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[10px]">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <span class="text-sm">Tutor terverifikasi & terpercaya</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[10px]">
                            <i class="fas fa-clock"></i>
                        </div>
                        <span class="text-sm">Bayar hanya untuk sesi yang kamu jalani</span>
                    </li>
                </ul>
            </div>

            <div class="relative z-10 bg-white/5 border border-white/10 p-6 rounded-3xl backdrop-blur-md mt-12">
                <p class="italic text-slate-300 text-sm mb-6 leading-relaxed">
                    "AjarIn mengubah cara saya belajar. Dalam 2 bulan, saya berhasil lulus ujian sertifikasi berkat tutor yang tepat!"
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-slate-400 border-2 border-white/20"></div>
                        <div>
                            <p class="font-bold text-sm">Sarah Amelia</p>
                            <p class="text-[10px] text-slate-500 font-medium">Pelajar AjarIn · Jakarta</p>
                        </div>
                    </div>
                    <div class="flex text-amber-500 text-[10px] gap-0.5">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-7/12 flex justify-center p-6 md:p-12">
            <div class="max-w-md w-full">
                <a href="#" class="inline-flex items-center text-slate-500 text-xs font-medium mb-10 hover:text-slate-800 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i> Ganti Peran
                </a>

                <h2 class="text-3xl font-extrabold text-slate-900 mb-3 tracking-tight">Masuk ke AjarIn</h2>
                <p class="text-slate-500 text-sm mb-10">Pilih role dan masukkan kredensial akunmu.</p>

                <div class="flex p-1.5 bg-slate-100 rounded-2xl mb-6">
                    <a href="{{ route('student.login') }}" class="flex-1 py-2.5 text-xs font-bold bg-white text-slate-900 rounded-xl shadow-sm border border-slate-200 flex items-center justify-center gap-2" wire:navigate>
                        <i class="fas fa-book-open"></i> Pelajar
                    </a>
                    <a href="{{ route('instructor.login') }}" class="flex-1 py-2.5 text-xs font-bold text-slate-400 rounded-xl flex items-center justify-center gap-2 hover:text-slate-600 transition" wire:navigate>
                        <i class="fas fa-graduation-cap"></i> Pengajar
                    </a>
                </div>

                <div class="bg-slate-50 border border-slate-200 px-4 py-3 rounded-2xl mb-8 flex items-start gap-3">
                    <i class="fas fa-book text-slate-400 mt-0.5 text-xs"></i>
                    <p class="text-[11px] text-slate-600 leading-normal">
                        Masuk sebagai <span class="font-bold">Pelajar</span>. Environment dan data terpisah.
                    </p>
                </div>

                <form action="{{ url('/student/login') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="space-y-2">
                        <label class="block text-xs font-bold text-slate-700 ml-1">Alamat Email</label>
                        <div class="relative group">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 group-focus-within:text-slate-900 transition-colors">
                                <i class="far fa-envelope"></i>
                            </span>
                            <input type="email" name="email" placeholder="nama@email.com" class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:bg-white focus:ring-4 focus:ring-slate-900/5 focus:border-slate-900 outline-none transition-all text-sm">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center ml-1">
                            <label class="text-xs font-bold text-slate-700">Password</label>
                            <a href="#" class="text-[10px] font-bold text-slate-400 hover:text-slate-900">Lupa password?</a>
                        </div>
                        <div class="relative group">
                            <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-400 group-focus-within:text-slate-900 transition-colors">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" name="password" placeholder="Masukkan password" class="w-full pl-11 pr-12 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl focus:bg-white focus:ring-4 focus:ring-slate-900/5 focus:border-slate-900 outline-none transition-all text-sm">
                            <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-900">
                                <i class="far fa-eye text-xs"></i>
                            </button>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-[#1a3652] text-white py-4 rounded-2xl font-bold text-sm hover:bg-slate-900 hover:shadow-xl hover:shadow-slate-200 transition-all active:scale-[0.98]">
                        Masuk sebagai Pelajar
                    </button>
                </form>

                <p class="text-center text-xs text-slate-500 mt-10">
                    Belum punya akun? <a href="{{ route('student.register') }}" class="text-slate-900 font-extrabold hover:underline">Daftar Sekarang</a>
                </p>

            </div>
        </div>
    </div>

</body>
</html>