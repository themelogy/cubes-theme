<div class="cubes_rows cubes_rows_7 cubes_plus_spamasaj">
    <div class="col50 cubes_rows_7_left  revealOnScroll" data-animation="slideInLeft" data-timeout="1200">
        <div class="cubes_plus_spamasaj_img_1  rellax"  data-rellax-speed="1">
            <img src="{{ Theme::url('images/cubes_plus_10.jpg') }}" alt="">
        </div>
        <div class="cubes_plus_spamasaj_img_2  rellax"  data-rellax-speed="40">
            <img src="{{ Theme::url('images/cubes_plus_11.jpg') }}" alt="">
        </div>
        <div class="cubes_plus_spamasaj_cube rellax"  data-rellax-speed="30">
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
        <div class="cubes_plus_spamasaj_pattern  rellax"  data-rellax-speed="3">
            <img src="{{ Theme::url('images/cubes_ofis_pattern_7.png') }}" alt="">
        </div>
    </div>
    <div class="col50 cubes_rows_7_right rellax  revealOnScroll" data-animation="slideInRight" data-timeout="1000"  data-rellax-speed="10">
        <h2>{{ trans('themes::theme.title.spa massage') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('spa-massage') !!}
        </div>
    </div>
</div>