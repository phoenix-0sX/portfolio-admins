@php
    $features = [
        [
            'icon' => 'user',
            'title' => 'Personal information',
            'desc' => 'Keep your bio, contact details and headline polished and up to date in one place.',
        ],
        [
            'icon' => 'sparkles',
            'title' => 'Skills & expertise',
            'desc' => 'Showcase your technical and soft skills with proficiency levels and categories.',
        ],
        [
            'icon' => 'briefcase',
            'title' => 'Work experiences',
            'desc' => 'Document every role with rich descriptions, dates, and key achievements.',
        ],
        [
            'icon' => 'folder',
            'title' => 'Projects',
            'desc' => 'Highlight projects with images, links, technologies and outcomes that impress.',
        ],
        [
            'icon' => 'graduation',
            'title' => 'Education',
            'desc' => 'Track diplomas, certifications and courses across your learning journey.',
        ],
        [
            'icon' => 'share',
            'title' => 'Share anywhere',
            'desc' => 'Export or share a public portfolio data tailored for recruiters and clients.',
        ],
    ];

    $svg = [
        'user' => '<path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
        'sparkles' =>
            '<path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/>',
        'briefcase' =>
            '<rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
        'folder' => '<path d="M20 7h-8l-2-2H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>',
        'graduation' => '<path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/>',
        'share' =>
            '<circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" x2="15.42" y1="13.51" y2="17.49"/><line x1="15.41" x2="8.59" y1="6.51" y2="10.49"/>',
    ];
@endphp

<section id="features" class="relative overflow-hidden">
    <div class="py-20 lg:py-28 flex flex-col items-center">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="welcome-section-title title-primary">Everything your portfolio needs</h2>
            <p class="welcome-section-subtitle subtitle-primary">One workspace for every part of your professional story.
            </p>
        </div>

        <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-3 lg:w-7xl">
            @foreach ($features as $feat)
                <div
                    class="group relative rounded-2xl border dark:border-zinc-700 p-6 shadow hover:shadow-xl shadow-zinc-100 dark:shadow-zinc-700 transition-all duration-300 hover:-translate-y-1">
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-linear-to-r from-zinc-700 to-slate-500 text-white dark:from-zinc-200 dark:to-slate-500 dark:text-black shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">{!! $svg[$feat['icon']] !!}</svg>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold title-primary">{{ $feat['title'] }}</h3>
                    <p class="mt-2 text-sm subtitle-primary leading-relaxed">{{ $feat['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
