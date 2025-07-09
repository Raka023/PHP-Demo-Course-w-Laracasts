// User profile dropdown functionality
document.addEventListener('DOMContentLoaded', function() {
    const userMenuButton = document.getElementById('user-menu-button');
    const userMenuDropdown = document.getElementById('user-menu-dropdown');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuIcon = document.getElementById('mobile-menu-icon');
    const mobileMenuCloseIcon = document.getElementById('mobile-menu-close-icon');

    // Toggle user dropdown
    userMenuButton.addEventListener('click', function() {
        const isExpanded = userMenuButton.getAttribute('aria-expanded') === 'true';
        userMenuButton.setAttribute('aria-expanded', !isExpanded);

        if (isExpanded) {
            userMenuDropdown.classList.add('hidden');
        } else {
            userMenuDropdown.classList.remove('hidden');
        }
    });

    // Toggle mobile menu
    mobileMenuButton.addEventListener('click', function() {
        const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
        mobileMenuButton.setAttribute('aria-expanded', !isExpanded);

        if (isExpanded) {
            mobileMenu.classList.add('hidden');
            mobileMenuIcon.classList.remove('hidden');
            mobileMenuIcon.classList.add('block');
            mobileMenuCloseIcon.classList.add('hidden');
            mobileMenuCloseIcon.classList.remove('block');
        } else {
            mobileMenu.classList.remove('hidden');
            mobileMenuIcon.classList.add('hidden');
            mobileMenuIcon.classList.remove('block');
            mobileMenuCloseIcon.classList.remove('hidden');
            mobileMenuCloseIcon.classList.add('block');
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!userMenuButton.contains(event.target) && !userMenuDropdown.contains(event.target)) {
            userMenuButton.setAttribute('aria-expanded', 'false');
            userMenuDropdown.classList.add('hidden');
        }
    });

    // Close dropdown when pressing Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            userMenuButton.setAttribute('aria-expanded', 'false');
            userMenuDropdown.classList.add('hidden');

            mobileMenuButton.setAttribute('aria-expanded', 'false');
            mobileMenu.classList.add('hidden');
            mobileMenuIcon.classList.remove('hidden');
            mobileMenuIcon.classList.add('block');
            mobileMenuCloseIcon.classList.add('hidden');
            mobileMenuCloseIcon.classList.remove('block');
        }
    });

    // Handle dropdown menu item clicks
    const dropdownItems = userMenuDropdown.querySelectorAll('a');
    dropdownItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Clicked:', this.textContent);
            // Add your navigation logic here

            // Close dropdown after clicking
            userMenuButton.setAttribute('aria-expanded', 'false');
            userMenuDropdown.classList.add('hidden');
        });
    });
});