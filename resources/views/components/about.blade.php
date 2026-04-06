<section id="tentang" class="relative py-24 lg:py-32">
    <div class="absolute inset-0 bg-gradient-to-b from-surface-950 via-surface-900/50 to-surface-950"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- Visual --}}
            <div class="relative order-2 lg:order-1">
                <div class="relative glass rounded-3xl p-8 lg:p-12">
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-accent-500/20 rounded-full blur-2xl"></div>
                    {{-- Fingerprint SVG --}}
                    <div class="flex justify-center">
                        <svg class="w-48 h-48 text-accent-400/60" viewBox="0 0 200 200" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M100 20c-44.183 0-80 35.817-80 80s35.817 80 80 80 80-35.817 80-80-35.817-80-80-80z" opacity="0.15"/>
                            <path d="M100 40c-33.137 0-60 26.863-60 60s26.863 60 60 60 60-26.863 60-60-26.863-60-60-60z" opacity="0.25"/>
                            <path d="M100 60c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40z" opacity="0.4"/>
                            <path d="M100 80c-11.046 0-20 8.954-20 20s8.954 20 20 20 20-8.954 20-20-8.954-20-20-20z" opacity="0.6"/>
                            <circle cx="100" cy="100" r="5" fill="currentColor" opacity="0.8"/>
                            <path d="M60 100c0-22.091 17.909-40 40-40" stroke-linecap="round" opacity="0.3"/>
                            <path d="M80 100c0-11.046 8.954-20 20-20" stroke-linecap="round" opacity="0.5"/>
                        </svg>
                    </div>
                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="glass rounded-xl p-4 text-center hover:bg-white/10 transition-colors duration-300">
                            <div class="text-2xl font-bold gradient-text">16</div>
                            <div class="text-xs text-white/50 mt-1">Tipe Kepribadian</div>
                        </div>
                        <div class="glass rounded-xl p-4 text-center hover:bg-white/10 transition-colors duration-300">
                            <div class="text-2xl font-bold gradient-text">10</div>
                            <div class="text-xs text-white/50 mt-1">Jari Dianalisis</div>
                        </div>
                        <div class="glass rounded-xl p-4 text-center hover:bg-white/10 transition-colors duration-300">
                            <div class="text-2xl font-bold gradient-text">AI</div>
                            <div class="text-xs text-white/50 mt-1">Powered Engine</div>
                        </div>
                        <div class="glass rounded-xl p-4 text-center hover:bg-white/10 transition-colors duration-300">
                            <div class="text-2xl font-bold gradient-text">5 min</div>
                            <div class="text-xs text-white/50 mt-1">Hasil Instan</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Text --}}
            <div class="order-1 lg:order-2">
                <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass text-xs font-medium text-primary-400 mb-6">
                    Tentang Talent Compass
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight mb-6">
                    Kenali Diri Anda Lebih
                    <span class="gradient-text"> Dalam</span>
                </h2>
                <p class="text-lg text-white/60 leading-relaxed mb-6">
                    <strong class="text-white">Talent Compass</strong> adalah platform inovatif yang menggabungkan ilmu dermatoglifi dan kecerdasan buatan untuk menganalisis pola sidik jari Anda. Setiap orang memiliki pola sidik jari yang unik — dan di balik pola tersebut tersimpan informasi berharga tentang kepribadian, potensi, dan bakat alami Anda.
                </p>
                <p class="text-lg text-white/60 leading-relaxed mb-8">
                    Dengan teknologi analisis canggih, kami membantu Anda memahami kecerdasan dominan, gaya belajar, serta kekuatan karakter yang mungkin belum pernah Anda sadari sebelumnya.
                </p>
                <div class="space-y-4">
                    @foreach([
                        'Berbasis riset ilmiah dermatoglifi',
                        'Didukung teknologi AI terkini',
                        'Hasil personal & actionable'
                    ] as $item)
                    <div class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-accent-500/20 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-accent-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-white/80">{{ $item }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
