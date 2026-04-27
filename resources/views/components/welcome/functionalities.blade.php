@php
    $steps = [
        ['title' => 'Create your profile', 'desc' => 'Sign up and add your personal details in minutes.'],
        ['title' => 'Fill your portfolio', 'desc' => 'Add skills, experiences, projects and education.'],
        [
            'title' => 'Share with the world',
            'desc' => 'Extract and publish your portfolio and stand out from the crowd.',
        ],
    ];

    function getNumber($index)
    {
        $number = $index + 1;
        if ($number < 10) {
            return '0' . $number;
        }
        return $number;
    }
@endphp

<section id="functionalities" class="relative overflow-hidden">
    <div class="py-20 lg:py-28 flex flex-col items-center">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="welcome-section-title title-primary">How it works</h2>
            <p class="welcome-section-subtitle subtitle-primary">From empty page to standout portfolio in three steps.
            </p>
        </div>

        <div class="mt-14 grid gap-6 md:grid-cols-3 lg:w-7xl">
            @foreach ($steps as $index => $step)
                <div class="rounded-2xl border dark:border-zinc-700 p-8 shadow-smooth">
                    <span
                        class="text-sm font-mono bg-gradient-primary bg-clip-text text-transparent">{{ getNumber($index) }}</span>
                    <h3 class="mt-3 text-xl font-semibold title-primary">{{ $step['title'] }}</h3>
                    <p class="mt-2 text-muted-foreground subtitle-primary">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
