<section id="cara-kerja" class="relative py-24 lg:py-32">
    <div class="absolute inset-0 bg-gradient-to-b from-surface-950 to-surface-900/30"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center mb-20">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass text-xs font-medium text-accent-400 mb-6">Cara Kerja</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                Tiga Langkah <span class="gradient-text">Mudah</span>
            </h2>
            <p class="text-lg text-white/50 max-w-2xl mx-auto">Proses analisis sidik jari yang cepat, aman, dan akurat hanya dalam beberapa menit.</p>
        </div>

        {{-- Steps --}}
        <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
            @php
            $steps = [
                [
                    'num' => '01',
                    'title' => 'Scan Sidik Jari',
                    'desc' => 'Upload atau scan kesepuluh sidik jari Anda melalui perangkat yang tersedia. Proses ini aman dan data Anda terenkripsi.',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/>',
                    'color' => 'from-accent-400 to-accent-500',
                ],
                [
                    'num' => '02',
                    'title' => 'Analisis AI',
                    'desc' => 'Sistem AI kami menganalisis pola unik sidik jari menggunakan algoritma machine learning dan database dermatoglifi.',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"/>',
                    'color' => 'from-primary-400 to-primary-500',
                ],
                [
                    'num' => '03',
                    'title' => 'Terima Hasil',
                    'desc' => 'Dapatkan laporan komprehensif tentang kepribadian, bakat dominan, gaya belajar, dan rekomendasi pengembangan diri.',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>',
                    'color' => 'from-purple-400 to-purple-500',
                ],
            ];
            @endphp

            @foreach($steps as $i => $step)
            <div class="group relative">
                {{-- Connector line (only between steps) --}}
                @if($i < count($steps) - 1)
                <div class="hidden md:block absolute top-16 left-[60%] w-[80%] h-px bg-gradient-to-r from-white/10 to-transparent"></div>
                @endif

                <div class="glass rounded-3xl p-8 hover:bg-white/[0.07] transition-all duration-500 hover:-translate-y-2 h-full">
                    {{-- Step number --}}
                    <div class="text-6xl font-black text-white/[0.04] absolute top-4 right-6">{{ $step['num'] }}</div>

                    {{-- Icon --}}
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br {{ $step['color'] }} flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">{!! $step['icon'] !!}</svg>
                    </div>

                    <h3 class="text-xl font-bold mb-3">{{ $step['title'] }}</h3>
                    <p class="text-white/50 leading-relaxed">{{ $step['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
