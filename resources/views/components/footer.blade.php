{{-- File: resources/views/components/footer.blade.php --}}
<footer class="
    /* Background: Darker blue-gray, semi-transparan untuk efek glass */
    bg-blue-950/60 
   
    /* Border untuk sentuhan elegan dan membedakan */
    border-t border-blue-400 
    /* Teks dan padding */
    text-gray-200 py-5 mt-16 
    /* Shadow untuk kedalaman */
    shadow-xl 
    {{ $attributes->get('class') }}
">
    <div class="container w-11/12 max-w-6xl mx-auto px-4 flex justify-center items-center">
        {{-- Teks ini seharusnya TIDAK BURAM --}}
        <p class="text-sm opacity-90 text-center"> 
            &copy; Copyright <span class="text-yellow-400 font-semibold">Informatics Study Club</span>. All Rights Reserved
        </p>
    </div>
</footer>