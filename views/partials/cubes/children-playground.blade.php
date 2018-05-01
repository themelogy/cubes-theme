<div class="cubes_rows cubes_rows_9 cubes_plus_cocukoyunalani">
    <div class="col50 cubes_rows_9_left  revealOnScroll" data-animation="slideInLeft" data-timeout="1200">
        <div class="cubes_rows_9_img_1  rellax"  data-rellax-speed="1">
            <img src="{{ Theme::url('images/cubes_plus_13.jpg') }}" alt="">
        </div>
        <div class="cubes_rows_9_cube rellax"  data-rellax-speed="50">
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
    </div>
    <div class="col50 cubes_rows_9_right rellax  revealOnScroll" data-animation="slideInRight" data-timeout="1000"  data-rellax-speed="20">
        <h2>{{ trans('themes::theme.title.children playground') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('children-playground') !!}
        </div>
        <div class="cubes_rows_9_pattern  rellax"  data-rellax-speed="3">
            <img src="{{ Theme::url('images/cubes_ofis_pattern_7.png') }}" alt="">
        </div>
    </div>
</div>