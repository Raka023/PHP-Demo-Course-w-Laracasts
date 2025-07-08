<?php require 'partials/head.php' ?>

    <?php require 'partials/nav.php' ?>

    <?php require 'partials/banner.php' ?>

    <main class="bg-black">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-6">
                    <div class="flex items-center">
                        <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800">
                            <svg class="h-4 w-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-zinc-400">Total Users</p>
                            <p class="text-2xl font-bold text-zinc-100">2,847</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-6">
                    <div class="flex items-center">
                        <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800">
                            <svg class="h-4 w-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-zinc-400">Revenue</p>
                            <p class="text-2xl font-bold text-zinc-100">$45,231</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-6">
                    <div class="flex items-center">
                        <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800">
                            <svg class="h-4 w-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l1 3m-8.5-3l1-3m-8.5 3l-1-3M6 16.5v2.25A2.25 2.25 0 004.5 21h-1.5m16.5 0h1.5a2.25 2.25 0 002.25-2.25V16.5m-3.75 0h-7.5" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-zinc-400">Sales</p>
                            <p class="text-2xl font-bold text-zinc-100">+12,234</p>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-6">
                    <div class="flex items-center">
                        <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800">
                            <svg class="h-4 w-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-zinc-400">Active Now</p>
                            <p class="text-2xl font-bold text-zinc-100">+573</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Card -->
            <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-semibold text-zinc-100">Recent Activity</h2>
                    <button class="rounded-md bg-zinc-900 px-4 py-2 text-sm font-medium text-zinc-100 border border-zinc-800 hover:bg-zinc-800 transition-colors">
                        View All
                    </button>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4 p-4 rounded-lg border border-zinc-800 bg-zinc-900/50">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-zinc-800 border border-zinc-700">
                            <span class="text-sm font-medium text-zinc-300">JD</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-zinc-100">John Doe</p>
                            <p class="text-sm text-zinc-400">Updated their profile information</p>
                        </div>
                        <span class="text-xs text-zinc-500">2 min ago</span>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg border border-zinc-800 bg-zinc-900/50">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-zinc-800 border border-zinc-700">
                            <span class="text-sm font-medium text-zinc-300">AS</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-zinc-100">Alice Smith</p>
                            <p class="text-sm text-zinc-400">Created a new project</p>
                        </div>
                        <span class="text-xs text-zinc-500">5 min ago</span>
                    </div>

                    <div class="flex items-center space-x-4 p-4 rounded-lg border border-zinc-800 bg-zinc-900/50">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-zinc-800 border border-zinc-700">
                            <span class="text-sm font-medium text-zinc-300">RJ</span>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-zinc-100">Robert Johnson</p>
                            <p class="text-sm text-zinc-400">Completed a task</p>
                        </div>
                        <span class="text-xs text-zinc-500">10 min ago</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php require 'partials/foot.php' ?>