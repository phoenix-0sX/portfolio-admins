<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @php
        $title = 'Welcome';
    @endphp
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <x-welcome.navbar />
    <main class="w-full px-7 lg:px-48">
        <x-welcome.presentation />
        <x-welcome.features />
        <x-welcome.functionalities />
    </main>
    <x-welcome.contact :contact-phone="config('app.contact')" :contact-email="config('mail.from.address')" />
    <x-welcome.footer />
</body>

</html>
