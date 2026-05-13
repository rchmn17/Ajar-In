<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AjarIn - Buat Akun Pelajar</title>
    <!-- Vite Integration -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="antialiased bg-white font-sans">

    <!-- Container utama: Hapus overflow jika ada agar scroll utama bekerja secara global -->
    <div class="flex flex-col lg:flex-row min-h-screen w-full">
        
        <!-- KOLOM KIRI: Perbaikan di sini -->
        <!-- 1. Hapus 'fixed' dan 'h-screen' agar tidak mengambang -->
        <!-- 2. Tambah 'min-h-screen' agar jika konten sedikit, background tetap penuh setinggi layar -->
        <!-- 3. Hapus 'overflow-hidden' -->
        <div class="hidden lg:flex lg:w-[40%] bg-[#1a3652] text-white p-12 flex-col justify-between relative min-h-screen">
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/20 to-transparent"></div>
            
            <div class="relative z-10">
                <!-- Logo -->
                <div class="flex items-center gap-3 mb-20">
                    <div class="bg-white/20 p-2 rounded-lg">
                        <i class="fas fa-book-open text-xl text-white"></i>
                    </div>
                    <span class="text-2xl font-bold tracking-tight text-white">AjarIn</span>
                </div>

                <!-- Badge -->
                <div class="inline-flex items-center gap-2 bg-white/10 px-4 py-1.5 rounded-full text-[10px] font-medium mb-8 border border-white/20">
                    <i class="fas fa-user-graduate text-slate-300"></i>
                    Akun Pelajar
                </div>

                <!-- Hero Text -->
                <h1 class="text-4xl font-bold mb-6 leading-tight">
                    Mulai Perjalanan <br> Belajarmu Hari Ini
                </h1>
                <p class="text-slate-400 mb-12 max-w-sm leading-relaxed text-sm">
                    Bergabung dengan ribuan pelajar yang sudah menemukan cara belajar yang efisien dan menyenangkan bersama AjarIn.
                </p>

                <!-- Feature List -->
                <ul class="space-y-6">
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[10px]">
                            <i class="fas fa-book"></i>
                        </div>
                        <span class="text-sm">Pilih tutor spesifik sesuai kebutuhanmu</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[10px]">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <span class="text-sm">Lacak progress dengan assessment quiz</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[10px]">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <span class="text-sm">Aman, terverifikasi, terpercaya</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300">
                        <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-[10px]">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <span class="text-sm">Jadwal fleksibel kapan saja, di mana saja</span>
                    </li>
                </ul>
            </div>

            <!-- Stats Box -->
            <div class="relative z-10 grid grid-cols-3 gap-4 mt-12">
                <div class="bg-white/5 border border-white/10 p-4 rounded-2xl text-center backdrop-blur-sm">
                    <p class="text-xl font-bold">2.5K+</p>
                    <p class="text-[9px] text-slate-400 uppercase tracking-widest font-bold">Pelajar Aktif</p>
                </div>
                <div class="bg-white/5 border border-white/10 p-4 rounded-2xl text-center backdrop-blur-sm">
                    <p class="text-xl font-bold">500+</p>
                    <p class="text-[9px] text-slate-400 uppercase tracking-widest font-bold">Tutor Tersedia</p>
                </div>
                <div class="bg-white/5 border border-white/10 p-4 rounded-2xl text-center backdrop-blur-sm">
                    <p class="text-xl font-bold">98%</p>
                    <p class="text-[9px] text-slate-400 uppercase tracking-widest font-bold">Kepuasan</p>
                </div>
            </div>
        </div>

        <!-- KOLOM KANAN: Perbaikan di sini -->
        <!-- 1. Hapus 'ml-auto' dan 'overflow-y-auto' agar scroll mengikuti browser secara alami -->
        <div class="w-full lg:w-[60%] p-8 md:p-16 bg-white">
            <div class="max-w-xl mx-auto">
                <!-- Back Link -->
                <a href="#" class="inline-flex items-center text-slate-500 text-xs font-medium mb-10 hover:text-slate-800 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Login
                </a>

                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-slate-100 p-2 rounded-lg text-slate-600">
                        <i class="fas fa-book-open text-sm"></i>
                    </div>
                    <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Pendaftaran Pelajar</span>
                </div>

                <h2 class="text-3xl font-extrabold text-[#1a3652] mb-2 tracking-tight">Buat Akun Pelajar</h2>
                <p class="text-slate-500 text-sm mb-12">Isi data di bawah ini untuk membuat akun pelajarmu.</p>

                <form action="#" method="POST" class="space-y-10">
                    @csrf
                    
                    <!-- Section: Informasi Pribadi -->
                    <div class="space-y-6">
                        <div class="relative flex justify-center text-[10px] font-black uppercase tracking-[0.2em] text-slate-300">
                            <span class="bg-white px-4 z-10">Informasi Pribadi</span>
                            <div class="absolute inset-y-1/2 w-full border-t border-slate-100"></div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 ml-1">Nama Lengkap <span class="text-red-500">*</span></label>
                            <div class="relative group">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300 group-focus-within:text-[#1a3652] transition-colors">
                                    <i class="far fa-user"></i>
                                </span>
                                <input type="text" placeholder="Masukkan nama lengkap" class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:ring-4 focus:ring-slate-900/5 focus:border-[#1a3652] outline-none transition-all text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-700 ml-1">Umur <span class="text-red-500">*</span></label>
                                <input type="text" placeholder="Mis. 20" class="w-full px-4 py-3.5 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:border-[#1a3652] outline-none transition-all text-sm">
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-700 ml-1">Kewarganegaraan <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300">
                                        <i class="fas fa-globe"></i>
                                    </span>
                                    <select class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:border-[#1a3652] outline-none transition-all text-sm appearance-none">
                                        <option value="">Pilih...</option>
                                        <option value="ID">Indonesia</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 ml-1">Jenjang Pendidikan <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300">
                                    <i class="fas fa-graduation-cap"></i>
                                </span>
                                <select class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:border-[#1a3652] outline-none transition-all text-sm appearance-none">
                                    <option value=""></option>
                                    <option>SMA / Sederajat</option>
                                    <option>Diploma (D3)</option>
                                    <option>Sarjana (S1)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Section: Akun & Keamanan -->
                    <div class="space-y-6">
                        <div class="relative flex justify-center text-[10px] font-black uppercase tracking-[0.2em] text-slate-300">
                            <span class="bg-white px-4 z-10">Akun & Keamanan</span>
                            <div class="absolute inset-y-1/2 w-full border-t border-slate-100"></div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 ml-1">Alamat Email <span class="text-red-500">*</span></label>
                            <div class="relative group">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300 group-focus-within:text-[#1a3652] transition-colors">
                                    <i class="far fa-envelope"></i>
                                </span>
                                <input type="email" placeholder="nama@email.com" class="w-full pl-11 pr-4 py-3.5 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:border-[#1a3652] outline-none transition-all text-sm">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 ml-1">Password <span class="text-red-500">*</span></label>
                            <div class="relative group">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300 group-focus-within:text-[#1a3652] transition-colors">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" placeholder="Min. 8 karakter + angka" class="w-full pl-11 pr-12 py-3.5 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:border-[#1a3652] outline-none transition-all text-sm">
                                <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-300 hover:text-slate-600 transition-colors">
                                    <i class="far fa-eye text-xs"></i>
                                </button>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 ml-1">Konfirmasi Password <span class="text-red-500">*</span></label>
                            <div class="relative group">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300 group-focus-within:text-[#1a3652] transition-colors">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" placeholder="Ulangi password" class="w-full pl-11 pr-12 py-3.5 bg-slate-50 border border-slate-100 rounded-2xl focus:bg-white focus:border-[#1a3652] outline-none transition-all text-sm">
                                <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-300 hover:text-slate-600 transition-colors">
                                    <i class="far fa-eye text-xs"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Action -->
                    <div class="pt-6">
                        <button type="submit" class="w-full bg-[#1a3652] text-white py-4 rounded-2xl font-bold text-sm hover:bg-[#0f253a] hover:shadow-2xl hover:shadow-slate-200 transition-all active:scale-[0.98]">
                            Buat Akun Pelajar
                        </button>
                        <p class="text-center text-xs text-slate-500 mt-10">
                            Sudah punya akun? <a href="#" class="text-[#1a3652] font-black hover:underline">Masuk di sini</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>