<div class="hero-container centralized-container" data-js="hero-container">
    <div>
        <div class="text-container">
            <h1 class="page-title">{!! $title !!}</h1>

            <h3 class="sub-title">{!! $subtitle !!}</h3>

            @php
                $linkTarget = str_contains($knowMoreLink, '#') ? '_self' : '_blank';
            @endphp

            <a href="{!! $knowMoreLink ?? '#' !!}" target="{{ $linkTarget }}" class="action-button white">Saiba Mais</a>
        </div>
    </div>
</div>
