<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main class="bg-black min-h-screen">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 shadow-lg w-full">
            <h2 class="text-2xl font-bold text-zinc-100 mb-6">Your Todos</h2>
            <!-- Add Todo Form -->
            <form method="POST" class="flex items-center space-x-4 mb-8">
                <input type="text" name="todo" placeholder="What needs to be done?" class="flex-1 rounded-md border border-zinc-800 bg-zinc-900/50 text-zinc-100 p-3 focus:border-zinc-500 focus:ring-2 focus:ring-zinc-500" required>
                <button type="submit" class="inline-flex items-center rounded-md bg-zinc-100 px-4 py-2 text-md font-medium text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black shadow-sm" aria-label="Add Todo">
                    Add
                </button>
            </form>
            <?php if (isset($errors['todo'])) : ?>
                <div class="rounded-md border border-red-800 bg-red-950/80 p-2 text-red-300 text-sm mb-4">
                    <?= $errors['todo'] ?>
                </div>
            <?php endif; ?>
            <!-- Todos List -->
            <?php if (empty($todos)) : ?>
                <div class="flex flex-col items-center justify-center py-16">
                    <svg class="w-12 h-12 text-zinc-700 mb-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="4" y="4" width="16" height="16" rx="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 12l2 2l4-4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="text-zinc-400 text-lg mb-2">No todos yet. Add your first task!</p>
                </div>
            <?php else : ?>
                <ul class="divide-y divide-zinc-800">
                    <?php foreach ($todos as $todo): ?>
                        <li class="flex items-center justify-between py-4">
                            <form method="POST" action="/todos/toggle" class="flex items-center flex-1">
                                <input type="hidden" name="id" value="<?= $todo['id'] ?>">
                                <input type="checkbox" name="completed" onchange="this.form.submit()" <?= $todo['completed'] ? 'checked' : '' ?> class="h-5 w-5 text-zinc-500 bg-zinc-900 border-zinc-700 rounded focus:ring-zinc-500" aria-label="Toggle todo completion">
                                <span class="ml-4 text-zinc-100 text-base <?= $todo['completed'] ? 'line-through text-zinc-500' : '' ?>">
                                    <?= htmlspecialchars($todo['text']) ?>
                                </span>
                            </form>
                            <form method="POST" action="/todos/delete" onsubmit="return confirm('Delete this todo?')">
                                <input type="hidden" name="id" value="<?= $todo['id'] ?>">
                                <button type="submit" class="ml-4 text-red-400 hover:text-red-200 transition-colors" title="Delete" aria-label="Delete todo">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </form>
                        </li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>

<?php require base_path('views/partials/foot.php') ?>