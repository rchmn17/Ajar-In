<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil Pengajar - AjarIn</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .form-content { display: none; }
        .form-content.active { display: block; }
        .tab-btn.active {
            background-color: #1a3652;
            color: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-[#f8fafc] font-sans antialiased text-slate-800 min-h-screen relative">

    <nav class="bg-[#1a3652] text-white px-8 py-4 flex items-center justify-between sticky top-0 z-40 shadow-sm">
        <div class="flex items-center gap-12">
            <div class="flex items-center gap-2">
                <div class="bg-white/20 p-1.5 rounded-lg"><i class="fas fa-book-open text-lg"></i></div>
                <span class="text-xl font-bold tracking-tight">AjarIn</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="#" class="hover:text-white transition-colors">Cari Tutor</a>
                <a href="{{ route('pengajar.dashboard') }}" class="hover:text-white transition-colors">Dashboard Pengajar</a>
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
                    <span class="text-sm font-semibold">{{ Auth::user()->name }}</span>
                    <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                </div>
                <div class="absolute right-0 top-full mt-1 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 text-slate-700 hidden group-hover:block transition-all duration-200 z-50">
                    <div class="px-4 py-3 border-b border-slate-50">
                        <p class="text-sm font-black text-[#1a3652] leading-tight">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-slate-400 font-medium mt-0.5">{{ Auth::user()->email }}</p>
                    </div>
                    <a href="{{ route('pengajar.dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-xs font-bold text-slate-600 hover:bg-slate-50 hover:text-[#1a3652] transition-colors">
                        <i class="fas fa-th-large w-4 text-slate-400 text-sm"></i> Dashboard
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 text-xs font-bold text-[#1a3652] bg-slate-50">
                        <i class="far fa-user w-4 text-[#1a3652] text-sm"></i> Profil Saya
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

    <main class="max-w-3xl mx-auto px-6 py-10">
        
        <a href="{{ route('pengajar.dashboard') }}" class="inline-flex items-center gap-2 text-xs font-bold text-slate-500 hover:text-[#1a3652] transition-colors mb-6 group">
            <i class="fas fa-arrow-left text-[10px] group-hover:-translate-x-0.5 transition-transform"></i> Kembali ke Dashboard
        </a>

        <div class="mb-8">
            <h1 class="text-2xl font-black text-[#1a3652] mb-1">Edit Profil Pengajar</h1>
            <p class="text-xs text-slate-400 font-medium">Perbarui profil profesional dan pengaturan akun kamu.</p>
        </div>

        <div class="bg-white rounded-3xl border border-slate-100 shadow-sm p-6 mb-6">
            <div class="flex items-center gap-5">
                <div class="relative group cursor-pointer">
                    <div class="w-16 h-16 rounded-full bg-slate-100 text-slate-600 font-black text-lg flex items-center justify-center border border-slate-200 uppercase">
                        AF
                    </div>
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-[#1a3652] text-white rounded-full flex items-center justify-center text-[10px] border-2 border-white shadow-sm group-hover:bg-[#132a41] transition-colors">
                        <i class="fas fa-camera"></i>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-black text-[#1a3652] mb-0.5">{{ Auth::user()->name }}</h3>
                    <p class="text-[11px] text-slate-400 font-medium mb-1">{{ Auth::user()->email }}</p>
                    <p class="text-[10px] text-slate-400 font-bold">Foto profesional · Maks. 2MB</p>
                </div>
            </div>
        </div>

        <div class="flex gap-2 bg-slate-50 p-1 rounded-xl border border-slate-100/70 max-w-md mb-6">
            <button type="button" onclick="switchProfileTab(this, 'basic')" class="tab-btn flex-1 py-2 text-center rounded-lg text-xs font-bold active text-slate-500 hover:text-slate-800 flex items-center justify-center gap-2 transition-all">
                <i class="far fa-user text-xs"></i> Informasi Dasar
            </button>
            <button type="button" onclick="switchProfileTab(this, 'professional')" class="tab-btn flex-1 py-2 text-center rounded-lg text-xs font-bold text-slate-500 hover:text-slate-800 flex items-center justify-center gap-2 transition-all">
                <i class="fas fa-graduation-cap text-xs"></i> Profil Profesional
            </button>
            <button type="button" onclick="switchProfileTab(this, 'rate')" class="tab-btn flex-1 py-2 text-center rounded-lg text-xs font-bold text-slate-500 hover:text-slate-800 flex items-center justify-center gap-2 transition-all">
                <i class="fas fa-lock text-xs"></i> Tarif & Akun
            </button>
        </div>

        <div id="tab-basic" class="form-content active bg-white rounded-3xl border border-slate-100 shadow-sm p-8 space-y-6">
            <div class="space-y-2">
                <label class="text-xs font-black text-slate-700 block">Nama Lengkap <span class="text-red-500">*</span></label>
                <input type="text" value="{{ Auth::user()->name }}" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652]">
            </div>
            <div class="space-y-2">
                <label class="text-xs font-black text-slate-700 block">Email <span class="text-red-500">*</span></label>
                <input type="email" value="{{ Auth::user()->email }}" required class="w-full px-4 py-3 border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652]">
            </div>
            <div class="space-y-2">
                <label class="text-xs font-black text-slate-700 block">Nomor Telepon</label>
                <div class="flex gap-2">
                    <div class="px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-xs font-bold text-slate-500 select-none">+62</div>
                    <input type="tel" value="{{ Auth::user()->phone }}" class="flex-1 px-4 py-3 border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652]">
                </div>
            </div>
            <div class="pt-4">
                <button type="button" class="w-full py-3.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold shadow-lg flex items-center justify-center gap-2 hover:bg-[#12273c]">
                    <i class="fas fa-check text-[10px]"></i> Simpan Perubahan
                </button>
            </div>
        </div>

        <div id="tab-professional" class="form-content bg-white rounded-3xl border border-slate-100 shadow-sm p-8 space-y-6">
            <div class="space-y-2">
                <label class="text-xs font-black text-slate-700 block">Deskripsi Diri (Biografi)</label>
                <div class="relative">
                    <textarea id="bio-textarea" oninput="countChar(this, 600, 'bio-count')" rows="4" maxlength="600" placeholder="Ceritakan pengalaman mengajar..." class="w-full px-4 py-3 border border-slate-200 rounded-xl text-xs font-semibold text-slate-700 outline-none focus:border-[#1a3652] resize-none leading-relaxed">Berpengalaman lebih dari 5 tahun dalam mengajar mata pelajaran Matematika tingkat SMA dan olimpiade akademik.</textarea>
                    <span id="bio-count" class="absolute bottom-3 right-4 text-[10px] font-bold text-slate-400">122/600</span>
                </div>
            </div>

            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <label class="text-xs font-black text-slate-700 block">Keahlian Spesifik</label>
                    <div class="flex items-center gap-3">
                        <span class="text-[10px] font-bold text-slate-400" id="skill-spec-count">1/10</span>
                        <button type="button" onclick="openSkillModal()" class="px-3 py-1.5 bg-[#1a3652] text-white text-[10px] font-black uppercase rounded-lg shadow-sm flex items-center gap-1.5"><i class="fas fa-plus text-[9px]"></i> Tambah Keahlian</button>
                    </div>
                </div>

                <div id="specific-skills-box" class="space-y-2">
                    <div class="border border-slate-100 bg-slate-50/40 rounded-xl p-3.5 flex justify-between items-center group">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-400 flex items-center justify-center text-xs">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div>
                                <h4 class="text-xs font-black text-[#1a3652]">Kalkulus</h4>
                                <p class="text-[10px] text-slate-400 font-medium">Saya ahli</p>
                            </div>
                        </div>
                        <div class="flex gap-1">
                            <button type="button" class="w-7 h-7 text-slate-400 hover:text-[#1a3652] rounded-md flex items-center justify-center text-xs"><i class="fas fa-pen text-[10px]"></i></button>
                            <button type="button" onclick="this.closest('.border').remove(); updateSpecificCount();" class="w-7 h-7 text-slate-400 hover:text-red-500 rounded-md flex items-center justify-center text-xs"><i class="far fa-trash-can text-[11px]"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div class="flex justify-between items-center border-b border-slate-50 pb-2">
                    <label class="text-xs font-black text-slate-700 block">Riwayat Pendidikan</label>
                    <button type="button" onclick="addEducationRow()" class="text-xs font-bold text-[#1a3652] hover:underline flex items-center gap-1"><i class="fas fa-plus text-[9px]"></i> Tambah</button>
                </div>
                
                <div id="education-container" class="space-y-4">
                    <div class="bg-slate-50/40 border border-slate-100 rounded-xl p-4 relative space-y-3">
                        <button type="button" onclick="this.parentNode.remove()" class="absolute top-4 right-4 text-slate-300 hover:text-red-500 text-xs"><i class="far fa-trash-can"></i></button>
                        <input type="text" value="S2 - Magister Pendidikan Matematika" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-bold text-slate-700 outline-none">
                        <input type="text" value="Universitas Indonesia" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-bold text-slate-700 outline-none">
                        <input type="text" value="2018" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-bold text-slate-700 outline-none">
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-xs font-black text-slate-700 block">Dokumen Pendukung (CV / Sertifikat)</label>
                <div class="border-2 border-dashed border-slate-200 bg-slate-50/30 rounded-xl p-6 text-center hover:border-slate-300 transition-colors cursor-pointer relative group">
                    <input type="file" class="absolute inset-0 opacity-0 cursor-pointer">
                    <i class="fas fa-cloud-upload-alt text-slate-400 text-xl mb-2"></i>
                    <p class="text-xs font-bold text-slate-500">Unggah Dokumen <span class="text-slate-400 font-medium">(PDF, JPG, PNG - Maks. 5MB)</span></p>
                </div>
            </div>

            <div class="pt-4">
                <button type="button" class="w-full py-3.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold shadow-lg flex items-center justify-center gap-2 hover:bg-[#12273c]">
                    <i class="fas fa-check text-[10px]"></i> Simpan Perubahan
                </button>
            </div>
        </div>

        <div id="tab-rate" class="form-content bg-white rounded-3xl border border-slate-100 shadow-sm p-8 space-y-6">
            <div class="space-y-4">
                <h3 class="text-sm font-black text-[#1a3652]">Tarif Mengajar</h3>
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 block">Tarif Per Jam (Rp)</label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-xs font-bold text-slate-400">Rp</span>
                        <input type="number" id="rate-input" value="150000" oninput="syncRateLabel(this.value)" class="w-full pl-10 pr-4 py-3 border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652]">
                    </div>
                    <p class="text-[10px] text-slate-400 font-bold">Tarif kamu: <span id="rate-label" class="text-slate-800 font-black">Rp150.000/jam</span></p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach(['75rb', '100rb', '125rb', '150rb', '175rb', '200rb'] as $preset)
                        <button type="button" onclick="setQuickRate('{{ intval($preset)*1000 }}', this)" class="preset-rate-btn px-3 py-1.5 bg-white border border-slate-200 rounded-xl text-[10px] font-bold text-slate-500 hover:border-slate-400 transition-colors">
                            Rp{{ $preset }}
                        </button>
                    @endforeach
                </div>
            </div>

            <div class="space-y-4 pt-6 border-t border-slate-100">
                <div>
                    <h3 class="text-sm font-black text-[#1a3652] mb-0.5">Ubah Password</h3>
                    <p class="text-[11px] text-slate-400 font-medium">Gunakan kombinasi password yang kuat untuk menjaga keamanan akun Anda.</p>
                </div>
                
                <div class="space-y-4 text-xs">
                    <div class="space-y-2">
                        <label class="text-xs font-black text-slate-700 block">Password Saat Ini</label>
                        <div class="relative">
                            <input type="password" placeholder="Masukkan password lama" class="w-full pl-4 pr-10 py-3 border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652]">
                            <button type="button" onclick="togglePassword(this)" class="absolute inset-y-0 right-4 flex items-center text-slate-400 hover:text-[#1a3652]"><i class="far fa-eye text-xs"></i></button>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black text-slate-700 block">Password Baru</label>
                        <div class="relative">
                            <input type="password" placeholder="Masukkan password baru" class="w-full pl-4 pr-10 py-3 border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652]">
                            <button type="button" onclick="togglePassword(this)" class="absolute inset-y-0 right-4 flex items-center text-slate-400 hover:text-[#1a3652]"><i class="far fa-eye text-xs"></i></button>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-black text-slate-700 block">Konfirmasi Password Baru</label>
                        <div class="relative">
                            <input type="password" placeholder="Ulangi password baru" class="w-full pl-4 pr-10 py-3 border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652]">
                            <button type="button" onclick="togglePassword(this)" class="absolute inset-y-0 right-4 flex items-center text-slate-400 hover:text-[#1a3652]"><i class="far fa-eye text-xs"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-4">
                <button type="button" class="w-full py-3.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold shadow-lg flex items-center justify-center gap-2 hover:bg-[#12273c]">
                    <i class="fas fa-check text-[10px]"></i> Simpan Perubahan
                </button>
            </div>
        </div>

    </main>

    <div id="skill-modal-overlay" class="fixed inset-0 z-50 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center p-4 opacity-0 transition-opacity duration-300">
        <div id="skill-modal-box" class="bg-white w-full max-w-sm rounded-2xl shadow-2xl p-6 relative transform scale-95 transition-transform duration-300">
            <button type="button" onclick="closeSkillModal()" class="absolute top-5 right-5 text-slate-400"><i class="fas fa-times"></i></button>
            
            <div class="flex items-center gap-2.5 mb-6">
                <div class="w-7 h-7 bg-slate-50 border border-slate-100 rounded-full flex items-center justify-center text-[#1a3652] text-xs">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3 class="text-sm font-black text-[#1a3652]">Tambah Keahlian</h3>
            </div>

            <div class="space-y-4">
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black text-slate-700 block">Nama Keahlian <span class="text-red-500">*</span></label>
                    <input type="text" id="modal-skill-name" placeholder="Contoh: Kalkulus Diferensial..." class="w-full px-3 py-2.5 border border-slate-200 rounded-xl text-xs font-bold text-slate-700 outline-none focus:border-[#1a3652]">
                </div>
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black text-slate-700 block">Deskripsi Singkat <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <textarea id="modal-skill-desc" oninput="countChar(this, 200, 'modal-count')" rows="3" maxlength="200" placeholder="Jelaskan secara singkat..." class="w-full px-3 py-2.5 border border-slate-200 rounded-xl text-xs font-semibold text-slate-700 outline-none focus:border-[#1a3652] resize-none leading-relaxed"></textarea>
                        <span id="modal-count" class="absolute bottom-2 right-3 text-[9px] font-bold text-slate-400">0/200</span>
                    </div>
                </div>
                <div class="flex gap-3 pt-2">
                    <button type="button" onclick="closeSkillModal()" class="flex-1 py-2.5 border border-slate-200 rounded-xl text-xs font-bold text-slate-500 hover:bg-slate-50">Batal</button>
                    <button type="button" onclick="submitNewSkill()" class="flex-1 py-2.5 bg-[#1a3652] text-white rounded-xl text-xs font-bold hover:bg-[#12273c] flex items-center justify-center gap-1.5"><i class="fas fa-check text-[9px]"></i> Tambahkan</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-[#1a3652] text-white mt-20 pt-16 pb-8 px-8">
        <p class="text-center text-xs text-slate-400">© 2026 AjarIn. Semua hak dilindungi.</p>
    </footer>

    <script>
        function switchProfileTab(clickedBtn, tabName) {
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.className = "tab-btn flex-1 py-2 text-center rounded-lg text-xs font-bold text-slate-500 hover:text-slate-800 flex items-center justify-center gap-2 transition-all";
            });
            clickedBtn.className = "tab-btn flex-1 py-2 text-center rounded-lg text-xs font-bold active text-slate-500 flex items-center justify-center gap-2 transition-all";

            document.querySelectorAll('.form-content').forEach(content => content.classList.remove('active'));
            document.getElementById(`tab-${tabName}`).classList.add('active');
        }

        function countChar(textarea, max, spanId) {
            document.getElementById(spanId).innerText = `${textarea.value.length}/${max}`;
        }

        function addSkillTag(e) {
            if(e.key === 'Enter') {
                e.preventDefault();
                const input = document.getElementById('tag-input');
                const val = input.value.trim();
                if(val) {
                    const wrapper = document.getElementById('tags-wrapper');
                    const span = document.createElement('span');
                    span.className = "inline-flex items-center gap-2 bg-slate-50 border border-slate-100 text-slate-700 text-[11px] font-bold px-2.5 py-1 rounded-lg animate-in";
                    span.innerHTML = `${val} <button type="button" onclick="this.parentNode.remove()" class="text-slate-400 hover:text-red-500"><i class="fas fa-times text-[10px]"></i></button>`;
                    wrapper.appendChild(span);
                    input.value = "";
                }
            }
        }

        const modalOverlay = document.getElementById('skill-modal-overlay');
        const modalBox = document.getElementById('skill-modal-box');

        function openSkillModal() {
            modalOverlay.classList.remove('hidden');
            modalOverlay.classList.add('flex');
            setTimeout(() => {
                modalOverlay.classList.add('opacity-100');
                modalBox.classList.remove('scale-95');
                modalBox.classList.add('scale-100');
            }, 50);
        }

        function closeSkillModal() {
            modalOverlay.classList.remove('opacity-100');
            modalBox.classList.remove('scale-100');
            modalBox.classList.add('scale-95');
            setTimeout(() => {
                modalOverlay.classList.add('hidden');
                modalOverlay.classList.remove('flex');
            }, 300);
        }

        function submitNewSkill() {
            const name = document.getElementById('modal-skill-name').value.trim();
            const desc = document.getElementById('modal-skill-desc').value.trim();
            if(name && desc) {
                const box = document.getElementById('specific-skills-box');
                const div = document.createElement('div');
                div.className = "border border-slate-100 bg-slate-50/40 rounded-xl p-3.5 flex justify-between items-center group";
                div.innerHTML = `
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-400 flex items-center justify-center text-xs">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div>
                            <h4 class="text-xs font-black text-[#1a3652]">${name}</h4>
                            <p class="text-[10px] text-slate-400 font-medium">${desc}</p>
                        </div>
                    </div>
                    <div class="flex gap-1">
                        <button type="button" class="w-7 h-7 text-slate-400 hover:text-[#1a3652] rounded-md flex items-center justify-center text-xs"><i class="fas fa-pen text-[10px]"></i></button>
                        <button type="button" onclick="this.closest('.border').remove(); updateSpecificCount();" class="w-7 h-7 text-slate-400 hover:text-red-500 rounded-md flex items-center justify-center text-xs"><i class="far fa-trash-can text-[11px]"></i></button>
                    </div>`;
                box.appendChild(div);
                updateSpecificCount();
                closeSkillModal();
            }
        }

        function updateSpecificCount() {
            const total = document.getElementById('specific-skills-box').children.length;
            document.getElementById('skill-spec-count').innerText = `${total}/10`;
        }

        function addEducationRow() {
            const container = document.getElementById('education-container');
            const row = document.createElement('div');
            row.className = "bg-slate-50/40 border border-slate-100 rounded-xl p-4 relative space-y-3";
            row.innerHTML = `
                <button type="button" onclick="this.parentNode.remove()" class="absolute top-4 right-4 text-slate-300 hover:text-red-500 text-xs"><i class="far fa-trash-can"></i></button>
                <input type="text" placeholder="Gelar / Jenjang Studi" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-bold text-slate-700 outline-none">
                <input type="text" placeholder="Nama Universitas / Sekolah" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-bold text-slate-700 outline-none">
                <input type="text" placeholder="Tahun Kelulusan" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-bold text-slate-700 outline-none">`;
            container.appendChild(row);
        }

        function syncRateLabel(val) {
            const formatted = val ? parseInt(val).toLocaleString('id-ID') : '0';
            document.getElementById('rate-label').innerText = `Rp${formatted}/jam`;
        }

        function setQuickRate(val, btn) {
            document.querySelectorAll('.preset-rate-btn').forEach(b => b.className = "preset-rate-btn px-3 py-1.5 bg-white border border-slate-200 rounded-xl text-[10px] font-bold text-slate-500 hover:border-slate-400 transition-colors");
            btn.className = "preset-rate-btn px-3 py-1.5 bg-[#1a3652] text-white border-transparent rounded-xl text-[10px] font-bold transition-colors";
            document.getElementById('rate-input').value = val;
            syncRateLabel(val);
        }

        // FUNGSI UTK TOGGLE SHOW/HIDE PASSWORD BERDASARKAN INPUT
        function togglePassword(btn) {
            const input = btn.previousElementSibling;
            const icon = btn.querySelector('i');
            if (input.type === "password") {
                input.type = "text";
                icon.className = "far fa-eye-slash text-xs text-[#1a3652]";
            } else {
                input.type = "password";
                icon.className = "far fa-eye text-xs text-slate-400";
            }
        }
    </script>
</body>
</html>