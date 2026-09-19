<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="system">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'MC-App V8.0' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-sidebar />
    <main class="mc-main">
        <x-topbar :page-title="$pageTitle ?? 'Dashboard'" />
        <section class="mc-content">
            {{ $slot }}
        </section>
    </main>
</body>
</html>
