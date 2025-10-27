{{-- File: resources/views/components/flip-card.blade.php (REVISI FINAL GAMBAR) --}}
@props(['image', 'hoverImage', 'title', 'description', 'link' => '#', 'year' => ''])
{{-- ^ TAMBAH properti 'hoverImage' --}}

    <div class="card-3d-flip" 
         style="background-image: url('{{ $image }}');"> {{-- Card utama (default BG) --}}
        
        {{-- Front Face: Gambar Dokumentasi (Gunakan prop image) --}}
        <div class="card__front-face absolute top-0 left-0 w-full h-full"> 
            
            <img src="{{ $image }}" alt="{{ $title }} - Dokumentasi" 
                 class="object-cover w-full h-full"
            >
            
            <div class="absolute inset-0 bg-black/40 flex items-end justify-start p-3">
                 @if($year)
                    <p class="text-4xl font-extrabold text-yellow-400">{{ $year }}</p>
                 @endif
            </div>
            
        </div>

        {{-- Back Face: Content (Penjelasan) --}}
        <div class="card__content-3d"
             style="background-image: url('{{ $hoverImage }}');"> {{-- GUNAKAN HOVER IMAGE --}}
            <p class="card__title">{{ $title }}</p>
            <p class="card__description">{{ $description }}</p>
           
        </div>

    </div>
