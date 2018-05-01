<div class="cubes_rows cubes_rows_2 cubes_ofis_sekreterya">
    <article class="col50 cubes_rows_2_left relax" data-rellax-speed="2">
        <div class="revealOnScroll" data-animation="slideInLeft" data-timeout="1000">
            <h2>{{ trans('themes::theme.title.secretariat concierge') }}</h2>
            <div class="cubes_rows_article">
                {!! Block::get('secretariat') !!}
            </div>
        </div>
    </article>
    <div class="col50 cube_rows_2_right relax" data-rellax-speed="1">
        <div class="revealOnScroll" data-animation="slideInRight" data-timeout="1000">
            <img src="{{ Theme::url('images/cubes_ofis_3.jpg') }}" alt="">
        </div>
    </div>
    <div class="cubes_rows_2_pattern relax" data-rellax-speed="2">
        <img src="{{ Theme::url('images/cubes_ofis_pattern_2.png') }}" alt="">
    </div>
</div>