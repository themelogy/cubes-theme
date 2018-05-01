<div class="cubes_rows cubes_rows_4 cubes_ofis_katbahcesi">
    <div class="col50 cubes_rows_4_left rellax revealOnScroll" data-animation="slideInLeft" data-rellax-speed="5" data-timeout="1000">
        <h2>{{ trans('themes::theme.title.floor garden') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('floor-garden') !!}
        </div>
    </div>
    <div class="col50 cubes_rows_4_right revealOnScroll" data-animation="slideInRight" data-timeout="1500">
        <div class="cubes_rows_4_img1 rellax" data-rellax-speed="6" >
            <a href="{{ Theme::url('images/cubes_ofis_7_x.jpg') }}" data-fancybox><img src="{{ Theme::url('images/cubes_ofis_7.jpg') }}" alt=""></a>
        </div>
        <div class="cubes_rows_4_img2 rellax" data-rellax-speed="2" >
            <img src="{{ Theme::url('images/cubes_ofis_8.jpg') }}" alt="">
        </div>
        <div class="cubes_rows_4_cube rellax" data-rellax-speed="4" >
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
        <div class="cubes_rows_4_pattern rellax" data-rellax-speed="7" >
            <img src="{{ Theme::url('images/cubes_ofis_pattern_4.png') }}" alt="">
        </div>
    </div>
</div>