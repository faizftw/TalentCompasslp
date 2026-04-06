<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Logo --}}
            <a href="#" class="flex items-center gap-3 group">
                <img src="{{ asset('images/tcomplogo.png') }}" alt="Talent Compass Logo" class="h-10 w-auto group-hover:scale-105 transition-transform duration-300">
                <span class="text-xl font-bold tracking-tight">Talent<span class="gradient-text">Compass</span></span>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="#tentang" class="text-sm text-white/70 hover:text-accent-400 transition-colors duration-300">Tentang</a>
                <a href="#cara-kerja" class="text-sm text-white/70 hover:text-accent-400 transition-colors duration-300">Cara Kerja</a>
                <a href="#manfaat" class="text-sm text-white/70 hover:text-accent-400 transition-colors duration-300">Manfaat</a>
                <a href="#cta" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-gradient-to-r from-accent-500 to-primary-500 text-sm font-semibold hover:shadow-lg hover:shadow-accent-500/25 hover:-translate-y-0.5 transition-all duration-300">
                    Mulai Sekarang
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
            </div>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-white/10 transition-colors" aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="md:hidden hidden glass-stronger">
        <div class="px-4 py-6 space-y-4">
            <a href="#tentang" class="block text-white/70 hover:text-accent-400 transition-colors">Tentang</a>
            <a href="#cara-kerja" class="block text-white/70 hover:text-accent-400 transition-colors">Cara Kerja</a>
            <a href="#manfaat" class="block text-white/70 hover:text-accent-400 transition-colors">Manfaat</a>
            <a href="#cta" class="block w-full text-center px-5 py-3 rounded-full bg-gradient-to-r from-accent-500 to-primary-500 font-semibold">Mulai Sekarang</a>
        </div>
    </div>
</nav>
