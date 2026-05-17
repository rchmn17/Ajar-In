<div>
    <footer class="bg-[#1a3652] text-white mt-20 pt-20 pb-10 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
                <div class="space-y-6">
                    <div class="flex items-center gap-2">
                        <div class="bg-white/20 p-2 rounded-lg">
                            <i class="fas fa-book-open text-xl text-white"></i>
                        </div>
                        <span class="text-2xl font-bold tracking-tight text-white">AjarIn</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">Platform micro-learning yang menghubungkan pelajar dengan pengajar ahli secara spesifik.</p>
                    <div class="flex items-center gap-4 text-slate-400 text-lg">
                        <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                @foreach(['Platform' => ['Cari Tutor', 'Dashboard Pelajar', 'Dashboard Tutor', 'Monitoring Board'], 'Kategori' => ['Teknologi', 'Akademis', 'Professional', 'Bahasa'], 'Perusahaan' => ['Tentang Kami', 'Karir', 'Blog', 'Kontak']] as $title => $links)
                <div>
                    <h5 class="font-bold mb-6 text-sm tracking-wide">{{ $title }}</h5>
                    <ul class="space-y-4 text-slate-400 text-sm">
                        @foreach($links as $link)
                            <li><a href="#" class="hover:text-white transition-colors">{{ $link }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="flex flex-col md:flex-row items-center justify-between pt-10 border-t border-white/10 text-[10px] font-bold uppercase tracking-widest text-slate-500">
                <p>© 2026 AjarIn. Semua hak dilindungi.</p>
                <div class="flex items-center gap-8 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white">Syarat & Ketentuan</a>
                    <a href="#" class="hover:text-white">Privasi</a>
                    <a href="#" class="hover:text-white">Cookie</a>
                </div>
            </div>
        </div>
    </footer>
</div>