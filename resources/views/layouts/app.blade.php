<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Talent Compass — Platform analisis kepribadian berbasis sidik jari. Temukan potensi tersembunyi Anda melalui teknologi biometrik terdepan.">
    <title>@yield('title', 'Talent Compass — Temukan Potensi Diri Melalui Sidik Jari')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface-950 text-white font-sans antialiased overflow-x-hidden">
    @yield('content')
</body>
</html>
