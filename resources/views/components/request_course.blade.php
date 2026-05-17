@props(['s'])
<div class="border border-slate-100 rounded-xl p-5 hover:border-slate-200 transition-colors">
    <div class="flex justify-between items-start mb-3">
        <div class="flex items-center gap-3">
            <img src="https://ui-avatars.com/api/?name=Rizky+Pratama&background=random" class="w-10 h-10 rounded-full object-cover">
            <div>
                <h4 class="font-bold text-sm text-[#1a3652]">{{ $s->user->name }}</h4>
                <div class="flex items-center gap-2 mt-1">
                    <span class="bg-slate-100 text-slate-500 text-[10px] font-bold px-2 py-0.5 rounded-md">{{ $s->user->name }}</span>
                    <span class="text-[10px] text-slate-400">{{ $s->duration }} jam</span>
                    <span class="text-[10px] text-slate-400">{{ $s->course->price/1000 }}rb/jam</span>
                </div>
            </div>
        </div>
        <span class="text-[10px] font-medium text-slate-400">5 menit lalu</span>
    </div>
    <p class="text-xs text-slate-500 leading-relaxed mb-4 pl-13">{{ $s->course->description }}</p>
    <div class="flex gap-3 pl-13">
        <button class="flex-1 py-2 rounded-lg border border-slate-200 text-xs font-bold text-slate-500 hover:bg-slate-50 transition-colors">Tolak</button>
        <button class="flex-1 py-2 rounded-lg bg-[#1a3652] text-white text-xs font-bold hover:bg-[#112438] transition-colors shadow-md">Terima & Hubungi</button>
    </div>
</div>