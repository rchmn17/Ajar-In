<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil - AjarIn</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .form-content { transition: all 0.2s ease-in-out; }
    </style>
</head>
<body class="bg-[#f8fafc] font-sans antialiased text-slate-800">

    <nav class="bg-[#1a3652] text-white px-8 py-4 flex items-center justify-between sticky top-0 z-50 shadow-sm">
        <div class="flex items-center gap-12">
            <div class="flex items-center gap-2">
                <div class="bg-white/20 p-1.5 rounded-lg">
                    <i class="fas fa-book-open text-lg"></i>
                </div>
                <span class="text-xl font-bold tracking-tight">AjarIn</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="#" class="hover:text-white transition-colors">Cari Tutor</a>
                <a href="{{ route('pelajar.dashboard') }}" class="hover:text-white transition-colors">Dashboard</a>
                <a href="#" class="hover:text-white transition-colors">Monitoring</a>
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
            
            <div class="relative group py-2">
                <div class="flex items-center gap-3 bg-white/10 pl-2 pr-4 py-1.5 rounded-full border border-white/10 cursor-pointer">
                    <div class="w-8 h-8 rounded-full bg-slate-400 flex items-center justify-center font-bold text-xs uppercase">RP</div>
                    <span class="text-sm font-semibold">Rizky</span>
                    <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                </div>
                <div class="absolute right-0 top-full mt-1 w-52 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 text-slate-700 hidden group-hover:block transition-all z-50">
                    <div class="px-4 py-2.5 border-b border-slate-50">
                        <p class="text-xs font-black text-[#1a3652] leading-tight">Rizky Pratama</p>
                        <p class="text-[10px] text-slate-400 font-medium">learner@ajarin.id</p>
                    </div>
                    <a href="{{ route('pelajar.dashboard') }}" class="flex items-center gap-3 px-4 py-2.5 text-xs font-bold text-slate-600 hover:bg-slate-50 hover:text-[#1a3652] transition-colors">
                        <i class="fas fa-th-large w-4 text-slate-400"></i> Dashboard
                    </a>
                    <a href="{{ route('pelajar.profile') }}" class="flex items-center gap-3 px-4 py-2.5 text-xs font-bold text-slate-600 hover:bg-slate-50 hover:text-[#1a3652] transition-colors">
                        <i class="far fa-user w-4 text-slate-400"></i> Profil Saya
                    </a>
                    <div class="border-t border-slate-50 mt-1 pt-1">
                        <a href="#" class="flex items-center gap-3 px-4 py-2.5 text-xs font-bold text-red-500 hover:bg-red-50/50 transition-colors">
                            <i class="fas fa-sign-out-alt w-4"></i> Keluar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-3xl mx-auto px-6 py-10">
        
        <a href="{{ route('pelajar.dashboard') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-[#1a3652] transition-colors mb-6 group">
            <i class="fas fa-arrow-left text-[10px] group-hover:-translate-x-0.5 transition-transform"></i> Kembali ke Dashboard
        </a>

        <div class="mb-8">
            <h1 class="text-2xl font-black text-[#1a3652] mb-1">Edit Profil</h1>
            <p class="text-xs text-slate-400 font-medium">Kelola informasi pribadi dan pengaturan akun kamu.</p>
        </div>

        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-8 space-y-8">
            
            <div class="flex items-center gap-5">
                <div class="relative group cursor-pointer">
                    <div class="w-16 h-16 rounded-full bg-slate-100 text-slate-600 font-black text-lg flex items-center justify-center border border-slate-200">
                        RP
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-[#1a3652] text-white rounded-full flex items-center justify-center text-[10px] border-2 border-white shadow-sm group-hover:bg-[#132a41] transition-colors">
                        <i class="fas fa-camera"></i>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-black text-[#1a3652] mb-0.5">Rizky Pratama</h3>
                    <p class="text-[11px] text-slate-400 font-medium mb-1">learner@ajarin.id</p>
                    <p class="text-[10px] text-slate-400 font-bold">Klik ikon kamera untuk ganti foto · Maks. 2MB</p>
                </div>
            </div>

            <div class="flex gap-2 bg-slate-50 p-1 rounded-xl border border-slate-100/70 max-w-md">
                <button type="button" onclick="switchProfileTab(this, 'basic')" class="tab-btn flex-1 py-2 text-center rounded-lg text-xs font-bold bg-[#1a3652] text-white shadow-sm flex items-center justify-center gap-2 transition-all">
                    <i class="far fa-id-card text-xs"></i> Informasi Dasar
                </button>
                <button type="button" onclick="switchProfileTab(this, 'academic')" class="tab-btn flex-1 py-2 text-center rounded-lg text-xs font-bold text-slate-500 hover:text-slate-800 flex items-center justify-center gap-2 transition-all">
                    <i class="fas fa-graduation-cap text-xs"></i> Info Akademik
                </button>
                <button type="button" onclick="switchProfileTab(this, 'security')" class="tab-btn flex-1 py-2 text-center rounded-lg text-xs font-bold text-slate-500 hover:text-slate-800 flex items-center justify-center gap-2 transition-all">
                    <i class="fas fa-lock text-xs"></i> Keamanan Akun
                </button>
            </div>

            <form id="form-basic" action="#" method="POST" class="form-content space-y-5 pt-2">
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-700 block">Nama Lengkap <span class="text-red-500">*</span></label>
                    <input type="text" value="Rizky Pratama" required class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652] focus:ring-4 focus:ring-[#1a3652]/10 transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-700 block">Email <span class="text-red-500">*</span></label>
                    <input type="email" value="learner@ajarin.id" required class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652] focus:ring-4 focus:ring-[#1a3652]/10 transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-700 block">Nomor WhatsApp <span class="text-slate-400 font-medium">(opsional)</span></label>
                    <div class="flex gap-2">
                        <div class="px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-xs font-bold text-slate-500 select-none">+62</div>
                        <input type="tel" placeholder="81234567890" value="81234567890" class="flex-1 px-4 py-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652] focus:ring-4 focus:ring-[#1a3652]/10 transition-all">
                    </div>
                    <p class="text-[10px] text-slate-400 font-semibold">*Hanya angka, tanpa awalan 0 atau +62</p>
                </div>
                <div class="pt-4">
                    <button type="submit" class="w-full py-3.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold shadow-lg shadow-[#1a3652]/10 flex items-center justify-center gap-2 hover:bg-[#12273c] transition-all">
                        <i class="fas fa-check text-[10px]"></i> Simpan Perubahan
                    </button>
                </div>
            </form>

            <form id="form-academic" action="#" method="POST" class="form-content space-y-5 pt-2 hidden">
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-700 block">Instansi / Sekolah / Universitas</label>
                    <input type="text" placeholder="Universitas Indonesia" value="Universitas Indonesia" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652] focus:ring-4 focus:ring-[#1a3652]/10 transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-700 block mb-1">Tingkat Pendidikan</label>
                    <div class="grid grid-cols-4 gap-2 text-center">
                        @php $levels = ['SD', 'SMP', 'SMA / SMK', 'D3', 'S1', 'S2', 'S3', 'Non-formal']; @endphp
                        @foreach($levels as $lvl)
                            <button type="button" onclick="selectEducationLevel(this)" class="edu-lvl-btn py-2 text-xs font-bold rounded-xl transition-all border
                                {{ $lvl == 'S1' ? 'bg-[#1a3652] text-white border-transparent' : 'bg-white border-slate-200 text-slate-600 hover:bg-slate-50' }}">
                                {{ $lvl }}
                            </button>
                        @endforeach
                    </div>
                    <input type="hidden" id="academic_level_hidden" name="tingkat_pendidikan" value="S1">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-700 block">Jurusan / Program Studi</label>
                    <input type="text" placeholder="Teknik Informatika" value="Teknik Informatika" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652] focus:ring-4 focus:ring-[#1a3652]/10 transition-all">
                </div>
                <div class="pt-4">
                    <button type="submit" class="w-full py-3.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold shadow-lg shadow-[#1a3652]/10 flex items-center justify-center gap-2 hover:bg-[#12273c] transition-all">
                        <i class="fas fa-check text-[10px]"></i> Simpan Perubahan
                    </button>
                </div>
            </form>

            <form id="form-security" action="#" method="POST" class="form-content space-y-5 pt-2 hidden">
                <div class="bg-amber-50 border border-amber-200 p-4 rounded-xl flex items-start gap-2.5 text-[11px] text-amber-800 leading-relaxed">
                    <i class="fas fa-exclamation-circle mt-0.5 text-amber-500"></i>
                    <p>Pastikan password baru kamu setidaknya 6 karakter dan tidak mudah ditebak.</p>
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-700 block">Password Saat Ini <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="password" value="********" required class="w-full pl-4 pr-10 py-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652] focus:ring-4 focus:ring-[#1a3652]/10 transition-all">
                        <button type="button" onclick="togglePasswordVisibility(this)" class="absolute inset-y-0 right-4 flex items-center text-slate-400 hover:text-slate-600"><i class="far fa-eye text-xs"></i></button>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-700 block">Password Baru <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="password" value="********" required class="w-full pl-4 pr-10 py-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652] focus:ring-4 focus:ring-[#1a3652]/10 transition-all">
                        <button type="button" onclick="togglePasswordVisibility(this)" class="absolute inset-y-0 right-4 flex items-center text-slate-400 hover:text-slate-600"><i class="far fa-eye text-xs"></i></button>
                    </div>
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-black text-slate-700 block">Konfirmasi Password Baru <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="password" value="********" required class="w-full pl-4 pr-10 py-3 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652] focus:ring-4 focus:ring-[#1a3652]/10 transition-all">
                        <button type="button" onclick="togglePasswordVisibility(this)" class="absolute inset-y-0 right-4 flex items-center text-slate-400 hover:text-slate-600"><i class="far fa-eye text-xs"></i></button>
                    </div>
                </div>
                <div class="pt-4">
                    <button type="submit" class="w-full py-3.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold shadow-lg shadow-[#1a3652]/10 flex items-center justify-center gap-2 hover:bg-[#12273c] transition-all">
                        <i class="fas fa-lock text-[10px]"></i> Ubah Password
                    </button>
                </div>
            </form>

        </div>
    </main>

    <footer class="bg-[#1a3652] text-white mt-20 pt-20 pb-10 px-8">
        <p class="text-center text-xs text-slate-500">© 2026 AjarIn. Semua hak dilindungi.</p>
    </footer>

    <script>
        function switchProfileTab(clickedBtn, targetTab) {
            const tabs = document.querySelectorAll('.tab-btn');
            tabs.forEach(tab => {
                tab.className = "tab-btn flex-1 py-2 text-center rounded-lg text-xs font-bold text-slate-500 hover:text-slate-800 flex items-center justify-center gap-2 transition-all";
            });
            clickedBtn.className = "tab-btn flex-1 py-2 text-center rounded-lg text-xs font-bold bg-[#1a3652] text-white shadow-sm flex items-center justify-center gap-2 transition-all";

            document.querySelectorAll('.form-content').forEach(form => { form.classList.add('hidden'); });
            document.getElementById(`form-${targetTab}`).classList.remove('hidden');
        }

        function selectEducationLevel(buttonElement) {
            document.querySelectorAll('.edu-lvl-btn').forEach(btn => {
                btn.className = "edu-lvl-btn py-2 text-xs font-bold rounded-xl transition-all border bg-white border-slate-200 text-slate-600 hover:bg-slate-50";
            });
            buttonElement.className = "edu-lvl-btn py-2 text-xs font-bold rounded-xl transition-all border bg-[#1a3652] text-white border-transparent";
            document.getElementById('academic_level_hidden').value = buttonElement.innerText.trim();
        }

        function togglePasswordVisibility(buttonElement) {
            const inputField = buttonElement.previousElementSibling;
            const eyeIcon = buttonElement.querySelector('i');
            if (inputField.type === "password") {
                inputField.type = "text";
                eyeIcon.className = "far fa-eye-slash text-xs text-[#1a3652]";
            } else {
                inputField.type = "password";
                eyeIcon.className = "far fa-eye text-xs text-slate-400";
            }
        }
    </script>
</body>
</html>