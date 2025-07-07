<?php require 'partials/head.php' ?>

    <main class="bg-black min-h-screen flex items-center justify-center">
        <div class="mx-auto max-w-lg px-4 py-12 sm:px-6 lg:px-8">
            <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-10 flex flex-col items-center text-center shadow-lg">
                <?php if (http_response_code() === 404) : ?>
                    <div class="flex items-center justify-center mb-6">
                        <span class="text-7xl font-extrabold text-zinc-100 tracking-tight">404</span>
                    </div>
                    <h1 class="text-2xl font-bold text-zinc-100 mb-2">Page Not Found</h1>
                    <p class="text-zinc-400 mb-6">Sorry, the page you are looking for does not exist or has been moved.</p>
                    <a href="/" class="inline-flex items-center rounded-md bg-zinc-900 px-5 py-2.5 text-sm font-medium text-zinc-100 border border-zinc-800 hover:bg-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black">
                        Go Home
                    </a>
                <?php endif ?>
            </div>
        </div>
    </main>

<?php require 'partials/foot.php' ?>