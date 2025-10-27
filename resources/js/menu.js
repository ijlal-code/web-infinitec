// File: resources/js/menu.js (Revisi untuk Slide Down)

document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', () => {
            // Hapus kelas 'hidden' jika masih ada dari kode lama
            mobileMenu.classList.remove('hidden');

            // Toggle kelas 'menu-open' yang mengontrol max-height untuk transisi
            mobileMenu.classList.toggle('menu-open');
        });
    }
});