@php

    if (!isset($cardItens) || !$cardItens) {
        return;
    }

@endphp

<section class="featured-cards cards-container">

    <div class="owl-carousel" data-js="featured-cards">

        @foreach ($cardItens['posts'] as $cardItem)
            @php
                $sectionPostImg = $cardItem['image'];
                $sectionPostTitle = $cardItem['title'];

                $sectionPostPublicationDate = $cardItem['publication_date'];
                $cardColor = $cardItem['color'];

            @endphp

            <div class="item featured-card {{ $cardColor }}">

                <a href="#" title="{{ $sectionPostTitle }}">
                    <figure class="figure-container">
                        <img src="{{ asset('img/featured/' . $sectionPostImg) }}" alt="{{ $sectionPostImg }}"
                            loading="lazy">
                    </figure>
                </a>

                <div class="block-container">

                    <a href="#" title="{{ $sectionPostTitle }}">
                        <h3 class="card-title">{{ $sectionPostTitle }}</h3>
                    </a>

                    <div class="card-bottom">
                        <a href="#" title="{{ $sectionPostPublicationDate }}">
                            <p class="news-publication">{{ $sectionPostPublicationDate }}</p>
                        </a>

                        <a href="#" title="{{ $sectionPostTitle }}">
                            <span class="arrow-svg-container">
                                {!! \App\Helpers\SvgHelper::getSvg('arrow', 'svg/icons') !!}
                            </span>
                        </a>
                    </div>

                </div>

            </div>
        @endforeach

    </div>
</section>
