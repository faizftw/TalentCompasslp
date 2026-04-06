<footer class="relative border-t border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid md:grid-cols-3 gap-8 items-center">
            {{-- Logo --}}
            <div>
                <a href="#" class="flex items-center gap-3 mb-4 group">
                    <img src="{{ asset('images/tcomplogo.png') }}" alt="Talent Compass Logo" class="h-10 w-auto group-hover:scale-105 transition-transform duration-300">
                    <span class="text-lg font-bold">Talent<span class="gradient-text">Compass</span></span>
                </a>
                <p class="text-sm text-white/40">Platform analisis kepribadian berbasis sidik jari terdepan di Indonesia.</p>
            </div>

            {{-- Links --}}
            <div class="flex gap-8 justify-center">
                <a href="#tentang" class="text-sm text-white/50 hover:text-accent-400 transition-colors">Tentang</a>
                <a href="#cara-kerja" class="text-sm text-white/50 hover:text-accent-400 transition-colors">Cara Kerja</a>
                <a href="#manfaat" class="text-sm text-white/50 hover:text-accent-400 transition-colors">Manfaat</a>
                <a href="#" class="text-sm text-white/50 hover:text-accent-400 transition-colors">Kontak</a>
            </div>

            {{-- Socials --}}
            <div class="flex gap-4 justify-center md:justify-end">
                @foreach(['M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84', 'M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z'] as $path)
                <a href="#" class="w-10 h-10 rounded-full glass flex items-center justify-center hover:bg-white/10 transition-colors group">
                    <svg class="w-4 h-4 text-white/50 group-hover:text-accent-400 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="{{ $path }}"/></svg>
                </a>
                @endforeach
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="mt-10 pt-8 border-t border-white/5 text-center">
            <p class="text-sm text-white/30">&copy; {{ date('Y') }} Talent Compass. All rights reserved.</p>
        </div>
    </div>
</footer>
