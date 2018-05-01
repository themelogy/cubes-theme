<div class="cubes_rows cubes_rows_3 cubes_ofis_kafe">
    <div class="col50 cubes_rows_3_left revealOnScroll" data-animation="slideInLeft" data-timeout="1000">
        <div class="cubes_rows_3_img_1 rellax" data-rellax-speed="10" >
            <a href="{{ Theme::url('images/cubes_ofis_5_x.jpg') }}" data-fancybox><img src="{{ Theme::url('images/cubes_ofis_5.jpg') }}" alt=""></a>
        </div>
        <div class="cubes_rows_3_img_right">
            <div class="cubes_rows_3_img_2 rellax" data-rellax-speed="5" >
                <img src="{{ Theme::url('images/cubes_ofis_4.jpg') }}" alt="">
            </div>
            <div class="cubes_rows_3_img_3 rellax" data-rellax-speed="1" >
                <img src="{{ Theme::url('images/cubes_ofis_6.jpg') }}" alt="">
            </div>
        </div>
        <div class="cubes_rows_3_icon rellax" data-rellax-speed="3" >
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
    </div>
    <div class="col50 cubes_rows_3_right rellax revealOnScroll" data-animation="slideInRight" data-timeout="1000" data-rellax-speed="1" >
        <h2>{{ trans('themes::theme.title.cafe restaurant') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('cafe-restaurant') !!}
        </div>
        <div class="cubes_rows_3_pattern rellax" data-rellax-speed="3" >
            <img src="{{ Theme::url('images/cubes_ofis_pattern_3.png') }}" alt="">
        </div>
    </div>
</div>