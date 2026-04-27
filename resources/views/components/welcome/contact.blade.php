@props([
    'contactEmail' => 'lanjarl054@gmail.com',
    'contactPhone' => '+261 34 93 889 53',
])

<section id="contact" class="relative overflow-hidden">
    <div class="w-full flex items-center justify-center py-20 lg:py-28 px-7 lg:px-48 bg-gray-100 dark:bg-zinc-900/50">
        <div class="m-w-lg relative overflow-hidden rounded-3xl bg-gradient-secondary shadow-smooth p-8 md:p-12 lg:p-16">
            <div class="relative grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-start">
                <div class="max-w-2xl">
                    <h2 class="text-3xl font-bold tracking-tight title-primary-reverse md:text-5xl">
                        Ready to manage your portfolio with ease?
                    </h2>

                    <p class="mt-4 text-lg font-medium subtitle-primary-reverse">
                        Start organizing your career story, or contact us for a guided introduction.
                    </p>

                    <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                        <a href="#" class="btn-white">
                            Create your free account
                            <x-arrow-right-icon />
                        </a>

                        <a href="tel:{{ preg_replace('/\s+/', '', $contactPhone) }}" class="btn-white">
                            <x-phone-icon />
                            Call us
                        </a>
                    </div>
                    <div class="mt-4 flex flex-col sm:flex-row gap-4">
                        <p class="flex items-center gap-2 text-sm font-medium subtitle-primary-reverse">
                            <x-email-icon />
                            {{ $contactEmail }}
                        </p>
                        <p class="flex items-center gap-2 text-sm font-medium subtitle-primary-reverse">
                            <x-phone-icon />
                            {{ $contactPhone }}
                        </p>
                    </div>
                </div>

                <form action="mailto:{{ $contactEmail }}" method="POST" enctype="text/plain"
                    class="rounded-2xl border dark:border-zinc-700 bg-zinc-50 dark:bg-zinc-800 p-5 shadow-smooth md:p-6">
                    <div class="grid gap-4">
                        <div class="grid gap-2">
                            <label for="contact-name" class="text-label title-primary">
                                Name
                            </label>

                            <input id="contact-name" name="name" type="text" required maxlength="80"
                                placeholder="Your name" class="h-10 welcome-input">
                        </div>

                        <div class="grid gap-2">
                            <label for="contact-email" class="text-label title-primary">
                                Email
                            </label>

                            <input id="contact-email" name="email" type="email" required maxlength="120"
                                placeholder="you@example.com" class="h-10 welcome-input">
                        </div>

                        <div class="grid gap-2">
                            <label for="contact-message" class="text-label title-primary">
                                Message
                            </label>

                            <textarea id="contact-message" name="message" required maxlength="600" placeholder="Tell us what you need"
                                class="min-h-24 welcome-input"></textarea>
                        </div>

                        <button type="submit" class="btn-primary">
                            Send message
                            <x-email-icon />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
