<div class="cubes_rows cubes_rows_8 cubes_plus_otel">
    <div class="col50 cubes_plus_otel_left cubes_rows_8_left  rellax  revealOnScroll" data-animation="slideInLeft" data-timeout="1000"  data-rellax-speed="2">
        <h2>{{ trans('themes::theme.title.hotel') }}</h2>
        <div class="cubes_rows_article" >
            {!! Block::get('hotel') !!}
        </div>
        <div id="otel" class="cubes_plus_otel_8_pattern  rellax"  data-rellax-speed="30">
            <img src="{{ Theme::url('images/cubes_plus_pattern_8.png') }}" alt="">
        </div>
    </div>
    <div class="col50 cubes_rows_8_right  revealOnScroll" data-animation="slideInRight" data-timeout="1200">
        <div class="cubes_plus_sehirparki_img_1  rellax"  data-rellax-speed="40">
            <a href="{{ Theme::url('images/cubes_plus_12_x.jpg') }}" data-fancybox><img src="{{ Theme::url('images/cubes_plus_12.jpg') }}" alt=""></a>
        </div>
        <div class="cubes_rows_8_cube  rellax"  data-rellax-speed="20">
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
    </div>
</div>