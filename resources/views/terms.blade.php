<x-layouts::home :title="__('Terms of Service')" :show-navigation="false" :show-contact="false">
    @php
        $app_name = config('app.name', 'Folio Manager');
    @endphp
    <section class="min-h-screen mx-auto max-w-3xl">
        <p class="mb-4 text-sm font-medium title-secondary">
            Last updated: April 29, 2026
        </p>

        <h1 class="text-4xl font-semibold tracking-tight md:text-5xl title-primary">
            Terms of Service
        </h1>

        <div class="mt-10 space-y-8 title-secondary">
            <section class="space-y-3">
                <h2 class="text-xl font-semibold title-primary">
                    Use of {{ $app_name }}
                </h2>
                <p>
                    By using {{ $app_name }}, you agree to use the service responsibly and only for lawful
                    purposes. You are responsible for the accuracy of the information you provide.
                </p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-semibold title-primary">
                    Content and ownership
                </h2>
                <p>
                    You keep ownership of the content you create or submit. You grant us
                    permission to use that content only as needed to provide and improve the
                    service.
                </p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-semibold title-primary">
                    Availability
                </h2>
                <p>
                    We aim to keep {{ $app_name }} reliable and accessible, but we cannot guarantee
                    uninterrupted access or error-free operation at all times.
                </p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-semibold title-primary">
                    Changes
                </h2>
                <p>
                    We may update these terms from time to time. Continued use of {{ $app_name }} after
                    changes means you accept the updated terms.
                </p>
            </section>
        </div>
    </section>
</x-layouts::home>
