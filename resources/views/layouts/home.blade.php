<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <x-welcome.navbar :show-navigation="$showNavigation" />
    <main class="w-full px-7 lg:px-48">
        {{ $slot }}
    </main>
    @if ($showContact)
        <x-welcome.contact :contact-phone="config('app.contact')" :contact-email="config('mail.from.address')" />
    @endif
    <x-welcome.footer />
</body>

</html>
