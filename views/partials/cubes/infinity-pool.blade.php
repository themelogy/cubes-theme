<div class="cubes_rows cubes_rows_5 cubes_plus_infinity" >
    <div class="col50 cubes_rows_5_left  revealOnScroll" data-animation="slideInLeft" data-timeout="1200">
        <div class="cubes_rows_5_img_1 rellax"   data-rellax-speed="1">
            <a href="{{ Theme::url('images/cubes_plus_7_x.jpg') }}" data-fancybox><img src="{{ Theme::url('images/cubes_plus_7.jpg') }}" alt=""></a>
        </div>
        <div class="cubes_rows_5_img_2 rellax"  data-rellax-speed="2">
            <a href="{{ Theme::url('images/cubes_plus_8_x.jpg') }}" data-fancybox><img src="{{ Theme::url('images/cubes_plus_8.jpg') }}" alt=""></a>
        </div>
        <div class="cubes_rows_5_cube rellax"  data-rellax-speed="2">
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
        <div class="cubes_rows_5_pattern rellax"  data-rellax-speed="3">
            <img src="{{ Theme::url('images/cubes_ofis_pattern_5.png') }}" alt="">
        </div>
    </div>
    <div class="col50 cubes_rows_5_right  rellax  revealOnScroll" data-animation="slideInRight" data-timeout="1000"  data-rellax-speed="2" id="infinitypool">
        <h2>{{ trans('themes::theme.title.infinity pool') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('infinity-pool') !!}
        </div>
    </div>
</div>