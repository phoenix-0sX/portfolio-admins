<x-layouts::home :title="__('Privacy Policy')" :show-navigation="false" :show-contact="false">
    @php
        $app_name = config('app.name', 'Folio Manager');
    @endphp
    <section class="min-h-screen mx-auto max-w-3xl">
        <p class="mb-4 text-sm font-medium title-secondary">
            Last updated: April 29, 2026
        </p>

        <h1 class="text-4xl font-semibold tracking-tight md:text-5xl title-primary">
            Privacy Policy
        </h1>

        <div class="mt-10 space-y-8 title-secondary">
            <section class="space-y-3">
                <h2 class="text-xl font-semibold title-primary">
                    Information we collect
                </h2>
                <p>
                    We collect the information you choose to share with us, such as your name,
                    email address, phone number, and message when you submit a contact form or
                    request support.
                </p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-semibold title-primary">
                    How we use information
                </h2>
                <p>
                    We use your information to respond to inquiries, provide requested services,
                    improve the experience, and communicate important updates related to {{ $app_name }}.

                    We may use aggregated or anonymized information for analytics, research, business development, and
                    service improvement purposes.
                </p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-semibold title-primary">
                    Sharing and retention
                </h2>
                <p>
                    We may use collected information to improve our services, personalize user experience, conduct
                    analytics, develop business insights, and support monetization activities related to our platform.

                    We do not share personally identifiable information with third parties except as described in this
                    Privacy Policy, when required by law, or with your consent.

                    We retain information only for as long as necessary to provide our services, comply with legal
                    obligations, resolve disputes, and enforce our agreements.
                </p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-semibold title-primary">
                    Contact
                </h2>
                <p>
                    If you have questions about this policy, contact us through the contact form
                    on the home page.
                </p>
            </section>

            <section class="space-y-3">
                <h2 class="text-xl font-semibold title-primary">
                    Changes
                </h2>
                <p>
                    We may update these privacy from time to time. Continued use of {{ $app_name }} after
                    changes means you accept the updated terms.
                </p>
            </section>
        </div>
    </section>
</x-layouts::home>
