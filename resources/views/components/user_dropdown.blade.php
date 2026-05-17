<div 
    x-data="{ open: false }" 
    @open-user-menu.window="open = !open"
    class="relative"
>
    <div 
        x-show="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        @click.outside="open = false"
        class="absolute right-0 top-12 z-50 w-64 p-4 rounded-2xl bg-slate-900/60 backdrop-blur-md border border-white/10 shadow-xl text-white"
        style="display: none;"
    >
        <div class="flex items-center gap-3 bg-cyan-950/40 border border-white/5 rounded-xl p-3 mb-4">
            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-amber-200/80 text-slate-800 font-bold text-sm tracking-wider">
                {{ $avatarText ?? 'RP' }}
            </div>
            
            <div class="flex flex-col min-w-0">
                <span class="font-semibold text-sm border-b border-white/20 pb-0.5 truncate">
                    {{ $name ?? 'Rizky perdana' }}
                </span>
                <a href="{{ $profileUrl ?? '#' }}" class="text-xs text-slate-300 hover:text-white transition mt-1 flex items-center gap-1">
                    Profile <span class="text-[10px]">&rarr;</span>
                </a>
            </div>
        </div>

        <div class="text-center py-2">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-sm font-medium hover:text-red-400 transition duration-200 w-full text-center">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>