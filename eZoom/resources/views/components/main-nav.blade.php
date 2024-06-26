{{-- <div class="menu-mobile menu-container">
    <div class="hamburger"></div>
    <nav class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="overlay"></div>
</div> --}}

<nav class="main-nav centralized-container">
    <div class="main-nav-container">
        <a href="#" title="eZoom" class="eZoomLogo">{!! \App\Helpers\SvgHelper::getSvg('eZoomLogo') !!}</a>

        <div class="inner-links-container menu-mobile menu-container" data-js="nav-menu-container">

            <div class="search-class mobile">
                <a href="#">{!! \App\Helpers\SvgHelper::getSvg('searchGreenIcon', 'svg/icons') !!}</a>
            </div>

            <div class="hamburger" data-js="menu-hamburger"><span class="center"></span></div>

            <div class="menu" data-js="menu-itens">

                <a href="#" title="eZoom" class="eZoomLogo mobile">{!! \App\Helpers\SvgHelper::getSvg('eZoomLogo') !!}</a>

                @if ($ulLinksArray)
                    <ul class="search-links">
                        @foreach ($ulLinksArray as $ulLinksArrayItem)
                            @php
                                $ulItemUrl = key($ulLinksArrayItem);
                                $ulItemName = $ulLinksArrayItem[$ulItemUrl];

                                $ulItemTarget = str_contains($ulItemUrl, '#') ? '_self' : '_blank';
                            @endphp

                            <li class="elementHover">
                                <a href="{{ $ulItemUrl }}" target="{{ $ulItemTarget }}">{{ $ulItemName }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <div class="search-class desktop">
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

            <div class="overlay" data-js="overlay"></div>

        </div>

    </div>


</nav>
