<section class="acilirsayfabox iletisim_box fullheight">
    <div class="iletisim_box_close">X</div>
    <section class="iletisim_box_maps">
        <!-- <a data-fancybox  href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12242.36642499608!2d32.803305!3d39.905775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5afaa8453a5959b!2sCubes+Ankara!5e0!3m2!1str!2str!4v1498229843680"></a> -->
        <!-- <div id="map-canvas"></div>-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3060.582436844926!2d32.80115433907318!3d39.905980255492324!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xc5afaa8453a5959b!2sCubes+Ankara!5e0!3m2!1str!2str!4v1498231095551" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <header class="iletisim_box_header">
        <div class="iletisim_box_header_logo"><img src="{{ Theme::url('images//iletisim_logo_cubes.png') }}" alt=""></div>
        <div class="iletisim_box_header_tel">
            <a href="tel:{{ setting('theme::phone') }}"><i class="zmdi zmdi-phone"></i> {{ setting('theme::phone') }}</a>
        </div>
        <div class="iletisim_box_header_sosyal">
            @if(setting('theme::facebook'))
                <a href="{{ setting('theme::facebook') }}" target="_blank"><i class="fa fa-facebook"></i></a>
            @endif
            @if(setting('theme::twitter'))
                <a href="{{ setting('theme::twitter') }}" target="_blank"><i class="fa fa-twitter"></i></a>
            @endif
            @if(setting('theme::instagram'))
                <a href="{{ setting('theme::instagram') }}" target="_blank"><i class="fa fa-instagram"></i></a>
            @endif
            @if(setting('theme::youtube'))
                <a href="{{ setting('theme::youtube') }}" target="_blank"><i class="fa fa-youtube"></i></a>
            @endif
            @if(setting('theme::google'))
                <a href="{{ setting('theme::google') }}" target="_blank"><i class="fa fa-google-plus"></i></a>
            @endif
            <span>/ cubesankara</span>
        </div>
        <div class="iletisim_box_header_adres">
            {{ setting('theme::address') }}
        </div>
        <div class="iletisim_bilgi_form_link"><a href="{{ route('page', 'cubes') }}" class="btn btn--default" onmouseover="mouseoversound.playclip()"><span data-hover="{{ trans('themes::theme.buttons.we call you') }}">{{ trans('themes::theme.buttons.we call you') }}</span></a></div>
    </header>
    <div class="iletisim_box_hover"></div>
</section>