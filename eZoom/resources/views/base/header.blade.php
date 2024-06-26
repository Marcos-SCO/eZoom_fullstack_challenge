<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'eZoom')</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>

        <x-hero-component title="Novas <strong>modalidades</strong> e ampliação de <strong>horários</strong>."
        subtitle="Aulas de 45 minutos e período de teste gratuito." />
    </header>

    <main>
