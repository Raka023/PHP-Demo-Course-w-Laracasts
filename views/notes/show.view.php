<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main class="bg-black min-h-screen">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 shadow-lg w-full flex flex-col">
            <div class="flex items-center justify-between mb-4">
                <a href="/notes" class="inline-flex items-center text-sm font-medium text-zinc-400 hover:text-zinc-100 transition-colors" aria-label="Back to Notes">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Notes
                </a>
                <div class="flex items-center space-x-2">
                    <a href="/notes/note/edit?id=<?= $note['id'] ?>" class="inline-flex items-center rounded-md border border-zinc-800 bg-zinc-900 px-4 py-2 text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black" aria-label="Edit Note">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232a2.828 2.828 0 1 1 4 4L7.5 21H3v-4.5l11.232-11.268z" />
                        </svg>
                        Edit
                    </a>
                    <form method="POST" onsubmit="return confirm('Are you sure you want to delete this note?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="<?= $note['id'] ?>">
                        <button type="submit" class="inline-flex items-center rounded-md border border-red-800 bg-red-950 px-4 py-2 text-sm font-medium text-red-300 cursor-pointer hover:text-white hover:bg-red-800 transition-colors focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 focus:ring-offset-black" aria-label="Delete Note">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            <h2 class="text-xl font-semibold text-zinc-100 mb-4">Note</h2>
            <div class="w-full rounded-lg border border-zinc-800 bg-zinc-900/50 p-4 flex-1 flex">
                <p class="text-zinc-100 text-base"> <?= htmlspecialchars($note['body']) ?> </p>
            </div>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>

<?php require base_path('views/partials/foot.php') ?>