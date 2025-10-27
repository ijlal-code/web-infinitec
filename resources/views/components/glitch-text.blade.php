@props(['text', 'words', 'duration' => 2000, 'parentClass' => ''])
<?php
$initialWord = strtoupper($words[0] ?? '');
// Memisahkan teks statis "WELCOME TO" menjadi dua baris
$staticWords = explode(' ', strtoupper($text));
?>

{{-- CONTAINER UTAMA: flex-col di mobile, flex-row di desktop (md:flex-row) --}}
<span class="flex flex-col items-center text-shadow-lg md:flex-row" 
      id="glitch-container"
      data-words="{{ json_encode($words) }}"
      data-duration="{{ $duration }}">
    
    {{-- Baris 1: WELCOME --}}
    <span class="static-text text-white {{ $parentClass }} block"> 
        {{ $staticWords[0] ?? '' }}
    </span>
    
    {{-- Baris 2: TO. Hapus margin negatif, ganti dengan margin positif kecil (mt-2) --}}
    <span class="text-white {{ $parentClass }} block mt-2 md:mt-0 md:ml-2"> 
        {{ $staticWords[1] ?? '' }}
    </span>
    
    {{-- Baris 3: INFINITEC / 2025 (Glitch). Hapus margin negatif, ganti dengan margin positif kecil (mt-2) --}}
    <span class="glitch-text-wrapper ml-0 mt-2 {{ $parentClass }} glitch-text md:ml-2 md:mt-0" 
          id="glitch-word"
          data-glitch="{{ $initialWord }}">
        {{ $initialWord }}
    </span>
</span>