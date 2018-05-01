<div class="cubes_rows cubes_rows_2 cubes_konut_hobiodalari" id="hobiodalari">
    <article class="col50 cubes_rows_2_left relax  revealOnScroll" data-animation="slideInLeft" data-timeout="1000" data-rellax-speed="2">
        <h2>{{ trans('themes::theme.title.hobby rooms') }}</h2>
        <div class="cubes_rows_article" >
            {!! Block::get('hobby-rooms') !!}
        </div>
    </article>
    <div class="col50 cube_rows_2_right relax  revealOnScroll" data-animation="slideInRight" data-timeout="1200" data-rellax-speed="1">
        <img src="{{ Theme::url('images/cubes_konut_3.jpg') }}" alt="">
    </div>
    <div class="cubes_rows_2_pattern relax"  data-rellax-speed="2">
        <img src="{{ Theme::url('images/cubes_ofis_pattern_2.png') }}" alt="">
    </div>
</div>