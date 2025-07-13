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
                        <a href="/" <?= navlinks('/') ?>>Home</a>
                            <?php if (isset($_SESSION['user'])) : ?>
                                <a href="/notes" <?= navlinks('/notes') ?>>Notes</a>
                                <a href="/todos" <?= navlinks('/todos') ?>>Todos</a>
                                <a href="/calendar" <?= navlinks('/calendar') ?>>Calendar</a>
                            <?php endif ?>
                        <a href="/support" <?= navlinks('/support') ?>>Support</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <?php if (isset($_SESSION['user'])) : ?>
                        <button type="button" class="relative rounded-full bg-zinc-900 p-2 text-zinc-400 hover:text-zinc-100 border border-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>
                    <?php endif ?>
                    <!-- Profile dropdown or Auth buttons -->
                    <div class="relative ml-3">
                        <?php if (isset($_SESSION['user'])) : ?>
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
                                <form action="/logout" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-zinc-200 cursor-pointer hover:bg-zinc-800 transition-colors" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign Out</button>
                                </form>
                            </div>
                        <?php else : ?>
                            <div class="flex gap-2">
                                <a href="/login" class="inline-flex items-center rounded-md border border-zinc-800 bg-zinc-900 px-4 py-2 text-sm font-semibold text-zinc-100 hover:bg-zinc-800/70 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black">Login</a>
                                <a href="/register" class="inline-flex items-center rounded-md bg-zinc-100 px-4 py-2 text-sm font-semibold text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black">Register</a>
                            </div>
                        <?php endif ?>
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
            <a href="/" <?= navlinks('/', 'mobile') ?>>Home</a>
            <?php if (isset($_SESSION['user'])) : ?>
                <a href="/notes" <?= navlinks('/notes', 'mobile') ?>>Notes</a>
                <a href="/todos" <?= navlinks('/todos', 'mobile') ?>>Todos</a>
                <a href="/calendar" <?= navlinks('/calendar', 'mobile') ?>>Calendar</a>
            <?php endif ?>
            <a href="/support" <?= navlinks('/support', 'mobile') ?>>Support</a>
        </div>
        <?php if (isset($_SESSION['user'])) : ?>
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
                <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors">Your Profile</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors">Notifications</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-semibold text-zinc-400 hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors">Settings</a>
                <form action="/logout" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="block w-full text-left rounded-md px-3 py-2 text-base font-semibold text-zinc-400 cursor-pointer hover:text-zinc-100 hover:bg-zinc-900/50 transition-colors">Sign Out</button>
                </form>
            </div>
        <?php else : ?>
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <a href="/login" class="block rounded-md border border-zinc-800 px-3 py-2 text-base font-semibold text-zinc-100 hover:bg-zinc-900/70 transition-colors mt-2">Login</a>
                <a href="/register" class="block rounded-md bg-zinc-100 px-3 py-2 text-base font-semibold text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors mt-2">Register</a>
            </div>
        <?php endif ?>
    </div>
</nav>