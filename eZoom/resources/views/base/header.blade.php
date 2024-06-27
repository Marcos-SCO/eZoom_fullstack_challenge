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

        <article class="news-categories centralized-container" data-js="news-categories-container">
            @php
                $postTitle = 'Lorem Ipsum dolor Sit Amet Dolor lorem ipsum';

                $publicationTitle = '10 de Abril 2023';

                $containerColorDetail = 'green';
            @endphp

            <section class="news-section {{ $containerColorDetail }}" data-js="news-section">

                <div class="category-info">
                    <h3 class="category-title">Esportes</h3>
                    <p class="category-description">Lorem Ipsum dolor Sit Amet Lorem.</p>

                    @php
                        $knowMoreLink = env('WHATSAPP_ULR_MESSAGE');

                        $linkTarget = str_contains($knowMoreLink, '#') ? '_self' : '_blank';
                    @endphp
                    <a href="{!! $knowMoreLink ?? '#' !!}" target="{{ $linkTarget }}" class="action-button black">Ver
                        Todos</a>
                </div>

                <div class="cards-container">

                    <div class="owl-carousel" data-js="news-categories-slider">

                        <div class="item news-card {{ $containerColorDetail }}">
                            <a href="#" title="{{ $postTitle }}">
                                <figure class="figure-container">
                                    <img src="{{ asset('img/card/basketballPlayer.jpg') }}" alt="" loading="lazy">
                                </figure>
                            </a>
                        
                            <div class="block-container">
                                <a href="#" title="{{ $postTitle }}">
                                    <h3 class="card-title">{{ $postTitle }}</h3>
                                </a>
                        
                                <div class="card-bottom">
                                    <a href="#" title="{{ $publicationTitle }}">
                                        <p class="news-publication">
                                            {{ $publicationTitle }}
                                        </p>
                                    </a>
                        
                                    <a href="#" title="{{ $postTitle }}">
                                        <span class="arrow-svg-container">
                                            {!! \App\Helpers\SvgHelper::getSvg('arrow', 'svg/icons') !!}
                                        </span>
                                    </a>
                        
                                </div>
                            </div>
                        
                        </div>

                        <div class="item news-card {{ $containerColorDetail }}">
                            <a href="#" title="{{ $postTitle }}">
                                <figure class="figure-container">
                                    <img src="{{ asset('img/card/basketballPlayer.jpg') }}" alt="" loading="lazy">
                                </figure>
                            </a>
                        
                            <div class="block-container">
                                <a href="#" title="{{ $postTitle }}">
                                    <h3 class="card-title">{{ $postTitle }}</h3>
                                </a>
                        
                                <div class="card-bottom">
                                    <a href="#" title="{{ $publicationTitle }}">
                                        <p class="news-publication">
                                            {{ $publicationTitle }}
                                        </p>
                                    </a>
                        
                                    <a href="#" title="{{ $postTitle }}">
                                        <span class="arrow-svg-container">
                                            {!! \App\Helpers\SvgHelper::getSvg('arrow', 'svg/icons') !!}
                                        </span>
                                    </a>
                        
                                </div>
                            </div>
                        
                        </div>


                        <div class="item news-card {{ $containerColorDetail }}">
                            <a href="#" title="{{ $postTitle }}">
                                <figure class="figure-container">
                                    <img src="{{ asset('img/card/basketballPlayer.jpg') }}" alt="" loading="lazy">
                                </figure>
                            </a>
                        
                            <div class="block-container">
                                <a href="#" title="{{ $postTitle }}">
                                    <h3 class="card-title">{{ $postTitle }}</h3>
                                </a>
                        
                                <div class="card-bottom">
                                    <a href="#" title="{{ $publicationTitle }}">
                                        <p class="news-publication">
                                            {{ $publicationTitle }}
                                        </p>
                                    </a>
                        
                                    <a href="#" title="{{ $postTitle }}">
                                        <span class="arrow-svg-container">
                                            {!! \App\Helpers\SvgHelper::getSvg('arrow', 'svg/icons') !!}
                                        </span>
                                    </a>
                        
                                </div>
                            </div>
                        
                        </div>

                    </div>

                </div>

            </section>

        </article>
