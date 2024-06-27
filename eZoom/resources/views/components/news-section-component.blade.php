@php
    // Ensure $sectionItem is defined and not null
    if (!isset($sectionItem) || !$sectionItem) {
        return; // Return early if $sectionItem is not valid
    }

    // Extract necessary data from $sectionItem
    $categoryItem = $sectionItem['category'];

    $categoryName = $categoryItem['name'] ?? null;
    $categoryTitle = $categoryItem['title'] ?? null;
    $categoryColor = $categoryItem['color'] ?? null;
    $linkCallToAction = $categoryItem['linkCallToAction'] ?? null;

    $sectionPosts = $sectionItem['posts'] ?? [];

@endphp

<section class="news-section {{ $categoryColor }}" data-js="news-section">

    <div class="category-info">
        <h3 class="category-title">{{ $categoryName }}</h3>
        <p class="category-description">{{ $categoryTitle }}</p>

        @php
            $linkTarget = str_contains($linkCallToAction, '#') ? '_self' : '_blank';

        @endphp
        <a href="{{ $linkCallToAction }}" target="{{ $linkTarget }}" class="action-button black">Ver Todos</a>
    </div>

    <div class="cards-container">
        <div class="owl-carousel" data-js="news-categories-slider">

            @foreach ($sectionPosts as $sectionPost)
                @php
                    $sectionPostImg = $sectionPost['image'];
                    $sectionPostTitle = $sectionPost['title'];

                    $sectionPostPublicationDate = $sectionPost['publication_date'];

                @endphp

                <div class="item news-card {{ $categoryColor }}">

                    <a href="#" title="{{ $sectionPostTitle }}">
                        <figure class="figure-container">
                            <img src="{{ asset('img/card/' . $sectionPostImg) }}" alt="" loading="lazy">
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
    </div>

</section>
