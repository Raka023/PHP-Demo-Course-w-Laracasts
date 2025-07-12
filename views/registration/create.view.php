<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php')
?>

<main class="bg-gradient-to-b from-black via-zinc-950 to-zinc-900 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl mx-auto px-4 py-12">
        <div class="rounded-lg border border-zinc-800 bg-zinc-950 p-8 shadow-lg">
            <h2 class="text-2xl font-semibold text-zinc-100 mb-12 text-center">Create an Account</h2>
            <form action="/register" method="POST" class="space-y-6">
                <div>
                    <!-- <label for="name" class="block text-sm font-medium text-zinc-200 mb-2">Name</label> -->
                    <input id="name" name="name" type="text" placeholder="Name" value="<?= $_POST['name'] ?? '' ?>" class="block w-full rounded-md border border-zinc-800 bg-zinc-900/50 text-zinc-100 p-3 focus:border-zinc-500 focus:ring-2 focus:ring-zinc-500" />
                    <?php if (isset($errors['name'])) : ?>
                        <div class="rounded-md border border-red-800 bg-red-950/80 p-2 text-red-300 text-sm mt-2">
                            <?= $errors['name'] ?>
                        </div>
                    <?php endif ?>
                </div>
                <div>
                    <!-- <label for="email" class="block text-sm font-medium text-zinc-200 mb-2">Email</label> -->
                    <input id="email" name="email" type="text" placeholder="Email" value="<?= $_POST['email'] ?? '' ?>" class="block w-full rounded-md border border-zinc-800 bg-zinc-900/50 text-zinc-100 p-3 focus:border-zinc-500 focus:ring-2 focus:ring-zinc-500" />
                    <?php if (isset($errors['email'])) : ?>
                        <div class="rounded-md border border-red-800 bg-red-950/80 p-2 text-red-300 text-sm mt-2">
                            <?= $errors['email'] ?>
                        </div>
                    <?php endif ?>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <!-- <label for="password" class="block text-sm font-medium text-zinc-200 mb-2">Password</label> -->
                        <input id="password" name="password" type="password" placeholder="Password" value="<?= $_POST['password'] ?? '' ?>" class="block w-full rounded-md border border-zinc-800 bg-zinc-900/50 text-zinc-100 p-3 focus:border-zinc-500 focus:ring-2 focus:ring-zinc-500" />
                    </div>
                    <div>
                        <!-- <label for="password_confirmation" class="block text-sm font-medium text-zinc-200 mb-2">Confirm Password</label> -->
                        <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" value="<?= $_POST['password_confirmation'] ?? '' ?>" class="block w-full rounded-md border border-zinc-800 bg-zinc-900/50 text-zinc-100 p-3 focus:border-zinc-500 focus:ring-2 focus:ring-zinc-500" />
                    </div>
                </div>
                <?php if (isset($errors['password'])) : ?>
                    <div class="rounded-md border border-red-800 bg-red-950/80 p-2 text-red-300 text-sm mt-2">
                        <?= $errors['password'] ?>
                    </div>
                <?php endif ?>
                <div class="flex items-center mt-2 md:justify-end">
                    <div class="md:col-start-2">
                        <label class="inline-flex items-center gap-2 cursor-pointer select-none text-sm text-zinc-400">
                            <span class="relative flex items-center">
                                <input id="toggle-confirm-password" type="checkbox" class="peer sr-only" />
                                <span class="h-5 w-5 rounded border border-zinc-800 bg-zinc-950 flex items-center justify-center transition-colors duration-200 peer-checked:bg-white peer-focus:ring-2 peer-focus:ring-zinc-500"></span>
                                <svg class="absolute left-0 top-0 w-5 h-5 text-black opacity-0 peer-checked:opacity-100 transition-opacity duration-200 pointer-events-none" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M6 10l3 3 5-5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            Show confirm password
                        </label>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <a href="/login" class="text-sm text-zinc-400 hover:text-zinc-100 transition-colors">Already have an account?</a>
                    <button type="submit" class="inline-flex items-center rounded-md bg-zinc-100 px-6 py-2 text-sm font-medium text-zinc-900 border border-zinc-800 hover:bg-zinc-300 cursor-pointer transition-colors focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2 focus:ring-offset-black shadow-sm">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>

<?php require base_path('views/partials/foot.php') ?>