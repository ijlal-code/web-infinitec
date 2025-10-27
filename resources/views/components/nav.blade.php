<?php
// Define attributes, including activePage, buttonText, and buttonLink
$attributes = $attributes->whereDoesntStartWith('class');
$activePage = $activePage ?? 'home'; 
$buttonText = $buttonText ?? 'DAFTAR LOMBA'; 
$buttonLink = $buttonLink ?? '/kompetisi';
$buttonTarget = $buttonLink === '/kompetisi' ? '_self' : '_blank';

// Modifikasi Logika untuk Efek PILL:
$isActive = fn($page) => $activePage === $page 
    // ACTIVE: Background Kuning, Teks Hitam, Rounded Full (Pill)
    ? 'bg-yellow-400 text-gray-900 font-extrabold transition px-3 py-1 rounded-full' 
    // INACTIVE: Transparan, Hover jadi Pill Kuning
    : 'text-gray-300 hover:bg-yellow-400 hover:text-gray-900 font-medium transition px-3 py-1 rounded-full'; 

// Mobile tetap sederhana
$mobileActive = fn($page) => $activePage === $page 
    ? 'text-yellow-400 font-extrabold transition' 
    : 'text-gray-300 hover:bg-gray-800 transition'; 

?>

{{-- NAVBAR UTAMA: bg-gray-900 --}}
<nav id="main-nav" class="bg-gray-900 shadow-md fixed top-0 w-full z-50 transition-all duration-300  {{ $attributes->get('class') }}">
    
    {{-- Latar belakang animasi meteor --}}
    <div class="meteor-container"></div> 
    {{-- Latar belakang animasi meteor --}}
    <div class="meteor-container2"></div> 
    {{-- Latar belakang animasi meteor --}}
    <div class="meteor-container3"></div> 
    
    {{-- Konten Navigasi: Tambahkan relative dan z-10 agar di atas meteor --}}
    <div class="container w-11/12 max-w-6xl mx-auto px-4 py-3 flex justify-between items-center relative z-10"> 
        
        <a href="/" class="text-blue-400 font-extrabold text-lg flex items-center">
            INFINITEC
        </a>

        {{-- Menu Desktop --}}
        <div class="hidden md:flex space-x-2 items-center"> {{-- Kurangi space-x agar pill tidak terlalu jauh --}}
            {{-- Link Home --}}
            <a href="/" class="{{ $isActive('home') }}">Home</a>
            {{-- Link Kompetisi --}}
            <a href="/kompetisi" class="{{ $isActive('kompetisi') }}">Kompetisi</a>
        </div>

        {{-- Tombol Menu Mobile --}}
        <button id="menu-button" class="md:hidden text-gray-300 focus:outline-none p-1 rounded hover:bg-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    {{-- Menu Mobile yang Tersembunyi --}}
    {{-- HAPUS kelas 'hidden md:hidden' dan ganti dengan 'md:hidden' saja --}}
    <div id="mobile-menu" class="md:hidden border-t border-gray-800 bg-gray-900 relative z-10">
        <a href="/" class="block py-2 px-4 {{ $mobileActive('home') }}">Home</a>
        <a href="/kompetisi" class="block py-2 px-4 {{ $mobileActive('kompetisi') }}">Kompetisi</a>
        
       
    </div>
</nav>