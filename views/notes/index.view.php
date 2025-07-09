<?php require base_path('views/partials/head.php') ?>

    <?php require base_path('views/partials/nav.php') ?>

    <?php require base_path('views/partials/banner.php') ?>

    <main class="bg-black">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 relative">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-semibold text-zinc-100">Your Notes</h2>
                    <a href="/notes/create" class="inline-flex items-center rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-zinc-100 border border-zinc-800 hover:bg-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black shadow-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                        Add Note
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php foreach ($notes as $note): ?>
                        <div class="rounded-lg border border-zinc-800 bg-zinc-900/50 p-6 flex flex-col shadow-sm">
                            <div class="flex-1">
                                <p class="text-zinc-100 text-base mb-2"> <?= htmlspecialchars($note['body']) ?> </p>
                            </div>
                            <div class="mt-4 flex justify-end">
                                <a href="/notes/note?id=<?= $note['id'] ?>" class="text-sm font-medium text-zinc-400 hover:text-zinc-100 transition-colors">View</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

<?php require base_path('views/partials/foot.php') ?>