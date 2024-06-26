<nav class="main-nav centralized-container">
    <div class="main-nav-container">
        <a href="#" title="eZoom" class="eZoomLogo">{!! \App\Helpers\SvgHelper::getSvg('eZoomLogo') !!}</a>

        <div class="inner-links-container">

            @if ($ulLinksArray)
                <ul class="search-links">
                    @foreach ($ulLinksArray as $ulLinksArrayItem)
                        @php
                            $ulItemUrl = key($ulLinksArrayItem);
                            $ulItemName = $ulLinksArrayItem[$ulItemUrl];

                            $ulItemTarget = str_contains($ulItemUrl, '#') ? '_self' : '_blank';
                        @endphp

                        <li>
                            <a href="{{ $ulItemUrl }}" target="{{ $ulItemTarget }}">{{ $ulItemName }}</a>
                        </li>
                    @endforeach
                </ul>
            @endif

            <div class="search-class">
                <a href="#">{!! \App\Helpers\SvgHelper::getSvg('searchGreenIcon', 'svg/icons') !!}</a>
            </div>

            @if ($socialMediaLinks)
                <ul class="social-itens">
                    @foreach ($socialMediaLinks as $socialMediaLink)
                        @php
                            $url = key($socialMediaLink);
                            $name = $socialMediaLink[$url];

                            $path = isset($socialMediaLink['path']) ? $socialMediaLink['path'] : 'svg';

                            $socialItemTarget = str_contains($url, '#') ? '_self' : '_blank';
                        @endphp

                        <a href="{{ $url }}" target="{{ $socialItemTarget }}"
                            title="{{ $name }}">{!! \App\Helpers\SvgHelper::getSvg($name, $path) !!}</a>
                    @endforeach
                </ul>
            @endif

        </div>

    </div>
</nav>
