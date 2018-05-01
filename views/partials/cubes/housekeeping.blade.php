<div class="cubes_rows cubes_rows_7 cubes_ofis_kathizmetleri">
    <div class="col50 cubes_rows_7_left revealOnScroll" data-animation="slideInLeft" data-timeout="1000">
        <div class="cubes_rows_7_img_1 ">
            <img src="{{ Theme::url('images/cubes_ofis_13.jpg') }}" alt="">
        </div>
        <div class="cubes_rows_7_cube rellax" data-rellax-speed="2">
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
    </div>
    <div class="col50 cubes_rows_7_right revealOnScroll" data-animation="slideInRight" data-timeout="1200">
        <h2>{{ trans('themes::theme.title.housekeeping') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('housekeeping') !!}
        </div>
        <div class="cubes_rows_7_pattern  rellax" data-rellax-speed="3">
            <img src="{{ Theme::url('images/cubes_ofis_pattern_7.png') }}" alt="">
        </div>
    </div>
</div>