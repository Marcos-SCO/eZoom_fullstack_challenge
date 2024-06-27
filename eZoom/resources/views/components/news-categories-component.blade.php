<article class="news-categories centralized-container" data-js="news-categories-container">

    @foreach ($sectionParamsItens as $sectionItem)

        <x-news-section-component :sectionItem="$sectionItem" />
    @endforeach

</article>