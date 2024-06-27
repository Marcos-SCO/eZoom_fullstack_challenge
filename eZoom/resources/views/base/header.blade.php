<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'eZoom')</title>

    {{-- @vite(['resources/scss/app.scss', 'resources/js/app.js']) --}}
    @vite(['resources/scss/app.scss'])
</head>

<body>
    <header class="main-header">
        <x-main-nav />

        <x-hero-component title="Novas <strong>modalidades</strong> e ampliação de <strong>horários</strong>."
            subtitle="Aulas de 45 minutos e período de teste gratuito."
            knowMoreLink="{{ env('WHATSAPP_ULR_MESSAGE') }}" />
    </header>

    <main>

        <x-featured-cards-component />

        <x-news-categories-component />
