<?php require base_path('views/partials/head.php') ?>

<main class="bg-black min-h-screen flex items-center justify-center">
    <div class="mx-auto max-w-lg px-4 py-12 sm:px-6 lg:px-8">
        <?php if (http_response_code() === 404) : ?>
            <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-10 flex flex-col items-center text-center shadow-lg">
                <div class="flex items-center justify-center mb-6">
                    <span class="text-7xl font-extrabold text-zinc-100 tracking-tight">404</span>
                </div>
                <h1 class="text-2xl font-bold text-zinc-100 mb-2">Page Not Found</h1>
                <p class="text-zinc-400 mb-6">Sorry, the page you are looking for does not exist or has been moved.</p>
                <a href="/" class="inline-flex items-center rounded-md bg-zinc-900 px-5 py-2.5 text-sm font-medium text-zinc-100 border border-zinc-800 hover:bg-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black" aria-label="Go Home">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" />
                    </svg>
                    Go Home
                </a>
            </div>
        <?php elseif (http_response_code() === 403) : ?>
            <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-10 flex flex-col items-center text-center shadow-lg">
                <div class="flex items-center justify-center mb-6">
                    <span class="text-7xl font-extrabold text-zinc-100 tracking-tight">403</span>
                </div>
                <h1 class="text-2xl font-bold text-zinc-100 mb-2">Forbidden</h1>
                <p class="text-zinc-400 mb-6">Sorry, you are not authorized to view this page.</p>
                <a href="/" class="inline-flex items-center rounded-md bg-zinc-900 px-5 py-2.5 text-sm font-medium text-zinc-100 border border-zinc-800 hover:bg-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black" aria-label="Go Home">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" />
                    </svg>
                    Go Home
                </a>
            </div>
        <?php else: ?>
            <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-10 flex flex-col items-center text-center shadow-lg">
                <div class="flex items-center justify-center mb-6">
                    <span class="text-7xl font-extrabold text-zinc-100 tracking-tight">Error</span>
                </div>
                <h1 class="text-2xl font-bold text-zinc-100 mb-2">Something went wrong</h1>
                <p class="text-zinc-400 mb-6">An unexpected error has occurred. Please try again later.</p>
                <a href="/" class="inline-flex items-center rounded-md bg-zinc-900 px-5 py-2.5 text-sm font-medium text-zinc-100 border border-zinc-800 hover:bg-zinc-800 transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black" aria-label="Go Home">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" />
                    </svg>
                    Go Home
                </a>
            </div>
        <?php endif ?>
    </div>
</main>

<?php require base_path('views/partials/foot.php') ?>