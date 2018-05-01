<footer class="icerik_footer revealOnScroll" data-animation="fadeInUp" data-timeout="100">
    <div class="icerik_footer_center">
        <div class="icerik_footer_center_sosyal">
            @include('partials.components.social')
        </div>
        <div class="icerik_footer_center_bilgiformulink font_soin sitelink">
            <a href="{{ route('page', 'cubes') }}" class="btn btn--default" onmouseover="mouseoversound.playclip()"><span data-hover="{{ trans('themes::theme.buttons.we call you') }}">{{ trans('themes::theme.buttons.we call you') }}</span></a>
        </div>
        <div class="icerik_footer_center_tel">
            <a href="tel:4442287" onmouseover="mouseoversound.playclip()">{{ setting('theme::phone') }}</a>
        </div>
    </div>
    <div class="icerik_footer_left">
        @include('partials.components.language')
    </div>
    <div class="icerik_footer_right firmalar_logolar">
        <a class="nuhoglulogo" href="http://www.nuhogluinsaat.com.tr" target="_blank" onmouseover="mouseoversound.playclip()"><img src="{{ Theme::url('images/nuhoglu_logo.png') }}" alt="Nuhoğlu" /></a>
        <a class="dalgiclogo" target="_blank" href="http://dalgicgy.com/" onmouseover="mouseoversound.playclip()"><img src="{{ Theme::url('images/dalgic_gy_logo.png') }}" alt="Dalgıç GY" /></a>
        <a class="lejantlogo" target="_blank" href="http://www.lejant.com/" onmouseover="mouseoversound.playclip()"><img src="{{ Theme::url('images/lejant_logo.png') }}" alt="Lejant" /></a>
    </div>
</footer>