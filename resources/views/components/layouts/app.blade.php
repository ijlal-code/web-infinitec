<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- $title diambil dari prop komponen, default: INFINITEC --}}
    <title>{{ $title ?? 'INFINITEC' }}</title>
    
    {{-- CSS disesuaikan: Jika $css='hal2' (dari kompetisi.blade.php) maka load hal2.css. Jika tidak, load app.css (untuk home.blade.php) --}}
    @if(isset($css) && $css == 'hal2')
        @vite('resources/css/hal2.css')
    @else
        @vite('resources/css/app.css')
    @endif
    
</head>
<body class="font-sans text-gray-800">

    {{-- NAVIGASI diambil dari slot 'nav' --}}
    {{ $nav }}

    <main>
        {{-- SLOT adalah konten spesifik halaman (Home atau Kompetisi) --}}
        {{ $slot }}
    </main>
    
    {{-- FOOTER diambil dari slot 'footer' --}}
    {{ $footer }}

    {{-- BACK-TO-TOP diambil dari slot 'backToTop' --}}
    {{ $backToTop }}

    @vite('resources/js/app.js')
    
</body>
</html>