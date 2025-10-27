// File: resources/js/glitch-changer.js (HANYA LOGIKA PENGGANTIAN KATA)

document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('glitch-container');
    if (!container) return;

    const glitchWordEl = document.getElementById('glitch-word');
    if (!glitchWordEl) return;

    const words = JSON.parse(container.dataset.words);
    const duration = parseInt(container.dataset.duration) || 2000;
    
    if (words.length < 2) return;

    let wordIndex = 0;

    function cycleWords() {
        wordIndex = (wordIndex + 1) % words.length;
        const nextWord = words[wordIndex].toUpperCase();
        
        // Perbarui konten teks
        glitchWordEl.textContent = nextWord;
        
        // Perbarui atribut data-glitch
        glitchWordEl.setAttribute('data-glitch', nextWord); 

        // Jadwalkan pergantian berikutnya
        setTimeout(cycleWords, duration);
    }
    
    // Mulai siklus setelah delay pertama
    setTimeout(cycleWords, duration); 
});
// Pastikan tidak ada kode lain di file ini yang mengganggu tata letak (seperti minWidth)