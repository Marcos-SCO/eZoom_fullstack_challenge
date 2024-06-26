<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'eZoom')</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header class="main-header">
        <x-main-nav />

        <x-hero-component title="Novas <strong>modalidades</strong> e ampliação de <strong>horários</strong>."
            subtitle="Aulas de 45 minutos e período de teste gratuito."
            knowMoreLink="{{ env('WHATSAPP_ULR_MESSAGE') }}" />
    </header>

    <main>

        <article class="news-categories centralized-container" data-js="news-categories">

            <section class="news-section" data-js="news-section">

                <div class="category-info">
                    <h3 class="category-title">Esportes</h3>
                    <p class="category-description">Lorem Ipsum dolor Sit Amet Lorem.</p>

                    @php
                        $knowMoreLink = env('WHATSAPP_ULR_MESSAGE');

                        $linkTarget = str_contains($knowMoreLink, '#') ? '_self' : '_blank';
                    @endphp
                    <a href="{!! $knowMoreLink ?? '#' !!}" target="{{ $linkTarget }}" class="action-button black">Ver Todos</a>
                </div>

                <div class="news-card">
                    
                </div>
            </section>

        </article>
