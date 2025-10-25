// Tambahkan logika Back-to-Top ke inisialisasi JS Anda

document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.getElementById('back-to-top');

    // 1. Logika untuk menampilkan/menyembunyikan tombol
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) { // Tampilkan setelah scroll 300px
            backToTopButton.classList.remove('opacity-0', 'invisible');
            backToTopButton.classList.add('opacity-100', 'visible');
        } else {
            backToTopButton.classList.remove('opacity-100', 'visible');
            backToTopButton.classList.add('opacity-0', 'invisible');
        }
    });

    // 2. Logika untuk melakukan scroll ke atas
    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Membuat scroll menjadi halus
        });
    });

   
});