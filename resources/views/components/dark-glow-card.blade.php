{{-- File: resources/views/components/dark-glow-card.blade.php --}}
@props(['title', 'subtitle' => '', 'class' => ''])

<div class="card m-auto w-[clamp(260px,80%,300px)] hover:brightness-90 transition-all cursor-pointer group bg-gradient-to-tl from-gray-900 to-gray-950 hover:from-gray-800 hover:to-gray-950 border-r-2 border-t-2 border-gray-900 m-4 rounded-lg overflow-hidden relative {{ $class }}">
    <div class="px-8 py-10">
        {{-- Icon Placeholder (Diubah ke Kuning) --}}
        <div class="bg-yellow-500 w-10 h-10 rounded-full rounded-tl-none mb-4 group-hover:-translate-y-1 group-hover:shadow-xl group-hover:shadow-yellow-700 transition-all"></div>
        
        {{-- Title --}}
        <div class="uppercase font-bold text-xl text-white">
            {{ $title }}
        </div>
        
        {{-- Subtitle (Opsional) --}}
        @if($subtitle)
            <div class="text-gray-300 uppercase tracking-widest">
                {{ $subtitle }}
            </div>
        @endif
        
        {{-- Content Slot --}}
        <div class="text-gray-400 mt-8">
            {{ $slot }}
        </div>
    </div>
    
    {{-- Decorative Lines --}}
    <div class="h-2 w-full bg-gradient-to-l via-yellow-500 group-hover:blur-xl blur-2xl m-auto rounded transition-all absolute bottom-0"></div>
    <div class="h-0.5 group-hover:w-full bg-gradient-to-l via-yellow-950 group-hover:via-yellow-500 w-[70%] m-auto rounded transition-all"></div>
</div>