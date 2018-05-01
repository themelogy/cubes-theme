@foreach(LaravelLocalization::getSupportedLocales() as $locale => $supportedLocale)
    @if($locale != LaravelLocalization::getCurrentLocale())
        @php
            switch (Request::route()->getName()) {
                case 'page' && isset($page):
                $url = $page->present()->url($locale);
                break;
                default:
                $url = null;
                break;
            }
            $localizedUrl = LaravelLocalization::getLocalizedURL($locale, $url);
        @endphp
        <a href="{{ $localizedUrl }}" onmouseover="mouseoversound.playclip()">{{ mb_strtoupper($supportedLocale['native']) }}</a>
    @endif
@endforeach