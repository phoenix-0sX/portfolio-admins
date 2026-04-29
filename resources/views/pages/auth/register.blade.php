<x-layouts::auth :title="__('Register')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
            @csrf
            <!-- Fullname -->
            <flux:input name="fullname" :label="__('Full Name')" :value="old('fullname')" type="text" required
                autofocus autocomplete="fullname" :placeholder="__('Full name')" />

            <!-- Name -->
            <flux:input name="name" :label="__('Name')" :value="old('name')" type="text" required autofocus
                autocomplete="name" :placeholder="__('Name')" />

            <!-- Email Address -->
            <flux:input name="email" :label="__('Email address')" :value="old('email')" type="email" required
                autocomplete="email" placeholder="email@example.com" />

            <!-- Password -->
            <flux:input name="password" :label="__('Password')" type="password" required autocomplete="new-password"
                :placeholder="__('Password')" viewable />

            <!-- Confirm Password -->
            <flux:input name="password_confirmation" :label="__('Confirm password')" type="password" required
                autocomplete="new-password" :placeholder="__('Confirm password')" viewable />

            <!-- Accept terms and conditions -->
            <div class="space-y-2">
                <label class="flex items-start gap-3">
                    <flux:checkbox checked disabled />

                    <span class="text-sm text-zinc-600 dark:text-zinc-300">
                        I have read and accept the
                        <a href="{{ route('terms') }}" target="_blank"
                            class="font-medium underline hover:text-zinc-900 dark:hover:text-zinc-100">
                            Terms and Conditions
                        </a>
                        and
                        <a href="{{ route('privacy') }}" target="_blank"
                            class="font-medium underline hover:text-zinc-900 dark:hover:text-zinc-100">
                            Privacy Policy
                        </a>.
                    </span>
                </label>
            </div>

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full" data-test="register-user-button">
                    {{ __('Create account') }}
                </flux:button>
            </div>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Already have an account?') }}</span>
            <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
        </div>
    </div>
</x-layouts::auth>
