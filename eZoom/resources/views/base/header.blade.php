<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'eZoom')</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

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

        <!-- Whatsapp btn -->
        <a href="{{ env('WHATSAPP_ULR_MESSAGE') }}" class="whatsappButton" target="_blank" id="whats">
            {!! \App\Helpers\SvgHelper::getSvg('whatsapp', 'svg/icons/social') !!}
        </a>

        <x-featured-cards-component />

        <x-news-categories-component />
