<header
    class="sticky top-0 z-50 w-full border-b dark:border-zinc-700 backdrop-blur-xl text-sm mb-6 not-has-[nav]:hidden">
    @if (Route::has('login'))
        <nav class="flex h-16 mx-4 md:mx-8 items-center justify-between">
            <a href="#"
                class="flex items-center gap-3 font-semibold text-zinc-600 hover:text-zinc-500 dark:text-zinc-100 dark:hover:text-zinc-300">
                <x-app-logo-icon class="size-5 md:size-8 fill-current text-black dark:text-white" />
                <span class="md:text-lg tracking-tight">{{ config('app.name', 'Folio Manager') }}</span>
            </a>

            <div class="hidden md:flex items-center gap-8 text-slate-600/70 dark:text-slate-300 font-medium">
                <a href="#features" class="hover:text-zinc-700 dark:hover:text-slate-300/70">Features</a>
                <a href="#how" class="hover:text-zinc-700 dark:hover:text-slate-300/70">How it works</a>
                <a href="#cta" class="hover:text-zinc-700 dark:hover:text-slate-300/70">Contact</a>
            </div>

            <div class="flex items-center gap-2 font-semibold text-zinc-600 dark:text-zinc-100">
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="inline-block px-5 py-1.5 hover:bg-zinc-100 dark:hover:bg-zinc-900 rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 hover:bg-zinc-100 dark:hover:bg-zinc-900 rounded-sm text-sm leading-normal">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 text-zinc-100 bg-zinc-900 hover:bg-zinc-700 dark:text-zinc-900 dark:bg-zinc-300 dark:hover:bg-zinc-400 rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </nav>
    @endif
</header>
