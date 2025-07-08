<?php require 'partials/head.php' ?>

    <?php require 'partials/nav.php' ?>

    <?php require 'partials/banner.php' ?>

    <main class="bg-black">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 relative">
                <h2 class="text-xl font-semibold text-zinc-100 mb-6">Create a Note</h2>
                <form method="POST" class="space-y-6">
                    <div>
                        <label for="body" class="block text-md font-medium text-zinc-200 mb-2">Note</label>
                        <textarea id="body" name="body" placeholder="Here's an idea for a note..." rows="6" required class="block w-full rounded-md border border-zinc-800 bg-zinc-900/50 text-zinc-100 p-6 focus:border-zinc-500 focus:ring-2 focus:ring-zinc-500 resize-none"></textarea>
                    </div>
                    <div class="flex items-center justify-end space-x-3">
                        <a href="/notes" class="inline-flex items-center rounded-md border border-zinc-800 bg-zinc-900 px-4 py-2 text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black">Cancel</a>
                        <button type="submit" class="inline-flex items-center rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-zinc-100 border border-zinc-800 hover:bg-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black shadow-sm">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" /></svg>
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php require 'partials/foot.php' ?>
