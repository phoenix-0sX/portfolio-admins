<section class="relative overflow-hidden">
    <div class="py-20 lg:py-28">
        <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
            <div>
                <span
                    class="inline-flex items-center gap-2 rounded-full border backdrop-blur px-4 py-1.5 text-xs font-medium title-secondary">
                    <x-sparkles-icon class="h-3.5 w-3.5 title-primary" />
                    Your career, beautifully organized
                </span>

                <h1 class="mt-6 title-primary text-4xl font-bold tracking-tight md:text-6xl leading-[1.1] max-w-xl">
                    Build the portfolio
                    <span class=" bg-gradiant-primary bg-clip-text text-4xl md:text-5xl font-extrabold text-transparent">
                        that tells your story
                    </span>
                </h1>

                <p class="mt-6 text-lg md:text-xl subtitle-primary max-w-xl leading-relaxed">
                    {{ config('app.name', 'Folio Manager') }} is the all-in-one portfolio manager for professionals.
                    Centralize your personal info, skills, experiences, projects and education — all in one elegant
                    workspace.
                </p>

                <div class="mt-8 flex flex-wrap font-semibold gap-3">

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-flex gap-4 items-center text-center bg-zinc-900 text-zinc-100 dark:text-zinc-900 dark:bg-zinc-300 align-middle rounded-xl py-4 px-6 hover:-translate-x-1 hover:scale-90 transition duration-150 ease-linear">
                            Subscribe for new account
                            <x-arrow-right-icon />
                        </a>
                    @endif
                    <a href="{{ auth()->check() ? route('dashboard') : route('login') }}"
                        class="border text-zinc-900 hover:bg-zinc-100 hover:shadow dark:border-zinc-700 dark:text-zinc-100 dark:hover:bg-zinc-900  align-middle rounded-xl py-4 px-6">
                        Start building
                    </a>
                </div>

                {{-- TODO: uncomment this section and use it when app finally sailed in prod and have many users --}}
                {{-- <div class="mt-10 flex flex-wrap items-center gap-6 text-sm subtitle-primary">
                    <div>
                        <p class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100">12k+</p>
                        <p>Portfolios created</p>
                    </div>
                    <div class="hidden h-10 w-px border-r border-zinc-200 dark:border-zinc-700 sm:block"></div>
                    <div>
                        <p class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100">4.9★</p>
                        <p>User satisfaction</p>
                    </div>
                    <div class="hidden h-10 w-px border-r border-zinc-200 dark:border-zinc-700 sm:block"></div>
                    <div>
                        <p class="text-2xl font-semibold text-zinc-900 dark:text-zinc-100">100%</p>
                        <p>You own your data</p>
                    </div>
                </div> --}}
            </div>

            <div class="relative motion-safe:animate-wiggle">
                <div class="absolute inset-0 bg-muted rounded-3xl blur-2xl opacity-40"></div>
                <img src="{{ asset('images/hero-portfolio.jpg') }}"
                    alt="Portfolio manager dashboard with profile, skills and projects" width="1536" height="1024"
                    class="relative rounded-3xl shadow-lg lg:shadow-2xl dark:shadow-zinc-100 border motion-safe:animate-float" />
            </div>
        </div>
    </div>
</section>
