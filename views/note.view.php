<?php require 'partials/head.php' ?>

    <?php require 'partials/nav.php' ?>

    <?php require 'partials/banner.php' ?>

    <main class="bg-black">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col h-100">
                <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 shadow-lg w-full flex flex-col flex-grow h-full">
                    <div class="mb-4">
                        <a href="/notes" class="inline-flex items-center text-sm font-medium text-zinc-400 hover:text-zinc-100 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                            Back to Notes
                        </a>
                    </div>
                    <h2 class="text-2xl font-bold text-zinc-100 mb-4">Note</h2>
                    <div class="w-full rounded-lg border border-zinc-800 bg-zinc-900/50 p-6 flex-1 flex">
                        <p class="text-zinc-100 text-base"> <?= htmlspecialchars($note['body']) ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php require 'partials/foot.php' ?>