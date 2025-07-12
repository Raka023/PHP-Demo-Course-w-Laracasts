<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main class="bg-black min-h-screen">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 shadow-lg w-full">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-zinc-100">Calendar</h2>
                <button class="inline-flex items-center rounded-md bg-zinc-100 px-4 py-2 text-sm font-medium text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black shadow-sm" aria-label="Add Event">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Event
                </button>
            </div>

            <!-- Calendar Placeholder -->
            <div class="flex flex-col items-center justify-center py-16">
                <svg class="w-12 h-12 text-zinc-700 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <rect x="3" y="4" width="18" height="18" rx="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16 2v4M8 2v4M3 10h18" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <p class="text-zinc-400 text-lg mb-4">Calendar functionality coming soon!</p>
                <p class="text-zinc-500 text-sm text-center max-w-md">This will be a full-featured calendar where you can view and manage your schedule, appointments, and important dates.</p>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>

<?php require base_path('views/partials/foot.php') ?>