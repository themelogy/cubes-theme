<div class="cubes_rows cubes_rows_2 cubes_plus_tiyatro">
    <article class="col50 cubes_rows_2_left relax revealOnScroll" data-animation="slideInLeft" data-timeout="1000" data-rellax-speed="2">
        <h2>{{ trans('themes::theme.title.theater') }}</h2>
        <div class="cubes_rows_article">
            {!! Block::get('theater') !!}
        </div>
    </article>
    <div class="col50 cube_rows_2_right revealOnScroll" data-animation="slideInRight" data-timeout="600">
        <img src="{{ Theme::url('images/cubes_plus_3.jpg') }}" alt="">
        <div class="cube_rows_2_cube  relax" data-rellax-speed="3" >
            <img src="{{ Theme::url('images/cubes_ofis_cube.png') }}" alt="">
        </div>
    </div>
    <div class="cubes_rows_2_pattern relax"  data-rellax-speed="2">
        <img src="{{ Theme::url('images/cubes_ofis_pattern_2.png') }}" alt="">
    </div>
</div>