<section id="manfaat" class="relative py-24 lg:py-32">
    <div class="absolute inset-0 bg-gradient-to-b from-surface-900/30 via-surface-950 to-surface-950"></div>
    <div class="absolute top-1/2 right-0 w-96 h-96 bg-primary-600/10 rounded-full blur-[120px]"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header --}}
        <div class="text-center mb-20">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full glass text-xs font-medium text-primary-400 mb-6">Keunggulan</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
                Mengapa <span class="gradient-text">Talent Compass</span>?
            </h2>
            <p class="text-lg text-white/50 max-w-2xl mx-auto">Solusi terpercaya untuk memahami potensi diri secara mendalam dan terukur.</p>
        </div>

        {{-- Benefits Grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @php
            $benefits = [
                [
                    'title' => 'Kenali Potensi Diri',
                    'desc' => 'Pahami kecerdasan dominan dan bakat alami yang Anda miliki sejak lahir untuk mengambil keputusan hidup yang lebih tepat.',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>',
                    'gradient' => 'from-cyan-400 to-blue-500',
                ],
                [
                    'title' => 'Pengembangan Karier',
                    'desc' => 'Dapatkan rekomendasi jalur karier yang sesuai dengan profil kepribadian dan potensi alami Anda.',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>',
                    'gradient' => 'from-violet-400 to-purple-500',
                ],
                [
                    'title' => 'Insight Personal Unik',
                    'desc' => 'Setiap sidik jari unik — begitu juga hasil analisis Anda. Dapatkan insight yang benar-benar personal.',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456z"/>',
                    'gradient' => 'from-amber-400 to-orange-500',
                ],
                [
                    'title' => 'Gaya Belajar Optimal',
                    'desc' => 'Ketahui metode belajar paling efektif untuk Anda, sehingga proses belajar menjadi lebih menyenangkan dan produktif.',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/>',
                    'gradient' => 'from-emerald-400 to-teal-500',
                ],
                [
                    'title' => 'Privasi Terjamin',
                    'desc' => 'Data biometrik Anda dienkripsi end-to-end dan tidak pernah dibagikan ke pihak ketiga. Keamanan adalah prioritas kami.',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>',
                    'gradient' => 'from-rose-400 to-pink-500',
                ],
                [
                    'title' => 'Laporan Komprehensif',
                    'desc' => 'Terima laporan lengkap mencakup profil kepribadian, kecerdasan majemuk, rekomendasi karier, dan tips pengembangan diri.',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>',
                    'gradient' => 'from-sky-400 to-indigo-500',
                ],
            ];
            @endphp

            @foreach($benefits as $benefit)
            <div class="group glass rounded-3xl p-8 hover:bg-white/[0.07] transition-all duration-500 hover:-translate-y-2">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br {{ $benefit['gradient'] }} flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">{!! $benefit['icon'] !!}</svg>
                </div>
                <h3 class="text-lg font-bold mb-2">{{ $benefit['title'] }}</h3>
                <p class="text-white/50 text-sm leading-relaxed">{{ $benefit['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
