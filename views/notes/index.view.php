<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main class="bg-black min-h-screen">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 shadow-lg w-full">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-zinc-100 mb-6">Your Notes</h2>
                <a href="/notes/create" class="inline-flex items-center rounded-md bg-zinc-100 px-4 py-2 text-sm font-medium text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black shadow-sm" aria-label="Add Note">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                    Add Note
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if (empty($notes)) : ?>
                    <div class="col-span-full flex flex-col items-center justify-center py-16">
                        <svg class="w-12 h-12 text-zinc-700 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="4" y="4" width="16" height="16" rx="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 8h8M8 12h8M8 16h4" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="text-zinc-400 text-lg mb-4">You don't have any notes yet.</p>
                        <a href="/notes/create" class="inline-flex items-center rounded-md bg-zinc-100 px-4 py-2 text-sm font-medium text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black shadow-sm" aria-label="Create your first note">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                            </svg>
                            Create your first note
                        </a>
                    </div>
                <?php else : ?>
                    <?php foreach ($notes as $note) : ?>
                        <div class="rounded-lg border border-zinc-800 bg-zinc-900/50 p-6 flex flex-col shadow-sm w-full flex-1">
                            <div class="flex-1">
                                <p class="text-zinc-100 text-base mb-2 px-1"> <?= htmlspecialchars($note['body']) ?> </p>
                            </div>
                            <div class="mt-6 me-2 flex justify-end">
                                <a href="/notes/note?id=<?= $note['id'] ?>" class="inline-flex items-center text-sm font-medium text-zinc-400 hover:text-zinc-100 transition-colors" aria-label="View Note">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <rect x="4" y="4" width="16" height="16" rx="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8 8h8M8 12h8M8 16h4" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    View
                                </a>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>

<?php require base_path('views/partials/foot.php') ?>