@props(['s'])
<div class="group flex items-center justify-between p-4 rounded-[1.5rem] border border-transparent hover:border-slate-100 hover:bg-slate-50/50 transition-all">
    <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-xl bg-slate-100 overflow-hidden">
            <img src="https://ui-avatars.com/api/?name={{ $s->course->user->name }}&background=random" alt="Avatar" class="w-full h-full">
        </div>
        <div>
            <h4 class="text-sm font-bold text-slate-800 group-hover:text-[#1a3652] transition-colors">{{ $s->course->name }}</h4>
            <p class="text-[11px] text-slate-400 font-medium">{{ $s->course->user->name }} • {{ $s->date_time }}</p>
        </div>
    </div>
    <div class="flex flex-col items-end gap-2">
        <span class="text-[9px] px-3 py-1 rounded-full font-black uppercase tracking-wider
            {{ $s->status == 'ongoing' ? 'bg-blue-50 text-blue-600' : '' }}
            {{ $s->status == 'completed' ? 'bg-slate-100 text-slate-500' : '' }}
            {{ $s->status == 'waiting' ? 'bg-orange-50 text-orange-600' : '' }}">
            <i class="fas fa-circle text-[6px] mr-1 mb-0.5"></i> {{ $s->status }}
        </span>
        @if($s->status == 'completed')
            <button class="text-[10px] font-bold text-slate-400 hover:text-[#1a3652]">Coba Assessment</button>
        @elseif($s->status == 'ongoing')
            <button class="text-[10px] font-bold text-[#1a3652]"><i class="fas fa-link mr-1"></i> Join</button>
        @endif
    </div>
</div>