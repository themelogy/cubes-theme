<div class="cubes_rows cubes_rows_6 cubes_plus_sehirparki">
    <div class="col50 cubes_rows_6_left  rellax  revealOnScroll" data-animation="slideInLeft" data-timeout="1000"  data-rellax-speed="20">
        <h2>{{ trans('themes::theme.title.city park') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('city-park') !!}
        </div>
        <div  id="sehirparki" class="cubes_rows_6_pattern  rellax"  data-rellax-speed="20">
            <img src="{{ Theme::url('images/cubes_ofis_pattern_6.png') }}" alt="">
        </div>
    </div>
    <div class="col50 cubes_rows_6_right  revealOnScroll" data-animation="slideInRight" data-timeout="1200">
        <div class="cubes_plus_sehirparki_img_1  rellax"  data-rellax-speed="1">
            <a href="{{ Theme::url('images/cubes_plus_9_x.jpg') }}" data-fancybox><img src="{{ Theme::url('images/cubes_plus_9.jpg') }}" alt=""></a>
        </div>
        <div class="cubes_rows_6_cube  rellax"  data-rellax-speed="30">
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
    </div>
</div>