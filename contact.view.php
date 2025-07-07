<!DOCTYPE html>
<html lang="en" class="h-full bg-black">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>PHP Demo</title>
</head>

<body class="h-full bg-black text-white">
    <div class="min-h-full">
        <nav class="relative z-50 border-b border-zinc-800 bg-black/95 backdrop-blur supports-[backdrop-filter]:bg-black/75">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800">
                                <span class="text-sm font-semibold text-zinc-100">R</span>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/" class="rounded-md bg-zinc-900 px-3 py-2 text-sm font-medium text-zinc-100 border border-zinc-800 transition-colors" aria-current="page">Home</a>
                                <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900 transition-colors">About</a>
                                <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900 transition-colors">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <button type="button" class="relative rounded-full bg-zinc-900 p-2 text-zinc-400 hover:text-zinc-100 border border-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                            </button>
                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" class="relative flex max-w-xs items-center rounded-full bg-zinc-900 text-sm focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black border border-zinc-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="size-8 rounded-full" src="https://avatars.githubusercontent.com/u/143157921?s=400&u=3e91d2c3ba489e7eb8ededc986391fb419f28364&v=4" alt="Profile Picture" />
                                    </button>
                                </div>
                                <div class="absolute right-0 z-50 mt-2 w-48 origin-top-right rounded-md bg-zinc-900 py-1 shadow-lg ring-1 ring-zinc-800 focus:outline-none hidden border border-zinc-800" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" id="user-menu-dropdown">
                                    <a href="#" class="block px-4 py-2 text-sm text-zinc-200 hover:bg-zinc-800 transition-colors" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-zinc-200 hover:bg-zinc-800 transition-colors" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-zinc-200 hover:bg-zinc-800 transition-colors" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-zinc-900 p-2 text-zinc-400 hover:text-zinc-100 border border-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" id="mobile-menu-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" id="mobile-menu-close-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden hidden border-t border-zinc-800 bg-zinc-950" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <a href="/" class="block rounded-md bg-zinc-900 px-3 py-2 text-base font-medium text-zinc-100 border border-zinc-800 transition-colors" aria-current="page">Home</a>
                    <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors">About</a>
                    <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors">Contact</a>
                </div>
                <div class="border-t border-zinc-800 pt-4 pb-3">
                    <!-- Profile icon -->
                    <div class="flex items-center px-5">
                        <div class="shrink-0">
                            <button type="button" class="relative flex max-w-xs items-center rounded-full bg-zinc-900 text-sm focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black border border-zinc-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="size-8 rounded-full" src="https://avatars.githubusercontent.com/u/143157921?s=400&u=3e91d2c3ba489e7eb8ededc986391fb419f28364&v=4" alt="Profile Picture" />
                            </button>
                        </div>
                    </div>
                </div>
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors">Your Profile</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors">Settings</a>
                    <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors">Sign Out</a>
                </div>
            </div>
        </nav>

        <header class="border-b border-zinc-800 bg-black/95 backdrop-blur supports-[backdrop-filter]:bg-black/75">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-zinc-100">Contact Us</h1>
                <p class="mt-2 text-sm text-zinc-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </header>

        <main class="bg-black">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                    <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-6">
                        <div class="flex items-center">
                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800">
                                <svg class="h-4 w-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-zinc-400">Total Users</p>
                                <p class="text-2xl font-bold text-zinc-100">2,847</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-6">
                        <div class="flex items-center">
                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800">
                                <svg class="h-4 w-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-zinc-400">Revenue</p>
                                <p class="text-2xl font-bold text-zinc-100">$45,231</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-6">
                        <div class="flex items-center">
                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800">
                                <svg class="h-4 w-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l1 3m-8.5-3l1-3m-8.5 3l-1-3M6 16.5v2.25A2.25 2.25 0 004.5 21h-1.5m16.5 0h1.5a2.25 2.25 0 002.25-2.25V16.5m-3.75 0h-7.5" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-zinc-400">Sales</p>
                                <p class="text-2xl font-bold text-zinc-100">+12,234</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-6">
                        <div class="flex items-center">
                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800">
                                <svg class="h-4 w-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-zinc-400">Active Now</p>
                                <p class="text-2xl font-bold text-zinc-100">+573</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Content Card -->
                <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-semibold text-zinc-100">Recent Activity</h2>
                        <button class="rounded-md bg-zinc-900 px-3 py-2 text-sm font-medium text-zinc-100 border border-zinc-800 hover:bg-zinc-800 transition-colors">
                            View All
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4 p-4 rounded-lg border border-zinc-800 bg-zinc-900/50">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-zinc-800 border border-zinc-700">
                                <span class="text-sm font-medium text-zinc-300">JD</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-zinc-100">John Doe</p>
                                <p class="text-sm text-zinc-400">Updated their profile information</p>
                            </div>
                            <span class="text-xs text-zinc-500">2 min ago</span>
                        </div>

                        <div class="flex items-center space-x-4 p-4 rounded-lg border border-zinc-800 bg-zinc-900/50">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-zinc-800 border border-zinc-700">
                                <span class="text-sm font-medium text-zinc-300">AS</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-zinc-100">Alice Smith</p>
                                <p class="text-sm text-zinc-400">Created a new project</p>
                            </div>
                            <span class="text-xs text-zinc-500">5 min ago</span>
                        </div>

                        <div class="flex items-center space-x-4 p-4 rounded-lg border border-zinc-800 bg-zinc-900/50">
                            <div class="flex h-10 w-10 items-center justify-center rounded-full bg-zinc-800 border border-zinc-700">
                                <span class="text-sm font-medium text-zinc-300">RJ</span>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-zinc-100">Robert Johnson</p>
                                <p class="text-sm text-zinc-400">Completed a task</p>
                            </div>
                            <span class="text-xs text-zinc-500">10 min ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
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
    </script>
</body>

</html>