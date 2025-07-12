document.addEventListener('DOMContentLoaded', function() {
    const userMenuButton = document.getElementById('user-menu-button');
    const userMenuDropdown = document.getElementById('user-menu-dropdown');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuIcon = document.getElementById('mobile-menu-icon');
    const mobileMenuCloseIcon = document.getElementById('mobile-menu-close-icon');

    // Toggle user dropdown
    if (userMenuButton && userMenuDropdown) {
        userMenuButton.addEventListener('click', function() {
            const isExpanded = userMenuButton.getAttribute('aria-expanded') === 'true';
            userMenuButton.setAttribute('aria-expanded', !isExpanded);

            if (isExpanded) {
                userMenuDropdown.classList.add('hidden');
            } else {
                userMenuDropdown.classList.remove('hidden');
            }
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!userMenuButton.contains(event.target) && !userMenuDropdown.contains(event.target)) {
                userMenuButton.setAttribute('aria-expanded', 'false');
                userMenuDropdown.classList.add('hidden');
            }
        });

        // Handle dropdown menu item clicks
        const dropdownItems = userMenuDropdown.querySelectorAll('a');
        dropdownItems.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('Clicked:', this.textContent);
                // Navigate to the href of the clicked item
                window.location.href = this.getAttribute('href');
                // Close dropdown after clicking
                userMenuButton.setAttribute('aria-expanded', 'false');
                userMenuDropdown.classList.add('hidden');
            });
        });
    }

    // Toggle mobile menu
    if (mobileMenuButton && mobileMenu && mobileMenuIcon && mobileMenuCloseIcon) {
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
    }

    // Close dropdown and mobile menu when pressing Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            if (userMenuButton && userMenuDropdown) {
                userMenuButton.setAttribute('aria-expanded', 'false');
                userMenuDropdown.classList.add('hidden');
            }
            if (mobileMenuButton && mobileMenu && mobileMenuIcon && mobileMenuCloseIcon) {
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                mobileMenu.classList.add('hidden');
                mobileMenuIcon.classList.remove('hidden');
                mobileMenuIcon.classList.add('block');
                mobileMenuCloseIcon.classList.add('hidden');
                mobileMenuCloseIcon.classList.remove('block');
            }
        }
    });

    // Toggle confirm password visibility for Register
    var toggle = document.getElementById('toggle-confirm-password');
    if (toggle) {
        var confirmInput = document.getElementById('password_confirmation');
        toggle.addEventListener('change', function() {
            confirmInput.type = this.checked ? 'text' : 'password';
        });
    }

    // Toggle confirm password visibility for Login
        var toggle = document.getElementById('toggle-password');
        if (toggle) {
            var confirmInput = document.getElementById('password');
            toggle.addEventListener('change', function() {
                confirmInput.type = this.checked ? 'text' : 'password';
            });
        }
});