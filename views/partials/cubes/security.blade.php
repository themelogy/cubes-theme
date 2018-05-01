<div class="cubes_rows cubes_rows_5 cubes_ofis_guvenlik">
    <div class="col50 cubes_rows_5_left revealOnScroll" data-animation="slideInLeft" data-timeout="1000">
        <div class="cubes_rows_5_img_1 rellax" data-rellax-speed="8">
            <img src="{{ Theme::url('images/cubes_ofis_10.jpg') }}" alt="">
        </div>
        <div class="cubes_rows_5_img_2 rellax" data-rellax-speed="600">
            <img src="{{ Theme::url('images/cubes_ofis_9.jpg') }}" alt="">
        </div>
        <div class="cubes_rows_5_cube rellax" data-rellax-speed="500">
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
        <div class="cubes_rows_5_pattern rellax" data-rellax-speed="3">
            <img src="{{ Theme::url('images/cubes_ofis_pattern_5.png') }}" alt="">
        </div>
    </div>
    <div class="col50 cubes_rows_5_right  rellax revealOnScroll" data-animation="slideInRight" data-rellax-speed="2" data-timeout="1200">
        <h2>{{ trans('themes::theme.title.security') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('security') !!}
        </div>
    </div>
</div>