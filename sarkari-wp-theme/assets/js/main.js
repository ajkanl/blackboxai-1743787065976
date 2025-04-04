document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle functionality
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const primaryMenu = document.querySelector('.primary-menu');
    
    if (mobileMenuToggle && primaryMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            primaryMenu.classList.toggle('hidden');
        });
    }
});