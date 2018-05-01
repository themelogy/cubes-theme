<div class="cubes_rows cubes_rows_4 cubes_konut_skycubes">
    <div class="col50 cubes_rows_3_left  revealOnScroll" data-animation="slideInLeft" data-timeout="1200">
        <div class="cubes_plus_tiyatro_img_1 rellax"  data-rellax-speed="10" >
            <a href="{{ Theme::url('images/cubes_konut_4_x.jpg') }}" data-fancybox><img src="{{ Theme::url('images/cubes_konut_4.jpg') }}" alt=""></a>
        </div>
        <div class="cubes_rows_4_icon rellax"  data-rellax-speed="20" >
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
        <div class="cubes_rows_konut_4_pattern rellax"  data-rellax-speed="30" >
            <img src="{{ Theme::url('images/cubes_ofis_pattern_4.png') }}" alt="">
        </div>
    </div>
    <div class="col50 cubes_rows_3_right rellax  revealOnScroll" data-animation="slideInRight" data-timeout="1000"  data-rellax-speed="10">
        <h2>{{ trans('themes::theme.title.sky cubes') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('sky-cubes') !!}
        </div>
    </div>
</div>