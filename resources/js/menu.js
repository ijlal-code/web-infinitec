// resources/js/menu-toggle.js

document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('#mobile-menu a');

    if (menuButton && mobileMenu) {
        // 1. Toggle Menu functionality
        menuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // 2. Close mobile menu when a link is clicked
        mobileLinks.forEach(item => {
            item.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
    }
});