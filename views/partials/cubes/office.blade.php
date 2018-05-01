<div class="cubes_rows cubes_rows_1 cubes_ofis_details">
    <div class="cubes_ofis_article_pattern rellax" data-rellax-speed="6" ><img src="{{ Theme::url('images/cubes_ofis_pattern_1.png') }}" alt=""></div>
    <div class="col50 cubes_rows_1_left revealOnScroll" data-animation="slideInLeft" data-timeout="500">
        <div class="cubes_ofis_article_img_1 rellax" data-rellax-speed="1"><a href="{{ Theme::url('images/cubes_ofis_1_x.jpg') }}" data-fancybox><img src="{{ Theme::url('images/cubes_ofis_1.jpg') }}" alt=""></a></div>
        <div class="cubes_ofis_article_icon rellax" data-rellax-speed="8"><img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt=""></div>
        <div class="cubes_ofis_article_img_2  rellax" data-rellax-speed="40"><a href="{{ Theme::url('images/cubes_ofis_2_x.jpg') }}" data-fancybox><img src="{{ Theme::url('images/cubes_ofis_2.jpg') }}" alt=""></a></div>
    </div>
    <article class="col50 cubes_rows_1_article rellax" data-rellax-speed="6">
        <div class="cubes_rows_baslik revealOnScroll" data-animation="slideInRight" data-timeout="1000">
            <h1>{{ trans('themes::theme.title.cubes office') }}</h1>
        </div>
        <div class="cubes_rows_article_first mCustomScrollbar revealOnScroll" data-animation="slideInRight" data-timeout="1000">
            {!! Block::get('cubes-office') !!}
        </div>
    </article>
</div>