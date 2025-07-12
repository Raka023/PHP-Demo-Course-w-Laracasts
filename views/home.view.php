<?php require 'partials/head.php' ?>

    <?php require 'partials/nav.php' ?>

    <?php if (isset($_SESSION['user']) && $_SESSION['user']) { require 'partials/banner.php'; } ?>

    <main class="bg-gradient-to-b from-black via-zinc-950 to-zinc-900 min-h-screen">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <section class="text-center mb-16">
                <h1 class="text-4xl sm:text-5xl font-extrabold text-zinc-100 mb-4">Welcome to PHPDemo</h1>
                <p class="text-lg text-zinc-400 mb-8 max-w-2xl mx-auto">Just a test CRUD Application with using a Note</p>
                <a href="/notes" class="inline-flex items-center rounded-md bg-zinc-100 px-6 py-3 text-lg font-semibold text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black shadow-lg">
                    Get Started
                </a>
            </section>

            <!-- Quick Start Section -->
            <section class="mb-16">
                <h2 class="text-2xl font-bold text-zinc-100 text-center mb-8">Quick Start</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Notes Card -->
                    <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 flex flex-col items-center text-center shadow-lg">
                        <svg class="w-10 h-10 text-zinc-400 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 8h8M8 12h8M8 16h4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <h3 class="text-xl font-semibold text-zinc-100 mb-2">Notes</h3>
                        <p class="text-zinc-400 mb-4">Jot down your ideas, reminders, and important information in one place.</p>
                        <a href="/notes" class="inline-flex items-center rounded-md bg-zinc-100 px-4 py-2 text-sm font-medium text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black">Go to Notes</a>
                    </div>
                    <!-- Todos Card -->
                    <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 flex flex-col items-center text-center shadow-lg">
                        <svg class="w-10 h-10 text-zinc-400 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 12l2 2l4-4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <h3 class="text-xl font-semibold text-zinc-100 mb-2">Todos</h3>
                        <p class="text-zinc-400 mb-4">Keep track of your tasks and stay productive with your personal todo list.</p>
                        <a href="/todos" class="inline-flex items-center rounded-md bg-zinc-100 px-4 py-2 text-sm font-medium text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black">Go to Todos</a>
                    </div>
                    <!-- Calendar Card -->
                    <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 flex flex-col items-center text-center shadow-lg">
                        <svg class="w-10 h-10 text-zinc-400 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 2v4M8 2v4M3 10h18" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <h3 class="text-xl font-semibold text-zinc-100 mb-2">Calendar</h3>
                        <p class="text-zinc-400 mb-4">View and manage your schedule, appointments, and important dates.</p>
                        <a href="/calendar" class="inline-flex items-center rounded-md bg-zinc-100 px-4 py-2 text-sm font-medium text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black">Go to Calendar</a>
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php require 'partials/foot.php' ?>