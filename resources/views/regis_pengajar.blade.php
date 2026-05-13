<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AjarIn - Pendaftaran Pengajar</title>
    <!-- Vite Asset Loading -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="antialiased bg-white font-sans selection:bg-[#1a3652] selection:text-white">

    <!-- Container utama menggunakan flex-col untuk mobile dan flex-row untuk desktop -->
    <div class="flex flex-col lg:flex-row min-h-screen w-full">
        
        <!-- SIDEBAR KIRI: Sekarang mengikuti alur scroll halaman -->
        <!-- 'lg:sticky top-0 lg:h-screen' bisa ditambahkan jika ingin teks kiri tetap terlihat saat kanan di-scroll, 
             namun sesuai permintaan Anda agar 'ikut di-scroll', maka kita biarkan mengalir normal. -->
        <div class="w-full lg:w-[40%] bg-[#1a3652] text-white p-12 flex flex-col justify-between relative min-h-screen">
            
            <!-- Background Decoration -->
            <div class="absolute top-[-10%] right-[-10%] w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
            
            <div class="relative z-10">
                <!-- Logo -->
                <div class="flex items-center gap-3 mb-20">
                    <div class="bg-white/20 p-2 rounded-lg">
                        <i class="fas fa-book-open text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold tracking-tight">AjarIn</span>
                </div>

                <!-- Role Badge -->
                <div class="inline-flex items-center gap-2 bg-white/10 px-4 py-2 rounded-full text-[10px] font-semibold mb-8 border border-white/10 text-slate-300">
                    <i class="fas fa-chalkboard-teacher"></i>
                    Akun Pengajar
                </div>

                <!-- Hero Section -->
                <h1 class="text-4xl font-bold mb-6 leading-[1.2]">
                    Bagikan Keahlianmu, <br> 
                    <span class="text-slate-100">Raih Lebih Banyak</span>
                </h1>
                <p class="text-slate-400 mb-12 max-w-sm leading-relaxed text-sm">
                    Jadilah bagian dari komunitas pengajar AjarIn dan bantu ribuan pelajar menemukan cara belajar yang tepat.
                </p>

                <!-- Features -->
                <ul class="space-y-6 mb-16">
                    <li class="flex items-center gap-4 text-slate-300 group">
                        <div class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center transition-all group-hover:bg-white/20">
                            <i class="fas fa-calendar-check text-[11px]"></i>
                        </div>
                        <span class="text-sm">Atur jadwal & tarif sesuai kemauanmu</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300 group">
                        <div class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center transition-all group-hover:bg-white/20">
                            <i class="fas fa-users text-[11px]"></i>
                        </div>
                        <span class="text-sm">Jangkau pelajar dari seluruh Indonesia</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300 group">
                        <div class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center transition-all group-hover:bg-white/20">
                            <i class="fas fa-tachometer-alt text-[11px]"></i>
                        </div>
                        <span class="text-sm">Dashboard monitoring kemajuan pelajar</span>
                    </li>
                    <li class="flex items-center gap-4 text-slate-300 group">
                        <div class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center transition-all group-hover:bg-white/20">
                            <i class="fas fa-file-alt text-[11px]"></i>
                        </div>
                        <span class="text-sm">Buat quiz assessment pasca sesi</span>
                    </li>
                </ul>
            </div>

            <!-- Testimonial Card -->
            <div class="relative z-10 bg-white/5 border border-white/10 p-6 rounded-[2.5rem] backdrop-blur-md mt-auto">
                <p class="italic text-slate-300 text-[11px] mb-6 leading-relaxed">
                    "Sejak bergabung sebagai tutor AjarIn, saya bisa mengajar sesuai passion tanpa meninggalkan pekerjaan utama. Pendapatannya luar biasa!"
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-2xl bg-slate-400 flex items-center justify-center font-bold text-xs uppercase">AF</div>
                    <div>
                        <p class="font-bold text-xs">Ahmad Fauzi</p>
                        <p class="text-[10px] text-slate-500 font-medium">Tutor Matematika • 4.9 <i class="fas fa-star text-yellow-500"></i> • 200+ sesi</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- KOLOM KANAN: Form Pendaftaran -->
        <div class="w-full lg:w-[60%] p-8 md:p-16 lg:p-20 bg-white">
            <div class="max-w-2xl mx-auto">
                <!-- Back Link -->
                <a href="#" class="inline-flex items-center text-slate-500 text-xs font-semibold mb-12 hover:text-[#1a3652] transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali ke Login
                </a>

                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-slate-100 p-2 rounded-lg text-slate-500">
                        <i class="fas fa-user-graduate text-xs"></i>
                    </div>
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em]">Pendaftaran Pengajar</span>
                </div>

                <h2 class="text-3xl font-extrabold text-[#1a3652] mb-2">Buat Akun Pengajar</h2>
                <p class="text-slate-400 text-sm mb-12">Lengkapi profil profesionalmu untuk mulai mengajar.</p>

                <form action="#" method="POST" class="space-y-12">
                    @csrf
                    
                    <!-- Section: Informasi Dasar -->
                    <div class="space-y-6">
                        <div class="relative flex justify-center text-[10px] font-black uppercase tracking-[0.25em] text-slate-300">
                            <span class="bg-white px-4 z-10">Informasi Dasar</span>
                            <div class="absolute inset-y-1/2 w-full border-t border-slate-100"></div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 ml-1">Nama Lengkap <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300">
                                    <i class="far fa-user"></i>
                                </span>
                                <input type="text" placeholder="Nama lengkap sesuai KTP" class="w-full pl-11 pr-4 py-4 bg-slate-50 border border-slate-100 rounded-[1.25rem] focus:bg-white focus:border-[#1a3652] focus:ring-4 focus:ring-[#1a3652]/5 transition-all outline-none text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-700 ml-1">Umur <span class="text-red-500">*</span></label>
                                <input type="text" placeholder="Mis. 28" class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-[1.25rem] focus:bg-white focus:border-[#1a3652] outline-none text-sm transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-700 ml-1">Kewarganegaraan <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300">
                                        <i class="fas fa-globe-asia"></i>
                                    </span>
                                    <select class="w-full pl-11 pr-10 py-4 bg-slate-50 border border-slate-100 rounded-[1.25rem] appearance-none focus:bg-white focus:border-[#1a3652] outline-none text-sm transition-all">
                                        <option value=""></option>
                                        <option value="ID">Indonesia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section: Keamanan Akun -->
                    <div class="space-y-6">
                        <div class="relative flex justify-center text-[10px] font-black uppercase tracking-[0.25em] text-slate-300">
                            <span class="bg-white px-4 z-10">Keamanan Akun</span>
                            <div class="absolute inset-y-1/2 w-full border-t border-slate-100"></div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 ml-1">Alamat Email <span class="text-red-500">*</span></label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300">
                                    <i class="far fa-envelope"></i>
                                </span>
                                <input type="email" placeholder="nama@email.com" class="w-full pl-11 pr-4 py-4 bg-slate-50 border border-slate-100 rounded-[1.25rem] focus:bg-white outline-none text-sm">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-700 ml-1">Password <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" placeholder="Min. 8 karakter" class="w-full pl-11 pr-12 py-4 bg-slate-50 border border-slate-100 rounded-[1.25rem] focus:bg-white outline-none text-sm">
                                </div>
                            </div>
                            <div class="space-y-2">
                                <label class="block text-xs font-bold text-slate-700 ml-1">Konfirmasi Password <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-slate-300">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                    <input type="password" placeholder="Ulangi password" class="w-full pl-11 pr-12 py-4 bg-slate-50 border border-slate-100 rounded-[1.25rem] focus:bg-white outline-none text-sm">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section: Profil Profesional -->
                    <div class="space-y-6 pb-12">
                        <div class="relative flex justify-center text-[10px] font-black uppercase tracking-[0.25em] text-slate-300">
                            <span class="bg-white px-4 z-10">Profil Profesional</span>
                            <div class="absolute inset-y-1/2 w-full border-t border-slate-100"></div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-700 ml-1">Tentang Saya <span class="text-red-500">*</span></label>
                            <textarea rows="4" placeholder="Ceritakan pengalaman mengajar Anda..." class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-3xl focus:bg-white focus:border-[#1a3652] outline-none text-sm resize-none transition-all"></textarea>
                        </div>

                        <!-- CTA Button -->
                        <div class="pt-8">
                            <button type="submit" class="w-full bg-[#1a3652] text-white py-4 rounded-[1.25rem] font-bold text-sm shadow-xl shadow-slate-200 hover:bg-[#132a41] hover:-translate-y-0.5 transition-all active:scale-[0.98]">
                                Buat Akun Pengajar
                            </button>
                            <p class="text-center text-xs text-slate-500 mt-10 font-medium">
                                Sudah punya akun? <a href="#" class="text-[#1a3652] font-black hover:underline">Masuk di sini</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>