<nav class="menu">

    <header class="home_site_buton_open">
        <div class="home_site_menu_buton">
            <a href="javascript:void(0)" onmouseover="mouseoversound.playclip()" class="home_sitebuton_kapat btn--close"><i class="zmdi zmdi-close"></i></a>
        </div>
        <div class="home_site_logo"><a href="{{ route('homepage') }}"><img src="{{ Theme::url('images/home_logo.png') }}" alt="{{ setting('theme::company-name') }}"></a></div>
    </header>

    {!! Menu::render('header', \Themes\Cubes\Presenter\HeaderMenuPresenter::class) !!}

    <div class="home_acilirmenu_footer">

        <div class="inline-block">
            @include('partials.components.teaser' ,['class'=>'btn btn-border btn-xs perspective teaser'])
        </div>

        <div class="home_acilirmenu_footer_bilgibuton font_soin sitelink">
            <a href="{{ route('page', 'cubes') }}" class="btn btn--default" onmouseover="mouseoversound.playclip()" id="btn_form_id"><span data-hover="{{ trans('themes::theme.buttons.we call you') }}">{{ trans('themes::theme.buttons.we call you') }}</span></a>
        </div>

        <div class="home_acilirmenu_footer_sosyal">
            @include('partials.components.social')
        </div>

        <div class="home_acilirmenu_footer_telefon">
            <a href="tel:4442287" onmouseover="mouseoversound.playclip()">{{ setting('theme::phone') }}</a>
        </div>

        <div class="home_acilirmenu_footer_diler">
            @include('partials.components.language')
        </div>

    </div>
</nav>


@include('partials.blocks.corporate')

@include('partials.blocks.project')

@include('partials.blocks.press')

@include('partials.blocks.contact')