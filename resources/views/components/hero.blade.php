<section id="hero" class="relative min-h-screen flex items-center overflow-hidden">
    {{-- Background Effects --}}
    <div class="absolute inset-0 bg-gradient-to-b from-surface-950 via-surface-900 to-surface-950"></div>
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-primary-600/20 rounded-full blur-[128px] animate-pulse"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-accent-500/15 rounded-full blur-[100px] animate-pulse" style="animation-delay: 1.5s"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary-500/5 rounded-full blur-[80px]"></div>

    {{-- Grid Pattern Overlay --}}
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(rgba(255,255,255,.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.1) 1px, transparent 1px); background-size: 60px 60px;"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            {{-- Text Content --}}
            <div class="text-center lg:text-left">
                <div class="animate-slide-up stagger-1">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass text-xs font-medium text-accent-400 mb-6">
                        <span class="w-2 h-2 rounded-full bg-accent-400 animate-pulse"></span>
                        Teknologi Biometrik Terdepan
                    </span>
                </div>

                <h1 class="animate-slide-up stagger-2 text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-black leading-[1.1] tracking-tight mb-6">
                    Eksplorasi
                    <span class="gradient-text"> Potensi Diri</span>
                    <br>Melalui Sidik Jari
                </h1>

                <p class="animate-slide-up stagger-3 text-lg sm:text-xl text-white/60 max-w-xl mx-auto lg:mx-0 mb-10 leading-relaxed">
                    Temukan kepribadian unik, bakat tersembunyi, dan arah karier ideal Anda melalui analisis sidik jari berbasis kecerdasan buatan.
                </p>

                <div class="animate-slide-up stagger-4 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="https://talentcompass.id/login" class="group inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full bg-gradient-to-r from-accent-500 to-accent-400 text-surface-950 font-bold text-lg hover:shadow-2xl hover:shadow-accent-500/30 hover:-translate-y-1 transition-all duration-300">
                        Coba Sekarang
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                    <a href="#tentang" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full glass hover:bg-white/10 font-semibold text-lg transition-all duration-300">
                        Pelajari Lebih Lanjut
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                </div>

                {{-- Stats --}}
                <div class="animate-slide-up stagger-5 mt-12 flex gap-8 justify-center lg:justify-start">
                    <div>
                        <div class="text-2xl font-bold gradient-text">10K+</div>
                        <div class="text-sm text-white/40">Pengguna</div>
                    </div>
                    <div class="w-px bg-white/10"></div>
                    <div>
                        <div class="text-2xl font-bold gradient-text">99%</div>
                        <div class="text-sm text-white/40">Akurasi</div>
                    </div>
                    <div class="w-px bg-white/10"></div>
                    <div>
                        <div class="text-2xl font-bold gradient-text">50+</div>
                        <div class="text-sm text-white/40">Trait Analisis</div>
                    </div>
                </div>
            </div>

            {{-- Hero Image --}}
            <div class="animate-fade-in relative flex justify-center lg:justify-end">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-accent-500/20 to-primary-500/20 rounded-3xl blur-2xl"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="relative w-full max-w-md mx-auto text-accent-400 animate-float drop-shadow-[0_0_15px_rgba(56,232,200,0.5)]" viewBox="0 0 16 16">
                        <path d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z"/>
                        <path d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332q0 .613-.066 1.221A.5.5 0 0 1 6 8.447q.06-.555.06-1.115zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8m-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329"/>
                        <path d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334m.3 1.67a.5.5 0 0 1 .449.546 10.7 10.7 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.7 9.7 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z"/>
                        <path d="M3.902 4.222a5 5 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 4 4 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556m6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705M3.68 5.842a.5.5 0 0 1 .422.568q-.044.289-.044.59c0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.5 6.5 0 0 0 3.058 7q0-.375.054-.736a.5.5 0 0 1 .568-.422m8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.5 10.5 0 0 0 .584-2.678.5.5 0 0 1 .54-.456"/>
                        <path d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865m-.89 1.257a.5.5 0 0 1 .04.706A5.48 5.48 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346m12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49"/>
                    </svg>
                    {{-- Floating badge --}}
                    <div class="absolute -bottom-4 -left-4 glass-stronger rounded-2xl px-5 py-3 animate-slide-up stagger-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-accent-400 to-primary-500 flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold">Terverifikasi</div>
                                <div class="text-xs text-white/50">Data aman & privat</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 rounded-full border-2 border-white/20 flex justify-center pt-2">
            <div class="w-1.5 h-3 rounded-full bg-accent-400"></div>
        </div>
    </div>
</section>
