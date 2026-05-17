<div>
    <nav class="bg-[#1a3652]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-18 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <a href="{{ route('student.dashboard') }}" class="block hover:opacity-90 transition-opacity">
              <img src="{{ asset('asset/Logo_AjarIn.png') }}" alt="Logo AjarIn" class="h-10 w-auto" />
            </a>
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="{{ route('student.search') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Cari Tutor</a>
              <a href="{{ route('student.dashboard') }}" class="rounded-md bg-gray-950/50 px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a>
              <a href="{{ route('student.monitoring') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Monitoring</a>
            </div>
          </div>
        </div>
        
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6 gap-4">
            
            <div class="flex items-center gap-1.5 px-4 py-1.5 rounded-full border border-white/20 bg-white/5 text-sm font-medium text-slate-300">
              <i data-lucide="book-open" class="w-4 h-4"></i>
              <span>Pelajar</span>
            </div>

            <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold">3</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>

            <el-dropdown class="relative ml-3">
              <button class="relative flex max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <div class="flex items-center gap-3 bg-white/10 pl-2 pr-4 py-1.5 rounded-full border border-white/10">
                  <div class="size-8 rounded-full bg-orange-200 text-slate-800 flex items-center justify-center font-bold text-xs uppercase">
                    {{ substr(Auth::user()->name ?? 'RP', 0, 2) }}
                  </div>
                  <p class="text-sm font-semibold text-white" aria-hidden="true">{{ Auth::user()->name ?? 'Rizky' }}</p>
                  <i class="fas fa-chevron-down text-[10px] text-slate-400"></i>
                </div>
              </button>

              <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-gray-800 py-1 outline-1 -outline-offset-1 outline-white/10 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden">Your profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden">Settings</a>
                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden">Sign out</a>
              </el-menu>
            </el-dropdown>
          </div>
        </div>
        
        <div class="-mr-2 flex md:hidden">
          <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block md:hidden">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <a href="{{ route('student.search') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Cari Tutor</a>
        <a href="{{ route('student.dashboard') }}" aria-current="page" class="block rounded-md bg-gray-950/50 px-3 py-2 text-base font-medium text-white">Dashboard</a>
        <a href="{{ route('student.monitoring') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Monitoring</a>
      </div>
      <div class="border-t border-white/10 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <div class="size-10 rounded-full bg-orange-200 text-slate-800 flex items-center justify-center font-bold uppercase">
                {{ substr(Auth::user()->name ?? 'RP', 0, 2) }}
            </div>
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-medium text-white">{{ Auth::user()->name ?? 'Rizky' }}</div>
            <div class="text-sm font-medium text-gray-400">{{ Auth::user()->email ?? 'student@ajarin.com' }}</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full p-1 text-gray-400 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-1.5"></span>