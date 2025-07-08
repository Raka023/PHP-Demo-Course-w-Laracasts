<?php require 'partials/head.php' ?>

    <?php require 'partials/nav.php' ?>

    <?php require 'partials/banner.php' ?>

    <main class="bg-black">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8">
                <h2 class="text-xl font-semibold text-zinc-100 mb-6">Your Notes</h2>
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

<?php require 'partials/foot.php' ?>