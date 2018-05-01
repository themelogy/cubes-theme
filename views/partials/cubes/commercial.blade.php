<div class="cubes_rows cubes_rows_4 cubes_plus_ticarialan">
    <div class="col50 cubes_rows_4_left rellax  revealOnScroll" data-animation="slideInLeft" data-timeout="1000"  data-rellax-speed="2" >
        <h2>{{ trans('themes::theme.title.commercial') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('commercial') !!}
        </div>
    </div>
    <div class="col50 cubes_rows_4_right  revealOnScroll" data-animation="slideInRight" data-timeout="1200">
        <div class="cubes_rows_4_img1 rellax"  data-rellax-speed="1" >
            <img src="{{ Theme::url('images/cubes_plus_5.jpg') }}" alt="">
        </div>
        <div class="cubes_rows_4_img2 rellax"  data-rellax-speed="30" >
            <img src="{{ Theme::url('images/cubes_plus_6.jpg') }}" alt="">
        </div>
        <div class="cubes_rows_4_cube rellax"  data-rellax-speed="50" >
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
        <div class="cubes_rows_4_pattern rellax"  data-rellax-speed="20" >
            <img src="{{ Theme::url('images/cubes_ofis_pattern_4.png') }}" alt="">
        </div>
    </div>
</div>