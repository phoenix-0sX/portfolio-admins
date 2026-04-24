<header class="sticky top-0 z-50 w-full border-b dark:bg-zinc-50 text-sm mb-6 not-has-[nav]:hidden">
    @if (Route::has('login'))
        <nav class="flex h-16 mx-8 items-center justify-between">
            <a href="#" class="flex items-center gap-3 font-semibold text-zinc-600 hover:text-zinc-500">
                <img src="/favicon.svg" alt="Folio Manager Logo" height="50" width="50">
                <span class="text-lg tracking-tight">{{ config('app.name', 'Folio Manager') }}</span>
            </a>

            <div class="hidden md:flex items-center gap-8 text-slate-600/70 font-medium">
                <a href="#features" class="hover:text-zinc-700">Features</a>
                <a href="#how" class="hover:text-zinc-700">How it works</a>
                <a href="#cta" class="hover:text-zinc-700">Get started</a>
            </div>

            <div class="flex items-center gap-2 font-semibold text-zinc-600">
                @auth
                    <a href="{{ route('dashboard') }}"
                        class="inline-block px-5 py-1.5 hover:bg-zinc-100 rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 hover:bg-zinc-100 rounded-sm text-sm leading-normal">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 text-zinc-100 bg-zinc-900 hover:bg-zinc-700 rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </nav>
    @endif
</header>
