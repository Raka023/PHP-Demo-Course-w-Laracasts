<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>

<main class="bg-black min-h-screen">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 shadow-lg w-full">
            <h2 class="text-2xl font-bold text-zinc-100 mb-6">Contact Support</h2>
            <?php if (!empty($submitted)) : ?>
                <div class="rounded-md border border-green-800 bg-green-950/80 p-4 text-green-300 text-lg text-center mb-4">
                    <p>Thank you for reaching out! We'll get back to you soon.</p>
                    <p class="text-sm mt-2 text-green-200/50">(this will likely never happen)</p>
                </div>
            <?php else : ?>
                <form method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-md font-medium text-zinc-200 mb-2">Name</label>
                        <input type="text" id="name" name="name" value="<?= htmlspecialchars($name) ?>" class="block w-full rounded-md border border-zinc-800 bg-zinc-900/50 text-zinc-100 p-3 focus:border-zinc-500 focus:ring-2 focus:ring-zinc-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-md font-medium text-zinc-200 mb-2">Email</label>
                        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" class="block w-full rounded-md border border-zinc-800 bg-zinc-900/50 text-zinc-100 p-3 focus:border-zinc-500 focus:ring-2 focus:ring-zinc-500" required>
                    </div>
                    <div>
                        <label for="message" class="block text-md font-medium text-zinc-200 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="block w-full rounded-md border border-zinc-800 bg-zinc-900/50 text-zinc-100 p-3 focus:border-zinc-500 focus:ring-2 focus:ring-zinc-500 resize-none" required><?= htmlspecialchars($message) ?></textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex items-center rounded-md bg-zinc-100 px-6 py-2 text-md font-medium text-zinc-900 border border-zinc-800 hover:bg-zinc-300 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black shadow-sm" aria-label="Send Message">
                            Send Message
                        </button>
                    </div>
                </form>
            <?php endif ?>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>

<?php require base_path('views/partials/foot.php') ?>