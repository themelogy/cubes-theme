<div class="cubes_rows cubes_rows_3 cubes_plus_tiyatro">
    <div class="col50 cubes_rows_3_left revealOnScroll" data-animation="slideInLeft" data-timeout="1200">
        <div class="cubes_plus_tiyatro_img_1 rellax"  data-rellax-speed="1" >
            <img src="{{ Theme::url('images/cubes_plus_4.jpg') }}" alt="">
        </div>
        <div class="cubes_rows_3_icon rellax"  data-rellax-speed="20" >
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
    </div>
    <div class="col50 cubes_rows_3_right rellax  revealOnScroll" data-animation="slideInRight" data-timeout="1000"  data-rellax-speed="10" >
        <h2>{{ trans('themes::theme.title.meeting') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('meeting') !!}
        </div>
        <div class="cubes_rows_3_pattern rellax"  data-rellax-speed="30" >
            <img src="{{ Theme::url('images/cubes_ofis_pattern_3.png') }}" alt="">
        </div>
    </div>
</div>